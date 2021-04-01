
//1RA PARTE
//PROBANDO LOS MODULOS, EN ESTE CASO OS
// //Modulos que estan dentro de node.js, sistema operativo OS
// const os = require ('os');

// //reconoce el sistema
// console.log(os.platform());

// //muestra el release o la ultima version
// console.log(os.release());

// //para memoria libre pero en byte
// console.log('free mem: ', os.freemem(), ' bytes');

// //para memoria total pero en byte
// console.log('Total mem: ', os.totalmem(), ' bytes');





//2DA PARTE
//CREANDO ARCHIVO
// const fs = require('fs');//modulo para archivos del sistema operativo


// //codigo asincrono que lo realiza el sistema operativo
// fs.writeFile('./texto.txt', 'linea uno', function(err){

    
//     if(err){
//         console.log(err);
//     }else{
//         console.log('Archivo creado');
//     }
// });  //crea nuevo archivo con un texto linea uno y function(err), es un callback para ver si hubo errores o no


// //node delega y creara este primero por que esto hace node.js y el fs.writeFile lo realiza un sistema operativo
// console.log('ultima linea de codigo');





//3RA PARTE
//LEYENDO EL ARCHIVO
// const fs = require('fs');

// fs.readFile('./texto.txt', function(err, data){
//     if(err){
//         console.log(err);
//     }
//     else{
//         console.log(data.toString());
//     }
// });//quiero leer el archivo
// //<Buffer 6c 69 6e 65 61 20 75 6e 6f> sale texto crudo pero con .toString() nos da "linea uno"





//CUARTA PARTE
//SERVIDORES, una pc hace una peticion al servidor(server) y responde cosas
// const http = require('http');

// //va a demorar asi que ponemos en function
// http.createServer(function(req, res){//req peticion,res respuesta, 
//     res.writeHead(200, { 'content-type': 'text/html' }); //tiempo de respuesta y un objeto de javascript le doy mas informacion
//     res.write('<h1>Hola Mundo desde NodeJs</h1>');      //te respondere con un mensaje
//     res.end();                                          //termina el res
// }).listen(3000);                                         //listen en que puerto va a escuchar mi servidor
// //ejemplo poner http://localhost:3000/ en caso de .listen(3000)





//DIFERENTE MANERA CUARTA PARTE
// const http = require('http');

// const colors = require('colors');

// //manejar las funciones llamando una constante
// const handleServer = function (req, res) {                  //manejador del servidor
//     res.writeHead(200, { 'content-type': 'text/html' });
//     res.write('<h1>Hola Mundo desde NodeJs</h1>'); 
//     res.end();                                       
// }

// //guardando todo a constantes
// const server = http.createServer(handleServer);

// server.listen(3000, function(){                             //ejecuta la funcion y manda un mensaje
//     console.log('Server on port 3000'.yellow);              //cambia de color
// });


//ACUERDATE DE COMANDOS
//npm init                                  //para perdir mas informacion del proywcto
//Press ^C at any time to quit.
// package name: (nodejs)
// version: (1.0.0) 0.0.1
// description: practicando nodejs
// entry point: (index.js)
// test command:
// git repository:
// keywords: nodejs, practica, español
// author: AxpeerD
// license: (ISC)


//Luego de poner enter aparece package.json, cuando se sube a la nube
//se va a subir todo menos node_modules

//npm install para instalar los packetes que faltan por medio de "package.json"

//npm start , para ver el start de package.json

//npm rum desarrollo , para ver los comandos personalizados

//express framework de nodejs





//NODEJS CON EXPRESS
const express = require('express');//requiero express

const colors = require('colors');

const server = express();//crea servidor

server.get('/', function (req, res){
    res.send('<h1>AxpeerD aprendiendo nodejs</h1>');
    res.end();
});

server.listen(3000, function(){  //function o -> es igual
    console.log('Server on port 3000'.red);
});

//si no iniciamos una ruta saldra cannot get





//MANEJAR PACKETES DE NODE.JS https://www.npmjs.com/

//para descargar buscas, en mi caso color "npm install colors"

//npm i express PARA INSTALAR EXPRESS













//recuerda lo cancelas con ctrl+c dos veces en el cmd

//mas informacion de repuestas https://es.wikipedia.org/wiki/Anexo:C%C3%B3digos_de_estado_HTTP

















//
// const users = query('SELECT * FROM users');

// //
// query('SELECT * FROM users',function(){
//     if(err){
//         console.log(err);
//     }else{
//         console.log('pedido realizado');
//     }
// }
// );







//codigo bloqueante que no permite ejecutar hasta que termine de leerlo
// const result = fs.writeFile('','');
