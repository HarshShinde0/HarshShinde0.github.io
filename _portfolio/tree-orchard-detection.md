---
title: "Tree / Orchard Detection & Counting from High-Resolution Satellite Images"
excerpt: "*An end-to-end density-map regression U-Net pipeline to detect and count individual trees and orchards from high-resolution satellite imagery.*"
collection: portfolio
date: 2026-05-21
---

### Summary

<div class="project-summary" style="text-align: justify; line-height: 1.8; margin-bottom: 2em; font-size: 1.05em; color: #2c3e50;">
  <p>This project presents an end-to-end geospatial machine learning pipeline designed to detect and count individual trees and orchards in very high-resolution multispectral satellite imagery. The pipeline processes raw 4-band GeoTIFF data (Blue, Green, Red, and NIR) and utilizes a custom PyTorch U-Net architecture trained with density map regression. Instead of traditional bounding-box object detection, the approach convolves point annotations with Gaussian kernels to generate smooth density heatmaps, where pixel integration yields highly accurate counts even in complex horticultural terrains. The framework supports tile slicing (512&times;512 px), automated VOC XML-to-point-mask conversions, and full-image spatial metadata preservation for real-world environmental monitoring and sustainable agricultural planning.</p>
</div>

---

### Quick Links & Resources

[![HuggingFace Dataset](https://img.shields.io/badge/%F0%9F%A5%97%20HuggingFace-Dataset-blue.svg)](https://huggingface.co/datasets/harshinde/tree-orchard-detection)
[![GitHub](https://img.shields.io/badge/GitHub-Code-black.svg?logo=github&logoColor=white)](https://github.com/HarshShinde0/tree-orchard-detection)
[![Kaggle](https://img.shields.io/badge/Kaggle-Notebook-blue.svg?logo=kaggle&logoColor=white)](https://www.kaggle.com/code/harshshinde8/tree-orchard-detection)


---

## Model Architecture and Training

### Approach - Density Map Regression

Instead of traditional object detection, we use density map regression. Each point annotation is convolved with a Gaussian kernel (sigma = 2) to produce a smooth density map. The integral (pixel sum) of the predicted density map directly gives the tree count.

### U-Net Architecture

A lightweight 3-level U-Net built in PyTorch:
<p align="center">
  <img src="https://raw.githubusercontent.com/HarshShinde0/tree-orchard-detection/main/images/unet_architecture.png" alt="U-Net Architecture" width="600">
</p>

### Training Sample Visualization

Below is a sample from the training set showing the RGB image, ground-truth mask, and the corresponding Gaussian density map:

<p align="center">
  <img src="https://raw.githubusercontent.com/HarshShinde0/tree-orchard-detection/main/images/training%20sample.png" alt="Training Sample" width="600">
</p>

### Training Curves

<p align="center">
  <img src="https://raw.githubusercontent.com/HarshShinde0/tree-orchard-detection/main/images/training%20curves.png" alt="Training Curves" width="600">
</p>

---

## Predictions and Results

### Prediction on Train Data

<p align="center">
  <img src="https://raw.githubusercontent.com/HarshShinde0/tree-orchard-detection/main/images/pred.png" alt="Prediction on Train" width="600">
</p>

### Prediction on Test Data

<p align="center">
  <img src="https://raw.githubusercontent.com/HarshShinde0/tree-orchard-detection/main/images/pred%20on%20test.png" alt="Prediction on Test" width="600">
</p>

Each prediction panel shows:
1. **Original RGB** - the input satellite tile rendered as true-color.
2. **Predicted Density Map** - heatmap where the sum gives the predicted tree count.
3. **Overlay** - predicted density heatmap blended on top of the original image, highlighting detected tree locations.

---

## Notebooks

*Kaggle - [tree-orchard-detection](https://www.kaggle.com/code/harshshinde8/tree-orchard-detection)*

| Notebook | Description |
|----------|-------------|
| [code.ipynb](https://github.com/HarshShinde0/tree-orchard-detection/blob/main/code.ipynb) | Complete end-to-end workflow - data loading, model definition, training, evaluation, and visualization |
| [inference.ipynb](https://github.com/HarshShinde0/tree-orchard-detection/blob/main/inference.ipynb) | Load the pre-trained `best_model.pth` and run inference on any GeoTIFF - no training required |
