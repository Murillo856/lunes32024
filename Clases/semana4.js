let nombre = "Karol Leal";
let edad = 34;
let isProfesor = true;

const variable = 90;

console.log(nombre);
console.log(edad);
console.log(isProfesor);
console.log(variable);

let total = 100;

console.log("Global: ",total);

function suma(a,b){
    let total = a+b;
    console.log("Local: ",total);
}

suma(5,6);

console.log("?: ",total);

console.log(nombre.length);

console.log(nombre.includes("e"));
console.log(edad.toString());