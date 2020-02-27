$(document).ready(function() {
    var tabla = 
    $('#tabla-datos').DataTable( {
        "language": {
            "lengthMenu": "Mostrar MENU registros por página",
            "zeroRecords": "Sin Resultados",
            "info": "Mostrando PAGE de PAGES resultados",
            "infoEmpty": "Sin registros disponibles",
            "infoFiltered": "(filtrado de MAX registros)",
            "search": "Buscar:",
            "paginate": {
		        "first":      "Primero",
		        "last":       "Último",
		        "next":       "Siguiente",
		        "previous":   "Anterior"
    		}
        }
    } );
    $('#input-buscar').on( 'keyup', function () {
    	tabla.search( this.value ).draw();
} );
} );