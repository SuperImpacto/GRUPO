<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Conozca la historia de JGC Ingenieros E.I.R.L - Especialistas en servicios eléctricos.">
    <title>Nosotros | JGC Ingenieros</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/jgc.css">
</head>
<body class="jgc-page">
    <nav class="navbar-jgc" id="navbar">
        <div class="nav-container-jgc">
            <a href="index.php" class="nav-brand-jgc"><img src="../assets/img/logo-jgc.png" alt="JGC"><span>JGC Ingenieros</span></a>
            <div class="nav-links-jgc" id="navLinks">
                <a href="index.php">Inicio</a><a href="nosotros.php" class="active">Nosotros</a>
                <a href="productos.php">Productos</a><a href="clientes.php">Clientes</a><a href="contacto.php">Contáctanos</a>
            </div>
            <button class="nav-toggle-jgc" onclick="document.getElementById('navLinks').classList.toggle('open')">☰</button>
        </div>
    </nav>

    <section class="section-jgc" style="padding-top:120px;">
        <h2 class="section-title-jgc">Sobre <span>Nosotros</span></h2>
        <p class="section-subtitle-jgc">Profesionales comprometidos con la excelencia en servicios eléctricos.</p>
        <div class="about-jgc-grid">
            <div class="about-jgc-text">
                <h3>Nuestra Historia</h3>
                <p>JGC Ingenieros E.I.R.L es una empresa peruana especializada en la comercialización de materiales de ferretería eléctrica y la prestación de servicios de ingeniería eléctrica. Nacimos con el objetivo de brindar soluciones integrales a empresas constructoras, contratistas eléctricos y clientes industriales.</p>
                <p>Contamos con un equipo de ingenieros electricistas y técnicos altamente capacitados, con amplia experiencia en instalaciones de media y baja tensión, sistemas de puesta a tierra y mantenimiento de redes eléctricas.</p>
            </div>
            <div class="about-jgc-values">
                <div class="value-item"><div class="icon">🎯</div><h4>Misión</h4><p>Brindar soluciones eléctricas integrales con los más altos estándares de calidad y seguridad.</p></div>
                <div class="value-item"><div class="icon">🔭</div><h4>Visión</h4><p>Ser la empresa referente en servicios eléctricos y ferretería en la región.</p></div>
                <div class="value-item"><div class="icon">🛡️</div><h4>Seguridad</h4><p>Cumplimos con todas las normas de seguridad eléctrica vigentes.</p></div>
                <div class="value-item"><div class="icon">⭐</div><h4>Calidad</h4><p>Materiales y servicios certificados de primera calidad.</p></div>
            </div>
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
