---
title: "Seasonal and Spatial Assessment of the Urban Heat Island Effect and Land Surface Temperature in Nagpur Using Landsat Remote Sensing"
collection: publications
permalink: /publication/2025-08-01-seasonal-spatial-nagpur-urban-heat-island
excerpt: "Assessing Urban Heat Island (UHI) dynamics and land surface temperatures in Nagpur across seasons using Landsat 8/9 imagery."
date: 2025-08-01
venue: "EarthArXiv preprint"
paperurl: "https://eartharxiv.org/repository/view/11264/"
citation: "Harsh Kailash Shinde, Sanjay V Balamwar, Sanskar Shete. (2025). &quot;Seasonal and Spatial Assessment of the Urban Heat Island Effect and Land Surface Temperature in Nagpur Using Landsat Remote Sensing.&quot; <i>EarthArXiv preprint</i>. https://doi.org/10.31223/X51N1N"
---

### Summary

<div class="publication-summary" style="text-align: justify; line-height: 1.8; margin-bottom: 2em; font-size: 1.05em; color: #2c3e50;">
  <p>As cities continue to expand, rising temperatures and the Urban Heat Island (UHI) effect have become major environmental concerns. In this research, we study how land surface temperatures and urban heat patterns have changed across Nagpur using Landsat 8 and Landsat 9 satellite imagery from 2023 and 2024. By analyzing thermal data from both winter (January) and summer (May) seasons, the study captures how temperature patterns vary over time and across different parts of the city.</p>

  <p>Using supervised classification techniques, we mapped different Land Use and Land Cover (LULC) categories such as built-up areas, vegetation, and open land, and examined how they influence surface temperatures. The results show clear temperature differences between urbanized and greener regions, highlighting the strong impact of rapid urban development on local climate conditions.</p>
</div>

---

### Quick Links & Resources

[![EarthArXiv](https://img.shields.io/badge/EarthArXiv-Paper-red.svg)](https://eartharxiv.org/repository/view/11264/)
[![DOI](https://img.shields.io/badge/DOI-10.31223/X51N1N-blue.svg)](https://doi.org/10.31223/X51N1N)
[![GitHub](https://img.shields.io/badge/GitHub-MRSAC-black.svg?logo=github&logoColor=white)](https://github.com/HarshShinde0/MRSAC)

---

### Visual Representation
![Nagpur Land Use Land Cover Classification](https://www.researchgate.net/publication/399057849/figure/fig1/AS:11431281812411344@1766624252682/Land-Use-Land-Cover-classification-for-Nagpur-2024_W640.jpg)

---

### BibTeX Citation

<div class="bibtex-container" style="position: relative; background: #f8f9fa; border: 1px solid #e9ecef; border-radius: 6px; padding: 1.2em; font-family: SFMono-Regular, Consolas, 'Liberation Mono', Menlo, monospace; font-size: 0.9em; color: #212529; margin-top: 1em;">
  <button id="copy-btn" onclick="copyBibTeX()" style="position: absolute; top: 10px; right: 10px; padding: 6px 12px; font-size: 0.85em; font-weight: 500; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; border: 1px solid #ced4da; border-radius: 4px; background-color: #fff; cursor: pointer; display: inline-flex; align-items: center; gap: 6px; box-shadow: 0 1px 0 rgba(0,0,0,0.05); transition: all 0.2s ease;">
    <i class="fa fa-clipboard" id="copy-icon"></i> <span id="copy-text">Copy BibTeX</span>
  </button>
  <pre id="bibtex-block" style="margin: 0; white-space: pre-wrap; overflow-x: auto; background: transparent; border: none; padding: 0; font-family: inherit; font-size: inherit; color: inherit;">@article{shinde2025seasonal,
  title={Seasonal and Spatial Assessment of the Urban Heat Island Effect and Land Surface Temperature in Nagpur Using Landsat Remote Sensing Data},
  author={Shinde, Harsh Kailash and Balamwar, Sanjay V and Shete, Sanaskar},
  year={2025},
  publisher={EarthArXiv}
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
