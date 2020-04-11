new Vue({
	el: "#app",
	data : {
		datos_productos : [{
			codigo : '024578',
			nombre : 'Escopeta 12', 
			registro : '45457878',
			disponibilidad : '36',
			precio_compra : '450',
			precio_venta : '900',
		},
		{
			codigo : '00125547',
			nombre : 'Caja de Munición .35', 
			registro : '774477',
			disponibilidad : '25',
			precio_compra : '100',
			precio_venta : '200',
		},
		{
			codigo : '366554',
			nombre : 'Arma Corta', 
			registro : '55223366',
			disponibilidad : '23',
			precio_compra : '2500',
			precio_venta : '5000',
		},
		{
			codigo : '98732',
			nombre : 'Pistola Cabro', 
			registro : '0023',
			disponibilidad : '3',
			precio_compra : '1850',
			precio_venta : '3250',
		},
		{
			codigo : '6363',
			nombre : 'Arma Corta', 
			registro : '55223366',
			disponibilidad : '23',
			precio_compra : '2500',
			precio_venta : '5000',
		},
		{
			codigo : '778754',
			nombre : 'Arma Corta', 
			registro : '55223366',
			disponibilidad : '23',
			precio_compra : '2500',
			precio_venta : '5000',
		},
		{
			codigo : '3654',
			nombre : 'Arma Corta', 
			registro : '55223366',
			disponibilidad : '23',
			precio_compra : '2500',
			precio_venta : '5000',
		},
		{
			codigo : '99896',
			nombre : 'Arma Corta', 
			registro : '55223366',
			disponibilidad : '23',
			precio_compra : '2500',
			precio_venta : '5000',
		}],
		detalle_compra : [],
		total : 0
	},
	methods : {
		agregarDetalleCompra(dato){
			if (this.detalle_compra.some(detalle => detalle.codigo === dato.codigo)) {
				 for (var i in this.detalle_compra){
				 	if (this.detalle_compra[i].codigo === dato.codigo){
				 		this.detalle_compra[i].cantidad ++;
				 		break;
				 	}
				 }
			}else{
					this.detalle_compra.push({
					codigo : dato.codigo,
					nombre : dato.nombre,
					cantidad : 1,
					precio : dato.precio
				});	
			}
			this.calcularTotal();
		},
		actualizarCantidad(cod){
			if (event.target.value.length != 0) {
				var cantidad = event.target.value;
				if (cantidad <= 0) {
					cantidad = 1;
				}
				for (var i in this.detalle_compra){
					if (this.detalle_compra[i].codigo === cod) {
						this.detalle_compra[i].cantidad = cantidad;
						break;
					}
				}
				this.calcularTotal();
			}
		},
		actualizarPrecio(cod){
			if (event.target.value.length != 0) {
				var precio = event.target.value;
				if (precio <= 0) {
					precio = 1;
				}
				for (var i in this.detalle_compra){
					if (this.detalle_compra[i].codigo === cod) {
						this.detalle_compra[i].precio = precio;
						break;
					}
				}
				this.calcularTotal();
			}
		},
		calcularTotal(){
			var subTotal = 0;
			for (var i in this.detalle_compra){
				subTotal += 
				this.detalle_compra[i].cantidad * 
				this.detalle_compra[i].precio;
			}
			this.total = subTotal;
		},
		eliminarDetalleCompra(dato){
			this.detalle_compra.splice(this.detalle_compra.indexOf(dato),1);
		}
	}
});