<?php
function makeSafe($string){
		$string=str_replace("'","",$string);
		$string=str_replace("\\","",$string);
		$string=str_replace("//","",$string);
		//$string=str_replace("-","",$string);
		$string=str_replace(")","",$string);
		$string=str_replace("(","",$string);
		$string=str_replace("0x27","",$string);
		$string=str_replace("0x7e","",$string);
		$string=str_replace("information_schema","",$string);
		
		
		$string=(get_magic_quotes_gpc() ? stripslashes($string) : $string);
		if(function_exists('mysql_real_escape_string')){
			// send a trivial query to initiate mysql connection
			
			return mysql_real_escape_string($string);
		}else{
			return mysql_escape_string($string);
		}
	}
	
	
	function get_unique_code($seed_length,$type) {
	if($type=='digit')
	  $seed = "1234567890134567890123456789";
	else  
    $seed = "ABCDEFGHJKLMNPQRSTUVWXYZ234567892345678923456789";
    $str = '';
    srand((double)microtime()*1000000);
    for ($i=0;$i<$seed_length;$i++) {
        $str .= substr ($seed, rand() % 48, 1);
    }
    return $str;
}
//tender password
function get_code($seed_length=8) {
    $seed = "ABCDEFGHJKLMNPQRSTUVWXYZ234567892345678923456789";
    $str = '';
    srand((double)microtime()*1000000);
    for ($i=0;$i<$seed_length;$i++) {
        $str .= substr ($seed, rand() % 48, 1);
    }
    return $str;
}
function file_size($file_name)   {
   
	if(is_file($file_name))
		return filesize($file_name);
	  else
	    return 0;
   }
 
   
function getIP(){
	$ip="";
	if (getenv("HTTP_CLIENT_IP"))
	$ip = getenv("HTTP_CLIENT_IP");
	else if(getenv("HTTP_X_FORWARDED_FOR"))
	$ip = getenv("HTTP_X_FORWARDED_FOR");
	else if(getenv("REMOTE_ADDR"))
	$ip = getenv("REMOTE_ADDR");
	else
	$ip = "UNKNOWN";
	return $ip;
} 
function create_session(){
@session_start();
global $link;
$cid="0";
$full_name="";
$day = date('d', time());
$month = date('m', time());
$year = date('Y', time());
$hour = date('H', time());
$min = date('i', time());
$sec = date('s', time());
$remote_addr=@$_SERVER['REMOTE_ADDR'];
$sid=$year.$month.$day.$hour.$min.$sec.rand(99,9999);

$_SESSION['sid']=$sid;
//echo $sql;
}
function check_session_buyer(){
if(!isset($_SESSION['bidder_code']) or $_SESSION['bidder_id']=="")
{
//$_SESSION['redirect']=
echo"<script>location.href='".SITE_URL."/login.php'</script>";
}
}


//session check for vendor and salasar admins
function check_session_vendor(){
	if(!$_SESSION['uid'] && $_SESSION['uid']=="")
	{
	echo"<div class='message error'>You are not authorized to view this section</div>";
	exit();
	}
}

//call this function if page is only for scs admins
function check_session_admin(){

	if(@$_SESSION['log_type']!="A")
	{
	echo"<div class='block'>";
	echo"<h3>Operation restricted</h3>";
	echo"<div class='message error'>You are not authorized to view this section</div>";
	echo"</div>";
	exit();
	}
}
function log_db($log_text,$log_operation)
{
global $link;

$sql="insert into salasara_log(log_text,log_operation,updated_by) values('".$log_text."','".$log_operation."','".$_SESSION['ha_uname']."')";
$res=mysql_query($sql) or die("Unable to connect to Server, We are sorry for inconvienent caused".mysql_error());
}
		?>