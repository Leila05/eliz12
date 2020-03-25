var num=0;
var mutl=0;
console.log("¿Que tabla de multiplicar desea ver?")
num=prompt("Ingrese el numero: ")
console.log("---------------------------------");
console.log("Imprimiendo la tabla del "+num);
for(var i=1; i<=10; i++){
	mult=i*num;
	console.log(i+" * "+num+" = "+mult);
}
console.log("=================================");
