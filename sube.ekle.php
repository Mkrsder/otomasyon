<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ŞUBE EKLE</title>
<link href="css.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
#apDiv1 {
	position:absolute;
	width:305px;
	height:54px;
	z-index:1;
	left: 536px;
	top: 346px;
}
#apDiv2 {
	position:absolute;
	width:305px;
	height:20px;
	z-index:2;
	left: 537px;
	top: 287px;
}
#apDiv3 {
	position:absolute;
	width:274px;
	height:57px;
	z-index:3;
	left: 549px;
	top: 382px;
}
#apDiv4 {
	position:absolute;
	width:54px;
	height:54px;
	z-index:1;
	left: -68px;
	top: -3px;
}
#apDiv5 {
	position:absolute;
	width:54px;
	height:54px;
	z-index:1;
}
#apDiv6 {
	position:absolute;
	width:54px;
	height:54px;
	z-index:4;
	left: 550px;
	top: 275px;
}
#apDiv7 {
	position:absolute;
	width:54px;
	height:54px;
	z-index:5;
	left: 550px;
	top: 329px;
}
#apDiv8 {
	position:absolute;
	width:170px;
	height:37px;
	z-index:6;
	left: 608px;
	top: 282px;
}
#apDiv9 {
	position:absolute;
	width:173px;
	height:33px;
	z-index:7;
	left: 605px;
	top: 335px;
}
.stil1 {
	font-size: 24px;
	font-weight: bold;
}
.stil4 {color: #FFFFFF}
#apDiv10 {
	position:absolute;
	width:595px;
	height:303px;
	z-index:1;
	left: 376px;
	top: 229px;
	background-image: none;
}
.stil5 {font-size: 14px}
-->
</style>
</head>

<body>
<div class="genel"> <div class="banner stil1">
<p> <br/><br/><br>
<span class="stil2"><br/>
<span class="stil4">ŞUBE EKLE</span></span></p>
<div id="apDiv10" >
  <table width="572" height="267" border="0">
    <tr>
      <td width="112"><div align="right"><span class="stil5">Şube Ad:</span></div></td>
      <td width="300"> <form id="form1" name="form1" method="post" action="">
        <input type="text" name="sube_adi" id="sube_adi" />
         </form>  </td>
    </tr>
    <tr>
      <td><div align="right"><span class="stil5">Şube İl:</span></div></td>
      <td>
        <input type="text" name="sube_il" id="sube_il" />
        </td>
    </tr>
    <tr>
      <td class="stil5"><div align="right">Şube İlçe:</div></td>
      <td>
        <input type="text" name="sube_ilce" id="sube_ilce" />
       </td>
    </tr>
    <tr>
      <td><div align="right"><span class="stil5">Şube Telefon:</span></div></td>
      <td>
        <input type="text" name="sube_telefon" id="sube_telefon" />
          </td>
    </tr>
    <tr>
      <td><div align="right"><span class="stil5">Şube Mail</span></div></td>
      <td>
        <input type="text" name="sube_mail" id="sube_mail" />
           </td>
    </tr>
    <tr>
      <td><div align="right"><span class="stil5">Şube Adres</span></div></td>
      <td>
        <textarea name="sube_adres" id="sube_adres" cols="45" rows="5"></textarea>
   </td>
    </tr>
    <tr>
      <td colspan="2">
        
          <div align="left">
            <input type="submit" name="geri" id="geri" value=" GERİ DÖN " src="yonetici.php"/>
            <input type="submit" name="s_ekle" id="s_ekle" value="Şube Ekle" />
          </div>
      </form>      </td>
      </tr>
  </table>
  
  </div>
</div>
</div>
</body>
</html>
<?php
	//print_r ($_POST);

	
	$subeadi=$_POST['Sube_adi'];
	$subeil=$_POST['sube_il'];
	$ilce=$_POST['sube_ilce'];
	$telefon=$_POST['sube_telefon'];
	$mail=$_POST['sube_mail'];
	$adres=$_POST['sube_adres'];
	$s_ekle=$_POST['s_ekle'];
	
//echo "ssss-".$s_ekle;
	if (($_POST['s_ekle'])) {
		if ($subeadi=="" and $subeil=="" and $ilce==""and $telefon==""and $mail==""and $adres=="") {
			echo "Alanlar boş geçilemez!!";
		}else {
			include("baglanti.php");
			$sql_s_ekle="insert into sube (Sube_adi,sube_il,sube_ilce,sube_telefon,sube_mail,sube_adres) values ('$subeadi','$subeil','$ilce',$telefon,'$mail','$adres')";
			//echo $sql_ekle;
			$sorgu_ekle=mysql_query($sql_s_ekle);
			if ($sorgu_ekle) {
				
				echo "Kayıt ekleme başarılı<br>";
				echo "<a href=\"sube.ekle.php\">Liste sayfasına git</a>";
			}else {
				echo "Hata var. Tekrar dene !!!";	
			}
		}
	}
	
?>