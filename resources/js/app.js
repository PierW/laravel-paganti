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

  // var newURL = window.location.protocol + "//" + window.location.host + window.location.pathname + window.location.search;
  var patch = window.location.pathname;
  if (patch === "/home") {
    console.log(newURL, patch);
  }
  // console.log("Hello World");
  getTime();
}
