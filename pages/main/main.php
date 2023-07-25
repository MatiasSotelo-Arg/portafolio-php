<?php include 'src/conexion.php';
    $conexion = new conexion();
    $proyectos = $conexion->consultar("SELECT * FROM `proyecto`");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./pages/main/main.css">
</head>
<body>
    <main>
        <section class="presentacion">
                <div class="cont-presentacion">
                    <div class="cont-img-perfil">
                        <img class="img-perfil" src=".../../assets/imagenes/foto_perfil.jpg" alt="matias sotelo">
                    </div>
                    <div class="cont-info">
                        <h1>Hola 🖐️ <br> Soy Matias Sotelo</h1>
                        <h1>Full Stack Junior</h1>
                    </div>
                </div>
               
                
                <div>
                    <ul class="cont-iconos">
                        <li>
                            <a href="https://www.linkedin.com/in/matias-sotelo-17b16826b" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-linkedin" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                                <path d="M8 11l0 5" />
                                <path d="M8 8l0 .01" />
                                <path d="M12 16l0 -5" />
                                <path d="M16 16v-3a2 2 0 0 0 -4 0" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/MatiasSotelo-Arg" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-github" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:matysotelo07@gmail.com">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                                    <path d="M3 7l9 6l9 -6" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
        </section>
            
        <div class="cont-conocimientos">

            <h2 class="titulo-conocimientos">Conocimientos</h2>
            
            <div class="contenido-conocimientos">
            
                <div class="tarjeta-conocimientos div1">
                    <h3>FRONT END</h3>

                    <div>
                        <img class="img" src="assets/iconos/front/css.jpg" alt="css">
                        <img class="img" src="assets/iconos/front/js.jpg" alt="css">
                        <img class="img" src="assets/iconos/front/html.jpg" alt="css">
                        <img class="img" src="assets/iconos/front/responsive.jpg" alt="css">
                        <img class="img" src="assets/iconos/front/sass.jpg" alt="css">
                        <img class="img" src="assets/iconos/front/apis.jpg" alt="css">
                        <img class="img" src="assets/iconos/front/jsx.jpg" alt="css">
                        <img class="img" src="assets/iconos/front/logoreact.jpg" alt="css">
                    </div>
                </div>
            
            
            
                <div class="tarjeta-conocimientos div2">
                    <h3>BACK END</h3>

                    <div>
                        <img class="img" src="assets/iconos/back/firebase-database.jpg" alt="css">
                        <img class="img" src="assets/iconos/back/MySQL-Logo.jpg" alt="css">
                        <img class="img" src="assets/iconos/back/php.jpg" alt="css">
                        <img class="img" src="assets/iconos/back/xampp.jpg" alt="css">
                    </div>
                </div>
            
            
        
                <div class="tarjeta-conocimientos div3">
                    <h3>COMPLEMENTOS</h3>

                    <div>
                        <img class="img" src="assets/iconos/complementos/git.jpg" alt="css">
                        <img class="img" src="assets/iconos/complementos/github.jpg" alt="css">
                        <img class="img" src="assets/iconos/complementos/json.jpg" alt="css">
                    </div>
                </div>
                
                
            </div>
        </div>

        <div class="cont-proyectos">
            <h2 class="titulo-proyectos" id="proyectos">Proyectos</h2>

            <div class="proyectos">
                <?php foreach($proyectos as $proyecto) { ?>

                <div class="proyecto">
                    <h1><?php echo $proyecto['titulo']; ?></h1>
                    <div class="cont-img">
                        <img class="proyecto-img" src=".../../assets/img_proyectos/<?php echo $proyecto['img']?>"  alt="<?php echo $proyecto['titulo']?>">
                    </div>
                    <div class="cont-link">
                        <?php echo '<a class="link" href="'.$proyecto['linkProyecto'].'" target="_blank">Ver proyecto</a>'; ?>
                        <?php echo '<a class="link" href="'.$proyecto['linkGithub'].'" target="_blank">Github</a>'; ?>
                    </div>
                </div>
                
                <?php } ?>
            </div>
        </div>
        

        <div class="cont-contacto">
            <div class="contenido-contacto">
                <h2 class="titulo-contacto">Contacto</h2>

                <form method="post" id="contacto">
                    
                    <div>
                        <label for="nombre">Nombre</label>
                        <input required type="text" name="nombre" id="nombre">
                    </div>

                    <div>
                        <label for="email">Email</label>
                        <input required type="email" name="email" id="email">
                    </div>

                    <div>
                        <label for="asunto">Asunto</label>
                        <input required type="text" name="asunto" id="asunto">
                    </div>

                    <div>
                        <label for="mensaje">Mensaje</label>
                        <textarea required name="mensaje" id="mensaje" cols="40" rows="8"></textarea>
                    </div>
                    
                    <div>
                        <input type="submit" name="enviar" value="Enviar">
                    </div>
                    
                </form>
                <?php include 'src/enviar_mensaje.php';?>
            </div>
        </div>

    </main>
</body>
</html>