<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Productos y servicios de JGC Ingenieros - Ferretería eléctrica, alquiler de equipos, pozos a tierra, instalaciones eléctricas.">
    <title>Productos y Servicios | JGC Ingenieros</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/jgc.css">
</head>
<body class="jgc-page">
    <nav class="navbar-jgc" id="navbar">
        <div class="nav-container-jgc">
            <a href="index.php" class="nav-brand-jgc"><img src="../assets/img/logo-jgc.png" alt="JGC"><span>JGC Ingenieros</span></a>
            <div class="nav-links-jgc" id="navLinks">
                <a href="index.php">Inicio</a><a href="nosotros.php">Nosotros</a>
                <a href="productos.php" class="active">Productos</a><a href="clientes.php">Clientes</a><a href="contacto.php">Contáctanos</a>
            </div>
            <button class="nav-toggle-jgc" onclick="document.getElementById('navLinks').classList.toggle('open')">☰</button>
        </div>
    </nav>

    <!-- Productos de Ferretería -->
    <section class="section-jgc" style="padding-top:120px;">
        <h2 class="section-title-jgc">Productos de <span>Ferretería Eléctrica</span></h2>
        <p class="section-subtitle-jgc">Materiales y accesorios eléctricos de las mejores marcas.</p>
        <div class="products-jgc-grid">
            <?php
            $productos = [
                ["🔌","Cables y Conductores","Cables THW, NYY, NKY, LSOH. Diversas secciones desde 2.5mm² hasta 240mm²."],
                ["⚙️","Tableros Eléctricos","Tableros de distribución, control, fuerza y automatización industrial."],
                ["💡","Luminarias y Alumbrado","Luminarias LED industriales, reflectores, postes de alumbrado público."],
                ["🔩","Herrajes Eléctricos","Pernos, abrazaderas, grapas de retención, conectores bimetálicos, varillas de anclaje."],
                ["🛡️","Protecciones","Interruptores termomagnéticos, diferenciales, contactores, relés térmicos, fusibles NH."],
                ["📐","Aisladores","Aisladores tipo pin, suspensión, retención y line post para MT y BT."],
                ["🔋","Transformadores","Transformadores monofásicos y trifásicos, convencionales y autoprotegidos."],
                ["📦","Cajas y Gabinetes","Cajas de derivación, gabinetes NEMA, tableros de medición para concesionarias."],
                ["🔗","Conectores","Conectores de compresión, cuña, perforación de aislamiento y derivación."],
                ["🧰","Herramientas","Herramientas aisladas, prensas hidráulicas, cortacables, pelacables profesionales."],
                ["📏","Canalización","Tuberías PVC y EMT, bandejas portacables, canaletas y accesorios de canalización."],
                ["⚡","Puesta a Tierra","Varillas de cobre, sales minerales, bentonita, conductores de cobre desnudo, cajas de registro."],
            ];
            foreach ($productos as $p): ?>
            <div class="product-jgc-card">
                <div class="product-jgc-icon"><?php echo $p[0]; ?></div>
                <h4><?php echo $p[1]; ?></h4>
                <p><?php echo $p[2]; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Servicios -->
    <section class="section-jgc section-dark">
        <h2 class="section-title-jgc">Nuestros <span>Servicios</span></h2>
        <p class="section-subtitle-jgc">Servicios profesionales de ingeniería eléctrica con personal calificado.</p>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">⚡</div>
                <h3>Alquiler de Equipos Eléctricos</h3>
                <p>Equipos de medición y diagnóstico eléctrico para alquiler por día, semana o mes.</p>
                <ul class="service-list">
                    <li>Telurómetro digital</li>
                    <li>Megóhmetro (medidor de aislamiento)</li>
                    <li>Analizador de calidad de energía</li>
                    <li>Cámara termográfica</li>
                    <li>Detector de fases y secuencia</li>
                    <li>Multímetro de alta precisión</li>
                </ul>
            </div>
            <div class="service-card">
                <div class="service-icon">🔧</div>
                <h3>Pozos a Tierra</h3>
                <p>Servicio integral de sistemas de puesta a tierra para protección eléctrica.</p>
                <ul class="service-list">
                    <li>Instalación de pozos a tierra</li>
                    <li>Mantenimiento preventivo y correctivo</li>
                    <li>Suministro de materiales completo</li>
                    <li>Medición de resistividad del terreno</li>
                    <li>Protocolo de pruebas y certificación</li>
                    <li>Asesoría técnica especializada</li>
                </ul>
            </div>
            <div class="service-card">
                <div class="service-icon">🏗️</div>
                <h3>Instalaciones Eléctricas en Media y Baja Tensión</h3>
                <p>Diseño, montaje y puesta en servicio de instalaciones eléctricas.</p>
                <ul class="service-list">
                    <li>Redes de distribución en baja tensión</li>
                    <li>Líneas primarias en media tensión</li>
                    <li>Subestaciones de distribución</li>
                    <li>Celdas de media tensión</li>
                    <li>Sistemas de medición centralizada</li>
                    <li>Mantenimiento de redes eléctricas</li>
                </ul>
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
