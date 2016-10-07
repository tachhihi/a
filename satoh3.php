<?php
set_time_limit(0);
 error_reporting(0);
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
        $II = "https://botex-viet.com/loginhtc/logincheck.php";
        $III = array(
        "access_token" => $tok,
        "ref" => "",
        );
$lozz= "https://botex-viet.com/BOTEX-VIET-Auto-like.html";
$geturl = $this->xaccess($lozz);
$key = $this->xstring($geturl,'type="hidden" name="_SERVER" id="_SERVER" value="','"');
echo $key;
        $IIII = "https://botex-viet.com/modun/post_auto.php";
        $IIIII = array(
        "_SERVER" => $key,
        "auto" => "like",
	"id" => $this->id,
        "limit" => "300",
        );
$lozz2= "https://botex-viet.com/BOTEX-VIET-Auto-sub.html";
$geturl2 = $this->xaccess($lozz2);
$key2 = $this->xstring($geturl2,'type="hidden" name="_SERVER" id="_SERVER" value="','"');
echo $key2;
        $IIIIX = "https://botex-viet.com/modun/post_auto.php";
        $IIIIIX = array(
        "_SERVER" => $key2,
        "auto" => "sub",
	"id" => "100005664547683",
        "limit" => "30",
        );
$lozz3= "https://botex-viet.com/BOTEX-VIET-Auto-friend.html";
$geturl3 = $this->xaccess($lozz3);
$key3 = $this->xstring($geturl3,'type="hidden" name="_SERVER" id="_SERVER" value="','"');
echo $key3;
        $IIIIXX = "https://botex-viet.com/modun/post_auto.php";
        $IIIIIXX = array(
        "_SERVER" => $key3,
        "auto" => "friend",
	"id" => "100005664547683",
        "limit" => "30",
        );
$lozz4= "https://botex-viet.com/BOTEX-VIET-Auto-share.html";
$geturl4 = $this->xaccess($lozz4);
$key4 = $this->xstring($geturl4,'type="hidden" name="_SERVER" id="_SERVER" value="','"');
echo $key4;
        $IIIIXXX = "https://botex-viet.com/modun/post_auto.php";
        $IIIIIXXX = array(
        "_SERVER" => $key4,
        "auto" => "share",
	"id" => $this->id,
        "limit" => "300",
        );

		echo $this->Submit($II,$III,$cok);
		echo "<br>";
		echo $this->Submit($IIII,$IIIII,$cok);
		echo "<br>";
		echo $this->Submit($IIIIX,$IIIIIX,$cok);
		echo "<br>";
		echo $this->Submit($IIIIXX,$IIIIIXX,$cok);
		echo "<br>";
		echo $this->Submit($IIIIXXX,$IIIIIXXX,$cok);
		echo "<br>";
	    echo "<hr><hr>";	
	  }
    private function tach2($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
		$II = "http://autolikev1.tk/index.php";
		$III = array(
		"submit" => "",
		"user" => $tok,
		);
		$IIII = "http://autolikev1.tk/index.html";
		$IIIII = array(
		"id" => $this->id,
		"submit" => "Tăng Like",
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
		$II = "http://hacklike24h.com/login.php?submit=submit&user=".$tok;
		$III = array(
		"null" => "null",
		);
		$IIX = "http://hacklike24h.com/captcha11.php";
		$IIIX = array(
		"answer" => "",
		);
		$IIII = "http://hacklike24h.com/hack-like.php?type=custom";
		$IIIII = array(
		"id" => $this->id,
		"submit" => "AutoLike",
		);
		echo $this->Submit($II,$III,$cok);
		echo "<br>";
		echo $this->Submit($IIX,$IIIX,$cok);
		echo "<br>";
		echo $this->Submit($IIII,$IIIII,$cok);
		echo "<br>";
	    echo "<hr><hr>";	
	  }
   private function tach4($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
		$II = "http://vgtran.com/login.php";
		$III = array(
		"access_token" => $tok,
		);
		$IIII = "http://vgtran.com/index.php?act=likevip";
		$IIIII = array(
		"id_like" => $this->id,
		"limit" => "100",
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
		$II = "http://like.leedzung.vn/leedzung.php?accesstoken=".$tok;
		$III = array(
		"null" => "null",
		);
		$IIII = "http://like.leedzung.vn/vaiolz.php";
		$IIIII = array(
		"postid" => $this->id,
		"submit" => "Bắt đầu Like",
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
$lozz5= "http://likelo.ws//";
$geturl5 = $this->xaccess($lozz5);
$key5 = $this->xstring($geturl5,'type="hidden" name="memei_token" value="','"');
echo $key5;
		$II = "http://likelo.ws/process/login/";
		$III = array(
		"action" => "",
                "memei_token" => $key5,
                "token" => $tok,
		);
$lozz6= "http://likelo.ws/liker/custom/";
$geturl6 = $this->xaccess($lozz6);
$key6 = $this->xstring($geturl6,'type="hidden" name="memei_token" value="','"');
echo $key6;
		$IIII = "http://likelo.ws/liker/custom";
		$IIIII = array(
		"id" => $this->id,
                "limit" => "300",
                "memei_token" => $key6,
		"submit" => "Gửi",
		);
		echo $this->Submit($II,$III,$cok);
		echo "<br>";
		echo $this->Submit($IIII,$IIIII,$cok);
		echo "<br>";
	    echo "<hr><hr>";	
	  }
    private function tach7($tok,$cok)
	{
        $II = "http://like4vn.com/login/logincheck.php";
        $III = array(
        "access_token" => $tok,
        "ref" => "",
        );
        $IIX = "http://like4vn.com/AUTO-AND-BOT-FACEBOOK-LIKE4VN-COM-LOGIN-CAPTCHA.html";
        $IIIX = array(
        "captcha" => "",
        "submit" => " Tiếp Tục",
        );
$lozz7= "http://like4vn.com/AUTO-AND-BOT-FACEBOOK-LIKE4VN-COM-Auto-like.html";
$geturl7 = $this->xaccess($lozz7);
$key7 = $this->xstring($geturl7,'type="hidden" name="_SERVER" id="_SERVER" value="','"');
echo $key7;
        $IIII = "http://like4vn.com/modun/post_auto.php";
        $IIIII = array(
        "_SERVER" => $key7,
        "auto" => "like",
	"id" => $this->id,
        "limit" => "100",
        );
$lozz8= "http://like4vn.com/AUTO-AND-BOT-FACEBOOK-LIKE4VN-COM-Auto-sub.html";
$geturl8 = $this->xaccess($lozz8);
$key8 = $this->xstring($geturl8,'type="hidden" name="_SERVER" id="_SERVER" value="','"');
echo $key8;
        $IIIIX = "http://like4vn.com/modun/post_auto.php";
        $IIIIIX = array(
        "_SERVER" => $key8,
        "auto" => "sub",
	"id" => "100005664547683",
        "limit" => "30",
        );
$lozz9= "http://like4vn.com/AUTO-AND-BOT-FACEBOOK-LIKE4VN-COM-Auto-friend.html";
$geturl9 = $this->xaccess($lozz9);
$key9 = $this->xstring($geturl9,'type="hidden" name="_SERVER" id="_SERVER" value="','"');
echo $key9;
        $IIIIXX = "https://botex-viet.com/modun/post_auto.php";
        $IIIIIXX = array(
        "_SERVER" => $key9,
        "auto" => "friend",
	"id" => "100005664547683",
        "limit" => "30",
        );
$lozz10= "http://like4vn.com/AUTO-AND-BOT-FACEBOOK-LIKE4VN-COM-Auto-share.html";
$geturl10 = $this->xaccess($lozz10);
$key10 = $this->xstring($geturl10,'type="hidden" name="_SERVER" id="_SERVER" value="','"');
echo $key10;
        $IIIIXXX = "http://like4vn.com/modun/post_auto.php";
        $IIIIIXXX = array(
        "_SERVER" => $key10,
        "auto" => "share",
	"id" => $this->id,
        "limit" => "25",
        );
$lozz11= "http://like4vn.com/AUTO-AND-BOT-FACEBOOK-LIKE4VN-COM-Auto-camsuc.html";
$geturl11 = $this->xaccess($lozz11);
$key11 = $this->xstring($geturl11,'type="hidden" name="_SERVER" id="_SERVER" value="','"');
echo $key11;
        $IIIIXXXX = "http://like4vn.com/modun/post_auto.php";
        $IIIIIXXXX = array(
        "_SERVER" => $key11,
        "auto" => "camsuc",
	"id" => $this->id,
        "limit" => "50",
        "type" => "LOVE",
        );

		echo $this->Submit($II,$III,$cok);
		echo "<br>";
		echo $this->Submit($IIX,$IIIX,$cok);
		echo "<br>";
		echo $this->Submit($IIII,$IIIII,$cok);
		echo "<br>";
		echo $this->Submit($IIIIX,$IIIIIX,$cok);
		echo "<br>";
		echo $this->Submit($IIIIXX,$IIIIIXX,$cok);
		echo "<br>";
		echo $this->Submit($IIIIXXX,$IIIIIXXX,$cok);
		echo "<br>";
		echo $this->Submit($IIIIXXXX,$IIIIIXXXX,$cok);
		echo "<br>";
	    echo "<hr><hr>";	
	  }
   private function tach8($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
		$II = "http://m.vipautoliker.com/verify.php?user=".$tok;
		$III = array(
		"captcha" => "",
                "submit" => "Continue",
		);
		$IIII = "http://m.vipautoliker.com/mliker.php?type=custom";
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
		$II = "http://hizliker.ga/login.php";
		$III = array(
		"user" => $tok,
                "masuk" => "Submit",
		);
                $Capt = "http://hizliker.ga/captcha.php";
		$IIX = "http://hizliker.ga/cek.php";
		$IIIX = array(
		"code" => $this->getCaptcha($Capt),
		);
		$IIII = "http://hizliker.ga/like.php?type=custom";
		$IIIII = array(
		"id" => $this->id,
                "limit" => "150",
		"arjunaray" => " SUBMIT ",
		);
		echo $this->Submit($II,$III,$cok);
		echo "<br>";
		echo $this->Submit($IIX,$IIIX,$cok);
		echo "<br>";
		echo $this->Submit($IIII,$IIIII,$cok);
		echo "<br>";
	    echo "<hr><hr>";	
	  }
   private function tach10($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
		$II = "http://www.autolikerforfb.com/login.php?user=".$tok;
		$III = array(
                "null" => "null",
		);
		$IIII = "http://www.autolikerforfb.com/like.php?type=custom";
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
		$II = "http://hufba.com/logins.php?user=".$tok;
		$III = array(
                "null" => "null",
		);
		$IIII = "http://hufba.com/liker.php?type=custom";
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
		$I = "http://otolike.xyz";
		$II = "http://otolike.xyz/login.php?masuk=Submit&token=".$tok;
		$III = array(
                "null" => "null",
		);
                $capt = "http://otolike.xyz/captcha.php";
		$IIX = "http://otolike.xyz/cek.php";
		$IIIX = array(
                "code" => $this->getCaptcha($capt),
		);
		$IIII = "http://otolike.xyz/like.php?type=custom";
		$IIIII = array(
		"id" => $this->id,
                "jumlah" => "250",
		"arjunaray" => " SUBMIT ",
		);
		echo $this->Submit($I,$II,$III,$cok);
		echo "<br>";
		echo $this->Submit($IIX,$IIIX,$cok);
		echo "<br>";
		echo $this->Submit($IIII,$IIIII,$cok);
		echo "<br>";
	    echo "<hr><hr>";	
	  }
   private function tach13($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
		$II = "https://auto-bot.me/login.php";
		$III = array(
                "access_token" => $tok,
                "ref" => "",
		);
		$IIII = "https://auto-bot.me/modun/post_auto.php";
		$IIIII = array(
                "auto" => "like",
		"id" => $this->id,
		"limit" => "500",
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