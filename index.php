<?php
	// include('connection.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<style>
input[type=text],input[type=number]{
    
	width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    border-bottom: 2px solid blue;
}

</style>


<body><br /><h2>PENILAIAN VAKD</h2>
<br />
<br />


	
	<form action="vakd1.php" method="post">
    	<input type="text" required title="Nama required" placeholder="Nama" name="nama"><br />

        <input type="number" required title="IC No. required" placeholder="IC No." name="noic" >
      <br />
       <input type="number" required title="Phone No. required" placeholder="Phone No. (60123456789)" min="0" name="notel" >
<br /><br />


        <button id="submit" name="submit">Submit</button>
    </form>



</body>
</html>