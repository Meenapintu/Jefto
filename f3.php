<!DOCTYPE html>
<html lang="en">

<?php 	  //require_once("options.php");
	  //require_once("func.php");
	  require_once('jsfunc.php');
	  require_once("header.php");
	  require_once 'offer.php';
	  ?>
	  <link rel="stylesheet" href="forms.css">
<body>
</style>
<div class="container" >
<form method="post" action="controller3.php"role="form" class="card-panel" >

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
	document.write(selectform("non_media_explorer__",audience_number));
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
	<div class='input-field col s12 col-md-12' style="overflow-x: scroll;">
	<table style="width:100%;margin-bottom:10px;">
	<tr>
  		<th style="bc">
  			<div >Deliverables Offering</div>
  			<div></div>
  		</th>
 
    	<script type="text/javascript">
        document.write(pack_core(pack_class_name(),pack_name(pack_next)));
        </script>		
    <!-- ############################################    -->
    	<th id="add_package" onclick="add_package()">
    		<div>+<div>
    		<div >Add package  </div>
    	</th>
    </tr>
 <!--  benefit  row  ##################################################### -->
  <script type="text/javascript">
    deliver_next++;
    deliver_array.push(deliver_next)
   // alert(pack_register(pack_class_name_deliver(pack_array[0]),element_name(pack_array[0],deliver_next)));
  document.write(add_benefit_help(deliver_name(deliver_next),delivers[0]));
  </script>
 <!-- ################################################################   -->
    <tr>
    	<td>
    		<button type="button" onclick="add_benefit('Deliver Name')" class="btn btn-success green"> Add Benefit </button>
    	</td>
    </tr>
	</table>
	</div>
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
</body>

 <!--  This part for  form fill up   (#END ) -->
<?PHP require_once("footer.php"); ?>

<script >
del_len = delivers.length;
for (var i = 1; i < del_len; i++) {
 add_benefit(delivers[i]);
}
</script>
</html>
