<section class="full-box nav-lateral">
    <div class="full-box nav-lateral-bg show-nav-lateral"></div>
    <div class="full-box nav-lateral-content">
        <figure class="full-box nav-lateral-avatar">
            <i class="far fa-times-circle show-nav-lateral"></i>
            
            <figcaption class="roboto-medium text-center">
            <?php echo $_SESSION['nombre_svi']; ?><br><small class="roboto-condensed-light"><?php echo $_SESSION['cargo_svi']; ?></small>
            </figcaption>
        </figure>
        <div class="full-box nav-lateral-bar"></div>
        <nav class="full-box nav-lateral-menu">
            <ul>
                <li>
                    <?php echo $lc->enrutador("dashboard","inactivo",0); ?>
                </li>

                <li>
                    <a href="#" class="nav-btn-submenu"><i class=""></i> &nbsp; Administración <i class="fas fa-chevron-down"></i></a>
                    <ul>
                        <?php if($_SESSION['cargo_svi']=="Administrador"){ ?>
                            <li> <?php echo $lc->enrutador("proveedor_new","inactivo",0); ?> </li>
                        <?php } ?>
                        <li> <?php echo $lc->enrutador("cliente_new","inactivo",0); ?> </li>
                        <li> <?php echo $lc->enrutador("docto_new","inactivo",0); ?> </li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="nav-btn-submenu"><i class=""></i> &nbsp; Seguimiento <i class="fas fa-chevron-down"></i></a>
                    <ul>
                        <?php if($_SESSION['cargo_svi']=="Administrador"){ ?>
                            <li> <?php echo $lc->enrutador("producto_new","inactivo",0); ?> </li>
                        <?php } ?>
                        <li> <?php echo $lc->enrutador("producto_list","inactivo",0); ?> </li>
                      
                        
                        <li> <?php echo $lc->enrutador("producto_expiration","inactivo",0); ?> </li>
                        <li> <?php echo $lc->enrutador("producto_minimum_stock","inactivo",0); ?> </li>
                        <li> <?php echo $lc->enrutador("producto_search","inactivo",0); ?> </li>
                    </ul>
                </li>
                
                <?php if($_SESSION['cargo_svi']=="Administrador"){ ?>
                <li>
                    <a href="#" class="nav-btn-submenu"><i class=""></i> &nbsp; Compras <i class="fas fa-chevron-down"></i></a>
                    <ul>
                        <li> <?php echo $lc->enrutador("compra_new","inactivo",0); ?> </li>
                        <li> <?php echo $lc->enrutador("compra_list","inactivo",0); ?> </li>
                        <li> <?php echo $lc->enrutador("compra_search","inactivo",0); ?> </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="nav-btn-submenu"><i class=""></i> &nbsp; Consultas <i class="fas fa-chevron-down"></i></a>
                    <ul>
                        <li> <?php echo $lc->enrutador("kardex_product","inactivo",0); ?> </li>
                    </ul>
                </li>
                <?php } ?>
            </ul>
        </nav>
    </div>
</section>