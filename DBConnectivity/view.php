<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
	<?php
		require('db_connect.php');
		$sql = "SELECT * FROM `TASK_LIST`";
		$result = mysqli_query($connection,$sql);
		if ($result->num_rows > 0) {
			echo "<ol>";
		// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "
                    <li>
                        <input type='checkbox'>
                        <label>" . $row["NAME"]. "</label>
                        <span>" . $row["CATEGORY"]. " Task</span>
                        <span>" . $row["DATE"]. "</span>
                        <span>" . $row["DESCRIPTION"]. "</span><br />
                    </li>";
		}
		echo "</ol>";
		} 
		else {
			echo "0 results";
		}

	?>
</body>
</html>