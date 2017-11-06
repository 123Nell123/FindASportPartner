<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head runat="server"> 	  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<link rel="stylesheet" href="css/font-awesome.min.css" />
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script type="text/javascript" src="js/bootstrap.min.js"></script>
	   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    
</head>

<body>
   <div class="wrapper">
		<?php
      include_once 'navbar_spf.php';
    ?>
		<div class="container-wrapper">
      <div class="row">
      <?php
        if(isset($_SESSION['u_id'])){
          echo '<div class="alert alert-success">
        <strong>Welcome,' .$_SESSION['fname']. '!</strong> You have successfully logged in.
      </div>';
        }
      ?>
    </div>
			<div class="row">
              <div class="listGroup col-md-12">
                  <div class="col-sm-6 col-xs-6 col-md-4 col-lg-4 listGroupItem"><a href="#/tennis.html" class="sportList sports1"><img src="img/sportsIcon-01.png" alt="TENNIS" class="img-responsive"><p class="sportName">TENNIS</p></a></div>
                  
                  <div class="col-sm-6 col-xs-6 col-md-4 col-lg-4 listGroupItem"><a href="#/basketball.html" class="sportList sports2"><img src="img/sportsIcon-02.png" alt="BASKETBALL" class="img-responsive"><p class="sportName">BASKETBALL</p></a></div>
                  
                  <div class="col-sm-6 col-xs-6 col-md-4 col-lg-4 listGroupItem"><a href="#/volleyball.html" class="sportList sports3"><img src="img/sportsIcon-03.png" alt="VOLLEYBALL" class="img-responsive"><p class="sportName">VOLLEYBALL</p></a></div>
                  
                  <div class="col-sm-6 col-xs-6 col-md-4 col-lg-4 listGroupItem"><a href="#/hiking.html" class="sportList sports4"><img src="img/sportsIcon-04.png" alt="HIKING" class="img-responsive"><p class="sportName">HIKING</p></a></div>
                  
                  <div class="col-sm-6 col-xs-6 col-md-4 col-lg-4 listGroupItem"><a  href="#/swimming.html" class="sportList sports5"><img src="img/sportsIcon-05.png" alt="SWIMMING" class="img-responsive"><p class="sportName">SWIMMING</p></a></div>
                  
                  <div class="col-sm-6 col-xs-6 col-md-4 col-lg-4 listGroupItem"><a  href="#/soccer.html" class="sportList sports6"><img src="img/sportsIcon-06.png" alt="SOCCER" class="img-responsive"><p class="sportName">SOCCER</p></a></div>
             
          	</div>
        </div>
		
		</div>
    	<footer>
        	<p class="footertext">Copyright 2017-2018</p>
        </footer>
   </div>
<div id="id01" class="modal">
  
  <form class="modal-content animate" method="POST" action="includes/login-inc.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname"></br>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="login_pwd"></br>
        
      <button type="submit" name="login-submit">Login</button></br>
      <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>
