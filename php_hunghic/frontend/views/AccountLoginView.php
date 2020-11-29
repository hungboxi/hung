
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="../assets/backend/layout1/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="../assets/backend/layout1/css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="../assets/backend/layout1/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<!-- lined-icons -->
<link rel="stylesheet" href="../assets/backend/layout1/css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->
<!--animate-->
<link href="../assets/backend/layout1/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="../assets/backend/layout1/js/wow.min.js"></script>
<!--//end-animate-->
<!----webfonts--->
<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<!---//webfonts---> 
 <!-- Meters graphs -->
<script src="../assets/backend/layout1/js/jquery-1.10.2.min.js"></script>
<!-- Placed js at the end of the document so the pages load faster -->
 <body class="sign-in-up">
    <section>
      <div id="page-wrapper" class="sign-in-wrapper">
        <div class="graphs">
          <div class="sign-in-form">
            <div class="sign-in-form-top">
              <p><span>Sign In to</span> <a href="index.php">Buy</a></p>
            </div>
            <div class="signin">
              <div class="signin-rit">
                <span class="checkbox1">
                   <label class="checkbox"><input type="checkbox" name="checkbox" checked="">Forgot Password ?</label>
                </span>
                <p><a href="#">Click Here</a> </p>
                <div class="clearfix"> </div>
              </div>
              <form method='post' action="index.php?controller=account&action=loginPost">
              <div class="log-input">
                <div class="log-input-left">
                   <input type="text" name="email" required class="user" value="Yourname" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email address:';}"/>
                </div>
                <div class="clearfix"> </div>
              </div>
              <div class="log-input">
                <div class="log-input-left">
                   <input type="password" name="password" required class="lock" value="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email address:';}"/>
                </div>
                <div class="clearfix"> </div>
              </div>
              <input type="submit" value="Login" class="btn btn-primary">
            </form>  
            </div>
            <div class="new_people">
              <h4>For New People</h4>
              <p>Having hands on experience in creating innovative designs,I do offer design 
                solutions which harness.</p>
              <a href="index.php?controller=account&action=register">Register Now!</a>
            </div>
          </div>
        </div>
      </div>
    <!--footer section start-->
      <footer>
         <p>All Rights Reserved | Design by hunghic</a></p>
      </footer>
        <!--footer section end-->
  </section>
  
<script src="../assets/backend/layout1/js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="../assets/backend/layout1/js/bootstrap.min.js"></script>