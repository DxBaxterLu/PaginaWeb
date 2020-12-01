<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv='Content' content='IE=edge'>
    <title> <?= $data['page_tag'];?> </title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
    <link rel='stylesheet' type='text/css' href='/assets/css/style.css'>
    
</head>
<body>
    <header>
        <nav>
            <a href="<?= base_url(); ?>home"><i class="fas fa-home"></i> Inicio</a>
            <a href="<?= base_url(); ?>alerta"><i class="fas fa-exclamation-triangle"></i> Alerta</a>
            <a href="<?= base_url(); ?>cotizador"><i class="fas fa-quote-right"></i> Cotizador</a>
            <a href="<?= base_url(); ?>login"><i class="fas fa-door-open"></i> Ingreso</a>
        </nav>
        <section class="textos-header">
            <h1>Locker Box </h1>
            <h2>Adquiere tus compras electronicas con la modalidad de Casillero Electronico</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #fff;"></path>
            </svg></div>
    </header>
    <main>
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">Nuestro producto</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="<?= base_url(); ?>assets/img/ilustracion2.svg" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                    <h3><span>1</span>¿CÓMO FUNCIONA LOCKER BOX?</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt veniam eius aspernatur ad
                        consequuntur aperiam minima sed dicta odit numquam sapiente quam eum, architecto animi pariatur,
                        velit doloribus laboriosam ut.</p>
                    <h3><span>2</span>¡NO OLVIDES ALERTAR TU COMPRA!</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt veniam eius aspernatur ad
                        consequuntur aperiam minima sed dicta odit numquam sapiente quam eum, architecto animi pariatur,
                        velit doloribus laboriosam ut.</p>
                </div>
            </div>
        </section>
        <section class="portafolio">
            <div class="contenedor">
                <h2 class="titulo">Portafolio</h2>
                <div class="galeria-port">
                    <div class="imagen-port">
                        <img src="<?= base_url(); ?>assets/img/img2.png" alt="">
                        <div class="hover-galeria">
                            <img src="<?= base_url(); ?>assets/img/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="<?= base_url(); ?>assets/img/img2.png" alt="">
                        <div class="hover-galeria">
                            <img src="<?= base_url(); ?>assets/img/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="<?= base_url(); ?>assets/img/img2.png" alt="">
                        <div class="hover-galeria">
                            <img src="<?= base_url(); ?>assets/img/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="<?= base_url(); ?>assets/img/img2.png" alt="">
                        <div class="hover-galeria">
                            <img src="<?= base_url(); ?>assets/img/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="<?= base_url(); ?>assets/img/img2.png" alt="">
                        <div class="hover-galeria">
                            <img src="<?= base_url(); ?>assets/img/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="<?= base_url(); ?>assets/img/img2.png" alt="">
                        <div class="hover-galeria">
                            <img src="<?= base_url(); ?>assets/img/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="<?= base_url(); ?>assets/img/img2.png" alt="">
                        <div class="hover-galeria">
                            <img src="<?= base_url(); ?>assets/img/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="<?= base_url(); ?>assets/img/img2.png" alt="">
                        <div class="hover-galeria">
                            <img src="<?= base_url(); ?>assets/img/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="clientes contenedor">
            <h2 class="titulo">Que dicen nuestros clientes</h2>
            <div class="cards">
                <div class="card">
                    <img src="<?= base_url(); ?>assets/img/face1.png" alt="">
                    <div class="contenido-texto-card">
                        <h4>Name</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, sapiente!</p>
                    </div>
                </div>
                <div class="card">
                    <img src="<?= base_url(); ?>assets/img/face2.png" alt="">
                    <div class="contenido-texto-card">
                        <h4>Name</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, sapiente!</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-services">
            <div class="contenedor">
                <h2 class="titulo">Nuestros servicios</h2>
                <div class="servicio-cont">
                    <div class="servicio-ind">
                        <img src="<?= base_url(); ?>assets/img/ilustracion1.svg" alt="">
                        <h3>Name</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, qui?</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="<?= base_url(); ?>assets/img/ilustracion4.svg" alt="">
                        <h3>Name</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, qui?</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="<?= base_url(); ?>assets/img/ilustracion3.svg" alt="">
                        <h3>Name</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, qui?</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Phone</h4>
                <p>8296312</p>
            </div>
            <div class="content-foo">
                <h4>Email</h4>
                <p>8296312</p>
            </div>
            <div class="content-foo">
                <h4>Location</h4>
                <p>8296312</p>
            </div>
        </div>
        <h2 class="titulo-final">&copy; DxBaxterLu | Davo MB</h2>
    </footer>

</body>
</html>