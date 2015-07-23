

<?PHP
	require_once("header.php");
	require_once("ep_ctrl.php");
 ?>

 <?php

$query = "SELECT event.event_id,event.name,event.city,event.address,event.country,event.frequency,event.website,event.email,event.organizer,event.start_date,event.end_date,event.link_for_req,event.description,event.team_descritpion,event.budget,event.tags,eventplus.logo,eventplus.total_audience,eventplus.gender_ratio,eventplus.audience_description,event_contact.contact_name,event_contact.contact_email,event_contact.contact_mobile,event_contact.contact_office   FROM event left  JOIN eventplus ON event.event_id = eventplus.event_id left  JOIN event_contact ON event_contact.event_id=event.event_id WHERE event.event_id=$1";
$query = "SELECT sponsorship.event_id, sponsorship.type,sponsorship_finance.fund from sponsorship  left JOIN sponsorship_finance  on sponsorship.event_id=sponsorship_finance.event_id where sponsorship.event_id=$1";
$query = "SELECT event_id,low_age,ratio from age_group where event_id=$1";
$query = "SELECT event_id,type_name,type_count from key_numbers where event_id=$1";
$query = "SELECT event_id,type_name,type_count from demographics where event_id=$1";
$query = "SELECT event_id,type_name,type_value from audience_demographics where event_id=$1";
$query = "SELECT event_id,site_name,link from online_profile where event_id=$1";
$query = "SELECT event_id,site_name,link from onlinepromotion where event_id=$1";
$query = "SELECT event_id,names,description from offlinepromotion where event_id=$1";
$query = "SELECT event_id,offer_id,offer_name,cost,currency,description,total from offers where event_id=$1";
$query = "SELECT event_id,deliverable_id,deliverable_name,description,deliverable_image from deliverable where event_id=$1";
$query = "SELECT event_id,offer_id,deliverable_id,quantity from offer_deliver where event_id=$1";


//echo count($v);
//echo"all done";
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
	.over{
		height: 191px
	}
	.over2{
		height: 70px
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
</style>

<div class="container " >

<div class="row card-panel">
	<div class="col m12 card-panel margin-0">
		<div class="row">
			<div class="col m12 s12 l12 card-panel margin-0" >
				<h5 style="color:green"><?php echo  $event[0][name] ?></h5>
			</div> 
			<div class="col m4">
				<div class="row">
					<div class="col s6 m6 l6">
				 		<p> Start Date</p>
				 	</div>
					 <div class="col s6 m6 l6">
						<p><?php echo  $event[0][start_date] ?></p>
					</div>
					<div class="col s6 m6 l6">
				 		<p> End Date</p>
				 	</div>
					 <div class="col s6 m6 l6">
						<p><?php echo  $event[0][end_date] ?></p>
					</div>
				</div>
			</div> 
			<div class="col m4">
				<div class="row">
					<div class="col s12 m12 l12">
						<h5> Event Budget</h5>
					</div>
					<div class="col s12 m12 l12">
						<p><?php echo  $event[0][budget]." " .$event[0][currency] ?></p>
					</div>
				</div>
			</div>
			<div class="col m4 ">
				<div class="row">
					<div class="col m12 green ">
						<p><?php echo  $event[0][city]."," .$event[0][country] ?></p>
					</div>
					<div class="col m12  yellow">
						<p><?php echo  $event[0][address] ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col m12 card-panel">
		<div class="row">
			<div class="col m4 green profile">
				<img src="<?php echo $event[0][logo] ?>">
			</div>
			<div class="col m8">
				<div class="row">
					<div class="col m12 yellow over center">
						<p  ><?PHP echo $event[0][description] ?></p>
					</div>
					<div class="col m12 over2 red">
						<div class="row">
							<div class="col m4">
								15
							</div>
							<div class="col m4">
								25
							</div>
							<div class="col m4">
								8
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col m12 blue card-panel">
		<div class="row">
			<div class="col m3">
				Jefto Score
			</div> 
			<div class="col m3">
				Price index
			</div> 
			<div class="col m3">
				successing predicting model
			</div>
			<div class="col m3">
				Audience Richness
			</div>
		</div>
	</div>
	<div class="col m12 green card-panel">
		<div class="row">
			<div class="col m12 center"> <h5>Our Needs </h5> </div> 
			<div class="col m12 center"> 
			<?php 
			$i=0;
			foreach ($spon as $key => $value) {
					
					if( $i <1 &&$value[ftype] != NULL){
					echo "<div class='col m3 '>  <h5>".$value[ftype]."</h5><h5>".$value[fund]."</h5><p>".$event[0][currency]."</p></div>";
					$i++;
					}
					echo "<div class='col m3' > <h5> ".$value[type]."</h5></div>";
			
			}
		
			 ?>
			</div> 
		</div>
		
		
	</div>

	<div class="col m12 blue card-panel">
		ATTENDEE DEMOGRAPHICS
	</div>

	<div class="col m12 red card-panel">
		<div class="row">
			<div class="col m12 ">
				<h5>Description about atendee</h5>
			</div>
			<div class="col m12 ">
				<p><?PHP echo $event[0][audience_description] ?></p>
			</div>
		</div>
		
	</div>

	<div class="col m12 card-panel">
		<div class="row">
			<div class="col m12 ">
				<div class="row">
					<div class="col m6 over blue" style="background:url(def_img/world-map.png);background-repeat:no-repeat;">
						<div class="row">
							<div class="col m12 center ">
								<h5>Expected Attandance</h5>
							</div>
							<div class="col m12 center ">
								<h5><?php echo $event[0][total_audience]?></h5>
							</div>
						</div>	
					</div> 
					<div class="col m6 over ">
						<div class="row">
							<div class="col m12 center ">
								<h5>ATTENDEE GENDER</h5>
							</div>
							<div class="col s6 m6 l6 red  center ">
								<h5><?php echo $event[0][gender_ratio];?></h5>
							</div>
							<div class="col s6 m6 l6 blue center ">
								<h5><?php echo 100-(int)$event[0][gender_ratio];?></h5>
							</div>
						</div>	
					</div>
				</div>
			</div>
			<div class="col m12 s12 ">
				<div class="row">
					<div class="col m6 s12  chart" >
						<div class="row">
							<div class="col m12 s12 blue center ">
								<p> ATTENDEE PROFILE  </p>
							</div>
							<div class="col m12  s12 center ">
								<div id="pieChart"></div>
							</div>
						</div>
					</div>
					<div class="col m6 chart">
						<div class="row">
							<div class="col m12 s12 blue center ">
								<p> ATTENDEE AGE </p>
							</div>
							<div class="col m12  s12 center ">
								<div id="pieChart_age"></div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<div class="col m12 card-panel  ">
		<div class="row">
			<div class="col m12 red">
				<p>marketing</p>
			</div>
			<div class="col m6 green">
				<p>Online</p>
			</div>
			<div class="col m6 yellow">
				<p>Offline</p>
			</div>
		</div>
	</div>
	<div class="col m12  green card-panel">
	our links 
	</div>

	<div class="col m12 card-panel">
		<div class="row">

	   <?php offer_fire($offer,$der,$od); ?>
	   </div>
	</div>

</div>


</div>
<?php
function offer_fire( $v ,$der,$rel){
   $l =  sizeof($v);
   for ($i=0; $i < $l; $i++) { 
   	?>
   	<div class="col m6">
   	<ul class="collection with-header">
        <li class="collection-header blue">
        	<div class="row center">
        		<div class="col m12 ">
        			<h5><?php echo $v[$i][offer_name];?></h5>
        		</div>
        		<div class="col m12 ">
        			<h6><?php echo $v[$i][cost]." ".$v[$i][currency];?></h6>
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
	return null;
}

function json_encode_strval($v){
	$content = array();
	$l =  sizeof($v);
   	for ($i=0; $i < $l; $i++) { 
	//$label = array('label' =>$v[$i][type_name] ,"value" =>$v[$i][type_value],"color"=>"red" );
	//array_push($content, $label);
	array_push($content,array('label' =>$v[$i][type_name] ,"value" =>(int)$v[$i][type_count],"color"=>"red") );
	}	
	return $content;				
}

function json_encode_ageval($v){
	$age_rel = array("0"=>"11 below ","12"=>"12-18 Years old","18"=>"18-25 Years old","25"=>"25-40 Years old","40"=>"40-65 Years old","65"=>"65 above");
	$content = array();
	$l =  sizeof($v);
   	for ($i=0; $i < $l; $i++) { 
	//$label = array('label' =>$v[$i][type_name] ,"value" =>$v[$i][type_count],"color"=>"red" );
	array_push($content,array("label" =>$age_rel[$v[$i][low_age]] ,"value" =>(int)$v[$i][ratio],"color"=>"red"));
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
var height = 350;
$(document).ready( function(){
  $(window).resize(function(){
      var width= $(".chart").width();  
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
		"color": "#999999",
		"fontSize": 10,
		"font": "open sans",
		"location": "bottom-center"
	},
	"size": {
		"canvasWidth": width,
		"canvasHeight":height,
		"pieOuterRadius": "70%"
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
var sjson= <?php echo json_encode(json_encode_strval($demo)); ?>;
var ijson= <?php echo json_encode(json_encode_ageval($age_group)); ?>;
console.log(sjson);

setup("pieChart",sjson);
setup("pieChart_age",ijson);


</script>


