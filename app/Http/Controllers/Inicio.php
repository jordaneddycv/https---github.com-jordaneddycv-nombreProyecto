<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Inicio extends Controller
{
    //
    public function leer() 
    {
        return view('cuento');
    }
    // public function parte2(){
    //     return "asdasdasdad";
    // }



     public function pruebaAjax() { 
        $texto="";
        $texto2="";
        $respuesta = $_GET['respuesta'];
        if ($respuesta == "op1") {
            $texto= "<p>Maya, impulsada por su curiosidad, decidió aventurarse fuera del templo para explorar el mundo nocturno que se revelaba ante sus ojos. Al salir, se encontró con un paisaje completamente diferente: sin risas ni cantos, solo el susurro de las suaves brizas calientes y los misteriosos sonidos de insectos desconocidos. La luz de la luna iluminaba tímidamente el prado, revelando un entorno sereno y vacío de aldeanos.</p><p>Cada paso de Maya la sumergía más en este mundo distinto. Observaba detalles que nunca había notado antes, como las luciérnagas que bailaban en la oscuridad. Sin embargo, a medida que se aventuraba más allá de la entrada del templo, comenzó a escuchar pasos rápidos y chasquidos extraños.</p><p>Intrigada por estos sonidos, intentó enfocar su vista en los alrededores. La briza movía las ramas de los árboles, y la tenue luz de la luna le permitía ver una figura alta y unos ojos brillantes en la distancia. La curiosidad la llevó a acercarse, pero pronto sintió una extraña sensación.</p><p>Cuando logró divisar la figura en la penumbra, experimentó una nueva emoción: el miedo. Una criatura alta, con un hocico alargado, colmillos deformes y garras afiladas, se erguía frente a ella. Paralizada por el temor, Maya observó impotente mientras el ser se inclinaba y se preparaba para atacar.</p><p>En ese momento crítico, una luz resplandeciente iluminó el área detrás de los arbustos, enfocándose especialmente en los ojos de la criatura. Emitiendo quejidos de dolor, la bestia corrió torpemente, chocando con rocas y árboles antes de perderse en la oscuridad distante.</p><p>La luz persistió por unos segundos, permitiendo que Maya recobrara el aliento. Sin dudarlo, la niña giró sobre sus talones y corrió frenéticamente de vuelta al templo, con el miedo palpable en cada uno de sus pasos. La oscura noche, que antes parecía tranquila, ahora estaba llena de peligros inesperados que amenazaban la serenidad de su mundo.</p>";
            $texto2= "<p>Maya se encontraba en medio de un torbellino de emociones nuevas y desconocidas. ¿Debería reprimir esas sensaciones, aferrarse a la seguridad de lo que conocía y mantenerse dentro de los límites establecidos por generaciones pasadas? ¿O debería seguir alimentando su curiosidad, enfrentando lo desconocido con valentía y buscando respuestas más allá de los confines de su pequeño mundo?<center><button onclick=\"parte3('mie')\">Reprimirse</button></center> <br><br> <center> <button onclick=\"parte3('val')\">Seguir pensando en lo sucedido</button></center></p>";
        } else if ($respuesta == "op2") {
            $texto="<p>Maya luchaba con su decisión. Por un momento, la curiosidad por lo desconocido la tentó y mucho mas cuando vio un destello intenso de luz que la impresiono, pero el temor a las posibles consecuencias la mantenía indecisa. Finalmente, decidió obedecer las tradiciones arraigadas de su comunidad y volver a dormir, optando por la seguridad del templo y la familiaridad de su rutina.
            </p><p>
            La noche pasó sin incidentes, y Maya despertó a la mañana siguiente sintiéndose aliviada por su decisión. Sin embargo, a medida que pasaban los días, la sensación de curiosidad que la había atormentado la noche anterior no la abandonaba. Cada vez que escuchaba el susurro del viento o veía la luz de la luna filtrándose por las grietas del templo, un cosquilleo de intriga la invadía.
            </p><p>
            A pesar de sus esfuerzos por ignorar su curiosidad, esta persistía, erosionando lentamente su determinación. Finalmente, un día, la tentación se volvió demasiado fuerte para resistir. En un acto de impulso, Maya decidió aventurarse fuera del templo, convencida de que solo sería por un breve momento y que no habría consecuencias negativas.
            </p><p>
            Sin embargo, su salida no pasó desapercibida para los habitantes de la aldea. Pronto, su transgresión fue descubierta, y la comunidad reaccionó con indignación y preocupación. Habían confiado en la obediencia de Maya a las tradiciones y ahora se enfrentaban a las consecuencias de su desafío.
            </p><p>
            Maya fue confrontada por los ancianos de la aldea, quienes expresaron su decepción y preocupación por su comportamiento imprudente. Aunque Maya intentó disculparse y explicar sus razones, sus palabras cayeron en oídos sordos. La comunidad había sido sacudida por su acción, y la confianza en ella se había erosionado.
            </p><p>
            Como castigo por su desobediencia, Maya fue expulsada de la aldea, dejándola sola y desamparada en el mundo exterior. A medida que caminaba lejos de su hogar, Maya reflexionaba sobre las consecuencias de su curiosidad impulsiva, lamentando profundamente su decisión de desafiar las tradiciones que habían mantenido a su comunidad segura y unida durante generaciones.</p>";
            $texto2= "<p>Maya se ve enfrentada a una nueva encrucijada. Con el peso de sus acciones pasadas sobre sus hombros, se da cuenta de que debe tomar una decisión crucial para su supervivencia.
            </p><p>
            Observando el horizonte, se debate entre dos opciones apremiantes. Por un lado, está la posibilidad de dirigirse hacia el lugar donde ocurrió el destello de luz que la salvó de la criatura. Este destello representaba una fuerza misteriosa que parecía haberla protegido de un peligro inminente. Quizás explorar esa área podría revelar respuestas sobre lo que realmente sucedió esa noche y ofrecerle una guía para el futuro.
            </p><p>
            Por otro lado, Maya considera la opción de buscar refugio en algún lugar oculto dentro del castillo. Con la esperanza de encontrar un lugar seguro donde pueda resguardarse de las miradas inquisitivas de los aldeanos y reflexionar sobre sus acciones, esta opción le ofrece un sentido de seguridad inmediata.
            </p><p>
            Entre la incertidumbre y el temor, Maya debe tomar una decisión que definirá su destino. ¿Optará por la búsqueda de respuestas en el lugar del destello de luz, o elegirá la protección momentánea del castillo como su refugio temporal? La elección recaerá en sus hombros, y con ella, el curso de su viaje hacia lo desconocido.<br><br>
            <center><button onclick=\"parte3('val')\">Ir al lugar del destello</button></center> <br><br> <center> <button onclick=\"parte3('mie')\">Escabullirse en el templo</button></center></p>";
        }
        return array('texto' => $texto, 'texto2' => $texto2);
     }
     public function pruebaAjax2() { 
        $texto="";
        $texto2="";
        $respuesta = $_GET['respuesta'];
        if ($respuesta == "op1") {
            $texto= "<p>Maya avanzó con cautela hacia el lugar donde había ocurrido el destello de luz, su corazón latía con una mezcla de emoción y aprensión. Al llegar, quedó atónita al descubrir un artefacto grande y desconocido, hecho de un material que nunca antes había visto. Parecía pulsar con una energía misteriosa, emanando un resplandor suave en la creciente oscuridad.
            </p><p>
            Mientras contemplaba el artefacto con asombro, una figura comenzó a tomar forma a su alrededor. No era como ninguno de los seres de su especie; este hombre irradiaba una presencia antigua y sabia. Sus ojos brillaban con un conocimiento profundo, y su presencia parecía envolver el lugar en un aura de misterio.
            </p><p>
            El extraño viajero le reveló a Maya la verdadera naturaleza del artefacto: era una máquina del tiempo, creada por él mismo en tiempos antiguos. Había viajado a través de eras y civilizaciones, buscando respuestas a los misterios del universo. Ahora, había llegado el momento de su próxima aventura, y la máquina del tiempo estaba lista para partir una vez más hacia lo desconocido.
            </p><p>
            Con el sol desapareciendo en el horizonte y la noche envolviendo el paisaje en sombras, el viajero se sentó en la máquina del tiempo, listo para emprender su próximo viaje a través del tiempo y el espacio. Maya se encontró nuevamente ante una decisión crucial: quedarse y enfrentar las incertidumbres de su mundo conocido, o correr hacia la máquina del tiempo y aventurarse en lo desconocido junto al misterioso viajero.
            </p>";
            $texto2= "<p>La duda la invadió mientras miraba entre la seguridad de su hogar y la promesa de aventura en el horizonte. ¿Debería arriesgarse y seguir al viajero hacia lo desconocido, o debería quedarse y enfrentar las consecuencias de su curiosidad? La decisión pendía en un delicado equilibrio, y solo Maya podía determinar su destino.<center><button onclick= \"window.location.href ='".url('final')."'\">Irse del lugar</button></center> <br><br> <center> <button onclick= \"window.location.href ='".url('final2')."'\">Subir a la maquina</button></center></p>";
        } else if ($respuesta == "op2") {
            $texto="<p>Maya corría a través de la oscuridad, su corazón latiendo con fuerza mientras escapaba de los monstruos que la perseguían implacablemente. Expulsada del templo por no respetar la única norma que su aldea tenía, se encontraba ahora en un territorio desconocido, desesperada por encontrar un lugar donde refugiarse.

            Justo cuando el agotamiento comenzaba a apoderarse de ella y sus esperanzas de sobrevivir se desvanecían, divisó una figura en la distancia. Un hombre montaba un artefacto extraño, que rugía con el poder de la tecnología desconocida. La esperanza volvió a encenderse en el corazón de Maya al ver una posible salvación en el hombre y su máquina.
            
            Sin embargo, antes de que pudiera tomar una decisión, se encontró ante otra encrucijada. ¿Debería arriesgarse y subir a la máquina del hombre desconocido, confiando en que la llevaría a un lugar seguro? O ¿debería optar por la precaución y esconderse entre los arbustos, esperando que los monstruos pasaran de largo sin descubrirla?</p>";
            $texto2="<p>La indecisión la paralizó por un momento mientras evaluaba sus opciones. Por un lado, la seguridad de la máquina del hombre ofrecía una esperanza de escape y supervivencia. Por otro lado, esconderse entre los arbustos representaba una estrategia más cautelosa, aunque también más riesgosa si los monstruos la descubrían.<center><button onclick= \"window.location.href ='".url('final3')."'\">Esconderse en los arbustos</button></center> <br><br> <center> <button onclick= \"window.location.href ='".url('final4')."'\">Seguir buscando un refugio para esconderse</button></center></p>";
        }
        return array('texto' => $texto, 'texto2' => $texto2);
     }
     public function final_1(){

        return view('final1');

     }
     public function final_2(){

        return view('final2');

     }
     public function final_3(){

        return view('final3');

     }
     public function final_4(){

        return view('final4');

     }
     
}
