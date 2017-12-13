$(document) .on ("click", '.tombol', function(e){
	var angkatan = $(this) .data('angkatan');
	var nama_pd = $(this) .data('nama_pd');
	var no_induk = $(this) .data('no_induk');
	var nisn = $(this) .data('nisn');
	var mapel3 = $(this) .data('mapel3');
	var nilai3 = $(this) .data('nilai3');
	var mapel4 = $(this) .data('mapel4');
	var nilai4 = $(this) .data('nilai4');
	var mapel5 = $(this) .data('mapel5');
	var nilai5 = $(this) .data('nilai5');
	var userid = $(this) .data('userid');



	$(".angkatan") .val(angkatan);
	$(".nama_pd") .val(nama_pd);
	$(".no_induk") .val(no_induk);
	$(".nisn") .val(nisn);
	$(".mapel3") .val(mapel3);
	$(".nilai3") .val(nilai3);
	$(".mapel4") .val(mapel4);
	$(".nilai4") .val(nilai4);
	$(".mapel5") .val(mapel5);
	$(".nilai5") .val(nilai5);
	$(".userid") .val(userid);


	$(".delete") .html('Apakah Anda yakim akan menghapus data dengan nama <strong>"' + nama + '"</strong> ?');

	$('#pass') .tooltip({
		'placement': 'top',
		'title': 'Kosongkan kolom password bila tidak ada perubahan',
		'trigger': 'focus'
	});
});