<html>
 <head>
  <title>Fabrica | Login/Register</title>
  <link rel = "stylesheet" href = "css/bootstrap.css" media="screen">
  <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <style type="text/css">
  	
    body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

      .btn-container{
      	text-align: center;
      }
  </style>
	<script type="text/javascript" src="js/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
 </head>
 <body>
 	<div class="container">
 		<form class="form-signin">
 			<input type="text" class="input-block-level" placeholder="Username">
 			<input type="text" class="input-block-level" placeholder="Password">
 			<label class="checkbox">
 				<input type="checkbox" value="remember-me">Remember me
 			</label>
 			<div class="container btn-container"> 
	 			<button class="btn btn-medium" type="submit">Sign In</button>
	 			<button class="btn btn-medium" type="submit">Register</button>
 			</div>
 		</form>
 	</div>
 </body>
 </html>