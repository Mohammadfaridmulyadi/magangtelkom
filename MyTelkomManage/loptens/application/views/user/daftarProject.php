                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 font-weight-bold text-gray-800"><?php echo $title ?></h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <?php
                            $jumlahLead = 0;
                            $jumlahProposal = 0;
                            $jumlahKontrak = 0;
                            $jumlahBaso = 0;
                            
                            // Iterasi pada data
                            foreach ($lup as $row) {
                                // Memeriksa status dan menambahkan jumlah sesuai
                                if ($row->status_lop === "Lead") {
                                    $jumlahLead++;
                                } elseif ($row->status_lop === "Proposal") {
                                    $jumlahProposal++;
                                } elseif ($row->status_lop === "Kontrak") {
                                    $jumlahKontrak++;
                                } elseif ($row->status_lop === "Baso") {
                                    $jumlahBaso++;
                                }
                            }
                        ?>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Lead</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlahLead; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Proposal</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlahProposal; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Kontrak</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlahKontrak; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Baso</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlahBaso; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <a class="mb-2 mt-2 btn btn-sm btn-success btn-oval" href="<?php echo base_url('user/daftarProject/tambahData') ?>"><i class="fa fa-plus"></i> Tambah LOP</a>
                    <button type="button" class="mb-2 mt-2 btn btn-sm btn-warning btn-oval" data-toggle="modal" data-target="#filterModal"><i class="fa fa-filter"></i> Filter LOP</button>

                    <table class="table table-bordered table-striped" id="myTable">
                        <tr>
                            <th class="text-center no-hover">No</th>
                            <th class="text-center no-hover">ID LOP</th>
                            <th class="text-center no-hover">Judul</th>
                            <th class="text-center no-hover">Segment</th>
                            <th class="text-center no-hover">Pelanggan</th>
                            <th class="text-center no-hover">Status</th>
                        </tr>
                        <?php $start = $this->uri->segment(4, 0); ?>
                        <?php foreach($lop as $l) : ?>
                        <tr>
                            <td class="clickable-cell" style="color: #212121;"><a href="<?php echo base_url('user/detailLop?id=' . $l->id_lop) ?>"><?php echo ++$start ?></a></td>
                            <td class="clickable-cell" style="color: #212121;" ><a href="<?php echo base_url('user/detailLop?id=' . $l->id_lop) ?>"><?php echo $l->id_lop ?></a></td>
                            <td class="clickable-cell" style="color: #212121;"><a href="<?php echo base_url('user/detailLop?id=' . $l->id_lop) ?>"><?php echo $l->judul ?></a></td>
                            <td class="clickable-cell" style="color: #212121;"><a href="<?php echo base_url('user/detailLop?id=' . $l->id_lop) ?>"><?php echo $l->segment ?></a></td>
                            <td class="clickable-cell" style="color: #212121;"><a href="<?php echo base_url('user/detailLop?id=' . $l->id_lop) ?>"><?php echo $l->nama_pelanggan ?></a></td>
                            <td class="clickable-cell" style="color: #212121;"><a href="<?php echo base_url('user/detailLop?id=' . $l->id_lop) ?>"><?php echo $l->status_lop ?></a></td>
                            
                        
                        </tr>
                        <?php endforeach; ?>
                    </table>

                    <div class="row">
                        <div class="col-12">
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-end">
                                    <div class="mr-2">
                                        <?php if (!empty($paginationInfo)): ?>
                                            <p><?php echo $paginationInfo; ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="ml-2">
                                        <?php echo $this->pagination->create_links(); ?>
                                    </div>
                                </ul>
                            </nav>
                        </div>
                    </div> 

                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script>
                        $(document).ready(function() {
                            $(".clickable-cell").click(function() {
                                var link = $(this).find("a").attr("href");
                                if (link) {
                                    window.location.href = link;
                                }
                            });
                        });

                        document.addEventListener("DOMContentLoaded", function() {
                            var tableRows = document.querySelectorAll("#myTable tbody tr");
                            for (var i = 0; i < tableRows.length; i++) {
                                var tableCells = tableRows[i].querySelectorAll("td"); // Mengambil semua elemen <td> di dalam <tr>
                                for (var j = 0; j < tableCells.length; j++) {
                                    tableCells[j].addEventListener("mouseover", function() {
                                        this.parentNode.classList.add("table-active"); // Menambahkan kelas "table-active" pada elemen induk <tr>
                                    });
                                    tableCells[j].addEventListener("mouseout", function() {
                                        this.parentNode.classList.remove("table-active"); // Menghapus kelas "table-active" dari elemen induk <tr>
                                    });
                                }
                            }
                        });
                    </script>



                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            
            <!-- Tombol untuk membuka modal -->


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Detail Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul>
          <li><strong>Langganan:</strong> <span id="langganan"></span></li>
          <li><strong>Alamat:</strong> <span id="alamat"></span></li>
          <li><strong>Tipe:</strong> <span id="tipe"></span></li>
          <li><strong>Harga:</strong> <span id="harga"></span></li>
        </ul>

        <form id="pdfForm">
          <div class="form-group">
            <label for="pdfFile">Pilih Dokumen PDF:</label>
            <input type="file" class="form-control-file" id="pdfFile" accept="application/pdf">
          </div>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="filterModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="filterModalLabel">Filter LOP</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form filter data -->
                <form method="get" action="<?php echo base_url('user/filterData/dataFilter'); ?>">
                    <!-- Tambahkan input atau elemen form sesuai dengan kebutuhan Anda -->
                    <div class="form-group">
                        <label for="selectField">Status Lop</label>
                        <select class="form-control" id="selectField" name="status_lop">
                            <option selected></option>
                            <option value="Lead">Lead</option>
                            <option value="Proposal">Proposal</option>
                            <option value="Kontrak">Kontrak</option>
                            <option value="Baso">Baso</option>
                        </select>
                    </div>
                    <!-- Tambahkan tombol submit untuk mengirim form -->
                    <button type="submit" class="btn btn-primary btn-oval">Filter</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Skrip JavaScript untuk mengisi data ke dalam modal -->
<script>
  // Fungsi untuk menampilkan detail data pada modal
  function tampilkanDetail(langganan, alamat, tipe, harga) {
    document.getElementById("langganan").textContent = langganan;
    document.getElementById("alamat").textContent = alamat;
    document.getElementById("tipe").textContent = tipe;
    document.getElementById("harga").textContent = harga;
  }
</script>




