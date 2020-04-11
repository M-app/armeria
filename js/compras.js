new Vue ({
    el : "#app",
    data : {
        proveedor_seleccionado : '',
        proveedores : [
            { identificador : "1", value : "Armería S.A" },
            { identificador : "2", value : "EscopX" },
            { identificador : "3", value : "SendEX"},
            { identificador : "4", value : "AArmas" },
            { identificador : "5", value : "Mmunicio S.A" }
        ],
        compra_seleccionada : {},
        detalle_seleccionado : [],
        compras : [
            {
                codigo : '1',
                licencia : '11585211',
                traslado : 't556651',
                factura : 'f858521',
                fecha : '22/11/19',
                proveedor : 'Armería S.A',
                descripción : 'Compra de munición de 45mm',
                total : 0
            },
            {
                codigo : '2',
                licencia : '224587522',
                traslado : 't65582',
                factura : 'f95352',
                fecha : '03/01/20',
                proveedor : 'EscopX',
                descripción : 'Compra de 10 escopetas',
                total : 0
            },
            {
                codigo : '3',
                licencia : '335658533',
                traslado : 't33653',
                factura : 'f56853',
                fecha : '07/01/20',
                proveedor : 'SendEX',
                descripción : 'Compra de una pistola',
                total : 0
            },
            {
                codigo : '4',
                licencia : '445558544',
                traslado : 't88564',
                factura : 'f66554',
                fecha : '11/01/20',
                proveedor : 'AArmas',
                descripción : 'Compra de un rifle',
                total : 0
            },
            {
                codigo : '5',
                licencia : '55252555',
                traslado : 't66555',
                factura : 'f63655',
                fecha : '15/02/20',
                proveedor : 'Mmunicio S.A',
                descripción : 'Compra de munición para rifle',
                total : 0
            }
        ],
        detalle_compra : {
            1 : [
                {
                    'codigo' : '3754',
                    'nombre' : 'Arma Corta',
                    'cantidad' : '3',
                    'precio' : '2500',
                    'total' : 7500
                },
                {
                    'codigo' : '3758',
                    'nombre' : 'Pistola Colprofx',
                    'cantidad' : '7',
                    'precio' : '1000',
                    'total' : 7000
                },
                {
                    'codigo' : '8855',
                    'nombre' : 'Caja munición .35',
                    'cantidad' : '50',
                    'precio' : '200',
                    'total' : 10000
                },
                {
                    'codigo' : '9923',
                    'nombre' : 'Escopeta 12',
                    'cantidad' : '2',
                    'precio' : '3500',
                    'total' : 7000
                }
            ],
            2 : [
                {
                    'codigo' : '8855',
                    'nombre' : 'Caja munición .35',
                    'cantidad' : '30',
                    'precio' : '200',
                    'total' : 6000
                },
                {
                    'codigo' : '3758',
                    'nombre' : 'Pistola Colprofx',
                    'cantidad' : '2',
                    'precio' : '1000',
                    'total' : 2000
                },
            ],
            3 : [
                {
                    'codigo' : '3754',
                    'nombre' : 'Arma Corta',
                    'cantidad' : '6',
                    'precio' : '2500',
                    'total' : 15000
                },
                {
                    'codigo' : '3758',
                    'nombre' : 'Pistola Colprofx',
                    'cantidad' : '3',
                    'precio' : '1000',
                    'total' : 3000
                },
            ],
            4 : [
                {
                    'codigo' : '8855',
                    'nombre' : 'Caja munición .35',
                    'cantidad' : '10',
                    'precio' : '200',
                    'total' : 2000
                },
                {
                    'codigo' : '3758',
                    'nombre' : 'Pistola Colprofx',
                    'cantidad' : '1',
                    'precio' : '1000',
                    'total' : 1000
                },
                {
                    'codigo' : '3754',
                    'nombre' : 'Arma Corta',
                    'cantidad' : '2',
                    'precio' : '2500',
                    'total' : 5000
                },
            ]
        }
        
    }, 
    methods : {
        mostrarDetalle(codigoCompra){
            this.detalle_seleccionado = this.detalle_compra[codigoCompra];
            this.calcularTotal();
        },
        mostrarDatosCompra(compra){
            this.compra_seleccionada = compra;
            this.proveedor_seleccionado = compra.proveedor;
        },
        eliminarDetalle(codigoDetalle){
            var itemEliminar = {};
            this.detalle_seleccionado.forEach(function(item){
                if(item.codigo == codigoDetalle){
                    itemEliminar = item;
                }
            });
            var index = this.detalle_seleccionado.indexOf(itemEliminar);
            this.detalle_seleccionado.splice(index,1);
        },
        calcularSubTotal(codigoDetalle){
            this.detalle_seleccionado.forEach(function(item){
                if(item.codigo == codigoDetalle){
                    item.total = item.precio * item.cantidad;
                }
            });
            this.calcularTotal();  
        },
        calcularTotal(){
            total = 0;
            this.detalle_seleccionado.forEach(function(item){
                total += item.total;
            });
            this.compra_seleccionada.total = total;
        }
    }
});