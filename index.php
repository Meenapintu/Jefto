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
	height:150px;

}
</style>
<link rel="stylesheet" href="forms.css">
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
 <body>
	<div class="container" >
		<div class="row">
			<div class="col s12 m12 l12  ">
				<div class="row">
					<!-- <div class="col s12 m2 l2 center">
						<p style="font-size:x-large"> </p>
					</div> -->
					<div class="col s12 m12 l12 center" style="font-size:large;margin:40px;width:90%" >
						We are event listing company who analyse the data of an event and make it easier for 
						sponsors to advertise their product.Today there are so many events that companies find 
						it hard to which they should sponsor We make the sponsorship process easier for both 
						the event organizer and marketing manager.
					</div>

				</div>
					
			</div>
			<div class="col s12 m12 l12 center">
				<div class="row" >
					<div class="col s12 m12 l12 center">
						<div style="width:60%;" class="center " onclick="resize(this)">
							<div class=" video-container no-controls ">
		         			 <iframe class="center"  src="https://www.youtube.com/embed/7TpD92HEGlI" frameborder="0" allowfullscreen></iframe>
		        			</div> 
        				</div>
        			</div>
				</div>
			</div>
			<div class="col s12 m12 l12 center">
				<div class="row">
				   <div class="col s12 m4 l4">
				   						<div class="home_col center">
				   							<p style="font-size:x-large display:inline">Event Effectiveness Index</p>
				   						</div>
				   </div>
				   <div class="col s12 m4 l4">
				   						<div class="home_col center">
				   							<p style="font-size:x-large  display:inline" >Audience Richness</p>
				   						</div>
				   </div>
				   <div class="col s12 m4 l4">
				   						<div class="home_col center ">
				   							<p style="font-size:x-large display:inline">Sponsorship Readiness Index</p>
				   						</div>
				   </div>
				</div>
			</div>
			<div class="col s12 m12 l12 center">
				<form class="row" style="background:blue;">
					<div class=" col s12 m12 l12 center">
							<p class="flow-text center ">Subscribe Jefto News</p>
					</div>
				   <div class="input-field col s12 m4 l4 "style="margin:0px;padding:0px;">
				   	<input type='email' name='whoami' class="validate" id='whoami'style="margin:0px;padding:0px;" />
				   	<label for='whoami'style="margin:0px;padding:0px;" >Your Email</label>
				   </div>
				   <div class="input-field col s6 m4  l4" style="margin:0px;padding:0px;" >
				   	<select name='whoami_type' class="browser-default" style="margin:0px;padding:0px;">
				   	 	<option value=1>Sponsor</option>
				   	 	<option value=2>Organizer</option>
				   	 	<option value=3>Event Visitor</option>
				   	</select>
				   </div>
				   <div class="input-field col s6 m1 l1" style="margin:0px;padding:0px;" >
				   	<input type="submit" class="btn btn-success" name='submit' style="margin:0px;padding:0px;width:100%;height:100%">
				   </div>
				</form>
			</div>	


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
    <div class="modal-content">
      <h4>ERROR </h4>
      <p>SORRY WE ARE NOT ABLE TO PROCESS YOUR REQUEST .</p>
      <p>There might be a case that you already registed or some internal error .</p>
      <p>  THANK YOU , it will be more responcive soon  .</p>
    </div>
    <div class="modal-footer">
    <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat" id='disagree'>OKAY</a>
    </div>
  </div>


			<div class="col s12 m12 l12 center"  >
				
				   	<button class="btn waves-effect waves-light" type="submit" name="action">Submit Event
   						<i class="material-icons">send</i>
  					</button>
			
			</div>
		</div>
	</div>
</body>

 
 <!--  This part for  most trading categories  (#END ) -->
  <!--  Begining of footer part  (# START) -->
<?PHP require_once("footer.php"); ?>
</html>
