
<?php
session_start();
if(isset($_POST['submit'])){
	
	 include('../php/login_admin.php');
	 $obj=new DbFunction();
	 $_SESSION['login']=$_POST['id'];
	 $obj->login($_POST['id'],$_POST['password']);
}
	 

?>
 




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scanner Escolar</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
        <form action="php/login_admin.php" method="post">
    
    <div class="menu" id="btn">
        <ion-icon name="menu-outline"></ion-icon>
        <ion-icon name="close-outline"></ion-icon>
    </div>
    <div class="barra-lateral">
        <div>
            <div class="nombre-pagina">
                <ion-icon id="book" name="infinite-outline"></ion-icon></ion-icon>
                <span>InnovaTech</span>
            </div>
            <button class="boton">
                <ion-icon name="add-outline"></ion-icon>
                <span>Create New</span>
            </button>
        </div>
        <nav class="navegacion">
            <ul>
                <li>
                    <a href="contactanosmodi.html">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                        <span>Contáctanos</span>
                    </a>
                </li>
                <li>
                    <a href="servicios.html">
                        <ion-icon name="cube-outline"></ion-icon>
                        <span>Servicios</span>
                    </a>
                </li>
                <li>
                    <a href="blog.html">
                        <ion-icon name="star-half-outline"></ion-icon>
                        <span>Blog</span>
                    </a>
                </li>
                <!--<li>
                    <a href="ayuda.html">
                        <ion-icon name="help-outline"></ion-icon>
                        <span>Ayuda</span>
                    </a>
                </li>-->
                <li>
                    <a href="configuracion.html">
                        <ion-icon name="settings-outline"></ion-icon>
                        <span>Configuración</span>
                    </a>
                </li>
            </ul>
        </nav>
       <div>
        <div class="linea"></div>
        <div class="modo-oscuro">
            <div class="info">
                <ion-icon name="moon-outline"></ion-icon>
                <span>Drak Mode</span>
            </div>
            <div class="switch">
                <div class="base">
                    <div class="circulo">
                        
                    </div>
                </div>
            </div>
        </div>
       </div>
    </div>
    <div class="parte2">
    <div class="texto" id="textol">
        <h1>Scanner Escolar</h1>
        <h6>"Tu asistencia en un click"</h6>
    </div>
    <a href="#">
    <button type="button" class="boton2" id="botonL">Iniciar Sesión</button>
    </a>
    <div class="wrapper">
       <span class="icon-close">
        <ion-icon name="close-outline"></ion-icon>
       </span>
       <div class="form-box login" >
        <h2>Inicia Sesión</h2>
        <form action="#">
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="mail-outline"></ion-icon>
                </span>
                


                <input type="text" required class="letras1" name="loginid">
                <label class="cajas1">Email</label>
            </div>



            
            <div class="input-box">
                <span class="icon2">
                    <ion-icon name="lock-closed"></ion-icon>
                </span>





                <input type="password" required id="contraseña" name="password" class="letras2">
                <label class="cajas2">Contraseña</label>
            </div>




            <div class="remember-forgot">
                <label><input type="checkbox" id="mostrarcon" > Mostrar Contraseña</label>
                <a href="#" class="Olvidaste">¿Olvidaste tu contraseña?</a>
            </div><br>
            <a href="pantalla1.html">




                
                <input type="submit" class="btn" value="Iniciar">
            </a>





        </form></form>
       </div>
    </div>
</div>


<script type="module" src ="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script> 
<script nomodule src="https://unpkg .com/ionicons@7.1.0/dist/ionicons/ionicons.js" ></script>
<script src="script.js"></script>

</body>
</html>