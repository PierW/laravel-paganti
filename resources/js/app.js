const $ = require('jquery');
const moment = require('moment');
const Chart = require('chart.js');


$(document).ready(init);


function getTime() {

  var h1 = $(".header h1");
  var text = h1.text();

  h1.text(text + " at " + moment().format("HH:mm:ss"));
}





function init() {

  //PER ESEGUIRE ALCUNE FUNZIONI SOLO IN ALCUNI ROOT POSSIAMO FARE COSI:
  // var newURL = window.location.protocol + "//" + window.location.host + window.location.pathname + window.location.search;
  var patch = window.location.pathname;
  if (patch === "/home") {
    console.log(newURL, patch);
  }

  //OPPURE CREANDO UN ALTRO FILE (ES. VEDI PROVA.JS, E FILE WEBPACK RICHIAMATA SOLO IN ROOT /HOME --- VIEW/BOOLEAN
  // MA IN QUESTO CASO DOBBIAMO INCLUDERE JQUERY PIù VOLTE ALTRIMENTI DA ERRORE IN COMPILAZIONE CON WEBPACK)

  // console.log("Hello World");
  getTime();
}
