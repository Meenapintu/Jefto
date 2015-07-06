<!DOCTYPE html>
<html lang="en">

<?PHP require_once("header.php"); ?>
<body>

 <!--  END of of Navbar header  part  (# ENDT) -->
  <!--  This part for  most Form fill up  (#START) -->

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
function checkform($name,$name)
	<input type="text" name="$name">

?>

<div class="container" >
<form method="post" action="#"role="form" class="form1">
	<div class="row">

		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12"> 
					<h4> Event Name </h4>
				</div>
				<div class="col-md-12">
					<input type="text" name="event_name">
				</div>
			</div>
		</div>
		
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">
					<h4>Category</h4>
				</div>
				<div class="col-md-3">
					<input type="checkbox" name="category_1">
				</div>
				
			</div>
			
		</div>






	</div>
</form>

</div>



 <!--  This part for  form fill up   (#END ) -->
<?PHP //require_once("footer.php"); ?>
</body>
</html>
