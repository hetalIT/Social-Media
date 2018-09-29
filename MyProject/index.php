<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
   <link rel="stylesheet" type="text/css" href="css/main.css">
   <link rel="stylesheet" type="text/css" href="css/bootst.css">
  <script type="text/javascript" src="js/script_demo.js"></script>
   
</head>
<body style="background-color:aliceblue;">
    <?php
        include("top.php");
    ?>
    <div class="wrap">
        <div class="wrapl">
          <ul>
              <li>
              <img src="img/profile.png" height="40px" width="40px" style="border-radius:50%;background-color:pink;margin:0% 0% 0% 3%;float:left">
              <p style="margin-left:4px;color:black;">Neha Parneriya</p>
              </li>
            </ul>
             <ul id="set">
              <li>
                  <img src="img/privacy3.png" height="20px" width="20px" style="margin:0% 0% 0% 3%;"><span style="margin-left:18px;">Privacy settings</span>
              </li>
              <li>
                  <img src="img/post1.png" height="20px" width="20px" style="margin:0% 0% 0% 3%;"><span style="margin-left:18px;"><a id="add" href="#newpost" >Add New Post</a></span>
              </li>
              <li>
                  <img src="img/notification.png" height="20px" width="20px" style="margin:0% 0% 0% 3%;"><span style="margin-left:18px;">Notification</span>
              </li>
            </ul>
       
        </div>
        
        <div class="wrapr">
          <div class="npost" id="newpost">
            <div class="n1">
              <img src="img/photo_post3.png" width="7%" height="60%" style="margin-top:10px;margin-left: 10px;">&nbsp;<span style="margin-top:16px;position: absolute;">Add New Post</span> <a id="cpost"><img src="img/close.png"  width="5%" height="45%" style="margin-top:10px;float:right;margin-right:10px;"></a>
            </div>
            <div class="n2" style="background:url(img/close.png);">
              <img src="img/post_photo2.gif" id="ppost" width="30%" height="50%" style="margin:15% 35%;">
              <input type="file" id="pupload" onchange="readURL(this);" style="display:none"/>

            </div>
            <div class="n3">
            </div>
            <div class="n4">
            </div>
            
          </div>
        <?php
        for($i=0;$i<2;$i++)
        {   
        ?>
            <div class="r1" id="r1main">
            <div class="r11">
                <img src="img/profile.png" height="50px" width="50px" style="border-radius:50%;background-color:pink;margin:14px 0px 0px 10px;;float:left">
                <span style="margin:20px 0px 0px 5px;color:black;position:absolute;"><b>Neha Parneriya </b>shared a post</span> 
             <span style="margin:38px 0px 0px 5px;position:absolute;">10 August<img src="img/public1.png" height="15px" width="15px;" style="margin-top:3px;position:absolute;margin-left:5px;"></span>
              
            </div>    
            <div class="r12">
                <center><img src="img/img1.jpg" height="405px" width="405px" style=""></center>
            </div>    
         <div class="r13">
           nnnnnn
         </div>    
          <div class="r14">
            
            <span class="sl" ><img src="img\like.png" height="90%" width="5%" style="margin-top:1%;padding-bottom:1.5%;"><span style="font-size:18;margin-top:1.2%;position:absolute;">&nbsp;Like&nbsp;<label>5</label></span></span>

            <span class="sc"><img src="img\comment3.png" height="90%" width="5%" style="margin-top:3px;"><span style="font-size:18;margin-top:1.2%;position:absolute;">Comment&nbsp;<label>5</label></span></span>
          </div>
               <div class="r15">
                <img src="img/profile.png" height="35px" width="35px" style="border-radius:50%;background-color:white;margin-top:1%;margin-bottom:1%;margin-left:1%;">
                <input type="text" id="Comment" style="margin:10px 0px 0px 17px;width:70%;height:30px;border-radius:50px 50px 50px 50px;" size="45%">&nbsp;
                <input type="submit" name="post" value="Post" class="btn btn-default" style="border-radius:20px 20px 20px 20px;width:10%;">
               </div>    
                
            </div>

        
            <?php
        }
            ?>
            

        </div>

    </div>
</body>
</html>
<script type="text/javascript">
 
 $(document).ready(function(){
  $("#add").click(function() {
   $("#newpost").css('visibility','visible');
   $("#newpost").css('opacity','1');
   $("#newpost").css('z-index','9999');
   $(".wrap .wrapl").css('opacity','0.2');
   $("#r1main").css('opacity','0.2');
   $("#r1main,.wrap .wrapl").css('z-index','1');
 });
  $("#cpost").click(function() {
      $("#newpost").css('visibility','hidden');
      $(".wrap .wrapl").css('opacity','1');
   $("#r1main").css('opacity','1');
   $("#r1main,.wrap .wrapl").css('z-index','1');
 });
  $('#ppost').click(function(){ $('#pupload').trigger('click'); });

 });
 function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#n2')
                    .attr('background:url(', e.target.resul)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

