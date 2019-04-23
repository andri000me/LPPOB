<form action="" method="get">
                <div class="form-group form-inline">
                  <input type="text" name="id" class="form-control" placeholder="nomor meter" value="<?php echo @$_GET['id'] ?>">
                                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                </div>
              </form>
              <?php
                                // $bulan = ['1'=>'Januari','2'=>'Februari','3'=>'Maret','4'=>'April','5'=>'Mei','6'=>'Juni','7'=>'Juli','8'=>'Agustus','9'=>'September','10'=>'Oktober','11'=>'November','12'=>'Desember'];
                if($_SESSION['user']['level'] == 'admin') 
                      {
                                if(!empty($data['penggunaan']))
                                {
                                    ?>
                                    Nama : <?php echo $data['penggunaan'][0]['nama'];?><br>
                                    Tarif perkwh : <?php echo $data['penggunaan'][0]['tarifperkwh'];?><br>
                                    --------------------------------------------<br>
                                    <?php
                                    $subtotal = 0;
                                    $biaya_admin = 2000;
                                    $i = 0;
                                    foreach ($data['penggunaan'] as $key => $value) 
                                    {
                                        $subtotal += ($value['jumlahmeter']*$value['tarifperkwh'])+$biaya_admin; 
                                        ?>
                                        Bulan : <?php echo $value['bulan'] ?><br>
                                        Tahun : <?php echo $value['tahun'] ?><br>
                                        Jml-meter : <?php echo $value['jumlahmeter'] ?><br>
                                        Biaya Admin : <?php echo $biaya_admin ?><br>
                                        Total : <?php echo $value['jumlahmeter'].'x'.$value['tarifperkwh'].'+'.$biaya_admin;?> = <?php echo ($value['jumlahmeter']*$value['tarifperkwh'])+$biaya_admin;?><br>
                                        ------------------------------------------------<br>
                                        <form method="post" action='' name="bayarlah">
                                        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                                        <input type="hidden" name="tagihan_id" value="<?php echo $value['tagihan_id'] ?>">
                                        <input type="hidden" name="bulanbayar" value="<?php echo $value['bulan'] ?>">
                                        <input type="hidden" name="biayaadmin" value="<?php echo $biaya_admin ?>">
                                        <input type="hidden" name="tanggal" value="<?php echo date('Y-m-d') ?>">
                                        <button type="Submit">Bayar</button>
                                        <br>
                                        </form>
                                        <?php
                                        $i++;
                                    }
                                    ?>
                                    total semua : <?php echo $subtotal ?>
                                    <?php
                                }
                                if (isset($_POST['bayarlah'])) {
                                  $a=$this->input->post('id');
                                  $b=$this->input->post('idpelanggan');
                                  $c=$this->input->post('bulanbayar');
                                  $d=$this->input->post('biayaadmin');
                                  $e=$this->input->post('tanggal');
                                  $dt = array('idpelanggan' => $a,
                                             'tanggal' => $b,
                                             'bulanbayar' => $c,
                                             'biayaadmin' => $d );
                                  $this->db->insert("pembayaran",$dt);
                                  //$this->db->query("insert into pembayaran(id,idpelanggan,tanggal,bulanbayar,biayaadmin)values('','$a','$e','$c','$d')");
                                }

                              }else{
  msg('Halaman ini hanya bisa dibuka oleh Administrator','danger');
}
                                ?>