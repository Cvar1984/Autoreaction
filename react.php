<?
system("clear");
error_reporting(0);
function input($pesan){
	global $green;
	echo "$green $pesan >>> ";
}
$green="\e[92m";
$red="\e[91m";
function asciiart() {
system("clear");
echo "\n \e[93m
   _____   __    _ __                           
    /  '  /  )  ' )  )            _/_           
 ,-/-,   /--<    /--'  _  __.  _. /   o __ ____ 
(_/     /___/_  /  \_ </_(_/|_(__<__ <_(_)/ / <_";
echo "\n \e[36m
 Author  : Cvar1984
 Code    : PHP
 Github  : http://github.com/Cvar1984
 Team    : Blackhole Security
 Version : 1.3 ( Alpha )
 Date    : 28-01-2018";
}
asciiart();
echo "\n$red =========================== Cvar1984 ))=====(@)> \n";
require_once('lib/fb.php');
input("Username");
$user=trim(fgets(STDIN, 1024));
input("Password");
$pass=trim(fgets(STDIN, 1024));
echo "$red =========================== Cvar1984 ))=====(@)> \n";
echo " (01)Like\n";
echo " (02)Love\n";
echo " (03)Wow\n";
echo " (04)Haha\n";
echo " (07)Sad\n";
echo " (08)Angry\n";
echo "$red =========================== Cvar1984 ))=====(@)> \n";
input("Male Reaction");
$r_male=trim(fgets(STDIN, 1024));
echo "$red =========================== Cvar1984 ))=====(@)> \n";
echo " (01)Like\n";
echo " (02)Love\n";
echo " (03)Wow\n";
echo " (04)Haha\n";
echo " (07)Sad\n";
echo " (08)Angry\n";
echo "$red =========================== Cvar1984 ))=====(@)> \n";
input("Female Reaction");
$r_female=trim(fgets(STDIN, 1024));
input("Count");
$max_status	=trim(fgets(STDIN, 1024));
input("Token");
$token=trim(fgets(STDIN, 1024));

$config['cookie_file'] = 'cookie.txt';
if (!file_exists($config['cookie_file'])) {
    $fp = @fopen($config['cookie_file'], 'w');
    @fclose($fp);
}
$reaction = new Reaction();
$reaction->send_reaction($user, $pass, $token, $r_male, $r_female, $max_status);
?>