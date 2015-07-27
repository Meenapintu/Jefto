
function subform(name,msg,type){
	var input ="<input type= '"+type+"' name= "+name+" id='"+name+"' class='validate'>";
	 	input+="<label data-error='wrong input' for='"+name+"'>"+msg+"</label>";
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
	var input ="<textarea id='"+name+"'  name= "+name+"  class='materialize-textarea'></textarea>";
	 	input+="<label for='"+name+"'>"+msg+"</label>";
	return input;
}

function subform_date(name,msg){
	var input ="";
	 	input+="<input type='date' class='datepicker' name="+name+" placeholder='mm/dd/yyyy'>";
	return input;
}
function checkform(msg,name){
	var check ="<input type = 'checkbox' id='"+name+msg+"' name = "+name+" value= '"+msg+"' class='checkbox' onchange='select_mult(this)'>";
		check+= "<label for='"+name+msg+"'>"+msg+"</label>";
	return check;
}

function checkform_radio(msg,name){
	var check ="<input type = 'radio' id='"+name+msg+"' name = "+name+" value= '"+msg+"' onchange='select_one(this)'>";
		check+= "<label for='"+name+msg+"'>"+msg+"</label>";
	return check;
}

function multiform_radio(msg,name,val){
	var mform = "";
		mform+=	"<p class='msg'> "+msg+"</p>";
		mform+= "<div class = 'row'style='margin:0px;padding:0px;'>"
			for (var i = 0; i < val.length ; i++) {
				mform+= "<div class = 'input-field col s12 m12'style='margin:0px;padding:0px;'>"
				mform+= checkform_radio(val[i],name+'_delete');
				mform+= "</div>";
			}
		mform+= "<div class = 'input-field col s12 m12' style='margin:0px;padding:0px;'>"
		mform+= "<input type = 'radio' id='"+name+msg+"' name = '"+name+"_delete' value= '"+msg+"' onchange = 'other_input(this);'>";
		mform+= "<label for='"+name+msg+"' >Other</label>";
		mform+= "</div>";
		mform+= "<div id ='other' class = 'input-field col s12 m12' style='margin:0px;padding:0px;display:none;'>"
		mform+= "<input type='text' name='other' onblur='select_one(this)'>"
		mform+= "</div>" ;
		mform+= "<div class = 'input-field col s12 m12' style='margin:0px;padding:0px;display:none;'>"
		mform+= "<input type='text' name="+name+" id='valtext'>"
		mform+= "</div>"
		mform+= "</div>";
	return mform;
}

function multiform(msg,name,val){
	var mform = "";
		mform+=	"<p class='msg'> "+msg+"</p>";
		mform+= "<div class = 'row'style='margin:0px;padding:0px;'>"
			for (var i = 0; i < val.length ; i++) {
				mform+= "<div class = ' input-field col s12 m12 wrap'style='margin:0px;padding:0px;'>";
				mform+= checkform(val[i],i+'_delete');
				mform+= "</div>";	
			}
		mform+= "<div class = 'col s12 m12'style='margin:0px;padding:0px;'>"
		mform+= "<input type = 'checkbox' id='"+name+msg+"' name = 'other_delete' value= '"+msg+"' onchange = 'other_input(this);'>";
		mform+= "<label for='"+name+msg+"' >Other</label>";
		mform+= "</div>"
		mform+= "<div id ='other' class = 'input-field col s12 m12' style='margin:0px;padding:0px;display:none;'>"
		mform+= "<input type='text' name='other' class='NOTCHECKD' onblur='select_mult(this)' >"
		mform+= "</div>"
		mform+= "<div  class = 'input-field col s12 m12' style='margin:0px;padding:0px;display:none;'>"
		mform+= "<input type='text' name="+name+" id='valtext'>"
		mform+= "</div></div>";
	return mform;
}

function selectform(name,option){
	var tc = name.split('[');
	 //tc[1] = tc[1].split(']');
	//alert(tc[0]);
	var id = tc[0];
	var sform = "<input type='text' id='select_in' class='s"+id+"' name='"+name+"' onclick='showop(this)' ></input>";
		sform+= "<div class='row card s-div' style='display:none;overflow-y:scroll;max-height:200px;margin:0px;'>";
		for (var i = option.length - 1; i >= 0; i--) {
			sform+= "<div class='col s12 m12 l12 hover_eff' >";
			sform+= '<p  class="active font-med  margin-0 hover_eff" id="select_data" onclick= setv(this,"s'+id+'") style="margin-left:5%;" >'+option[i]+'</p>';
			sform+= "</div>";
		}
		sform+="</div>";
	return sform;
}
function selectform_int(name,option){
	var sform= "<select name= '"+name+"' class='browser-default'>";
		for (var i = option.length - 1; i >= 0; i--) {
			sform+= "<option value = "+option[i]+">"+option[i]+"</option>";
		}
		sform+= "</select>";
	return sform;
}

function key_numbers(option,key_name,key_numbers,ext,type){
	var keyn = "<div class='input-field col s12 l6 m6'>";
		keyn+= selectform(key_name,option);
		keyn+= "</div> <div class = 'input-field col s12 l6 m6'>";
		keyn+= subform(key_numbers,ext,type);
		keyn+= "</div>";
		keyn+=	"<div id='replace_me' ></div>";
	return keyn;
}

//====================================================================================================
//====================================================================================================
//=======================================================================================================
/*
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
*/

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
var online_promotion = new Array("VentureBeat","TechCrunch","Forbes","Huffington Post","Yourstory");
var offline_promotion = new Array("TV","Radio","Newspaper");
var currency = new Array("USD","GBP","CAD","EUR","INR","AUD");
var age_group = new Array("11 below ", "12-18 Years old","18-25 Years old","25-40 Years old","40-65 Years old","65 above");

//var audience_number = new Array("less than 100","100-500","500-1000","1000-5000","5000-10000","10000-20000"," more than 20,000");
var audience_number = new Array(100,500,1000,5000,10000,20000,20,000);
var social_media =  new Array('google.com','facebook.com','linkdin.com','twitter.com');
var key_number = new Array('Speakers','Events','Conference','Competition');
var non_media_exposure = new Array('Bags', 'Conference Badges');


