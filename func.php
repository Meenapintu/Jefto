<?php 
 function subform($name,$val,$type,$formt ,$extra ){// $formt="input"; // $tyle here to define class of  input styling ?>
	 <div >
    
    <<?php echo $formt;?> type="<?php echo $type ;?>" name="<?php echo $name ;?>" value="<?php if(isset($_POST[$name])){htmlentities($_POST[$name], ENT_QUOTES, 'UTF-8');} ?>"  <?php echo $extra;?> class="form-control cinput" > </<?php echo $formt;?>>
   </div>

<?php } 
      function checkform ($msg ,$name,$val,$extra){ ?>
      
      <div class="check_global">
     <label class ="check_label">
     <input class="check_in" type="checkbox" name="<?php echo $name ;?>" value="<?php echo$val;?>"  <?php echo $extra;?>  >
     
       <?php echo $msg; ?></label>
      
    </div>
    
    <?php }

	function multiform($msg,$name,$val,$extra){
		$size = sizeof($val);
		echo "<div class = 'row form-group' style='transparent;width:100%;margin-left:0px;'>";
		echo "<p> $msg </p>";
		echo"<input type='hidden' name='$name' value='yet not defined'>";
		for($i=0;$i<$size;++$i){
			echo "<div class = 'col-md-2'style='transparent;margin:1px '>";
		checkform($val[$i],$i,$val[$i],$extra);
		echo "</div>";	
		}
		echo "<div class = 'col-md-2' style='margin:1px;'>";
		checkform("OTHERS ",$i,$val[$i],$type,"others");	
		echo "</div>";
		echo "</div>";	
	}
?>
<script>
	function select_one(elem,pname){
		alert(document.getElementsByName(pname).value);
		document.getElementsByName(pname).value = elem.value;
		alert(document.getElementsByName(pname).value);
	}
	
	function select_mult(elem,pname){
		var tval = document.getElementsByName(pname).value;
		document.getElementsByName(pname).value = tval+'####'+tval;
		alert(document.getElementsByName(pname).value );
	}
	
	
	function Autoinc(e){
		//alert("got");//increase row input
		e.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;');
		e.style.height = 'auto';
 		e.style.height = (e.scrollHeight) + 'px';

	}
	
	function ValidateEmail(inputText)
	{
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(inputText.value.match(mailformat))
		{
		return true;
		}
	else
		{
		alert("You have entered an invalid email address!");
		return false;
		}
	}

</script>
<?php

	function selectform($name,$option){
			$size = sizeof($option);
		echo "<select  name= ".$name." >";
		for ($i=0; $i <$size ; $i++) { 
			echo "<option value = ".$option[$i]."> ".$option[$i]."</option>";
		}
		echo "</select>";
	}
	//$msg ,$name,$val,$type,$formt ,$extra
  function key_numbers($option,$key_name, $key_numbers,$ext){?>
  	<div class="col-md-6">
	<?php selectform($key_name,$option); ?>
    </div>
    <div class="col-md-6">
	<?php subform($key_numbers,"","text","input",$ext); ?>
    </div>
<?php } ?>
