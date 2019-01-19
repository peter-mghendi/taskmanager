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
        include 'connect.php';
        $sql ="select * from tasks WHERE status='Pending' AND users = '{$_SESSION['names']}'";
        $result = mysqli_query($db,$sql);
        while($row =mysqli_fetch_row($result) )
        {
            $id = $row[0];
            echo "<tr>";
            echo "<td>$row[1]</td>";
            echo "<td>$row[2]</td>";
            echo "<td>$row[3]</td>";
            echo "<td>$row[4]</td>";
            echo "<td>$row[5]</td>";
            echo "<td><a name='btndelete' class='btn btn-sm btn-danger' href='_deleteongoing.php?id=$id'>DELETE</a></td>";
            echo "<td><a name='btnincomplete' class='btn btn-sm btn-success' href='_complete.php?id=$id'>COMPLETE</a></td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</div>
<script src="boot/js/jquery.min.js"></script>
<script src="boot/js/bootstrap.js"></script>
<script src="boot/js/dataTables.js"></script>
<script>
    $("#example").DataTable();
</script>
</body>
</html>