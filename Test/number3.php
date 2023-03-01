<!DOCTYPE html>
<html>
  
<body>
       <h3> Number 3: Input Name </h3>
        <form method="POST">
        <h4>Please enter your  Name : </h4>
        <input type="text" name="name"><br> 
        <input type="submit" value="Enter" name="submit">
    </form>
</body>
  
</html>
<?php
        if (isset($_POST['submit'])) {
      
        $name = $_POST['name'];
		if ($name == ('Alice') or $name == ('Bob')or $name == ('bob')or $name == ('alice')){
         echo "Strings match";
        echo "<h1><i> Good Morning, $name </i></h1>";
		}
		else {
		echo "<h1><i> Invalid Name Bobo </i></h1> ";
		}
		}
?>