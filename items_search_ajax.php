<?php
	include 'db_connection.php';
	$district = strval($_GET['district']);

	$sql = "SELECT * FROM itemdetails WHERE district = '".$district."'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	        $item_name=$row['item_name'];
	        $price=$row['price'];
	        ?>
	        <button type="button"><?php echo $item_name."-->".$price;?></button>
	        <?php
	        echo "<br>";
	    }
	} else {
	    echo "0 results";
	}

	$conn->close();
?>