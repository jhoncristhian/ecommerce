<footer>
    <div class="footer-container">
        <div class="footer-section">
            <h3>PRODUCTO</h3>
            <ul>
                <li>Información general</li>
                <li>Business Intelligence</li>
                <li>Integración de datos</li>
                <li>Aplicaciones empresariales</li>
                <li>Análisis integrados</li>
                <li>Control</li>
                <li>Seguridad y cumplimiento</li>
                <li>Todas las funciones</li>
                <li>Nuevos lanzamientos</li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>SOLUCIONES</h3>
            <ul>
                <li>Dashboard para empresas</li>
                <li>Dashboard para negocios</li>
                <li>Dashboard para AWS</li>
                <li>Dashboard para Snowflake</li>
                <li>Por departamento</li>
                <li>Por sector</li>
                <li>Aplicaciones e integraciones</li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>RECURSOS</h3>
            <ul>
                <li>Versión de prueba gratuita</li>
                <li>Vea una demostración</li>
                <li>Hable con el equipo de ventas</li>
                <li>Biblioteca de recursos</li>
                <li>Blog</li>
                <li>Eventos</li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>DASHBOARD CENTRAL</h3>
            <ul>
                <li>Descripción de Dashboard Central</li>
                <li>Comunidad</li>
                <li>Ayuda</li>
                <li>Base de conocimientos</li>
                <li>Formación</li>
                <li>Documentos y API</li>
                <li>Asistencia y servicios</li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>EMPRESA</h3>
            <ul>
                <li>Información general</li>
                <li>Por qué Infravisiontech</li>
                <li>Clientes</li>
                <li>Socios</li>
                <li>Equipo directivo</li>
                <li>Noticias y medios de comunicación</li>
                <li>Oportunidades de empleo</li>
                <li>Contacte con nosotros</li>
            </ul>
        </div>
        <div class="footer-copyright">
    <div class="container">
        © <?= Date('Y'); ?> All rights reserved
        <a class="grey-text text-lighten-4 right animated slideInUp wow" href=""><i class="fa fa-heartbeat animated pulse infinite red-text"></i>InfraVision</a>
    </div>
</div>
    </div>
    </div>
</footer>
<style>
footer {    
    background-color: #151514;
    padding: 20px 0;
}

.footer-container {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.footer-section {
    width: 20%;
    padding: 0 10px;
}

.footer-section h3 {
    font-size: 18px;
    margin-bottom: 10px;
    color: #fff; /* Color de texto blanco */
}

.footer-section ul {
    list-style-type: none;
    padding: 0;
}

.footer-section ul li {
    margin-bottom: 5px;
    font-size: 14px;
    color: #ddd; /* Color de texto gris claro */
}

.footer-section ul li:hover {
    cursor: pointer;
    color: #e57029;
}

.footer-copyright {
    background-color: #151514;
    color: white;
    text-align: center;
    padding: 10px 0;
    position: relative; /* Cambiado a relativo */
    width: 100%;
    margin-top: auto; /* Agregado para alinear en la parte inferior */
}

.container {
    width: 80%;
    margin: 0 auto;
}

.container a {
    color: white;
}

/* Nuevo estilo para alinear en la parte inferior */
.footer-copyright .container {
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
}
</style>


<!--<footer class="page-footer">
    <div class="container footer-info">
        <div class="row">
            <div class="col s12 l4 ">
                <h5 class="grey-text text-lighten-3 animated slideInUp wow">Developers</h5>
                <ul>
                    <li>
                        <a class="grey-text text-lighten-3 animated slideInUp wow" href="https://github.com/sohammanjrekar">
                            <i class="tiny material-icons" style="position:relative;top:3px">
                                developer_mode
                            </i> 
                            Jhon Cristhian Parco
                        </a>
                    </li>
                    <!-- <li><a class="grey-text text-lighten-3 animated slideInUp wow" href="https://smakosh.com/"><i class="tiny material-icons" style="position:relative;top:3px">developer_mode</i>Sneaker World</a></li> 
                    <li></li>
                </ul>
            </div>
            <div class="col s12 l4 ">
                <h5 class="grey-text text-lighten-3 animated slideInUp wow">Categorias</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3 animated slideInUp wow" href="category.php?id=1">Plimsoll</a></li>
                    <li><a class="grey-text text-lighten-3 animated slideInUp wow" href="category.php?id=2">High Top Basketball</a></li>
                    <li><a class="grey-text text-lighten-3 animated slideInUp wow" href="category.php?id=3">Athletic Ones</a></li>
                    <li><a class="grey-text text-lighten-3 animated slideInUp wow" href="category.php?id=4">Slip On</a></li>
                    <li><a class="grey-text text-lighten-3 animated slideInUp wow" href="category.php?id=5">Authentic</a></li>
                    <li><a class="grey-text text-lighten-3 animated slideInUp wow" href="category.php?id=9">Textile Blend</a></li>
                </ul> 
            </div>

            <div class="col s12 l4 ">
                <h5 class="grey-text text-lighten-3 animated slideInUp wow">NEW</h5></br>
                 <ul>
                    <li><a class="grey-text text-lighten-3 animated slideInUp wow" href="category.php?id=6">	
Leather</a></li>
                    <li><a class="grey-text text-lighten-3 animated slideInUp wow" href="category.php?id=7">	
Canvas</a></li>
                    <li><a class="grey-text text-lighten-3 animated slideInUp wow" href="category.php?id=8">	
LED Lighted</a></li>
<li><a class="grey-text text-lighten-3 animated slideInUp wow" href="category.php?id=10">Synthetic</a></li>
<li><a class="grey-text text-lighten-3 animated slideInUp wow" href="category.php?id=11">	
Velcro</a></li>
<li><a class="grey-text text-lighten-3 animated slideInUp wow" href="category.php?id=12">Designer</a></li>
                </ul> 
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © <?= Date('Y'); ?> All rights reserved
            <a class="grey-text text-lighten-4 right animated slideInUp wow" href=""><i class="fa fa-heartbeat animated pulse infinite red-text"></i>InfraVision</a>

        </div>
    </div>
</footer>

