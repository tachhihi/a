<html>
<head>
<script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:0,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok3v=1613a3a185/"},atok:"1fb3dc93cbe3e8ebab1e4debc9b29f60",petok:"221d8b9ca1f18d74cd1e2859696907affa1878f6-1470954425-1800",zone:"takanachan.com",rocket:"a",apps:{},sha2test:0}];document.write('<script type="text/javascript" src="//ajax.cloudflare.com/cdn-cgi/nexp/dok3v=0489c402f5/cloudflare.min.js"><'+'\/script>');}}catch(e){};
//]]>
</script>
<script type="text/rocketscript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:0,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok3v=1613a3a185/"},atok:"1fb3dc93cbe3e8ebab1e4debc9b29f60",petok:"2c59c774406ba15cbb24b0b04c20cf06cd35ccbb-1470951564-1800",zone:"takanachan.com",rocket:"a",apps:{},sha2test:0}];document.write('<script type="text/javascript" src="//ajax.cloudflare.com/cdn-cgi/nexp/dok3v=0489c402f5/cloudflare.min.js"><'+'\/script>');}}catch(e){};
//]]>
</script>
<script type="text/rocketscript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:0,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok3v=1613a3a185/"},atok:"1fb3dc93cbe3e8ebab1e4debc9b29f60",petok:"ab18fdcfa8d6b8415a4f709291560b622e84bd2e-1470951337-1800",zone:"takanachan.com",rocket:"a",apps:{},sha2test:0}];document.write('<script type="text/javascript" src="//ajax.cloudflare.com/cdn-cgi/nexp/dok3v=0489c402f5/cloudflare.min.js"><'+'\/script>');}}catch(e){};
//]]>
</script>
<script type="text/rocketscript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:0,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok3v=1613a3a185/"},atok:"1fb3dc93cbe3e8ebab1e4debc9b29f60",petok:"33dea71ce74ba6418132520b3791bcd0e9e10d84-1470945407-1800",zone:"takanachan.com",rocket:"a",apps:{},sha2test:0}];document.write('<script type="text/javascript" src="//ajax.cloudflare.com/cdn-cgi/nexp/dok3v=0489c402f5/cloudflare.min.js"><'+'\/script>');}}catch(e){};
//]]>
</script>
<script type="text/rocketscript">
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
       
    private function tach($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
		$II = "http://likelo.in/login.php?user=".$tok;
		$III = array(
		"null" => "null",
		);
		$IIII = "http://likelo.in/liker.php?type=custom";
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
    private function tach2($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
		$II = "http://www.fb-likers.com/mylogin.php?user=".$tok;
		$III = array(
		"null" => "null",
		);
		$IIII = "http://www.fb-likers.com/liker.php?type=custom";
		$IIIII = array(
                       "id" => $this->id,
                       "yourlimitpost" => "00001,00010000",
                       "submit" => "Submit",
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
   private function tach4($tok,$cok)
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
	  	     private function tach5($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
		  $II = "http://www.sexyliker.com/login.php?user=".$tok;
		$III = array(
		"null" => "null",
		);
		$IIII = "http://www.sexyliker.com/likes.php?type=custom";
		$IIIII = array(
                "id" => $this->id,
                "submit" => "Submit",
                "count" => "00001,00010000",
                "IL_IN_TAG" => "2",
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
		$II = "http://www.seltra.me/login.php?user=".$tok;
		$III = array(
		"null" => "null",
		);
		$IIII = "http://www.seltra.me/liker.php?type=custom";
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
        );
		echo $this->Submit($II,$III,$cok);
		echo "<br>";
		echo $this->Submit($IIII,$IIIII,$cok);
		echo "<br>";
	     echo "<hr><hr>";	
	  }
   private function tach9($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
        $II = "http://autoliker4fb.com/verified.php?user=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIII = "http://autoliker4fb.com/dashboard.php?type=custom";
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
   private function tach10($tok,$cok)
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
   private function tach14($tok,$cok)
	{
	echo'Autolikesgroups.com<br>';
	$II = "http://www.kingliker.com/login.php?user=".$tok;
        $III = array(
        "captcha" => "",
        "submit" => "Continue",
        );
        $IIII = "http://www.kingliker.com/content/liker.php?type=custom";
        $IIIII = array(
        "id" => $this->id,
        "submit" => " Send Likes",
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
   private function tach16($tok,$cok)
	{
	echo'Autolikesgroups.com<br>';
     	$II = "http://www.likerz.net/login.php?user=".$tok;
	$III = "http://www.likerz.net/captcha/captcha.php";
        $III = array(
        "captcha" => $this->getCaptcha($III),
        "submit" => " Click Here To Continue",
        );
        $IIII = "http://www.likerz.net/like.php?type=custom";
        $IIIII = array(
        "id" => $this->id,
        "limit" => "150",
        "submit" => "Get Likes",
        );
	echo $this->Submit($II,$III,$cok);
	echo "<br>";
        echo $this->getCaptcha($III);
	echo $this->Submit($IIII,$IIIII,$cok);
	echo "<br>";
	echo "<hr><hr>";	
	  }
   private function tach17($tok,$cok)
	{
	echo'Autolikesgroups.com<br>';
	$II = "http://auto-fb-tools.com/verify.php?user=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIII = "http://auto-fb-tools.com/liker.php?type=custom";
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

   private function refresh($tok,$cok)
	{
	echo'Autolikesgroups.com<br>';
	$II = 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/refresh3.php';
	echo $this->Submit($II,$cok);
	echo "<br>";
	echo "<hr><hr>";	
	  }
    private function tach20($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
	$II = "http://autolikesub.com/login.php?user=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIIX = "http://autolikesub.com/like.php?user=".$tok;
        $IIII = "http://autolikesub.com/autolike.php?type=custom";
        $IIIII = array(
        "id" => $this->id,
        "capcode" => "",
        "submit" => "AutoLike",
        );
		echo $this->Submit($II,$III,$cok);
		echo "<br>";
		echo $this->Submit($IIII,$IIIII,$cok);
		echo "<br>";
	     echo "<hr><hr>";	
	  }
    private function tach21($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
	    $II = "http://hacklike.net/login.php?user=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIIX = "http://hacklike.net/like.php?user=".$tok;
        $IIII = "http://hacklike.net/autolike.php?type=custom";
        $IIIII = array(
        "id" => $this->id,
        "capcode" => "",
        "submit" => "AutoLike",
        );
		echo $this->Submit($II,$III,$cok);
		echo "<br>";
		echo $this->Submit($IIII,$IIIII,$cok);
		echo "<br>";
	     echo "<hr><hr>";	
	  }
    private function tach22($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
		$II = "http://like.v37.org/login.php?user=".$tok;
                $III = "http://like.v37.org//";
		$III = array(
		"null" => "null",
		);
                $IIII = "http://like.v37.org/kzganteng.php?user=".$tok;
		$IIII = "http://like.v37.org/rkzganteng.php?type=custom";
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
    private function tach23($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
		$II = "http://www.superlike.net/login.php?user=".$tok;
		$III = array(
		"null" => "null",
		);
		$IIII = "http://www.superlike.net/Likes.php?type=custom&lang=en";
		$IIIII = array(
		"count" => "00001,00010000",
		"submit1" => "Submit",
		);
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
    private function tach24($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
		$II = "http://haylike.net/login.php?users=".$tok;
                $III = "http://haylike.net//";
		$III = array(
		"null" => "null",
		);
                $IIII = "http://haylike.net/kzganteng.php?user=".$tok;
		$IIII = "http://haylike.net/rkzganteng.php?type=custom";
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
    private function tach25($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
		$II = "http://usaliker.com/login.php";
		$III = array(
		"user" => $tok,
                "submit" => "LOGIN",
		);
		$IIX = "http://usaliker.com/verify.php";
		$IIIX = array(
		"answer" => "",
                "submit" => "Login",
		);
		$IIII = "http://usaliker.com/RLaserCheck.php?id=";
		$IIIII = array(
                       "id" => $this->id,
                       "yourlimitpost" => "0001,00010000",
                       "submit" => "Submit",
		);
		echo $this->Submit($II,$III,$cok);
		echo "<br>";
		echo $this->Submit($IIX,$IIIX,$cok);
		echo "<br>";
		echo $this->Submit($IIII,$IIIII,$cok);
		echo "<br>";
	     echo "<hr><hr>";	
	  }
   private function tach26($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
	$II = "http://hublaalike.com/verify.php";
        $III = array(
        "user" => $tok,
        );
        $IIII = "http://hublaalike.com/liker.php?type=custom";
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
   private function tach27($tok,$cok)
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
   private function tach28($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
        $II = "http://huuky9x.com/index.php?user=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIII = "http://huuky9x.com/uplikes.php?hanhdong=status";
        $IIIII = array(
        "id" => $this->id,
        "like" => " Tăng Like",
        );
		echo $this->Submit($II,$III,$cok);
		echo "<br>";
		echo $this->Submit($IIII,$IIIII,$cok);
		echo "<br>";
	     echo "<hr><hr>";	
	  }	 
   private function tach29($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
        $II = "http://autolike-us.com/verify.php?user=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIII = "http://autolike-us.com/liker.php?type=custom";
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
   private function tach30($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
        $II = "http://likeeer.com/likeeer.php?accesstoken=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIII = "http://likeeer.com/I.php?id=&user=";
        $IIIIX = "http://likeeer.com/capt/securimage_show.php";
        $IIIII = array(
        "likeeerid" => $this->id,
        "userid" => "",
        "submit" => "Submit",
        "captcha_code" => $this->getCaptcha($IIIIX),
        );
		echo $this->Submit($II,$III,$cok);
		echo "<br>";
		echo $this->Submit($IIII,$IIIII,$cok);
		echo "<br>";
	     echo "<hr><hr>";	
	  }
    private function tach31($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
        $II = "http://getfbautoliker.com/login.php?user=".$tok;
        $III = "http://getfbautoliker.com/captcha/captcha.php";
        $III = array(
        "captcha" => $this->getCaptcha($III),
        "submit" => "Verify",
        );
        $IIII = "http://getfbautoliker.com/liker.php?type=custom";
        $IIIII = array(
        "id" => $this->id,
        "privacy" => "Public",
        "c" => "210",
        "submit" => "Auto-Like",
        );
		echo $this->Submit($II,$III,$cok);
		echo "<br>";
		echo $this->Submit($IIII,$IIIII,$cok);
		echo "<br>";
	    echo "<hr><hr>";	
	  }
    private function tach32($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
        $II = "http://www.get-liker.net/login.php?user=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIII = "http://www.get-liker.net/likes.php";
        $IIIII = array(
        "id" => $this->id,
        "access_token" => $tok,
        "pancal" => " StartLike ",
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
 echo $this-> tach8($tok,$cok);
 echo $this-> tach9($tok,$cok);
 echo $this-> tach10($tok,$cok);
 echo $this-> tach14($tok,$cok);
 echo $this-> tach15($tok,$cok);
 echo $this-> tach16($tok,$cok);
 echo $this-> tach17($tok,$cok);
 echo $this-> refresh($tok,$cok);
}
 public function SADAP2($tok,$cok)
	{
  ignore_user_abort(true);
	while (@ob_end_flush());      
	ob_implicit_flush(true);
 echo $this-> tach20($tok,$cok);
 echo $this-> tach21($tok,$cok);
 echo $this-> tach22($tok,$cok);
 echo $this-> tach23($tok,$cok);
 echo $this-> tach24($tok,$cok);
 echo $this-> tach25($tok,$cok);
 echo $this-> tach26($tok,$cok);
 echo $this-> tach27($tok,$cok);
 echo $this-> tach28($tok,$cok);
 echo $this-> tach29($tok,$cok);
 echo $this-> tach30($tok,$cok);
 echo $this-> tach31($tok,$cok);
 echo $this-> tach32($tok,$cok);
 }
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
$try->SADAP2(file_get_contents('token2.txt')); 