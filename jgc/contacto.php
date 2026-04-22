<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contáctanos - JGC Ingenieros E.I.R.L. Solicite cotización de servicios eléctricos.">
    <title>Contáctanos | JGC Ingenieros</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/jgc.css">
</head>
<body class="jgc-page">
    <nav class="navbar-jgc" id="navbar">
        <div class="nav-container-jgc">
            <a href="index.php" class="nav-brand-jgc"><img src="../assets/img/logo-jgc.png" alt="JGC"><span>JGC Ingenieros</span></a>
            <div class="nav-links-jgc" id="navLinks">
                <a href="index.php">Inicio</a><a href="nosotros.php">Nosotros</a><a href="productos.php">Productos</a>
                <a href="clientes.php">Clientes</a><a href="contacto.php" class="active">Contáctanos</a>
            </div>
            <button class="nav-toggle-jgc" onclick="document.getElementById('navLinks').classList.toggle('open')">☰</button>
        </div>
    </nav>

    <section class="section-jgc" style="padding-top:120px;">
        <h2 class="section-title-jgc"><span>Contáctanos</span></h2>
        <p class="section-subtitle-jgc">Solicite su cotización o consulta técnica. Estamos para ayudarle.</p>
        <div class="contact-jgc-grid">
            <div class="contact-info-list">
                <div class="contact-item">
                    <div class="contact-jgc-icon">📍</div>
                    <div><h4>Dirección</h4><p>Jr. Comercio 456, Juliaca, Puno, Perú</p></div>
                </div>
                <div class="contact-item">
                    <div class="contact-jgc-icon">📞</div>
                    <div><h4>Teléfono</h4><p>+51 988 888 888</p></div>
                </div>
                <div class="contact-item">
                    <div class="contact-jgc-icon">✉️</div>
                    <div><h4>Email</h4><p>contacto@jgcingenieros.com.pe</p></div>
                </div>
                <div class="contact-item">
                    <div class="contact-jgc-icon">🕐</div>
                    <div><h4>Horario</h4><p>Lunes a Viernes: 8:00 AM - 6:00 PM<br>Sábados: 8:00 AM - 1:00 PM</p></div>
                </div>
                <a href="https://wa.me/51988888888?text=Hola%2C%20deseo%20información%20sobre%20servicios%20eléctricos" target="_blank" class="btn-whatsapp" style="max-width:280px;">
                    <svg viewBox="0 0 24 24" style="width:20px;height:20px;fill:#fff;"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                    Escribir por WhatsApp
                </a>
            </div>
            <form class="contact-form" onsubmit="event.preventDefault(); alert('Mensaje enviado. Nos comunicaremos pronto.');">
                <div class="form-group-jgc"><input type="text" placeholder="Nombre completo" required></div>
                <div class="form-group-jgc"><input type="email" placeholder="Correo electrónico" required></div>
                <div class="form-group-jgc"><input type="tel" placeholder="Teléfono"></div>
                <div class="form-group-jgc"><textarea placeholder="Escriba su consulta o solicitud de cotización..." required></textarea></div>
                <button type="submit" class="btn-submit-jgc">Enviar Mensaje</button>
            </form>
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
