// alert(url);
alert('El libro consta de 4 finales distintos, conforme tomes las decisiones obtendras un final u otro.');
/***ESTAS VARIABLES IBA HACER PARTE DE UN SISTEMA UN POCO MAS SOFISTICADO PARA LOS FINALES PERO LO DEJARE ASI****/
var intento=0;
var miedo=0;
var valentia=0;
/****************************************MUSICA**********************************************/



/********************HISTORIA*****************/
var np1="La complejidad de las palabras y la comunicación detallada quedaron en el pasado. En lugar de largas conversaciones, la gente de esta era utilizaba gestos y sonidos simples para expresar sus deseos y emociones. Un abrazo cálido, una risa melodiosa o un gesto cariñoso se volvieron más significativos que cualquier palabra. Esta simplificación en la comunicación eliminó la posibilidad de malentendidos y conflictos verbales, dando lugar a una sociedad donde la empatía y la comprensión florecían sin la necesidad de explicaciones elaboradas.<br><br>Maya se encontró sumida en una nueva y desconocida sensación. El deseo de explorar más allá de los límites trazados por generaciones anteriores le provocaba un temor inusual. Era una mezcla de emoción y aprehensión, ya que las preguntas sin respuesta la atormentaban en medio de la serenidad de su hogar.<br><br>El miedo la invadía al enfrentarse a lo desconocido, algo que las generaciones anteriores habían perdido por completo. En un mundo donde la complacencia reinaba y las emociones eran simples y puras, el miedo se volvía un intruso indeseado en el corazón de Maya.<br><br>Aunque todo en su entorno era hermoso y sereno, la excepción conocida por todos era la oscuridad de la noche. Con el tiempo, el templo del pueblo, donde se reunian todas las personas para dormir y protegerse de la noche, se había convertido en una tradicion mas que en una precaución temerosa. Los nuevos seres humanos, a pesar de haber perdido el miedo a muchas cosas, mantenían la práctica de evitar aventurarse más allá de los límites de la aldea cuando la luz del día se extinguía.<br><br>La cerradura hermética de las entradas del templo no solo era un medio para protegerse de las criaturas monstruosas que acechaban en la oscuridad, sino que también simbolizaba una tradición arraigada. La simple costumbre de reunirse en el templo durante la noche se había convertido en un acto reflejo, sin que los nuevos habitantes se preguntaran por qué. La idea de enfrentarse a lo desconocido en la oscuridad simplemente se desvaneció con el tiempo, convirtiéndose en una práctica que no se cuestionaba, sino que se realizaba porque así se había hecho durante generaciones.";
var np2="En una tranquila noche, cuando la mayoría de los habitantes se retiraron al templo para descansar, Maya experimentó una sensación inusual. Una suave brisa de aire fresco acarició su rostro, desafiando la calma del templo. Al despertar, notó que entre las rocas redondas que sellaban las entradas había una pequeña grieta por donde la brisa se filtraba, como una invitación de lo desconocido.<br><br>En silencio, se quedó allí, observando la tenue luz de la luna filtrándose a través de la rendija. La curiosidad latía en su interior, tentándola a explorar lo que yacía más allá de las fronteras seguras de la aldea. En ese momento, Maya se encontró ante una elección significativa.<br><br>Mirando la grieta, se formuló una pregunta: ¿Salir a investigar o volver a dormir y sumirse nuevamente en la rutina conocida?<br><br> <center> <button onclick=\"parte2('mie')\">Volver a dormir</button></center> <br><br> <center> <button onclick=\"parte2('val')\">Salir del templo</button></center>";
var np3="";
var pt1 = "<p>" + np1 + "</p>";
var pt2 = "<p>" + np2 + "</p>";

/********************BOTONES*****************/


var boton1='<button onclick="parte2()">Ir a 2</button>';





/********************DESICIONES*****************/







/************************************************/
function disparador() {

    var hojaudio = document.getElementById('hojaudio');


    if (intento==0){

    $("#siguiente").toggleClass("go continue");
    $("#tapa2").toggleClass("tapa2 tapa-animation2");
    $("#tapa").toggleClass("tapa tapa-animation");
    $("#hoja").toggleClass("hj hoja-animation2");
    $("#hoja").addClass("sombra");
    $("#hoja2").addClass("sombra");
    $("#hoja3").addClass("sombra");
    $("#hoja2").toggleClass("hj2 hoja-animation2");
    $("#hoja3").toggleClass("hj3 hoja-animation2");

    setTimeout(function() {
        $("#tapa img").remove();
        $("#tapa").css('background-color','burlywood');
         }, 2600);

    intento++;  
    }else if(intento>0){

        hojaudio.play();

        $('#siguiente').remove();
         $("#hoja p, h1").css({
                  'transition': 'opacity 0.5s linear',
                  'opacity': '0'
              });
        
        $("#tapa").css("z-index", "0");
        $("#hoja").css("z-index", "10");
        
        $('#hoja').addClass('cambio-pagina');
        
       // $("#hoja").addClass("cambio-pagina");
        // $("#hoja2").addClass("cambio-pagina");
        setTimeout(function() {
            $("#hoja").html("");
             }, 1000);

           setTimeout(function() {

            $('#hoja').addClass('cambio-pagina-final'); 
            var resultado1 = $(pt1).css({
                'opacity': '0',
            }).appendTo('#hoja');

            var resultado2 = $(pt2).css({
                'opacity': '0',
            }).appendTo('#hoja2');

            resultado1.animate({
                'opacity': '1'
            }, 250); 
            resultado2.animate({
                'opacity': '1'
            }, 250); 
            $("#hoja").toggleClass("sombra sombra2");

             }, 2000);
/*---------------------------AGREGAR BOTONES---------------------------------*/ 

/*************************IMPORTANTE ESTO SERA PARA REDIRECCIONARME LO USARE PARA EL FINAL SOLO LA LINEA COMENTADA**************************/
//  var boton1='<a href="' + url + '/cap2" onclick="parte2()">Ir a 2</a>';

    // $("#hoja2").append(boton1);

/***********************************LLAMAMIENTO AJAX**************************************/ 
       
    }
}
function parte2(valor){
    var hojaudio = document.getElementById('hojaudio');
    hojaudio.play();
    $("#hoja").css("z-index", "1");
    $("#hoja2").css("z-index", "2");

    $("#hoja2 p, button").css({
        'transition': 'opacity 0.5s linear',
        'opacity': '0'
    });
    $('#hoja2').addClass('cambio-pagina');
    setTimeout(function() {
        $("#hoja2").html("");
         }, 1000);

       setTimeout(function() {
        $('#hoja2').addClass('cambio-pagina-final'); 
        $("#hoja2").toggleClass("sombra sombra2");

        if(valor == 'val'){
        
        $.ajax({
            
            url:'http://localhost/nombreProyecto/public/parte2',
            data: { respuesta: 'op1' }, // Puedes cambiar el valor según tus necesidades
            method: 'GET',
            success: function(respuesta){
                $('#hoja2').append(respuesta.texto);
                $('#hoja3').append(respuesta.texto2);
            }
        });

        }else if(valor == 'mie'){

              $.ajax({
            
            url:'http://localhost/nombreProyecto/public/parte2',
            data: { respuesta: 'op2' }, // Puedes cambiar el valor según tus necesidades
            method: 'GET',
            success: function(respuesta){
                $('#hoja2').append(respuesta.texto);
                $('#hoja3').append(respuesta.texto2);
            }
        });

        }


         }, 2000);



/***********************************FUNCION AJAX PROBADA Y EJECUTADA CORRECTAMENTE AHORA SERA USADA PARA HACER NUEVAWS COSAS CAMBIANDO Y MODIFICANDO CONFORME YO QUIERA, PRUEBA EXITOSA***********************************************/
    // $(document).ready(function(){
       
    //     $.ajax({
            
    //         url:'http://localhost/nombreProyecto/public/parte2',
    //         success: function(respuesta){
    //             $('#hoja2').append(respuesta);
    //         }
    //     });
    // });
    $("#hoja").html("");
}
// function mover() {
// var cohete= document.getElementById("cohete");
// var bot= document.getElementById("botonsito");
//         var contenedor = document.getElementById("document");
//         var newv = document.createElement('button');
//         newv.innerText="Resetear";
//     intento++;  
//     if (intento<4){
       
        
    
        

//         cohete.classList.add("subir-" + intento);

        

//     }else{
//             /*contenedor.removeChild(bot);
            
//             contenedor.appendChild(newv);
//             newv.addEventListener('click', function() {
//             cohete.bottom= 100;
//             cohete.left= 100;
//             });*/
           
//             cohete.classList.remove("subir-1");
//             cohete.classList.remove("subir-2");
//             cohete.classList.remove("subir-3");
//             cohete.classList.add("subir");
//             intento=0;
//         }
// }

function parte3(valor){
    var hojaudio = document.getElementById('hojaudio');
    hojaudio.play();
    $("#hoja").css("z-index", "1");
    $("#hoja2").css("z-index", "2");
    $("#hoja3").css("z-index", "3");

    $("#hoja3 p, button").css({
        'transition': 'opacity 0.5s linear',
        'opacity': '0'
    });
    $('#hoja').addClass('reset');
    $("#hoja").toggleClass("sombra2 sombra");
    $('#hoja3').addClass('cambio-pagina');
    setTimeout(function() {
        $("#hoja3").html("");
         }, 1000);

       setTimeout(function() {
        $('#hoja3').addClass('cambio-pagina-final'); 
        $("#hoja3").toggleClass("sombra sombra2");
        if(valor == 'val'){
        
        $.ajax({
            
            url:'http://localhost/nombreProyecto/public/parte3',
            data: { respuesta: 'op1' }, // Puedes cambiar el valor según tus necesidades
            method: 'GET',
            success: function(respuesta){
                $('#hoja3').append(respuesta.texto);
                $('#hoja').append(respuesta.texto2);
            }
        });

        }if(valor == 'mie'){

              $.ajax({
            
            url:'http://localhost/nombreProyecto/public/parte3',
            data: { respuesta: 'op2' }, // Puedes cambiar el valor según tus necesidades
            method: 'GET',
            success: function(respuesta){
                $('#hoja3').append(respuesta.texto);
                $('#hoja').append(respuesta.texto2);
            }
        });
    }
}, 2000);
}