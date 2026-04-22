<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="JGC Ingenieros E.I.R.L - Ferretería eléctrica, alquiler de equipos, pozos a tierra e instalaciones eléctricas.">
    <title>JGC Ingenieros E.I.R.L</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/jgc.css">
</head>
<body class="jgc-page">
    <nav class="navbar-jgc" id="navbar">
        <div class="nav-container-jgc">
            <a href="index.php" class="nav-brand-jgc"><img src="../assets/img/logo-jgc.png" alt="JGC"><span>JGC Ingenieros</span></a>
            <div class="nav-links-jgc" id="navLinks">
                <a href="index.php" class="active">Inicio</a><a href="nosotros.php">Nosotros</a>
                <a href="productos.php">Productos</a><a href="clientes.php">Clientes</a><a href="contacto.php">Contáctanos</a>
            </div>
            <button class="nav-toggle-jgc" onclick="document.getElementById('navLinks').classList.toggle('open')">☰</button>
        </div>
    </nav>

    <!-- Hero -->
    <section class="hero-jgc" id="hero-jgc">
        <div class="hero-jgc-content">
            <h1>Soluciones en <span>Ingeniería Eléctrica</span></h1>
            <p>Ferretería eléctrica, alquiler de equipos, instalaciones en media y baja tensión, pozos a tierra y más. Su socio confiable en servicios eléctricos.</p>
            <a href="productos.php" class="hero-btn-jgc">Nuestros Servicios →</a>
        </div>
    </section>

    <!-- Servicios Principales -->
    <section class="section-jgc section-dark" id="servicios">
        <h2 class="section-title-jgc">Nuestros <span>Servicios</span></h2>
        <p class="section-subtitle-jgc">Ofrecemos una gama completa de servicios eléctricos profesionales para su empresa o proyecto.</p>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">🔌</div>
                <h3>Ferretería Eléctrica</h3>
                <p>Amplio stock de materiales y accesorios eléctricos para todo tipo de instalaciones y proyectos.</p>
                <ul class="service-list">
                    <li>Cables y conductores eléctricos</li>
                    <li>Conectores y terminales</li>
                    <li>Interruptores y tableros</li>
                    <li>Transformadores y accesorios</li>
                    <li>Aisladores y herrajes</li>
                </ul>
            </div>
            <div class="service-card">
                <div class="service-icon">⚡</div>
                <h3>Alquiler de Equipos Eléctricos</h3>
                <p>Equipos profesionales de medición y diagnóstico eléctrico disponibles para alquiler.</p>
                <ul class="service-list">
                    <li>Telurómetros digitales</li>
                    <li>Megóhmetros</li>
                    <li>Analizadores de redes</li>
                    <li>Pinzas amperimétricas</li>
                    <li>Equipos de termografía</li>
                </ul>
            </div>
            <div class="service-card">
                <div class="service-icon">🔧</div>
                <h3>Pozos a Tierra</h3>
                <p>Servicio integral de pozos a tierra: instalación, mantenimiento y suministro de materiales.</p>
                <ul class="service-list">
                    <li>Instalación de pozos a tierra</li>
                    <li>Mantenimiento preventivo y correctivo</li>
                    <li>Suministro de materiales (varillas, sales, bentonita)</li>
                    <li>Medición de resistividad</li>
                    <li>Certificación y protocolo de pruebas</li>
                </ul>
            </div>
            <div class="service-card">
                <div class="service-icon">🏗️</div>
                <h3>Instalaciones Eléctricas</h3>
                <p>Diseño, ejecución y supervisión de instalaciones eléctricas en media y baja tensión.</p>
                <ul class="service-list">
                    <li>Instalaciones en baja tensión (BT)</li>
                    <li>Instalaciones en media tensión (MT)</li>
                    <li>Montaje de subestaciones</li>
                    <li>Tendido de redes eléctricas</li>
                    <li>Mantenimiento de redes de distribución</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Productos Destacados -->
    <section class="section-jgc" id="productos-jgc">
        <h2 class="section-title-jgc">Productos de <span>Ferretería Eléctrica</span></h2>
        <p class="section-subtitle-jgc">Materiales y accesorios eléctricos de las mejores marcas del mercado.</p>
        <div class="products-jgc-grid">
            <?php
            $productos_jgc = [
                ["🔌","Cables y Conductores","Cables THW, NYY, NKY, LSOH en diversas secciones y calibres para todo tipo de aplicación."],
                ["⚙️","Tableros Eléctricos","Tableros de distribución, control y fuerza para instalaciones industriales y residenciales."],
                ["💡","Iluminación","Luminarias LED, reflectores, lámparas industriales y de alumbrado público."],
                ["🔩","Herrajes y Accesorios","Pernos, abrazaderas, grapas, conectores y accesorios para líneas de distribución."],
                ["🛡️","Protecciones Eléctricas","Interruptores termomagnéticos, diferenciales, fusibles y pararrayos."],
                ["📐","Aisladores","Aisladores tipo pin, suspensión y de retención para líneas de media y baja tensión."],
                ["🔋","Transformadores","Transformadores de distribución monofásicos y trifásicos de diversas potencias."],
                ["📦","Cajas y Gabinetes","Cajas de paso, gabinetes metálicos y de policarbonato para instalaciones."],
            ];
            foreach ($productos_jgc as $p): ?>
            <div class="product-jgc-card">
                <div class="product-jgc-icon"><?php echo $p[0]; ?></div>
                <h4><?php echo $p[1]; ?></h4>
                <p><?php echo $p[2]; ?></p>
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
