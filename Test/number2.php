<!DOCTYPE html>
<html>
  
<body>
       <h3> Number 2: Input Name </h3>
        <form method="POST">
        <h4>Please enter your  Name : </h4>
        <input type="text" name="name"><br> 
        <input type="submit" value="Greet me pls" name="submit">
    </form>
</body>
  
</html>
<?php
          if (isset($_POST['submit'])) {
      
        $name = $_POST['name'];
         
        echo "<h1><i> Kamusta, $name </i></h1>";
    }
?>