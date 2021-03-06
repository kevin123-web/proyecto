<!DOCTYPE html>
<html lang="es-Es" dir="ltr">
  <head>
    <title>El Ahorcado</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/emergentes.css" rel="stylesheet" type="text/css">
    <link href="css/botones.css" rel="stylesheet" type="text/css">
    <link href="css/animaciones.css" rel="stylesheet" type="text/css">
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="img/pawy2.png">
  </head>
  <body>
    <h1> BIENVENIDO AL JUEGO DEL AHORCADO </h1>
    <div class="principal">
      <div class="imagenDiv">
        <img src="img/svg/horca.svg" alt="muñeco" id="imagen" >
      </div>
      <div class="juegoDiv">
        <h1 id="pista"></h1>
        <h2 class="intentosH2">
          <span id="intentos"></span>/<span id="intentosOriginales"></span>
        </h2>
        <h2 id="puntuacionH2"></h2>
        <h2 id="resultado"><pre></pre></h2>
        <div class="tecladoDiv">
          <button type="button" class="tecla" id="teclaq" value="Q" onclick="comprobarTecla('q');">Q</button>
          <button type="button" class="tecla" id="teclaw" value="W" onclick="comprobarTecla('w');">W</button>
          <button type="button" class="tecla" id="teclae" value="E" onclick="comprobarTecla('e');">E</button>
          <button type="button" class="tecla" id="teclar" value="R" onclick="comprobarTecla('r');">R</button>
          <button type="button" class="tecla" id="teclat" value="T" onclick="comprobarTecla('t');">T</button>
          <button type="button" class="tecla" id="teclay" value="Y" onclick="comprobarTecla('y');">Y</button>
          <button type="button" class="tecla" id="teclau" value="U" onclick="comprobarTecla('u');">U</button>
          <button type="button" class="tecla" id="teclai" value="I" onclick="comprobarTecla('i');">I</button>
          <button type="button" class="tecla" id="teclao" value="O" onclick="comprobarTecla('o');">O</button>
          <button type="button" class="tecla" id="teclap" value="P" onclick="comprobarTecla('p');">P</button><br>
          <button type="button" class="tecla" id="teclaa" value="A" onclick="comprobarTecla('a');">A</button>
          <button type="button" class="tecla" id="teclas" value="S" onclick="comprobarTecla('s');">S</button>
          <button type="button" class="tecla" id="teclad" value="D" onclick="comprobarTecla('d');">D</button>
          <button type="button" class="tecla" id="teclaf" value="F" onclick="comprobarTecla('f');">F</button>
          <button type="button" class="tecla" id="teclag" value="G" onclick="comprobarTecla('g');">G</button>
          <button type="button" class="tecla" id="teclah" value="H" onclick="comprobarTecla('h');">H</button>
          <button type="button" class="tecla" id="teclaj" value="J" onclick="comprobarTecla('j');">J</button>
          <button type="button" class="tecla" id="teclak" value="K" onclick="comprobarTecla('k');">K</button>
          <button type="button" class="tecla" id="teclal" value="L" onclick="comprobarTecla('l');">L</button>
          <button type="button" class="tecla" id="teclañ" value="Ñ" onclick="comprobarTecla('ñ');">Ñ</button><br>
          <button type="button" class="tecla" id="teclaz" value="Z" onclick="comprobarTecla('z');">Z</button>
          <button type="button" class="tecla" id="teclax" value="X" onclick="comprobarTecla('x');">X</button>
          <button type="button" class="tecla" id="teclac" value="C" onclick="comprobarTecla('c');">C</button>
          <button type="button" class="tecla" id="teclav" value="V" onclick="comprobarTecla('v');">V</button>
          <button type="button" class="tecla" id="teclab" value="B" onclick="comprobarTecla('b');">B</button>
          <button type="button" class="tecla" id="teclan" value="N" onclick="comprobarTecla('n');">N</button>
          <button type="button" class="tecla" id="teclam" value="M" onclick="comprobarTecla('m');">M</button>
        </div>
      </div>
    </div>
    <div id="solapaDiv"></div>
    <div id="consejosDiv">
      <h1>CONSEJOS</h1>
      <p>CONSEJOS ANTE LA PANDEMIA</p>
      <p>
        * La solidaridad nos salva de la desesperanza y nos confirma que la vida tiene sentido cuando nos sentimos en comunidad y cuidamos del otro . <br><br>
        * Esta pandemia, no nos vencerá. Junto a nuestros maestros, maestras y estudiantes, trabajaremos con fuerza, corazón y esperanza para salir adelante .<br><br>
        * Los retos de la vida no están ahí para paralizarte, sino para ayudarte a descubrir quién eres. Bernice Johnson Reagon<br>

      </p>
      <hr>
      <p>
        "No tienes que controlar tus pensamientos; solo tienes que dejar de permitirles que te controlen a ti". Dan Millman
      </p>
      <button class="botonEmergente" onclick="cerrarConsejos();">Cerrar</button>
    </div>
    <div id="instruccionesDiv">
      <h1>INSTRUCCIONES</h1>
      <p>Dispones de 6 intentos para acertar la palabra oculta.</p>
      <p>Según vayas pulsando las teclas se irán deshabilitando para que no pulses dos veces la misma letra.</p>
      <p>
        En todo momento puedes darle al botón "Reiniciar" para empezar una nueva partida, al igual que cuando
        ganes tienes que pulsar el botón "Siguiente".
      </p>
      <p>
        En caso de que le des a "Reiniciar" tu puntuación se restablecerá.
      </p>
      <p>Si lo deseas, puedes activar la música de fondo desde la parte superior izquierda de la pantalla en ordenadores.</p>
      <p>* En pantallas pequeñas como por ejemplo en móviles, no aparecerá la imagen del ahorcado *</p>
      </p>
      <button class="botonEmergente" onclick="cerrarInstrucciones();">Cerrar</button>
    </div>
    <footer>
      <div>
        <button class="boton" onclick="abrirInstrucciones();">Instrucciones</button>
      </div>
      <div>
        <button class="boton" id="BotonReiniciar" onclick="reiniciarPartida();">Reiniciar</button>
      </div>
      <div>
        <button class="boton" onclick="abrirConsejos();">Consejos</button>
      </div>
    </footer>
    <script type="text/javascript" src="js/palabras.js"></script>
    <script type="text/javascript" src="js/emergentes.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    
  </body>
</html>
