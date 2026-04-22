<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Clientes de Industrial GA S.A.C - Empresas que confían en nuestros postes de concreto.">
    <title>Clientes | IGASAC</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/igasac.css">
</head>

<body class="igasac-page">
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <a href="index.php" class="nav-brand"><img src="../assets/img/LOGO-IGASAC1.jpg" alt="IGASAC"><span>IGASAC</span></a>
            <div class="nav-links" id="navLinks">
                <a href="index.php">Inicio</a><a href="nosotros.php">Nosotros</a><a href="productos.php">Productos</a>
                <a href="clientes.php" class="active">Clientes</a><a href="contacto.php">Contáctanos</a>
            </div>
            <button class="nav-toggle" onclick="document.getElementById('navLinks').classList.toggle('open')">☰</button>
        </div>
    </nav>

    <section class="section" style="padding-top:120px;">
        <h2 class="section-title">Nuestros <span>Clientes</span></h2>
        <p class="section-subtitle">Empresas e instituciones que confían en la calidad de nuestros postes de concreto.</p>
        <div class="clients-grid">
            <?php
            $clientes = [
                ["../assets/img/eletro-oriente.png", "ELECTRO ORIENTE S.A.", "Proyectos de electrificación rural"],
                ["../assets/img/don-pollo.jpg", "DON POLLO LORETO S.A.C", "Electificación de sus Obras"],
                ["../assets/img/unap.jpg", "UNIVERSIDAD NACIONAL DE LA AMAZONIA PERUANA", "Proyectos de media tensión"],
                ["../assets/img/urarinas.jpg", "Municipalidad Provincial de Urarinas", "Alumbrado Público y Vías"],
                ["../assets/img/consorcio.jpg", "CONSORCIO Y CONTRATISTAS DE LA REGION", "Infraestructura industrial"],
            ];
            foreach ($clientes as $c): ?>
                <div class="client-card">
                    <div class="client-logo-wrapper">
                        <img src="<?php echo $c[0]; ?>" alt="<?php echo $c[1]; ?>" class="client-logo">
                    </div>
                    <h4><?php echo $c[1]; ?></h4>
                    <p><?php echo $c[2]; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-brand">Industrial GA S.A.C</div>
            <div class="footer-links">
                <a href="index.php">Inicio</a><a href="nosotros.php">Nosotros</a><a href="productos.php">Productos</a>
                <a href="clientes.php">Clientes</a><a href="contacto.php">Contáctanos</a><a href="../index.php">← Grupo GA</a>
            </div>
            <p class="footer-text">&copy; <?php echo date('Y'); ?> Industrial GA S.A.C. Todos los derechos reservados.</p>
        </div>
    </footer>
    <script>
        window.addEventListener('scroll', function() {
            const n = document.getElementById('navbar');
            if (window.scrollY > 50) {
                n.classList.add('scrolled')
            } else {
                n.classList.remove('scrolled')
            }
        });
    </script>
</body>

</html>