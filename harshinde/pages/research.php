<h4>Publications</h4>

<?php
function publication_entry($item) {
  if ($item["image"] != "") {
    $img = "<img src='img/" . $item["image"] . "'  loading='lazy'>";
    $extraclass = "paper_details_withimg";
  } else {
    $img = "";
    $extraclass = "";
  }

  $author = str_replace(" ", "&nbsp;", $item["author"]);
  $author = str_replace(",&nbsp;", ", ", $author);
  $author = str_replace(",<sup>=</sup>&nbsp;", ",<sup>=</sup> ", $author);

  $links = "";
  foreach ($item["links"] as $key => $value) {
      if ($value != "") {
          $links .= "<a href='" . $value . "' class='paper_details_link' target='_blank' rel='noopener'>" . $key . "</a> ";
      } else {
          $links .= "<a href='#' class='paper_details_link' onclick='return false;'>" . $key . "</a> ";
      }
  }
  
  return "
      <div class='paper_details " . $extraclass . "'>" .
      "<div class='paper_title'>" . $item["title"] . "</div>" .
      "<span class='authors_span'>" . $item["venue"] . ";&nbsp;&nbsp;&nbsp;" . $author . "</span>" .
      "<div style='margin-top: 5px;'>" . $links . "</div>" .
      $img . 
        "<div style='margin-top: 5px;'>" . $item["abstract"] . "</div>" .
    "</div>
  ";
}
?>

<?php
    $data = json_decode(file_get_contents("publications.json"),TRUE);
    foreach ($data as &$item) {
      if ($item["type"] == "publication") {
        echo publication_entry($item);
      }
    }
?>

<br><br>
<h4>Other Projects &amp; Shared Tasks</h4>
<?php
  foreach ($data as &$item) {
    if ($item["type"] == "project" || $item["type"] == "shared_task") {
      echo publication_entry($item);
    }
  }
?>
