<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
                if(!empty($this->session->flashdata('info'))){?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Selamat!</strong> <?=$this->session->flashdata('info')?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php }
            ?>
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800"><?= $judul;?></h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"><?=$judul;?></h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No. </th>
                                <th>Tanggal Masuk</th>
                                <th>Kode Transaksi</th>
                                <th>Konsumen</th>
                                <th>Paket</th>
                                <th>Berat (KG)</th>
                                <th>Grand Total</th>
                                <th>Tanggal Ambil</th>
                                <th>Status Bayar</th>
                                <th>Status</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($data as $row) {?>
                                <tr>
                                    <td><?= $no++;?></td>
                                    <td><?= $row->tgl_masuk?></td>
                                    <td><?= $row->kode_transaksi?></td>
                                    <td><?= $row->nama_konsumen?></td>
                                    <td><?= $row->nama_paket?></td>
                                    <td><?= $row->berat?></td>
                                    <td>Rp. <?=number_format($row->grand_total,0,',','.'); ?></td>
                                    <td><?= $row->tgl_ambil?></td>
                                    <td><?= $row->bayar?></td>
                                    <td><?= $row->status;?></td>
                                    <td>
                                        <a href="<?= base_url()?>transaksirakha/edit_transaksi/<?= $row->kode_transaksi;?>" class="btn btn-success btn-sm">Edit</a>
                                    </td>
                                </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> 
    
</body>
</html>

<!-- Begin Page Content -->
