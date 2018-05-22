var console = console || {},
  document = document || {},



video ={
    videoIndex : 1,


    plusVideo:function(n) {
      this.showVideo( this.videoIndex += n);
    },

    currentVideo: function(n)  {
       this.showVideo( this.videoIndex = n);
    },
    

    showVideo:function(n) {
      var i;
      var video = document.getElementsByClassName("videoContainer");
      if (n > video.length) {this.videoIndex = 1}
      if (n < 1) {this.videoIndex = video.length}
      for (i = 0; i < video.length; i++) {
          video[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      video[this.videoIndex-1].style.display = "block";
      dots[this.videoIndex-1].className += " active";
      captionText.innerHTML = dots[this.videoIndex-1].alt;
    }
};
        var video = document.getElementsByClassName("video");
    video.addEventListener("ended", showVideo(n));