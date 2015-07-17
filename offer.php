<meta charset="utf-8">
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 0px;
}

#add_pack,.register_pack,#add_benifit{
    display: none;
}
</style>


 
 //var pack_count =0;
 var deliver_count =1;
 var pack_array = [];
 var deliver_array =[];

var packs = new Array('Title', 'Gold', 'Silver');
 var delivers = new Array("Banners", "Special gate", "Dedicated stand", "Special announcement from stage" ,"Announcement on TV / Radio", "Name on T-shirts", "Name on promotional occasion of Event", "Special post on online social profiles", "Name on brochure / pamphlet");
 var pack_next=0;
var deliver_next=0;

function save_me(e){
  $(e).parent().parent().parent().siblings('#description').attr('value',e.innerHTML);
}
function hide(e) {
  event.preventDefault();
  $(e).parent().parent().parent().fadeOut();
}

function setval (e) {
  $(e).siblings('#'+$(e).attr('id')).attr('value',e.innerHTML);
}

function setdrop(e){
      $(e).children('#descme').css('width',($("#packth").width()+'px'));
      $(e).children('#descme').css('display','block');
}

  
    
var desc1 = "<div class='row' style='background:rgba(34,53,53,0.4);overflow:none;width:100%;margin:0px;padding:0px;'> <div class='col s12 m12 s12' style='background:rgba(34,53,3,0.4); color:green;margin-bottom:10px;'></div>";
      desc1+="<div  id='desc' class='col s12 m12 s12' contentEditable=true onblur='save_me(this);' style='word-wrap: break-word;background:white;'> Write Your Description here </div>";
      desc1+="<div class='col s12 m12 s12' id ='state'> ";
      desc1+="<button onclick='hide(this);'>Done</button>" ;    
      desc1+="</div></div>";
 
function pack_core(stri,packn,hname){
	var pack = "<th id ='packth' class='"+stri+"' style='min-width: 135px;@media only screen and (max-device-width: 480px) { min-width: 100px;}' >";
        pack+= "<div contentEditable=true   id ='packname' onblur='setval(this);'>"+hname+"</div>";
        pack+= "<input type='hidden' id ='packname' value='"+hname+"' name='"+packn+"' ></input>";
  	    pack+= "<div contentEditable=true id='pack_price' onblur='setval(this);'>  Price </div>";
        pack+= "<input type='hidden'  id='pack_price' name='price_"+packn+"' ></input>";
        pack+= "<div contentEditable=true id='packnum' onblur='setval(this);'>  No of Packages  </div>";
        pack+= "<input type='hidden' id='packnum' name='pack_number_"+packn+"' ></input>";
        pack+= "<div onclick='setdrop(this);' ><i class='material-icons '>description</i> Description ";
        pack+= "<div id='descme' style='width:100%;margin:0px;padding:0px;position:absolute;display:none;background:white;z-index:2'>"+desc1+"</div></div>";
        pack+= "<input type='hidden' id = 'description' name='descritpion_"+packn+"' ></input>";
        pack+=  "<i id='remove_package' onclick='rmpack(this)' class='waves-effect waves-light btn-tiny center  bg-trance material-icons right'> delete</i>";
      	pack+= "</th>";
        pack+= "<th id ='add_pack'></th>";
    return pack;
}
function pack_register(stri,name){
	var pack_deliver = "<td id='pack_del_td' class='"+stri+"'>";
        pack_deliver+= "<div>";
        pack_deliver+= "<input type='number'placeholder='0' name='"+name+"' onclick='pack_name(this)'></input>";
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

function add_package(hname){
    //alert("adding");
    var cnme = pack_class_name();
    $("#add_pack").replaceWith(pack_core(cnme,pack_name(pack_next),hname));

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
        //alert($(e).attr('class'));
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

function add_benefit_help(delname,value){
	var benefit = "<tr class='bc margin-0 pd-0'> <td> <div class='row margin-0 pd-0'>";	
              benefit+= "<div class='col  s12 m12 dn'>"; 
				    	benefit+= "<input type='text' col='1' name='"+delname+"' onclick='relation_fix(this)' value='"+value+"' style='wrap:break-word;white-space:pre-wrap;' ></input>";
				    	benefit+= "</div>";
				    	benefit+= "<div class='col m3 hide'>";
				    	benefit+= "<input type='number' name='image_"+delname+"'></input>";
				    	benefit+= "</div>";
				    	benefit+= "<div class='col m3 hide'>";
				    	benefit+= "<input type='text' name='descritpion_"+delname+"'></input>";
				    	benefit+= "</div>";
				benefit+= "</div></td>";
                    benefit+= pack_register(pack_class_name_deliver(pack_array[0]),element_name(pack_array[0],deliver_next));
                
                benefit+= "<td id='remove_button' class='testing'><div>";
				    	benefit+= "<i id='remove_deliver' onclick='rmdel(this)' class='"+delname+" waves-effect waves-light btn-tiny center  bg-trance material-icons center'>delete</i>";
				benefit+= "</div></td>";
    	benefit+= "</tr>";

        benefit+= "<tr id= 'add_benefit'></tr>";
    return benefit;
}

function add_benefit(value){
       deliver_next++;
        deliver_array.push(deliver_next)
        $("#add_benefit").replaceWith(add_benefit_help(deliver_name(deliver_next),value));
        for (var i = 1; i < pack_array.length; i++) {

        $(".register_pack ").last().replaceWith(pack_register(pack_class_name_deliver(pack_array[i]),element_name(pack_array[i],deliver_next)));
    };
}



