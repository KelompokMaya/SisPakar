<?php
  include("comp/head.php");
  //$_SESSION['pertanyaan']=1;
?>

      
      <!-- sidebar menu: : style can be found in sidebar.less -->

       <?php 
            if (empty($_SESSION)) { ?>
                <ul class="sidebar-menu">
                  <li class="treeview">
                        <a href="login.php">
                           <span>KONSULTASI</span>
                        </a> 
                  </li>
                  <li class="treeview">
                        <a href="teknik/asana.php">
                           <span>TEKNIK ASANA</span>
                        </a>
                  </li>
                  <li class="treeview">
                        <a href="teknik/pranayama.php">
                            <span>TEKNIK PRANAYAMA</span>      
                        </a>     
                  </li>
                  <li class="treeview">
                        <a href="login.php">
                           <span>menu 3</span>
                        </a>
                  </li>
                       <li class="treeview">
                        <a href="login.php">
                           <span>menu 4</span>   
                        </a>
                  </li>    
                </ul>
              <?php
              } else
              {?>
               <!-- User Account: style can be found in dropdown.less -->
                <ul class="sidebar-menu">
                    <li class="header">MAIN NAVIGATION</li>
                     <li class="active treeview">
                                    <a href="index.php">
                                       <span>KONSULTASI</span>
                                    </a> 
                              </li>
                              <li class="treeview">
                                    <a href="teknik/asana.php">
                                       <span>TEKNIK ASANA</span>
                                    </a>
                              </li>
                              <li class="treeview">
                                    <a href="teknik/pranayama.php">
                                       <span>TEKNIK PRANAYAMA</span>      
                                    </a>   
                              </li>
                              <li class="treeview">
                                    <a href="#">
                                       <span>menu 3</span>
                                    </a>
                              </li>
                                   <li class="treeview">
                                    <a href="#">
                                       <span>menu 4</span>   
                                    </a>
                              </li>   
                  </ul>
                    <?php }  ?>



                  
    </section>
    <!-- /.sidebar -->
  </aside>


  <?php
if(!empty($_SESSION['level'])){ ?>

<div  class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sistem Pakar
        <small>Konsultasi</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Konsultasi</li>
      </ol>
    </section>

    <!-- Main content -->
    <section   class="content">
      <!-- Small boxes (Stat box) -->
      <div  class="row">
        
       
        <?php
        if(!isset($_GET["view"]))
            {
              
              ?>
               <div   class="col-md-12">
                <div  class="box box-danger">
                  
                  <div id="next" class="box-body">
                    <!-- Date dd/mm/yyyy -->
                    <div  class="form-group">
                      
                      <?php
                    $no=$_SESSION['pertanyaan'];
                    $sql = mysqli_query($koneksi, "SELECT * FROM data_penyakit LIMIT 1 OFFSET $no ");
                    if(mysqli_num_rows($sql) == 0){
                      $_SESSION['pertanyaan']=0;
                    echo '
                          <div  style="display: flex; justify-content: center;" class="form-groupr">
                          <h1><a  href="javascript:void(0)" id="konfirmasi" style="font-weight: bold;padding-top: 15px;margin:2px  ; font-size: 30px; width: 150px; height: 70px" type="submit" class="btn btn-success"onclick="konfirmasi(this);">Ulangi </a></h1>
                          </div>';
                  }
                  else
                  {
                    while($row = mysqli_fetch_assoc($sql)){

                      echo '
                      <h3><b>Pertanyaan:</b></h3>
                      
                        <div  style="display: flex; justify-content: center;" class="form-groupr">
                        <label style="justify-content: center;font-weight: bold; text-align: center; font-style: oblique;font-size: 30px;"  > Apakah Anda Menderita Penyakit '.$row['nama_penyakit'].' ?</label></div>
                      </div> 
                      
                   
        
                    
                    <form  method="post" enctype="multipart/form-data" >
                    <div  style="display: flex; justify-content: center;" class="form-groupr">
                      <a href="index.php?view='.$_SESSION['pertanyaan'].'" style="margin:2px ; width: 100px;" class="btn btn-success">IYA   </a>
                      <a href="javascript:void(0)" id="konfirmasi" style="margin:2px  ; width: 100px;" type="submit" class="btn btn-danger"onclick="konfirmasi(this);">TIDAK</a>

                      
                    </div>
                    </form>';

                    }
                  }
                    ?>
                  </div>
                  </div>
                  </div>
                  <!-- /.box-body -->
                

          <?php } 
                  else
                      {
                
                        $view=$_GET["view"];
                        $sql  = mysqli_query($koneksi, "SELECT * FROM data_penyakit WHERE id = '$view' ");
                        $row = mysqli_fetch_array($sql);
                        ?>
                           <div   class="col-md-12">
                           <div class="box box-success">
            
                                    <div class="box-body">
                                      <!-- Date dd/mm/yyyy -->
                                      <div class="form-group">
                                        <h3><b>Penyakit : <?php echo $row['nama_penyakit']; ?></b></h3>
                                      </div>
                                      <div class="box-header with-border">
                                            <h3 class="box-title">Diskripsi</h3>
                                          </div>
                                          <!-- /.box-header -->
                                          <!-- form start -->
                                          <form role="form">
                                            <div class="box-body">
                                              <div class="form-group">
                                              
                                                <label align="justify"> Keffiyeh blog actually fashion axe vegan, irony biodiesel. Cold-pressed hoodie chillwave put a bird on it aesthetic, bitters brunch meggings vegan iPhone. Dreamcatcher vegan scenester mlkshk. Ethical master cleanse Bushwick, occupy Thundercats banjo cliche ennui farm-to-table mlkshk fanny pack gluten-free. Marfa butcher vegan quinoa, bicycle rights disrupt tofu scenester chillwave 3 wolf moon asymmetrical taxidermy pour-over. Quinoa tote bag fashion axe, Godard disrupt migas church-key tofu blog locavore. Thundercats cronut polaroid Neutra tousled, meh food truck selfies narwhal American Apparel.</label>
                                              </div>
                                              
                                            </div>
                                            
                                          </form>
                                      
                                      <!-- /.form group -->
                                      <div  style="display: flex; justify-content: center;" class="form-groupr">
                                        <a href="proses/selesai_diagnosa.php" style="margin:1px ; width: 100px;" class="btn btn-success">SELESAI   </a>
                                        <a href="index.php"  style="margin:1px ;" type="submit" class="btn btn-primary">LANJUT KONSULTASI</a>

                                      </div>


                                    </div>
                                    <!-- /.box-body -->
                                  </div>
                        <?php  } ?>

                     
                    
                  
                </div>
             
            </section>

         
          <!-- /.box -->
      </div>

  <?php
}
else{ ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- Main content -->
          <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
              
              <div class="col-md-12">
                <div class="box box-solid">
                  
                  <!-- /.box-header -->
                  <div class="box-body">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                      </ol>
                      <div   class="carousel-inner">
                        <div class="item active">
                          <img src="images/slide/slide1.jpg" alt="First slide">

                          <div class="carousel-caption">
                            First Slide
                          </div>
                        </div>
                        <div class="item">
                          <img src="images/slide/slide2.jpg" alt="Second slide">

                          <div class="carousel-caption">
                            Second Slide
                          </div>
                        </div>
                        <div class="item">
                          <img src="images/slide/slide3.jpg" alt="Third slide">

                          <div class="carousel-caption">
                            Third Slide
                          </div>
                        </div>
                      </div>
                      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="fa fa-angle-left"></span>
                      </a>
                      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="fa fa-angle-right"></span>
                      </a>
                    </div>
                  </div>
                  <!-- /.box-body -->
                </div>
                <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Diskripsi</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                      <div class="box-body">
                        <div class="form-group">
                          <label align="justify"> Keffiyeh blog actually fashion axe vegan, irony biodiesel. Cold-pressed hoodie chillwave put a bird on it aesthetic, bitters brunch meggings vegan iPhone. Dreamcatcher vegan scenester mlkshk. Ethical master cleanse Bushwick, occupy Thundercats banjo cliche ennui farm-to-table mlkshk fanny pack gluten-free. Marfa butcher vegan quinoa, bicycle rights disrupt tofu scenester chillwave 3 wolf moon asymmetrical taxidermy pour-over. Quinoa tote bag fashion axe, Godard disrupt migas church-key tofu blog locavore. Thundercats cronut polaroid Neutra tousled, meh food truck selfies narwhal American Apparel.
                          Keffiyeh blog actually fashion axe vegan, irony biodiesel. Cold-pressed hoodie chillwave put a bird on it aesthetic, bitters brunch meggings vegan iPhone. Dreamcatcher vegan scenester mlkshk. Ethical master cleanse Bushwick, occupy Thundercats banjo cliche ennui farm-to-table mlkshk fanny pack gluten-free. Marfa butcher vegan quinoa, bicycle rights disrupt tofu scenester chillwave 3 wolf moon asymmetrical taxidermy pour-over. Quinoa tote bag fashion axe, Godard disrupt migas church-key tofu blog locavore. Thundercats cronut polaroid Neutra tousled, meh food truck selfies narwhal American Apparel.</label>
                        </div>
                        
                      </div>
                      
                    </form>
                </div>
              </div>

            </div>
          </section>

         
          <!-- /.box -->
      </div>
<!-- Content Wrapper. Contains page content -->
  
<?php 
}
?>
 
<!-- jQuery 2.2.3 -->
<script src="template/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <!-- Modal untuk Konfirmasi -->
<script type="text/javascript">
function konfirmasi(e) {
  
  $.ajax({
    url:'proses/ajax_next.php',
    type:'post',
    
    success:function (data) {
      
        $("#next").load(document.URL + ' #next');
      
      
    }
  });
}
</script>   
     
 <?php include("comp/footer.php")  ?>