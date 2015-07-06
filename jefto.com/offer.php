<!DOCTYPE html>
<html>
<head>
  <title>Jefto.com </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="index.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="forms.css">
<script src="http://code.jquery.com/jquery-2.1.4.js"></script>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 0px;
}
/*.col-md-6 , .col-md-3 {
	position: relative;
	margin: 0px;
	padding: 0px;
	
	display: inline-block;
}
.col-md-12{

}
.row{
	padding: 0px;
	margin: 0px;
}
input{
	position: relative;
	margin: 0px;
	width: 100%;
}*/
#add_pack,.register_pack,#add_benifit{
    display: none;
}
</style>

<script type="text/javascript">
 
 //var pack_count =0;
 var deliver_count =1;
 var pack_array = [];
 var deliver_array =[];
 /*
 this the while matrix has only one data reference to send 
 suppose offers
     p1   p2   p3   p4  p5   p6
 d1  p1d1
 d2  p1d2
 d3
 d4
 d5
 d6

 why don't keep class name as pack reference and id as deliver reference :
 yes it could be a best algorithm to handle remove and add element * yeah it good 
 */


 var packs = new Array('Gold','Silver','Platinum');
 var delivers = new Array("Banners","Special Gate","Dedicated stand", "Spacial announcement" ,"Announcement on TV Radio","name on Tshirt","Name of promotional event","Special social network post", "name on brochure / pamphlet","name on bus ");
var pack_next=0;
var deliver_next=0;

function pack_core(stri,packn){
	var pack = "<th id ='packth' class='"+stri+"'>";
        pack+= "<div contentEditable=true  >package name</div>";
        pack+= "<input type='hidden' name='"+packn+"' ></input>";
	    pack+= "<div contentEditable=true>  price </div>";
      pack+= "<input type='hidden' name='price_"+packn+"' ></input>";
      pack+= "<div >  package description </div>";
      pack+= "<input type='hidden' name='descritpion_"+packn+"' ></input>";
      pack+= "<div>  No of packege  </div>";
      pack+= "<input type='hidden' name='pack_number_"+packn+"' ></input>";
      pack+=  "<button type='button' id='remove_package' onclick='rmpack(this)' > Delete package</button>";
    	pack+= "</th>";
        pack+= "<th id ='add_pack'></th>";
    return pack;
}
function pack_register(stri,name){
	var pack_deliver = "<td id='pack_del_td' class='"+stri+"'>";
        pack_deliver+= "<div>";
        pack_deliver+= "<input type='int'placeholder='0' name='"+name+"' onclick='pack_name(this)'></input>";
    	pack_deliver+= "</div>";
        pack_deliver+= "</td>";
        pack_deliver+= "<td class = 'register_pack' id='register_pack'></td>";
    return pack_deliver;
}

function pack_class_name(){
        pack_next++;
        pack_array.push(pack_next);
        return pack_next+"___packclassref";
}

function pack_name (next) {
  //return "package___"+next;
  return "package___[p"+next+"]";
}
function deliver_name(next){
  return "deliver___[d"+next+"]";
  //return "deliver___"+next;
}
function element_name (p,d) {
  //alert(p+" "+d);
  return "element___[p"+p+"][d"+d+"]";
  //return pack_name(p)+"___"+deliver_name(d);
}
function pack_class_name_deliver(addnum){
  return addnum+"___packclassref";
}



function care_pack(number){
  var index = pack_array.indexOf(number);
  if (index >= 0) {
  pack_array.splice(index,1);
  }
}

function care_deliver(number){
  var index = deliver_array.indexOf(number);
  if(index >= 0){
    deliver_array.splice(index,1);
  }
}

// 

/*
need to create 2D array of input value as required 
or name depend on value of opper offername and 
so what should i do ?
single array of element's right 
function care_delive(e){
    for (var i = 0; i < pack_count; i++) {
      $()
    };
}*/
function add_package(){
    //alert("adding");
    var cnme = pack_class_name();
    $("#add_pack").replaceWith(pack_core(cnme,pack_name(pack_next)));

      var i=0;
    $(".register_pack").each(function(){
            $(this).replaceWith(pack_register(cnme,element_name(pack_next,deliver_array[i])));
              i++;

    });

    //$(".register_pack").replaceWith(pack_register(cnme,element_name(pack_next,deliver_next)));
    //pack_count++;
}
function rmpack (e) {
  var str = $(e).parent().attr('class');
  care_pack(parseInt(str.substr(0,str.indexOf("___"))));
  $("."+$(e).parent().attr('class')).remove();
}
function rmdel(e){
      var str = $(e).attr('class');
      //alert(str.substr(str.indexOf("___")+3,str.length));
      care_deliver(parseInt(str.substr(str.indexOf("___")+3,str.length)));
    $(e).parent().parent().parent().remove();
};

function relation_fix_help(e,untill){
        alert($(e).attr('class'));
        //alert($(e).next().attr('class') +" "+$(untill).attr('class'));
        if($(e).next().attr('class') != $(untill).attr('class'))
          relation_fix_help($(e).next(),untill);
}
function relation_fix (e) {
 //$(e).parent().parent().parent().next();
    var e=$(e).parent().parent().parent();
    var untill = $(e).siblings("#register_pack");
    //alert($(e).next().attr('class')+" "+$(untill).attr('class'));
    relation_fix_help($(e).next(),untill);
}

function add_benefit_help(delname){
	var benefit = "<tr> <td> <div class='row'>";	
              benefit+= "<div class='col-md-6'>"; 
				    	benefit+= "<input type='text' name='"+delname+"' onclick='relation_fix(this)'></input>";
				    	benefit+= "</div>";
				    	benefit+= "<div class='col-md-3'>";
				    	benefit+= "<input type='multiform' name='image_"+delname+"'></input>";
				    	benefit+= "</div>";
				    	benefit+= "<div class='col-md-3'>";
				    	benefit+= "<input type='text' name='descritpion_"+delname+"'></input>";
				    	benefit+= "</div>";
				benefit+= "</div></td>";
                    benefit+= pack_register(pack_class_name_deliver(pack_array[0]),element_name(pack_array[0],deliver_next));
                
                benefit+= "<td id='remove_button' class='testing'><div>";
				    	benefit+= "<button type='button' id='remove_deliver' onclick='rmdel(this)' class='"+delname+"'> Delete deliver</button>";
				benefit+= "</div></td>";
    	benefit+= "</tr>";

        benefit+= "<tr id= 'add_benefit'></tr>";
    return benefit;
}

function add_benefit(){
       deliver_next++;
        deliver_array.push(deliver_next)
        $("#add_benefit").replaceWith(add_benefit_help(deliver_name(deliver_next)));
        for (var i = 1; i < pack_array.length; i++) {

        $(".register_pack ").last().replaceWith(pack_register(pack_class_name_deliver(pack_array[i]),element_name(pack_array[i],deliver_next)));
    };
}

</script>
</head>
<body>

<table style="width:100%">
	<tr>
  		<th>
  			<div>BENEFITS</div>
  			<div>$10000</div>
  		</th>
 
    	<script type="text/javascript">
        document.write(pack_core(pack_class_name(),pack_name(pack_next)));
        </script>		
    <!-- ############################################    -->


    	<th id="add_package" onclick="add_package()">
    		<div>+<div>
    		<div >Add package  </div>
    	</th>
    </tr>
  	
 <!--  benefit  row  ##################################################### -->

  <script type="text/javascript">
    deliver_next++;
    deliver_array.push(deliver_next)
   // alert(pack_register(pack_class_name_deliver(pack_array[0]),element_name(pack_array[0],deliver_next)));
  document.write(add_benefit_help(deliver_name(deliver_next)));
  </script>
  
 <!-- ################################################################   -->
    <tr>
    	<td>
    		<button type="button" onclick="add_benefit()"> Add Benefit </button>
    	</td>
    </tr>
</table>
 <link rel="stylesheet" href="forms.css">
</body>
</html>
