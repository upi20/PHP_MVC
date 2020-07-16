<!-- form Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="formModalLabel"></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="formModalAction" action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
					<input type="text" name="id" id="id" class="form-control" value="<?= $mhs['id']; ?>" hidden="hidden">
					<div class="form-group">
						<label for="nama">Nama Lengkap: </label>
						<input type="text" name="nama" id="nama" class="form-control" required="">
					</div>
					<div class="form-group">
						<label for="npm">Nomor Pokok Mahasiswa: </label>
						<input type="number" name="npm" id="npm" class="form-control" required="">
					</div>
					<div class="form-group">
						<label for="jurusan">Jurusan: </label>
						<select name="jurusan" id="jurusan" class="form-control" required="">
							<option value="Teknik Informatika">Teknik Informatika</option>
							<option value="Teknik Sistem Informasi">Teknik Sistem Informasi</option>
							<option value="Teknik Industri">Teknik Industri</option>
							<option value="Teknik Mesin">Teknik Mesin</option>
							<option value="Teknik Elektro">Teknik Elektro</option>
							<option value="Teknik Sipil">Teknik Sipil</option>
						</select>
					</div>
					<div class="form-group">
						<label for="email">E-mail: </label>
						<input type="email" name="email" id="email" class="form-control" required="">
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal" required="">Close</button>
				<button type="submit" class="btn btn-primary"></button>
				</form>
			</div>
		</div>
	</div>
</div>
