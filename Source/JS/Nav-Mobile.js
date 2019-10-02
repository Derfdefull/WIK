
var prevScrollpos = window.pageYOffset;

window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar-mobile").style.bottom = "0";
  } else {
    document.getElementById("navbar-mobile").style.bottom = "-50px";
  }
  prevScrollpos = currentScrollPos;
}