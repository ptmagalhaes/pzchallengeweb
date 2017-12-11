$(document).ready(function () {



/*	--------------------------------------------------
	:: Video
	-------------------------------------------------- */


var vid = document.getElementById("bgvid");
var pauseButton = document.querySelector("#box button");

if (window.matchMedia('(prefers-reduced-motion)').matches) {
    vid.removeAttribute("autoplay");
    vid.pause();
    pauseButton.innerHTML = "Paused";
}

function vidFade() {
  vid.classList.add("stopfade");
}

vid.addEventListener('ended', function()
{
// Quando Loop é removido
vid.pause();
//  IE10
vidFade();
}); 


pauseButton.addEventListener("click", function() {
  vid.classList.toggle("stopfade");
  if (vid.paused) {
    vid.play();
    pauseButton.innerHTML = "Pause";
  } else {
    vid.pause();
    pauseButton.innerHTML = "Paused";
  }
})

/*  --------------------------------------------------
  :: Audio
  -------------------------------------------------- */


$("#music").bind("ended", function(){
    // alert('Acabou!');  
      vid.pause();
});


});