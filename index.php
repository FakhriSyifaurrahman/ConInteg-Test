<?php
session_start();
require("_db.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SISMIK (Sistem Informasi Akademik TK)</title>
<link rel="stylesheet" href="../themes/alertify.core.css" />
<link rel="stylesheet" href="../themes/alertify.default.css" id="toggleCSS" />
<link rel="stylesheet" href="css/style.default.css" type="text/css" />
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.1.1.min.js"></script>

</head>
<body class="loginbody">

    <div class="loginwrapper">
        <div class="loginwrap zindex100 animate2">
        <h1 class="logintitle"><span class="iconfa-lock"></span> SISMIK (Sistem Informasi Akademik TK)<span class="subtitle">Silahkan login untuk memulai.</span></h1>
            <div class="loginwrapperinner">
			
<style type="text/css">
<!--
.style4 {color: #939393; font-family: Verdana, Arial, Helvetica, sans-serif; }
.style9 {color: #FFFFFF; font-family: "Courier New", Courier, monospace; }
-->
</style>
<body style="">
<center>
<table width="709" height="262" border="" align="center">
    <tr width="170">    </tr>
  <tr>
    <td width="170" height="194" ><a href="indexadmin.php">
      <div align="center"><img src="img/admin.png" /></div></td>
    <td width="170"><a href="indexsiswa.php">
      <div align="center"><img src="img/siswa.png" /> </div></td>
    <td width="170"><a href="indexguru.php">
      <div align="center"><img src="img/guru.png" /></div></td>
  </tr>
  <tr>
    <td><div align="center" class="style9">
      <h3>Admin</h3>
    </div></td>
    <td><div align="center" class="style9">
      <h3>Orang Tua Siswa</h3>
    </div></td>
    <td><div align="center" class="style9">
      <h3>Guru</h3>
    </div></td>
  </tr>
</table>
<p class="style4">&nbsp;</p>
</center>
</body>

            </div><!--loginwrapperinner-->
        </div>
        <div class="loginshadow animate3 fadeInUp"></div>
    </div><!--loginwrapper-->
    
    <script type="text/javascript">
    jQuery.noConflict();
    
    jQuery(document).ready(function(){
        
        var anievent = (jQuery.browser.webkit)? 'webkitAnimationEnd' : 'animationend';
        jQuery('.loginwrap').bind(anievent,function(){
            jQuery(this).removeClass('animate2 bounceInDown');
        });
        
        jQuery('#username,#password').focus(function(){
            if(jQuery(this).hasClass('error')) jQuery(this).removeClass('error');
        });
        
        jQuery('#loginform button').click(function(){
            if(!jQuery.browser.msie) {
                if(jQuery('#username').val() == '' || jQuery('#password').val() == '') {
                    if(jQuery('#username').val() == '') jQuery('#username').addClass('error'); else jQuery('#username').removeClass('error');
                    if(jQuery('#password').val() == '') jQuery('#password').addClass('error'); else jQuery('#password').removeClass('error');
                    jQuery('.loginwrap').addClass('animate0 wobble').bind(anievent,function(){
                        jQuery(this).removeClass('animate0 wobble');
                    });
                } else {
                    jQuery('.loginwrapper').addClass('animate0 fadeOutUp').bind(anievent,function(){
                        jQuery('#loginform').submit();
                    });
                }
                return false;
            }
        });
    });
    </script>

</body>
</html>