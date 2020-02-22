console.log('hola mundo');
$('#selectCategoria').on('change', function() {
    $("#selectCategoria option:selected").each(function () {
            $('#productos').val(
            	$(this).attr('identificador'));
    });
});
$('#selectTipoCategoria').on('change', function() {
    $("#selectTipoCategoria option:selected").each(function () {
            $('#productos').val(
            	$('#productos').val() + 
            	$(this).attr('identificador'));
    });
});
$('#selectMarca').on('change', function() {
    $("#selectMarca option:selected").each(function () {
            $('#productos').val(
            	$('#productos').val() + 
            	$(this).attr('identificador'));
    });
});
$('#selectModelo').on('change', function() {
    $("#selectModelo option:selected").each(function () {
            $('#productos').val(
            	$('#productos').val() + 
            	$(this).attr('identificador'));
            $('#nombre-producto').val(
                $(this).attr('nombre_modelo'));
    });

});
$('#selectCalibre').on('change', function() {
    $("#selectCalibre option:selected").each(function () {
            $('#productos').val(
            	$('#productos').val() + 
            	$(this).attr('identificador'));
    });
});
