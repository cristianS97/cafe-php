console.log('Hola mundo')
// alert('Hola desde alert')
// document.write('Hola desde JS')
// let - const - var

var pais = 'Chile'
var continente = 'América del sur'

var mensaje1 = pais + " se encuentra en " + continente
var mensaje2 = `${pais} se encuentra en ${continente}`

console.log(mensaje1)
console.log(mensaje2)

// ---------------------------

let valor = "29.6";

console.log(valor)
console.log(typeof valor)

console.log(Number(valor))
console.log(typeof Number(valor))

console.log(parseInt(valor))
console.log(typeof parseInt(valor))

console.log(parseFloat(valor))
console.log(typeof parseFloat(valor))

let valor2 = 23;

console.log(String(valor2))

let booleano = true
console.log(booleano)

let numPrompt1 = prompt('Ingresa número 1', 0)
let numPrompt2 = prompt('Ingresa número 2', 0)

numPrompt1 = parseInt(numPrompt1)
numPrompt2 = parseInt(numPrompt2)

/*
    + : Suma
    - : Resta
    * : Multiplicación
    / : División
    % : Modulo
*/

let suma = numPrompt1 + numPrompt2
let resta = numPrompt1 - numPrompt2
let divison = numPrompt1 / numPrompt2
let multiplicacion = numPrompt1 * numPrompt2
let modulo = numPrompt1 % numPrompt2

let resultados = `<p>${numPrompt1} + ${numPrompt2} = ${suma}<br>
${numPrompt1} - ${numPrompt2} = ${resta}<br>
${numPrompt1} / ${numPrompt2} = ${divison}<br>
${numPrompt1} * ${numPrompt2} = ${multiplicacion}<br>
${numPrompt1} % ${numPrompt2} = ${modulo}</p>`

document.querySelector('#resultado').innerHTML = resultados;

console.clear()

/*
    * Operadores de comparación

    * Mayor que: >
    * Menor que: <
    * Menor o igual que: >=
    * Mayor o igual que: <=
    * Igual que: ==
    * Igual estricto que: ===
    * Distinto que: !=
    * Distinto estricto que: !==
*/

let edad = 13;
continente = 'americass'
pais = 'chile'

/*
if(pais == 'chile' && continente == 'america' && edad >= 18)
{
    console.log('Puedes entrar')
}
else if(pais == 'peru' && continente == 'america' && edad >= 18)
{
    console.log('Puedes entrar')
}
else if(pais == 'argentina' && continente == 'america' && edad >= 18)
{
    console.log('Puedes entrar')
}
else if(pais == 'inglaterra' && continente == 'europa' && edad >= 21)
{
    console.log('Puedes entrar')
}
else if(pais == 'alemania' && continente == 'europa' && edad >= 23)
{
    console.log('Puedes entrar')
}
else
{
    console.log('No puedes entrar')
}
*/

if(continente == 'america')
{
    if(pais == 'chile' && edad >= 18)
    {
        console.log('Puedes entrar')
    }
    else if(pais == 'peru' && edad >= 18)
    {
        console.log('Puedes entrar')
    }
    else if(pais == 'argentina' && edad >= 18)
    {
        console.log('Puedes entrar')
    }
}
else if(continente == 'europa')
{
    if(pais == 'inglaterra' && edad >= 21)
    {
        console.log('Puedes entrar')
    }
    else if(pais == 'alemania' && edad >= 23)
    {
        console.log('Puedes entrar')
    }
}
else
{
    console.log('No puedes entrar')
}

const getAmerica = (pais, edad) => {
    return "hola"
}

const europa = (pais, edad) => {
    return "chao"
}

const objeto = {
    "america":getAmerica,
    europa
}

// console.log(objeto[continente]())
console.log(objeto[continente](1, 2))
