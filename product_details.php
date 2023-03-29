

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

<style>
h2{

 color:black;
 background-color:white;
}
p{background-color:rgba(0, 0, 0, 0.6);

}
body{
  background-color:gray;
}
.button{
  background-color: Green ;
  margin:30px;
  border-radius: 6px;
  color: white;
  padding: 10px 15px;
  display: inline-block;
  font-size: 16px;
  
}

.img{
  width:150px;
   height: 12s0px;
  
}

 </style>

<body><?php
require 'header2.php';
?>
  <form method="POST"  >
  <h2 > -Fertilizers</h2> 
  
  <button class="button" id="b2"name="disp">View Details</button>
  <img class="img" src="img/urea.jpg">
  <button class="button" id="b1"name="disp1">View Details</button>
  <img class="img" src="img/potash.jpg">
  <button class="button" id="b4"name="disp2">View Details</button>
  <img class="img" src="img/dung.jpg">
  <button class="button" id="b4"name="disp3">View Details</button>
  <img class="img" src="img/boron.jpg"><hr>
<?php
//for database connection
    require 'connec.php';
    
 //product1
    if(ISSET($_POST['disp'] )){
        $sql = "SELECT * FROM `items`where id='1'";
        $query = $connec->prepare($sql);
        $query->execute();
        while($fetch = $query->fetch()){
   
?>

<br>
<table border="5"style=background-color:white>
<th>Product Details</th>
    <tr><td >Product ID:   <input name="pid"size="50" type="text"value="<?php echo $fetch['id']?>"/></td></tr>
    <tr><td> Product Name:    <input name="pname" size="50" type="text" value="<?php echo $fetch['name']?>"/></td></tr>  
    <tr><td>Product price:      <input name="pprice" size="50" type="text" value="<?php echo$fetch['price']?>"/></td></tr>
    <tr ><td>Product Description: <input name="pdescp" size="50" type="text"value="<?php echo $fetch['description']?>"/></td>
    <tr ><td>Product Category: <input name="pdescp" size="50" type="text"value="<?php echo $fetch['category']?>"/></td>
    <br>
        </table>
<?php
    }
    }

?>
<?php
    require 'connec.php';
 //product2
    if(ISSET($_POST['disp1'] )){
        $sql = "SELECT * FROM `items`where id='2'";
        $query = $connec->prepare($sql);
        $query->execute();
        while($fetch = $query->fetch()){
?>

<br>
 <table border="3" style=background-color:white>
 <th>Product Details</th>
    <tr><td >Product ID:   <input name="pid"size="50" type="text"value="<?php echo $fetch['id']?>"/></td></tr>
    <tr><td> Product Name:    <input name="pname" size="50" type="text" value="<?php echo $fetch['name']?>"/></td></tr>  
    <tr><td>Product price:      <input name="pprice" size="50" type="text" value="<?php echo$fetch['price']?>"/></td></tr>
    <tr ><td>Product Description: <input name="pdescp" size="50" type="text"value="<?php echo $fetch['Description']?>"/></td><br>
    
        </table>
<?php
    }
    }

?>
<?php
    require 'connec.php';
 //product3
    if(ISSET($_POST['disp2'] )){
        $sql = "SELECT * FROM `items`where id='3'";
        $query = $connec->prepare($sql);
        $query->execute();
        while($fetch = $query->fetch()){
   
?>

<br>
 <table border="3" style=background-color:white>
 <th>Product Details</th>
    <tr><td >Product ID:   <input name="pid"size="50" type="text"value="<?php echo $fetch['id']?>"/></td></tr>
    <tr><td> Product Name:    <input name="pname" size="50" type="text" value="<?php echo $fetch['name']?>"/></td></tr>  
    <tr><td>Product price:      <input name="pprice" size="50" type="text" value="<?php echo$fetch['price']?>"/></td></tr>
    <tr ><td>Product Description: <input name="pdescp" size="50" type="text"value="<?php echo $fetch['Description']?>"/></td><br>
    <tr ><td>category <input  size="50" type="text"value="<?php echo $fetch['categ_id']?>"/></td><br>
        </table>
        
<?php
    }
    }

?>
<?php
    require 'connec.php';
 //product4
    if(ISSET($_POST['disp3'] )){
        $sql = "SELECT * FROM `items`where id='4'";
        $query = $connec->prepare($sql);
        $query->execute();
        while($fetch = $query->fetch()){ 
?>
<br>
 <table border="3" style=background-color:white>
    <th>Product Details</th>
    <tr><td >Product ID:        <input name="pid"size="50" type="text"value="<?php echo $fetch['id']?>"/></td></tr>
    <tr><td> Product Name:      <input name="pname" size="50" type="text" value="<?php echo $fetch['name']?>"/></td></tr>  
    <tr><td>Product price:      <input name="pprice" size="50" type="text" value="<?php echo$fetch['price']?>"/></td></tr>
    <tr><td>Product Description:<input name="pdescp" size="50" type="text"value="<?php echo $fetch['Description']?>"/></td><br>
    <tr><td>category :          <input  size="50" type="text"value="<?php echo $fetch['categ_id']?>"/></td><br>
</table>
<?php
    }
    }
?>
<form method="POST" >
  <h2 >-Seeds </h2> 
  
  <button class="button" id="b2"name="disp4">View Details</button>
  <img class="img" src="img/seed5.jpg">
  <button class="button" id="b1"name="disp5">View Details</button>
  <img class="img" src="img/seed6.jpg">
  <button class="button" id="b4"name="disp6">View Details</button>
  <img class="img" src="img/seed7.jpg">
  <button class="button" id="b4"name="disp7">View Details</button>
  <img class="img" src="img/seed4.jpg"><hr>
<?php
    require 'connec.php';
 //product3
    if(ISSET($_POST['disp4'] )){
        $sql = "SELECT * FROM `items`where id='9'";
        $query = $connec->prepare($sql);
        $query->execute();
        while($fetch = $query->fetch()){
   
?>

<br>
 <table border="3" style=background-color:white>
 <th>Product Details</th>
    <tr><td >Product ID:   <input name="pid"size="50" type="text"value="<?php echo $fetch['id']?>"/></td></tr>
    <tr><td> Product Name:    <input name="pname" size="50" type="text" value="<?php echo $fetch['name']?>"/></td></tr>  
    <tr><td>Product price:      <input name="pprice" size="50" type="text" value="<?php echo$fetch['price']?>"/></td></tr>
    <tr ><td>Product Description: <input name="pdescp" size="50" type="text"value="<?php echo $fetch['Description']?>"/></td><br>
        </table>
        
<?php
    }
    }

?>
<?php
    require 'connec.php';
 //product3
    if(ISSET($_POST['disp5'] )){
        $sql = "SELECT * FROM `items`where id='10'";
        $query = $connec->prepare($sql);
        $query->execute();
        while($fetch = $query->fetch()){
   
?>

<br>
 <table border="3" style=background-color:white>
 <th>Product Details</th>
    <tr><td >Product ID:   <input name="pid"size="50" type="text"value="<?php echo $fetch['id']?>"/></td></tr>
    <tr><td> Product Name:    <input name="pname" size="50" type="text" value="<?php echo $fetch['name']?>"/></td></tr>  
    <tr><td>Product price:      <input name="pprice" size="50" type="text" value="<?php echo$fetch['price']?>"/></td></tr>
    <tr ><td>Product Description: <input name="pdescp" size="50" type="text"value="<?php echo $fetch['Description']?>"/></td><br>
        </table>
        
<?php
    }
    }

?>
<?php
  
    require 'connec.php';
 //product4
    if(ISSET($_POST['disp6'] )){
        $sql = "SELECT * FROM `items`where id='11'";
        $query = $connec->prepare($sql);
        $query->execute();
        while($fetch = $query->fetch()){ 
?>
<br>
 <table border="3" style=background-color:white>
    <th>Product Details</th>
    <tr><td >Product ID:        <input name="pid"size="50" type="text"value="<?php echo $fetch['id']?>"/></td></tr>
    <tr><td> Product Name:      <input name="pname" size="50" type="text" value="<?php echo $fetch['name']?>"/></td></tr>  
    <tr><td>Product price:      <input name="pprice" size="50" type="text" value="<?php echo$fetch['price']?>"/></td></tr>
    <tr><td>Product Description:<input name="pdescp" size="50" type="text"value="<?php echo $fetch['Description']?>"/></td><br>
   
</table>
<?php
    }
    }
?>
<?php
    require 'connec.php';
 //product4
    if(ISSET($_POST['disp7'] )){
        $sql = "SELECT * FROM `items`where id='12'";
        $query = $connec->prepare($sql);
        $query->execute();
        while($fetch = $query->fetch()){ 
?>
<br>

 <table border="3" style=background-color:white>
    <th>Product Details</th>
    <tr><td >Product ID:        <input name="pid"size="50" type="text"value="<?php echo $fetch['id']?>"/></td></tr>
    <tr><td> Product Name:      <input name="pname" size="50" type="text" value="<?php echo $fetch['name']?>"/></td></tr>  
    <tr><td>Product price:      <input name="pprice" size="50" type="text" value="<?php echo$fetch['price']?>"/></td></tr>
    <tr><td>Product Description:<input name="pdescp" size="50" type="text"value="<?php echo $fetch['Description']?>"/></td><br>
    
</table>
<?php
    }
    }
?>
</div>
<form method="POST" >
  <h2 >-Tools </h2> 
  
  <button class="button" id="b2"name="disp8">View Details</button>
  <img class="img" src="img/tool4.webp">
  <button class="button" id="b1"name="disp9">View Details</button>
  <img class="img" src="img/tool3.webp">
  <button class="button" id="b4"name="disp10">View Details</button>
  <img class="img" src="img/tool1.webp">
  <button class="button" id="b4"name="disp11">View Details</button>
  <img class="img" src="img/tool5.webp"><hr>

<?php
    require 'connec.php';
 //product3
    if(ISSET($_POST['disp8'] )){
        $sql = "SELECT * FROM `items`where id='5'";
        $query = $connec->prepare($sql);
        $query->execute();
        while($fetch = $query->fetch()){
   
?>

<br>
 <table border="3" style=background-color:white>
 <th>Product Details</th>
    <tr><td >Product ID:   <input name="pid"size="50" type="text"value="<?php echo $fetch['id']?>"/></td></tr>
    <tr><td> Product Name:    <input name="pname" size="50" type="text" value="<?php echo $fetch['name']?>"/></td></tr>  
    <tr><td>Product price:      <input name="pprice" size="50" type="text" value="<?php echo$fetch['price']?>"/></td></tr>
    <tr ><td>Product Description: <input name="pdescp" size="50" type="text"value="<?php echo $fetch['Description']?>"/></td><br>
        </table>
        
<?php
    }
    }

?>
<?php
  
    require 'connec.php';
 //product4
    if(ISSET($_POST['disp9'] )){
        $sql = "SELECT * FROM `items`where id='6'";
        $query = $connec->prepare($sql);
        $query->execute();
        while($fetch = $query->fetch()){ 
?>
<br>
 <table border="3" style=background-color:white>
    <th>Product Details</th>
    <tr><td >Product ID:        <input name="pid"size="50" type="text"value="<?php echo $fetch['id']?>"/></td></tr>
    <tr><td> Product Name:      <input name="pname" size="50" type="text" value="<?php echo $fetch['name']?>"/></td></tr>  
    <tr><td>Product price:      <input name="pprice" size="50" type="text" value="<?php echo$fetch['price']?>"/></td></tr>
    <tr><td>Product Description:<input name="pdescp" size="50" type="text"value="<?php echo $fetch['Description']?>"/></td><br>
   
</table>
<?php
    }
    }

?>
<?php
  
  require 'connec.php';
//product4
  if(ISSET($_POST['disp10'] )){
      $sql = "SELECT * FROM `items`where id='8'";
      $query = $connec->prepare($sql);
      $query->execute();
      while($fetch = $query->fetch()){ 
?>
<br>
<table border="3" style=background-color:white>
  <th>Product Details</th>
  <tr><td >Product ID:        <input name="pid"size="50" type="text"value="<?php echo $fetch['id']?>"/></td></tr>
  <tr><td> Product Name:      <input name="pname" size="50" type="text" value="<?php echo $fetch['name']?>"/></td></tr>  
  <tr><td>Product price:      <input name="pprice" size="50" type="text" value="<?php echo$fetch['price']?>"/></td></tr>
  <tr><td>Product Description:<input name="pdescp" size="50" type="text"value="<?php echo $fetch['Description']?>"/></td><br>
 
</table>
<?php
  }
  }

?>
<?php
  
  require 'connec.php';
//product4
  if(ISSET($_POST['disp11'] )){
      $sql = "SELECT * FROM `items`where id='7'";
      $query = $connec->prepare($sql);
      $query->execute();
      while($fetch = $query->fetch()){ 
?>
<br>
<table border="3" style=background-color:white>
  <th>Product Details</th>
  <tr><td >Product ID:        <input name="pid"size="50" type="text"value="<?php echo $fetch['id']?>"/></td></tr>
  <tr><td> Product Name:      <input name="pname" size="50" type="text" value="<?php echo $fetch['name']?>"/></td></tr>  
  <tr><td>Product price:      <input name="pprice" size="50" type="text" value="<?php echo$fetch['price']?>"/></td></tr>
  <tr><td>Product Description:<input name="pdescp" size="50" type="text"value="<?php echo $fetch['Description']?>"/></td><br>
 
</table>
<?php
  }
  }

?>
   
<a href="products.php" role="button" class="button" name="insert">buy now</a>
 <br><br><br><br><br><br><br><br><br>
<footer class="footer">
               <div class="container">
                <center>
                   <p>Copyright &copy <a href="https://Agriculture.in">Agriculture</a> Store. All Rights Reserved.</p>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, consectetur!</p>
               </center>
               </div>
           </footer>
</form>
</body>
</html>