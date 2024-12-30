// JavaScript Document

$('#un').keyup(function() {
	var username = $(this).val();
	
	$('#un_status').text('Searching...');
	
	if (username != '') {
		$.post('../administrasi/username_check.php', { username: username }, function(data) {
			$('#un_status').text(data);
		});
	} else {
	$('#un_status').text('');
	}
});