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
          background: 'rgba(240, 212, 149, 1) url(./img/lake.jpg) no-repeat center 46%'
        }
      },
      2: {
        url: './img/tree.jpg',
        style: {
          background: 'rgba(213,217,87, 1) url(./img/tree.jpg) no-repeat center 52%',
          'background-size': 'cover'
        }
      },
      3: {
        url: './img/fog.jpg',
        style: {
          background: 'rgba(213,217,87, 1) url(./img/fog.jpg) no-repeat center 63%',
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