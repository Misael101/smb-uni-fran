<?php
    include "./vistas/inc/admin_security.php";
?>
<div class="full-box page-header">
    <h3 class="text-left text-uppercase">
   
        <li><?php echo $lc->enrutador("proveedor_new","inactivo",0); ?></li>
        <li><?php echo $lc->enrutador("proveedor_list","activo",0); ?></li>
    	
</div>

<div class="container-fluid">
    <?php
        require_once "./controladores/proveedorControlador.php";
        $ins_proveedor = new proveedorControlador();

        echo $ins_proveedor->paginador_proveedor_controlador($pagina[1],15,$pagina[0],"");
    ?>
</div>