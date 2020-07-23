<html><body><?php
include('connection.php');
session_start();

if(isset($_SESSION['nama'])) {
	//echo $_SESSION['username'];
	//echo '<a href="endsession.php">Logout</a>';
}else{
	echo'who are you?';	
	//header("Location:index.php");
}

$nama=$_SESSION['nama'];
$noic=$_SESSION['noic'];
$notel=$_SESSION['notel'];
$jawapanv=$_SESSION['jawapanv']; 
$jawapana=$_SESSION['jawapana']; 
$jawapank=$_SESSION['jawapank']; 
$jawapand=$_SESSION['jawapand'];

$result = mysqli_query($connection, "INSERT INTO tblvakd(nama,noic,notel,jawapanv,jawapana,jawapank,jawapand) 
VALUES ('$nama','$noic','$notel','$jawapanv','$jawapana','$jawapank','$jawapand')");
		
	//checking success or not
if ($result) {
	//echo "ok";
	
	//keluar pop up
}
else {
	echo "Problem occured! ".mysqli_error($connection);
	}

?>

<center><br>
<br>

<input type="hidden" name="txtnama" value='<?php echo $_SESSION['nama'] ?>'>
<?php
	echo "<strong>Nama : </strong>".$_SESSION['nama'];
	echo "<br>";
echo "<strong>IC : </strong>".$_SESSION['noic'];
echo "<br>";
echo "<strong>Phone no. : </strong>".$_SESSION['notel'];
echo "<br>";
?>
<br>

<table width="600" height="50" border="1" style="text-align:center;">
  <tr>
    <th>V</th>
    <td><?php echo $jawapanv; ?></td>
    <th>A</th>
    <td><?php echo $jawapana; ?></td>
    <th>K</th>
    <td><?php echo $jawapank; ?></td>
    <th>D</th>
    <td><?php echo $jawapand; ?></td>
  </tr>
</table>
<table width="100%" border="0" style="text-align:center;">
  <tr>
    <th width="50%"><img src="300x250_VARK_Eyes_Oct_27_2016-300x250.png" width="150" height="120"> </th>
    <th width="50%"><img src="300x250_VARK_Ear_Oct_27_2016-300x250.png" width="150" height="120"></th></tr><tr>
    <td style="">Like to learn through written language, such as reading and writing tasks. They remember what has been written down, even if they do not read it more than once. They like to write down directions and pay better attention to lectures if they watch them. Learners who are visual-spatial usually have difficulty with the written language and do better with charts, demonstrations, videos, and other visual materials. They easily visualize faces and places by using their imagination and seldom get lost in new surroundings.</td>
    <td>Often talk to themselves. They also may move their lips and read out loud. They may have difficulty with reading and writing tasks. They often do better talking to a colleague or a tape recorder and hearing what was said.</td>
  </tr>
  <tr>
    <th><img src="300x250_VARK_Moving_Oct_27_2016-300x250.png" width="150" height="120"></th>
    
    <th><img src="auditory-digital.png" width="200" height="120"></th>
    </tr><tr>
    <td>Do best while touching and moving. It also has two sub-channels: kinesthetic (movement) and tactile (touch). They tend to lose concentration if there is little or no external stimulation or movement. When listening to lectures they may want to take notes for the sake of moving their hands. When reading, they like to scan the material first, and then focus in on the details (get the big picture first). They typically use color high lighters and take notes by drawing pictures, diagrams, or doodling.</td>
   
    <td>Like talk to themselves too and like to make sense of things and understand them. They use a high value on logic and also like detail. They also use words which are abstract with no direct sensory link. As a result of their emotions being attached to the words that they're using to describe, they often are less emotionally attached to outcomes.</td>
  </tr>
</table>

<script>
	function myFunction()
	{
		window.print();
	}
</script>

<br>
<center><form method="post" action="endsession.php" name="formlast">
	<input type="submit" name="home" value="Home">
	<input type="submit" formaction="" onClick="myFunction()" value="Print">
    </form>
</center>
</body></html>