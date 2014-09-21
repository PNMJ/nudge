$(document).ready(function() {
	$("#img-holder").height($("#img-holder").width());
	
	$(".slideForward").click(function(event) {
		nextSlide();
	});
	$(".slideBack").click(function(event) {
		prevSlide();
	});

});
var onslide = 1;
var slideID = "#slide1"
function nextSlide(){
	$(slideID).hide('slide', {direction: 'left'}, 200);
	onslide++;
	slideID = "#slide" + onslide;
	$(slideID).delay(300).show('slide', {direction: 'right'}, 300);
}
function prevSlide(){
	$(slideID).hide('slide', {direction: 'right'}, 200);
	onslide--;
	slideID = "#slide" + onslide;
	$(slideID).delay(300).show('slide', {direction: 'left'}, 300);
}