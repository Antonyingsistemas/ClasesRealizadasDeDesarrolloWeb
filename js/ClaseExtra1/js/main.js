(function(){
	// Variables
	var lista = document.getElementById("lista"),				//acceder a la lista
		tareaInput = document.getElementById("tareaInput"),		//acceder al input dentro del formulario, donde el usuario pondra la tarea
		btnNuevaTarea = document.getElementById("btn-agregar");	//acceder al boton submit
 
	// Funciones
	
	//agregar tarea sirve para agregar un nuevo contenido o tarea a las listas
	var agregarTarea = function(){


		var tarea = tareaInput.value,							//TRAE EL VALOR INGRESADO A TAREA, agregando el valor de tareaInput a tarea
			nuevaTarea = document.createElement("li"),			//CREA LI, para crear un nuevo elemento li
			enlace = document.createElement("a"),				//CREA A, para agregar un nuevo elemento a o enlace
			contenido = document.createTextNode(tarea);			//INTEGRA VALOR A CONTENIDO, creando un nuevo nodo para ponerlo en texto
 
			//COMPROBACION EN CASO DE QUE NO SE HALLA AGREGADO VALORES
		if (tarea === "") {														//SI TAREA ES IGUAL A NADA
			tareaInput.setAttribute("placeholder", "Agrega una tarea valida");	//CAMBIA LA LETRA DE MENSAJE, Agrega una tarea valida EN EL PLACEHOLDER
			tareaInput.className = "error";										//CAMBIA CLASE A ERROR Y CAMBIA A COLOR ROJO , Accede en el nombre de la clase y cambia a "error"
			return false;														//SAL DE LA FUNCION, retornar false para salir de la funcion
		}
 
		// Agregamos el contenido al enlace
		enlace.appendChild(contenido);							//EL CONTENIDO DENTRO DEL ENLACE

		// Le establecemos un atributo href
		enlace.setAttribute("href", "#");						//AGREGA EL ATRIBUTO HREF CON UN #

		// Agrergamos el enlace (a) a la nueva tarea (li)
		nuevaTarea.appendChild(enlace);							//AGREGANDO LOS ENLACES(CONTENIDOS) A LA NUEVA LISTA

		// Agregamos la nueva tarea a la lista
		lista.appendChild(nuevaTarea);							//AGREGANDO A LA LISTA  
 
		tareaInput.value = "";									//LIMPIAN EL INPUT, BORRANDO EN EL INPUT EL CONTENIDO ESCRITO
 
		//PARA REMOVER EL EVENTO SELECCIONADO
		for (var i = 0; i <= lista.children.length -1; i++) {
			lista.children[i].addEventListener("click", function(){
				this.parentNode.removeChild(this);				//REMOVER DENTRO DE LA LISTA EL SELECCIONADO (CON this.),this. este ( referencia al objeto o este objeto ), parentNode.removeChild(this); este parentNode o elemento queremos eliminarlo
			});
		}
 
	};

	//Comprobar si hay o no una tarea
	var comprobarInput = function(){
		tareaInput.className = "";									//cambiar el nombre de la clase a "" donde no ahi error
		tareaInput.setAttribute("placeholder", "Agrega tu tarea");	//regresar a la normalidad
	};
 
	//ELIMINA LA TAREA
	var eliminarTarea = function(){
		this.parentNode.removeChild(this);							//this. , parentNode acceder al elemento padre que es el ul, remover el hijo o childer (elimina el elemento clickeado)
	};
 

	// Eventos PARA HACER FUNCIONAR LAS FUNCTION(FUNCIONES)
 
	// Agregar Tarea
	btnNuevaTarea.addEventListener("click", agregarTarea);				//ejecutando agregarTarea
 
	// Comprobar Input
	tareaInput.addEventListener("click", comprobarInput);				//ejecutando comprobarInput
 
	// Borrando Elementos de la lista
	for (var i = 0; i <= lista.children.length-1; i++) {				//ejecutando las listas , lista.children.length acceder a todos los elementos de la lista que sean hijos o children (CANTIDAD TOTAL DE ELEMENTOS LI EN LA LISTA) y obtener la cantidad y -1 por que calcula 0 1 2
		lista.children[i].addEventListener("click", eliminarTarea);		//accediendo a los elementos de cada uno, y cuando se le de un click se eliminara la lista
	}
}());