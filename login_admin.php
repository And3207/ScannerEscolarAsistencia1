
<?php
include 'conexion.php';

$loginid=$_POST['loginid'];
$password=$_POST['password'];

$validar_login=mysqli_query($conexion, "SELECT * FROM  tbl_login WHERE loginid='$loginid' and password='$password'");

if(mysqli_num_rows($validar_login)   >0 ){
    header("location:../pantalla1.php");
}else{ 
echo'
<script>
alert("incorrecto");
window.location = "../index.php";
</script>

';
exit;
  }







