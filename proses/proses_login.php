<!-- jQuery -->
 <script src="../template/plugins/jQuery/jquery-2.2.3.min.js"></script>

<link rel="stylesheet" type="text/css" href="../pakar/sweetalert-master/dist/sweetalert.css">
        <script type="text/javascript" src="../pakar/sweetalert-master/dist/sweetalert.min.js"></script>

<?php
				session_start();
				if(isset($_POST['login'])){
					include("../database/koneksi.php");
					
					$username	= $_POST['username'];
					$password	= md5($_POST['password']);
					


					
					$query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password' ");
					$row = mysqli_fetch_assoc($query);
					if(mysqli_num_rows($query) == 0){
						
						$_SESSION['login']='gagal';
						?>
					
						<script>
              
                      window.location = "javascript:history.go(-1)";
                  
          </script>
						<?php	} else{
					unset($_SESSION['login']);
					if ($row['level']=='pakar') {
						
								
								
								$_SESSION['username']=$row['username'];
								$_SESSION['level']='pakar';
					

								header("Location: ../pakar/index.php");
							
					}
					else if ($row['level']=='user') {
						
								
								$_SESSION['username']=$row['username'];
								$_SESSION['pertanyaan']=0;
								$_SESSION['level']='user';
								



								header("Location: ../index.php");
							}
					
					
					}
					
					
				
			}

				?>