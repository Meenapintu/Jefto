<!DOCTYPE html>
<html lang="en">

<?php 
	  require_once("options.php");
	  require_once("func.php");
	  require_once('jsfunc.php');
	  require_once("header.php");
?>

<body>
<link rel="stylesheet" href="forms.css">
<script type="text/javascript">
	
</script>
 <!--  END of of Navbar header  part  (# ENDT) -->
  <!--  This part for  most Form fill up  (#START) -->


<div class="container" >
 <div class="row " >
 	<p class='flow-text center white-t font-ml' style="color:#26A69A;margin:0px;" >Submit Event: Part 1 of 3 </p>
 </div>
<form  enctype="multipart/form-data" method="post" action="controller.php"role="form" class="row card-panel">

   <script type="text/javascript"> 
    //$val = array("cat1 ","cat2","middle east science adace forbid ");

   
    document.write("<div class='input-field  col s12 m12 col-md-12' >");
	document.write(subform("event_name__","Event Name","text")); 
	document.write("</div>");

	</script>
	<style type="text/css">
	.btn, .fint{
		
		margin:0px;
		
	}
	</style>
	<div class='col s12 m12 col-md-12' >
	 	<div class="file-field input-field row">
     		<div class="btn col s3 m2  l2">
        		<span>Logo</span>
        		<input type="file" name='logo__' />
      		</div>
      		<div class=" fint col s9 m10  l10">
      			<input class="file-path validate" type="text" placeholder='Upload Your Event Logo '/>
    		</div>
    	</div>
    </div>
	<script>
	document.write("<div class='input-field col s12 m12 col-md-12'>");
	document.write(multiform_radio("Category  ","category__",category));
	document.write("</div>");
	
	document.write("<div class='input-field col s12 m12 col-md-12'>");
	document.write(multiform_radio("Genre  ","genre__",genre)); 
	document.write("</div>");

	
	document.write("<div class='input-field col s12 m12 col-md-12'>");
	document.write(subform_textarea("description__","Description"));
	document.write("</div>");
	
	 </script>
    <div class=" col s12 m12 col-md-12">
    <div class="row">
    <div class='col col-md-6'>
    <div class="row">
    <div class="col s12 m12 col-md-12 msg"> Start Date</div>
	<script type="text/javascript"> 
	document.write("<div class='input-field col s12 m12 col-md-12'>");
	document.write(subform_date("startdate__","'start date'")); 
	document.write("</div>");
	</script>
	</div>
	</div>
	<div class='col col-md-6'>
	<div class="row">
	<div class="col s12 m12 col-md-12 msg"style='float:right'> End Date</div>
	<script type="text/javascript"> 
	document.write("<div class='input-field col s12 m12 col-md-12'>");
	document.write(subform_date("enddate__","'End Date'"));
	document.write("</div>"); 
	</script>
	</div>
	</div>
    </div>
	</div>
    <script type="text/javascript">
    document.write("<div class='input-field col s12 m12 col-md-12'>");
	document.write(subform("city__","City","text"));
	document.write("</div>"); 

	document.write("<div class='input-field col s12 m12 col-md-12'>");
	document.write(subform("address__"," Address","text")); 
	document.write("</div>");
	
	document.write("<div class='input-field col s12 m12 col-md-12'>");
	document.write(multiform_radio("Country   ","country__",country)); 
	document.write("</div>");

	document.write("<div class='input-field col s12 m12 col-md-12'>");
	document.write(subform("pincode__"," Pin Code","number")); 
	document.write("</div>");

	document.write("<div class='input-field col s12 m12 col-md-12 '>");
	//document.write(subform("tags__","'Tags related to your form'"));
	document.write("<input type= 'text' name='tags__' id='tags__' data-role='materialtags' onkeypress='return event.keyCode != 13;' /><label for='tags__'>Tags related to your Event</label>");
	document.write("</div>"); 
	//multiform("Happens in every   ","event_name",$val,  "check_call");
	document.write("<div class='input-field col s12 m12 col-md-12'>");
	document.write(multiform_radio("Event Scope   ","scope__",scope)); 
	document.write("</div>");
		
	</script>
	<div class='input-field col s12 m12 col-md-12'>
	 <div class="row">
	 <p class="msg"> Key Number </p>
	 <input type="hidden" name="key_numbers" >
	<script type="text/javascript">
	//document.write("<div class='input-field col s12'>");
	//document.write("<div class='row'>");
	document.write(key_numbers(key_number,"key_numbers__[0]","key_numbers__[1]","How Many","number"));
	//document.write("</div>"); 
	</script>
	<input type="hidden" name="key_number" id="key_numbers__" onclick="add_feild(this)" value=2>
	<button type="button" name="key_number" id="key_numbers__" onclick="add_feild(this)" value=2 class="btn btn-success"> Add Another field</button>
	</div>
	</div>
	
 	<script type="text/javascript">
 	document.write("<div class='input-field col s12 m12 col-md-12'>");
 	document.write(multiform_radio("Happens every   ","frequency__",happens_every)); 
 	document.write("</div>");
 	//<script type="text/javascript">  
    //$val = array("cat1 ","cat2","middle east science adace forbid ");
    document.write("<div class='input-field col s12 m12 col-md-12'>");
	document.write(subform("organization__"," Organization Group","text")); 
	document.write("</div>");
	document.write("<div class='input-field col s12 m12 col-md-12'>");
	document.write(subform("event_site__","Event Website","text")); 
	document.write("</div>");
	
	//subform("event_name","","text","input","placeholder= 'Contact person's name'"); 
	document.write("<div class='input-field col s12 m12 col-md-12'>");
	document.write(subform("event_email__"," Email address",'email')); 
	document.write("</div>");
	document.write("<div class='input-field col s12 m12 col-md-12'>");
	document.write(subform("reg_link__","Link for Registration","text"));
	document.write("</div>");
	document.write("<div class='input-field col s12 m12 col-md-12'>"); 
	document.write(subform_textarea("team_description__"," Team Description"));
	document.write("</div>");
	document.write("<div class='input-field col s12 m12 col-md-12'>");
 	document.write(subform("budget__","Budget  ","number"));
 	document.write("</div>");
 	//===================
 	document.write("<div class='input-field col s12 col-md-12'>"); 
	document.write(multiform_radio("Currency  ","currency__",currency)); 
	document.write("</div>");
 	//==================
 	document.write("<div class='input-field col s12 m6 col-md-12'>");
 	document.write(multiform("Sponsorship needed   ","sponsors__",sponsor_needed)); 
 	document.write("</div>");


	 </script>
	 
	 
	 <div class="input-field col s12 col-md-12">
    <button type="submit" class="waves-effect waves-light btn-large center" style="align-self:center" > <i class="material-icons  right">send</i> Continue to Part 2 of 3</button>
    </div>
</form>
</div>




 <!--  This part for  form fill up   (#END ) -->
<?PHP require_once("footer.php"); ?>
</body>
</html>
<script >

$('#4_deleteFinancial').on('change',function () {
	if($(this).is(':checked')){
		var h ="<div class='input-field col s6 m6 l6' id = 'finance_price_div' style='margin:0px;padding:0px;' >";
		 	h+="<input type='number' id = 'finance_price__' name='finance_price__' >";
	  		h+="<label for='finance_price__'> How much </label></div>";

	  	$(this).parent().attr('class','input-field col s6 m6 l6 wrap');

		$(this).parent().after(h);
		$('#finance_price_div').css('height',($(this).parent().height()+'px'));
	}
	else{
		$('#finance_price_div').remove();
		$(this).parent().attr('class','input-field col s12 m12 l12 wrap');
		}
});


</script>