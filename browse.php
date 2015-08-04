<?PHP
	require_once("header.php");
	require_once("ep_ctrl.php");


?>
<div class="container" >

<table>
        <thead>
          <tr>
              <th data-field="id">Event Details</th>
              <th data-field="name">Date</th>
              <th data-field="price">Expected Audience</th>
              <th data-field="price">event Budget</th>
              <th data-field="price">No of packets</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>
            	<div class="row">
            		<div class="col s6 m6 l6">
            		   <img src="def_img/jefto.png" style="background:rgba(34,43,34,0.5)">
            		 </div>
            		<div class="col s6 m6 l6"> 
            			<div class="row">
            				<div class="col s12 m12 l12">
            				<i class="large material-icons">location_on</i>
            				</div>
            				<div class="col s12 m12 l12">
            						<img src="def_img/flag.svg" style="background:rgba(34,43,34,0.5)">
            				</div>
            				<div class="col s12 m12 l12">
            					<i class="large material-icons green">verified_user</i>
            				</div>
            				<div class="col s12 m12 l12">
            				<i class="large material-icons green">today</i>
            				<i class="large material-icons green">public</i>
            				</div>
            			</div>
            		</div>
            		<div class="col s12 m12 l12">
            			EVENT NAME
            		</div>
            	</div>
            </td>


            <td>Eclair</td>
            <td>$0.87</td>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>$3.76</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
          </tr>
        </tbody>
      </table>
</div>
</body>