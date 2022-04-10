/* Clock function w3school*/

function startTime() {
  const today = new Date();
  let h = today.getHours();
  let m = today.getMinutes();
  let s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =  h + ":" + m + ":" + s;
  setTimeout(startTime, 1000);
}
  
  function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}

/* Scroll down function   */
/* Back to top button - codepen. Back to top button. (n.d.). Retrieved April 4, 2022, from https://codepen.io/matthewcain/pen/ZepbeR */

var mybutton = document.getElementById("myBtn");


function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
