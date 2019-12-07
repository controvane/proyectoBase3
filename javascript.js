//registrar un evento clic al botón buscar y que ejecute la función buscar() cuando sea presionado.
window.onload = function(){
        $("#btn-buscar").on( "click", function() {
                buscar();
        });
	$("#btn-eliminar").on( "click", function() {
                eliminar();
        });
	$("#btn-modificar").on("click",function() {
		modificar();
	});

}
    //La función buscar realiza la llamada Ajax que ejecutar el archivo buscar.php, y en caso de ser exitosa, obtiene la respuesta como objeto html y agrega el contenido al elemento con el ID “datos” de la página.
function buscar(){
        var nombre = $("#buscar").val();

        $.ajax( 
        {
                type: "POST",
                url: "buscar.php",
                data: {
                        buscar: nombre
                },
                success: function(html) {
                        $("#datos").html(html);
                }
        });
}

function eliminar(){
	var nombre = $("#eliminar").val();

        $.ajax( 
        {
                type: "POST",
                url: "eliminar.php",
                data: {
                        eliminar: nombre
                },
                success: function(html) {
                        $("#datos").html(html);
                }
        });

}

function modificar(){
        var nombre = $("#nombre").val();
	var fecha = $("#fecha").val();
	var correo = $("#correo").val();
	var telefono = $("#telefono").val();
	//console.log(nombre);
        $.ajax( 
        {
                type: "POST",
                url: "modificar.php",
                data: {
                        nombre: nombre,
			fecha: fecha,
			correo: correo,
			telefono: telefono
                },
                success: function(html) {
                        $("#datos").html(html);
                }
        });
}

