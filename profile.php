<?php require_once("ep_ctrl.php"); ?>

<?PHP
	require_once("header.php");
	//$acolor = array("#226666","#A8383B","#AAA239","#363376","#AA7039","#5D2971","#3C8C2F","#882E61","#EA0B8C","#f15725","#fdee20","#00a587","#20a8e0","#00ff1a");
 	$acolor = array("#f15725","#20a8e0","#00a587","#fdee20","#00ff1a","#EA0B8C","#882E61","#3C8C2F","#5D2971","#AA7039","#363376","#AAA239","#A8383B","#226666");
 	$clenth =  sizeof($acolor)-1;
 	function css_gen($l,$r){
	echo ".grad-gen{background: -webkit-linear-gradient(right, rgb(89, 214, 31,1) ".$l."% , rgb(255, 80, 0,1) ".$r."%);background: -o-linear-gradient(right,rgb(89, 214, 31,1) ".$l."% , rgb(255, 80, 0,1) ".$r."%);background: -moz-linear-gradient(right,rgb(89, 214, 31,1) ".$l."% , rgb(255, 80, 0,1) ".$r."%);background: linear-gradient(to right, rgb(89, 214, 31,1) ".$l."% , rgb(255, 80, 0,1) ".$r."%)";	
	}

$social_media =  array('google.com','facebook.com','linkdin.com','twitter.com','Facebook.com','def'=>'site');
$online_promotion = array("VentureBeat","TechCrunch","Forbes","Huffington Post","Yourstory",'def'=>'online site default');
$sponsor_needed =  array("Venue","Food","In media","In kind","Financial","Labor",'def'=>'sponsorship');
$offline_promotion = array("airplay","radio","Newspaper",'Bags','Conference Badges','def'=>'exposure default');	

 ?>

 <!--  END of of Navbar header  part  (# ENDT) -->
  <!--  This part for  profile  up  (#START) -->


<style type="text/css">

	.profile{
		height: 261px
	}
	.profile img{
		width: 100%;
	}

	.mfix{
		margin-bottom: 5px;
	}
	#pieChart{
		width: 100%;
		margin: auto;
	}
	.p0_lineGroups{
		margin: 0px;
	}
	.icon{
		position: relative;
	}
	
	.icon  img{
		width: 100%;
		height: 100%;
	}
	.icon-t{
		position: absolute;
		width: 100%;
		height: 100%;
		top:0%;
	}
	.icon-t p{
		margin-top: 50%;

	}
	.abs{
		position: absolute;
		top:0%;
	}
	.center_ml{
		margin-right:4.166%;
		margin-left:4.166%;
	}
	@media only screen and (max-device-width:480px){
		.center_ml{
			margin-left:0%;
			margin-right:0%;
		}
	}
	p span{
		font-size: large;
	}
	.w100{
		width: 100%;
	}

	.p0_pieChart{
		width: 100%;
		
		
	}
  	.chrt li:before {
  	content: "";
  	display: inline-block;
   	width: 10px;
   	height: 10px;
   	margin-right: 1px;
}
.pd0{
	padding: 0px;
}
.grad-gen{
	background: -webkit-linear-gradient(left, #59D61F  , #FF5000);
	background: -o-linear-gradient(right,#59D61F  ,#FF5000);
	background: -moz-linear-gradient(right,#59D61F , #FF5000 );
	background: linear-gradient(to right,#59D61F   ,#FF5000 );

}

.hc{
	color:#20a8e0;
}


</style>
<script >
var sjson= <?php echo json_encode(json_encode_strval($demo)); ?>;
var ijson= <?php echo json_encode(json_encode_ageval($age_group)); ?>;
function chart_rel(json) {
	var r = "<ul class=' chrt margin-0 pd0'>";
	var l = json.length;
	for (var i = 0; i < l; i++) {
		r+= "<style type='text/css'> .list"+i+":before{ background-color:"+json[i]['color']+"} </style>";
		r+="<li class='list"+i+"' style='margin:0px;padding:0px;color:"+json[i]['color']+"  '>"+json[i]['label']+"</li>";
	};
	r+="</ul>";
	return r;
}

</script>

<div class="container " >

<div class="row card-panel" style="background:#EEEEEE;">
	<div class="col s12 m12 m12 card-panel margin-0">
		<div class="row margin-0 pd0 ">
			<div class="col m12 s12 l12 card-panel margin-0" >
				<h5 class="font-ml  flow-text" style=" font-size:xx-large;color:#26A69A" id='e_n'><?php echo  $event[0][name] ?></h5>
			</div> 
			<div class="col s12 m4 l4 " style="margin-top:1rem">
				<div class="row margin-0 " > 
					<div class="col s2 m2 l2 "style='padding-right:0px;margin-right:0px;' >
						<div class="margin-0 icon pd0"style="left:2px;"> 
							<img src="def_img/sd_icon.png">
									<?php $time = time_fire($event[0][end_date]);  ?> 
									<?php $times = time_fire($event[0][start_date]);  ?> 
				 		</div>
				 	</div>
				 	<div class="col s8 m8 l8 dh center  "style='padding:0px;margin:0px;' >
				 		
				 		<h6   align="center"><?php $d = $time->diff($times); echo ($d->format('%d')+1).' days ';?></h6>
				 		<!-- <div class="col s12 m12 l12 grad-gen " id='dline'style='position:absolute;top:52%;height:2px;padding:0px;margin:0px;width:100%;display:none;'></div>-->
				 		<h6 class='center'align="center"><?php $d = $time->diff($times); if(!$d->format('%y')){echo $times->format('Y');}else{echo $times->format('Y').'-'.$time->format('y');} ?></h6>
				 	</div>
					<div class="col s2 m2 l2 right udh pd0"style='padding-left:0px;margin-left:0px;' >
				 		<div class="margin-0 pd0 icon">
				 			<img src="def_img/ed_icon.png">
				 			
				 		</div>
				 	</div>
				 	<div class="col s12 m12 l12 ">
				 			
				 	</div>
				 	<div  class="col s2 m2 l2 "style='padding-right:0px;margin-right:0px;' >
				 	<div class="row  " >
										<div class="col s12 m12 l12 margin-0 pd0 ">
											<h5 class=" margin-0 pd0" ><?PHP echo $times->format('d'); ?></h5>
										</div>
										<div class="col s12 m12 l12 margin-0 pd0 ">
											<h6 class="margin-0 pd0" ><?PHP echo $times->format('M'); ?></h6>
										</div>
									</div>

				 	</div>
				 	<div class="col s8 m8 l8 dh center  "style='padding:0px;margin:0px;' >
				 	</div>
				 	<div class="col s2 m2 l2 right udh pd0"style='padding-left:0px;margin-left:0px;' >
				 		<div class="row  " >
										<div class="col s12 m12 l12 margin-0 pd0 ">
											<h5 class=" margin-0 pd0"><?PHP echo $time->format('d'); ?></h5>
										</div>
										<div class="col s12 m12 l12 margin-0 pd0 ">
											<h6 class="margin-0 pd0"><?PHP echo $time->format('M'); ?></h6>
										</div>
									</div>
				 	</div>


				 	
				</div>
			</div> 
			
			<div class="col s12 m4 l4 " style="margin-top:1rem" >
				<div class="row center_ml">
					<div class="col s12 m12 l12 center ">
						<h5 class="font-ml  flow-text hc"> <span> Expected Attendees </span></h5>
						<h5><?php echo $event[0][total_audience] ?></h5>
					</div>
				</div>
			</div>

			<div class="col s12 m4 l4  right" style="margin-top:1rem" >
				<div class="row margin-0 pd0">
					<div class="col s12 m12 l12  ">
						<h5 class="font-ml  flow-text" style="display:inline-block;"> <span class='hc'>City : </span></h5><?php echo  $event[0][city]." , " .$event[0][country] ?>
					</div>
					<div class="col s12 m12 l12 ">
						 <h5 class="font-ml  flow-text" style="display:inline-block;margin:0px;"><span class='hc' >Address :</span></h5> <?php  $exp = explode("__", $event[0][address]); echo $exp[0].", ".$exp[1]; ?>
					</div>
				</div>
			</div>

		</div>
	</div>
	<div class="col  s12 m12 l12 card-panel">
		<div class="row">
			<div class="col s12 m4 l4 profile">
				<img src="<?php echo $event[0][logo] ?>">
			</div>
			<div class="col s12 m8 l8">
				<div class="row">
					<div class="col s12 m12 l12 over center">
						<h5 class="font-ml  flow-text hc">Event Description</h5>
					</div>
					<div class="col  s12 m12 l12 over center">
						<p style="margin-top:0px;"><?PHP echo $event[0][description] ?></p>
					</div>
					<div class="col s12 m12 l12 over center">
						<h5 class="font-ml  flow-text hc">Key Numbers</h5>
					</div>
					<div class="col s12 m12 l12 over2 ">
						<div class="row">
							<?php key_fire($keyn);?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col  s12 m12 l12 card-panel">
		<div class="row">
			<div class="col s12 m12 l12 center" style="margin-bottom:30px;">
				<h5 class="font-ml  center flow-text hc ">Jefto Specials</h5>
				<h6 class="center ">(will come soon)</h6>
			</div> 
			<div class="col s12 m4 l4 center ">
				<img src="def_img/jefto_score.png" >
				<h5>Jefto Score</h5>
			</div> 
			<div class="col s12 m4 l4 center ">
				<img src="def_img/Audience Richness.png" >
				<h5>Audience Richness</h5>
			</div>
			<div class="col  s12 m4 l4 center ">
				<img src="def_img/Sponsors Happiness Index.png" >
				<h5>Sponsor's Happiness Index</h5>
			</div>
			
		</div>
	</div>
	<div class="col s12 m12 l12 card-panel">
		<div class="row">
			<div class="col s12 m12 l12 center"> <h5 class="font-ml  flow-text hc ">Sponsorship needs </h5> </div> 
			<div class="col s12 m12 l12 center"> 
			<?php 
			$i=0;
			$l = sizeof($spon);
			$s = 3;
			if($l <= $s){
				$s = 12/$l;
			}
			foreach ($spon as $key => $value) {
					
					if( $i <1 &&$value[ftype] == 'Financial'){
						if($l+1 <= $s){
								$s = 12/($l+1);
							}
					echo "<div class='col s6 m".$s." l".$s." '><div class='row'><div class='col s12 m12 l12' > <img src='def_img/Financial.png'></div><div class='col s12 m12 l12' > <h6>".$value[ftype]."(".currency_fire($event[0][currency]).' '.$value[fund].")</h6></div></div></div>";
					$i++;
					}
					
					echo "<div class='col  s6 m".$s." l".$s." ' ><div class='row'><div class='col s12 m12 l12' ><img src='def_img/".img_linker($value[type],$sponsor_needed)."'></div><div class='col s12 m12 l12' > <h6> ".$value[type]."</h6></div></div></div>";
					
			}
		
			 ?>
			</div> 
		</div>
		
		
	</div>

	

	<div class="col s12 m12 l12 card-panel">
		<div class="row">
			<div class="col s12  m12  m12 blue hc">
				 <h5 class="font-ml  flow-text white-t bold ">Attendee's Demographics </h5> 
			</div>
			<div class="col s12 m12 l12 center card-panel ">
				<h5 class="font-med  flow-text hc ">Attendee's Description </h5>
			
				<p><?PHP echo $event[0][audience_description] ?></p>
			</div>
		
			<div class="col s12 m12 l12 card-panel">
				<div class="row  pd0 ">
					<div class="col s12 m6 l6 over center  " >
						<div class="row">
							<div class="col s12 m12 l12 center ">
								<h5 class="font-ml  flow-text center ">Expected Attandance</h5>
							</div>
							<div class="col s12 m12 l12 center ">
								<h5><?php echo $event[0][total_audience]?></h5>
							</div>
						</div>	
					</div> 
					<div class="col s12 m6 l6  ">
						<div class="row " >
							<div class="col s12 m12 l12 center  ">
								<h5 class="font-ml  flow-text center ">Gender Ratio</h5>
							</div>
							<div class="col s6 m6 l6 center " style=" padding-right:0px;">
								<img class="center " src="def_img/male.png">
								<h6  style="margin:0px;"> Male <?php echo $event[0][gender_ratio];?>%</h6>
							</div>
							<div class="col s6 m6 l6 center "style="padding-left:0px">
								<img  class="center " src="def_img/female.png">
								<h6 style="margin:0px;"> Female <?php echo 100-(int)$event[0][gender_ratio];?>%</h6>
							</div>
						</div>	
					</div>
				</div>
			</div>
			<div class="col m12 s12 l12">
				<div class="row margin-0 pd0 " id='notchart'>
					<div class="col s12 m6 l6 margin-0 pd0 " >
						<div class="row margin-0 pd0" style="position:relative;">
							<div class="col  s12 m12 l12  center " >
								<h5 class="font-ml  flow-text center ">Profile</h5>
							</div>
							<div class="col m8 s8 l8 chart" style="margin:0px;padding:0px" >
								<div id="pieChart" ></div>
							</div>
							<div class="col s4 m4 l4 clist" style="margin:0px;padding:0px;position:absolute;bottom:0;right:0px;">
								<script> document.write(chart_rel(sjson)); </script>
							</div>
						</div>
					</div>
					<div class="col s12 m6 l6 margin-0 pd0">
						<div class="row margin-0 pd0" style="position:relative;">
							<div class="col s12 m12 s12  center margin-0 pd0">
								<h5 class="font-ml  flow-text center ">Age</h5>
							</div>
							<div class="col m8  s8 l8 center chart" style="margin:0px;padding:0px">
								<div id="pieChart_age"></div>
							</div>
							<div class="col s4 m4 l4 clist" style="margin:0px;padding:0px;position:absolute;bottom:0;right:0px;">
								<script>document.write(chart_rel(ijson)); </script>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<div class="col s12 m12 m12 card-panel  ">
		<div class="row">
			<div class="col s12  m12 l12 blue hc">
				 <h5 class="font-ml  flow-text white-t bold ">Event Promotion</h5> 
			</div>
			<div class="col s12 m6 l6 center">
				<h5 class="font-ml  flow-text center ">Online</h5>
				<div class="row " style="margin:0px;margin-top:20px;">
					<?php link_fire($olp,4,$online_promotion); ?>
				</div>
			</div>
			<div class="col s12 m6 l6 center ">
				<h5 class="font-ml  flow-text center ">Offline</h5>
				<div class="row " style="margin:0px;margin-top:20px;">
					<?php offline_fire($olf,4,$offline_promotion); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="col s12 m12 l12 card-panel  ">
		<div class="row">
			<div class="col s12 m12 l12  blue  hc" >
				 <h5 class="font-ml  flow-text white-t bold ">Our Links</h5> 
			</div>
			<div class="col s12 m12 l12 " >
				<div class="row " style="margin:0px;margin-top:20px;">
					<?php site_link_fire($op,3,$social_media,$event[0]); ?>
				</div>
			</div>
		</div>
	</div>

	<div class="col  s12 m12 l12 card-panel">
		<div class="row">
			<div class="col s12 m12 l12  blue  hc" >
				 <h5 class="font-ml  flow-text white-t bold ">Offers </h5> 
			</div>
	   			<?php offer_fire($offer,$der,$od); ?>
	   </div>
	</div>

  
	<div class="col s12 m12 l12 center"  >
	<a class="waves-effect waves-light btn-large modal-trigger  " href="#cont_model"> <i class="material-icons left">contacts</i> Contact The Organizer</a>
	</div>
	<div id="cont_model" class="modal  modal-fixed-footer " >
	    <div class="modal-content"  style="margin:0px;padding:0px;">
	      <div class="row"  style="margin:0px;padding:0px;">
	      	<div class="col s12 m12 l12  blue white-t center  " style="margin:0px;">
	      		<h5>Contact <?php echo $event[0][name] ?></h5>
	      	</div>
	      	<div class="col s12 m6 l6">
	      		<div class="row">
	      			<div class=" col s12 m12 l12 center ">
	      				<img class='cimg'src="<?php echo $event[0][logo] ?>">
	      			</div>
	      			
	      			<div class="col s12 m12 l12 center  ">
	      				<h6><i class="material-icons left ">perm_identity</i><i class='left' style="width:111px" ><i class='right'  style="margin:0px">Name :</i></i><i class='left' ><?php echo $event[0][contact_name] ?></i></h6>
	      			</div>
	      			<div class="col s12 m12  l12 center  ">
	      				<h6><i class="material-icons left ">contact_phone</i><i class='left' style="width:111px" ><i class='right' style="margin:0px" >Personal Contact:</i></i><i class='left' ><?php echo $event[0][contact_mobile] ?></i></h6>
	      			</div>
	      			<div class="col s12 m12 l12 center  ">
	      				<h6><i class="material-icons left">contact_phone</i><i class='left' style="width:111px" ><i class='right' style="margin:0px" >Office Contact:</i></i><i class='left' ><?php echo $event[0][contact_office] ?></i></h6>
	      			</div>
	      		</div>
	      	</div>
	      	<style type="text/css">
	      		.input-field{
	      		margin: 0px;
	      		padding
	      	}
	      	.input-field input{
	      		margin: 0px;
	      	}
	      	.cimg{
	      		width:50%;
	      	}
	      	</style>
	      	<div class="col s12 m6 l6 ">
	      		<form class="row">
	      			<div class="input-field col s12 m12 l12 ">
          				<input placeholder="Name" name='name' id="first_name" type="text" class="validate">
          				<label for="first_name" data-error="wrong"></label>
       				 </div>
       				
       				 <div class="input-field col s12 m12 l12 ">
          				<input placeholder="Email Address" name='email' id="email" type="email" class="validate">
          				<label for="email" data-error="wrong"></label>
       				 </div>
       				 <div class="input-field col s12 m12 l12 ">
          				<input placeholder="Company Name" name='company' id="comp" type="text" class="validate">
          				<label for="comp" data-error="wrong" ></label>
       				 </div>
       				 <div class="input-field col s12 m12 l12 ">
          				<textarea placeholder="Message" name='message' id="message" type="text" class=" materialize-textarea validate"></textarea>
          				<label for="message" data-error="wrong"></label>
       				 </div>
       				 <div class="input-field col s12 m12 l12 ">
          				<button class="waves-effect waves-light btn"  id="send" type="submit" class="validate"><i class="material-icons right ">send</i>Send</button>
       				 </div>
	      		</form>
	      	</div>
	      	<div class="col s12 m12 l12" style="color:red;margin:0px;" id="Error1" >
		      <h5>ERROR </h5>
		      <p>SORRY WE ARE NOT ABLE TO PROCESS YOUR REQUEST .</p>
		      <p>  THANK YOU , it will be more responsive soon  .</p>
		    </div>
	      </div>
	    </div>

	    

	    <div class="modal-footer"  >
     		 <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat " >Exit</a>
    	</div>
	  </div>




</div>
 <!-- 	<div id="Error1" class="modal">
	    <div class="modal-content" style="background:red;">
	      <h4>ERROR </h4>
	      <p>SORRY WE ARE NOT ABLE TO PROCESS YOUR REQUEST .</p>
	      <p>There might be a case that you already registed or some internal error .</p>
	      <p>  THANK YOU , it will be more responcive soon  .</p>
	    </div>
	    <div class="modal-footer">
	    <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat" id='disagree'>OKAY</a>
	    </div>
	</div>-->

</div>
<?php

function site_link_fire($v,$s,$aimg,$event){
	
	if ($v[0][site_name] != ''){
		$l =  sizeof($v);
	}
	if(!empty($event[website])){
		$t_0 = array("site_name"=>$event[website],"link"=>$event[website]);
		array_unshift($v,$t_0);
		$l++;
	}
	
	if($l <= $s){
		$s = 12/$l;
	}
	
	link_help($v,$s,$aimg,$l,$l,0);
	

}
function link_fire($v,$s,$aimg){
	$l =  sizeof($v);
	if ($v[0][site_name] != ''){
	if($l <= $s){
		$s = 12/$l;
	}

	link_help($v,$s,$aimg,$l,$l,0);
	}		
}
function link_help($v,$s,$aimg,$l,$rs,$ap)
{	if($rs >0){
	if($rs <= $s){
		$s = 12/$rs;
	} 
	
	$next=0;
		echo "<div class='col s12 m12 l12'> <div class='row'>";
	for ($i=$ap; $i < $l; $i++) { 
		if ($v[$i][site_name] != ''){
		echo"<div class='col s".$s."  m".$s."  l".$s." center '><a href='http://".$v[$i][link]."' target='_blank' ><img src='def_img/".img_linker($v[$i][site_name],$aimg)."' ><h6 >".$v[$i][site_name]."</h6> </a></div>";
		$next = $next+$s;
		if($next ==12){ echo "</div></div>" ; $i++;link_help($v,$s,$aimg,$l,$l-$i,$i);
		$i=$l;}
	}
	}
	}	
}

function offline_fire($v,$s,$aimg){
	if ($v[0][names] != ''){	
	$l =  sizeof($v);
	
	
	if($l <= $s){
		$s = 12/$l;
	}
		offline_help($v,$s,$aimg,$l,$l,0);
		}	
}

// write recursion for them 
function offline_help($v,$s,$aimg,$l,$rs,$ap)
{
	if($rs >0){ 
	if($rs <= $s){
		$s = 12/$rs;
	}
	
	$next=0;
		echo "<div class='col s12 m12 l12'> <div class='row'>";
	for ($i=$ap; $i < $l; $i++) { 
		if ($v[$i][names] != ''){
		echo"<div class='col s".$s."  m".$s."  l".$s." left' ><a href='".$v[$i][names]."' target='_blank' ><img src='def_img/".img_linker($v[$i][names],$aimg)."' ><h6 >".$v[$i][names]."</h6> </a></div>";
		$next = $next+$s;
		if($next ==12){ echo "</div></div>" ;$i++;offline_help($v,$s,$aimg,$l,$l-$i,$i);
		$i=$l;}
	}
	}
	}	
}


function img_linker($name,$array){
		//echo"<script>alert('".$name.$array."')</script>";
	if (in_array($name, $array)) {
		//echo'<script>alert('.$name.')</script>';
		return $name.'.png';
   	}
   	else return $array[def].'.png';
}

function time_fire($d){
	$date = new DateTime($d);
	return $date;
}

function currency_fire($cr){
	$c= array("USD"=>"$","GBP"=>"&#8364","CAD"=>"CA$","EUR"=>"&#8364","INR"=>"&#8377","AUD"=>"A$");
	return $c[$cr];
}

function key_fire($v){
	$l =  sizeof($v);
	//if($l > )
	$s =4;
	if($l < $s){
		$s = 12/$l;
	}
   for ($i=0; $i < $l; $i++) { 
   		key_fire_help($v[$i][type_count],$v[$i][type_name],$s);
   }
}

function key_fire_help($num,$name,$s){ 
	echo "<div class='col s".$s."  m".$s."  l".$s." '> ";
	?>
		<div class="row  ">
			<div class="col s12 m12 l12 center">
				<h5 class="margin-0  font-ml  flow-text center"><?php echo $num; ?></h5>
			</div>
			<div class="col s12 m12 l12 center">
				<h5 class="margin-0 font-ml  flow-text center"><?php echo $name ;?></h5>
			</div>
		</div>
	</div>
<?php }

function offer_fire( $v ,$der,$rel){
   $l =  sizeof($v);
   for ($i=0; $i < $l; $i++) { 
   	?>
   	<div class="col s12 m6 l6">
   	<ul class="collection with-header">
        <li class="  collection-header  " style="background-color:#8d6e63;">
        	<div class="row center">
        		<div class="col s12 m12 l12">
        			<h5 class="font-ml flow-text center white-t"><?php echo $v[$i][offer_name];?></h5>
        		</div>
        		<div class="col  s12 m12  l12 white-t">
        			<h6><?php echo currency_fire($v[$i][currency]).' '.$v[$i][cost];?></h6>
        		</div>
        		<div class="col s12 m12 l12 white-t pd0 margin-0">
        			<div onclick='setdrop(this);' >
        				<i class='material-icons '>description</i> 
        				<div class="card-panel" id='descme' style='width:100%;margin:0px;padding:0px;position:absolute;display:none;background:white;left:0px;z-index:2'>
							<div class='row card-panel' style='background:rgba(34,53,53,0);overflow:none;width:100%;margin:0px;padding:0px;'>
								<div class='col s12 m12 s12' style='background:rgba(34,53,3,0); color:green;margin-bottom:10px;'>
								</div>
							    <div  id='desc' class='col s12 m12 s12'   style='word-wrap: break-word;color:black;'> 
							    	<?php echo $v[$i][description] ?> 
							    </div>
							    <div class='col s12 m12 s12 center ' id ='state'> 
							     	<button style="" onclick='hide(this);' class="btn">Okay</button> 
							    </div>
							</div>
        				</div>
        			</div>
        			<h6><?php //echo $v[$i][description];?></h6>
        		</div>
        	</div>
        </li>
	    <?php del_fire($der,$rel,$v[$i][offer_id]); ?>
      </ul>
      </div>
<?php
   }
}







function del_fire($v,$rel,$pk){
 $l =  sizeof($v);
   for ($i=0; $i < $l; $i++) { 
   		echo "<li class='collection-item'>".$v[$i][deliverable_name]."   (".rel_fire($pk,$v[$i][deliverable_id],$rel).")</li>";
   	}  	
}

function rel_fire($oid,$did,$rel){
	$l =  sizeof($rel);
	for ($i=0; $i <$l ; $i++) { 
		if($rel[$i][offer_id] == $oid && $rel[$i][deliverable_id] == $did )
			return $rel[$i][quantity];
	}
	return 0;
}


function json_encode_strval($v){
	$content = array();
	$l =  sizeof($v);
   	for ($i=0; $i < $l; $i++) { 
   		//echo $GLOBALS['clenth']/($i+1)  . "  DIVIDI   ";
	//$label = array('label' =>$v[$i][type_name] ,"value" =>$v[$i][type_value],"color"=>"red" );
	//array_push($content, $label);
	array_push($content,array('label' =>$v[$i][type_name] ,"value" =>(int)$v[$i][type_count],"color"=>$GLOBALS['acolor'][$i]  ));
	}	
	return $content;				
}

function json_encode_ageval($v){
	$age_rel = array("0"=>"11 below ","12"=>"12-18 Years old","18"=>"18-25 Years old","25"=>"25-40 Years old","40"=>"40-65 Years old","65"=>"65 above");
	$content = array();
	$l =  sizeof($v);
   	for ($i=0; $i < $l; $i++) { 
	//$label = array('label' =>$v[$i][type_name] ,"value" =>$v[$i][type_count],"color"=>"red" );
	array_push($content,array("label" =>$age_rel[$v[$i][low_age]] ,"value" =>(int)$v[$i][ratio],"color"=>$GLOBALS['acolor'][$i]  ));
	}
	return $content;					
}





?>


 <!--  This part for  profile  up   (#END ) -->
<?PHP require_once("footer.php"); ?>
</body>
</html>
<script src="//cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js"></script>
<script src="d3pie.min.js"></script>
<script>
var width= $(".chart").width();
var height = width;
$(document).ready( function(){
  $(window).resize(function(){
       width= $(".chart").width(); 
       height = width;
    });
  document.title = $("#e_n").html();
});

  $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
    $('input#input_text, textarea#textarea1').characterCounter();
  });
     
$('#Error1').hide();
$(function () {

        $('form').on('submit', function (e) {

          e.preventDefault();
        	$.ajax({
            type: 'post',
            url: 'contact.php',
            data: $('form').serialize(),
            success: function (data) {
            	//$('#modal1').closeModal();
            	
            	  if(data =="true"){
            	  	$('.modal-footer').css('background-color','#ffffff');
            	  	$('#cont_model').closeModal();
					Materialize.toast('<span style="text-align:center;margin:auto;">Well done</span><a class=&quot;btn-flat yellow-text&quot; href=&quot;#!&quot;><a>', 5000);
            	  	
            	  }
            	  else{
            	  	//Materialize.toast('<span style="text-align:center;margin:auto;">Sorry we got some problem</span><a class=&quot;btn-flat yellow-text&quot; href=&quot;#!&quot;>Undo<a>', 5000);
            	  $('#Error1').show();
            	  $('.modal-footer').css('background-color','red');
            	  }
            }
        });
});
});












function setup(id,json){
var pie = new d3pie( id, {
	"header": {
		"title": {
			"text": "",
			"fontSize": 24,
			"font": "open sans"
		},
		"subtitle": {
			"text": "",
			"color": "#999999",
			"fontSize": 12,
			"font": "open sans"
		},
		"location": "pie-center",
		"titleSubtitlePadding": 1
	},
	"footer": {
		"display":"none",
		"color": "#999999",
		"fontSize": 10,
		"font": "open sans",
		"location": "bottom-center"
	},
	"size": {
		"canvasWidth": width,
		"canvasHeight":height,
		"pieOuterRadius": "100%"
	},
	"data": {
		"sortOrder": "value-desc",
		 "content":json
	},
	"labels": {
		"outer": {
			"format": "none",
			"word-wrap":"break-word",
			"pieDistance": 1
		},
		"inner": {
			"hideWhenLessThanPercentage": 1
		},
		"mainLabel": {
			"word-wrap":"break-word",
			"fontSize": 12,

		},
		"percentage": {
			"color": "#ffffff",
			"decimalPlaces": 0
		},
		"value": {
			"color": "#dfdfdf",
			"fontSize": 12,
			" word-wrap": "break-word"

		},
		"lines": {
			"enabled": true
		},
		"truncation": {
			"enabled": false
		}
	},
	"tooltips": {
		"enabled": true,
		"type": "placeholder",
		"fontSize": 24,
		"string": "{label}"
	},
	"effects": {
		"pullOutSegmentOnClick": {
			"effect": "linear",
			"speed": 400,
			"size": 8
		}


	},
	"misc": {
		"gradient": {
			"enabled": true,
			"percentage": 100
		},
		"pieCenterOffset": {
			"x": 0,
			"y": 0
		}
	},
	"callbacks": {}
});
return pie;
}




$('.clist').hide();
var done = true;
$(window).scroll(function(event) {
	if($("#pieChart").offset().top < $(window).scrollTop() + $(window).outerHeight()) {
    	if(done){
    		//alert(sjson.length );
    		if((sjson[0]['label']  !=null && sjson[0]['label'].length >0)  || (ijson[0]['label']  !=null && ijson[0]['label'].length >0)){
	    	setup("pieChart",sjson);
			setup("pieChart_age",ijson);
			$('.clist').show();
	    	done=false;
	    	}
	    	else{
	    		$('#notchart').hide();
	    	}
    	}
	} else {
    // something when the .target div invisible
	}
});

if($("#pieChart").offset().top < $(window).scrollTop() + $(window).outerHeight()) {
    if(done){
    	if((sjson[0]['label']  !=null && sjson[0]['label'].length >0)  || (ijson[0]['label']  !=null && ijson[0]['label'].length >0)){
	    setup("pieChart",sjson);
		setup("pieChart_age",ijson);
		$('.clist').show();
	    done=false;
		}
		else{
			$('#notchart').hide();
		}
    }
   
}
$(window).ready(function(){
	//$("svg").attr('class','pd0 margin-0 w100');
	//console.log($(".pieChart").children('.p0_pieChart'));
		$("#dline").attr('style','position:absolute;top:52%;height:2px;padding:0px;margin:0px;width:100%;');
	//$("svg").children('g')[0].attr('class',$("svg").children('g')[0].attr('class')+'pd0 margin-0 w100');

})

</script>

<script src="offer.js"></script>
