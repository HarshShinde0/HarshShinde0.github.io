<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='utf-8'>
  <meta http-equiv="Cache-control" content="public">
  <meta name="description"
    content="Harsh Shinde is a researcher in Machine Learning, Remote Sensing, and Geospatial AI.">
  <meta name="keywords"
    content="Harsh Shinde, machine learning, remote sensing, geospatial AI, computer vision, deep learning">
  <meta name="author" content="Harsh Shinde">

  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Merriweather&display=swap"
    rel="stylesheet">

  <link rel='stylesheet' type='text/css' href='src/style.css?v=14'>
  <link rel='icon' type='image/png' href='src/sub-pic.png'>
  <title>Harsh Shinde</title>
  <meta name="viewport" content="width=840px">

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-YOUR_NEW_ID"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-YOUR_NEW_ID');
  </script>
</head>

<body style='padding-top: 50px; padding-bottom: 50px;'>
  <div id='whole'>
    <div id='menu'>
      <img id='portrait' src='src/portrait.jpg?v=2' alt='photo of Harsh'
        style='width: 201px; min-height: 268px; border: 2px solid black; object-fit: cover;'>
      <div style="display: inline-block; vertical-align: top; margin-top: -27px;">
        <img src="src/sub-pic.png" alt="icon"
          style="height: 100px; width: 100px; border: 2px solid black; display: inline-block; vertical-align: top; margin-top: 27px; object-fit: cover;">
        <h1 style='font-size: 2em; display: inline-block; font-weight: bold; border: 2px solid black; padding: 2px;'>
          Harsh Shinde
        </h1>
        <br>
        Machine Learning &amp; Remote Sensing<br>
        Open Source Contributor, OSGeo (GSoC 2025)<br>
        <span style="font-weight: bold; ">
          B.Tech in Electronics &amp; Telecommunication
        </span>
        <br>
        <a href="mailto:harshinde.hks@gmail.com">harshinde.hks@gmail.com</a>&nbsp;
        <a href="https://scholar.google.com/citations?user=70E2Rp0AAAAJ&amp;hl=en" target="_blank" rel="noopener">Google Scholar</a>
        <br>
        <div id="navmenu" style="margin-top: 45px; margin-bottom: 50px;">
          <a href="?page=about">about</a>
          <a href="?page=research">research</a>
          <a href="?page=service">service</a>
          <a href="?page=blog">blog</a>
        </div>
      </div>
    </div>


    <div id='content' style='margin-top: 20px;'>
      <?php
      $page = "about";
      if (isset($_GET["page"])) {
        $page = $_GET["page"];
        if ($page == "teaching") {
          $page = "service";
        }
        if ($page == "typesetting" || $page == "projects") {
          $page = "blog";
        }
      }
      // check that it's an allowed page
      $allowed_pages = array("about", "research", "service", "blog");
      if (!in_array($page, $allowed_pages)) {
        $page = "about";
      }
      include("pages/" . $page . ".php");

      // highlight current menu item
      echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
          document.querySelectorAll('#navmenu a').forEach(function(element) {
          let page = element.getAttribute('href');
            if (page == '?page=" . $page . "' || (page == '?page=about' && '" . $page . "' == '')) {
              element.classList.add('active');
            }
          });
        });
      </script>";
      ?>
    </div>
</body>

</html>