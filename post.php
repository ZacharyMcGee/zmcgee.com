<div id="container" class="container">
  <?php
  $sql = "SELECT id, category, title, post, posttype, source, featuredimg FROM posts WHERE id='$post'";
  $result = $connect->query($sql);
  $row = $result->fetch_assoc();

  if($row["posttype"] == "image"){
    echo "<div class=\"image-post-container\"><div class=\"left-post\"><img src=\"" . $row["featuredimg"] . "\"></div><div class=\"right-post\"><div class=\"right-post-header\">" . $row["title"] . "</div><div class=\"right-post-body\">" . $row["post"] . "</div></div></div>";
  }
  else if($row["posttype"] == "article"){
    echo "<div class=\"article-post-container\"><div class=\"article-post\"><div class=\"article-post-header\">" . $row["title"] . " <span class=\"article-post-header-sourcelink\"><a href=\"" . $row["source"] . "\">View Source</a></span></div><div class=\"article-post-body\">" . html_entity_decode($row["post"]) . "</div></div></div>";
  }
  ?>
</div>
