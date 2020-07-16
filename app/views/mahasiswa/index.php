<div class="container-fluid mt-3">
	<div class="list-group-item d-flex justify-content-between align-items-center">
	    <h5 class="my-0 mr-md-auto font-weight-normal">Data Mahasiswa</h5>
	    <!-- Search -->
	    <div class="mr-2">
			<form action="<?= BASEURL; ?>/mahasiswa/cari" method="post" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
				<div class="input-group">
					<input name="keyword" id="tombolCari" type="text" class="form-control bg-light border-0 small" placeholder="Cari Mahasiswa.." aria-label="Search" aria-describedby="basic-addon2">
					<div class="input-group-append">
						<button class="btn btn-primary" type="submit">Cari</button>
					</div>
				</div>
			</form>
	    </div>
	    <!-- modal bootom -->
	    <button type="button" data-url="<?= BASEURL; ?>" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">Tambah</button>
	</div>
</div>

<div class="container-fluid my-1">
		<?php Flasher::flash(); ?>
</div>

<div class="list-group-item d-flex justify-content-between align-items-center border-0">
	<!-- <div class="row mb-3"> -->
		<div class="col-sm-12 col-md-12 col-xl-15">
			<ul class="list-group">
			<?php foreach($data['mhs'] as $mhs) : ?>
				<li class="list-group-item d-flex justify-content-between align-items-center">
					<?= $mhs['nama']; ?>
					<div>
						<a href="#" class="badge badge-info p-2 tampilModalDetail" data-id="<?= $mhs['id']; ?>" data-url="<?= BASEURL; ?>" data-toggle="modal" data-target="#detailModal">Detail</a>		
						<a href="#" class="badge badge-warning p-2 tampilModalUbah" data-id="<?= $mhs['id']; ?>" data-url="<?= BASEURL; ?>" data-toggle="modal" data-target="#formModal">Edit</a>		
						<a href="#" class="badge badge-danger p-2 tampilModalAlert" data-id="<?= $mhs['id']; ?>" data-url="<?= BASEURL; ?>" data-toggle="modal" data-target="#alertModal">Delete</a>		
					</div>
				</li>
			<?php endforeach ?>
			</ul>
		</div>
	<!-- </div> -->
</div>

<?php
// detail modal
include "modal/detail.html";

// form modal
include "modal/form.php";

// alert modal
include "modal/alert.html";
?>
