// -------------------------------------
// function ponerTitulo(titulo)
// -------------------------------------
function ponerTitulo(titulo) {
    $('header').html('<i>'+titulo+'</i>')
    $('header').css('color','magenta')
}

// -------------------------------------
// function ponerImagen(id, nombre)
// -------------------------------------
function ponerImagen(id, nombre) {
    $('#'+id).attr('src', (nombre != '')? './imgs/'+nombre+'.jpg' : '' )
}

// -------------------------------------
// function setEventoOpcionJugador()
// -------------------------------------
var opcionJugador = 'piedra'
function setEventoOpcionJugador() {
    $('select').change(cambioOpcionJugador)
    function cambioOpcionJugador() {
        opcionJugador = $('select').val()
        console.log(opcionJugador)
        ponerImagen('imagen-jugador', opcionJugador)
        ponerImagen('imagen-computadora', '')
    }
}

// -------------------------------------
// function sortear()
// -------------------------------------
function sortear() {
    var opciones = ['piedra', 'papel', 'tijera']
    var opcion = parseInt(Math.random()*3)
    //console.log(opcion)
    return opciones[opcion]
}

// -------------------------------------
// function buscarPremio(oj,oc)
// -------------------------------------
function buscarPremio(oj,oc) {
    var resultado = 'EMPATÉ'

    if(oj == 'piedra') {
        if(oc == 'papel') return 'PERDÍ'
        else if(oc == 'tijera') return 'GANÉ'
    }
    else if(oj == 'papel') {
        if(oc == 'piedra') return 'GANÉ'
        else if(oc == 'tijera') return 'PERDÍ'
    }
    else if(oj == 'tijera') {
        if(oc == 'papel') return 'GANÉ'
        else if(oc == 'piedra') return 'PERDÍ'
    }
    else resultado = 'ERROR!'

    return resultado
}

// -------------------------------------
// function setEventoBotonJugador()
// -------------------------------------
function setEventoBotonJugador() {
    $('button').click(botonJugar)
    function botonJugar() {
        //console.log('botón jugar!')
        var opcionComputadora = sortear()
        ponerImagen('imagen-computadora', opcionComputadora)

        //console.log(opcionJugador, opcionComputadora)
        var resultado = buscarPremio(opcionJugador, opcionComputadora)
        ponerResultado(resultado)
        //console.log(resultado)
    }
}

// -------------------------------------
// function ponerResultado(resultado)
// -------------------------------------
function ponerResultado(resultado) {

    var color = {
        'GANÉ': {colorTxt: 'green', bgcTxt: 'black'},
        'PERDÍ': {colorTxt: 'black', bgcTxt: 'red'},
        'EMPATÉ': {colorTxt: 'yellow', bgcTxt: 'lightblue'}
    }

    $('footer').html(resultado)
    /* $('footer').css('color', color[resultado].colorTxt)
    $('footer').css('background-color', color[resultado].bgcTxt) */
    $('footer').css('color', color[resultado]['colorTxt'])
    $('footer').css('background-color', color[resultado]['bgcTxt'])
}

// -------------------------------------
// function start()
// -------------------------------------
function start() {
    ponerTitulo('Piedra Papel ó Tijera')
    ponerImagen('imagen-jugador', 'piedra')
    setEventoOpcionJugador()
    setEventoBotonJugador()
}

//start()
$(document).ready(start)



