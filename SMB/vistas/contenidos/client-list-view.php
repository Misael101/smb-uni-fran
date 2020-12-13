<div class="full-box page-header">
    <h3 class="text-left text-uppercase">
        <li><?php echo $lc->enrutador("cliente_new","inactivo",0); ?></li>
        <li><?php echo $lc->enrutador("cliente_list","activo",0); ?></li>
    </h3>
</div>

<div class="container-fluid">
    <?php
        require_once "./controladores/clienteControlador.php";
        $ins_cliente = new clienteControlador();

        echo $ins_cliente->paginador_cliente_controlador($pagina[1],15,$pagina[0],"");
    ?>
</div>