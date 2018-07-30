<div id="container" class="container">
  <?php
  $sql = "SELECT id, category, title, post, posttype, featuredimg FROM Posts WHERE id='$post'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();

  if($row["posttype"] == "image"){
    echo "<div class=\"post-container\"><div class=\"left-post\"><img src=\"" . $row["featuredimg"] . "\"></div><div class=\"right-post\"><div class=\"right-post-header\">" . $row["title"] . "</div><div class=\"right-post-body\">" . $row["post"] . "</div></div></div>";
  }
  else if($row["posttype"] == "article"){
    echo "<div class=\"post-container\"><div class=\"article-post\"><div class=\"article-post-header\">article" . $row["title"] . "</div><div class=\"article-post-body\">" . $row["post"] . "</div></div></div>";
  }
  ?>
</div>
