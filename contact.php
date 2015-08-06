<?PHP
require_once('phpfunc.php');
session_start();
$connection_string = "host=localhost  dbname=jefto user=ram password=ramchand";
$conn = pg_connect($connection_string);
//if($conn){ echo "done ";}
//	else echo " there is error ";

$_POST['name'] 	= htmlspecialchars($_POST['name']);
$_POST['email'] 	= htmlspecialchars($_POST['email']);
$_POST['company'] 	= htmlspecialchars($_POST['company']);
$_POST['message'] 	= htmlspecialchars($_POST['message']);

if(get_magic_quotes_gpc()){
	$_POST['name'] 	= stripslashes($_POST['name']);
	$_POST['email'] 	= stripslashes($_POST['email']);
	$_POST['company'] 	= stripslashes($_POST['company']);
	$_POST['message'] 	= stripslashes($_POST['message']);

}

	$_POST['name'] 	= pg_escape_string($_POST['name']);
	$_POST['email'] 	= pg_escape_string($_POST['email']);
	$_POST['company'] 	= pg_escape_string($_POST['company']);
	$_POST['message'] 	= pg_escape_string($_POST['message']);
 $event_id = $_SESSION['event_id'];
$query = "INSERT INTO contact_mail(event_id,name,mobile,email,company,message)VALUES($1,$2,$3,$4,$5)";
$insert_array = array($event_id,$_POST['name'],'',$_POST['email'],$_POST['company'],$_POST['message']);
echo pg_prepare_single_insert($conn, $query,$insert_array);
//echo TRUE;
?>

