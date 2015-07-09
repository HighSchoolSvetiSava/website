$( ".sign-toggle" ).click(function() {
	if($(".sign-in").hasClass("sign-visable") || $(".sign-up").hasClass("sign-visable")) {
		$(".sign-in").removeClass("sign-visable");
		$(".sign-up").removeClass("sign-visable");
	} else {
		$(".sign-in").addClass("sign-visable");
	}
});

$(".sign-up-button").click(function() {
		$(".sign-in").removeClass("sign-visable");
		$(".sign-up").addClass("sign-visable");
})