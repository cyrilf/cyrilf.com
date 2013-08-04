/**
 * Choose a random background for the header section
 * and set his properties
 */
function randomHeader() {
  var $header = $('.header');

  if($header.length) {
    var backgrounds = {
      0: {
        url: './img/space.png',
        style: {
          background: 'rgba(142, 68, 173, 1) url(./img/space.png) no-repeat right center fixed',
          'background-size': 'cover'
        }
      },
      1: {
        url: './img/lake.jpg',
        style: {
          background: 'rgba(240, 212, 149, 1) url(./img/lake.jpg) no-repeat center 49%'
        }
      },
      2: {
        url: './img/mountain.jpg',
        style: {
          background: 'rgba(117,125,148, 1) url(./img/mountain.jpg) no-repeat center 30%',
          'background-size': 'cover'
        }
      }
    };

    var bgCount = Object.keys(backgrounds).length;
    var random = Math.floor(Math.random()*bgCount);

    var background = backgrounds[random];
    $header.css(background.style);
  }
}

$(function() {
  randomHeader();
});