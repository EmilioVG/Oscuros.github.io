<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oscuros | Bienvenido</title>
    <meta name="" content="index">
    <meta name="author" content="EmilioV">
    <meta name="copyright" content="VECorporation">
    <script src="https://kit.fontawesome.com/562d3be965.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="notifications/js/push.min.js"></script>
</head>
<body>
    <header class="hero__cta">
        <a class="bars"><i class="fa-solid fa-bars"></i></a>
        <h3>Oscuros</h2>
        <nav class="hero__nav">
            <ul>
                <li class="hero__li"><a href="index.php">Inicio</i></a></li>
                <li class="hero__li"><a href="survivor.php">Survival</i></a></li>
                <li class="hero__li"><a href="rangos.php">Rangos</i></a></li>
                <li class="hero__li"><a href="about.php">Sobre</i></a></li>
            </ul>
        </nav>
        <a href="views/login.php" class="btn__login">Inicia secion</a>
    </header>
    <div class="container">
        <h2>Novedades cada semana</h2>
        <p>Todas nuestras novedaes son publicas aqui, registrate o inicia secion para recibir notificaciónes sobre la grandiosa comunidad que puede seguir cresiendo con la ayuda de ustedes</span>
        <a class="btn__login" id="btn_action_news">Mira todas las novedades ya!!</a>
        <section class="text__container">
            <span>Oscuros es un servidor que esta sentrado y hecho para que se diviertan todos los jugadores que entren, se nos a ocuurido este servidor para que se puedan divertir solamente</span>
        </section>
        <div class="slider">
            <div class="slider__items">
                <div class="items">
                    <img src="media/img/c3c5c9bb9ba2f0bbbb7591732727268f9c13695d.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="about_container">
        <div class="about">
            <h2>Nuestra comunidad de discord</h2>
            <span>Apoyanos uniendote a nuestro discord y enterate por ahi tambien sobre las noticias</span>
            <span class="link__dc">As click <a href="https://discord.gg/Gms9jNVP">Aqui</a> para entrar</span>
        </div>
    </div>
    <div class="why_cont">
        <h3>Que se puede hacer</h3>
        <p>En este mundo de fantasia e imaginacion se pueden hacer muchas cosas, puedes constrir tu casa, formar un clan unirte a un grupo,expande tu imperio, ten gerras con otros clanes para tener el control de nuevas bases, tenemos varias formas de divercion tanto como el survival y los minijuegos que se situan en el lobby en la que te puedes divertir, explora todo el mundo de "Oscuros" y mira las cosas tan geniales que tenemos, diviertete rolea sanamente y no te olvides de competir para ser el mejor, el mas poderoso! entre todos y todas en el mundo</p>
    </div>
    <footer>
        <div class="f-content">
            <h3>Oscuros.network.org</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla officiis fugiat doloremque aspernatur odio, animi quibusdam ipsum corporis reprehenderit nisi cum ab, ducimus dignissimos obcaecati.</p>
            <ul class="socials">
                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                <li><a href=""><i class="fa fa-youtube"></i></a></li>
            </ul>
        </div>
    </footer>
    <div class="f-bottom">
        <p>Copyright &copy;2023 Oscuros. Hecho por <span>V-Code</span></p>
    </div>
    <?php
        echo'<script>
        Push.create("Oscuros",{
            body: "Hay nuevas novedades, revisalas!",
            icon: "media/img/c3c5c9bb9ba2f0bbbb7591732727268f9c13695d.png",
            onClick: function () {
                window.location="https://nickersoft.github.io/push.js/";
                this.close();
        }
    });
    </script>';
    ?>
    <script src="assets/js/main.js"></script>
</body>
</html>