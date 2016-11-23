<!-- Nombre del asociado -->
<div class="well">
    <p>
        Asociados que han comprado este producto (<?php echo number_format(count($asociados), 0, '', '.'); ?>)
    </p>
</div><!-- Nombre del asociado -->
<!-- Tabla responsiva -->
<div class="table-responsive">
    <!-- Tabla -->
    <table id="tabla_productos" class="table">
        <!-- Cabecera -->
        <thead>
            <tr>
                <th class="alinear_centro" width="10%">Opc.</th>
                <th class="alinear_centro" width="5%">Nro.</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Celular</th>
                <th>Correo</th>
                <th>Teléfono casa</th>
                <th>Teléfono oficina</th>
                <th>Agencia</th>
            </tr>
        </thead><!-- Cabecera -->

        <!-- Cuerpo -->
        <tbody>
            <?php
            //Contador
            $cont = 1;
            
            // Recorrido de los datos
            foreach ($asociados as $asociado) {
                // $dato = $this->transferencia_model->buscar_asociado($asociado['id_cliente'], $this->session->userdata('id_empresa'));
            ?>
            <tr>
                <td></td>
                <td><?php echo $cont; ?></td>
                <td><?php echo $asociado['Nombre']; ?></td>
                <td><?php echo $asociado['PrimerApellido']." ".$asociado['SegundoApellido']; ?></td>
                <td><?php echo $asociado['Celular_cliente']; ?></td>
                <td><?php echo $asociado['CorreoElectronico']; ?></td>
                <td><?php echo $asociado['TelefonoCasa']; ?></td>
                <td><?php echo $asociado['TelefonoOficina']; ?></td>
                <td><?php echo $asociado['Oficina']; ?></td>
            </tr>
            <!-- Aumento de contador -->
            <?php $cont++; } //Foreach ?>
        </tbody><!-- Cuerpo -->
    </table><!-- Tabla -->
</div><!-- Tabla responsiva -->

<script type="text/javascript">
    $(document).ready(function(){
        // Inicialización de la tabla
        $('#tabla_productos').dataTable( {
            "bProcessing": true,
        }); // Tabla
        
        //valor = ajax("<?php echo site_url('crm/actualizar') ?>", {"tipo": "condicional"}, 'JSON');
        //imprimir(valor);        
    });//document.rady
</script>