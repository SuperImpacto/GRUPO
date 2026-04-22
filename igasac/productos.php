<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Catálogo de postes de concreto armado centrifugado - Industrial GA S.A.C. Cotiza por WhatsApp.">
    <title>Productos | IGASAC</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/igasac.css">
</head>

<body class="igasac-page">
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <a href="index.php" class="nav-brand"><img src="../assets/img/LOGO-IGASAC1.jpg" alt="IGASAC"><span>IGASAC</span></a>
            <div class="nav-links" id="navLinks">
                <a href="index.php">Inicio</a><a href="nosotros.php">Nosotros</a>
                <a href="productos.php" class="active">Productos</a><a href="clientes.php">Clientes</a><a href="contacto.php">Contáctanos</a>
            </div>
            <button class="nav-toggle" onclick="document.getElementById('navLinks').classList.toggle('open')">☰</button>
        </div>
    </nav>

    <section class="section" style="padding-top:120px;">
        <h2 class="section-title">Catálogo de <span>Productos</span></h2>
        <p class="section-subtitle">Seleccione una categoría para ver nuestros productos de alta calidad.</p>

        <?php
        $whatsapp = "51965610350";
        $cat_activa = isset($_GET['cat']) ? $_GET['cat'] : 'cac';

        $productos_cac = [
            ["Poste de Concreto Centrifugado de 5 m con caja", "Poste de concreto armado centrifugado con caja porta medidor.", "Consulte Precio", "poste-concreto-1.png"],
            ["Poste de Concreto Centrifugado de 6 m con caja", "Poste de concreto armado centrifugado con caja porta medidor.", "Consulte Precio", "poste-concreto-2.png"],
            ["Poste de Concreto Centrifugado de 7 m 200 Kg", "Poste de concreto armado centrifugado de 7 metros.", "Consulte Precio", "poste-concreto-3.png"],
            ["Poste de Concreto Centrifugado de 8 m 200 Kg punta 120mm", "Poste de concreto armado centrifugado de 8 metros.", "Consulte Precio", "poste1.png"],
            ["Poste de Concreto Centrifugado de 8 m 200 Kg punta 140mm ó 150mm", "Poste de concreto armado centrifugado de 8 metros.", "Consulte Precio", "poste-concreto-1.png"],
            ["Poste de Concreto Centrifugado de 8 m 300 Kg punta 140mm - 150mm", "Poste de concreto armado centrifugado de 8 metros.", "Consulte Precio", "poste-concreto-2.png"],
            ["Poste de Concreto Centrifugado de 9 m 200 Kg punta 120mm", "Poste de concreto armado centrifugado de 9 metros.", "Consulte Precio", "poste-concreto-3.png"],
            ["Poste de Concreto Centrifugado de 9 m 200 Kg punta 140mm - 150mm", "Poste de concreto armado centrifugado de 9 metros.", "Consulte Precio", "poste-concreto-1.png"],
            ["Poste de Concreto Centrifugado de 9 m 300 Kg punta 140mm - 150mm", "Poste de concreto armado centrifugado de 9 metros.", "Consulte Precio", "poste-concreto-2.png"],
            ["Poste de Concreto Centrifugado de 11/300 Kg punta 165mm", "Poste de concreto armado centrifugado de 11 metros.", "Consulte Precio", "poste-concreto-3.png"],
            ["Poste de Concreto Centrifugado de 12/300/165/360", "Poste de concreto armado centrifugado de 12 metros.", "Consulte Precio", "poste-concreto-1.png"],
            ["Poste de Concreto Centrifugado de 12/400/165/360", "Poste de concreto armado centrifugado de 12 metros.", "Consulte Precio", "poste-concreto-2.png"],
            ["Poste de Concreto Centrifugado de 13/300/165/375", "Poste de concreto armado centrifugado de 13 metros.", "Consulte Precio", "poste-concreto-3.png"],
            ["Poste de Concreto Centrifugado de 13/400/165/375", "Poste de concreto armado centrifugado de 13 metros.", "Consulte Precio", "poste-concreto-1.png"],
            ["Poste de Concreto Centrifugado de 13/300 Kg punta 180mm", "Poste de concreto armado centrifugado de 13 metros.", "Consulte Precio", "poste-concreto-2.png"],
            ["Poste de Concreto Centrifugado de 13/400 Kg punta 180mm", "Poste de concreto armado centrifugado de 13 metros.", "Consulte Precio", "poste-concreto-3.png"],
        ];

        $productos_cav = [
            ["Bloquetas de Concreto 0.20x0.20x0.15m", "Bloqueta de concreto armado vibrado para cimentación y soporte.", "Consulte Precio", "logos-igasac.png"],
            ["Bloquetas de Concreto 0.30x0.30x0.15m", "Bloqueta de concreto armado vibrado para cimentación y soporte.", "Consulte Precio", "logos-igasac.png"],
            ["Bloquetas de Concreto 0.40x0.40x0.15m", "Bloqueta de concreto armado vibrado para cimentación y soporte.", "Consulte Precio", "logos-igasac.png"],
            ["Bloquetas de Concreto 0.50x0.50x0.15m", "Bloqueta de concreto armado vibrado para cimentación y soporte.", "Consulte Precio", "logos-igasac.png"],
            ["Caja de Concreto con tapa 0.30x0.30m", "Caja de registro de concreto con tapa reforzada.", "Consulte Precio", "logos-igasac.png"],
            ["Caja de Concreto con tapa 0.40x0.40m", "Caja de registro de concreto con tapa reforzada.", "Consulte Precio", "logos-igasac.png"],
            ["Cruceta C.A. Simétrico 1.20m", "Cruceta de concreto armado simétrico para redes eléctricas.", "Consulte Precio", "logos-igasac.png"],
            ["Cruceta C.A. Simétrico 1.50m", "Cruceta de concreto armado simétrico para redes eléctricas.", "Consulte Precio", "logos-igasac.png"],
            ["Cruceta C.A. Simétrico 2.00m", "Cruceta de concreto armado simétrico para redes eléctricas.", "Consulte Precio", "logos-igasac.png"],
            ["Cruceta C.A. Asimétrico 1.50m", "Cruceta de concreto armado asimétrico para redes eléctricas.", "Consulte Precio", "logos-igasac.png"],
            ["Ménsula de Concreto Armado 0.60m", "Ménsula de concreto armado para soporte de conductores.", "Consulte Precio", "logos-igasac.png"],
            ["Ménsula de Concreto Armado 1.00m", "Ménsula de concreto armado para soporte de conductores.", "Consulte Precio", "logos-igasac.png"],
            ["Ménsula de Concreto Armado 1.20m", "Ménsula de concreto armado para soporte de conductores.", "Consulte Precio", "logos-igasac.png"],
            ["Ménsula de Concreto Armado 1.50m", "Ménsula de concreto armado para soporte de conductores.", "Consulte Precio", "logos-igasac.png"],
            ["Murete C.A. Monofásico", "Murete de concreto armado con caja porta medidor monofásico.", "Consulte Precio", "logos-igasac.png"],
            ["Murete C.A. Trifásico", "Murete de concreto armado con caja porta medidor trifásico.", "Consulte Precio", "logos-igasac.png"],
            ["Plataforma de C.A. 1.10m", "Plataforma de concreto armado para transformación.", "Consulte Precio", "logos-igasac.png"],
            ["Plataforma C.A. 1.10m Ø 340mm", "Plataforma de concreto armado reforzada Ø 340 mm.", "Consulte Precio", "logos-igasac.png"],
            ["Plataforma C.A. 1.30m Ø 325mm", "Plataforma de concreto armado reforzada Ø 325 mm.", "Consulte Precio", "logos-igasac.png"],
            ["Plataforma C.A. 1.50m Ø 325mm", "Plataforma de concreto armado reforzada Ø 325 mm.", "Consulte Precio", "logos-igasac.png"],
            ["Palomilla de C.A. 1.10m", "Palomilla de concreto armado para redes de distribución.", "Consulte Precio", "logos-igasac.png"],
            ["Palomilla de C.A. 1.30m y 1.40m", "Palomilla de concreto armado para redes de distribución.", "Consulte Precio", "logos-igasac.png"],
            ["Palomilla C.A.V. 1.50m Ø 300mm", "Palomilla de concreto armado vibrado Ø 300 mm.", "Consulte Precio", "logos-igasac.png"],
        ];

        $items = ($cat_activa == 'cav') ? $productos_cav : $productos_cac;
        $nombreCat = ($cat_activa == 'cav') ? "ACCESORIOS DE C.A.V" : "POSTES DE C.A.C";
        ?>

        <div class="tabs-container">
            <a href="?cat=cac" class="tab-btn <?php echo ($cat_activa == 'cac') ? 'active' : ''; ?>">POSTES DE C.A.C</a>
            <a href="?cat=cav" class="tab-btn <?php echo ($cat_activa == 'cav') ? 'active' : ''; ?>">ACCESORIOS DE C.A.V</a>
        </div>

        <h3 class="category-title"><?php echo $nombreCat; ?></h3>
        <div class="products-grid">
            <?php foreach ($items as $i => $p): 
                $msg = urlencode("Hola IGASAC, me interesa cotizar: " . $p[0]);
            ?>
                <div class="product-card">
                    <div class="product-img-wrapper">
                        <img src="../assets/img/<?php echo $p[3]; ?>" alt="<?php echo $p[0]; ?>" class="product-img">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name"><?php echo $p[0]; ?></h3>
                        <p class="product-desc"><?php echo $p[1]; ?></p>
                        <div class="product-price"><?php echo $p[2]; ?></div>
                        <a href="https://wa.me/<?php echo $whatsapp; ?>?text=<?php echo $msg; ?>" target="_blank" class="btn-whatsapp">
                            <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        COTIZAR
                    </a>
                </div>
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