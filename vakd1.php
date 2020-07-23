<?php
// include ('connection.php');
// session_start();

// if($_POST && !empty($_POST['nama'])) {
	
// 	//set variable
// 	$_SESSION['nama']=$_POST['nama'];
// 	$_SESSION['noic']=$_POST['noic'];
// 	$_SESSION['notel']=$_POST['notel'];
// }
// 	//if set, check
// 	if(isset($_SESSION['nama'])&&($_SESSION['noic'])&&($_SESSION['notel'])){
// 	//echo $_SESSION['username'];
// 	//echo '<a href="endsession.php">Logout</a>';
// 	}else{
// 		header("Location:index.php");
// 	}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />


<script language="JavaScript">

//next previous button
var currentLayer = 'page1';
function showLayer(lyr){
	hideLayer(currentLayer);
	document.getElementById(lyr).style.visibility = 'visible';
	currentLayer = lyr;
	
	
}

function hideLayer(lyr){
	document.getElementById(lyr).style.visibility = 'hidden';
}
  

//disable selected option

function handleSelection(source, 
s1a,s1b,s1c,s1d, 
s2a,s2b,s2c,s2d, 
s3a,s3b,s3c,s3d ,
s4a,s4b,s4c,s4d, 
s5a,s5b,s5c,s5d,
s6a,s6b,s6c,s6d, 
s7a,s7b,s7c,s7d, 
s8a,s8b,s8c,s8d, 
s9a,s9b,s9c,s9d,
s10a,s10b,s10c,s10d) {

    source.options[source.selectedIndex].disabled=true;
    s1a.options[source.selectedIndex].disabled=true;
    s1b.options[source.selectedIndex].disabled=true;
    s1c.options[source.selectedIndex].disabled=true;
    s1d.options[source.selectedIndex].disabled=true;
} 
</script>


          
	


   


<style>
.button{
	background-color: #3366ff;
    color: white;
    padding: 7px 17px;
	padding-bottom: 7px;
	padding-top: 7px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
	border-radius: 10%;	
}

.page {
	position: absolute;
	top: 10;
	left: 100;
	visibility: hidden;
}

div {
	width: 520px;
	height: 585px;
	position: absolute;
	top: 0;
	bottom: -450px;
	left: 50px;
	right: 0;
	margin: auto;
}
</style>
<title>PENILAIAN VAKD</title>
</head>

<body>


          
<center>

<h2>PENILAIAN VAKD</h2>

<table border="1">
<tr>
<th>
	<p>Dari skala 1 hingga 4</p>
</th>
</tr>

<tr>
<td>
	<p><strong>&nbsp; 4</strong> - Paling banyak menggambarkan diri anda</p>
    <p><strong>&nbsp; 3</strong> - Menggambarkan diri anda </p>
    <p><strong>&nbsp; 2</strong> - Skala sederhana tentang gambaran diri anda &nbsp;</p>
    <p><strong>&nbsp; 1</strong> - Paling sedikit menggambarkan diri anda</p>
</td></tr>
</table>

<form id="multiForm" name="multiForm" action="submitvakd.php" method="POST" onsubmit="showValues(this)">

  <div id="page1" class="page" style="visibility:visible; text-align:left;">
    <h4>Sila jawab soalan dibawah dengan merujuk kepada skala di atas.</h4>
      <p>1. Saya membuat keputusan yang penting berdasarkan :</p>
      
      <table><tr>
      <td>
    
      <select name="s1a" id="s1a" onchange="handleSelection(this, s1b,s1c,s1d)" required>
            <option selected="selected" disabled="disabled" value="">-</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
          </select>
    
         
         
        Gerak hati dan suasana yang tenang</td>
          </tr>
          
      <tr>
          <td>  <select name="s1b" id="s1b" onchange="handleSelection(this, s1a,s1c,s1d)" required>
            <option selected="selected" disabled="disabled">-</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
          </select>
         
         
          
          Bagaimana idea tersebut diperdengarkan kepada saya </td>
        </tr>
           
         <tr>
          <td> <select name="s1c" id="s1c" onchange="handleSelection(this, s1a,s1b,s1d)" required>
            <option selected="selected" disabled="disabled">-</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
          </select>
        
          
          
        
         Bagaimana saya melihat sesuatu perkara  </td>
        </tr>
        <tr>
          <td>   <select name="s1d" id="s1d" onchange="handleSelection(this, s1a,s1b,s1c)" required>
            <option selected="selected" disabled="disabled">-</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
          </select>
          Kajian yang pandangan yang tepat terhadap sesuatu perkara
          
          </td>
        </tr>
    </table>
          

          
      <p>2. Apabila berlaku perselisihan pendapat, saya banyak dipengaruhi oleh :</p>
    
          <table><tr>
      <td>  <select name="s2a" onchange="handleSelection(this, s2b,s2c,s2d)" id="s2a" required>
            <option selected="selected" disabled="disabled">-</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
          </select> Intonasi bunyi dan kelantangan suara daripada orang lain</td>
          </tr>
        <tr>
          <td><select name="s2b" onchange="handleSelection(this, s2a,s2c,s2d)" id="s2b" required> 
            <option selected="selected" disabled="disabled">-</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
          </select>
           Bagaimana saya melihat dari sudut pandangan berbeza orang lain
         </td>
          </tr>
        <tr>
          <td> <select name="s2c" onchange="handleSelection(this, s2a,s2b,s2d)" id="s2c" required>
            <option selected="selected" disabled="disabled">-</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
          </select>
          Pendapat yang logik dan rasional daripada orang lain </td>
          </tr>
        <tr>
          <td><select name="s2d" onchange="handleSelection(this, s2a,s2c,s2b)" id="s2d" required>
            <option selected="selected" disabled="disabled">-</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
          </select>
          Sensitivi orang terhadap perasaan saya
          
          </td>
          </tr>
          </table>
          
      
   

      <p>3. Apabila berkomunikasi dengan orang lain, apa yang paling penting pada saya ialah :</p>
      <table><tr>
      <td>    
      <select name="s3a" onchange="handleSelection(this, s3b,s3c,s3d)" id="s3a" required>
            <option selected="selected" disabled="disabled">-</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
          </select> Bagaimana penampilan saya dan imej yang saya tonjolkan
        </td>
          </tr>
        <tr>
          <td><select name="s3b" onchange="handleSelection(this, s3a,s3c,s3d)" id="s3b" required>
            <option selected="selected" disabled="disabled">-</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
          </select>
          Berkongsi perasaan dan pengalaman saya
          </td>
        </tr>
        <tr>
          <td><select name="s3c" onchange="handleSelection(this, s3b,s3a,s3d)" id="s3c" required>
            <option selected="selected" disabled="disabled">-</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
          </select>
          Apabila apa yang saya cakap difahami orang lain
          </td>
        </tr>
        <tr>
          <td><select name="s3d" onchange="handleSelection(this, s3b,s3c,s3a)" id="s3d" required>
            <option selected="selected" disabled="disabled">-</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
          </select>
          Apabila apa yang saya cakap ini didengari
          <br /><br /><center>
      <input type="button" id="C1" value="Continue" onClick="showLayer('page2')" class="button"></center></td>
        </tr>
    </table>
  </div>
    
<!-- <a href="#" class="previous round">&laquo;</a> -->









  <div id="page2" class="page" style="text-align:left;">
    
     <table>  <p>4. Apabila seseorang menanyakan saya soalan yang penting, saya biasanya :</p>
    </td>
          </tr>
        <tr>
          <td>  <select name="s4a" onchange="handleSelection(this, s4b,s4c,s4d)" id="s4a" required>
            <option selected="selected" disabled="disabled">-</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
          </select></td><td>Mendengar dengan penuh perhatian, dan bertanyakan soalan supaya saya lebih faham
     </td>
       </tr>
        <tr>
          <td>     <select name="s4b"  onchange="handleSelection(this, s4a,s4c,s4d)" id="s4b" required>
            <option selected="selected" disabled="disabled">-</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
          </select></td><td>
          Memerlukan masa untuk fikirkan semula dan menyusun perkataan dengan betul sebelum menjawab
       </td>
       </tr>
        <tr>
          <td>   <select name="s4c" onchange="handleSelection(this, s4b,s4d,s4a)" id="s4c"  required>
            <option selected="selected" disabled="disabled">-</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
          </select></td><td>
          Menghargai sekiranya diberikan masa untuk mencari jawapan yang diperlukan
      </td>
       </tr>
        <tr>
          <td>    <select name="s4d"  onchange="handleSelection(this, s4b,s4c,s4a)" id="s4d" required>
            <option selected="selected" disabled="disabled">-</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
          </select></td><td>
          Menjawab dengan cepat melalui gambaran saya
       </td>
       </tr>
    </table>   
     <p>5. Saya menganggap diri saya :</p>
      <table><tr>
      <td> 
    </td>
          </tr>
        <tr>
          <td>   <select name="s5a" onchange="handleSelection(this, s5b,s5c,s5d)" id="s5a" required>
            <option selected="selected" disabled="disabled">-</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
          </select>
          Peka terhadap bunyi sekeliling saya
       </td>
      </tr>
        <tr>
          <td>    <select name="s5b"  onchange="handleSelection(this, s5d,s5c,s5a)" id="s5b" required>
            <option selected="selected" disabled="disabled">-</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
          </select>
          Mampu memahami suatu fakta dan data dengan mudah
       </td>
      </tr>
        <tr>
          <td>    <select name="s5c" onchange="handleSelection(this, s5b,s5d,s5a)" id="s5c" required>
            <option selected="selected" disabled="disabled">-</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
          </select>
          Sensitif anda fleksibel dalam perhubungan
       </td>
      </tr>
        <tr>
          <td>    <select name="s5d" onchange="handleSelection(this, s5b,s5c,s5a)" id="s5d" required>
            <option selected="selected" disabled="disabled">-</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
          </select>
          Kreatif dan mampu menangani informasi yang banyak dengan cepat
        </td>
      </tr>
    </table> 
          
           
      <p>6. Orang mengenali saya dengan baik apabila :</p>
     <table>
        <tr>
          <td> <select name="s6a" onchange="handleSelection(this, s6b,s6c,s6d)" id="s6a" required>
            <option selected="selected" disabled="disabled">-</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
          </select></td><td>
          Boleh mengaitkan bagaimana perasaan saya
     </td>
       </tr>
        <tr>
          <td>     <select name="s6b" onchange="handleSelection(this, s6d,s6c,s6a)" id="s6b" required>
            <option selected="selected" disabled="disabled">-</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
          </select></td><td>
          Boleh melihat dari sudut perspektif saya
     </td>
       </tr>
        <tr>
          <td>     <select name="s6c" onchange="handleSelection(this, s6b,s6a,s6d)" id="s6c" required>
            <option selected="selected" disabled="disabled">-</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
          </select></td><td>
          Mendengar dengan penuh perhatian kepada apa yang saya katakan dan bagaimana ia diperdengarkan
    </td>
       </tr>
        <tr>
          <td>      <select name="s6d" onchange="handleSelection(this, s6b,s6c,s6a)" id="s6d" required>
            <option selected="selected" disabled="disabled">-</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
          </select></td><td>
          Menunjukkan minat dalam memahami komunikasi saya
          <br /><center></td>
       </tr>
    </table> <center><br />
<input type="button" id="B1" value="Go Back" onclick="showLayer('page1')" class="button">
<input type="button" id="C2" value="Continue" onclick="showLayer('page3')" class="button"></center>

</div>







    <div id="page3" class="page" style="text-align:left;">
    
       <p>7. Apabila bekerja dengan orang lain, saya :</p>
    <table>
        <tr>
          <td> <select name="s7a" onchange="handleSelection(this, s7b,s7c,s7d)" id="s7a" required>
            <option selected="selected" disabled="disabled">-</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
          </select></td><td>
          Memperbaiki proses tersebut dengan idea saya
          </td>
    </td>
      </tr>
        <tr>
          <td>   <select name="s7b" onchange="handleSelection(this, s7d,s7c,s7a)" id="s7b" required>
            <option selected="selected" disabled="disabled">-</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
          </select></td><td>Lebih suka menjadi sebahagian daripada visi dan perancangan proses tersebut
          
       </td>
      </tr>
        <tr>
          <td>   <select name="s7c" onchange="handleSelection(this, s7a,s7b,s7d)" id="s7c" required>
            <option selected="selected" disabled="disabled">-</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
          </select></td><td>
          Lebih suka merancang dan menyusun sesuatu perkara mengikut turutan
       </td>
      </tr>
        <tr>
          <td>   <select name="s7d" onchange="handleSelection(this, s7b,s7c,s7a)" id="s7d" required>
            <option selected="selected" disabled="disabled">-</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
          </select></td><td>
          Lebih suka membantu dalam membina hubungan yang baik dan kukuh</td>
      </tr>
      </table>
         
      <p>8. Apabila menerangkan sesuatu perkara kepada saya :</p>
     <table>
        <tr>
          <td>  
      <select name="s8a" onchange="handleSelection(this, s8b,s8c,s8d)" id="s8a" required>
            <option selected="selected" disabled="disabled">-</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
          </select></td><td>
          Menunjukkan kepada saya dan menjelaskan perkara itu
       </td></td>
       </tr>
        <tr>
          <td>  <select name="s8b" onchange="handleSelection(this, s8d,s8c,s8a)" id="s8b" required>
            <option selected="selected" disabled="disabled">-</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
          </select></td><td>
          
          Saya boleh ingat dengan baik hanya dengan mendengar</td>
        
      <td>
       </tr>
        <tr>
          <td>   <select name="s8c" onchange="handleSelection(this, s8b,s8d,s8a)" id="s8c" required>
            <option selected="selected" disabled="disabled">-</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
          </select></td><td>
          Menulis penerangan lebih membantu saya mudah mengaitkan sesuatu perkara
          
        </td>
       </tr>
        <tr>
          <td>   <select name="s8d" onchange="handleSelection(this, s8b,s8c,s8a)" id="s8d" required>
            <option selected="selected" disabled="disabled">-</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
          </select></td><td>
          
          Membentangkan fakta dan logik lebih membantu saya untuk faham sesuatu perkara </td>
       </tr>
      </table>
          
      <p>9. Dalam situasi yang tertekan, saya tercabar apabila :</p>
      <table>
        <tr>
          <td>
      <select name="s9a" onchange="handleSelection(this, s9b,s9c,s9d)" id="s9a" required>
            <option selected="selected" disabled="disabled">-</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
          </select></td><td>
          Mempercayai orang, situasi atau konsep
          </td>
        </td>
        </tr>
        <tr>
          <td>   <select name="s9b" onchange="handleSelection(this, s9d,s9c,s9a)" id="s9b" required>
            <option selected="selected" disabled="disabled">-</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
          </select></td><td>
          Menjadi diplomatik, tegas dan berterus terang
          
        </td>
        </tr>
        <tr>
          <td>   <select name="s9c" onchange="handleSelection(this, s8b,s9d,s9a)" id="s9c" required>
            <option selected="selected" disabled="disabled">-</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
          </select></td><td>
          Memisahkan perasaan saya, daripada apa yang orang lain rasa
        </td>
        </tr>
        <tr>
          <td>   <select name="s9d" onchange="handleSelection(this, s9b,s9c,s9a)" id="s9d" required>
            <option selected="selected" disabled="disabled">-</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
          </select></td><td>
        
          Menjadi fleksibel dan mengikut plan masa
            </td>
        </tr>
      </table>
          <p>10. Saya rasa lebih mudah dan senang untuk :</p>
       <table>
        <tr>
          <td>
      <select name="s10a" onchange="handleSelection(this, s10b,s10c,s10d)" id="s10a" required>
            <option selected="selected" disabled="disabled">-</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
          </select>
          
          Menerima inspirasi secara dalaman
          
      </td>
         </tr>
        <tr>
          <td>     <select name="s10b" onchange="handleSelection(this, s10d,s10c,s10a)" id="s10b" required>
            <option selected="selected" disabled="disabled">-</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
          </select>
          
          Beritahu idea baru yang boleh ditimba
      </td>
         </tr>
        <tr>
          <td>     <select name="s10c" onchange="handleSelection(this, s10b,s10d,s10a)" id="s10c" required>
            <option selected="selected" disabled="disabled">-</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
          </select>
          Mengikut kaedah cuba dan jaya
      </td>
         </tr>
        <tr>
          <td>    
         
          <select name="s10d" onchange="handleSelection(this, s10b,s10c,s10a)" id="s10d" required>
            <option selected="selected" disabled="disabled" value="">-</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
          </select>
          
          Menyusun dan merancang pelan</td>
         </tr>
      </table>
        <center>
  <br /><input type="button" name="B3" id="B3" value="Go Back" onclick="showLayer('page2')" class="button">
<input type="submit" value="Submit" name="submit" id="button" class="button"></center></div>


</form>

</body>
</html>



