// ----------------------------------------------
// FUNCION PARA CAMBIAR LA LUZ ACTIVA DE SEMÁFORO
// nombre: cambiarLuzSemaforo
// parámetros entrada: id, prender
// parámetros salida: no posee
// ----------------------------------------------
function cambiarLuzSemaforo(id, prender) {
    var color = 'gray'
    if(prender) color = id
    /* document.getElementById(id).style.backgroundColor = color */
    document.querySelector('#'+id).style.backgroundColor = color
}

// ----------------------------------------------------------
// FUNCION PARA CAMBIAR EL MODO A PARTIR DEL EVENTO DEL BOTÓN
// ----------------------------------------------------------
function cambiarEstadoSemaforoBoton() {
    if(!modoAuto) cambiarEstadoSemaforo()
}

// ------------------------------------------------------------
// FUNCION PARA CAMBIAR LA LUZ DEL SEMÁFOTO A PARTIR DEL ESTADO
// ------------------------------------------------------------
var estado = 0
function cambiarEstadoSemaforo() {
    console.log(estado)

    switch(estado) {
        //ROJO
        case 0:
            cambiarLuzSemaforo('red', !false)
            cambiarLuzSemaforo('yellow', false)
            cambiarLuzSemaforo('green', false)
            break
        
        //ROJO-AMARILLO
        case 1:
            cambiarLuzSemaforo('red', !false)
            cambiarLuzSemaforo('yellow', !false)
            cambiarLuzSemaforo('green', false)
            break

        //VERDE
        case 2:
            cambiarLuzSemaforo('red', false)
            cambiarLuzSemaforo('yellow', false)
            cambiarLuzSemaforo('green', !false)
            break

        //AMARILLO
        case 3:
            cambiarLuzSemaforo('red', false)
            cambiarLuzSemaforo('yellow', !false)
            cambiarLuzSemaforo('green', false)
            break

        default:
            cambiarLuzSemaforo('red', false)
            cambiarLuzSemaforo('yellow', false)
            cambiarLuzSemaforo('green', false)
            break
    }

    estado++;
    if(estado > 3) estado = 0
}

// ----------------------------------------
// FUNCIÓN PARA CONTROLAR EL CAMBIO DE MODO
// ----------------------------------------
var modoAuto = false
var refInterval
function cambiarModoSemaforo() {
    modoAuto = !modoAuto

    //envio el mensaje del modo al DOM
    cambiarMensajeModo(modoAuto)

    //controlo el accionamiento del timer de interval
    if(modoAuto) {
        refInterval = setInterval(cambiarEstadoSemaforo, 2000)
    }
    else {
        clearInterval(refInterval)
    }
}

// ------------------------------------------
// FUNCIÓN PARA REPRESNTAR EL MENSAJE DE MODO
// ------------------------------------------
function cambiarMensajeModo(modoauto) {
    /*
    var mensaje = 'Modo manual'
    if(modoauto) mensaje = 'Modo Automático'
    document.querySelector('h4').innerText = mensaje
    */
    document.querySelector('h4').innerText = modoauto? 'Modo Automático' : 'Modo manual'
}

// -------------------------
// FUNCION DE INICIALIZACIÓN
// -------------------------
function start() {
    // INICIALIZACIÓN DE LOS EVENTOS CORRESPONDIENTES A CADA BOTÓN
    document.querySelector('#boton-cambiar').onclick = cambiarEstadoSemaforoBoton
    document.querySelector('#boton-modo').onclick = cambiarModoSemaforo

    // INICIALIZACIÓN DE LAS LUCES DEL SEMÁFORO
    cambiarLuzSemaforo('red', false)
    cambiarLuzSemaforo('yellow', false)
    cambiarLuzSemaforo('green', false)
    cambiarMensajeModo(modoAuto)
}

// --------------------------------------
// LLAMADAS A FUNCIONES DE INICIALIZACIÓN
// --------------------------------------
//start()
window.onload = start
