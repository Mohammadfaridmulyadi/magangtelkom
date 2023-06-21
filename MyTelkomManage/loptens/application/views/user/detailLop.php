                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 font-weight-bold text-gray-800"><?php echo $title ?></h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i
                                class="fas fa-trash "></i> Cancel Project</a> -->
                        <?php foreach ($detail as $row) : ?>
                        <a onclick="return confirm('Project akan di hapus ketika di Cancel Apakah anda yakin?')" class="btn btn-sm btn-danger" href="<?php echo base_url('user/detailLop/deleteData/'.$row->id_lop)
                         ?>"><i class="fas fa-trash"></i> Cancel Project</a>
                         <?php endforeach; ?>
                    </div>
                    <!-- Content Row -->
                    <div class="form-row col-md-12 mx-auto mt-5">
                        <div class="form-group col-md-1"></div>
                        <div class="form-group col-md-4">
                        <table class="table my-4 shadow-lg">
                                <?php foreach ($detail as $row) : ?>
                                    <tr>    
                                        <td class="text-left">Nama Acount manager</td>
                                        <td class="text-left"><?php echo $row->nama_user; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">ID LOP</td>
                                        <td class="text-left"><?php echo $row->id_lop; ?></td>
                                    </tr>
                                    </tr>  
                                        <td class="text-left">Judul</td>
                                        <td class="text-left"><?php echo $row->judul; ?></td>              
                                    </tr>
                                    <tr>    
                                        <td class="text-left">Nama Customer</td>
                                        <td class="text-left"><?php echo $row->nama_pelanggan; ?></td>
                                    </tr>

                                    <tr>
                                        <td class="text-left">Langganan</td>  
                                        <td class="text-left"><?php echo $row->langganan; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Alamat</td>
                                        <td class="text-left"><?php echo $row->alamat; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Segment</td>
                                        <td class="text-left"><?php echo $row->segment; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Tipe</td>
                                        <td class="text-left"><?php echo $row->tipe; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Status</td>
                                        <td class="text-left"><?php echo $row->status; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Kategori</td>
                                        <td class="text-left"><?php echo $row->kategori; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Nomor Order</td>
                                        <td class="text-left"><?php echo $row->nomor_order; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Harga</td>
                                        <td class="text-left">Rp. <?php echo number_format($row->harga,0,',','.') ?></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Action</td>
                                        <td class="text-left"><a class="btn btn-sm btn-success btn-oval" href="<?php echo base_url('user/detailLop/updateData?id=' . $row->id_lop)
                                        ?>"><i class="fas fa-edit"></i> Update Data</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                        </table>
                        </div>
                        <div class="form-group col-md-1"></div>
                        <div class="form-group col-md-5">
                        <?php foreach ($detail as $row) : ?>
                             <form method="post" action="<?php echo base_url('user/detailLop/updateDataAksi?id=' . $row->id_lop) ?>" enctype="multipart/form-data">
                             
                                <div class="form-row col-md-12 mx-auto ">
                                <table class=" my-4 shadow-lg">
                                    <tr>
                                        <td class="pl-3"><input type="hidden" name="id_lop" value="<?php echo $row->id_lop; ?>"></td>
                                        <th colspan ="2" class="text-center pt-4"><b>Dokumen LOP</b> 
                                        <hr class="sidebar-divider">
                                        </th>
                                        <td class="pr-3"></td>
                                    </tr>
                                    <tr>
                                        <td class="pl-3"><input type="hidden" name="id_lop" value="<?php echo $row->id_lop; ?>"></td>
                                        <td colspan ="2" class="text-center  pt-4">Proposal</td>
                                        <td class="pr-3"></td>
                                        
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><label for="no_proposal">Nomor Proposal</label></td>
                                        <td>
                                        <?php if ($row->no_proposal) : ?>    
                                            <input type="text" class="form-control" id="no_proposal" name="no_proposal" disabled  value="<?php echo $row->no_proposal; ?>">
                                        <?php else : ?>
                                            <input type="text" class="form-control" id="no_proposal" name="no_proposal" placeholder="Nomor Proposal">
                                        <?php endif; ?>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><label for="dok_proposal">Dok Proposal</label></td>
                                        <td>
                                        <?php if ($row->dok_proposal) : ?>
                                            <a class="mb-2 mt-2 btn btn-sm btn-primary btn-oval" href="<?php echo base_url('assets/photo/' . $row->dok_proposal); ?>" download>
                                            <i class="fa fa-download"></i> Download</a>
                                        <?php else : ?>
                                            <input type="file" id="dok_proposal" name="dok_proposal">
                                        <?php endif; ?>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr><td></td><td colspan ="2"><hr class="sidebar-divider"></td><td></td></tr>
                                    <tr>
                                        <td></td>
                                        <td colspan ="2" class="text-center pt-4">Kontrak</td>
                                        <td></td>
                                        
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><label for="no_kontrak">Nomor Kontrak</label></td>
                                        <td>
                                        <?php if ($row->dok_kontrak) : ?>    
                                            <input type="text" class="form-control" id="no_kontrak" name="no_kontrak" disabled  value="<?php echo $row->no_kontrak; ?>">
                                        <?php else : ?>
                                            <input type="text" class="form-control" id="no_kontrak" name="no_kontrak" placeholder="Nomor Kontrak">
                                        <?php endif; ?>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><label for="dok_kontrak">Dok Kontrak</label></td>
                                        <td>
                                        <?php if ($row->dok_kontrak) : ?>
                                            <a class="mb-2 mt-2 btn btn-sm btn-primary btn-oval" href="<?php echo base_url('assets/photo/' . $row->dok_kontrak); ?>" download>
                                            <i class="fa fa-download"></i> Download</a>
                                        <?php else : ?>
                                            <input type="file" id="dok_kontrak" name="dok_kontrak">
                                        <?php endif; ?>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr><td></td><td colspan ="2"><hr class="sidebar-divider"></td><td></td></tr>
                                    <tr>
                                        <td></td>
                                        <td colspan ="2" class="text-center pt-4 pb-2">Baso</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td  class="pb-3"><label for="no_baso">Nomor Baso</label></td>
                                        <td class="pb-2">
                                        <?php if ($row->no_baso) : ?>    
                                            <input type="text" class="form-control" id="no_baso" name="no_baso" disabled  value="<?php echo $row->no_baso; ?>">
                                        <?php else : ?>
                                            <input type="text" class="form-control" id="no_baso" name="no_baso" placeholder="Nomor Baso">
                                        <?php endif; ?>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><label for="dok_baso">Dok Baso</label></td>
                                        <td>                                          
                                        <?php if ($row->dok_baso) : ?>
                                            <a class="mb-2 mt-2 btn btn-sm btn-primary btn-oval" href="<?php echo base_url('assets/photo/' . $row->dok_baso); ?>" download>
                                            <i class="fa fa-download"></i> Download</a>
                                        <?php else : ?>
                                            <input type="file" id="dok_baso" name="dok_baso">
                                        <?php endif; ?>                                      
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td colspan="2" class="text-right pt-4 pb-4">
                                        <?php if ($row->dok_proposal && $row->dok_kontrak && $row->dok_baso) : ?>                        
                                            <input type="hidden" id="dok_baso" name="dok_baso">
                                        <?php else : ?>
                                            <button type="submit" class="btn btn-success"><i class="fa fa-upload"></i> Upload Dokumen</button>
                                        <?php endif; ?>
                                        </td>
                                        <td></td>
                                    </tr>
                                </table>
                                </div>
                             </form>
                             <?php endforeach; ?>
                        </div>
                        <div class="form-group col-md-1"></div>
                    </div>





                    
                    <!-- Content Row -->  
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->



