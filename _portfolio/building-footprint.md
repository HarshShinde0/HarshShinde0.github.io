---
title: "Deep Residual U-Net for Building Footprint Extraction"
excerpt: "*A reproducible PyTorch pipeline trained on the SpaceNet Rio de Janeiro dataset for extracting building footprints from high-resolution satellite imagery.*"
collection: portfolio
date: 2026-05-23
---

### Summary

<div class="project-summary" style="text-align: justify; line-height: 1.8; margin-bottom: 2em; font-size: 1.05em; color: #2c3e50;">
  <p>This project features a fully reproducible, end-to-end PyTorch deep learning pipeline designed to extract building footprints from high-resolution satellite imagery. Evaluated on the SpaceNet Rio de Janeiro dataset, the framework automates the conversion of GeoJSON building polygons into high-fidelity raster masks, trains a high-performance residual U-Net for semantic segmentation, and executes robust inference on individual image tiles as well as large-scale satellite mosaics. Designed for maximum flexibility, the entire pipeline is configuration-driven via a single YAML file, controlling all parameters from dataset splits and learning rate schedules to multi-loss weights and sliding-window mosaic inference settings.</p>
</div>

---

### Quick Links & Resources

[![HuggingFace Space](https://img.shields.io/badge/%F0%9F%A5%97%20HuggingFace-Spaces-red.svg)](https://huggingface.co/spaces/harshinde/spacenet)
[![GitHub](https://img.shields.io/badge/GitHub-Code-black.svg?logo=github&logoColor=white)](https://github.com/HarshShinde0/spacenet)
[![HuggingFace Dataset](https://img.shields.io/badge/%F0%9F%A5%97%20SpaceNet%20Rio-Dataset-yellow.svg)](https://huggingface.co/datasets/harshinde/spacenet-rio)
[![HuggingFace Models](https://img.shields.io/badge/%F0%9F%A5%97%20SpaceNet%20Models-Hub-red.svg)](https://huggingface.co/harshinde/spacenet-models)
[![TensorBoard Logs](https://img.shields.io/badge/TensorBoard-Logs-yellow.svg?logo=tensorflow&logoColor=white)](https://huggingface.co/harshinde/spacenet-models/tensorboard)

## Example Predictions

### Input Image with Ground Truth Building Mask

![Input Image and Ground Truth Building Mask](https://raw.githubusercontent.com/HarshShinde0/spacenet/main/asset/input-img%2Bgt-gt_bm.png)

### Model Segmentation Output & Heatmap

![Model Prediction and Building Mask](https://raw.githubusercontent.com/HarshShinde0/spacenet/main/asset/output.png)

---

## Model Architecture

The segmentation model is a **Residual U-Net**. The encoder extracts multi-scale spatial features, the decoder reconstructs a full-resolution mask, and skip connections preserve fine building boundaries.

![Residual U-Net Architecture](https://raw.githubusercontent.com/HarshShinde0/spacenet/main/asset/architecture.png)

## Notebooks

* [building_mask.ipynb](https://github.com/HarshShinde0/spacenet/blob/main/notebooks/building_mask.ipynb) - Building footprint rasterization.
* [model.ipynb](https://github.com/HarshShinde0/spacenet/blob/main/notebooks/model.ipynb) - U-Net architecture test and validation.
* [truth_coords.ipynb](https://github.com/HarshShinde0/spacenet/blob/main/notebooks/truth_coords.ipynb) - GeoJSON geographic coordinate alignment.
* [segmentation_on_test.ipynb](https://github.com/HarshShinde0/spacenet/blob/main/notebooks/segmentation_on_test.ipynb) - Image prediction analysis on hold-out testing data.
* [segmentation_on_mosaic.ipynb](https://github.com/HarshShinde0/spacenet/blob/main/notebooks/segmentation_on_mosaic.ipynb) - Sliding window inference over large-scale satellite mosaics.
