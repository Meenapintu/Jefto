<!DOCTYPE html>
<html lang="en">
<head>
<?PHP require_once("header.php"); ?>
<style type="text/css">
.center {
	margin: auto;
	text-align:center;
}

.home_col{
	background: rgba(34,35,75,0.7);

}
.white-t{
	color: white;
}
.bg-trance{
	background: transparent;
}
.border-me select{
	border:none;
}


</style>
<link rel="stylesheet" href="forms.css">
<link rel="stylesheet" type="text/css" href="wegdet.css">
<script>
	function resize (e) {
		alert("gfg");
	}
$(function () {

        $('form').on('submit', function (e) {

          e.preventDefault();
          $('#modal1').openModal();
        });

        $("#agree").on('click',function(){
        	$.ajax({
            type: 'post',
            url: 'subs.php',
            data: $('form').serialize(),
            success: function (data) {
            	//$('#modal1').closeModal();
            	  if(data){
					Materialize.toast('<span style="text-align:center;margin:auto;">Well done</span><a class=&quot;btn-flat yellow-text&quot; href=&quot;#!&quot;><a>', 5000);
            	  }
            	  else{
            	  	//Materialize.toast('<span style="text-align:center;margin:auto;">Sorry we got some problem</span><a class=&quot;btn-flat yellow-text&quot; href=&quot;#!&quot;>Undo<a>', 5000);
            	  $('#Error1').openModal();
            	  }
            }
          });
        });

});

</script>
</head>
 <!-- Butten start div (#START) -->

<!-- End of button Div (#END) -->
  <!--  This part for  most trading categories  (#START) -->
 <body >
 <div class="container-fluid">
 <div class="row" style="margin:0px;">
	<div class='col s12 m12 l12' style="background: rgba(53,65,13,0.8);">
		<div class="container" >
			<div class="row">
				<div class="col s12 m12 l12 card-panel bg-trance ">
					<div class="row">
						<!-- <div class="col s12 m2 l2 center">
							<p style="font-size:x-large"> </p>
						</div> -->
						<div class="col s12 m12 l12 center" style="font-size:large;margin:0px;margin-bottom:5px;width:100%" >
							We are event listing company who analyse the data of an event and make it easier for 
							sponsors to advertise their product.Today there are so many events that companies find 
							it hard to which they should sponsor We make the sponsorship process easier for both 
							the event organizer and marketing manager.
						</div>

					</div>
						
				</div>
				<div class="col s12 m12 l12 center card-panel bg-trance">
					<div class="row" >
						<div class="col s12 m12 l12 center">
							<div style="width:90%;" class="center " onclick="resize(this)">
								<div class=" video-container no-controls ">
			         			 <iframe class="center"  src="https://www.youtube.com/embed/7TpD92HEGlI" frameborder="0" allowfullscreen></iframe>
			        			</div> 
	        				</div>
	        			</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class='col s12 m12 l12' style="background: rgba(100,13,140,0.9);">
		<div class="container " >
			<div class="row">
				<div class="col s12 m12 l12 center card-panel bg-trance">
					<div class="row">
					   <div class="col s12 m12 l12">
					   						<div class="home_col center ">
					   							<p style="font-size:x-large display:inline">Cool figures which we compute after analyzing</p>
					   						</div>
					   </div>
					   <div class="col s12 m12 l12">
					   					<div class="row">
					   						<div class="home_col center bg-trance col s4 m4 l4" >
					   							<div class=" row">
					   								<div class="col s12 m12 l12 center">
					   									<img src="def_img/star.gif" alt="star" style="width:100%;">
					   								</div>
					   								<div class="col s12 m12 l12 center ">
					   									<p class="center">Event Effectiveness Index</p>
					   								</div>
					   							</div>
					   						</div>
					   						<div class="home_col center bg-trance col s4 m4 l4 " >
					   							<div class=" row">
					   								<div class="col s12 m12 l12 center">
					   									<img src="def_img/star.gif" alt="star" style="width:100%;">
					   								</div>
					   								<div class="col s12 m12 l12 center">
					   									<p class="center">Audience Richness</p>
					   								</div>
					   							</div>
					   						</div>
 
					   
					   						<div class="home_col center bg-trance col s4 m4 l4"  >
					   							<div class=" row">
					   								<div class="col s12 m12 l12 center">
					   									<img src="def_img/star.gif" alt="star" style="width:100%;">
					   								</div>
					   								<div class="col s12 m12 l12 center">
					   									<p class="center"> Sponsorship Readiness Index</p>
					   								</div>
					   							</div>
					   						</div>
					   					</div>
					   </div> 
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class='col s12 m12 l12' style="background: rgba(100,13,140,0.9);">
		<div class="container " >
			<div class="row">
			
				<div class="col s12 m12 l12 center card-panel " style="background:transparent;">
					<form class="row" style="background:transparent;">
						<div class=" col s12 m12 l12 center">
								<p class="flow-text center white-t">Liked the idea? Wanna get in Touch? </p>
						</div>
					   <div class="input-field col s12 m4 l4 "style="margin-left:0px;padding:0px; min-width:45px;">
					   	<input type='email' name='whoami' class="validate" id='whoami'style="margin:0px;padding:0px;width:100%;" />
					   	<label for='whoami'style="margin:0px;padding:0px;" >Your Email</label>
					   </div>
					   <div class="input-field col s6 m3  l4 bg-trance border-sel"  id='select' style="margin-right:0px;margin-left:0px;padding:0px;min-width:45px; border-bottom:#9E9E9E 1px solid; border-radius:0px;" >
					   	<select name='whoami_type' class="browser-default bg-trance select-me  validate " style="width:100%;border:none;margin:0px;">
					   	 	<option value=1>Sponsor</option>
					   	 	<option value=2>Organizer</option>
					   	 	<option value=3>Event Visitor</option>
					   	</select>
					   </div>
					   <div class="input-field col s6 m2 l2"  id ='button' style="margin-right:0px;padding:0px; min-width:45px;border-bottom:#9E9E9E 1px solid; border-radius:0px;" >
					   	<input type="submit" class="btn btn-success" name='submit' style="margin:0px;padding:0px;width:100%;height:100%">
					   </div>
					</form>
				</div>

				<div class="col s12 m12 l12 center  card-panel bg-trance" style="margin-top:20px;" >
					<a href="Form.php" > 
					   	<button class=" waves-effect waves-light btn-large center" type="submit" name="action">
	   						<i class="material-icons  right">send</i> Submit Event
	  					</button>
	  				</a>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</body>

<?PHP require_once("footer.php"); ?>

	<div id="modal1" class="modal">
	    <div class="modal-content">
	      <h4>TERMS AND CONDITION</h4>
	      <p>We are not responsible for anything  </p>
	    </div>
	    <div class="modal-footer">
	      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat" id='agree'>Agree</a>
	       <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat" id='disagree'>Disagree</a>
	    </div>
	  </div>

	<div id="Error1" class="modal">
	    <div class="modal-content" style="background:red;">
	      <h4>ERROR </h4>
	      <p>SORRY WE ARE NOT ABLE TO PROCESS YOUR REQUEST .</p>
	      <p>There might be a case that you already registed or some internal error .</p>
	      <p>  THANK YOU , it will be more responcive soon  .</p>
	    </div>
	    <div class="modal-footer">
	    <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat" id='disagree'>OKAY</a>
	    </div>
	  </div>

</html>
<script >
				$("#button").css('height',($("#select").height()+'px'));
				$("#select").on('hover',function () {
					// body...
					$(this).css('border-color','#26A69A');
				});
</script>