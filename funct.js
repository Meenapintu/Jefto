function subform(name,val,type,format,extra){
	 var input ="<div>
	 		<"+format+"type="+type+"name="+name+"value="+val+extra+" class='form-control cinput ></"+format+">
	 		</div>";

	 return input;
}


function checkform(msg,name,val,extra){
	var check = "<div class='check_global'>
				<label class= 'check_label'>
				<input class = 'check_in' type = 'checkbox'

}