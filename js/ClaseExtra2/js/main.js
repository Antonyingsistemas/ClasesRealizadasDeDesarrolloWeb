(function(){

    //mostrara la hora actual
    var actualizarHora =function(){
        var fecha = new Date(),         //trae la fecha

            //aqui trae los datos
            horas = fecha.getHours(), //hora
            ampm,
            minutos = fecha.getMinutes(), //minuto
            segundos = fecha.getSeconds(), //segundo
            diaSemana = fecha.getDay(),     //dia de la semana lunea a domingo
            dia = fecha.getDate(),      //dia
            mes = fecha.getMonth(),     //mes
            year = fecha.getFullYear(); //año

        //agregando a los p para parafos
        var pHoras = document.getElementById('horas'),
            pAMPM = document.getElementById('ampm'),
            pMinutos = document.getElementById('minutos'),
            pSegundos = document.getElementById('segundos'),
            pDiaSemana = document.getElementById('diaSemana'),
            pDia = document.getElementById('dia'),
            pMes = document.getElementById('mes'),
            pYear = document.getElementById('year');

        var semana = ['Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado'];

        //mostrando el dia de la semana
        pDiaSemana.textContent = semana[diaSemana];//va a traer un numero

        //dia del mes
        pDia.textContent = dia;

        var meses = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];

        //mostrando el mes
        pMes.textContent = meses[mes];

        //mostrando el año
        pYear.textContent = year;

        //condicional de horas
        if(horas >= 12)
        {
            horas = horas - 12;
            ampm = 'PM';


        }else
        {
            ampm = 'AM';
        }

        if(horas == 0)
        {
            horas = 12;
        }

        //integrando las horas
        pHoras.textContent = horas;
        pAMPM.textContent = ampm;

        //agregando el 0 si hace falta en minutos
        if(minutos <10)
        {
            minutos = "0" + minutos;
        }
        if(segundos <10)
        {
            segundos = "0" + segundos;
        }

        pMinutos.textContent = minutos;
        pSegundos.textContent = segundos;



    };


    //ejecuta la funcion actualizar hora
    actualizarHora();

    //para que la funcion se ejecute cada segundo
    var intervalo = setInterval(actualizarHora, 1000); /*Actualiza hora cada segundo */

}())