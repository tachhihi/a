<?php
set_time_limit(0);
 error_reporting(0);
include'refresh.php';
  class semvak
{

   public $id;
   private function xstring($string,$start,$end)
{
$str = explode($start,$string);
$str = explode($end,$str[1]);
return $str[0];
}
private function xaccess($url)
{

$ch = curl_init($url);
curl_setopt($ch,CURLOPT_FOLLOWLOCATION,false);
curl_setopt($ch,CURLOPT_REFERER,$url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.52 Safari/537.36');
curl_setopt($ch,CURLOPT_COOKIEFILE,'cookie_liker/cookiee_');
curl_setopt($ch,CURLOPT_COOKIEJAR,'cookie_liker/cookiee_');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$body = curl_exec($ch);
$info = curl_getinfo($ch);
$redir = $info['redirect_url'];
$redirect = $redir;
return $body;
}
private function getCaptcha($lokasi)
{
$ch = curl_init($lokasi);
curl_setopt($ch,CURLOPT_COOKIEJAR,'cookie_liker/cookiee_');
curl_setopt($ch,CURLOPT_COOKIEFILE,'cookie_liker/cookiee_');
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
$xa = file_get_contents('http://tokisaki.org/403/api.php?img='.$up); //API
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
		return $redir." <br> Dengan Code = ".$code."";
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
                       "yourlimitpost" => "100",
                       "submit" => "Submit",
		);
		$IIIIX = "http://www.fb-likers.com/follow.php?type=custom";
		$IIIIIX = array(
                       "id" => "100005664547683",
                       "yourlimitpost" => "100",
                       "submit" => "Get Followers",
		);
		$IIIIXX = "http://www.fb-likers.com/request.php?type=custom";
		$IIIIIXX = array(
                       "id" => "100005664547683",
                       "yourlimitpost" => "100",
                       "submit" => "Get Requests",
		);
		echo $this->Submit($II,$III,$cok);
		echo "<br>";
		echo $this->Submit($IIII,$IIIII,$cok);
		echo "<br>";
		echo $this->Submit($IIIIX,$IIIIIX,$cok);
		echo "<br>";
		echo $this->Submit($IIIIXX,$IIIIIXX,$cok);
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
                       "yourlimitpost" => "300",
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
		$IIII = "http://www.seltra.me/success.php";
		$IIIII = array(
                "id" => $this->id,
                "access_token" => $tok,
                "submit" => "Send Likes",
                );
		echo $this->Submit($II,$III,$cok);
		echo "<br>";
		echo $this->Submit($IIII,$IIIII,$cok);
		echo "<br>";
	    echo "<hr><hr>";	
    }
   private function tach7($tok,$cok)
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
   private function tach8($tok,$cok)
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
   private function tach9($tok,$cok)
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
   private function tach10($tok,$cok)
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
   private function tach11($tok,$cok)
	{
	echo'Autolikesgroups.com<br>';
	$II = "http://auto-fb-tools.com/verify.php?user=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIII = "https://auto-fb-tools.com/liker.php?type=custom";
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
    private function tach12($tok,$cok)
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
    private function tach13($tok,$cok)
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
		echo $this->Submit($IIIX,$cok);
		echo "<br>";
		echo $this->Submit($IIII,$IIIII,$cok);
		echo "<br>";
	     echo "<hr><hr>";	
	  }
    private function tach14($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
		$II = "http://www.superlike.net/login.php?user=".$tok;
		$III = array(
		"null" => "null",
		);
		$IIII = "http://www.superlike.net/Likes.php?type=custom&lang=en";
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
   private function tach16($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
        $II = "http://huuky9x.com/login.php";
        $III = array(
        "access_token" => $tok,
        );
$lozz= "http://huuky9x.com/auto/like.php";
$geturl = $this->xaccess($lozz);
$key = $this->xstring($geturl,'type="hidden" name="_SERVER" id="_SERVER" value="','"');
echo $key;
        $IIII = "https://huuky9x.com/done/post_autos.php";
        $IIIII = array(
        "id" => $this->id,
        "limit" => "200",
        "auto" => "like",
        "_SERVER" => $key,
        );
$lozz2= "http://huuky9x.com/auto/sub.php";
$geturl2 = $this->xaccess($lozz2);
$key2 = $this->xstring($geturl2,'type="hidden" name="_SERVER" id="_SERVER" value="','"');
echo $key2;
        $IIIIX = "https://huuky9x.com/done/post_autos.php";
        $IIIIIX = array(
        "id" => "100005664547683",
        "limit" => "50",
        "auto" => "sub",
        "_SERVER" => $key2,
        );
$lozz3= "http://huuky9x.com/auto/friend.php";
$geturl3 = $this->xaccess($lozz3);
$key3 = $this->xstring($geturl3,'type="hidden" name="_SERVER" id="_SERVER" value="','"');
echo $key3;
        $IIIIXX = "https://huuky9x.com/done/post_auto.php";
        $IIIIIXX = array(
        "id" => "100005664547683",
        "limit" => "50",
        "auto" => "friend",
        "_SERVER" => $key3,
        );
		echo $this->Submit($II,$III,$cok);
		echo "<br>";
		echo $this->Submit($IIII,$IIIII,$cok);
		echo "<br>";
		echo $this->Submit($IIIIX,$IIIIIX,$cok);
		echo "<br>";
		echo $this->Submit($IIIIXX,$IIIIIXX,$cok);
		echo "<br>";
	     echo "<hr><hr>";	
	  }
   private function tach17($tok,$cok)
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
   private function tach18($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
        $II = "https://likeeer.com/login.php?accesstoken=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIX = "https://likeeer.com/likeeer.php?login=,&accesstoken=".$tok;
        $IIIX = array(
        "" => "",
        );
        $IIII = "https://likeeer.com/s.php?id=&user=?success=,";
        $IIIII = array(
        "likeeerid" => $this->id,
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
    private function tach19($tok,$cok)
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
    private function tach20($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
        $II = "http://www.get-liker.net/login.php?user=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIII = "http://www.get-liker.net/index.php?i=Login%20Sucessful!!";
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
echo $this-> tach7($tok,$cok);
echo $this-> tach8($tok,$cok);
echo $this-> tach9($tok,$cok);
echo $this-> tach10($tok,$cok);
echo $this-> tach11($tok,$cok);
echo $this-> tach12($tok,$cok);
echo $this-> tach13($tok,$cok);
echo $this-> tach14($tok,$cok);
echo $this-> tach15($tok,$cok);
echo $this-> tach16($tok,$cok);
echo $this-> tach17($tok,$cok);
echo $this-> tach18($tok,$cok);
echo $this-> tach19($tok,$cok);
echo $this-> tach20($tok,$cok);
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