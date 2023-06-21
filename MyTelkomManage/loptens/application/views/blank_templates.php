                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 font-weight-bold text-gray-800"><?php echo $title ?></h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>
                    <!-- Content Row -->
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control" id="judul" placeholder="judul" name="judul">
                        </div>
                            <div class="form-group col-md-3">
                                <label for="nama_pelanggan">Nama Pelanggan</label>
                                <input type="text" class="form-control" id="nama_pelanggan" placeholder="Nama Pelanggan" name="nama_pelanggan">
                            </div>
                            
                            
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="langganan">Langganan</label>
                                <input type="text" class="form-control" id="langganan" placeholder="Langganan" name="langganan">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="segment">Segment</label>
                                    </div>
                                    <select class="custom-select" id="segment" name="segment">
                                        <option selected></option>
                                        <option value="DES">DES</option>
                                        <option value="DGS">DGS</option>
                                        <option value="DBS">DBS</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="tipe">Tipe</label>
                                    </div>
                                    <select class="custom-select" id="tipe" name="tipe">
                                        <option selected></option>
                                        <option value="POTS">POTS</option>
                                        <option value="NON POTS">NON POTS</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="status">Status</label>
                                    </div>
                                    <select class="custom-select" id="status" name="status">
                                        <option selected></option>
                                        <option value="OCP">OCP</option>
                                        <option value="Complate">Complete</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="kategori">Kategori</label>
                                    </div>
                                    <select class="custom-select" id="kategori" name="kategori">
                                        <option selected></option>
                                        <option value="OWN CHANEL">OWN CHANEL</option>
                                        <option value="NGTMA">NGTMA</option>
                                        <option value="GTMA">GTMA</option>
                                    </select>
                                </div>
                            </div>
                            
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="nomor_order">Nomor Order</label>
                                <input type="text" class="form-control" id="nomor_order" placeholder="Nomor Order" name="nomor_order">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="harga">Harga</label>
                                <input type="text" class="form-control" id="harga" placeholder="Harga" name="harga">
                            </div>
                        </div>


                    


                    <!-- Content Row -->
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->



