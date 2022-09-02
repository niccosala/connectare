function showOrHide(id, label) {
  if(document.getElementById(id).style.display == "block") {
    document.getElementById(id).style.display = "none";
    document.getElementById("b" + id).style.display = "inline-block";
    changeLabel("b" + id, label);
  } else {
    document.getElementById(id).style.display = "block";
    document.getElementById("b" + id).style.display = "block";
    changeLabel("b" + id, "Mostra meno");
  }

}


function changeLabel(id, label) {
  document.getElementById(id).value = label;
}


function play() {
  document.getElementById('video').play();
}


function pause() {
  document.getElementById('video').pause();
}


function end() {
  document.getElementById('redirect').style.display = "block";
}


window.onscroll = function() { scroll() };
function scroll() {
    if (document.body.scrollTop > 15 || document.documentElement.scrollTop > 15) {
        document.getElementById("call").style.bottom = "15px";
    } else {
        document.getElementById("call").style.bottom = "-120%";
    }
}
