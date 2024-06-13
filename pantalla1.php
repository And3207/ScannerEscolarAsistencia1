<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scanner Escolar</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="pantalla1.css">
</head>
<body>
    <div class="menu" id="btn">
        <ion-icon name="menu-outline"></ion-icon>
        <ion-icon name="close-outline"></ion-icon>
    </div>
    <div class="barra-lateral">
        <div>
            <div class="nombre-pagina">
                <ion-icon id="codigo" name="qr-code-outline"></ion-icon>
                <span>Scanner Escolar</span>
            </div>
            <a href="registro.html"><button class="boton">
                <ion-icon name="add-outline"></ion-icon>
                <span>Nuevo Registro</span>
            </button>
            </a>
        </div>
        <nav class="navegacion">
            <ul>
                <li>
                    <a href="https://calendar.google.com/calendar/u/0/r?pli=1">
                        <ion-icon name="calendar-number-outline"></ion-icon>
                        <span>Calendario</span>
                    </a>
                </li>
                <li>
                    <a href="alumnos.html">
                        <ion-icon name="people-outline"></ion-icon>
                        <span>Alumnos</span>
                    </a>
                </li>
                <div class="linea"></div>
                <li class="sis">
                    <a href="#">
                        <ion-icon name="help-outline"></ion-icon>
                        <span>Sistema</span>
                    </a>
                </li>
                <li>
                    <a href="https://wa.me/5215519732223">
                    <ion-icon name="call-outline"></ion-icon>
                        <span>Soporte Técnico</span>
                    </a>
                </li>
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
        <?php if (isset($_SESSION['loginid']))  ?>
        <!--<div class="usuario">
            <img src="testi1.jpg">&nbsp;
            <div class="info-usuario">
                <div class="nombre-email">
                    <span class="nombre">Verónica</span>
                    <span class="email">veronica@gmail.com</span>
                </div>-->
                <ion-icon name="ellipsis-vertical-outline"></ion-icon>
            </div>
        </div>
       </div>
    </div>
    <div class="parte2">
        <main class="table" id="customers_table">
            <section class="table__header">
                <h1>Asistencias</h1>

                    <form action="">
                        <div class="selectbox">
                            <div class="select" id="select">
                                <div class="contenido-select">
                                    <h1 class="titulo">Grupos</h1>
                                </div>
                                <box-icon name='chevron-down'></box-icon>
                            </div>
                            <div class="opciones" id="opciones">
                                <a href="#" class="opcion">
                                    <div class="contenido-opcion">
                                        <div class="textos">
                                            <h1 class="titulo2">101</h1>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="opcion">
                                    <div class="contenido-opcion">
                                        <div class="textos">
                                            <h1 class="titulo2">102</h1>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="opcion">
                                    <div class="contenido-opcion">
                                        <div class="textos">
                                            <h1 class="titulo2">103</h1>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="opcion">
                                    <div class="contenido-opcion">
                                        <div class="textos">
                                            <h1 class="titulo2">104</h1>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="opcion">
                                    <div class="contenido-opcion">
                                        <div class="textos">
                                            <h1 class="titulo2">105</h1>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="opcion">
                                    <div class="contenido-opcion">
                                        <div class="textos">
                                            <h1 class="titulo2">106</h1>
                                        </div>
                                    </div>
                                </a> <a href="#" class="opcion">
                                    <div class="contenido-opcion">
                                        <div class="textos">
                                            <h1 class="titulo2">107</h1>
                                        </div>
                                    </div>
                                </a> <a href="#" class="opcion">
                                    <div class="contenido-opcion">
                                        <div class="textos">
                                            <h1 class="titulo2">108</h1>
                                        </div>
                                    </div>
                                </a> <a href="#" class="opcion">
                                    <div class="contenido-opcion">
                                        <div class="textos">
                                            <h1 class="titulo2">109</h1>
                                        </div>
                                    </div>
                                </a> <a href="#" class="opcion">
                                    <div class="contenido-opcion">
                                        <div class="textos">
                                            <h1 class="titulo2">110</h1>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="opcion">
                                    <div class="contenido-opcion">
                                        <div class="textos">
                                            <h1 class="titulo2">201</h1>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="opcion">
                                    <div class="contenido-opcion">
                                        <div class="textos">
                                            <h1 class="titulo2">202</h1>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="opcion">
                                    <div class="contenido-opcion">
                                        <div class="textos">
                                            <h1 class="titulo2">203</h1>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="opcion">
                                    <div class="contenido-opcion">
                                        <div class="textos">
                                            <h1 class="titulo2">204</h1>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="opcion">
                                    <div class="contenido-opcion">
                                        <div class="textos">
                                            <h1 class="titulo2">205</h1>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="opcion">
                                    <div class="contenido-opcion">
                                        <div class="textos">
                                            <h1 class="titulo2">206</h1>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="opcion">
                                    <div class="contenido-opcion">
                                        <div class="textos">
                                            <h1 class="titulo2">207</h1>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="opcion">
                                    <div class="contenido-opcion">
                                        <div class="textos">
                                            <h1 class="titulo2">208</h1>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="opcion">
                                    <div class="contenido-opcion">
                                        <div class="textos">
                                            <h1 class="titulo2">209</h1>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="opcion">
                                    <div class="contenido-opcion">
                                        <div class="textos">
                                            <h1 class="titulo2">210</h1>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="opcion">
                                    <div class="contenido-opcion">
                                        <div class="textos">
                                            <h1 class="titulo2">301</h1>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="opcion">
                                    <div class="contenido-opcion">
                                        <div class="textos">
                                            <h1 class="titulo2">302</h1>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="opcion">
                                    <div class="contenido-opcion">
                                        <div class="textos">
                                            <h1 class="titulo2">303</h1>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="opcion">
                                    <div class="contenido-opcion">
                                        <div class="textos">
                                            <h1 class="titulo2">304</h1>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="opcion">
                                    <div class="contenido-opcion">
                                        <div class="textos">
                                            <h1 class="titulo2">305</h1>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="opcion">
                                    <div class="contenido-opcion">
                                        <div class="textos">
                                            <h1 class="titulo2">306</h1>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="opcion">
                                    <div class="contenido-opcion">
                                        <div class="textos">
                                            <h1 class="titulo2">307</h1>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="opcion">
                                    <div class="contenido-opcion">
                                        <div class="textos">
                                            <h1 class="titulo2">308</h1>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="opcion">
                                    <div class="contenido-opcion">
                                        <div class="textos">
                                            <h1 class="titulo2">309</h1>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="opcion">
                                    <div class="contenido-opcion">
                                        <div class="textos">
                                            <h1 class="titulo2">310</h1>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="opcion">
                                    <div class="contenido-opcion">
                                        <div class="textos">
                                            <h1 class="titulo2">401</h1>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="opcion">
                                    <div class="contenido-opcion">
                                        <div class="textos">
                                            <h1 class="titulo2">402</h1>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="opcion">
                                    <div class="contenido-opcion">
                                        <div class="textos">
                                            <h1 class="titulo2">403</h1>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="opcion">
                                    <div class="contenido-opcion">
                                        <div class="textos">
                                            <h1 class="titulo2">404</h1>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="opcion">
                                    <div class="contenido-opcion">
                                        <div class="textos">
                                            <h1 class="titulo2">405</h1>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
            
                        <!--<input type="hidden" name="pais" id="inputSelect" value="">-->
                    </form>


                <div class="input-group">
                    <input type="search" placeholder="Buscar...">
                    <img src="search.png" alt="">
                </div>
                <div class="export__file">
                    <label for="export-file" class="export__file-btn" title="Export File"></label>
                    <input type="checkbox" id="export-file">
                    <div class="export__file-options">
                        <label class="expo">Exportar &nbsp; &#10140;</label>
                        <label for="export-file" id="toPDF">PDF <img src="pdf.png" alt=""></label>
                        <!--<label for="export-file" id="toJSON">JSON <img src="json.png" alt=""></label>
                        <label for="export-file" id="toCSV">CSV <img src="csv.png" alt=""></label>-->
                        <label for="export-file" id="toEXCEL">EXCEL <img src="excel.png" alt=""></label>
                    </div>
                </div>
            </section>
            <section class="table__body">
                <table>
                    <thead>
                        <tr>
                            <th> Número de control <!--<span class="icon-arrow">&UpArrow;</span>--></th>
                            <th> Nombre <!--<span class="icon-arrow">&UpArrow;</span>--></th>
                            <th> Género <!--<span class="icon-arrow">&UpArrow;</span>--></th>
                            <th> Carrera <!--<span class="icon-arrow">&UpArrow;</span>--></th>
                            <th> Fecha <!--<span class="icon-arrow">&UpArrow;</span>--></th>
                            <th> Hora_E <!--<span class="icon-arrow">&UpArrow;</span>--></th>
                            <th> Hora_S <!--<span class="icon-arrow">&UpArrow;</span>--></th>
                            <th> Turno <!--<span class="icon-arrow">&UpArrow;</span>--></th>
                            <th> Grupo <!--<span class="icon-arrow">&UpArrow;</span>--></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>22415082280205</td>
                            <td>Aguilar Velasquez Andrés</td>
                            <td> Masculino </td>
                            <td> Programación </td>
                            <td><strong> 00/00/0000 </strong></td>
                            <td>00:00 AM</td>
                            <td>00:00 PM</td>
                            <td>Matutino</td>
                            <td>405</td>
                        </tr>
                        <tr>
                            <td>22415082280035</td>
                            <td> Amador Sanchez Alexis Gerardo </td>
                            <td> Masculino </td>
                            <td> Programación </td>                       
                            <td><strong>00/00/0000</strong></td>
                            <td>00:00 AM</td>
                            <td>00:00 PM</td>
                            <td>Matutino</td>
                            <td>405</td>
                        </tr>
                        <tr>
                            <td>22415082280292</td>
                            <td> Arredondo Cruz Victor Eiden</td>
                            <td> Masculino </td>
                            <td> Programación </td>                          
                            <td><strong>00/00/0000</strong></td>
                            <td>00:00 AM</td>
                            <td>00:00 PM</td>
                            <td>Matutino</td>
                            <td>405</td>
                        </tr>
                        <tr>
                            <td>22415082280141</td>
                            <td> Benitez Salazar Chelsea Gabriel </td>
                            <td> Femenino </td>
                            <td> Programación </td>                           
                            <td><strong>00/00/0000</strong></td>
                            <td>00:00 AM</td>
                            <td>00:00 PM</td>
                            <td>Matutino</td>
                            <td>405</td>
                        </tr>
                        <tr>
                            <td>22415082280131</td>
                            <td> Burgos Curiel Madisson</td>
                            <td> Femenino </td>
                            <td> Programación </td>                          
                            <td><strong>00/00/0000</strong></td>
                            <td>00:00 AM</td>
                            <td>00:00 PM</td>
                            <td>Matutino</td>
                            <td>405</td>
                        </tr>
                        <tr>
                            <td>22415082280118</td>
                            <td> Carcaño Linares Omar Andre  </td>
                            <td> Masculino </td>
                            <td> Programación</td>                          
                            <td><strong>00/00/0000</strong></td>
                            <td>00:00 AM</td>
                            <td>00:00 PM</td>
                            <td>Matutino</td>
                            <td>405</td>
                        </tr>
                        <tr>
                            <td>22415082280206</td>
                            <td> Cardenas Romero Jesus </td>
                            <td> Masculino </td>
                            <td> Programación </td>                           
                            <td><strong>00/00/0000</strong></td>
                            <td>00:00 AM</td>
                            <td>00:00 PM</td>
                            <td>Matutino</td>
                            <td>405</td>
                        </tr>
                        <tr>
                            <td>22415082280080</td>
                            <td> Cruz Sanchez Jaziel </td>
                            <td> Masculino </td>
                            <td> Programación </td>                         
                            <td><strong>00/00/0000</strong></td>
                            <td>00:00 AM</td>
                            <td>00:00 PM</td>
                            <td>Matutino</td>
                            <td>405</td>
                        </tr>
                        <tr>
                            <td>22415082280266</td>
                            <td> Dominguez Ortiz Cristopher Brayan </td>
                            <td> Masculino </td>
                            <td> Programación </td>                         
                            <td><strong>00/00/0000</strong></td>
                            <td>00:00 AM</td>
                            <td>00:00 PM</td>
                            <td>Matutino</td>
                            <td>405</td>
                        </tr>
                        <tr>
                            <td>22415082280242</td>
                            <td> Dorantes Avalos Luna Camila </td>
                            <td> Femenino </td>
                            <td> Programación </td>                           
                            <td><strong>00/00/0000</strong></td>
                            <td>00:00 AM</td>
                            <td>00:00 PM</td>
                            <td>Matutino</td>
                            <td>405</td>
                        </tr>
                        <tr>
                            <td>22415082280031</td>
                            <td> Espinosa Rosas Yonathan Jaziel </td>
                            <td> Masculino </td>
                            <td> Programación </td>                         
                            <td><strong>00/00/0000</strong></td>
                            <td>00:00 AM</td>
                            <td>00:00 PM</td>
                            <td>Matutino</td>
                            <td>405</td>
                        </tr>
                        <tr>
                            <td>22415082280143</td>
                            <td> Gonzalez Ledesma Santiago Jhoel </td>
                            <td> Masculino </td>
                            <td> Programación</td>                          
                            <td><strong>00/00/0000</strong></td>
                            <td>00:00 AM</td>
                            <td>00:00 PM</td>
                            <td>Matutino</td>
                            <td>405</td>
                        </tr>
                        <tr>
                            <td>22415082280117</td>
                            <td> Gonzalez Mejia Angel Yahel </td>
                            <td> Masculino </td>
                            <td> Programación </td>                          
                            <td><strong>00/00/0000</strong></td>
                            <td>00:00 AM</td>
                            <td>00:00 PM</td>
                            <td>Matutino</td>
                            <td>405</td>
                        </tr>
                        <tr>
                            <td>22415082280074</td>
                            <td> Guadarrama Garcìa Maria Lizbeth </td>
                            <td> Femenino </td>
                            <td> Programación </td>                          
                            <td><strong>00/00/0000</strong></td>
                            <td>00:00 AM</td>
                            <td>00:00 PM</td>
                            <td>Matutino</td>
                            <td>405</td>
                        </tr>
                        <tr>
                            <td>22415082280016</td>
                            <td> Hernandez Perales Angel Adrian </td>
                            <td> Masculino </td>
                            <td> Programación </td>                          
                            <td><strong>00/00/0000</strong></td>
                            <td>00:00 AM</td>
                            <td>00:00 PM</td>
                            <td>Matutino</td>
                            <td>405</td>
                        </tr>
                        <tr>
                            <td>22415082280187</td>
                            <td> Hernandez Gallegos Fatima Jatzyri </td>
                            <td> Femenino </td>
                            <td> Programación </td>                          
                            <td><strong>00/00/0000</strong></td>
                            <td>00:00 AM</td>
                            <td>00:00 PM</td>
                            <td>Matutino</td>
                            <td>405</td>
                        </tr>
                        <tr>
                            <td>22415082280269</td>
                            <td> Izazaga Reyes Ian Ariel </td>
                            <td> Masculino </td>
                            <td> Programación </td>                          
                            <td><strong>00/00/0000</strong></td>
                            <td>00:00 AM</td>
                            <td>00:00 PM</td>
                            <td>Matutino</td>
                            <td>405</td>
                        </tr>
                        <tr>
                            <td>22415082280028</td>
                            <td> Linares Cano Alexa </td>
                            <td> Femenino </td>
                            <td> Programación </td>                          
                            <td><strong>00/00/0000</strong></td>
                            <td>00:00 AM</td>
                            <td>00:00 PM</td>
                            <td>Matutino</td>
                            <td>405</td>
                        </tr>
                        <tr>
                            <td>22415082280027</td>
                            <td> Lopez Tlaseca Alberto </td>
                            <td> Masculino </td>
                            <td> Programación </td>                          
                            <td><strong>00/00/0000</strong></td>
                            <td>00:00 AM</td>
                            <td>00:00 PM</td>
                            <td>Matutino</td>
                            <td>405</td>
                        </tr>
                        <tr>
                            <td>22415082280160</td>
                            <td> Lopez Vera Jonathan Alejandro </td>
                            <td> Masculino </td>
                            <td> Programación </td>                          
                            <td><strong>00/00/0000</strong></td>
                            <td>00:00 AM</td>
                            <td>00:00 PM</td>
                            <td>Matutino</td>
                            <td>405</td>
                        </tr>
                        <tr>
                            <td>22415082280221</td>
                            <td> Martinez Domiguez Estefanie Yurem </td>
                            <td> Femenino </td>
                            <td> Programación </td>                          
                            <td><strong>00/00/0000</strong></td>
                            <td>00:00 AM</td>
                            <td>00:00 PM</td>
                            <td>Matutino</td>
                            <td>405</td>
                        </tr>
                        <tr>
                            <td>22415082280099</td>
                            <td> Martinez Hernandez Leonardo </td>
                            <td> Masculino </td>
                            <td> Programación </td>                          
                            <td><strong>00/00/0000</strong></td>
                            <td>00:00 AM</td>
                            <td>00:00 PM</td>
                            <td>Matutino</td>
                            <td>405</td>
                        </tr>
                        <tr>
                            <td>22415082280362</td>
                            <td> Montes Ramirez Monserrath </td>
                            <td> Femenino </td>
                            <td> Programación </td>                          
                            <td><strong>00/00/0000</strong></td>
                            <td>00:00 AM</td>
                            <td>00:00 PM</td>
                            <td>Matutino</td>
                            <td>405</td>
                        </tr>
                        <tr>
                            <td>22415082280068</td>
                            <td> Montoya Mendez Diego Roman </td>
                            <td> Masculino </td>
                            <td> Programación </td>                          
                            <td><strong>00/00/0000</strong></td>
                            <td>00:00 AM</td>
                            <td>00:00 PM</td>
                            <td>Matutino</td>
                            <td>405</td>
                        </tr>
                        <tr>
                            <td>22415082280306</td>
                            <td> Neri Hernandez Ollin </td>
                            <td> Femenino </td>
                            <td> Programación </td>                          
                            <td><strong>00/00/0000</strong></td>
                            <td>00:00 AM</td>
                            <td>00:00 PM</td>
                            <td>Matutino</td>
                            <td>405</td>
                        </tr>
                        <tr>
                            <td>22415082280049</td>
                            <td> Olivera Mendoza Alan Michelle </td>
                            <td> Masculino </td>
                            <td> Programación </td>                          
                            <td><strong>00/00/0000</strong></td>
                            <td>00:00 AM</td>
                            <td>00:00 PM</td>
                            <td>Matutino</td>
                            <td>405</td>
                        </tr>
                        <tr>
                            <td>22415082280146</td>
                            <td> Paz Rodriguez Jesus Francisco </td>
                            <td> Masculino </td>
                            <td> Programación </td>                          
                            <td><strong>00/00/0000</strong></td>
                            <td>00:00 AM</td>
                            <td>00:00 PM</td>
                            <td>Matutino</td>
                            <td>405</td>
                        </tr>
                        <tr>
                            <td>22415082280308</td>
                            <td> Perez Angeles Angel Gabriel </td>
                            <td> Masculino </td>
                            <td> Programación </td>                          
                            <td><strong>00/00/0000</strong></td>
                            <td>00:00 AM</td>
                            <td>00:00 PM</td>
                            <td>Matutino</td>
                            <td>405</td>
                        </tr>
                        <tr>
                            <td>22415082280138</td>
                            <td> Rios Cervantes Reynaldo </td>
                            <td> Masculino </td>
                            <td> Programación </td>                          
                            <td><strong>00/00/0000</strong></td>
                            <td>00:00 AM</td>
                            <td>00:00 PM</td>
                            <td>Matutino</td>
                            <td>405</td>
                        </tr>
                        <tr>
                            <td>22415082280194</td>
                            <td> Rodriguez Gonzales Zhenli Xiomara </td>
                            <td> Femenino </td>
                            <td> Programación </td>                          
                            <td><strong>00/00/0000</strong></td>
                            <td>00:00 AM</td>
                            <td>00:00 PM</td>
                            <td>Matutino</td>
                            <td>405</td>
                        </tr>
                        <tr>
                            <td>22415082280150</td>
                            <td> Sanchez Perez Diego </td>
                            <td> Masculino </td>
                            <td> Programación </td>                          
                            <td><strong>00/00/0000</strong></td>
                            <td>00:00 AM</td>
                            <td>00:00 PM</td>
                            <td>Matutino</td>
                            <td>405</td>
                        </tr>
                        <tr>
                            <td>22415082280142</td>
                            <td> Sanchez Vazquez Edgar Adan </td>
                            <td> Masculino </td>
                            <td> Programación </td>                          
                            <td><strong>00/00/0000</strong></td>
                            <td>00:00 AM</td>
                            <td>00:00 PM</td>
                            <td>Matutino</td>
                            <td>405</td>
                        </tr>
                        <tr>
                            <td>22415082280102</td>
                            <td> Sanchez Zarza Angel Josue </td>
                            <td> Masculino </td>
                            <td> Programación </td>                          
                            <td><strong>00/00/0000</strong></td>
                            <td>00:00 AM</td>
                            <td>00:00 PM</td>
                            <td>Matutino</td>
                            <td>405</td>
                        </tr>
                        <tr>
                            <td>22415082280295</td>
                            <td> Santiago Perez Axel Alonso </td>
                            <td> Masculino </td>
                            <td> Programación </td>                          
                            <td><strong>00/00/0000</strong></td>
                            <td>00:00 AM</td>
                            <td>00:00 PM</td>
                            <td>Matutino</td>
                            <td>405</td>
                        </tr>
                        <tr>
                            <td>22415082280144</td>
                            <td> Solis Aguilar Fatima Charlize </td>
                            <td> Femenino </td>
                            <td> Programación </td>                          
                            <td><strong>00/00/0000</strong></td>
                            <td>00:00 AM</td>
                            <td>00:00 PM</td>
                            <td>Matutino</td>
                            <td>405</td>
                        </tr>
                        <tr>
                            <td>22415082280273</td>
                            <td> Toledo Guerrero Alan Kevin </td>
                            <td> Masculino </td>
                            <td> Programación </td>                          
                            <td><strong>00/00/0000</strong></td>
                            <td>00:00 AM</td>
                            <td>00:00 PM</td>
                            <td>Matutino</td>
                            <td>405</td>
                        </tr>
                        <tr>
                            <td>22415082280273</td>
                            <td> Pedrito </td>
                            <td> Masculino </td>
                            <td> Programación </td>                          
                            <td><strong>00/00/0000</strong></td>
                            <td>00:00 AM</td>
                            <td>00:00 PM</td>
                            <td>Vespertino</td>
                            <td>404</td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </main>


        <script src="tabla.js"></script>
        <script src="busquedagrupos.js"></script>
    
    </div>

<script type="module" src ="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script> 
<script nomodule src="https://unpkg .com/ionicons@7.1.0/dist/ionicons/ionicons.js" ></script>
<script src="pantalla1.js"></script>

</body>
</html>