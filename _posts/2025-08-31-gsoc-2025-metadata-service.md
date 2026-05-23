---
title: "Google Summer of Code: AI-ready Dataset Metadata as a Service"
date: 2025-08-31
permalink: /gsoc/
excerpt: "Enhancing ZOO-Project with native support for GeoCroissant metadata, enabling AI-ready geospatial datasets through Google Summer of Code 2025."
tags:
  - GSoC
  - Open Source
  - Geospatial AI
  - Data-centric AI
header:
  teaser: "https://upload.wikimedia.org/wikipedia/commons/thumb/7/7c/Google_Summer_of_Code_sun_logo_2022.svg/1280px-Google_Summer_of_Code_sun_logo_2022.svg.png"
---

<div class="project-logo-container" style="display: flex; justify-content: center; align-items: center; gap: 2.5em; margin: 2em 0; flex-wrap: wrap; background-color: #fbfbfc; padding: 1.5em; border-radius: 8px; border: 1px solid #f0f2f4;">
  <img src="https://github.com/dhruvmehtaaa/ZOO-Project/assets/64071840/e4fd1760-18b6-4524-8442-f9101f5d747d" alt="ZOO-Project" class="project-logo" style="max-height: 50px; max-width: 120px; object-fit: contain; width: auto; height: auto;">
  <img src="https://theodi.hacdn.io/media/images/Croissant-Hero2.2e16d0ba.fill-2220x904.png" alt="MLC-Croissant" class="project-logo" style="max-height: 50px; max-width: 120px; object-fit: contain; width: auto; height: auto;">
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8F73S1GJBOzavG9zSAr4sHhK1yFsf2TZHmQ&s" alt="GSoC" class="project-logo" style="max-height: 50px; max-width: 120px; object-fit: contain; width: auto; height: auto;">
  <img src="https://www.osgeo.org/wp-content/themes/roots/assets/img/logo-osgeo.svg" alt="OSGeo" class="project-logo" style="max-height: 50px; max-width: 120px; object-fit: contain; width: auto; height: auto;">
</div>

This summer, I participated as an open-source student developer in the Google Summer of Code 2025 program with the **Open Source Geospatial Foundation (OSGeo)**, working on the **ZOO-Project**. 

My project focused on developing metadata-as-a-service utilities. Specifically, it integrates **GeoCroissant** metadata, Data-Centric AI workflows, and OGC API – Processes to make Earth observation datasets highly AI-ready and standardized.

---

### Brief Description
The project aims to enhance the ZOO-Project with native support for GeoCroissant metadata, enabling AI-ready geospatial datasets. It will provide tools for metadata generation, validation, and integration with platforms like STAC, Earth Engine, and HuggingFace, along with data-centric AI workflows for improving dataset quality.

---

### State of the Project Before GSoC
While the ZOO-Project already offers solid support for OGC-compliant geoprocessing, it currently doesn't have built-in support for GeoCroissant—a metadata standard designed specifically for AI-ready geospatial datasets. There are no tools available within ZOO to help users create or validate this kind of metadata or to connect easily with existing platforms like STAC, Earth Engine, or machine learning hubs like HuggingFace and Kaggle. It also lacks workflows that can help users check the quality of their training data or fix common issues like annotation errors or bias. This project aims to fill those gaps and bring these much-needed features to the ZOO-Project.

---

### Deliverables
* **Integration of GeoCroissant metadata support** into OGC API – Processes.
* **Services for metadata generation, validation, and conversion** from STAC, Earth Engine, HuggingFace, and Kaggle.
* **REST endpoints** for metadata hosting and JSON-LD-based service chaining.
* **Implementation of Data-Centric AI workflows** using Cleanlab for label noise and bias detection.
* **Interoperability tools** for STAC, OGC TrainingDML, and MLCommons Croissant formats.
* **Full test suite**, example datasets, and usage tutorials.
* **Comprehensive documentation** and project wiki with deployment guides.

---

### Detailed Proposal
You can read our full, detailed project proposal and follow along with the source updates on the official wiki:
* [**ZOO-Project DCAI Wiki Proposal**](https://github.com/ZOO-Project/dcai/wiki)

---

### Participants
Below is the listing of the mentors and developer behind the project:

| Role | Name | GitHub Handle |
|:---|:---|:---|
| **1st Mentor** | Chetan Mahajan | [@cOsprey](https://github.com/cOsprey) |
| **2nd Mentor** | Gérald Fenoy | [@gfenoy](https://github.com/gfenoy) |
| **Student Developer** | Harsh Shinde | [@HarshShinde0](https://github.com/HarshShinde0) |
