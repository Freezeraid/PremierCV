function verifyCurrentDiv() {
  if ($('#formation-bloc').visible(true)) {
    document.getElementById("tracker-number").innerHTML = "2";
    document.getElementById("tracker-link1").href="/#header-bloc"; 
    document.getElementById("tracker-link2").href="/#competences-bloc"; 
  }
  else if ($('#competences-bloc').visible(true)) {
    document.getElementById("tracker-number").innerHTML = "3";
    document.getElementById("tracker-link1").href="/#formation-bloc"; 
    document.getElementById("tracker-link2").href="/#travaux-bloc"; 
  }
  else if ($('#travaux-bloc').visible(true)) {
    document.getElementById("tracker-number").innerHTML = "4";
    document.getElementById("tracker-link1").href="/#competences-bloc"; 
    document.getElementById("tracker-link2").href="/#contact-bloc"; 
  }
  else if ($('#contact-bloc').visible(true)) {
    document.getElementById("tracker-number").innerHTML = "5";
    document.getElementById("tracker-link1").href="/#travaux-bloc"; 
    document.getElementById("tracker-link2").href="/#"; 
  }
  else {
    document.getElementById("tracker-number").innerHTML = "1";
    document.getElementById("tracker-link1").href="/#"; 
    document.getElementById("tracker-link2").href="/#formation-bloc"; 
  } 
}