//Ejemplo 1 diferencia entre var y let

function KK() {
    var num = 7;
    if (num < 10) {
        let otro = 13 + num;
    }
    console.log(num);
    console.log(otro);
}

//Ejemplo 2

let num = 5;
let pep = "5";

if(num==pep){
    console.log("Meo colonia");
} else {
    console.log("Siuuuuuu");
}

//Ejemplo 3 Arrays

let lista = new Array(5);
for (let i = 0; i < 10; i++){
    lista.push([i]);
}

//

//let alvaro = [1,2,3];
//let pablo = [2,3,4];

//let otra = alvaro; //Estan apuntando a la misma array

//otra[1] = 8;

//console.log(alvaro);

//let otra = [...alvaro]; //spread operator

//let suma = [...pablo,...alvaro];

//let frase = "Hola munndo";

//let res = [...frase];



//Razonamiento en foto movil grupo de clase
let alvaro = [1,2,3];
let pablo = [2,3,4];
let fer = [10,8,10];

let pensando = [alvaro,pablo,fer];

let uno = [...pensando[1]];
let dos = [...pensando[2]];
let tres = [...pensando];

tres[1] = dos;
tres[2] = uno;

console.log(tres);



