// JavaScript for the blinking heading effect
const heading = document.querySelector('h1');

function blinkHeading() {
  heading.style.color = heading.style.color === 'red' ? 'black' : 'red';
}

setInterval(blinkHeading, 500); // Change color every 500ms (half a second)
