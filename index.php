<!DOCTYPE html>
<html lang="es">
<?php include 'templates/head.php';?>
<body>
    <div id="container">
        <div id="container-header">
            <header class="">
                <h1 class="center">Curriculum Vitae - Rodrigo Nicolas Gallo</h1>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-link btn btn-outline-primary" aria-current="page" href="#datos-personales">Datos personales</a>
                                <a class="nav-link btn btn-outline-primary" href="#estudios">Estudios</a>
                                <a class="nav-link btn btn-outline-primary" href="#experiencias-laborales">Experiencias laborales</a>
                                <a class="nav-link btn btn-outline-primary" href="#logros-personales">Logros personales</a>
                                <a class="nav-link btn btn-outline-primary" href="#referencias">Referencias</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
        </div>
        
        <section id="datos-personales">
           
            <h3 class="display-4">Datos personales</h3>
            <div id="container-foto">
                <img src="img/foto.jpg" alt="">
            </div>
            <h4><i class="bi bi-person-fill"></i>Apellido: </h4>
            <p>Gallo</p>
            <h4><i class="bi bi-person-fill"></i>Nombre: </h4>
            <p>Rodrigo Nicolas</p>
            <h4><i class="bi bi-file-person-fill"></i>DNI: </h4>
            <p>31.143.647</p>
            <h4><i class="bi bi-house-fill"></i>Domiclio: </h4>
            <p>Sisco 3165 - Ing. White (8103) - Bs. As. - Argentina</p>
            <h4><i class="bi bi-telephone-fill"></i>Telefono:</h4><a href="https://wa.me/542915071220" target="_blank">
                <p><i class="bi bi-whatsapp"></i> 291 - 155071220</p>
            </a>
            <h4><i class="bi bi-envelope-fill"></i>Email: </h4><a href="mailto:gallonestor@bvconline.com.ar">
                <p>gallonestor@bvconline.com.ar</p>
            </a>
        </section>
        
        <section id="estudios">
            <h3 class="display-4">Estudios</h3>
            <h4>Primarios (1990 - 1997)</h4>
            <p>Escuela Nº13 - Rui Barbosa - Ing. White</p>

            <h4>Certificaciones (1995 - 2003)</h4>
            <p>Sexto Seniors - English</p>
            <p>Cambride Institute - Ing. White</p>

            <h4>Secundarios (1998 - 2003)</h4>
            <p>Escuela de Educacion Tecnica Nº1 - Crucero A.R.A Gral Belgrano - Ing White</p>
            <a href="cursos.php?curso=secundario"><p>Técnico Electrónico</p></a>

            <h4>Terciarios (2004 - 2006)</h4>
            <p>Universidad Tecnologica Nacional UTN - Bahia Blanca</p>
            <p>Técnico superior en mantenimiento industrial</p>

            <h4>Titulos profesionales (2012)</h4>
            <p>Asociacion de productores Bahia Blanca APAS - Bahia Blanca</p>
            <p>Productor Asesor de Seguros</p>

            <h4>Certificaciones universitarias (2020 - 2021)</h4>
            <p>Univesidad Tecnologica Nacional - Facultad Regional Resistencia - Plataforma E-learging</p>
            <a href="cursos.php?curso=html5"><p>Diseño Web Responsive - HTML5 y CSS3, 01/04/2020</p></a>
            <a href="cursos.php?curso=php"><p>Programación web con PHP y MySQL , 21/05/2020</p></a>
            <a href="cursos.php?curso=javascript"><p>Programación web con Javascript, 19/07/2020</p></a>
            <a href="cursos.php?curso=php_avanzado"><p>Programación con PHP y MySQL - Nivel Avanzado, 14/10/2020</p></a>
            <a href="cursos.php?curso=php_polo"><p>Programacion Web PHP, 07/07/2021</p></a>
            <a href="cursos.php?curso=java_polo"><p>Desarrollo Web Fullstack con Java perfil Junior, 05/10/2021</p></a>

            <h4>Titulos especiales (2020 - 2021)</h4>
            <p>Polo TIC - Plataforma Polotic</p>
            <a href="cursos.php?curso=python"><p>Desarrollo WEB fullstack con Javascript y Python</p></a>
        </section>


        <section id="experiencias-laborales">
            <h3 class="display-4">Experiencias Laborales</h3>
            <h4>Tecnico de sala - Bingo Bahia (2006) - Bahia Blanca</h4>

            <h4>Tecnico en obras e interno - Chricer seguridad - Bahia blanca (2007)</h4>

            <h4>Productor de seguros en Organizacion Gallo (2007 - 2021)</h4>
            <p>Trabajo actual</p>
        </section>
        
        <section id="logros-personales">
            <h3 class="display-4">Logros personales</h3>
            <h4>Diseño de pagina web propia</h4><a href="https://www.rgweb.com.ar" target="_blank">
                <p>www.rgweb.com.ar</p>
            </a>

            <h4>Diseño y matenimiento de sistema</h4>
            <p>Sistema web de gestion de clientes, telefonos, domicilios y tarjetas, orientado al ambito de seguros</p>
            <p>Creado en PHP completamente orientado a objetos y MySQL</p>
            <a href="https://www.rgweb.com.ar/sistema-seguros" target="_blank">
                <p>Version de prueba sistema de Seguros</p>
            </a>
            <p>Usuario: test, Password: 1234</p>

            <h4>Manteminiento y actualizacion de web institucional</h4>
            <p>Matenimiento y agregado de funciones que se enlaza con el sistema de clientes, para que ellos puedas realizar acciones sobres sus polizas</p>
            <a href="https://organizaciongallo.com" target="_blank">
                <p>Organizacion Gallo</p>
            </a>

            <h4>Creacion de sitios web de clientes</h4>
            <a href="https://radiocristal.com.ar" target="_blank">
                <p>Radio Cristal</p>
            </a>
            <a href="http://globalradioweb.com.ar" target="_blank">
                <p>Globalradioweb</p>
            </a>
        </section>
        
        <section id="referencias">
            <h3 class="display-4">Referencias</h3>
        </section>
    </div>
</body>
</html>