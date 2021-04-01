//objeto Math
const Math = {};

//importacion de archivos
function add(x1, x2){
    return x1+x2;
}

function subtract(x1, x2){
        return x1 - x2;
}

function multiply(x1, x2){
        return x1 * x2;
}

function divide(x1, x2){
    if(x2==0){
        console.log('No se puede dividir por '+x2);
    }else
    {
        return x1 / x2;
    }
}

//objeto con multiples propiedades
Math.add = add;
Math.subtract = subtract;
Math.multiply = multiply;
Math.divide = divide;

//exportando el onjeto math
module.exports = math;














function hello(name){
    console.log('Hola ',name);
}

//exportando una funcion
//module.exports = hello;



//exports para exportar por node.js
// exports.add = add; //cuando de indexclase1 llame add que lo lea y  con el = lea la function add
// exports.subtract = subtract;
// exports.multiply = multiply;
// exports.divide = divide;
