$(document).ready(function() {
	$("#img-holder").height($("#img-holder").width());
	var requests = [];
	for (var i = 0; i < requests.length; i++) {
		if(i < 4){
			$("#requests").append(makeDiv(requests[i]));
		}
	};
});

function makeDiv(request){
	return '<a href="">'
			+'<div class="request">'
			+'<h2>'+request.category+'</h2>'
				+'<p>'+request.question1+'</p>'
				+'<p>'+request.question2+'</p>'
			+'</div></a>'
		+'</div>';
}