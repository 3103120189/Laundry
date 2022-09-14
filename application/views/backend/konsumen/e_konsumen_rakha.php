<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800"><?= $judul;?></h1>
        <div class="card shadow mb-4">
            <div class="card-body">
                <form method="post" action="<?= base_url()?>konsumenrakha/update">
                    <div class="form-group">
                        <input type="text" name="kode_konsumen" value="<?= $konsumen['kode_konsumen'];?>"  class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <input type="text" name="nama_konsumen" value="<?= $konsumen['nama_konsumen'];?>"  placeholder="Input Nama Konsumen" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <textarea name="alamat_konsumen"   cols="30" rows="5" placeholder="Input Alamat" class="form-control" required><?= $konsumen['alamat_konsumen'];?></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" name="no_telp" placeholder="Input Nomor Telepon" class="form-control" required value="<?= $konsumen['no_telp'];?>">
                    </div>
                    <div class="form-group">
                       <button type="submit" class="btn btn-success">Update</button>
                       <a href="<?= base_url()?>konsumenrakha" class="btn btn-danger">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>