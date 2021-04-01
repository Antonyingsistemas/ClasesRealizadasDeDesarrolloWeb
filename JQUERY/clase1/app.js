// $(document).ready(function(){
//     //codigo jquery con js
//     //console.log('funcionando');


// });

//PARTE 2
// $(document).ready(function () { //jqDocReady

//     //esto es jquery
//     $('h1').html('Etiqueta h1');//$('h1') selector o selecciona h1,html() reemplaza el codigo
//     $('.display-4').html('desde clase');//'.display-4' con "." para buscar la clase
//     $('#idh1').html('desde id');//'#idh1' para el identificador , id

//     //esto es javascript
//     document.querySelector('h1').innerHTML = 'Etiqueta h1';//es lo mismo
//     document.querySelector('.display-4').innerHTML = 'desde clase';
//     document.querySelector('#idh1').innerHTML = 'desde id';

// });

//PARTE3
// $(document).ready(function () {
    
//     //$('.container h1:first').html('Cambio de texto');//'.container h1:first' para el primer container
//     //$('.container h1:last').html('Cambio de texto');//'.container h1:last' para el final


// });


//PARTE4
// $(document).ready(function () {
    
//     //Agregar clase a elementos
//     $('#idh1').addClass('text-danger');// 'text-danger' clase para que el texto sea rojo :D

//     //quitando clase
//     $('#idh1').removeClass('display-4');//quita la clase

//     //agregando contenido
//     $('#contenido').append('<h1>Este es un elemento al final</h1>');//agrego en contenido al final
//     $('#contenido').prepend('<h1>Este es un elemento al principio</h1>');//agrego en contenido al principio

//     //cambiando colores
//     $('#color-azul').css('color', 'blue');//para una propiedad
//     $('#color-azul').css({color: 'blue', background: 'salmon', padding:'20px'});//para mas de una propiedad

//     //remueve el valor seleccionado completamente
//     //$('#color-azul').remove();

//     //oculta el valor seleccionado pero sigue en el codigo
//     //$('#color-azul').hide();

//     //agregando imagen
//     $('img').attr('src', 'https://jquery.com/jquery-wp-content/themes/jquery/content/books/learning-jquery-4th-ed.jpg');

//     //agregando ancho a la imagen
//     $('img:last').attr('width','50');

// });

//PARTE5 EVENTOS O ACCIONES
var parrafo=$('#resultado p');//variable del parrafo, id = resultado, p = <p> el parrafo
$(document).ready(function () {
    // $('.btn-primary').click(function(){
    //     parrafo.addClass('display-4');      //agregar
    // });

    // $('.btn-danger').click(function(){
    //     parrafo.removeClass('display-4');   //quitar
    // });

    // $('.btn-warning').click(function(){
    //     parrafo.toggleClass('display-4');   //agregar y quitar
    // });

    // $('#formulario').submit(function(e){//evento subit
    //     e.preventDefault();             //lo que ya esta por defecto no lo haga
    //     var nombre=$('#nombre').val();           //para ver lo que escribir el usuario
    //     console.log(nombre);
    // });


    //parte6

    var resultado=$('#resultado');

    // $('.btn-primary').click(function(){
    //     resultado.hide(1000);      //oculta el elemento(1000 son milisegundos en ocultar)
    // });

    // $('.btn-danger').click(function(){
    //     resultado.show(1000);   //agregar
    // });

    // $('.btn-warning').click(function(){
    //     resultado.toggle(1000);   //agregar y quitar
    // });

    // $('.btn-primary').click(function(){
    //     resultado.fadeOut(3000);      //oculta el elemento(1000 son milisegundos en ocultar)
    // });

    // $('.btn-danger').click(function(){
    //     resultado.fadeIn(2000);   //agregar
    // });

    // $('.btn-warning').click(function(){
    //     resultado.toggle(1000);   //agregar y quitar
    // });

    $('.btn-primary').click(function(){
        resultado.animate({
            left:'150px',
            opacity: '0.5',
            height: '+=150px;',
            width: '+=150px'
    
    
        },3000,function(){
            resultado.animate({
                left:'60px',
                opacity: '1',
                height: '-=150px;',
                width: '-=150px'
            },1000)
        });
    });



});






