<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <title>Ricardo León Curriculum Vitae</title>
</head>
<body class="w3-light-grey">
    <style>
        html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
        .responsive {
            width: 100%;
            height: auto;
        }
        .panel{
            display: flex;
            justify-content: center;
            padding: 10px;
        }
        p{
            font-size:large;
        }
    </style>
    <script>
        function getEdad(dateString) {
            let hoy = new Date();
            let fechaNacimiento = new Date(dateString);
            let edad = hoy.getFullYear() - fechaNacimiento.getFullYear();
            let diferenciaMeses = hoy.getMonth() - fechaNacimiento.getMonth();
            if ( diferenciaMeses < 0 || (diferenciaMeses === 0 && hoy.getDate() < fechaNacimiento.getDate()) ) {
                edad--;
            }
            return edad;
        }
    </script>   
    <div class="container-fluid">
        <br>
        <div class="row row-cols-2">  
            <div class="panel panel-default" class="panel">
                <div class="col"> <!--(1)-->
                    <img alt="" src="img\foto.jpg" class="responsive" height="750" width="550"/>
                    <h3><b>Ricardo Enrique León López, <script>document.write(getEdad("1999/11/14 11:30:00"));</script> años</b></h3>
                    <h4><i class="material-icons">perm_identity</i></i> <b>&nbsp;&nbsp;&nbsp;DNI:</b> 70999841</h4>
	                <h4><i class="fa fa-home fa-fw w3-margin-right w3-large"></i> <b>Dirección:</b> Jr. Moore Nº 265 Int. 101 Magdalena del Mar</h4>
	                <h4><i class="fa fa-phone fa-fw w3-margin-right w3-large"></i><a href="https://wa.link/buipqw"> <b>941439711</b></a></h4>	                
                    <h4><i class="fa fa-envelope fa-fw w3-margin-right w3-large"></i><a href="mailto:ricardoleon188@gmail.com"> ricardoleon 188@gmail .com</a></h4>
                    <hr>

                    <h3 class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right"></i>Lenguajes de programación</b></h3>
                    <p>JAVA</p>
                    <div class="w3-light-grey w3-round-xlarge w3-small">
                        <div class="w3-container w3-center w3-round-xlarge w3-indigo" style="width:100%">100%</div>
                    </div><br>
                    <p>SQL</p> <!--Otros lenguajes-->
                    <div class="w3-light-grey w3-round-xlarge w3-small">
                        <div class="w3-container w3-center w3-round-xlarge w3-indigo" style="width:90%">90%</div>
                    </div><br>
                    <p>PYTHON</p>
                    <div class="w3-light-grey w3-round-xlarge w3-small">
                        <div class="w3-container w3-center w3-round-xlarge w3-indigo" style="width:50%">50%</div>
                    </div><br>                    
                    <p>HTML</p>
                    <div class="w3-light-grey w3-round-xlarge w3-small">
                        <div class="w3-container w3-center w3-round-xlarge w3-indigo" style="width:70%">70%</div>
                    </div><br>
                    <p>CSS</p>
                    <div class="w3-light-grey w3-round-xlarge w3-small">
                        <div class="w3-container w3-center w3-round-xlarge w3-indigo" style="width:65%">65%</div>
                    </div><br>
                    <p>JS</p>
                    <div class="w3-light-grey w3-round-xlarge w3-small">
                        <div class="w3-container w3-center w3-round-xlarge w3-indigo" style="width:50%">50%</div>
                    </div><br>
                    <p>POSTGRE-SQL</p> <!--Otros lenguajes-->
                    <div class="w3-light-grey w3-round-xlarge w3-small">
                        <div class="w3-container w3-center w3-round-xlarge w3-indigo" style="width:30%">30%</div>
                    </div><br>
                    <p>C#</p>
                    <div class="w3-light-grey w3-round-xlarge w3-small">
                        <div class="w3-container w3-center w3-round-xlarge w3-indigo" style="width:20%">20%</div>
                    </div><br>
                    <hr>
                    <h3 class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right"></i>Idiomas</b></h3><br>
                    <p>Español</p>
                    <div class="w3-light-grey w3-round-xlarge w3-small">
                        <div class="w3-container w3-center w3-round-xlarge w3-indigo" style="width:100%">100%</div>
                    </div><br>
                    <p>Ingles</p>
                    <div class="w3-light-grey w3-round-xlarge w3-small">
                        <div class="w3-container w3-center w3-round-xlarge w3-indigo" style="width:80%">80%</div>
                    </div><br>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="col"><!--(2)-->                   
                    <h3 class="w3-large"><b><i class="fas fa-school fa-fw w3-margin-right"></i>Estudios Realizados</b></h3><br>
                        <h6 class="w3-text-indigo"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Agosto 2016 - Actualidad</h6>
                        <p><b>UNIVERSIDAD SAN MARTÍN DE PORRES</b></p>
			            <p>Facultad de Ingeniería y Arquitectura</p>
                        <p>Ingeniería de Computación y Sistemas <b>(7° Ciclo)</b></p>
                        <hr>
                        <h6 class="w3-text-indigo"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Enero 2008 - Junio 2016</h6>
                        <p><b>ASOCIACIÓN CULTURAL PERUANO BRITÁNICA</b> </p>
                        <p>Niveles de Ingles realizados: Junior – Básico – Intermedio</p>
                        <hr>
                        <!--h6 class="w3-text-indigo"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Marzo 2006 - Diciembre 2015</h6>
                        <p><b>COLEGIO SAN JUAN MARIA VIANNEY</b> </p>
                        <p>2° Grado de Primaria – 5° Grado de Secundaria</p>
                        <hr>
                        <h6 class="w3-text-indigo"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Marzo 2005 - Diciembre 2005</h6>
                        <p><b>COLEGIO SAN LUIS GONZAGA (Piura)</b> </p>
                        <p>1° Grado de Primaria</p>
                        <hr-->
                    <h3 class="w3-large"><b><i class="fa fa-suitcase fa-fw w3-margin-right"></i>Experiencia Laboral</b></h3><br>                 
                    <h6 class="w3-text-indigo"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Mayo 2019 - Marzo 2020</h6>
                    <p><b>UNIVERSIDAD SAN MARTÍN DE PORRES</b></p>
                    <p>Practicante en el área de Service Desk.<p>
                        <p>Apoyo en incidentes e inconvenientes relacionados con TI dentro de la facultad, aprendiendo a cómo tratar con los problemas 
                        tecnológicos de los administrativos y profesores. Entre estos están los trabajos de mantenimiento preventivo y correctivo de 
                        computadoras, instalación de software y hardware requerido, instalación de nuevas computadoras, etc.</p>
                    </p>
                    <hr>
                    <!--h3 class="w3-large"><b><i class="fa fa-certificate fa-fw w3-margin-right"></i></i>Proyectos</b></h3><br>

                    <hr-->
                    <h3 class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right"></i>Conferencias y certificados</b></h3><br>
                    <a href="//www.slideshare.net/RicardoLenLpez/certificate-238033118" title="Certificate" target="_blank">- Certificado de Scrum Foundation</a>
                </div>
            </div>
        </div>                   
    </div>

</body>
</html>