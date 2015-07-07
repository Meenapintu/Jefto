<?PHP
require_once('phpfunc.php');
session_start();
$connection_string = "host=localhost  dbname=jefto user=ram password=ramchand";
$conn = pg_connect($connection_string);
//if($conn){ echo "done ";}
//	else echo " there is error ";

$_POST['whoami'] 	= htmlspecialchars($_POST['whoami']);
$type 	= (int)($_POST["whoami_type"]);
if(get_magic_quotes_gpc()){
	$_POST['whoami'] = stripcslashes($_POST['whoami']);
}
$email = pg_escape_string($_POST['whoami']);

$query = "INSERT INTO subscription(email,user_type)VALUES($1,$2)";
$insert_array = array($email,$type);
pg_prepare_single_insert($conn, $query,$insert_array);

?>