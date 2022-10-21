let paraResult = document.getElementById("paraComment");
let inputNameElement = document.getElementById("nameElement");
let inputColorElement = document.getElementById("colorElement");
let bgContainer = document.getElementById("backGround");

$(document).ready(function(){
  $(".button").click(function(event){    
    event.preventDefault();      
      let nameValue = inputNameElement.value;
      let colorValue = inputColorElement.value;
      document.body.style.backgroundColor = colorValue;         
      let displayText = "Hi, " + nameValue + " ! The color is " + colorValue ;
      paraResult.textContent = displayText;
    $.post("inputs.php",
    {
      name: nameValue,
      color: colorValue,
    });
  });
});