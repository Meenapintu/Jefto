
 <!-- Butten start div (#START) -->
<?PHP require_once("header.php"); ?>
<!-- End of button Div (#END) -->

 <div class="container-fluid">
 <div class="row" style="margin:0px;">
	<div class='col s12 m12 l12' style="background:#E0E0E0;">
		<div class="container" >
			<div class="row" style="background:#EEEEEE;">
				<div class="col s12 m12 l12 card-panel bg-trance ">
					<div class="row">
						<!-- <div class="col s12 m2 l2 center">
							<p style="font-size:x-large"> </p>
						</div> -->
						<div class="col s12 m12 l12 center font-med  flow-text" style="margin:0px;margin-bottom:5px;margin-top:5px;width:100%" >
							We are event listing company who analyse the data of an event and make it easier for 
							sponsors to advertise their product.Today there are so many events that companies find 
							it hard to which they should sponsor We make the sponsorship process easier for both 
							the event organizer and marketing manager.
						</div>

					</div>
						
				</div>
				<div class="col s12 m12 l12 center card-panel bg-trance">
					<div class="row center"  >
						<div class="col s12 m12 l12 center ">
							<div style="width:80%;" class="center " onclick="resize(this)">
								<div class=" video-container no-controls ">
			         			 <iframe class="center"  src="https://www.youtube.com/embed/7TpD92HEGlI?rel=0" frameborder="0" rel="0" allowfullscreen></iframe>
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
		<a name="whatwedo"></a>
			<div class="row bott-margin-0">
				<div class="col s12 m12 l12 center card-panel bg-trance">
					<div class="row bott-margin-0">
					   <div class="col s12 m12 l12  center">
					   						<!--<div class="home_col center "> </div>-->
					   							<p class="flow-text center white-t font-ml">Cool figures which we compute after analyzing</p>
					   						
					   </div>
					   <div class="col s12 m12 l12"> 
					   					<div class="row ">
					   						<div class="home_col center bg-trance col s4 m4 l4" >
					   							<div class=" row">
					   								<div class="col s12 m12 l12 center">
					   									<i class="material-icons  large" style="font-size: 100px;color:#EF6C00;">grade</i>
					   								</div>
					   								<div class="col s12 m12 l12 center ">
					   									<p class="center font-med " style="color:#9E9E9B;">Event Effectiveness Index</p>
					   								</div>
					   							</div>
					   						</div>
					   						<div class="home_col center bg-trance col s4 m4 l4 " >
					   							<div class=" row">
					   								<div class="col s12 m12 l12 center ">
					   									<i class="material-icons  large" style="font-size: 100px;color:#EF6C00;">grade</i>
					   								</div>
					   								<div class="col s12 m12 l12 center ">
					   									<p class="center font-med" style="color:#9E9E9B;">Audience Richness</p>
					   								</div>
					   							</div>
					   						</div>
 
					   
					   						<div class="home_col center bg-trance col s4 m4 l4"  >
					   							<div class=" row">
					   								<div class="col s12 m12 l12 center">
					   									<i class="material-icons  large " style="font-size: 100px;color:#EF6C00;">grade</i>
					   								</div>
					   								<div class="col s12 m12 l12 center">
					   									<p class="center font-med " style="color:#9E9E9B;"> Sponsorship Readiness Index</p>
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
								<p class="flow-text center white-t">Liked the idea? Wanna get in touch? </p>
						</div>
					   <div class="input-field col s12 m4 l4 ">
					   	<input type='email' name='whoami' class="validate" id='whoami' />
					   	<label for='whoami'style="margin:0px;padding:0px;" >Your Email</label>
					   </div>
					   <div class="input-field col s6 m3  l4 "  id='select'  >
					   	<select name='whoami_type' id='select'>
					   	 	<option value=1>Sponsor</option>
					   	 	<option value=2>Organizer</option>
					   	 	<option value=3>Event Visitor</option>
					   	</select>
					   </div>
					   <div class="input-field col s6 m2 l2"  id ='button'  >
					   	<input type="submit" class="btn btn-success" name='submit' >
					   </div>
					</form>
				</div>

				<div class="col s12 m12 l12 center  card-panel bg-trance" style="margin-top:20px;" >
					<a href="form.php" > 
					   <button  class=" waves-effect waves-light btn-large center" type="button" name="action">
	   						<i class="material-icons  right">send</i> Submit Event
	  					</button>
	  				</a>
				</div>
			</div>
		</div>
	</div>
</div>
</div>


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
	  
</body>
</html>
<script >

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
            	//alert(data=='true');
            	  if(data=='true'){
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


				$("#button").css('height',($("#select").height()+'px'));
				$("#select").on('hover',function () {
					// body...
					$(this).css('border-color','#26A69A');
				});
				$(document).ready(function() {
   				 $('select').material_select();
 				 });
</script>