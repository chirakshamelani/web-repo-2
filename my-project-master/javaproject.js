window.addEventListener("scroll", function() {
  if(window.scrollY > 50) {
    document.querySelector("#navbar").style.opacity = 0.9;
  } else {
    document.querySelector("#navbar").style.opacity = 1;
  }
});

function myFunction(){
    confirm('Would you like to receive notifications about our new offers?')
}
