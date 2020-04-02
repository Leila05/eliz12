//tarea de la clase. Ordenar los numeros.
console.log("Ordena numeros: ");

var ord = [20, 50, 30, 80, 40];
console.log(ord.sort((x, y) => x - y))
    /*Con lo aprendido en la clase, escribe un programa en JavaScript en que se declaren dos arrays:
    el primero con nombre origen que cuente con 10 elementos todos nÃºmeros enteros generados en orden aleatorio. 
    (Investigar la clase Math y los mÃ©todos floor y random) [pueden escribir una funciÃ³n para cargar el array]
    el segundo con nombre destino que no tenga ningÃºn elemento.
    Crear una funciÃ³n que reciba el array origen como parÃ¡metro y devuelva los elementos del array origen ordenados de menor a mayor 
    dentro del array destino.
    Imprimir por consola los arrays origen y destino.*/
var origen = [];
var destino = [];
var num_alea = 0;
//funcion que carga el array con nÃºmeros aleatorios.
function cargar() {
    for (var i = 0; i <= 9; i++) {
        num_alea = Math.floor(Math.random() * 100);
        origen.push(num_alea);
    }
    console.log("Array origen: ");

    console.log(origen);
}
cargar();
//funcion que pasar los elementos de un array al otro.
function pasar_datos(origen) {
    destino = origen.slice();
    console.log("Array destino ordenado: ");
    console.log(destino.sort((x, y) => x - y));
}
pasar_datos(origen);