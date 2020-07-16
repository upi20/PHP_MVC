$(function(){
// menampilkan form tambah data mahasiswa
	$('.tombolTambahData').on('click', function(){
		const url = $(this).data('url');
		$('.modal-footer button[type=submit]').attr('hidden', 'hidden');
		$('#formModalLabel').html('Tambah Data Mahasiswa');
		$('#nama').val('');
		$('#id').val('');
		$('#npm').val('');
		$('#jurusan').val('');
		$('#email').val('');
		$('.modal-footer button[type=submit]').html('Simpan Data');
		$('#formModalAction').attr('action', url + '/mahasiswa/tambah');
		$('#npm').removeAttr('readonly', '');
	});


	// menampilkan tombol save
	$('#formModalAction input').on('keyup', function(){
		$('.modal-footer button[type=submit]').removeAttr('hidden', '');
	});
	$('#formModalAction select').on('click', function(){
		$('.modal-footer button[type=submit]').removeAttr('hidden', '');
	});



// Menaampilkan form untuk mengubah data mahasiswa
	$('.tampilModalUbah').on('click', function(){
		const id = $(this).data('id');
		const url = $(this).data('url');
		$('.modal-footer button[type=submit]').attr('hidden', 'hidden');
		$('#npm').attr('readonly', '');
		$('#formModalLabel').html('Ubah Data Mahasiswa');
		$('#formModalAction').attr('action', url + '/mahasiswa/ubah');
		$('.modal-footer button[type=submit]').html('Ubah Data');
		
		$.ajax({
			url: url + '/mahasiswa/detail',
			data: {id: id},
			method: 'post',
			dataType: 'json',
			success: function(data){
				$('#id').val(data.id);
				$('#nama').val(data.nama);
				$('#npm').val(data.npm);
				$('#jurusan').val(data.jurusan);
				$('#email').val(data.email);
			}
		});
	});



// Menampilkan detail mahasiswa
	$('.tampilModalDetail').on('click', function(){
		const id = $(this).data('id');
		const url = $(this).data('url');
		$.ajax({
			url: url + '/mahasiswa/detail',
			data: {id: id},
			method: 'post',
			dataType: 'json',
			success: function(data){
				$('#imgDetail').attr('src', url + '/img/' + data.gambar);
				$('#imgDetail').attr('alt', data.nama);
				$('#namaDetail').html(data.nama);
				$('#npmDetail').html(data.npm);
				$('#emailDetail').html(data.email);
				$('#jurusanDetail').html(data.jurusan);
			}
		});
	});

// menampilkan alert konfirmasi hapus data
	$('.tampilModalAlert').on('click', function(){
		const id = $(this).data('id');
		const url = $(this).data('url');
		$('#anchorAlertModal').attr('href', url + '/mahasiswa/delete/' + id);
		$('#alertModalLabel').html('Hapus Data Mahasiswa');
		$('#anchorAlertModal').attr('class', 'btn btn-danger');
		$('#anchorAlertModal').html('Delete');
		$('#paragrafBodyModal').html('Yakin data akan di hapus..?');
	});
});
