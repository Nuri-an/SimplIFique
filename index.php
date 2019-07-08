

<html>
<head>

<script>

var imagens = ["img1.jpg", "img2.jpg", "img3.jpg", "img4.jpg", "img5.jpg"];
var abreAtual = 0;
function trocaImagem() {
abreAtual = (abreAtual + 1) % 5;
document.querySelector('.abre img').src = imagens[abreAtual];}
 setInterval(trocaImagem, 2000);

 </script>
 
	<style>
	#mostrar{
  display: none;

}

#passar_mouse:hover #mostrar{
  display:block;
   transition-duration:10s;
  }

p {
    padding-top: 15px;
       color: #FFFFFF;
}

a{
 color: #FFFFFF;
 text-decoration: none;
}

a:hover {text-decoration: none;
	color:#000;
	font-size:110%;
	}

input {
       background-color:#FFF8DC;
}

  </style>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <link rel="icon" href="logo.jpg" type="image/x-icon" />
  <title> Roni Consertos </title>

</head>

<body background="fundo1.jpg">









<center> <div style="background-color:#FFFFFF; border-radius:10px;  position:center; width:90%; height:150px; margin-top:0px;">

<table border=0 width=90%>
<tr>
<td>
<a href=index.php>
<img src="logo.jpg"   >
 </a>
</td>
<td>


  <div id="passar_mouse" style="background-color:#FF9A53; border-radius:10px;  position:center; width:150px; height:50px; margin-top:5px; " >
  <center> <p> Gerencia </p>

  <div id="mostrar" style="background-color:#FF9A53; border-radius:10px;  position: absolute; width:300px; height:150px; margin-top:5px; z-index:101;">

  <form action="verifica.php" method=post>
  <br>
  Administrador: <input type=text name=adm >
  <br> <br>
  Senha:  <input type=password name=senha>
  <br> <br> <br>
  <input type=submit value=Entrar>

  </form>

         </div>
</div>
</td>







<td>
<a href="index.php?link=2" title="Nossos consertos">
<center>  <div id="passar_mouse" style="background-color:#FF9A53; border-radius:10px;  position:left; width:150px; height:50px; margin-top:5px; ">

<p> Consertos </p>


</div>
</a>
</td>




<td>
<center>
<a href=index.php?link=3  title=" Agende o conserto de seu eletrodoméstico!">
<div id="passar_mouse" style="background-color:#FF9A53; border-radius:10px;  position:relative; width:150px; height:50px; margin-top:5px; ">

<p> Agendar </p>


</div>
</a>
</td>






<td>
<center>
<a href=index.php?link=5>
<div id="passar_mouse" style="background-color:#FF9A53; border-radius:10px;  position:relative; width:150px; height:50px;  margin-top:5px;">

<p> Sobre </p>



</div>
</a>
</td>
</tr>



</table>
</div>

<br> <br> <br>

<div class="abre" style="background-color:#FFFFFF;   border-radius:10px;  position:relative; width:80%;  z-index:100; background-color: rgba(255,255,255,0.8);">

<?php
if(!isset($_GET["link"])){
?>


 <br> <br>
 
 <table border=0 height=80%>

 <tr> <td>

<img src=img1.jpg>

 </table>  <BR> <BR>


<?php
}
?>

<?php

if(isset($_GET["link"])){



$link=$_GET["link"];
$pag[1]="gerencia.php";
$pag[2]="consertos.php";
$pag[3]="agendar.php";
$pag[4]="agendar.php";
$pag[5]="sobre.php";
$pag[7]="contato.php";



if(!empty($link)){
if (file_exists($pag[$link])){
include $pag[$link];
}
}



}

?>

 </div>
 
 <br>
 <center>
 <hr>
 
 <a href="index.php?link=7"> <img src=telefone.png  width=40px  heigth=40px title="Telefone para contato" >  </a>
&nbsp &nbsp <a href="https://www.facebook.com/rony.coelho.7758"  target=_blank> <img src=facebook.png  width=40px  heigth=40px title="Facebook" >  </a>
&nbsp &nbsp <a href="index.php?link=7"> <img src=WhatsApp.png  width=40px  heigth=40px title="Whatsapp" >  </a>

     </center>








</body> </html>
