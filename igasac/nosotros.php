<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Conozca la historia, misión y visión de Industrial GA S.A.C - Líderes en fabricación de postes de concreto.">
    <title>Nosotros | IGASAC</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/igasac.css">
</head>

<body class="igasac-page">
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <a href="index.php" class="nav-brand"><img src="../assets/img/LOGO-IGASAC1.jpg" alt="IGASAC"><span>IGASAC</span></a>
            <div class="nav-links" id="navLinks">
                <a href="index.php">Inicio</a>
                <a href="nosotros.php" class="active">Nosotros</a>
                <a href="productos.php">Productos</a>
                <a href="clientes.php">Clientes</a>
                <a href="contacto.php">Contáctanos</a>
            </div>
            <button class="nav-toggle" onclick="document.getElementById('navLinks').classList.toggle('open')">☰</button>
        </div>
    </nav>

    <section class="section" style="padding-top:120px;">
        <h2 class="section-title">Sobre <span>Nosotros</span></h2>
        <p class="section-subtitle">Más de 15 años de experiencia en la fabricación de postes de concreto armado centrifugado.</p>
        <div class="about-grid">
            <div class="about-img">
                <img src="../assets/img/FACHADA-IGASAC.jpg" alt="Fábrica IGASAC" style="border-radius:16px;">
            </div>
            <div class="about-text">
                <h3>Nuestra Historia</h3>
                <p>Industrial GA S.A.C nació con la visión de proveer soluciones de infraestructura eléctrica de alta calidad en LORETO. Desde nuestros inicios, nos hemos dedicado a la fabricación de postes de concreto armado centrifugado que cumplen con las más exigentes normas técnicas - NTP 339.027:2008.</p>
                <p>Contamos con una planta de producción moderna y un equipo de profesionales comprometidos con la excelencia, garantizando productos que superan los estándares del mercado.</p>
                <div class="stats-row">
                    <div class="stat-item">
                        <div class="stat-number">15+</div>
                        <div class="stat-label">Años de experiencia</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">5,000+</div>
                        <div class="stat-label">Postes fabricados</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">100+</div>
                        <div class="stat-label">Clientes satisfechos</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-dark">
        <h2 class="section-title">Misión y <span>Visión</span></h2>
        <div class="about-grid" style="margin-top:40px;">
            <div class="about-text">
                <h3>🎯 Misión</h3>
                <p>Fabricar y comercializar postes de concreto armado centrifugado de la más alta calidad, contribuyendo al desarrollo de la infraestructura eléctrica del país, con un compromiso firme con la seguridad, la innovación y la satisfacción de nuestros clientes.</p>
                <h3 style="margin-top:30px;">🔭 Visión</h3>
                <p>Ser la empresa líder en la fabricación de postes de concreto en el Perú, reconocida por la excelencia de nuestros productos, la confiabilidad de nuestro servicio y nuestro compromiso con el desarrollo sostenible.</p>
            </div>
            <div class="about-text">
                <h3>💎 Valores</h3>
                <p><strong style="color:var(--igasac-secondary);">Calidad:</strong> Cada poste es fabricado bajo estrictos controles de calidad y normas técnicas vigentes.</p>
                <p><strong style="color:var(--igasac-secondary);">Compromiso:</strong> Trabajamos con dedicación para cumplir con los plazos y requerimientos de nuestros clientes.</p>
                <p><strong style="color:var(--igasac-secondary);">Innovación:</strong> Invertimos en tecnología y procesos para mejorar constantemente nuestros productos.</p>
                <p><strong style="color:var(--igasac-secondary);">Seguridad:</strong> Priorizamos la seguridad en cada etapa de producción y en el producto final.</p>
            </div>
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