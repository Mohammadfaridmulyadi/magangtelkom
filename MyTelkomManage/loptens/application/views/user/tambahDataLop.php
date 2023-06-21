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


                    <form method="post" action="<?php echo base_url('user/daftarProject/tambahDataAksi'); ?>">
                        <table class="table sy-4">
                            <tr>
                                <td><label for="judul">Judul</label></td>
                                <td><input type="text" class="form-control" id="judul" name="judul" placeholder="Judul"></td>
                            </tr>
                            <tr>
                                <td><label for="nama_pelanggan">Nama Pelanggan</label></td>
                                <td> <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" placeholder="Nama Pelanggan"></td>
                            </tr>
                            <tr>
                                <td><label for="nama_pelanggan">Segment</label></td>
                                <td>
                                    <div class="input-group">
                                            <select class="custom-select" id="segment" name="segment">
                                                <option selected></option>
                                                <option value="DES">DES</option>
                                                <option value="DGS">DGS</option>
                                                <option value="DBS">DBS</option>
                                            </select>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td ><button type="submit" class="btn btn-success btn-sm btn-oval"><i class="fa fa-plus"></i> Tambah LOP</button></td>
                            </tr>
                        </table>
                    </form>

                    


                    <!-- Content Row -->
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->



