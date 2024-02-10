<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script>
        var url = '<?php echo url('') ?>';
    </script>
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('js/libro.js') }}"></script>
</head>
<body>
    <!-- <center>
        <div id="libro">El cuento<div id="contenido0"></div></div>
    </center>-->
    <audio type="audio/mp3" id="hojaudio" src="{{ asset('img/hoja.mp3') }}"></audio>
      
    <div id="contenedor">
    <div id="tapa"  class="tapa"> <img src="{{ asset('img/2.jpg') }}" alt="" width="100%" height="100%" style="border-top-right-radius: 1%;
    border-bottom-right-radius: 1%;"> </div>
    <div id="tapa2" class="tapa2"></div>
    <!-- ***************************************HOJAS DE CUENTO************************************************** -->
    <div id="hoja" class="hj">
        <center>
        <h1>Tiempo y Miedo</h1>
        </center>
            <p>
            En una era lejana, perdida en los pliegues del tiempo, la humanidad había evolucionado de una manera única y extraordinaria. Los vestigios de las antiguas ciudades y complejas sociedades habían dado paso a la simplicidad y la armonía. La vida ahora se centraba en pequeñas comunidades rurales, donde las casas de campo se alineaban bajo un cielo claro y estrellado. La gente se había despojado de las preocupaciones y ambiciones del pasado, encontrando la felicidad en las cosas simples de la vida.</p>
            <p>En este rincón olvidado del tiempo, las risas resonaban en el aire, los niños jugaban despreocupados en campos verdes, y las noches se iluminaban con cálidas hogueras compartidas. Las generaciones habían renunciado a las divisiones y conflictos que marcaron eras antiguas, abrazando la paz y la alegría como su legado.</p>
            <p>
            En esta utopía olvidada del tiempo, la transformación no solo afectó a los niños, sino que también abrazó a los jóvenes y adultos. Las risas y juegos se convirtieron en un lenguaje universal, desdibujando las fronteras entre las generaciones. Jóvenes y ancianos, antes divididos por sus experiencias y perspectivas, se unieron en una comunión alegre donde todos, independientemente de su edad, vivían como niños felices.</p>
            <p>La complejidad de las palabras y la comunicación detallada quedaron en el pasado. En lugar de largas conversaciones, la gente de esta era utilizaba gestos y sonidos simples para expresar sus deseos y emociones. Un abrazo cálido, una risa melodiosa o un gesto cariñoso se volvieron más significativos que cualquier palabra</p>

            <p>En medio de esta existencia apacible, nació una niña curiosa llamada Maya. Aunque la felicidad reinaba en su aldea, Maya siempre sintió que había algo más allá de los límites de su hogar. Su mente inquisitiva anhelaba respuestas, y su corazón latía con una curiosidad que desafiaba la complacencia que rodeaba a su gente.
            </p>
    </div>
    <div id="hoja2" class="hj2"> </div>
    <div id="hoja3" class="hj3">   </div>
 

<!-- ***************************************TERMINA EL CUENTO************************************************** -->
    <button id="siguiente" class="go" onclick="disparador()">Start</button>
    </div>
</body>
</html>