---
title: "Landslide Detection and Mapping Using Deep Learning Across Multi-Source Satellite Data and Geographic Regions"
collection: publications
permalink: /publication/2025-07-01-landslide-detection-mapping-deep-learning
excerpt: "A deep learning based framework for rapid and accurate landslide boundary extraction from multi-source satellite imagery across diverse geological zones."
date: 2025-07-01
venue: "arXiv preprint arXiv:2507.01123v2"
paperurl: "https://arxiv.org/abs/2507.01123v2"
citation: "Harsh Shinde, Rahul Burange, Omkar Mutyalwar. (2025). &quot;Landslide Detection and Mapping Using Deep Learning Across Multi-Source Satellite Data and Geographic Regions.&quot; <i>arXiv preprint arXiv:2507.01123v2</i>."
---

### Summary

<div class="publication-summary" style="text-align: justify; line-height: 1.8; margin-bottom: 2em; font-size: 1.05em; color: #2c3e50;">
  <p>Landslides are one of the most destructive natural hazards, causing major damage to infrastructure, the environment, and human lives. In this research, we explore how modern deep learning techniques and satellite-based remote sensing can help improve landslide detection and prediction. By combining Sentinel-2 multispectral imagery with ALOS PALSAR slope and Digital Elevation Model (DEM) data, our approach captures important environmental factors such as terrain structure, vegetation cover, and rainfall patterns that contribute to landslide events.</p>

  <p>We also compare the performance of several advanced deep learning segmentation models, including U-Net, DeepLabV3+, and ResNet, to identify the most effective method for automated landslide mapping. The goal of this work is to support the development of more reliable early warning systems, smarter disaster management strategies, and sustainable land-use planning. Our findings highlight the growing potential of AI-powered remote sensing in building scalable and accurate landslide prediction systems for real-world applications.</p>
</div>

---

### Quick Links & Resources

[![arXiv](https://img.shields.io/badge/arXiv-2507.01123v2-b31b1b.svg)](https://arxiv.org/abs/2507.01123v2)
[![arXiv-PDF](https://img.shields.io/badge/PDF-Read-red.svg?logo=adobe-acrobat-reader&logoColor=white)](https://arxiv.org/pdf/2507.01123v2)
[![GitHub](https://img.shields.io/badge/GitHub-Deepslide-black.svg?logo=github&logoColor=white)](https://github.com/HarshShinde0/Deepslide)
[![HuggingFace Space](https://img.shields.io/badge/%F0%9F%A5%97%20HuggingFace-Spaces-yellow.svg)](https://huggingface.co/spaces/harshinde/DeepSlide)

### Visual Representation
![Landslide Mapping Research Figure](/images/l4s.png)

---

### BibTeX Citation

<div class="bibtex-container" style="position: relative; background: #f8f9fa; border: 1px solid #e9ecef; border-radius: 6px; padding: 1.2em; font-family: SFMono-Regular, Consolas, 'Liberation Mono', Menlo, monospace; font-size: 0.9em; color: #212529; margin-top: 1em;">
  <button id="copy-btn" onclick="copyBibTeX()" style="position: absolute; top: 10px; right: 10px; padding: 6px 12px; font-size: 0.85em; font-weight: 500; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; border: 1px solid #ced4da; border-radius: 4px; background-color: #fff; cursor: pointer; display: inline-flex; align-items: center; gap: 6px; box-shadow: 0 1px 0 rgba(0,0,0,0.05); transition: all 0.2s ease;">
    <i class="fa fa-clipboard" id="copy-icon"></i> <span id="copy-text">Copy BibTeX</span>
  </button>
  <pre id="bibtex-block" style="margin: 0; white-space: pre-wrap; overflow-x: auto; background: transparent; border: none; padding: 0; font-family: inherit; font-size: inherit; color: inherit;">@article{shinde2025landslide,
  title={Landslide Detection and Mapping Using Deep Learning Across Multi-Source Satellite Data and Geographic Regions},
  author={Shinde, Harsh and Burange, Rahul and Mutyalwar, Omkar},
  journal={arXiv preprint arXiv:2507.01123v2},
  year={2025},
  url={https://arxiv.org/abs/2507.01123v2}
}</pre>
</div>

<script>
function copyBibTeX() {
  var copyText = document.getElementById("bibtex-block").innerText;
  navigator.clipboard.writeText(copyText).then(function() {
    var btn = document.getElementById("copy-btn");
    var icon = document.getElementById("copy-icon");
    var txt = document.getElementById("copy-text");
    
    icon.className = "fa fa-check";
    icon.style.color = "#28a745";
    txt.innerText = "Copied!";
    btn.style.backgroundColor = "#e6ffed";
    btn.style.borderColor = "#34d058";
    
    setTimeout(function() {
      icon.className = "fa fa-clipboard";
      icon.style.color = "";
      txt.innerText = "Copy BibTeX";
      btn.style.backgroundColor = "#fff";
      btn.style.borderColor = "#ced4da";
    }, 2000);
  }, function(err) {
    console.error("Could not copy text: ", err);
  });
}
</script>
