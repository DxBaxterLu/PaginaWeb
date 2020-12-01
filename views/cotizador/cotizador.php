
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv='Content' content='IE=edge'>
    <title>Document</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
    <link rel='stylesheet' type='text/css' href='/assets/css/style.css'>
</head>
<body>
    <header id="header-pages">
        <nav>
            <a href="<?= base_url(); ?>home"><i class="fas fa-home"></i> Inicio</a>
            <a href="<?= base_url(); ?>alerta"><i class="fas fa-exclamation-triangle"></i> Alerta</a>
            <a href="<?= base_url(); ?>cotizador"><i class="fas fa-quote-right"></i> Cotizador</a>
            <a href="<?= base_url(); ?>login"><i class="fas fa-door-open"></i> Ingreso</a>
        </nav>
    </header>
    <p>pagina de cotizador</p>

    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.0/axios.min.js"></script>
</body>
</html>