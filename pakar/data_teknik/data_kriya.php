 <!-- /.box-header -->
                          <div class="box-body">

                            <table style="font-size: 15px"  id="example3" class="table table-bordered table-striped">
                              <thead style="text-align: center; background: #ff851b ;color: white">
                              <tr>
                                <th width="20px">No</th>
                                <th>Nama</th>
                                <th>Posisi</th>
                                <th>Manfaat</th>
                                <th>Gambar/Video</th>
                                <th style="width: 100px;">Pilih</th>
                              </tr>
                              </thead>
                              <tbody >
                              
                              <?php
                                              
                              $sql = mysqli_query($koneksi, "SELECT * FROM bagian_teknik WHERE teknik_id='3' order by nama asc ");
                               $no = 1;
                                while($row = mysqli_fetch_assoc($sql)){

                                  ?>
                                            <tr>
                                                <td ><?php echo $no?></td>
                                                <td ><?php echo $row['nama'];?></td>
                                                <td ><?php echo $row['posisi'];?></td>
                                                <td ><?php echo $row['manfaat'];?></td>
                                                <td style="text-align: center;width: 20px;"><a href="teknik.php?view=<?php echo $row['id'];?>" class="btn btn-sm btn-info"   ><span  aria-hidden="true"></span> Lihat </a></td>
                                                
                                                <td style="text-align: center;">
                                    
                                                    <a href="teknik.php?view=edit&id=<?php echo $row["id"];?>" class="btn btn-sm btn-warning"><span  aria-hidden="true"></span> Edit </a>
                                              
                                                    <a href="teknik.php?view=hapus" Id='<?php echo $row["id"]; ?>' nama= '<?php echo $row["nama"]; ?>'   class="btn btn-sm btn-danger" ><span  aria-hidden="true"></span> Hapus </a>
                                              </td>
                                          </tr>
                                        <?php
                                         $no++;
                                    
                                }
                                ?>
                              
                              </tbody>
                              
                            </table>
                          </div>
