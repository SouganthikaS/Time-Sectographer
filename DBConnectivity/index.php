<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Time Sectographer</title>
    <link rel="stylesheet" href="styles.css" />
</head>

<body>
    <header>
        <div>
            <h1>Time Sectographer</h1>
        </div>
    </header>
    <?php
        if(isset($_POST['sub'])){
        require('db_connect.php');
        $tname = $_POST["task"];
        $des = $_POST['des'];
        $date = $_POST['date'];
        $category = $_POST['category'];
        $date=date("Y-m-d",strtotime($date));
        $sql = "INSERT INTO `TASK_LIST` (`NAME`,`DESCRIPTION`,`DATE`,`CATEGORY`) VALUES ('$tname','$des','$date','$category');";
        if ( mysqli_query($connection,$sql)=== TRUE) {
            echo "<script type='text/javascript'>alert('Task Inserted Successfully!')';</script>";
        } else {
            echo "Error: " . $sql . "<br>";
        }
        }

    ?>
    <div class="row">
        <div class="col1">
            <div class="list-area">
                <div>
                    <form method="POST">
                    <h2>Add your tasks</h2>
                        <input type="text" id="task" name = "task" placeholder="Task Name"><br><br>
                        <textarea placeholder="Description" id="des" name = "des" required></textarea><br><br>
                        <input type="date" id="date" name = "date"><br><br>
                        <select id="category" name = "category" required>
                            <option value="Personal">Personal</option>
                            <option value="Work">Work</option>
                            <option value="Others">Others</option>
                        </select><br><br>
                        <button class = "addbutton" type="submit" id="sub" name="sub">Add Task</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col2">
            <div>
            
                <iframe src="form.php"></iframe>
            </div>
        </div>
        <footer>
            18IT008 Akash K &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; 18IT089 Souganthika S
        </footer>
    </div>
</body>

</html>