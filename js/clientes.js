function cambiarMunicipios(){
	var selectDepartamentos = documento.getElementById('select_departamento').value;
	if (selectDepartamentos === "Guatemala") {
		var array = ["Villa Nueva","Mixco"];
	}else if(selectDepartamentos === "Huehuetenango"){
		var array = ["San Juan Ixcor","Malacatancito"];
	}else{
		var array = [];
	}
	var string = "";
	for (var i = 0; i < array.lenght; i++) {
		string+=array[i];
	}
	document.getElementById('texto_prueba').innerHTML= string;
}