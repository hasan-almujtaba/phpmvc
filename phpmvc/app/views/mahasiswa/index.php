<div class="container mt-3">

  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>

<div class="row mb-3">
  <div class="col-lg-6">
    <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
          Tambah Data Mahasiswa
      </button>
  </div>
</div>

<div class="row mb-3">
  <div class="col-lg-6">

    <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
      
      <div class="input-group">
  <input type="text" class="form-control" placeholder="Cari mahasiswa" name="keyword" id="keyword" aria-label="Recipient's username" aria-describedby="button-addon2" autocomplete="off">
  <div class="input-group-append">
    <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
  </div>
</div>

    </form>

  </div>
</div>

	<div class="row">
		<div class="col-6">

			<h3>Daftar Mahasiswa</h3>

				<ul class="list-group">
					<?php foreach( $data['mhs'] as $mhs ) : ?>
					
						<li class="list-group-item ">
							<?= $mhs['nama'] ?>
							<a class="badge badge-danger float-right" href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" onclick="return confirm('Yakin ingin menghapus?') ">Hapus</a>		
              <a class="badge badge-success float-right mr-2 tampilModalUbah" href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id'] ?>" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id']; ?>">Ubah</a>    
              <a class="badge badge-primary float-right mr-2" href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>">Detail</a>   
						</li>



					<?php endforeach ?>
				</ul>
		</div>
	</div>
</div> 


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
        
        <input type="hidden" name="id" id="id">


        <div class="form-group">
    			<label for="nama">Nama</label>
    			<input type="text" class="form-control" name="nama" id="nama">
  			</div>

  		 	 <div class="form-group">
    			<label for="nrp">nrp</label>
    			<input type="number" class="form-control" name="nrp" id="nrp">
  			</div>

  			<div class="form-group">
    			<label for="email">email</label>
    			<input type="email" class="form-control" name="email" id="email">
  			</div>

			<div class="form-group">
			    <label for="jurusan">jurusan</label>
			    <select class="form-control" id="jurusan" name="jurusan">
			      <option value="Teknik Informatika">Teknik Informatika</option>
			      <option value="Teknik Industri">Teknik Industri</option>
			      <option value="Teknik Pangan">Teknik Pangan</option>
			      <option value="Teknik Planologi">Teknik Planologi</option>
			      <option value="Teknik Lingkungan">Teknik Lingkungan</option>
			    </select>
			</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>
