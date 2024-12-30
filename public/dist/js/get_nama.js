// JavaScript Document

$('#cabang').change(function() {
	var npwp = $('#npwp').val();
	var cabang = $('#cabang').val();
	
	if(npwp,cabang != '') {
		$.post('../archiving/inc/get_namawp_intiarsip.php', { npwp:npwp, cabang:cabang }, function(data) {
		$('#nama').html(data);
		});
	}
});