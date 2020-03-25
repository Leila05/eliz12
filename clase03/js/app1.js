var num1=0;
var num2=0;
var mutl=0;
console.log("¿Que tablas de multiplicar desea ver?");
num1=prompt("Ingrese el primer numero: ");
num2=prompt("Ingrese el segundo numero: ");
while(num1>num2){
	console.log("El primer numero no puede ser mayor que el  segundo, favor ingresar de nuevo.");
	num1=prompt("Ingrese nuevamente el primer numero: ");
	num2=prompt("Ingrese nuevamente el primer numero: ");
}
console.log("---------------------------------");
console.log("Tabla del "+num1);
console.log("---------------------------------");
for(var i=1; i<=10; i++){
	mult=i*num1;
	console.log(i+" * "+num1+" = "+mult);
}
console.log("=================================");

console.log("---------------------------------");
console.log("Tabla del "+num2);
console.log("---------------------------------");
for(var i=1; i<=10; i++){
	mult=i*num2;
	console.log(i+" * "+num2+" = "+mult);
}
console.log("=================================");
