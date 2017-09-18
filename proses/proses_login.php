<?php
				session_start();
				if(isset($_POST['login'])){
					include("../database/koneksi.php");
					
					$username	= $_POST['username'];
					$password	= md5($_POST['password']);
					


					
					$query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password' ");
										if(mysqli_num_rows($query) == 0){
						 echo "<script>
							alert('Username atau password salah !!!');
							window.location.href='javascript:history.go(-1)';
							</script>";
					}else{
						$row = mysqli_fetch_assoc($query);
						
						$_SESSION['username']=$row['username'];
						$_SESSION['pertanyaan']=0;
						



						header("Location: ../index.php");
					}
					
					
					
				
			}
				?>