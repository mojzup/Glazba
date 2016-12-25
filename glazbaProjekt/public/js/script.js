/*function el(id){return document.getElementById(id);} 
function toggle_visibility(id,id2,id3,id4) {
       		var e = el(id);
       		var f = el(id2);
       		var g = el(id3);
       		var h = el(id4);
          	e.style.display = 'block';
          	f.style.display = 'none';
          	g.style.borderBottom = 'none';
          	g.style.color = '#5C496E';
          	g.style.background = "white";
          	h.style.color = 'grey';
          	h.style.borderBottom = '1px solid #cccccc';
          	h.style.background = "#dbdbdb";          
}*/
// Put event listeners into place
window.addEventListener("DOMContentLoaded", function() {
  // Grab elements, create settings, etc.
        var canvas = document.getElementById('canvas');
        var context = canvas.getContext('2d');
        var video = document.getElementById('video');
        var mediaConfig =  { video: true };
        var errBack = function(e) {
          console.log('An error has occurred!', e)
        };

  // Put video listeners into place
        if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
            navigator.mediaDevices.getUserMedia(mediaConfig).then(function(stream) {
                video.src = window.URL.createObjectURL(stream);
                video.play();
            });
        }

        /* Legacy code below! */
        else if(navigator.getUserMedia) { // Standard
    navigator.getUserMedia(mediaConfig, function(stream) {
      video.src = stream;
      video.play();
    }, errBack);
  } else if(navigator.webkitGetUserMedia) { // WebKit-prefixed
    navigator.webkitGetUserMedia(mediaConfig, function(stream){
      video.src = window.webkitURL.createObjectURL(stream);
      video.play();
    }, errBack);
  } else if(navigator.mozGetUserMedia) { // Mozilla-prefixed
    navigator.mozGetUserMedia(mediaConfig, function(stream){
      video.src = window.URL.createObjectURL(stream);
      video.play();
    }, errBack);
  }

  // Trigger photo take
  document.getElementById('snap').addEventListener('click', function() {
    context.drawImage(video, 0, 0, 213, 160);
  });
}, false);