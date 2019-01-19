<?php include '_protect.php'?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Account Details</title>
    <link rel="stylesheet" href="boot/css/bootstrap.css"/>
    <link rel="stylesheet" href="boot/css/custom.css">
    <link rel="stylesheet" href="boot/css/dataTables.css"/>
    <!--<style type="text/css">
        td{color: #ffffff;}
    </style>-->
</head>
<body>
<?php include 'nav.php' ?>
<div class="container">
    <h2><b>Account Details</b></h2>
    <h4><b>Account Details for <?Php echo $_SESSION['names'] ?></b></h4>
    <h5>Here you can edit your email and password.</h5>
    <hr>
    <table class="table" id="example black-text">
        <thead>
        <tr>
            <th>ITEM</th>
            <th>VALUE</th>
            <th>ACTION</th>
        </thead>
        <tbody>
        <?php
        include 'connect.php';
        $sql ="select * from users WHERE names = '{$_SESSION['names']}'";
        $result = mysqli_query($db,$sql);
        while($row =mysqli_fetch_row($result) )
        {
            $id = $row[0];

            echo "<tr>";
            echo "<td>Your Name</td>";
            echo "<td>$row[1]</td>";
            echo "<td>Not Applicable</td>";
            echo "<tr>";

            echo "<tr>";
            echo "<td>Your Email</td>";
            echo "<td>$row[2]</td>";
            echo "<td><a name='btnchangemail' class='btn btn-sm btn-info' href='changemail.php?id=$id'>CHANGE</a></td>";
            echo "<tr>";

            echo "<tr>";
            echo "<td>Your Password</td>";
            echo "<td>$row[3]</td>";
            echo "<td><a name='btnchangepass' class='btn btn-sm btn-info' href='changepass.php?id=$id'>CHANGE</a></td>";
            echo "<tr>";
        }
        ?>
        </tbody>
    </table>
</div>
<script src="boot/js/jquery.min.js"></script>
<script src="boot/js/bootstrap.js"></script>
</body>
</html>