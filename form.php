<!DOCTYPE html>
<html lang="en">

<?php 
	require_once("header.php");
	   require_once('offer.php');
	  require_once('jsfunc.php');  
?>

<body>
<style type="text/css">
	.current{
		display: none;
	}

	
</style>
<link rel="stylesheet" href="forms.css">

 <!--  END of of Navbar header  part  (# ENDT) -->
  <!--  This part for  most Form fill up  (#START) -->


<div class="container" >
 <div class="row active-f" id=1 >
 	<p class='flow-text center white-t font-ml' style="color:#26A69A;margin:0px;" >Submit Event: Part 1 of 3 </p>
 </div>
 <div class="row current" id=2 >
 	<p class='flow-text center white-t font-ml' style="color:#26A69A;margin:0px;" >Submit Event: Part 2 of 3 </p>
 </div>
 <div class="row current" id=3 >
 	<p class='flow-text center white-t font-ml' style="color:#26A69A;margin:0px;" >Submit Event: Part 3 of 3 </p>
 </div>
<form  enctype="multipart/form-data" method="post" role="form"  class="card-panel">
	<div class="row active-f" id=1>
   		<script type="text/javascript"> 
    	document.write("<div class='input-field  col s12 m12 l12' >");
		document.write(subform("event_name__","Event Name","text")); 
		document.write("</div>");
		</script>
		<style type="text/css">
		.btn, .fint{
		margin:0px;
		}
		</style>
		<div class='col s12 m12 l12' >
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
		document.write("<div class='input-field col s12 m12 l12'>");
		document.write(multiform_radio("Category  ","category__",category));
		document.write("</div>");
		document.write("<div class='input-field col s12 m12 l12'>");
		document.write(multiform_radio("Genre  ","genre__",genre)); 
		document.write("</div>");
		document.write("<div class='input-field col s12 m12 l12'>");
		document.write(subform_textarea("description__","Description"));
		document.write("</div>");
		 </script>
	    <div class=" col s12 m12 l12">
	    <div class="row">
	    <div class='col m6 l6'>
	    <div class="row">
	    <div class="col s12 m12 l12 msg"> Start Date</div>
		<script type="text/javascript"> 
		document.write("<div class='input-field col s12 m12 l12'>");
		document.write(subform_date("startdate__","'start date'")); 
		document.write("</div>");
		</script>
		</div>
		</div>
		<div class='col m6 l6'>
		<div class="row">
		<div class="col s12 m12 l12 msg right" style='float:right'> End Date</div>
		<script type="text/javascript"> 
		document.write("<div class='input-field col s12 m12 l12'>");
		document.write(subform_date("enddate__","'End Date'"));
		document.write("</div>"); 
		</script>
		</div>
		</div>
	    </div>
		</div>
	    <script type="text/javascript">
	    document.write("<div class='input-field col s12 m12 l12'>");
		document.write(subform("city__","City","text"));
		document.write("</div>"); 

		document.write("<div class='input-field col s12 m12 l12'>");
		document.write(subform("address__"," Address","text")); 
		document.write("</div>");
		
		document.write("<div class='input-field col s12 m12 l12'>");
		document.write(multiform_radio("Country   ","country__",country)); 
		document.write("</div>");

		document.write("<div class='input-field col s12 m12 l12'>");
		document.write(subform("pincode__"," Pin Code","number")); 
		document.write("</div>");

		document.write("<div class='input-field col s12 m12 l12 '>");
		//document.write(subform("tags__","'Tags related to your form'"));
		document.write("<input type= 'text' name='tags__' id='tags__' data-role='materialtags' onkeypress='return event.keyCode != 13;' /><label for='tags__'>Tags related to your Event</label>");
		document.write("</div>"); 
		//multiform("Happens in every   ","event_name",$val,  "check_call");
		document.write("<div class='input-field col s12 m12 l12'>");
		document.write(multiform_radio("Event Scope   ","scope__",scope)); 
		document.write("</div>");
			
		</script>
		<div class='input-field col s12 m12 l12'>
		 <div class="row">
		 <p class="msg"> Key Numbers </p>
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
	 	document.write("<div class='input-field col s12 m12 l12'>");
	 	document.write(multiform_radio("Happens every   ","frequency__",happens_every)); 
	 	document.write("</div>");
	 	//<script type="text/javascript">  
	    //$val = array("cat1 ","cat2","middle east science adace forbid ");
	    document.write("<div class='input-field col s12 m12 l12'>");
		document.write(subform("organization__"," Organizing Group name","text")); 
		document.write("</div>");
		document.write("<div class='input-field col s12 m12 l12'>");
		document.write(subform("event_site__","Event Website","text")); 
		document.write("</div>");
		
		//subform("event_name","","text","input","placeholder= 'Contact person's name'"); 
		document.write("<div class='input-field col s12 m12 l12'>");
		document.write(subform("event_email__"," Email address",'email')); 
		document.write("</div>");
		document.write("<div class='input-field col s12 m12 l12'>");
		document.write(subform("reg_link__","Link for Registration","text"));
		document.write("</div>");
		document.write("<div class='input-field col s12 m12 l12'>"); 
		document.write(subform_textarea("team_description__"," Team Description"));
		document.write("</div>");
		document.write("<div class='input-field col s12 m12 l12'>");
	 	document.write(subform("budget__","Event Budget  ","number"));
	 	document.write("</div>");
	 	//===================
	 	document.write("<div class='input-field col s12 l12'>"); 
		document.write(multiform_radio("Currency  ","currency__",currency)); 
		document.write("</div>");
	 	//==================
	 	document.write("<div class='input-field col s12 m12 l12'>");
	 	document.write(multiform("Sponsorship needed   ","sponsors__",sponsor_needed)); 
	 	document.write("</div>");
		</script>
		
		<div class="input-field col s12 m12 l12">
	    <button type="submit" class="waves-effect waves-light btn-large center" style="align-self:center" > <i class="material-icons  right">send</i> Continue to Part 2 of 3</button>
	    </div>
    </div>

    
  			<div class="row current" id=2 >
  				<div class="msg"> Number of  Audience Expected</div>
   				<script type="text/javascript"> 
   					document.write("<div class='input-field col s12 l12'>"); 
    					document.write(subform("total_audience_count__","Number","number"));
    				document.write("</div>");
   				</script>
  				<div class='input-field col s12 l12'>
					<div class="row">
		 				<p class="msg"> Audience Type </p>
						<script type="text/javascript"> 
		 					document.write(key_numbers(target_audience,"audience__[0]","audience__[1] ","How much ( write % )","number")); 
		 				</script>
						<input type="hidden" name="target_audience" id="audience__" onclick="add_feild(this)" value=2>
						<button type="button" name="target_audience" id="audience__" onclick="add_feild(this)" value=2 class="btn btn-success"> Add Another Field</button>
					</div>
				</div>
				<div class='input-field col s12 l12'>
					<div class="row">
		 				<p class="msg"> Age Based Ratio  </p>
						<script type="text/javascript"> 
		 					document.write(key_numbers(age_group,"age_range__[0]","age_range__[1]","How much ( write % )","number"));  
		 				</script>
		 				<input type="hidden" name="age_group" id="age_range__" onclick="add_feild(this)" value=2> 
						<button type="button" name="age_group" id="age_range__" onclick="add_feild(this)" value=2 class="btn btn-success"> Add Another Field</button>
					</div>
				</div>
   				<script type="text/javascript">  
					document.write("<div class='input-field col s12 l12'>");
						document.write(subform_range("gender_ratio__","Male female ratio"));
					document.write("</div>"); 
					document.write("<div class='input-field col s12 l12'>");
						document.write(multiform("Education Background  ","edu_background__",education_background)); 
					document.write("</div>");
					document.write("<div class='input-field col s12 l12'>");
						document.write(multiform("Professional Level  ","profession__",audience_category)); 
					document.write("</div>");
					document.write("<div class='input-field col s12 l12'>");
						document.write(multiform("Income Level   ","income_level__",income_level)); 
					document.write("</div>");
					document.write("<div class='input-field col s12 l12'>");
						document.write(subform_textarea("audience_description__","Target Audience Description"));
					document.write("</div>");
				</script>
				<div class="input-field col s4 m4 l4">
    		<button type="button" onclick="back(1,this)" id='back-b' class="waves-effect waves-light btn-large center" style="align-self:center" ><i class="material-icons left" ><img  src="def_img/back.png" style="height:25px;"/></i> Back</button>
    	</div>
				<div class="input-field col s8 m8 l8">
   					 <button type="submit" class="waves-effect waves-light btn-large center" style="align-self:center" ><i class="material-icons  right">send</i> Continue to Part 3 of 3</button>
    			</div>
    		</div>






    <div class="row current" id=3>
	<div class='input-field col s12 m12'>
	<div class="row">
	 <p class="msg"> Your Social media links </p>
	<script type="text/javascript">  
	  document.write(key_numbers(social_media,"social_media__[0]","social_media__[1]","https://","text")) ;
	</script>
	<button type="button" name="social_media" id="social_media__" onclick="add_feild(this)" value=2 class="btn btn-success"> Add Another field</button>
	</div>
	</div>
	<!-- <div class="msg"> Non Media Exposer </div>-->
	<script type="text/javascript">  

	//document.write("<div class='input-field col s12 m12'>");
	//document.write(selectform("non_media_explorer__",audience_number));
	//document.write("</div>");

	document.write("<div class='input-field col s12 m12'>");
	document.write(multiform("Non Media Exposure   ","non_media_explorer__",non_media_exposure));
	document.write("</div>");

    document.write("<div class='input-field col s12 m12'>");
	document.write(subform("tele__","Television Coverage","text"));
	document.write("</div>");
	document.write("<div class='input-field col s12 m12'>");
	document.write(subform("radio__","Radio Coverage","text"));
	document.write("</div>");
	document.write("<div class='input-field col s12 m12'>");
	document.write(subform("print__","Print Media Coverage","text"));
	document.write("</div>");
	document.write("<div class='input-field col s12 m12'>");
	document.write(multiform("Off Line Promotion   ","off_line_promo__",offline_promotion));
	document.write("</div>"); 
	</script>
	<div class='input-field col s12 m12'>
	<div class="row">
	 <p class="msg"> Online Media Coverage  </p>
	<script type="text/javascript">  
	  document.write(key_numbers(social_media,"media_name__[0]","media_name__[1]","https://","text")) ;
	</script>
	<button type="button" name="social_media" id="medial_name__" onclick="add_feild(this)" value=2 class="btn btn-success"> Add Another Field</button>
	</div>
	</div>
	<div class='input-field col s12 m12 bott-margin-0'>
		<p class="msg"> Available Offers  </p>
	</div>
	<div class='input-field col s12 m12' style="overflow-x: scroll;">
	<table style="width:100%;margin-bottom:10px;" id='matrix'>
	<tr>
  		<th class ="bc">
  			<div >Deliverables Offering</div>
  			<div></div>
  		</th>
 
    	<script type="text/javascript">
        document.write(pack_core(pack_class_name(),pack_name(pack_next),packs[0]));
        </script>		
    <!-- ############################################    -->
    	<th id="add_package" onclick="add_package('Package Name')">
	   		<i class="material-icons  center ">library_add</i>
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
    		<i type="button" onclick="add_benefit('Deliver Name')" class="material-icons  center ">note_add</i>
    	</td>
    </tr>
	</table>
	</div>
	<script type="text/javascript">
	//====================================================================================
	document.write("<div class='input-field col s12 m12'>");
	document.write(subform("contact_name__","Your Name","text")); 
	document.write("</div>");
	document.write("<div class='input-field col s12 m12'>");
	document.write(subform("contact_mob__","Your Contact","text")); 
	document.write("</div>");
	document.write("<div class='input-field col s12 m12'>");
	document.write(subform("contact_email__"," Email Address","email"));
	document.write("</div>"); 

	//subform("event_name","","text","input","placeholder= 'alter email id '"); 
	document.write("<div class='input-field col s12 m12'>");
	document.write(subform("office___","Office Contact","text")); 
	document.write("</div>");
	 </script>
	 	<div class="input-field col s4 m4 l4">
    		<button type="button" onclick="back(2,this)" id='back-b' class="waves-effect waves-light btn-large center" style="align-self:center" ><i class="material-icons left" ><img  src="def_img/back.png" style="height:25px;"/></i> Back</button>
    	</div>
		<div class="input-field col s8 m8 l8">
    		<button type="submit" class="waves-effect waves-light btn-large center" style="align-self:center" ><i class="material-icons  right">send</i> Submit</button>
    	</div>
    </div>




</form>
</div>




 <!--  This part for  form fill up   (#END ) -->
<?PHP require_once("footer.php"); ?>
</body>
</html>
<script >
del_len = delivers.length;
for (var i = 1; i < del_len; i++) {
 add_benefit(delivers[i]);
}

def_pack = packs.length;
for (var i = 1; i < def_pack; i++) {
	add_package(packs[i]);
};





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

var freq1 = "input[name=event_name__ ],input[name=city__],input[name=address__],input[name=pincode__],input[name=organization__],input[name=event_email__]";
var freq2 = "input[name=total_audience_count__]";
var freq3 = "input[name=contact_name__],input[name=contact_mob__],input[name=contact_email__],input[name=description__]";
$(freq1).attr('required',true);

function back(curr_id,e){
	$(".active-f").attr('class','row current');

	$('input[id=back-b]').each(function(){$(this).attr('class','waves-effect waves-light btn-large center');
			});
	$('div[id=' + curr_id +']').each(function(){$(this).attr('class','row active-f');
			});
	$(eval('freq'+curr_id.toString())).attr('required',true)
	$(eval('freq'+ ++curr_id.toString())).attr('required',false)
	$("html, body").animate({ scrollTop: 0 }, "slow");

}


$('form').on('submit', function (e) {
	e.preventDefault();   //page not relaoding
	var thisid = $(this).children(".active-f").attr('id');
	var curr_id= parseInt(thisid);
	if(curr_id==3){
		$.ajax({
            type: 'post',
            url: 'in_ctrl.php',
            data: $('form').serialize(),
            success: function (data) {
            	//$('#modal1').closeModal();
            	  if(data){
					Materialize.toast('<span style="text-align:center;margin:auto;">Well done</span><a class=&quot;btn-flat yellow-text&quot; href=&quot;#!&quot;><a>', 5000);
            	  	header('Location: Done.php');
            	  }
            	  
            	  else{
            	  	//Materialize.toast('<span style="text-align:center;margin:auto;">Sorry we got some problem</span><a class=&quot;btn-flat yellow-text&quot; href=&quot;#!&quot;>Undo<a>', 5000);
            	  $('#Error1').openModal();
            	  }
            }
          });
	}
	$(".active-f").attr('class','row current');
	$(eval('freq'+thisid)).attr('required',false)
	$('div[id=' + ++curr_id +']').each(function(){$(this).attr('class','row active-f');
			});
	$(eval('freq'+curr_id.toString())).attr('required',true)
	 $("html, body").animate({ scrollTop: 0 }, "slow");
});



  if ( $.browser ) {
    alert( $.browser );
  }
</script>