<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Produk</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="row" style="margin-bottom: 10px">
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-4 text-center">
                        <div style="margin-top: 8px" id="message">
                            <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                        </div>
                    </div>
                    <div class="col-md-4 text-right">
                        <form action="<?php echo site_url('produk/index'); ?>" class="form-inline" method="get">
                            <div class="input-group">
                                <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                                <span class="input-group-btn">
                                    <?php
                                    if ($q <> '') {
                                    ?>
                                        <a href="<?php echo site_url('admin/produk'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                    }
                                    ?>
                                    <button class="btn btn-primary" type="submit">Search</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
                <table class="table table-bordered" style="margin-bottom: 10px">
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Stok</th>
                        <th>Harga</th>
                        <th>Foto</th>
                        <th>Tgl input</th>
                        <th><?php echo anchor(site_url('produk/create'), '+', 'class="btn btn-success"'); ?></th>
                    </tr><?php
                            foreach ($produk_data as $produk) {
                            ?>
                        <tr>
                            <td width="80px"><?php echo ++$start ?></td>
                            <td><?php echo $produk->judul ?></td>
                            <td><?php echo $produk->deskripsi ?></td>
                            <td><?php echo $produk->stok ?></td>
                            <td><?php echo 'Rp. ' . number_format($produk->harga) ?></td>
                            <td><img width='100' src="<?= base_url() ?>user/produk_dan_jasa/<?php echo $produk->foto ?>"></td>
                            <td><?php echo $produk->tglinput ?></td>
                            <td style="text-align:center" width="200px">
                                <?php
                                echo anchor(site_url('produk/read/' . $produk->id_produk), 'Read');
                                echo ' | ';
                                echo anchor(site_url('produk/update/' . $produk->id_produk), 'Update');
                                echo ' | ';
                                echo anchor(site_url('produk/delete/' . $produk->id_produk), 'Delete', 'onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
                                ?>
                            </td>
                        </tr>
                    <?php
                            }
                    ?>
                </table>
                <div class="row">
                    <div class="col-md-6">
                        <a href="#" class="btn btn-secondary">Total Record : <?php echo $total_rows ?></a>
                    </div>
                    <div class="col-md-6 text-right">
                        <?php echo $pagination ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>