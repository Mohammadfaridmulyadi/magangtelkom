                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 font-weight-bold text-gray-800"><?php echo $title ?></h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>
                    <!-- Content Row -->
                    <!-- Form View -->

                    <?php foreach ($detail as $row) : ?>
                    <form method="post" action="<?php echo base_url('user/detailLop/updateDataLop?id=' . $row->id_lop) ?>">
                        <div class="form-row col-md-8 mx-auto mt-5">
                            <div class="form-group col-md-6">
                            <label for="judul">Judul</label>
                            <input type="hidden" name="id_lop" value="<?php echo $row->id_lop; ?>">
                            <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul" value="<?php echo $row->judul ?>">
                            </div>
                            <div class="form-group col-md-6">
                            <label for="nama_pelanggan">Nama Pelanggan</label>
                            <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" placeholder="Nama Pelanggan" value="<?php echo $row->nama_pelanggan ?>">
                            </div>
                        </div>

                        <div class="form-row col-md-8 mx-auto ">
                            <div class="form-group col-md-6">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" value="<?php echo $row->alamat ?>">
                            </div>
                            <div class="form-group col-md-6">
                            <label for="langganan">Langganan</label>
                            <input type="text" class="form-control" id="langganan" name="langganan" placeholder="Langganan" value="<?php echo $row->langganan ?>">
                            </div>
                        </div>
                        
                        <div class="form-row col-md-8 mx-auto ">
                        <div class="form-group col-md-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="segment">Segment</label>
                                </div>
                                    <select class="custom-select" id="segment" name="segment">
                                        <option selected><?php echo $row->segment ?></option>
                                        <option value="DES">DES</option>
                                        <option value="DGS">DGS</option>
                                        <option value="DBS">DBS</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="tipe">Tipe</label>
                                    </div>
                                    <select class="custom-select" id="tipe" name="tipe">
                                        <option selected><?php echo $row->tipe ?></option>
                                        <option value="POTS">POTS</option>
                                        <option value="NON POTS">NON POTS</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-row col-md-8 mx-auto ">
                            <div class="form-group col-md-6">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="status">Status  </label>
                                    </div>
                                    <select class="custom-select" id="status" name="status">
                                        <option selected><?php echo $row->status ?></option>
                                        <option value="OCP">OCP</option>
                                        <option value="Complate">Complete</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="kategori">Kategori</label>
                                    </div>
                                    <select class="custom-select" id="kategori" name="kategori">
                                        <option selected><?php echo $row->kategori ?></option>
                                        <option value="OWN CHANEL">OWN CHANEL</option>
                                        <option value="NGTMA">NGTMA</option>
                                        <option value="GTMA">GTMA</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-row col-md-8 mx-auto ">
                            <div class="form-group col-md-6">
                            <label for="harga">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga" value="<?php echo $row->harga ?>">
                            </div>
                            <div class="form-group col-md-6">
                            <label for="nomor_order">Nomor Order</label>
                            <input type="text" class="form-control" id="nomor_order" name="nomor_order" placeholder="Nomor Order" value="<?php echo $row->nomor_order ?>">
                            </div>
                        </div>

                        <div class="form-row col-md-8 mx-auto ">
                        <div class="form-group col-md-3"></div>
                        <div class="form-group col-md-3"></div>
                        <div class="form-group col-md-3"></div>
                        <div class="form-group col-md-3">
                            <button type="submit" class="btn btn-success btn-oval"><i class="fa fa-plus"></i> Update LOP</button>
                        </div>
                        </div>

                    </form>
                    <?php endforeach; ?>

                    


                    <!-- Content Row -->
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->



