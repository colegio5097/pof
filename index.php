<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colegio Secundario Nº 5.097</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div id="wrapper">
        <div id="sidebar">
            <div class="inner">
                <section id="search" class="alt">
                    <form method="post" action="#">
                        <input type="text" name="query" id="query" placeholder="Search" />
                    </form>
                </section>
                <nav id="menu">
                    <header class="major">
                        <h3>Menu</h3>
                    </header>
                    <ul>
                        <li><a href="#">Inicio</a></li>
                        <li>
                            <span class="opener">Empleados</span>
                            <ul>
                                <li><a href="#">Datos Personales</a></li>
                                <li><a href="#">Datos Laborales</a></li>
                                <li><a href="#">Licencias</a></li>
                            </ul>
                        </li>
                        <li>
                            <span class="opener">Bases de datos</span>
                            <ul>
                                <li><a href="#">Títulos </a></li>
                                <li><a href="#">Decreto 4118/97</a></li>
                            </ul>
                        </li>
                        <li>
                            <span class="opener">Reportes</span>
                            <ul>
                                <li><a href="#">Licencias por Artículo</a></li>
                                <li><a href="#">Licencias por un Periodo</a></li>
                                <li><a href="#">Licencias por Agente</a></li>
                                <li><a href="#">Licencias del Personal</a></li>
                            </ul>
                        </li>
                        <li>
                            <span class="opener">Herramientas</span>
                            <ul>
                                <li><a href="#">Calculadora </a></li>
                                <li><a href="#">Almanaque </a></li>
                            </ul>
                        </li>
                        <li>
                            <span class="opener">Páginas</span>
                            <ul>    
                                 <li><a href="#">Progresar</a></li>
                                <li><a href="#">IPS SEguro</a></li>
                                <li><a href="#">Edusata</a></li>
                           </ul>
                        </li>
                         <li>
                            <span class="opener">Base de datos</span>
                            <ul>
                                <li><a href="#">Respaldar </a></li>
                                <li><a href="#">Restaurar </a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>

                <footer id="footer">
                    <p class="Octubre de 2025">&copy; 2025 - Rosario de la Frontera. Salta. Sstema de control de licencias - P.O.F</a> </p>
                </footer>
            </div>
        </div>

        <div id="main">
            <div class="inner">
                <header id="header">
                    <a href="#" class="logo"><strong>P.O.F - 5097</strong>- Sistema de control de licencias</a>
                    <ul class="icons">
                        <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                        <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                    </ul>
                </header>

                <section id="banner">

                <div class="staff-info">
                  <header>
                        <h1>Colegio Secundario Nº 5.097</h1>
                        <h2>"República de Colombia"</h2>
                  </header>
                        <p><span>Directora     :</span> <span>Prof. Fátima  Esther  Peréz</span></p>
                        <p><span>Vice Director :</span> <span>Prof. Gustavo  Ramón  Otero</span></p>
                        <p><span>Vice Director :</span> <span>Prof. Graciela D.  Cardenes</span></p>
                        <p><span>Secretario    :</span> <span>Sr. Raymundo  Antorio  Leal</span></p>
                        <p><span>Prosecretario :</span> <span>Sr. Gustavo Lanoza Cardenas</span></p>
                        <p><span>Programación  :</span> <span>Ing. Diego Ernesto Albornoz</span></p>
                </div>






            </section>
            </div>
        </div>
    </div>

    <script>
        // Basic functionality for submenu toggle
        document.querySelectorAll('.opener').forEach(opener => {
            opener.addEventListener('click', function() {
                this.parentNode.classList.toggle('active');
            });
        });
    </script>
</body>
</html>