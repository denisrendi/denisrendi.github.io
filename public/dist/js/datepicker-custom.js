// JavaScript Document
$(function() {
	$("#datepicker1").datepicker({
		autoclose:true,
		dateFormat:"dd MM yy",
		changeMonth:true,
		changeYear:true,
		dayNames: ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"],
		dayNamesMin: ["Mg", "Sn", "Sl", "Rb", "Km", "Jm", "Sb"],
		monthNames: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
		monthNamesShort: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Ags", "Sep", "Okt", "Nov", "Des"]
	});
	$( "#datepicker2" ).datepicker({
		dateFormat:"dd MM yy",
		changeMonth:true,
		changeYear:true,
		dayNames: ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"],
		dayNamesMin: ["Mg", "Sn", "Sl", "Rb", "Km", "Jm", "Sb"],
		monthNames: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
		monthNamesShort: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Ags", "Sep", "Okt", "Nov", "Des"]
	});
	$( "#datepicker3" ).datepicker({
		dateFormat:"dd MM yy",
		changeMonth:true,
		changeYear:true,
		dayNames: ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"],
		dayNamesMin: ["Mg", "Sn", "Sl", "Rb", "Km", "Jm", "Sb"],
		monthNames: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
		monthNamesShort: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Ags", "Sep", "Okt", "Nov", "Des"]
	});
	$( "#datepicker_tgl_tugas" ).datepicker({
		dateFormat:"DD, dd MM yy",
		changeMonth:true,
		changeYear:true,
		dayNames: ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"],
		dayNamesMin: ["Mg", "Sn", "Sl", "Rb", "Km", "Jm", "Sb"],
		monthNames: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
		monthNamesShort: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Ags", "Sep", "Okt", "Nov", "Des"]
	});

});