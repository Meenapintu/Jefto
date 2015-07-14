 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.6/angular.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.6/angular-animate.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.6/angular-aria.js"></script>


<script type="text/javascript">
function date_pic(){
$('.datepicker').pickadate({
selectMonths: true, // Creates a dropdown to control month
selectYears: 15 // Creates a dropdown of 15 years to control year
});
}


function subform(name,msg,type){
	 //var input ="";
	 var input ="<input type= '"+type+"' name= "+name+" id='"+name+"'  >";
	 	 input+="<label for='"+name+"'>"+msg+"</label>"
	 	 //input+="";
	 	 //alert(input);
	 return input;

}

function subform_range(name,msg){
	var input = "<div class='row'>";
			input+="<div class='col s6' >Male </div>";
			input+="<div class='col s3 m2 l1 right' ><p>Female </p></div>";
			input+="<div class='col s12'> ";
				input+= "<p class='range-field'>";
				input+="<input type='range' id="+name+" name='"+name+"' min='0' max='100' />";
			input+="</p></div></div>";

    return input;
}

function subform_textarea(name,msg){

	 
	 	var input ="<textarea id='"+name+"'  name= "+name+" length='120' class='materialize-textarea'></textarea>";
	 	 input+="<label for='"+name+"'>"+msg+"</label>";
	 	
	 	 //alert(input);
	 return input;

}


function subform_date(name,msg){
	 var input ="";
	 	 input+="<input type='date' class='datepicker' name="+name+" onclick='date_pic();'>";
	 	 //input+="<span class='highlight'></span> <span class='bar'></span> <label>"+msg+"</label>";
	 	 input+="";
	 	 //alert(input);
	 return input;
}

function select_one(e){
		$(e).parent().siblings().children('#valtext').attr('value',e.value);
		$(e).parent().siblings("#other").hide();
		//alert($(e).parent().siblings().children('#valtext').attr('value'));
		
}
function select_mult(e){
		var val = $(e).parent().siblings().children('.checkbox');
		var newval ='';
		for (var i = 0; i < val.length; i++) {
			if($(val[i]).attr('type') == 'checkbox'){
				if($(val[i]).is(':checked')){
					//alert('here000000000');
					newval += val[i].value;
					newval += "___";
				}
			}

			else{
				if(typeof(val[i]) != "undefined"){
					//alert('here sibling');
					newval += val[i].value;
					newval += "___";
				//$(e).parent().siblings().children('#valtext').attr('value',val+'&'+e.value);
				}
			}
		}

			//=====================================

			if($(e).attr('type') == 'checkbox'){
				if($(e).is(':checked')){
					//alert('here1check');
					newval += e.value;
					newval += "___";
				}
			}
			else{
				if(typeof(e) != "undefined"){
					//alert('here1');
					newval += e.value;
					newval += "___";
				//$(e).parent().siblings().children('#valtext').attr('value',val+'&'+e.value);
				}

			}

		$(e).parent().siblings().children('#valtext').attr('value',newval);
		//alert($(e).parent().siblings().children('#valtext').attr('value'));

}

function checkform(msg,name){
	//var check = "<div class='l'>";
		//check+=	"<label class= 'check_label'>";
		var check ="<input type = 'checkbox' id='"+name+msg+"' name = "+name+" value= '"+msg+"' class='checkbox' onchange='select_mult(this)'>";
		check+= "<label for='"+name+msg+"'>"+msg+"</label>";
		//c//heck+=	"</div>";
		//alert(check);
	return check;
}
function checkform_radio(msg,name){
	//var check = "<div class='l'>";
		//check+=	"<label class= 'check_label'>";
		var check ="<input type = 'radio' id='"+name+msg+"' name = "+name+" value= '"+msg+"' onchange='select_one(this)'>";
		check+= "<label for='"+name+msg+"'>"+msg+"</label>";
		//c//heck+=	"</div>";
		//alert(check);
	return check;
}


function other_input(e){
	// body...
	if($(e).is(':checked')){
		$(e).parent().siblings("#other").show();
		$(e).parent().siblings("#other").children().attr('class','checkbox');
	}
	else{
		$(e).parent().siblings("#other").hide();
		$(e).parent().siblings("#other").children().attr('class','NOTCHECKD');
	}

}




$('input:radio')

function multiform_radio(msg,name,val){
	var mform = "";
		mform+=	"<p class='msg'> "+msg+"</p>";
		//mform+=	"<input type='hidden' class= 'hidden' name="+name+" value='yes'></input>";
		mform+= "<div class = 'row'style='margin:0px;padding:0px;'>"
				for (var i = 0; i < val.length ; i++) {
					mform+= "<div class = 'input-field col s12 col-md-12'style='margin:0px;padding:0px;'>"
					mform+= checkform_radio(val[i],name+'_delete');
					mform+= "</div>";
				}
		mform+= "<div class = 'input-field col s12 col-md-12' style='margin:0px;padding:0px;'>"
		mform+= "<input type = 'radio' id='"+name+msg+"' name = '"+name+"_delete' value= '"+msg+"' onchange = 'other_input(this);'>";
		mform+= "<label for='"+name+msg+"' >Other</label>";
		mform+= "</div>";
		mform+= "<div id ='other' class = 'input-field col s12 col-md-12' style='margin:0px;padding:0px;display:none;'>"
		mform+= "<input type='text' name='other' onblur='select_one(this)'>"
		mform+= "</div>" ;
		mform+= "<div class = 'input-field col s12 col-md-12' style='margin:0px;padding:0px;display:none;'>"
		mform+= "<input type='text' name="+name+" id='valtext'>"
		mform+= "</div>"
		mform+= "</div>";
		return mform;
}
function multiform(msg,name,val){

	//var size = val.length;
	//alert(size);
	var mform = "";
		//alert(mform);
		mform+=	"<p class='msg'> "+msg+"</p>";
		//mform+=	"<input type='hidden' class= 'hidden' name="+name+" value='yes'></input>";
		mform+= "<div class = 'row'style='margin:0px;padding:0px;'>"
				for (var i = 0; i < val.length ; i++) {
					//alert(mform);
					mform+= "<div class = ' input-field col s12 col-md-12 wrap'style='margin:0px;padding:0px;'>";
					mform+= checkform(val[i],i+'_delete');
					mform+= "</div>";
					
				}

		mform+= "<div class = 'col s12 col-md-12'style='margin:0px;padding:0px;'>"
		mform+= "<input type = 'checkbox' id='"+name+msg+"' name = 'other_delete' value= '"+msg+"' onchange = 'other_input(this);'>";
		mform+= "<label for='"+name+msg+"' >Other</label>";
		mform+= "</div>"
		mform+= "<div id ='other' class = 'input-field col s12 col-md-12' style='margin:0px;padding:0px;display:none;'>"
		mform+= "<input type='text' name='other' class='NOTCHECKD' onblur='select_mult(this)' >"
		mform+= "</div>"
		mform+= "<div  class = 'input-field col s12 col-md-12' style='margin:0px;padding:0px;display:none;'>"
		mform+= "<input type='text' name="+name+" id='valtext'>"
		mform+= "</div></div>";
		
		return mform;
}

function selectform1(name,option){

	var sform= "<select name= '"+name+"' class='browser-default'>";
	for (var i = option.length - 1; i >= 0; i--) {
		sform+= "<option value = '"+option[i]+"' >"+option[i]+"</option>";
	}
	sform+= "</select>";
	//sform+= "<label>Materialize Select</label>";
	return sform;
}

function selectform(name,option){
	var sform = "<input type='text' id='select_in' name='"+name+"' onclick='showop(this)' ></input>";
		sform+= "<div class='row card s-div' style='display:none;overflow-y:scroll;max-height:200px;margin:0px;'>";
	for (var i = option.length - 1; i >= 0; i--) {
		sform+= "<div class='col s12 m12 l12 hover_eff' >";
		sform+= "<p  class='active font-med  margin-0 hover_eff'id='select_data' onclick='setv(this);' style='margin-left:5%;' >"+option[i]+"</p>";
		sform+= "</div>";
		//sform+= "<option value = '"+option[i]+"' >"+option[i]+"</option>";
	}
	sform+="</div>";
	return sform;
}

$(document).ready( function(){
$('#gender_ratio__').mousemove(function(event){
//gender_ratio__
	//alert("herge");
	//alert($(this).val());
	$('.value').html($(this).val());
});

$(document).click(function(e){
	if($(e.target).attr('id')!='select_in'){
 		$('.s-div').hide();
 	}
});
});	

$('#select_in').keypress(function(){
	$('.s-div').hide();
});




function showop(e) {
	$(e).siblings('.s-div').show();
}

function setv(e) {
	$(e).parent().parent().siblings("#select_in").attr('value',$(e).html());
	$('.s-div').hide();
};

function selectform_int(name,option){

	var sform= "<select name= '"+name+"' class='browser-default'>";
	for (var i = option.length - 1; i >= 0; i--) {
		sform+= "<option value = "+option[i]+">"+option[i]+"</option>";
	}
	sform+= "</select>";
	//sform+= "<label>Materialize Select</label>";
	return sform;
}

function key_numbers(option,key_name,key_numbers,ext,type){
	
	var keyn = "<div class='input-field col s12 l6 col-md-6'>";
	keyn+= selectform(key_name,option);
	keyn+= "</div> <div class = 'input-field col s12 l6 col-md-6'>";
	keyn+= subform(key_numbers,ext,type);
	keyn+= "</div>";
	keyn+=	"<div id='replace_me' ></div>";
	//keyn+= "</div>";
	return keyn;
}

function add_feild(e){
		
		if (e.name =='social_media'){
			var placeholder = 'https://';
			type = "text";
		}
		else if (e.name == 'key_number'){
			var placeholder ='How Many ';
			type = "number";
		}
		else{
			var placeholder ='How much ( write % ) ';
			type = "number";
			
		}
		$(e).siblings("#replace_me").replaceWith(key_numbers(eval(e.name),e.id+"["+ e.value++ +"]",e.id+"["+e.value++ +"]",placeholder,type
			));
		
		$(e).siblings("#"+e.id).attr('value',e.value);

	}
//var j =0;



//====================================================================================================





//====================================================================================================

/*var category = new Array("College Festival","Corporate Event","Social Event","Sport Event","Road Show");
var genre = new Array("Cultural","Technical","Sport","Art");
var happens_every= new Array("Week","Month","Year","One Time Event");
var sponsor_needed = new Array("Financial","In media","In kind","Venue","Labor","Food");
var scope = new Array("Local","Regional","National","Global");
var country = new Array("USA","India","UK","Canada","Australia");
var target_audience = new Array("Webdesigner","Webdeveloper","Business guys");
var education_background = new Array("In school","In some college","graduate","Post graduate");
var audience_category = new Array("Unemployed","Employed","Self owned business person");
var income_level = new Array("Low","Medium","High");
var online_promotion = new Array("jefto flicker");
var offline_promotion = new Array("TV","Radio","Newspaper");
var currency = new Array("USD","INR","GBP","EUR","AUD");
var age_group = new Array("11 below ", "12-18 Years old","18-25 Years old","25-40 Years old","40-65 Years old","65 above");
//var audience_number = new Array("less than 100","100-500","500-1000","1000-5000","5000-10000","10000-20000"," more than 20,000");
var audience_number = new Array(100,500,1000,5000,10000,20000,20,000);
var social_media =  new Array('google.com','Facebook.com','linkdin.com');
var key_number = new Array('Speakers','Events','conference','competition');
*/
//=======================================================================================================



var category = new Array("College Festival","Corporate Event","Social Event","Sport Event","Road Show");
var genre = new Array("Cultural","Technical","Sport","Art");
var happens_every= new Array("Year","Month","Week","One Time Event");
var sponsor_needed = new Array("Venue","Food","In media","In kind","Financial","Labor");
var scope = new Array("Local","Regional","National","Global");
var country = new Array("USA","UK","Canada","India","Australia");
var target_audience = new Array("Webdesigner","Webdeveloper","Business guys");
var education_background = new Array("In school","In some college","Graduate","Post graduate");
var audience_category = new Array("Unemployed","Employed","Self owned business person");
var income_level = new Array("Low","Medium","High");
var online_promotion = new Array("jefto flicker");
var offline_promotion = new Array("TV","Radio","Newspaper");
var currency = new Array("USD","GBP","CAD","EUR","INR","AUD");
var age_group = new Array("11 below ", "12-18 Years old","18-25 Years old","25-40 Years old","40-65 Years old","65 above");
//var audience_number = new Array("less than 100","100-500","500-1000","1000-5000","5000-10000","10000-20000"," more than 20,000");
var audience_number = new Array(100,500,1000,5000,10000,20000,20,000);
var social_media =  new Array('google.com','Facebook.com','linkdin.com');
var key_number = new Array('Speakers','Events','Conference','Competition');
var non_media_exposure = new Array('Bags', 'Conference Badges');
</script>