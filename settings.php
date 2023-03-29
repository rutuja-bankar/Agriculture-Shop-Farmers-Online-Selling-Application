<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Agriculture Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
            <?php 
               require 'header.php';
            ?>
            <br>

<?php
include_once 'connection.php';
$result = mysqli_query($con,"SELECT * FROM users_items");
?>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<center><h3 style="background-color:green; color:white;">Sales Report</h3></center><br>
<center>
    <table class='table table-bordered table-striped'style="padding: left 40px;">
    <tbody>
<tr>
<th>Id</th>
<th>User id</th>
<th>Item id </th>
<th>Status </th>
</tr>
<?php
$i=2;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $row["id"]; ?></td>
<td><?php echo $row["user_id"]; ?></td>
<td><?php echo $row["item_id"]; ?></td>
<td><?php echo $row["status"]; ?></td>
</tr>
<?php
$i++;
}
?>
</tbody>
</table>
</center>
<?php
}
else{
echo "No result found";
}
?>
<br><br><br><br><br>
<footer class="footer">
               <div class="container">
                <center>
                   <p>Copyright &copy <a href="https://Agriculture.in">Agriculture</a> Store. All Rights Reserved.</p>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, consectetur!</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>