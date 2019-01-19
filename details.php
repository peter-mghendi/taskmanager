<?php include '_protect.php'?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ongoing Tasks</title>
    <link rel="stylesheet" href="boot/css/bootstrap.css"/>
    <link rel="stylesheet" href="boot/css/custom.css">
    <link rel="stylesheet" href="boot/css/dataTables.css"/>

</head>
<body>
<?php // session_regenerate_id(); ?>
<?php include 'nav.php' ?>
<div class="container">
    <table class="table" id="example">
        <thead>
            <tr>
                <th>TASK</th>
                <th>DESCRIPTION</th>
                <th>CREATED ON</th>
                <th>DUE ON</th>
                <th>STATUS</th>
                <th>ACTION</th>
                <th>COMPLETED</th>
            </tr>
        </thead>
        <tbody>
        <?php
        // session_start();
        // $_SESSION['names'] = $names;
        $username = $_SESSION['names'];
        include 'connect.php';
        $sql ="select * from tasks ORDER BY status DESC, date_due ASC";
        $result = mysqli_query($db,$sql); 

         /*
         $result = mysql_query("select * from tasks");
         $storeArray = Array();
         while($row = mysql_fetch_array($result, MYSQL_ASSOC))
         {$storeArray[] = $row['names'];}
         */

        while($row =mysqli_fetch_row($result) )
        {
            $id = $row[0];
            echo "<tr>";
            echo "<td>$row[1]</td>";
            echo "<td>$row[2]</td>";
            echo "<td>$row[3]</td>";
            echo "<td>$row[4]</td>";
            echo "<td>$row[5]</td>";
            echo "<td><a name='btndelete' href='_deleteongoing.php?id=$id'>DELETE</a></td>";
            echo "<td><center><input id='checkbox' name='checkbox' type='checkbox'></center></td>";
            echo "</tr>";
        }

        ?>
        </tbody>
    </table>
</div>
<link rel="stylesheet" href="boot/css/dataTables.css"/>
<script src="boot/js/jquery.min.js"></script>
<script src="boot/js/bootstrap.js"></script>
<script src="boot/js/dataTables.js"></script>
<script>
    $("#example").DataTable();
</script>
</body>
</html>