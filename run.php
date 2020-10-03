<?php

 	set_time_limit(0);
  	error_reporting(0);
  	date_default_timezone_set('Asia/Jakarta');
	system('clear');


/* START COLOR */
$res="\033[0m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";
/* END COLOR */

$false = "{$abu2}[{$red}x{$abu2}]{$red2}";
$true = "{$abu2}[{$green}+{$abu2}]{$green2}";
$pentung = "{$abu2}[{$yellow}!{$abu2}]{$yellow2}";
$titik = "{$abu2}[{$res}•{$abu2}]{$green2}";
function random($length = 10) {
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function send($post){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://server17109.000webhostapp.com/");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS ,"email=".$post."&submit=Submit Query");
	curl_exec($ch);
}
function kunci($result){
    $curl = curl_init();
    curl_setopt ($curl, CURLOPT_URL, "https://server17109.000webhostapp.com/kunci.php");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
 
    $result = curl_exec ($curl);
    curl_close ($curl);
    return $result;
}
echo "{$green2} 	___________________________
	< root@indoxploit:~# KM37ID >
	 ---------------------------
	   \         ,        ,
	    \       /(        )`
	     \      \ \___   / |
	            /- _  `-/  '
	           (/\/ \ \   /\
	           / /   | `    \
	           O O   ) /    |
	           `-^--'`<     '
	          (_.)  _  )   /
	           `.___/`    /
	             `-----' /
	<----.     __ / __   \
	<----|====O)))==) \) /====>
	<----'    `--' `.__,' \
	             |        |
	              \       /
	        ______( (_  / \______
	      ,'  ,-----'   |        \
	      `--{__________)        \/
\n{$putih}";
echo "  [ {$lblue2}>_ {$putih}] root@indoxploit:~# sudo su \n";sleep(2);
$pilih = readline("  [ >_ ] [sudo] password for root: ");
if ($pilih == kunci($result)) {
$post = readline("  [ >_ ] root@indoxploit:~#/email:~#  ");
$cli = readline("  [ >_ ] root@indoxploit:~#/jumlah:~# ");
$i = 1;
while( $i <= $cli ){
send($post);
echo "  [ {$green2} Success {$putih} ] Berhasil mengirim ke {$lblue2}".$post."{$green2}!!{$putih}\n";
$i++;
}

}else{
	echo "  [ {$red} Error {$putih} ] Password anda Salah cek channel {$green2}KM37ID{$red}!!{$putih}\n";
}

?>
