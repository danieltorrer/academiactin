<?php
$this->load->view("header");
?>
<script src="<?= base_url() ?>media/js/modernizr.js"></script>
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>media/css/plantilla.css">
<link rel="stylesheet" href="<?= base_url() ?>media/css/foundation.min.css">
</head>
<body>
    <div id="outer-wrap">
        <div id="inner-wrap">

            <header id="top" role="banner">
                <div class="block">
                    <div class="container">
                        <div class="row">
                                <h1 class="block-title">Book Title</h1>
                                <a class="nav-btn" id="nav-open-btn" href="#nav">Book Navigation</a>
                        </div>
                    </div>
                </div>
            </header>

            <nav id="nav" role="navigation">
                <div class="block">
                    <h2 class="block-title">Dashboard</h2>
                    <ul>
                        <li class="is-active">
                            <a href="#">Seccion 1</a>
                        </li><!--
                        --><li>
                            <a href="#">Seccion 2</a>
                        </li><!--
                        --><li>
                            <a href="#">Seccion 3</a>
                        </li><!--
                        --><li>
                            <a href="#">Seccion 4</a>
                        </li><!--
                        --><li>
                            <a href="#">Seccion 5</a>
                        </li>
                    </ul>
                    <a class="close-btn" id="nav-close-btn" href="#top">Return to Content</a>
                </div>
            </nav>

            <div id="main" role="main">
                <div class="container">
                    <section class="formulario">
                        <div class="row">  
                            <div class="six columns centered">  
                                <form class="custom" method="post" action="database.php" id="registro">  
                                    <fieldset>  
                                        <legend>Registro</legend>
                                        <label>Nombre (sin acentos)</label>  
                                        <input type="text" placeholder="Nombre" id="Nombre" name="Nombre" onkeypress="return letras(event)" required>  
                                        <label>Apellido Paterno</label>
                                        <input type="text" placeholder="Apellido Paterno" id="AP" name="AP" onkeypress="return letras(event)" required>
                                        <label>Apellido Materno</label>
                                        <input type="text" placeholder="Apellido Materno" id="AM" name="AM" onkeypress="return letras(event)" required>
                                        <label>Fecha de Nacimiento</label>	
                                        <input type="date" id="FN" name="FN" onblur="calc(this)" onchange="calc(this)" required>
                                        <label>Edad</label>
                                        <input type="number" id="EDAD" name="EDAD" min=20 max=50 onkeypress="return numeros(event)" oninput="maxLengthCheck(this)" maxlength="2" disabled="true" required>
                                        <label>Estado de Nacimiento</label>
                                        <select name="est" id="est" class="four" required>
                                            <option value="Aguascalientes">Aguascalientes</option>
                                            <option value="Baja California">Baja California</option>
                                            <option value="Baja California Sur">Baja California Sur</option>
                                            <option value="Campeche">Campeche</option>
                                            <option value="Chiapas">Chiapas</option>
                                            <option value="Chihuahua">Chihuahua</option>
                                            <option value="Coahuila">Coahuila</option>
                                            <option value="Colima">Colima</option>
                                            <option value="Distrito Federal">Distrito Federal</option>
                                            <option value="Durango">Durango</option>
                                            <option value="Estado de Mexico">Estado de México</option>
                                            <option value="Guanajuato">Guanajuato</option>
                                            <option value="Guerrero">Guerrero</option>
                                            <option value="Hidalgo">Hidalgo</option>
                                            <option value="Jalisco">Jalisco</option>
                                            <option value="Michoacan">Michoacán</option>
                                            <option value="Morelos">Morelos</option>
                                            <option value="Nayarit">Nayarit</option>
                                            <option value="Nuevo Leon">Nuevo León</option>
                                            <option value="Oaxaca">Oaxaca</option>
                                            <option value="Puebla">Puebla</option>
                                            <option value="Queretaro">Querétaro</option>
                                            <option value="Quintana Roo">Quintana Roo</option>
                                            <option value="San Luis Potosi">San Luis Potosí</option>
                                            <option value="Sinaloa">Sinaloa</option>
                                            <option value="Sonora">Sonora</option>
                                            <option value="Tabasco">Tabasco</option>
                                            <option value="Tamaulipas">Tamaulipas</option>
                                            <option value="Tlaxcala">Tlaxcala</option>
                                            <option value="Veracruz">Veracruz</option>
                                            <option value="Yucatan">Yucatan</option>
                                            <option value="Zacatecas">Zacatecas</option>
                                        </select>
                                        <br></br>
                                        <label>Nacionalidad</label>

                                        <label for="mex">  
                                            <input name="nac" type="radio" id="mex" required> Mexicano
                                        </label>
                                        <label for="ext">  
                                            <input name="nac" type="radio" id="ext" required> Extranjero 
                                        </label>
                                        <br></br>
                                        <label>Género</label>

                                        <label for="m">  
                                            <input name="gen" type="radio" id="m" required> Masculino
                                        </label>
                                        <label for="f">  
                                            <input name="gen" type="radio" id="f" required> Femenino
                                        </label>
                                        <br></br>
                                        <label>Dirección</label>
                                        <input type="text" name="dir" id="dir" onkeypress="return direccion(event)" maxlength="70">
                                        <label>Teléfono de Casa</label>
                                        <table><tr><td><label>Lada</label></td><td>
                                                    <label>Número</label></td></tr>
                                            <tr><td><input type="text" name="lada" id="lada" placeholder="(+52)" size="2" maxlength="4" onkeypress="return lad(event)"></td>
                                                <td><input type="tel" name="tel" id="tel" placeholder="Número sin lada" size="15" maxlength="10" onkeypress="return numeros(event)"></td>
                                            </tr></table>
                                        <label>Celular</label>
                                        <input type="text" name="cel" id="cel" placeholder="Celular a 10 dígitos" onkeypress="return numeros(event)" maxlength=10>
                                        <label>E-Mail</label>
                                        <input type="mail" name="mail" id="mail" placeholder="ejemplo@dominio.com" onkeypress="return mail(event)" required>
                                        <br></br>
                                        <label>Contraseña</label>  
                                        <input type="password" name="pass1" id="pass1" placeholder="Password" required>
                                        <label>Confirma Contraseña</label>  
                                        <input type="password" name="pass2" id="pass2" placeholder="Password" required>
                                        <label><h5>Conocimientos</h5></label>
                                        <label>¿Haz desarrollado aplicaciones móviles?</label>
                                        <label for="sm">  
                                            <input name="mov" type="radio" id="sm" value="1" required> Si
                                        </label>
                                        <label for="nm">  
                                            <input name="mov" type="radio" id="nm" value="0" required> No
                                        </label>
                                        <br></br>
                                        <label>¿Haz desarrollado aplicaciones en plataformas Web?</label>
                                        <label for="sw">  
                                            <input name="web" type="radio" id="sw" value="1" required> Si
                                        </label>
                                        <label for="nw">  
                                            <input name="web" type="radio" id="nw" value="0" required> No
                                        </label>
                                        <br></br>
                                        <label>¿Cuentas con contenidos digitales en la web?</label>
                                        <label for="scd">  
                                            <input name="cd" type="radio" id="scd" value="1" required> Si
                                        </label>
                                        <label for="ncd">  
                                            <input name="cd" type="radio" id="ncd" value="0" required> No
                                        </label>
                                        <br></br>
                                        <label>¿Cuál fue el último proyecto que desarrollaste?</label>
                                        <textarea name="ultproy" id="ultproy" required></textarea>
                                        <label>¿Como te enteraste de CTIN?</label>
                                        <textarea name="ctin" id="ctin" required></textarea>
                                        <label>¿Porque te interesa entrar a CTIN?</label>
                                        <textarea name="porque" id="porque" required></textarea>
                                        <input type="submit">
                                    </fieldset>  
                                </form>  
                            </div>  
                        </div>
                    </section>
                </div>
            </div>

            <footer role="contentinfo">
                <div class="block container">
                    <div class="row">
                        <div class="twelve columns">
                           <p class="small">Copyright © <a href="http://dbushell.com/">David Bushell</a></p>
                        </div>
                    </div>

                </div>
            </footer>

        </div>
        <!--/#inner-wrap-->
    </div>
    <!--/#outer-wrap-->

    <script src="<?= base_url() ?>media/js/main.js"></script>

</body>
</html>
