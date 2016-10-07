<html>
<head>
<script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:0,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok3v=1613a3a185/"},atok:"1910c71ec95f170d581a036a3955b2ac",petok:"bcffa8a41f68189c4a6e69684250a4890f2aa46c-1470357442-1800",zone:"takanachan.com",rocket:"a",apps:{},sha2test:0}];document.write('<script type="text/javascript" src="//ajax.cloudflare.com/cdn-cgi/nexp/dok3v=0489c402f5/cloudflare.min.js"><'+'\/script>');}}catch(e){};
//]]>
</script>
<style>body{background-image:url("112.jpg");background-size:cover;background-repeat:no-repeat;}</style>
</head>
<body>
</body>
</html>
<?php
include'refresh.php';
set_time_limit(0);
 error_reporting(0);
  class semvak
{

   public $id;
private function getCaptcha($lokasi)
{
$ch = curl_init($lokasi);
curl_setopt($ch,CURLOPT_COOKIEJAR,'cookie.txt');
curl_setopt($ch,CURLOPT_COOKIEFILE,'cookie.txt');
curl_setopt($ch,CURLOPT_COOKIESESSION,true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch,CURLOPT_REFERER,$lokasi);
curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.52 Safari/537.36');
curl_setopt($ch,CURLOPT_FOLLOWLOCATION,false);
curl_setopt($ch,CURLOPT_HEADER,0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$y = curl_exec($ch);
$tmpFile = uniqid();
$file = $tmpFile.'.png';
$x = fopen($file,"w");
fwrite($x,$y);
fclose($x);
$up = 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/'.$file;
$xa = file_get_contents('http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/apii.php?img='.$up); //API
unlink($file);
return $xa;
curl_close($ch);
}
 private function Submit($url,$fields,$cok)
    {
        $random_IP = "".mt_rand(0,255).".".mt_rand(0,255).".".mt_rand(0,255).".".mt_rand(0,255);
		$field_string = http_build_query($fields);
		$ch = curl_init();
		curl_setopt($ch,CURLOPT_URL,$url);
		curl_setopt($ch,CURLOPT_FOLLOWLOCATION,false);
        curl_setopt($ch,CURLOPT_FRESH_CONNECT,true);
        curl_setopt($ch,CURLOPT_HTTPHEADER,array("REMOTE_ADDR: $random_IP", "HTTP_X_FORWARDED_FOR: $random_IP"));
        curl_setopt($ch,CURLOPT_TCP_NODELAY,true);       
		curl_setopt($ch,CURLOPT_REFERER,$url);          
		curl_setopt($ch,CURLOPT_TIMEOUT,5);		
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.52 Safari/537.36');
		curl_setopt($ch,CURLOPT_COOKIEFILE,'cookie_liker/cookiee_'.$cok);
		curl_setopt($ch,CURLOPT_COOKIEJAR,'cookie_liker/cookiee_'.$cok);
		curl_setopt($ch, CURLOPT_POST, count($field_string));
		curl_setopt($ch,CURLOPT_POSTFIELDS,$field_string);   
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$body = curl_exec($ch);
		if(!curl_errno($ch)){
		$info = curl_getinfo($ch);
		$redir = $info['redirect_url'];
		$code = $info['http_code'];
		curl_close($ch);
		return $redir." <br> Like xịt cmnr = ".$code."";
		}
		 
		curl_close($ch);
 unlink("cookie_liker/cookiee_$cok"); 
   }  
   private function tach8($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
        $II = "http://postlikes.in/login.php?user=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIII = "http://postlikes.in/liker.php?type=custom";
        $IIIII = array(
        "id" => $this->id,
        "submit" => "Submit",
        
        
         echo $this-> tach8($tok,$cok);
	  }
 
 public function SADAP($tok,$cok)
	{
  ignore_user_abort(true);
	while (@ob_end_flush());      
	ob_implicit_flush(true);
}
include'user.php';
$try = new semvak;
$token= file_get_contents('token.txt');
 $feed=json_decode(file_get_contents('https://graph.fb.me/'.$UID.'/feed?access_token='.$token.'&limit=1'),true); 
for($i=0;$i<count($feed['data']);$i++){ // Parse ID
$id = $feed['data'][$i]['id'];  
$sllike = $feed['data'][$i]['likes']['count']; 
} 
$stt = explode("_", $id);
$iduser= $stt[0];
$post_id= $stt[1];
echo "Đang Like Cho Stt: " .$post_id. " số like: " .$sllike. "<br>" ;
echo "<hr><hr>";	
$try->id = $post_id;
$try->SADAP(file_get_contents('token.txt')); 