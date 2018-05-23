$(document).ready(function()

{

	var vid =$("video");


	var vidMax=vid.length;
	var vidIndex=0;
	vid[0].play();
	
	var list=$(".column");
		$(list[vidIndex]).addClass("active");

	$("video").on("ended",function(){


		$(this).parent().css("visibility","hidden");
		$(this).parent().css("position","absolute");
		$(list[vidIndex]).removeClass("active");
		if (vidIndex == vid.length-1){

			vidIndex = 0;
		$(vid[vidIndex]).parent().css("visibility","visible");
		$(vid[vidIndex]).parent().css("position","relative");
		$(list[vidIndex]).addClass("active");
		vid[vidIndex].stop();
		}else{
			vidIndex++;
		$(vid[vidIndex]).parent().css("visibility","visible");
		$(vid[vidIndex]).parent().css("position","relative");


		vid[vidIndex].play();
		$(list[vidIndex]).addClass("active");

		};



	});

$(".column").on("click",function(){


	var id =$(this).attr('id');

	if (id=="c1") {videoPlay(0);};
	if (id=="c2") {videoPlay(1); };
	if (id=="c3") {videoPlay(2); };

	
});



 function videoPlay(n){

 	$(vid[vidIndex]).parent().css("visibility","hidden");
	$(vid[vidIndex]).parent().css("position","absolute");
	$(list[vidIndex]).removeClass("active");
 	vid[vidIndex].pause();
	


	vidIndex=n;
	$(vid[n]).parent().css("visibility","visible");
	$(vid[n]).parent().css("position","relative");
	$(list[vidIndex]).addClass("active");



	vid[n].play();
}

});
