<!-- Page header -->
<div class="full-box page-header">
    <h3 class="text-left">
        <i class="fab fa-dashcube fa-fw"></i> &nbsp; DASHBOARD
    </h3>
    <p class="text-justify">
        ¡Bienvenido <strong><?php echo $_SESSION['nombre_svi']." ".$_SESSION['apellido_svi']; ?></strong>!
    </p>
</div>
<div class="container-fluid">
    <div class="full-box tile-container">

    <?php
        /*---------- Inicio Opciones del administrador ----------*/
        if($_SESSION['cargo_svi']=="Administrador"){

        $total_cajas=$lc->datos_tabla("Normal","caja","caja_id",0);
    ?>
    
    <?php 
        $total_usuarios=$lc->datos_tabla("Normal","usuario WHERE usuario_id!='1' AND usuario_id!='".$_SESSION['id_svi']."'","usuario_id",0); 
    ?>
    <?php 
        $total_usuarios->closeCursor();
        $total_usuarios=$lc->desconectar($total_usuarios);
        } 
        /*---------- Fin Opciones del administrador ----------*/ 
    ?>    
    <?php 
        $total_clientes=$lc->datos_tabla("Normal","cliente WHERE cliente_id!='1'","cliente_id",0); 
    ?>
    <a href="<?php echo SERVERURL; ?>client-list/" class="tile">
        <div class="tile-tittle">Beneficiario</div>
        <div class="tile-icon">
            <object style="width: 100px; height: 100px" data="../vistas/assets/icons/rob.png" type="image/png">
             <img style="width: 100px; height: 100px" src = "./vistas/assets/icons/rob.png"/>
             </object>            
             <p class="tit"><?php echo $total_clientes->rowCount(); ?> Registrados</p>
        </div>
    </a>
    
    </div>
</div>