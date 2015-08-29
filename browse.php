

<?PHP
  require_once('device.php');
  require_once("browse_ctrl.php");
  require_once("header.php");
	//require_once("ep_ctrl.php");



?>
<style type="text/css">
   td img{
    width:100%;
    height: 100%;
    background: red;
  }
 
 .mtb0{
  margin-top: 0px;
  margin-bottom: 0px;
 }
  i{max-width: 24px;}
</style>
 <script >
var ev= <?php echo json_encode($event); ?>;

function eb_fire(eid ,ename,elogo,elocation,edate,eex,ebudget,eminpack)
{
  var def="<tr>\
            <td >\
              <div class='row margin-0'>\
                <div class='col s12 m12 l12'>\
                  <table >\
                    <tr>\
                      <td style='width:75px;height:75px;padding:0px;'>\
                          <img src="+elogo+" style='width:75px;height:75px;padding:0px;margin:0px;'>\
                      </td>\
                      <td>\
                        <div class='row'>\
                          <div class='col s12 m12 l12 margin-0'>\
                            <h5 class='mtb0'><i class=' material-icons' style='vertical-align:middle;'></i><a href='/profile.php?e="+eid+"&&p=111' target='_blank' class='ellipsis' >"+ename+" </a></h5>\
                          </div>\
                          <div class='col s12 m12 l12 margin-0'>\
                            <p class='mtb0' ><i class=' material-icons' style='vertical-align:middle;'>location_on</i><span style='vertical-align:middle;'>"+elocation+" </span></p>\
                          </div>\
                        </div>\
                      </td>\
                    </tr>\
                  </table>\
                </div>\
              </div>\
            </td>\
            <td>\
              <p>"+edate+"</p>\
            </td>\
            <td>\
              <p>"+eex+"</p>\
            </td>\
            <td>\
              <p>"+ebudget+"</p>\
            </td>\
            <td>\
              <p>"+get_offer($eid,$offer)+"</p>\
            </td>\
          </tr>";
  return def;
}
var month = new Array("Jan ","Feb ","Mar ","Apr ","May ","Jun ","Jul ","Aug ","Sept ","Oct ","Nov ","Dec ");
function el_fire(arr){
  var l = arr.length;
  var r='';
  for (var i = 0; i < l; i++) {
   d =  new Date(arr[i]['start_date']);
   var y = d.getFullYear();
    r+=eb_fire(arr[i]['event_id'],arr[i]['name'],arr[i]['logo'],arr[i]['city']+","+arr[i]['address'].substring(0,arr[i]['address'].indexOf("__")),month[d.getMonth()]+d.getDate()+", "+y,arr[i]['total_audience'],arr[i]['budget'],arr[i]['budget']);
  };
  return r;
}

</script>


<div class="container " id='content_cont' style=" min-height:100vh; " >
<div class="card-panel z-depth-2">
<table class="bordered responsive-table   ">
        <thead>
          <tr>
            <th data-field="id">Event Details</th>
            <th data-field="name"> Date</th>
            <th data-field="name">Expected Audience</th>
            <th data-field="price">event Budget</th>
            <th data-field="price">Package  Starting </th>
          </tr>
        </thead>
        <tbody>
          <script > document.write(el_fire(ev));</script>
        </tbody>
      </table>
</div>
</div>

<?php require_once('footer.php');?>
</body>
</html>


<script >
  

$(document).ready( function(){
  $(window).resize(function(){
      if((window.location.pathname =='/browse.php') && ($(window).width() < 992)){
        localStorage.setItem("redirected", true);
        window.location.assign(window.location.href.replace(window.location.pathname,'/m.browse.php'));
      }
      if((window.location.pathname =='/m.browse.php') && ($(window).width() > 992)){
        window.location.assign(window.location.href.replace(window.location.pathname,'/browse.php'));
      }
    });

});
</script>