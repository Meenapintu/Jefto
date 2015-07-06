<!DOCTYPE html>
<html lang="en">

<?php 	  require_once("options.php");
	  require_once("func.php");
	  require_once('jsfunc.php');
	  require_once("header.php");
	  ?>
<body>
<link rel="stylesheet" href="forms.css">
 <!--  END of of Navbar header  part  (# ENDT) -->
  <!--  This part for  most Form fill up  (#START) -->

</style>
<div class="container" >
<form method="post" action="controller3.php"role="form" >

	<div class="row">
	<div class='input-field col s12 col-md-12'>
	<div class="row">
	 <p class="msg"> Your Social media  </p>
	<script type="text/javascript">  
	  document.write(key_numbers(social_media,"social_media__[0]","social_media__[1]","https://")) ;
	</script>
	<button type="button" name="social_media" id="social_media__" onclick="add_feild(this)" value=2 class="btn btn-success"> Add Another field</button>
	</div>
	</div>
	<div class="msg"> Non Media Exposer </div>
	<script type="text/javascript">  
	document.write("<div class='input-field col s12 col-md-12'>");
	document.write(selectform("non_media_explorer__ ",audience_number));
	document.write("</div>"); 
    document.write("<div class='input-field col s12 col-md-12'>");
	document.write(subform("tele__","Television Coverage"));
	document.write("</div>");
	document.write("<div class='input-field col s12 col-md-12'>");
	document.write(subform("radio__","Radio Coverage"));
	document.write("</div>");
	document.write("<div class='input-field col s12 col-md-12'>");
	document.write(subform("print__","Print Media Coverage"));
	document.write("</div>");
	document.write("<div class='input-field col s12 col-md-12'>");
	document.write(multiform("Off Line Promotion   ","off_line_promo__",offline_promotion));
	document.write("</div>"); 
	</script>
	<div class='input-field col s12 col-md-12'>
	<div class="row">
	 <p class="msg"> Online Media Coverage  </p>
	<script type="text/javascript">  
	  document.write(key_numbers(social_media,"media_name__[0]","media_name__[1]","https://")) ;
	</script>
	<button type="button" name="social_media" id="medial_name__" onclick="add_feild(this)" value=2 class="btn btn-success"> Add Another Field</button>
	</div>
	</div>
<script type="text/javascript"> 
	//document.write("<div class='input-field col s12 col-md-12'>"); 
	//document.write(multiform_radio("Currency  ","currency__",currency)); 
	//document.write("</div>");
	//====================================================================================
	//document.write(subform("event_name","this field is going to be resigned with offer.png","text","input")); 
	//document.write(subform("event_name","this need to be redesigned with offer.png","text","input"));
	</script>
	<?php require_once('offer.php');?>
	<script type="text/javascript">
	//====================================================================================
	document.write("<div class='input-field col s12 col-md-12'>");
	document.write(subform("contact_name__","Your Name")); 
	document.write("</div>");
	document.write("<div class='input-field col s12 col-md-12'>");
	document.write(subform("contact_mob__","Your Contact")); 
	document.write("</div>");
	document.write("<div class='input-field col s12 col-md-12'>");
	document.write(subform("contact_email__"," Email Address"));
	document.write("</div>"); 

	//subform("event_name","","text","input","placeholder= 'alter email id '"); 
	document.write("<div class='input-field col s12 col-md-12'>");
	document.write(subform("office___","Office Contact")); 
	document.write("</div>");
	 </script>
	 <div class='input-field col s12 col-md-12'>
    <input type="submit" style="align-self:center" >
    </div>
    </div>
</form>

</div>



 <!--  This part for  form fill up   (#END ) -->
<?PHP require_once("footer.php"); ?>
</body>
</html>
