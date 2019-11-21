<div class="container">
    <div class="row mt-3">
        <div class="columd-md-6">
            <div class="card">
                <div class="card-header">
                    Form tambah Data Mahasiswa
                </div>
                
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
                            <small class="form-text text-danger"><?= form_error('nama');?></small>
                        </div>
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" name="nim"  class="form-control" id="nim" placeholder="NIM">
                            <small class="form-text text-danger"><?= form_error('nim');?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">E-Mail</label>
                            <input type="text" name="email" class="form-control" id="email" placeholder="E-Mail">
                            <small class="form-text text-danger"><?= form_error('email');?></small>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                            <option value="Informatika">Informatika</option>
                            <option value="Sistem Komputer">Sistem Komputer</option>       
                            <option value="Sistem Informasi">Sistem Informasi</option>  
                            <option value="Arsitektur">Arsitektur</option>  
                                               
                            </select>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah</button>
                    </form>   
                </div>
            </div>
        </div>
    </div>
</div>