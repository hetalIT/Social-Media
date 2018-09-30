<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/regmain.css">
    <link rel=stylesheet href="css/st_demo.css" type="text/css">
    <script type="text/javascript" src="js/script_demo.js"></script>

    <script type="text/javascript">
    	
    	/*function signin(){
    	 	$(".Signin").css('visibility','visible'); 
    	 	$(".Signup").css('visibility','hidden');
    	 	alert("hi");
    		
    	}
    	function signup(){
    	  	$(".Signup").css(,'visibility''visible'); 
    	  	$(".Signin").css('visibility','hidden');
    		
    	}*/
    	$(document).ready(function(){
    		$('#upd').click(function(){
    			$('#openp').trigger('click');
    		});
    		/*alert("hi");*/
    		$('#btn1').click(function(){
    			 localStorage.setItem('showSignin', true);
    	 	    //alert("hi");
    		});
    		$('#btn2').click(function(){
    			
    	 	    localStorage.removeItem('showSignin');
    		});

    		if (localStorage.getItem('showSignin')) {  
       		    $('.signin').css('visibility','visible'); 
    	 	    $('.signup').css('visibility','hidden');
    	 	    $('#btn1').css('background','linear-gradient(#43F5BF,#08f992)');
    	 	    $('#btn2').css('background','white');
    	 	    localStorage.removeItem('showSignin');

    	 	}
    	 	/*else
    	 	{
    	 		$('.signin').css('visibility','hidden'); 
    	 	    $('.signup').css('visibility','visible');
    	 	}*/

    		});
 
    </script>
</head>
<body>
	    <div class="reg">
	      
	      <div id="rg1"></div>
	      <div class="rg2">
	      <form method="post" onsubmit="validate();" name="form1" id="reg1">
		        <div class="btn-group">
  					<!--<button id="btn1" onclick="Signin();">Sign In</button>
  					<button id="btn2" onclick="Signup();">Sign Up</button>-->
  					<button id="btn1">Sign In</button>
  					<button id="btn2">Sign Up</button>
  				</div> 

  		  	  <div class="signup">
			      <input type="text" name="email" id="email" class="form-control" placeholder="Mobile Number or Email"/>
			      <input type="text" name="fname" id="fname" class="form-control" placeholder="Fullname"/>
			      <input type="text" name="surname" id="surname" class="form-control" placeholder="Surname"/>
			      <input type="text" name="pass" id="pass" class="form-control" placeholder="Password"/>
			      <input type="text" name="cpass" id="cpass" class="form-control" placeholder="Confirm password"/>
			      <input type="date" name="bir" id="bir" placeholder="Birthdate" />
			      <br>
			      <br>
			      <input type="radio" name="gn1" id="gn1" value="male" style="font-size: 16px;font-family:Times new roman;margin-left: 35px; margin-top: 4.5%;"> Male
			      <input type="radio" name="gn1" id="gn1" value="female" style="font-size: 16px;font-family:Times new roman;margin-left: 22px; margin-top: 4.5%;"> Female
			      <br>
			      <div class="image1" id="up" style="background-image: url(images/c1.png);background-size:cover;margin-top: 10px;">
			      	<a href="#" id="upd"><center><p style="color:white;background-color:black;opacity: 0.5; float:right;font-size:18px;margin-top: 125px;margin-left: 0px;padding:0px 15px 0px 17px;"> Upload Photo </p></center></a>
			      <input type="file" id="openp" style="display: none;">	

			      </div>
			      <div class="box">
			      <a href="#" style="margin-left: 4.5%; font-size:17px;font-family:Times new roman;margin-top: 10px;">Why we need your photo?</a>
			          <div class="imgdes">We need your photo for privacy purpose.If someone tries to post your photo then you will get alert Notification.Your photo will not be shared by us. </div>
			      </div>
			      <br>
			      <span class="button"><input type="submit" name="submit" id="submit" value="Sign Up" /></span>
			      </div>
		      
		   <div class="signin">
		  	 <div class="h3" style="font-size: 18px; font-family: Times new Roman;font-weight: bold;box-sizing:border-box;text-decoration:none;
			transition: .5s ease;color:black;font-family:Times New Roman;font-weight:bold;margin-left: 20px;margin-top: 20px;width: 17%;border-bottom: solid;
			border-bottom-width: bold;border-bottom-color:#08f992; border-bottom-width: 3px;">Sign in</div>
		      <input type="text" name="email" id="email" class="form-control" placeholder="Mobile Number or Email"/>
		      <input type="text" name="pass" id="pass" class="form-control" placeholder="Password"/>
		      <input type="text" name="cpass" id="cpass" class="form-control" placeholder="Confirm password"/>
		      <br>
		      <a href="" class="a1"> Forgot password?</a>
		      <!--<div class="button"><input type="submit" name="submit" id="submit" value="Sign In" /></div>
		  </div>-->
		  <span class="button" style="margin-top: 0px;"><input type="submit" name="submit" id="submit" value="Sign In" /></span>
		  </div>

	   		</form>
	   		</div>
	   </div>
</body>
</html>