var i = 0;
var elementIndex = 0;
var divs = ["line-1", "line-2"];
var ids = ["line1", "line2"];
var captions = ["Zachary McGee", "//Software Developer"];

$(document).ready(function() {
    setInterval ('cursorAnimation()', 600);
    type();
});

function type() {
    document.getElementById(ids[elementIndex]).innerHTML += captions[elementIndex][i++];
    if(i < captions[elementIndex].length){
      setTimeout('type()', 85);
    }
    else {
      if(elementIndex < ids.length - 1){
        document.getElementById(divs[elementIndex]).innerHTML = "<span id=\"" + ids[elementIndex] + "\">" + captions[elementIndex++] + "</span>"
        document.getElementById(divs[elementIndex]).innerHTML = "<span id=\"" + ids[elementIndex] + "\">" + "</span><span class=\"" + divs[elementIndex] + "\" id=\"cursor\">|</span>"
        i = 0;
        type();
      }
    }
}

function cursorAnimation() {
    $('#cursor').animate({
        opacity: 0
    }, 'fast', 'swing').animate({
        opacity: 1
    }, 'fast', 'swing');
}
