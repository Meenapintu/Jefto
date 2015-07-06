<!DOCTYPE html>
<html lang="en">

<?php 
	  //require_once("options.php");
	  //require_once("func.php");
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
<form  enctype="multipart/form-data" method="post" action="controller.php"role="form" class="row">

   <script type="text/javascript"> 
    //$val = array("cat1 ","cat2","middle east science adace forbid ");

   
    document.write("<div class='input-field  col s12 m12 col-md-12' >");
	document.write(subform("event_name__","Event Name")); 
	document.write("</div>");

	</script>
	<div class='input-field  col s12 m12 col-md-12' >
	<div class="file-field">
      <input class="file-path validate" type="text"/>
      <div class="btn">
        <span>Logo</span>
        <input type="file" name='logo__' />
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
	document.write(subform("city__","City"));
	document.write("</div>"); 

	document.write("<div class='input-field col s12 m12 col-md-12'>");
	document.write(subform("address__"," Address")); 
	document.write("</div>");
	
	document.write("<div class='input-field col s12 m12 col-md-12'>");
	document.write(multiform_radio("Country   ","country__",country)); 
	document.write("</div>");

	document.write("<div class='input-field col s12 m12 col-md-12'>");
	document.write(subform("pincode__"," Pin Code")); 
	document.write("</div>");

	document.write("<div class='input-field col s12 m12 col-md-12 '>");
	//document.write(subform("tags__","'Tags related to your form'"));
	document.write("<input type= 'text' name='tags__' id='tags__' data-role='materialtags' /><label for='tags__'>Tags related to your Event</label>");
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
	 var global_key_count =0;
	 $("#tags__").materialtags('tags__');
	  $('#tags__').tokenfield({
  		autocomplete: {
    		source: ['red','blue','green','yellow','violet','brown','purple','black','white'],
   			 delay: 100
  			},
  			showAutocompleteOnFocus: true
		});

	 </script>
	<script type="text/javascript">
	//document.write("<div class='input-field col s12'>");
	//document.write("<div class='row'>");
	document.write(key_numbers(key_number,"key_numbers__[0]","key_numbers__[1]","How Many"));
	//document.write("</div>"); 
	</script>
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
	document.write(subform("organization__"," Organization Group")); 
	document.write("</div>");
	document.write("<div class='input-field col s12 m12 col-md-12'>");
	document.write(subform("event_site__","Event Website")); 
	document.write("</div>");
	
	//subform("event_name","","text","input","placeholder= 'Contact person's name'"); 
	document.write("<div class='input-field col s12 m12 col-md-12'>");
	document.write(subform("event_email__"," Email address")); 
	document.write("</div>");
	document.write("<div class='input-field col s12 m12 col-md-12'>");
	document.write(subform("reg_link__","Link for Registration"));
	document.write("</div>");
	document.write("<div class='input-field col s12 m12 col-md-12'>"); 
	document.write(subform_textarea("team_description__"," Team Description"));
	document.write("</div>");
	document.write("<div class='input-field col s12 m12 col-md-12'>");
 	document.write(subform("budget__","Budget  "));
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
	 <div class="input-field col s12">
	 <select  name="finance_price__"class="browser-default" id = 'finance_price__'>
	 	<option value = '1000'> 1000</option>
	 	<option value = '5000'> 5000</option>
	 	<option value = '8000'> 8000</option>
	 	<option value = '9000'> 000</option>
	 </select>
	 </div>
	 
	 <div class="input-field col s12 col-md-12">
    <input type="submit" style="align-self:center" >
    </div>
</form>
</div>




 <!--  This part for  form fill up   (#END ) -->
<?PHP require_once("footer.php"); ?>
</body>
</html>
