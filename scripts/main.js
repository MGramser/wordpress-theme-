var videoisplaying = false;
jQuery(document).ready(function(){
	
})

jQuery(document).on('scroll', function(){
	if(!videoisplaying){
		videoisplaying = true;
		jQuery('#autoplayvideo').get(0).play()
	}
	
	jQuery('#top').css('top', jQuery(document).scrollTop() * -1 / 2 -20)
})

var video = document.getElementById('autoplayvideo');
    video.addEventListener('touchstart',function(){
            video.play();
    },false);