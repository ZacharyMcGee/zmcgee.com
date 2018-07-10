<div id="container" class="container">
  <?php
  $sql = "SELECT id, category, title, post, featuredimg FROM Posts WHERE id='$post'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  echo "<div class=\"image-post\"><img src=\"" . $row["featuredimg"] . "\"></div>";
  ?>
</div>
