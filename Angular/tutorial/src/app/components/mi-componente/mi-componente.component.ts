
// creando componente

import { Component } from "@angular/core";  //agregando componen de angular

//decorador
@Component({

    selector: 'Mi componente',           //indicar el nombre de la etiqueta
    template: `
        <h1>Hola mundo, soy mi componente</h1>
        <p> Esto es mi primer componente</p>
    `                        //template

})

//para mostrar componente
export class MiComponente{
    constructor(){
        console.log("Componente mi-componente cargado!!!");

    }
}

