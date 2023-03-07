const hamburger = document.querySelector(".ham");
const navsub = document.querySelector(".nav-sub");
hamburger.addEventListener('click', () => {
  hamburger.classList.toggle("change")
  navsub.classList.toggle("nav-change")
});

var text;
var i = 0;
document.getElementsByClassName(".text");



setInterval(function () {
  document.getElementById("text").innerHTML += text.substring(i, i + 1);
  i++;
  if (i > text.length) {
    clearInterval();
  }
}, 300);


// Create a variable that holds the text you want to display
var text = "Together you can grow.";
var i = 0;

function writeText() {
  if (i <= text.length) {
    document.getElementById("text").innerHTML += text.charAt(i);
    i++;
    setTimeout(writeText, 100);
  }
  else {
    setTimeout(function () {
      i = 0;
      document.getElementById("text").innerHTML = "";
      writeText();
    }, 5000); // repeat the process after 5 seconds
  }
}

writeText();


