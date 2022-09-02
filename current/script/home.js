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
  document.getElementById('video').style.width = "90%";
}


function pause() {
  document.getElementById('video').pause();
  document.getElementById('video').style.width = "70%";
}


function end() {
  document.getElementById('redirect').style.display = "block";
}
