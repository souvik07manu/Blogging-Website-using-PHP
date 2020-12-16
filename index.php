<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Juniar Blog</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  
  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/clean-blog.min.css" rel="stylesheet">
  <style>
  	.disabledah{
  		pointer-events: none;
        cursor: default;

  	}

    #link { color: #fff; }

  .site-footer
{
  background-color:#26272b;
  padding:45px 0 20px;
  font-size:15px;
  line-height:24px;
  color:#737373;
}
.site-footer hr
{
  border-top-color:#bbb;
  opacity:0.5
}
.site-footer hr.small
{
  margin:20px 0
}
.site-footer h6
{
  color:#fff;
  font-size:16px;
  text-transform:uppercase;
  margin-top:5px;
  letter-spacing:2px
}
.site-footer a
{
  color:#737373;
}
.site-footer a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links
{
  padding-left:0;
  list-style:none
}
.footer-links li
{
  display:block
}
.footer-links a
{
  color:#737373
}
.footer-links a:active,.footer-links a:focus,.footer-links a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links.inline li
{
  display:inline-block
}
.site-footer .social-icons
{
  text-align:right
}
.site-footer .social-icons a
{
  width:40px;
  height:40px;
  line-height:40px;
  margin-left:6px;
  margin-right:0;
  border-radius:100%;
  background-color:#33353d
}
.copyright-text
{
  margin:0
}
@media (max-width:991px)
{
  .site-footer [class^=col-]
  {
    margin-bottom:30px
  }
}
@media (max-width:767px)
{
  .site-footer
  {
    padding-bottom:0
  }
  .site-footer .copyright-text,.site-footer .social-icons
  {
    text-align:center
  }
}
.social-icons
{
  padding-left:0;
  margin-bottom:0;
  list-style:none
}
.social-icons li
{
  display:inline-block;
  margin-bottom:4px
}
.social-icons li.title
{
  margin-right:15px;
  text-transform:uppercase;
  color:#96a2b2;
  font-weight:700;
  font-size:13px
}
.social-icons a{
  background-color:#eceeef;
  color:#818a91;
  font-size:16px;
  display:inline-block;
  line-height:44px;
  width:44px;
  height:44px;
  text-align:center;
  margin-right:8px;
  border-radius:100%;
  -webkit-transition:all .2s linear;
  -o-transition:all .2s linear;
  transition:all .2s linear
}
.social-icons a:active,.social-icons a:focus,.social-icons a:hover
{
  color:#fff;
  background-color:#29aafe
}
.social-icons.size-sm a
{
  line-height:34px;
  height:34px;
  width:34px;
  font-size:14px
}
.social-icons a.facebook:hover
{
  background-color:#3b5998
}
.social-icons a.twitter:hover
{
  background-color:#00aced
}
.social-icons a.linkedin:hover
{
  background-color:#007bb6
}
.social-icons a.dribbble:hover
{
  background-color:#ea4c89
}
@media (max-width:767px)
{
  .social-icons li.title
  {
    display:block;
    margin-right:0;
    font-weight:600
  }
}
  </style>

</head>

<body>
 <?php include('dataconfig.php'); ?>
 <?php include('security.php'); ?>


  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.php">JUNIAR BLOG</a>
      <a class="navbar-brand disabledah" href="index.php"><?php echo ((!isset($_SESSION['u_name']) || $_SESSION['u_name'] == '') ? "" : "<i class='fas fa-user-tie'></i>  ".$_SESSION['u_name']); ?></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <?php 
          	if (!isset($_SESSION['u_id']) || $_SESSION['u_id'] == ''){

          ?>

          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>

          <?php

      		}else{

      	 ?>
      	 	<li class="nav-item">
            <a class="nav-link" href="profile.php">Profile</a>
          </li>
      	<?php
      		}
          ?>




          <?php 
          	if (isset($_SESSION['u_id'])){

          ?>
          <li class="nav-item">
            <a class="nav-link" href="createpost.php">Post</a>
          </li>
          <?php
      		}

          ?>
           

<!--           <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li> -->
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/abc.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Clean Blog</h1>
            
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">

      	<?php 

      		// pagination strt

      		if (isset($_GET['pageno'])) {
		        $pageno = $_GET['pageno'];
		    } else {
		        $pageno = 1;
		    }
		    $no_of_records_per_page = 3;
		    $offset = ($pageno-1) * $no_of_records_per_page;

      		$total_pages_sql = "SELECT COUNT(*) FROM blogs";
	        $result = mysqli_query($conn,$total_pages_sql);
	        $total_rows = mysqli_fetch_array($result)[0];
	        $total_pages = ceil($total_rows / $no_of_records_per_page);

	        $sql = "SELECT * FROM users LEFT JOIN blogs ON users.u_id = blogs.blg_u_id UNION SELECT * FROM users RIGHT JOIN blogs ON users.u_id = blogs.blg_u_id LIMIT $offset, $no_of_records_per_page";
	        $res_data = mysqli_query($conn,$sql);
	        while($row = mysqli_fetch_array($res_data)){
	            //here goes the data
	            $resultset[]=$row;
	        }
	        mysqli_close($conn);

      	   // pagination end

			// echo "<pre>";
			// 	print_r($resultset); 
			// 	echo "</pre>";
			// 	echo die();

      	?>
 
      	
		<?php foreach($resultset as $values):?>

			<?php 

				$pass_get = $values['blg_id'];
				$base64_crypt = Encryption::encode($pass_get); // get base64 of crypt data

		?>

		
		
        <div class="post-preview">
          
          <a href="full.php?varname=<?php echo $base64_crypt ?>">
            <h2 class="post-title">
              <?php echo $values['blg_title']; ?>
            </h2>
            <h3 class="post-subtitle">
              <?php 
              $string = $values['blg_description'];
               $first400 = substr($string, 0, 80);
               $first400 = $first400."...Read more";
              echo $first400; 
              ?>
            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="#"><?php echo $values['u_name'] ; ?></a>
            on September 24, 2019</p>
        </div>

        <hr>
        <?php endforeach;?>



       <!--  bootstrap pagination esign -->

       <ul class="pagination">
        <li class="page-item"><a class="page-link" href="?pageno=1">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?> page-item">
            <a class="page-link" href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?> page-item">
            <a class="page-link" href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
        </li>
        <li class="page-item"><a class="page-link" href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
       </ul>
       



     <!--  bootstrap pagination esign -->
   

        <!-- Pager -->
        <div class="clearfix">
          <a id="link" class="btn btn-primary float-left disabledah">current page: <?php echo $pageno; ?></a>
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
      </div>
    </div>
  </div>

  <hr>

  <!-- Footer -->
  <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">This is a simple blog for testing purpuse..</p>
          </div>

<!--           <div class="col-xs-6 col-md-3">
            <h6>Categories</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/category/c-language/"></a></li>
              <li><a href="http://scanfcode.com/category/front-end-development/">UI Design</a></li>
              <li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
              <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
              <li><a href="http://scanfcode.com/category/android/">Android</a></li>
              <li><a href="http://scanfcode.com/category/templates/">Templates</a></li>
            </ul>
          </div>
 -->
          <div class="col-xs-6 col-md-6">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <!-- <li><a href="http://scanfcode.com/contact/">Contact Us</a></li> -->
              <li><a href="http://localhost/juniarblog/privacy.php">Privacy Policy</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by 
         <a href="#">Souvik Hajra</a>.
            </p>
          </div>

          <!-- <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div> -->
        </div>
      </div>
</footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>


</body>



</html>
