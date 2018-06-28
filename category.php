<div id="container" class="container">
<div id="container4">
	<div id="container3">
		<div id="container2">
			<div id="container1">
        <?php
        $sql = "SELECT id, category, title, post, featuredimg FROM Posts WHERE category='$category'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            $colindex = 1;
            while($row = $result->fetch_assoc()) {
                echo "<div id=\"col" . $colindex . "\"><div class=\"card\"><a href=\"" . "?post=" . $row["id"] . "\"><img src=\"" . $row["featuredimg"] . "\"></a></div></div>";
                if($colindex == 4){
                  $colindex = 1;
                }
                else{
                  $colindex++;
                }
            }
        } else {
            echo "0 results";
        }
        ?>
			</div>
		</div>
	</div>
</div>
</div>
