// let el = document.querySelector('#toto');
// el.style.color = "red";

var slideLeft = {
  distance: "150%",
  origin: "left",
  opacity: null,
  duration: 1500,
};
var slideRight = {
  distance: "150%",
  origin: "right",
  opacity: null,
};
var slideBottom = {
  distance: "150%",
  origin: "bottom",
  opacity: null,
  scale: 1.5,
  duration: 800,
  delay:200,
    rotate: {
        x: 180,
        y: 130,
        z: 80
    }

};

ScrollReveal().reveal("#logo, #container_card ", slideLeft);
ScrollReveal().reveal("#container_card ", slideBottom);
ScrollReveal().reveal("#navitem", slideRight);