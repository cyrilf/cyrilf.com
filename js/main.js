/**
 * Choose a random background for the header section
 * and set his properties
 */
function randomHeader() {
  var $header = $('.header');

  if($header.length) {
    var backgrounds = {
      0: 'tree',
      1: 'fog',
      //2: 'space',
      //3: 'lake'
    };

    var bgCount = Object.keys(backgrounds).length;
    var background = backgrounds[Math.floor(Math.random() * bgCount)];
    $header.attr('id', background);
  }
}

$(function() {
  randomHeader();
});