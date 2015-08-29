

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
 th.custom::before{
  display: none;
  height: 0px;
  width: 0px;
 }
 td.custom img{
  height: 100%;
  width: 100%;
  min-height:70px;
  min-width: 70px;
  width:70px;
  height:70px;
  padding:0px;
  margin:0px;'
 }
 h5{
  text-transform:capitalize;
 }
  i{max-width: 24px; }

</style>
 <script >
var ev= <?php echo json_encode($event); ?>;

function eb_fire(eid ,ename,elogo,elocation,edate,eex,ebudget,eminpack)
{
  var def="<table style='padding-top:15px;'><tbody  style='padding:0px;margin:0px'>\
            <tr style='padding:0px;'>\
            <td data-field='idimg' class='custom' style='height:70px;width:70px;padding:0px;margin-top:0px;'><img src="+elogo+"  ></td>\
                <td class='mtb0 left' style='padding:0px;'>\
                  <div class='row mtb0'>\
                    <div class='col s12 m12 l12 mtb0'>\
                      <a href='/profile.php?e="+eid+"&&p=111' target='_blank' ><h5  class='mtb0 left ellipsis' ><i class=' material-icons' style='vertical-align:middle;'></i>"+ename+" </h5> </a>\
                    </div>\
                    <div class='col s12 m12 l12 mtb0 left'>\
                      <p class='mtb0 left' ><i class=' material-icons' style='vertical-align:middle;'>location_on</i><span style='vertical-align:middle;'>"+elocation+" </span></p>\
                    </div>\
                    <div class='col s12 m12 l12 mtb0'>\
                      <p class='mtb0 left' ><i class=' material-icons' style='vertical-align:middle;'>today</i><span style='vertical-align:middle;'>"+edate+" </span></p>\
                    </div>\
                  </div>\
                </td>\
                </tr>\
            </tbody></table>";

    var pvr ="<div class='row mtb0' style='padding-bottom:10px;margin-bottom:5px;border-width:1px;border-bottom-style:ridge;'><div class='col s6 m6 l6 mtb0'>\
                    <p class='mtb0'> Audience: "+eex+"</p>\
                  </div><div class='col s6 m6 l6 mtb0'>\
                    <p class='mtb0'> Budget: "+ebudget+"</p>\
                  </div><div class='col s6 m6 l6 mtb0'>\
                    <p class='mtb0'></p>\
                  </div><div class='col s6 m6 l6 mtb0'>\
                    <p class='mtb0'>Package min: "+eminpack+"</p>\
                  </div></div>";
  return def+pvr;

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




$(document).ready( function(){
  $(window).resize(function(){
      if((window.location.pathname =='/browse.php') && ($(window).width() < 992)){
        localStorage.setItem("redirected", true);
        window.location.assign(window.location.href.replace(window.location.pathname,'/m.browse.php'));
      }
      if((window.location.pathname =='/m.browse.php') && ($(window).width() > 992)){
        localStorage.setItem("redirected", true);
        window.location.assign(window.location.href.replace(window.location.pathname,'/browse.php'));
      }
    });

});
</script>


<div class="container " id='content_cont'style=" min-height:100vh; " >
<div class="card-panel z-depth-2">
<table class="bordered centered ">
          <tbody>
          <script > document.write(el_fire(ev));</script>
        </tbody>
      </table>
</div>
</div>

<?php require_once('footer.php');?>
</body>
</html>


