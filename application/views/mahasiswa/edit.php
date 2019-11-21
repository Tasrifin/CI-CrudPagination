<div class="container">
    <div class="row mt-3">
        <div class="columd-md-6">
            <div class="card">
                <div class="card-header">
                    Form tambah Data Mahasiswa
                </div>
                
                <div class="card-body">
                    <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $mahasiswa['id'];?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama" value="<?= $mahasiswa['nama'];?>">
                            <small class="form-text text-danger"><?= form_error('nama');?></small>
                        </div>
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" name="nim"  class="form-control" id="nim" placeholder="NIM" value="<?= $mahasiswa['nim'];?>">
                            <small class="form-text text-danger"><?= form_error('nim');?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">E-Mail</label>
                            <input type="text" name="email" class="form-control" id="email" placeholder="E-Mail" value="<?= $mahasiswa['email'];?>">
                            <small class="form-text text-danger"><?= form_error('email');?></small>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                            <?php foreach ( $jurusan as $jur  ) : ?>
                                    <?php if ( $jur == $mahasiswa['jurusan']) : ?>
                                        <option value="<?= $jur; ?>" selected><?= $jur; ?></option>
                                    <?php else : ?> 
                                        <option value="<?= $jur; ?>"><?= $jur; ?></option>
                                <?php endif ; ?>
                            <?php endforeach;?>
                            </select>
                        </div>
                        <button type="submit" name="edit" class="btn btn-primary float-right">Edit Data</button>
                    </form>   
                </div>
            </div>
        </div>
    </div>
</div>