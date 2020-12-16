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
      <a class="navbar-brand" href="index.php">ABCD</a>
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
           

          <!-- <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li> -->
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/frg.jpg')">
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
            if(isset($_POST['bji'])){
                $blg_cat_id = $_POST['blg_cat_id'];
                $blg_title = $_POST['blg_title'];
                $blg_descrip = $_POST['blg_description'];
                $blg_user_id = $_SESSION['u_id'];

                //insert code
                $sql = "INSERT INTO blogs (blg_cat_id, blg_title, blg_description, blg_u_id)
                        VALUES ('".$blg_cat_id."', '".$blg_title."', '".$blg_descrip."', '".$blg_user_id."')";

                if ($conn->query($sql) === TRUE) {
                     $url = 'http://localhost/juniarblog/index.php';
                     echo "<script>window.location.href='".$url."'</script>";

                  //echo "New record created successfully";
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }

                $conn->close();
            }
        ?>
        
        <form name="sentMessage" id="contactForm" method="post" action="" novalidate>

            <!-- to get all category -->
            <?php  

                $sql = "SELECT * FROM blog_category";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $resultset[]=$row; 
                  }
                } else {
                    echo "0 results";
                }
                $conn->close();
 
            ?>


            <!-- hidden userid  -->
            <input type="hidden" name="userid" value="<?php echo $_SESSION['u_id']; ?>" placeholder="userid_hidden">

             <div class="form-group">
                <label for="exampleFormControlSelect1" style="color: #a0a6ac;">Blog Category</label>
                <select name="blg_cat_id" class="form-control" id="exampleFormControlSelect1">
                  <option>SELECT YOUR BLOG CATEGORY</option>
                    <?php foreach($resultset as $values):?>
                      <option value="<?php echo $values['blg_cat_id'];?>"><?php echo $values['blg_cat_name'];?></option>
                    <?php endforeach;?>
                </select>
              </div>
            

          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Blog Title</label>
              <input type="text" class="form-control" name="blg_title" placeholder="Blog Title" id="name" required data-validation-required-message="Please enter your name.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          
          
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Blog Description</label>
              <textarea rows="6" class="form-control" placeholder="Blog Description" name="blg_description" id="message" required data-validation-required-message="Please enter a message."></textarea>
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <br>
          <div id="success"></div>
          <button name="bji" type="submit" class="btn btn-primary btn-block" id="sendMessageButton">POST</button>
        </form>
      </div>
    </div>
  </div><hr>

  

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
