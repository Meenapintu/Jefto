<?

isset)&&
 )

!empty($_POST['event_name__'])&&!empty($_POST['category__'])&&!empty($_POST['genre__'])&&!empty($_POST['startdate__'])&&
!empty($_POST['enddate__'])&&!empty($_POST['city__'])&&!empty($_POST['country__'])&&!empty($_POST['scope__'])
&&!empty($_POST['frequency__'])&&!empty($_POST['organization__'])&&!empty($_POST['event_email__'])&&!empty($_POST['currency__'])
&&!empty($_POST['sponsors__'])&&!empty($_POST['total_audience_count__'])&&!empty($_POST['contact_name__'])&&!empty($_POST['contact_email__'])&&!empty($_POST['contact_mob__'])
?>

<div class='row'><div class='col s12 m12 l12'><p class='center'> 
Thank you for submitting your event</p></div><div class='col s12 m12 l12'><p class='center'>
  We will shortly mail you your event's profile page. You can send it as a link in your proposal too. In a week or so, we will launch our beta version and after that you will be getting sponsors call surely if they like your event.</p></div></div>




<script type="text/javascript">
	
	function check_requred (name) {

		var x= document.getElementsByName(name);
		alert(x);
	}

</script>



ename,elogo,elocation,edate,eex,ebudget,eminpack

<?php
$query = "SELECT event.event_id,event.name,event.city,event.address,event.country,event.website,event.start_date,event.end_date,event.link_for_req,event.budget,eventplus.logo,,eventplus.total_audience   FROM event left  JOIN eventplus ON event.event_id = eventplus.event_id  WHERE event.event_id=$1";

?>




<tr>
            <td >
            	<div class="row margin-0">
                <div class="col s12 m12 l12">
                  <table >
                    <tr>
                		  <td style="width:75px;height:75px;padding:0px;">
                		      <img src="def_img/jefto.png" >
                		  </td>
                		  <td>
                        <div class="row">
                          <div class="col s12 m12 l12 margin-0">
                            <h5 class="mtb0"><i class=" material-icons" style='vertical-align:middle;'></i> Event Name </h5>
                          </div>
                          <div class="col s12 m12 l12 margin-0" >
                           <h6 class="mtb0" > <i class="material-icons "style='vertical-align:middle;' >today</i> <span style='vertical-align:middle;'>event date </span></h6>
                          </div>
                          <div class="col s12 m12 l12 margin-0">
                				    <h6 class="mtb0" ><i class=" material-icons" style='vertical-align:middle;'>location_on</i><span style='vertical-align:middle;'>event location </span></h6>
                				  </div>
                        </div>
                      </td>
                    </tr>
                  </table>
            		</div>
              </div>
            </td>
            <td>
              find
            </td>
            <td>
              find
            </td>
            <td>
              find
            </td>
            <td>
              find
            </td>
          </tr>




