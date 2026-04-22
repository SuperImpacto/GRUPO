<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Clientes de JGC Ingenieros E.I.R.L - Empresas que confían en nuestros servicios eléctricos.">
    <title>Clientes | JGC Ingenieros</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/jgc.css">
</head>
<body class="jgc-page">
    <nav class="navbar-jgc" id="navbar">
        <div class="nav-container-jgc">
            <a href="index.php" class="nav-brand-jgc"><img src="../assets/img/logo-jgc.png" alt="JGC"><span>JGC Ingenieros</span></a>
            <div class="nav-links-jgc" id="navLinks">
                <a href="index.php">Inicio</a><a href="nosotros.php">Nosotros</a><a href="productos.php">Productos</a>
                <a href="clientes.php" class="active">Clientes</a><a href="contacto.php">Contáctanos</a>
            </div>
            <button class="nav-toggle-jgc" onclick="document.getElementById('navLinks').classList.toggle('open')">☰</button>
        </div>
    </nav>

    <section class="section-jgc" style="padding-top:120px;">
        <h2 class="section-title-jgc">Nuestros <span>Clientes</span></h2>
        <p class="section-subtitle-jgc">Empresas y contratistas que confían en nuestros servicios de ingeniería eléctrica.</p>
        <div class="clients-jgc-grid">
            <?php
            $clientes = [
                ["🏗️","Contratistas Eléctricos del Sur","Instalaciones eléctricas industriales"],
                ["⚡","Electro Puno S.A.A.","Distribución eléctrica"],
                ["🏢","Municipalidad Distrital","Alumbrado público"],
                ["🏭","Minera Andina S.A.","Instalaciones mineras"],
                ["🔌","Constructora Eléctrica Lima","Proyectos de electrificación"],
                ["🏠","Inmobiliaria Horizonte","Habilitaciones residenciales"],
                ["⚙️","Industria Metalúrgica SAC","Mantenimiento eléctrico industrial"],
                ["🌄","Proyecto Rural Energía","Electrificación rural"],
            ];
            foreach ($clientes as $c): ?>
            <div class="client-jgc-card">
                <div class="icon"><?php echo $c[0]; ?></div>
                <h4><?php echo $c[1]; ?></h4>
                <p><?php echo $c[2]; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <footer class="footer footer-jgc">
        <div class="footer-content">
            <div class="footer-brand">JGC Ingenieros E.I.R.L</div>
            <div class="footer-links">
                <a href="index.php">Inicio</a><a href="nosotros.php">Nosotros</a><a href="productos.php">Productos</a>
                <a href="clientes.php">Clientes</a><a href="contacto.php">Contáctanos</a><a href="../index.php">← Grupo GA</a>
            </div>
            <p class="footer-text">&copy; <?php echo date('Y'); ?> JGC Ingenieros E.I.R.L. Todos los derechos reservados.</p>
        </div>
    </footer>
    <script>window.addEventListener('scroll',function(){const n=document.getElementById('navbar');if(window.scrollY>50){n.classList.add('scrolled')}else{n.classList.remove('scrolled')}});</script>
</body>
</html>
