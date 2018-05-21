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
      var captionText = document.getElementById("caption");
      if (n > video.length) {this.videoIndex = 1}
      if (n < 1) {this.videoIndex = video.length}
      for (i = 0; i < video.length; i++) {
          video[i].style.visibility = "none";

      }

      video[this.videoIndex-1].style.visibility = "visible";

      video[this.videoIndex-1].autoplay;
   
      
    }
}