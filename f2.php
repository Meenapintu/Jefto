<!DOCTYPE html>
<html lang="en">

<?php require_once("header.php");
	  require_once("options.php");
	  require_once("func.php");
	  require_once('jsfunc.php');
?>
<body>
<link rel="stylesheet" href="forms.css">
 <!--  END of of Navbar header  part  (# ENDT) -->
  <!--  This part for  most Form fill up  (#START) -->



<div class="container" >
<form method="post" action="controller2.php" role="form">
  	
  	<div class="row">
  	<div class="msg"> Total Audience Expected</div>
   <script type="text/javascript"> 
   document.write("<div class='input-field col s12 col-md-12'>"); 
    document.write(selectform("total_audience_count__ ",audience_number));
    document.write("</div>");
   </script>
  	<div class='input-field col s12 col-md-12'>
	<div class="row">
	 <p class="msg"> Audience Total </p>
	<script type="text/javascript"> 
	 document.write(key_numbers(target_audience,"audience__[0]","audience__[1] ","How Many")); 
	 </script>
	<input type="hidden" name="target_audience" id="audience__" onclick="add_feild(this)" value=2>
	<button type="button" name="target_audience" id="audience__" onclick="add_feild(this)" value=2 class="btn btn-success"> Add Another Field</button>
	</div>
	</div>
	<div class='input-field col s12 col-md-12'>
	<div class="row">
	 <p class="msg"> Age Based Ratio  </p>
	<script type="text/javascript"> 
	 document.write(key_numbers(age_group,"age_range__[0]","age_range__[1]","How Many"));  
	 </script>
	 <input type="hidden" name="age_group" id="age_range__" onclick="add_feild(this)" value=2> 
	<button type="button" name="age_group" id="age_range__" onclick="add_feild(this)" value=2 class="btn btn-success"> Add Another Field</button>
	</div>
	</div>
   <script type="text/javascript">  
   // $val = array("cat1 ","cat2","middle east science adace forbid ");
	//multiform("Your target audience  ","event_name",$target_audience, "check_call"); 
	//subform("event_name","","text","input","placeholder= 'Expected Attendance'");
	document.write("<div class='input-field col s12 col-md-12'>");
	document.write(subform_range("gender_ratio__","Male female ratio"));
	document.write("</div>"); 
	document.write("<div class='input-field col s12 col-md-12'>");
	document.write(multiform("Education Background  ","edu_background__",education_background)); 
	document.write("</div>");
	document.write("<div class='input-field col s12 col-md-12'>");
	document.write(multiform("Professional Level  ","profession__",audience_category)); 
	document.write("</div>");
	document.write("<div class='input-field col s12 col-md-12'>");
	document.write(multiform("Income Level   ","income_level__",income_level)); 
	document.write("</div>");
	document.write("<div class='input-field col s12 col-md-12'>");
	document.write(subform_textarea("audience_description__","Target Audience Description"));
	document.write("</div>");

	</script>
	<div class="input-field col s12 col-md-12">
    <input type="submit" >
    </div>
    </div>
</form>
</div>
</div>




 <!--  This part for  form fill up   (#END ) -->
<?PHP require_once("footer.php"); ?>
</body>
</html>
