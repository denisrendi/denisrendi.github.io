// JavaScript Document

$('#cabang').change(function() {
	var npwp = $('#npwp').val();
	var cabang = $('#cabang').val();
	
	if(npwp,cabang != '') {
		$.post('../arsipkpp/inc/get_namawp_mfwp.php', { npwp:npwp, cabang:cabang }, function(data) {
		$('#nama').html(data);
		});
		$.post('../arsipkpp/inc/get_alamatwp_mfwp.php', { npwp:npwp, cabang:cabang }, function(data) {
		$('#alamat').html(data);
		});
		$.post('../arsipkpp/inc/get_kategoriwp_mfwp.php', { npwp:npwp, cabang:cabang }, function(data) {
		$('#kategori').val(data);
		});
	}

});