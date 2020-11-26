<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
<form method="POST" action="search.php">
<a href="tr.php"><h1> List of tasks </h1></a>
                    <input type="text" id="sname" name="sname" placeholder="Type the task you want to search..." /><br><br>
                    <span class="heading">Category: </span>
                    <select id="cat" name = "cat" required>
                                <option value="----">----</option>
                                <option value="Personal">Personal</option>
                                <option value="Work">Work</option>
                                <option value="Others">Others</option>
                            </select>
                    <button name="sub1" id="sub1">Search / List</button>
</body>
</html>