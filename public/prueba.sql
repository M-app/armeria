BEGIN
UPDATE BASESHERIFF.producto 
SET codigo_producto=codigo_product,
 	nombre_producto=nombre_product, descripcion_1=descripcion_1,
	descripcion_2=descripcion_2,descripcion_3=descripcion_3,numero_registro_producto=numero_registro_product,
	disponibilidad_producto=disponibilidad_product, numero_lote=numero_lot, precio_compra=precio_compr,
    precio_venta=precio_vent, id_categoria=id_categori, id_tipo_categoria=id_tipo_categoria,
    id_marca=id_marc, id_modelo=id_model, id_calibre=id_calibr, id_descricpión_producto=id_descricpión_product
WHERE id_producto=id_product; 
END