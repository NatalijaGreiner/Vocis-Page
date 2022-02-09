var numberOfHovers = document.querySelectorAll(".hvrs").length;

function makeSound(key)
{

  switch (key)
  {
    case "v":
      var vocis = new Audio("audio/vocis.mp3");
      vocis.play();
      break;

    case "s":
      var simona = new Audio("audio/simona3.mp3");
      simona.play();
      break;

    case "b":
      var husband = new Audio("audio/bor2.mp3");
      husband.play();
      break;

  }
}

document.addEventListener("keypress", function(event)
{
  makeSound(event.key);
});

Waves.attach('.float-button-light', ['waves-button', 'waves-float', 'waves-light']);
