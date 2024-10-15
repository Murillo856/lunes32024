let nombre = "Karol Leal";
let edad = 34;
let isProfesor = false;

const variable = 90;

console.log(nombre);
console.log(edad);
console.log(isProfesor);
console.log(variable);

let total = 100;

console.log("Global: ", total);

function suma(a, b) {
    let total = a + b;
    console.log("Local: ", total);
}

suma(5, 6);

console.log("?: ", total);

console.log(nombre.length);

console.log(nombre.includes("e"));
console.log(edad.toString());
// condicional ternario
let resultado = isProfesor ? "Es profesor" : "Es estudiante";

console.log(resultado);

let nota = 80;

const notaAprobada = 65;

if (nota > notaAprobada) {
    console.log("Aprobo")
};
nota = 50;
if (nota >= notaAprobada) {
    console.log("Aprobo");
} else {
    console.log("Reprobo");
}

let semaforo = "naranja";

switch (semaforo) {
    case "rojo":
        console.log("detengase");
        break;
    case "verde":
        console.log("siga");
        break;
    case "amarillo":
        console.log("precaucion");
        break;
    default:
        console.log("color no definido");
        break;
}

// Semana 5

for( let i = 0; i < 10; i++){
    console.log(i);
}

let arr = [2,56,80,33,5];

for(let x in arr){
    console.log(arr[x])
}
let fruta = ["manzana", "banano", "fresa","pera"];

console.log(fruta[2]);

for(let x in fruta){
    if(fruta[x]=="manzana"){
        console.log("Posicion de manzana: ",x)
    }
}
edad = 51;
do {
    console.log(edad);
    edad++;
} while( edad <= 50)
edad = 40;
while(edad <= 50){
    console.log(edad);
    edad++;
}

function multiplicar(a,b){
    return a*b;
}

function saludar(){
    console.log("Hola!");
}

let totalMultiplicar = multiplicar(4,4);
console.log(totalMultiplicar);
console.log(multiplicar(4,5))
saludar();


let p = document.getElementById("saludo");
console.log(p);
p.innerHTML = "Hola de nuevo mundo!";

let nuevoElemento = document.createElement("p");
nuevoElemento.innerHTML = "Este elemento es nuevo";

document.body.appendChild(nuevoElemento);
let contador = 0;
document.getElementById("miBoton").addEventListener("click",function(){
    contador++;
    let nuevoElemento = document.createElement("p");
    nuevoElemento.innerHTML = "Contador de clicks: "+contador;
    console.log(contador);
    document.getElementById("saludo").appendChild(nuevoElemento);
});
