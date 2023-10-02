$(document).ready(function () {
	$(".m-title-info").each(function () {
		$(this).hide();
		var txt = $(this).text();
		var saihead = $(this).parent().html();
		var str = $(this).parent().find(".info_head").text();

		if (str) {
			var str1 = str + "&nbsp;<i class=\"fa fa-info-circle info\" style=\"font-size:1.15em; vertical-align:middle;\"></i>";
			$(this).parent().find(".sai_head").html(str1);
		}
	});

	$(".info").mouseover(function () {
		$(this).parent().parent().find(".m-title-info").fadeIn(5);
	});

	$(".info,.m-title-info").mouseout(function () {
		$(this).parent().parent().find(".m-title-info").fadeOut();
		$(".m-title-info").mouseover(function () {
			$(".m-title-info").stop();
		});
	});

});