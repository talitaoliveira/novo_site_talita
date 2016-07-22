$(document).ready(function() {
	$(".h1-home").click(function(){
		$(this).addClass("legend-flip");
		$("#virou").val("1");


	});


$(".legend-flip").click(function(){
			if($("#virou").val()==1){
				$(this).removeClass("legend-flip");
				$("#virou").val("0");
			}
		});


});