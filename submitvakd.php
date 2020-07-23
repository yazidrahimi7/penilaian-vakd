<?php
	
include ('connection.php');
session_start();

if($_POST && !empty($_POST['s1a'])) {
	
$_SESSION['s1a']=$_POST['s1a'];
$_SESSION['s1b']=$_POST['s1b'];
$_SESSION['s1c']=$_POST['s1c'];
$_SESSION['s1d']=$_POST['s1d'];
	
$_SESSION['s2a']=$_POST['s2a'];
$_SESSION['s2b']=$_POST['s2b'];
$_SESSION['s2c']=$_POST['s2c'];
$_SESSION['s2d']=$_POST['s2d'];

$_SESSION['s3a']=$_POST['s3a'];
$_SESSION['s3b']=$_POST['s3b'];
$_SESSION['s3c']=$_POST['s3c'];
$_SESSION['s3d']=$_POST['s3d'];

$_SESSION['s4a']=$_POST['s4a'];
$_SESSION['s4b']=$_POST['s4b'];
$_SESSION['s4c']=$_POST['s4c'];
$_SESSION['s4d']=$_POST['s4d'];

$_SESSION['s5a']=$_POST['s5a'];
$_SESSION['s5b']=$_POST['s5b'];
$_SESSION['s5c']=$_POST['s5c'];
$_SESSION['s5d']=$_POST['s5d'];

$_SESSION['s6a']=$_POST['s6a'];
$_SESSION['s6b']=$_POST['s6b'];
$_SESSION['s6c']=$_POST['s6c'];
$_SESSION['s6d']=$_POST['s6d'];


$_SESSION['s7a']=$_POST['s7a'];
$_SESSION['s7b']=$_POST['s7b'];
$_SESSION['s7c']=$_POST['s7c'];
$_SESSION['s7d']=$_POST['s7d'];

$_SESSION['s8a']=$_POST['s8a'];
$_SESSION['s8b']=$_POST['s8b'];
$_SESSION['s8c']=$_POST['s8c'];
$_SESSION['s8d']=$_POST['s8d'];

$_SESSION['s9a']=$_POST['s9a'];
$_SESSION['s9b']=$_POST['s9b'];
$_SESSION['s9c']=$_POST['s9c'];
$_SESSION['s9d']=$_POST['s9d'];

$_SESSION['s10a']=$_POST['s10a'];
$_SESSION['s10b']=$_POST['s10b'];
$_SESSION['s10c']=$_POST['s10c'];
$_SESSION['s10d']=$_POST['s10d'];

	
}
	if(isset($_SESSION['nama'])){
	//echo $_SESSION['username'];
	//echo '<a href="endsession.php">Logout</a>';
	}else{
		header("Location:index.php");
	}
	/*//$var_nama = $_SESSION['nama'];
	$var_jawapanv = $_SESSION['jawapanv'];
	$var_jawapana = $_SESSION['jawapana'];
	$var_jawapank = $_SESSION['jawapank'];
	$var_jawapand = $_SESSION['jawapand'];
	*/
	//insert data

echo "<center><h2>Jawapan Anda</h2><br />";
?>
<?php
	
/*if($_SESSION && !empty($_SESSION['s1a'])) {
	
	//set variable variable
	$_SESSION['s1a']=$_SESSION['s1a'];
}
	//if set, check
	if(isset($_SESSION['s1a'])){
	//echo $_SESSION['username'];
	//echo '<a href="endsession.php">Logout</a>';
	 echo"hi";
	}else{
	//	header("Location:index.php");
	echo "apo?";
	}*/

?>

<html>
<p>&nbsp;</p>
<center>
<table width="784" height="230" border="1" style="text-align:center;">
  <tr>
    <td width="182" height="27" >1</td>
    <td width="182">2</td>
    <td width="182">3</td>
    <td width="182">4</td>
    <td width="182">5</td>
  </tr>
  <tr>
   
    <td height="122">
	<?php 
	echo  $_SESSION['s1a']."<strong> K</strong>"."<br />";
	echo  $_SESSION['s1b']."<strong> A</strong>"."<br />";
	echo  $_SESSION['s1c']."<strong> V</strong>"."<br />";
	echo  $_SESSION['s1d']."<strong> D</strong>"."<br />"; 
	?>
    </td>
   
    <td>
	<?php 
	echo  $_SESSION['s2a']."<strong> A</strong>"."<br />";
	echo  $_SESSION['s2b']."<strong> V</strong>"."<br />";
	echo  $_SESSION['s2c']."<strong> D</strong>"."<br />";
	echo  $_SESSION['s2d']."<strong> K</strong>"."<br />";
	?>
    </td>
   
    <td>
	<?php 
	echo  $_SESSION['s3a']."<strong> V</strong>"."<br />";
	echo  $_SESSION['s3b']."<strong> K</strong>"."<br />";
	echo  $_SESSION['s3c']."<strong> D</strong>"."<br />";
	echo  $_SESSION['s3d']."<strong> A</strong>"."<br />";
	?>
    </td>
   
    <td>
	<?php 
	echo  $_SESSION['s4a']."<strong> A</strong>"."<br />";
	echo  $_SESSION['s4b']."<strong> D</strong>"."<br />";
	echo  $_SESSION['s4c']."<strong> K</strong>"."<br />";
	echo  $_SESSION['s4d']."<strong> V</strong>"."<br />";
	?>
    </td>
    
    <td>
	<?php 
	echo  $_SESSION['s5a']."<strong> A</strong>"."<br />";
	echo  $_SESSION['s5b']."<strong> D</strong>"."<br />";
	echo  $_SESSION['s5c']."<strong> K</strong>"."<br />";
	echo  $_SESSION['s5d']."<strong> V</strong>"."<br />";
	?>
    </td>
  </tr>
  <tr>
    <td height="27">6</td>
    <td>7</td>
    <td>8</td>
    <td>9</td>
    <td>10</td>
  </tr>
  <tr>
   
    <td height="122">
	<?php 
	echo  $_SESSION['s6a']."<strong> K</strong>"."<br />";
	echo  $_SESSION['s6b']."<strong> V</strong>"."<br />";
	echo  $_SESSION['s6c']."<strong> A</strong>"."<br />";
	echo  $_SESSION['s6d']."<strong> D</strong>"."<br />";
	?>
    </td>
   
    <td>
	<?php 
	echo  $_SESSION['s7a']."<strong> A</strong>"."<br />";
	echo  $_SESSION['s7b']."<strong> V</strong>"."<br />";
	echo  $_SESSION['s7c']."<strong> D</strong>"."<br />";
	echo  $_SESSION['s7d']."<strong> K</strong>"."<br />";
	?>
    </td>
    
    <td>
	<?php 
	echo  $_SESSION['s8a']."<strong> V</strong>"."<br />";
	echo  $_SESSION['s8b']."<strong> A</strong>"."<br />";
	echo  $_SESSION['s8c']."<strong> K</strong>"."<br />";
	echo  $_SESSION['s8d']."<strong> D</strong>"."<br />";
	?>
    </td>
  
    <td>
	<?php 
	echo  $_SESSION['s9a']."<strong> D</strong>"."<br />";
	echo  $_SESSION['s9b']."<strong> A</strong>"."<br />";
	echo  $_SESSION['s9c']."<strong> K</strong>"."<br />";
	echo  $_SESSION['s9d']."<strong> V</strong>"."<br />";
	?>
    </td>
    <td>
	<?php 
	echo  $_SESSION['s10a']."<strong> D</strong>"."<br />";
	echo  $_SESSION['s10b']."<strong> A</strong>"."<br />";
	echo  $_SESSION['s10c']."<strong> K</strong>"."<br />";
	echo  $_SESSION['s10d']."<strong> V</strong>"."<br />";
	?>
    </td>
  </tr>
</table>
<?php


	

$_SESSION['jawapanv'] = $_SESSION['s1c'] + $_SESSION['s2b'] + $_SESSION['s3a']+ $_SESSION['s4d']+ $_SESSION['s5d']+ $_SESSION['s6b']+ $_SESSION['s7b']+ $_SESSION['s8a']+ $_SESSION['s9d']+ $_SESSION['s10d']; 
    
	 $_SESSION['jawapana'] = $_SESSION['s1b'] + $_SESSION['s2a'] + $_SESSION['s3d']+ $_SESSION['s4a']+ $_SESSION['s5a']+ $_SESSION['s6c']+ $_SESSION['s7a']+ $_SESSION['s8b']+ $_SESSION['s9b']+ $_SESSION['s10b'] ;
	 
	 $_SESSION['jawapank'] = $_SESSION['s1a'] + $_SESSION['s2d'] + $_SESSION['s3b']+ $_SESSION['s4c']+ $_SESSION['s5c']+ $_SESSION['s6a']+ $_SESSION['s7d']+ $_SESSION['s8c']+ $_SESSION['s9c']+ $_SESSION['s10c']; 
	 
	  $_SESSION['jawapand'] = $_SESSION['s1d'] + $_SESSION['s2c'] + $_SESSION['s3c']+ $_SESSION['s4b']+ $_SESSION['s5b']+ $_SESSION['s6d']+ $_SESSION['s7c']+ $_SESSION['s8d']+ $_SESSION['s9a']+ $_SESSION['s10a'];
    

?>



<br>
<center>
<form action="vakd1.php" method="post">
<input type="submit" value="Back and Reset &#x21BB;" />
</form>	
<form action="submitvakd2.php" method="post">
<input type="hidden" name="jawapanv" value="<?php echo $jawapanv; ?>" />
<input type="hidden" name="jawapana" value="<?php echo $jawapana; ?>" />
<input type="hidden" name="jawapank" value="<?php echo $jawapank; ?>" />
<input type="hidden" name="jawapand" value="<?php echo $jawapand; ?>" />
<input type="submit" name="showresult" value="Show Result &rarr;"  />
</form>
<!--<button onClick="myFunction()">Print</button>-->
</center>
</center>
</html>






