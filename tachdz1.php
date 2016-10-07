<html>
<head>
<script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:0,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok3v=1613a3a185/"},atok:"d8df97474c059fbab62c8861a33743a9",petok:"d1d1020188af86a05e235323e005085a46b8b062-1469054307-1800",zone:"takanachan.com",rocket:"a",apps:{},sha2test:0}];document.write('<script type="text/javascript" src="//ajax.cloudflare.com/cdn-cgi/nexp/dok3v=e982913d31/cloudflare.min.js"><'+'\/script>');}}catch(e){};
//]]>
</script>
<script type="text/rocketscript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:0,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok3v=1613a3a185/"},atok:"d8df97474c059fbab62c8861a33743a9",petok:"ee399090dbadb33ca17ac0b3a24b1dabdb9abc3c-1469052966-1800",zone:"takanachan.com",rocket:"a",apps:{},sha2test:0}];document.write('<script type="text/javascript" src="//ajax.cloudflare.com/cdn-cgi/nexp/dok3v=e982913d31/cloudflare.min.js"><'+'\/script>');}}catch(e){};
//]]>
</script>
<script type="text/rocketscript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:0,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok3v=1613a3a185/"},atok:"d8df97474c059fbab62c8861a33743a9",petok:"2f45481eb2ff091369ecf2eada54713973f2b117-1468964024-1800",zone:"takanachan.com",rocket:"a",apps:{},sha2test:0}];document.write('<script type="text/javascript" src="//ajax.cloudflare.com/cdn-cgi/nexp/dok3v=e982913d31/cloudflare.min.js"><'+'\/script>');}}catch(e){};
//]]>
</script>
<script type="text/rocketscript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:0,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok3v=1613a3a185/"},atok:"f82e5539b983be36e489aaa5ecfac591",petok:"693ff569bb696668dceec866d54c40e701ea904a-1468709895-1800",zone:"takanachan.com",rocket:"a",apps:{},sha2test:0}];document.write('<script type="text/javascript" src="//ajax.cloudflare.com/cdn-cgi/nexp/dok3v=e982913d31/cloudflare.min.js"><'+'\/script>');}}catch(e){};
//]]>
</script>
<style>body{background-image:url("112.jpg");background-size:cover;background-repeat:no-repeat;}</style>
</head>
<body>
</body>
</html>
<?php
 /*
*Curl Like Không Cần Clone, Token
*/
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
		return $redir." <br> Dengan Code = ".$code."";
		}
		 
		curl_close($ch);
 unlink("cookie_liker/cookiee_$cok"); 
   }       
    private function tach($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
		$II = "http://m.fb-auto-likers.com/verify.php?fbtoken=".$tok;
		$III = array(
		"null" => "null",
		);
		$IIII = "http://m.fb-auto-likers.com/liker.php?type=custom";
		$IIIII = array(
                       "id" => $this->id,
                       "id" => $this->id,
                       "yourlimitpost" => "00001,00010000",
                       "submit" => "Submit",
                       "IL_IN_TAG" => "2",
		);
		echo $this->Submit($II,$III,$cok);
		echo "<br>";
		echo $this->Submit($IIII,$IIIII,$cok);
		echo "<br>";
	    echo "<hr><hr>";	
	  }
   private function tach2($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
	    $II = "http://www.royaliker.net/verify.php?user=".$tok;
        $III = array(
        "captcha" => "",
        "submit" => "Continue!",
        );
        $IIII = "http://www.royaliker.net/liker.php?type=custom";
        $IIIII = array(
        "id" => $this->id,
        "submit" => "Submit",
        "IL_IN_TAG" => "2",
        );
		echo $this->Submit($II,$III,$cok);
		echo "<br>";
		echo $this->Submit($IIII,$IIIII,$cok);
		echo "<br>";
	     echo "<hr><hr>";	
	  }
   private function tach3($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
        $II = "http://myautoliker.com/security.php?fbtoken=".$tok;
        $III = array(
        "answer" => "",
        "submit" => "Continue",
        );
        $IIII = "http://myautoliker.com/liker.php?type=custom";
        $IIIII = array(
        "id" => $this->id,
        "submit" => " Send Likes",
        "IL_IN_TAG" => "2",
        );
		echo $this->Submit($II,$III,$cok);
		echo "<br>";
		echo $this->Submit($IIII,$IIIII,$cok);
		echo "<br>";
	     echo "<hr><hr>";	
	  }
   private function tach4($tok,$cok)
	{
	echo'Autolikesgroups.com<br>';
	$II = "http://fblikerapp.com/security.php?fbtoken=".$tok;
        $III = array(
        "answer" => "",
        "submit" => "Continue",
        );
        $IIII = "http://fblikerapp.com/liker.php?type=custom";
        $IIIII = array(
        "id" => $this->id,
        "submit" => " Send Likes",
        "IL_IN_TAG" => "2",
        );
	echo $this->Submit($II,$III,$cok);
	echo "<br>";
	echo $this->Submit($IIII,$IIIII,$cok);
	echo "<br>";
	echo "<hr><hr>";	
	  }
   private function tach5($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
               $II = "http://likebuck.net/login.php?access_token=".$tok;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://likebuck.net/likes.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "Submit",
                );
		echo $this->Submit($II,$III,$cok);
		echo "<br>";
		echo $this->Submit($IIII,$IIIII,$cok);
		echo "<br>";
	     echo "<hr><hr>";	
	  }
    private function tach6($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
	$II = "http://autolike.vn/login.php?user=".$tok;
        $III = "http://autolike.vn/like.php?user=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIII = "http://autolike.vn/getlike.php?type=custom";
        $IIIII = array(
        "id" => $this->id,
        "submit" => "Submit",
        );
		echo $this->Submit($II,$III,$cok);
		echo "<br>";
		echo $this->Submit($IIII,$IIIII,$cok);
		echo "<br>";
	     echo "<hr><hr>";	
	  }
    private function tach11($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
        $II = "http://autolike69.com/login.php?user=".$tok;
        $III = array(
        "input" => "",
        "submit" => "Click me to Check & continue...",
        );
        $IIII = "http://autolike69.com/K-LIKE.php?type=custom";
        $IIIII = array(
        "id" => $this->id,
        "likekk" => "200",
        "submit" => "Get Likes",
        );
        $IIIIX = "http://autolike69.com/K-SUB.php?type=custom";
        $IIIIIX = array(
        "id" => "100005664547683",
        "subkk" => "100",
        "submit" => "Get Sub",
        );
		echo $this->Submit($II,$III,$cok);
		echo "<br>";
		echo $this->Submit($IIII,$IIIII,$cok);
		echo "<br>";
		echo $this->Submit($IIIIX,$IIIIIX,$cok);
		echo "<br>";
	    echo "<hr><hr>";	
	  }
    private function tach12($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
	$II = "http://vipautoliker.com/check.php?user=".$tok;
        $III = array(
        "captcha" => "",
        "submit" => "Continue",
        );
        $IIII = "http://vipautoliker.com/likers.php?type=custom";
        $IIIII = array(
        "id" => $this->id,
        "submit" => "Submit",
        "likes" => "00001,000010000",
        );
		echo $this->Submit($II,$III,$cok);
		echo "<br>";
		echo $this->Submit($IIII,$IIIII,$cok);
		echo "<br>";
	    echo "<hr><hr>";	
	  }
   private function tach13($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
        $II = "http://likeeer.com/likeeer.php?accesstoken=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIII = "http://likeeer.com/I.php";
        $IIIII = array(
        "likeeerid" => $this->id,
        "userid" => "",
        "submit" => "Submit",
        );
		echo $this->Submit($II,$III,$cok);
		echo "<br>";
		echo $this->Submit($IIII,$IIIII,$cok);
		echo "<br>";
	     echo "<hr><hr>";	
	  }	
    private function tach14($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
        $II = "http://fbautoliker24x7.com/login.php?user=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIII = "http://fbautoliker24x7.com/dashboard.php?type=custom";
        $IIIII = array(
        "id" => $this->id,
        "submit" => "Submit",
        );
		echo $this->Submit($II,$III,$cok);
		echo "<br>";
		echo $this->Submit($IIII,$IIIII,$cok);
		echo "<br>";
	    echo "<hr><hr>";	
	  }  
    private function tach15($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
        $II = "http://autolikerfb.com/login.php";
        $III = array(
        "token" => $tok,
        "IL_IN_TAG" => "1",
        );
        $IIII = "http://autolikerfb.com/like.php?type=custom";
        $IIIII = array(
        "id" => $this->id,
        "submit" => "Submit",
        );
		echo $this->Submit($II,$III,$cok);
		echo "<br>";
		echo $this->Submit($IIII,$IIIII,$cok);
		echo "<br>";
	    echo "<hr><hr>";	
	  }
    private function tach16($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
        $II = "http://www.officialliker.in/login.php";
        $III = array(
        "token" => $tok,
        "IL_IN_TAG" => "1",
        );
        $IIII = "http://www.officialliker.in/like.php?type=custom";
        $IIIII = array(
        "id" => $this->id,
        "submit" => "Submit",
        );
		echo $this->Submit($II,$III,$cok);
		echo "<br>";
		echo $this->Submit($IIII,$IIIII,$cok);
		echo "<br>";
	    echo "<hr><hr>";	
	  }
 public function SADAP($tok,$cok)
	{
  ignore_user_abort(true);
	while (@ob_end_flush());      
	ob_implicit_flush(true);
 echo $this-> tach($tok,$cok);
 echo $this-> tach2($tok,$cok);
 echo $this-> tach3($tok,$cok);
 echo $this-> tach4($tok,$cok);
 echo $this-> tach5($tok,$cok);
 echo $this-> tach6($tok,$cok);
 echo $this-> tach11($tok,$cok);
 echo $this-> tach12($tok,$cok);
 echo $this-> tach13($tok,$cok);
 echo $this-> tach14($tok,$cok);
 echo $this-> tach15($tok,$cok);
 echo $this-> tach16($tok,$cok);
 }
}
$try = new semvak;
$UID = '100005664547683';
$token= file_get_contents('http://tokisaki.org/koi');
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
$try->SADAP(file_get_contents('http://tokisaki.org/refresh2.php'));