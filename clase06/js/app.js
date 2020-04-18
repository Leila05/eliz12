document.getElementsByTagName('body')[0].onload = inicio;
var datos = [];
//setea inicio de la pagina.
function inicio() {
    console.log("inicio...");
    document.getElementById('enviar').onclick = procesar;
    cargarDatos();
    imprimirFilas();
}
//procesa datos del formulario.
function procesar() {
    console.log("procesando...");
    if (document.getElementById('idx').value == "") {
        datos.push([document.getElementById('apellido').value, document.getElementById('nombre').value, document.getElementById('fenac').value]);
    } else {
        var idx = document.getElementById('idx').value;
        datos[idx][0] = document.getElementById('apellido').value;
        datos[idx][1] = document.getElementById('nombre').value;
        datos[idx][2] = document.getElementById('fenac').value;
    }
    almacenar();
    imprimirFilas();
    limpiarForm();
}
//imprimer los datos en la tabla.
function imprimirFilas() {
    var salida = "";
    datos.forEach((item, i) => {
        salida = salida + "<tr><td>" + i + "</td><td>" + item[0] + "</td><td>" + item[1] + "</td><td>" + item[2] + "</td><td><button type='button' class='btEditar btn btn-warning' data-id='" + i + "'>Editar</button> </td><td><button type='button' class='btBorrar btn btn-danger' data-id='" + i + "'>Borrar</button> </td></tr>"
    });
    document.getElementById('datos').innerHTML = salida;
    btTablas();
}
//carga datos iniciales en la tabla.
function cargarDatos() {
    //recuperar datos.
    console.log(JSON.parse(localStorage.datos));
    datos = JSON.parse(localStorage.datos);
}
//reinicia el formulario.
function limpiarForm() {
    document.getElementById('idx').value = "";
    document.getElementById('apellido').value = "";
    document.getElementById('nombre').value = "";
    document.getElementById('fenac').value = "";
    document.getElementById('apellido').focus();
}
//asigna eventos a botones de la tabla.
function btTablas() {
    var btedit = document.getElementsByClassName('btEditar');
    for (var i = 0; i < btedit.length; i++) {
        btedit[i].onclick = editar;
    }
    var btborrar = document.getElementsByClassName('btBorrar');
    for (var i = 0; i < btborrar.length; i++) {
        btborrar[i].onclick = borrar;
    }
}
//edita las filas de la tabla, agregando contenido nuevo ingresado por el usuario.
function editar(e) {
    console.log("editando");
    var fila = e.target;
    var idx = fila.attributes["data-id"].value;
    document.getElementById('idx').value = idx;
    document.getElementById('apellido').value = datos[idx][0];
    document.getElementById('nombre').value = datos[idx][1];
    document.getElementById('fenac').value = datos[idx][2];
    document.getElementById('apellido').focus();
}
//borra filas de la tabla.
function borrar(e) {
    console.log("borrando...");
    var fila = e.target;
    var idx = fila.attributes["data-id"].value;
    datos.splice(idx, 1);
    almacenar();
    imprimirFilas();
}
//persiste los datos a traves del storage.
function almacenar() {
    console.log("almacenado...");
    localStorage.setItem("datos", JSON.stringify(datos));

}