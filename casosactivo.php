
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Casos Activos</h1>
<!--<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p>-->

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <button class="btn btn-light btn-block" onclick="abrirUrl('nuevocaso.php', 'renderhtml')"><i class="fas fa-folder-plus"></i> Caso Nuevo</button>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTableCasoActivo" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Cédula Propietario</th>
                        <th>Propietario</th>
                        <th>Placa Vehiculo</th>
                        <th>Fecha Comienzo</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Cédula Propietario</th>
                        <th>Propietario</th>
                        <th>Placa Vehiculo</th>
                        <th>Fecha Comienzo</th>
                        <th>Acción</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php 
                    $r = 34;
                    for ($i=0; $i < $r ; $i++) { 
                        echo "
                        <tr>
                            <th>1000".$i."</th>
                            <th>Juan Pablo".$i."</th>
                            <th>ABC-".$i."</th>
                            <th>25/3/2022</th>
                            <th><a href='./casodetalle.php')'><i class='fas fa-eye'></i></a></th>
                        </tr>
                        ";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script type="text/javascript">
    var table = $('#dataTableCasoActivo').DataTable({
    language: {
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Entradas",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        }
    },
});
    $(document).ready(function() {
      $('#dataTableCasoActivo').DataTable();
    });
</script>