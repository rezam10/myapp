/*
* Registeration Ajax script
*/
//$(function(){$("#register").on("submit",function(e){e.preventDefault();var t="";var n=$(this).serializeArray();$.post("register",n,function(e){$.each(e,function(){t+="<li>"+this+"</li>"});$("#results").addClass("alert alert-danger").html(t)})})})

$(function(){
	$('a.videoLink').each(function(){

		var thumbnailFilePath = 'assets/images/'+$(this).attr('videofile')+'.jpg';
		var videoCaption = $(this).attr('videocaption');

		$(this).css('background-image','url('+thumbnailFilePath+')');
		$(this).html('<div class="caption">'+videoCaption+'</div><img src="assets/images/play_icon.png" class="play" />');
	});
});