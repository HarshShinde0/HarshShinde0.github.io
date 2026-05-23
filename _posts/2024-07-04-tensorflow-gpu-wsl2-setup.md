---
title: "Install TensorFlow GPU on WSL2/Ubuntu 24.04 (Windows 10/11) - CUDA, cuDNN, TensorRT & PyTorch - GPU"
date: 2024-07-04
permalink: /tensorflow/
excerpt: "A complete step-by-step guide to installing TensorFlow GPU with CUDA, cuDNN, TensorRT, and PyTorch on WSL2/Ubuntu 24.04 for Windows 10/11."
tags:
  - Deep Learning
  - GPU Setup
  - CUDA
  - TensorFlow
  - PyTorch
  - WSL2
header:
  teaser: "https://www.proxpc.com/media/uploads/2024/07/10/introduction-to-pytorch-and-tensorflow.png"
---

Setting up deep learning libraries with GPU support can be tricky, especially on Windows Subsystem for Linux (WSL2). This guide outlines the exact, step-by-step commands to configure **TensorFlow GPU**, **CUDA**, **cuDNN**, **TensorRT**, and **PyTorch** on WSL2 running Ubuntu 24.04.

---

### Prerequisites
* Windows 10 (Build 19044 or higher) or Windows 11
* WSL2 installed and running Ubuntu 24.04
* NVIDIA GPU with compute capability 3.5 or higher
* Latest NVIDIA drivers installed on the Windows host

---

### Step 1: System Update
First, update your package lists, upgrade existing packages, and install essential compiler tools:

```bash
sudo apt update
sudo apt upgrade -y
sudo apt install build-essential -y
```

---

### Step 2: Install Miniconda
Miniconda is highly recommended for managing Python virtual environments safely and cleanly:

```bash
wget https://repo.anaconda.com/miniconda/Miniconda3-latest-Linux-x86_64.sh
bash Miniconda3-latest-Linux-x86_64.sh
```

---

### Step 3: Install CUDA Toolkit
Download and install the NVIDIA CUDA Toolkit (version `12.1.1` in this example):

```bash
wget https://developer.download.nvidia.com/compute/cuda/12.1.1/local_installers/cuda_12.1.1_530.30.02_linux.run
sudo sh cuda_12.1.1_530.30.02_linux.run
```

> [!NOTE]
> **Environment Setup**
> Add CUDA to your environment variables by appending these lines to your `~/.bashrc`:
> ```bash
> export PATH=/usr/local/cuda-12.1/bin${PATH:+:${PATH}}
> export LD_LIBRARY_PATH=/usr/local/cuda-12.1/lib64${LD_LIBRARY_PATH:+:${LD_LIBRARY_PATH}}
> ```

Apply the changes to your current terminal:
```bash
source ~/.bashrc
```

Configure dynamic linker run-time bindings:
1. Open `/etc/ld.so.conf` with root access and add: `/usr/local/cuda-12.1/lib64`
2. Run:
```bash
sudo ldconfig
```

Verify your CUDA installation and system paths:
```bash
echo $PATH
echo $LD_LIBRARY_PATH
sudo ldconfig -p | grep cuda
nvcc --version
```

---

### Step 4: Install cuDNN
Download cuDNN from the [NVIDIA cuDNN Archive](https://developer.nvidia.com/rdp/cudnn-archive) (requires free NVIDIA Developer account). Extract and copy the libraries to your CUDA installation directory:

```bash
tar -xvf cudnn-linux-x86_64-8.9.7.29_cuda12-archive.tar.xz
cd cudnn-linux-x86_64-8.9.7.29_cuda12-archive
sudo cp include/cudnn*.h /usr/local/cuda-12.1/include
sudo cp lib/libcudnn* /usr/local/cuda-12.1/lib64
sudo chmod a+r /usr/local/cuda-12.1/include/cudnn*.h /usr/local/cuda-12.1/lib64/libcudnn*
cd ..
```

> [!TIP]
> **Optional: Test cuDNN Installation**
> You can verify that cuDNN initializes correctly by creating a test file `test_cudnn.c`:
> ```c
> #include <cudnn.h>
> #include <stdio.h>
> 
> int main() {
>     cudnnHandle_t handle;
>     cudnnStatus_t status = cudnnCreate(&handle);
>     if (status == CUDNN_STATUS_SUCCESS) {
>         printf("cuDNN successfully initialized.\n");
>     } else {
>         printf("cuDNN initialization failed.\n");
>     }
>     cudnnDestroy(handle);
>     return 0;
> }
> ```
> Compile and run the test using:
> ```bash
> gcc -o test_cudnn test_cudnn.c -I/usr/local/cuda-12.1/include -L/usr/local/cuda-12.1/lib64 -lcudnn
> ./test_cudnn
> ```

---

### Step 5: Install TensorRT
Download the TensorRT tarball from [NVIDIA TensorRT](https://developer.nvidia.com/tensorrt/download) and install it:

```bash
tar -xzvf TensorRT-8.6.1.6.Linux.x86_64-gnu.cuda-12.0.tar.gz
sudo mv TensorRT-8.6.1.6 /usr/local/TensorRT-8.6.1
```

Update your environment variables in `~/.bashrc`:
```bash
export PATH=/usr/local/cuda-12.1/bin:/usr/local/TensorRT-8.6.1/bin:$PATH
export LD_LIBRARY_PATH=/usr/local/cuda-12.1/lib64:/usr/local/TensorRT-8.6.1/lib:$LD_LIBRARY_PATH
```

Apply the updates:
```bash
source ~/.bashrc
```

---

### Step 6: Create Conda Environment and Install TensorFlow
Create a dedicated environment for TensorFlow and install the packages:

```bash
conda create --name tf python=3.9 -y
conda activate tf
python -m pip install tensorflow[and-cuda]
```

Verify that TensorFlow is successfully detecting your GPU:
```bash
python -c "import tensorflow as tf; print(tf.config.list_physical_devices('GPU'))"
```

---

### Step 7: Install TensorRT Python Bindings
Install the wheels for TensorRT within your Conda environment to accelerate inference:

```bash
cd /usr/local/TensorRT-8.6.1/python
pip install tensorrt-8.6.1-cp39-none-linux_x86_64.whl
pip install tensorrt_dispatch-8.6.1-cp39-none-linux_x86_64.whl
pip install tensorrt_lean-8.6.1-cp39-none-linux_x86_64.whl
```

---

### Step 8: Install JupyterLab
Configure JupyterLab for your workspace:

```bash
pip install jupyterlab
jupyter lab
```

---

### Step 9: Install PyTorch with GPU Support
Install PyTorch with matched CUDA `12.1` builds:

```bash
pip install torch torchvision torchaudio --extra-index-url https://download.pytorch.org/whl/cu121
```

Verify PyTorch GPU access:
```bash
python -c "import torch; print(torch.cuda.is_available()); print(torch.cuda.get_device_name(0))"
```

---

### Troubleshooting
If you encounter any issues:
* **NVIDIA Drivers:** Ensure your NVIDIA drivers are up to date on Windows.
* **WSL2 GPU View:** Check if WSL2 can see your GPU by running `nvidia-smi` in the terminal.
* **Paths Check:** Verify environment variables: `echo $LD_LIBRARY_PATH`.
* **CUDA Version:** Make sure you're using the correct CUDA version for your GPU.

---

### Performance Tips
To optimize GPU performance:
* **TensorRT:** Use TensorRT for inference optimization.
* **Mixed Precision:** Enable mixed precision training when possible.
* **GPU Memory:** Monitor GPU memory usage with `nvidia-smi`.
* **Isolation:** Consider using Docker containers for isolated environments.
