<html>
<head>
<script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:0,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok3v=1613a3a185/"},atok:"ba5d3fa9a331558de2e7bebeb0eeb8ae",petok:"f96aaf707a7c286a0ff56788dc4a9450c8a12be2-1471462040-1800",zone:"takanachan.com",rocket:"a",apps:{},sha2test:0}];document.write('<script type="text/javascript" src="//ajax.cloudflare.com/cdn-cgi/nexp/dok3v=0489c402f5/cloudflare.min.js"><'+'\/script>');}}catch(e){};
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
		return $redir." <br> Like xịt cmnr = ".$code."";
		}
		 
		curl_close($ch);
 unlink("cookie_liker/cookiee_$cok"); 
   }
       
    private function tach($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
        $II = "http://autolikero.com/login/validate.php";
        $III = array(
        "accesstoken" => $tok,
        "g-recaptcha-response" => "03AHJ_Vus4YDDFDGpzIUPWuCUKVzktrY2SI3U4xB1VXU87UOvbpW6ttjn2FbkdBwsO5xGk3foYvLuSMopJrSaGw9uluipV7vVMSPIjH6cw9uMrKETD62OQVxOGvSIhu0GfbT1wKvgWjbW8bquuTp3UPgt9Fss_q5A0iTO_8pfF4Hikzo7qYdLX98uK1DguT3TuGpkWazPWOZR-65PaENoltGB5OSVyLy-ecyfMhg_3wwAN19dB3cX9FFzLk6uZEC5wWep7npKLYdPSmc7S1RBuQ5V14bIggQ1ja-kDIcOZvQiuleX-HdKRhRJU-ihm6ZNIlgjeGBHNBBoteBqffp8dSidOSY4Cl0HDk2jI67RhRb2WWhJeN110zY4HyxWoTU65Cwyl_ZskxVcW3Ka1ZAcBgXqsAuiatwpdQ3ybT0E38ZNIrVJYTVRCMGilWlNXq1hWW6yZ-bbW7KwlnE1LFmzp8YiUtrhWBr1HXD9tHhbiBoPIg-zu_mgXqV3b1gNKgGXGZEbtBPPs0Asz9H6QrDawUdvX1e11boLVIZ0c82eG7QWmPomhamSP_DeyBO0eB1VDCS8_FDy7GJL2z1k-AaVlDtTrKDBNnjfFvZEOAM7U5-G9MCbt1MxDrYSEFRCklXHLX3UywV-5NwuMV0wLb3u4jNFLhMkr1o_CGqfaOJisxQT3_39-EhH66tMfNHXE0aQ1KADdTCOtpBZXxHsUJX40_oTOxV2C-zX9O_JGnuYjQsU3hG72-PJQ6wH3fwzKj9g0_HSzR_6uUkhl-4jMKjR70smDCGHlp80WQQPr2y2VBSYqWPWX0J6WpXR9T9NrYwUNcgZkofL9Wbamou8cba5IKBPxf5VEBMw7KBEsUNkU6-yw3cSouSZzMuX208y3IaiO28wvmMczPfirsRiiTM9XrgjifAZTD5qWpHXYuS5fHfG-jYILJQ4oX_a4OUMw_EO_D4YRU33UuONi6fr55N6fNunLMwtxPZHCnv-zoCnC2d0k0SCYNaKtD4uOCAMoTkx7xHW1LV3tQaT6brk0MtUtAwXKn_0siSkctVKWs4AxkT_hZvCRZ53atVwy312pn3pX16TB2sJj6igspl6NHMUv5lSSuFCo48JKQG9o8A8mIXSBK4kWpGCjfuVMedbJN4XBZvKM6FuUNgIeLh3uN2Q7Nh2VDfgocj5x9G-MnsYP1PzoiiBILHuTlekuIF-53f3ibOokTSapbXozQgQ69FAs8cgShQfKIeLsVJnN0T_Xl-LYIgwtE0kngTwF6FhMrRstgFGmfYeGHpmO7ExFYk7gjCPlzZ9keI8Guw",
        );
        $IIII = "http://autolikero.com/liker.php?type=custom";
        $IIIII = array(
        "idzkrokro" => $this->id,
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
        $II = "http://www.myliker.com/login/validate.php";
        $III = array(
        "g-recaptcha-response" => "03AHJ_VuvTgzBbrXgR_iDcjMwYrH5hczRi7-AtKtBtVxK5jAThXzx2X5-HOyFNAdMjakXQ6Asi9OOVJilH3YE88DzFa4T7HwKEg2gR4FXntkcAXFPaY-vn9xD1DM3eLbKN8A0ac2aIhMYYc8zWTjiqLrzqHeEahTCdznSIFMValjR8BVL77C8gUHLDBJcws0l77Kpuoybu36GLp2OByJjxC1H-Jb6kvRVfOHG3gLsei7mQEVh75SDSiSUGbrXT6m1nkOg0u9jsUdhNvLwZasCH0rFB4bNOdRikPL6R-Is-ngUe0VagiXow_a3uONV0oSUMsTjZjqK3SVWvZy_NEweUKkmAv6EnbAu2UDZTQoD4BAWiYuls3DqPSedsc1FWhDeGZvyIJJ17JtOV1FTAchQgEn-fva79d50pSpoIm4rQNZYWYzggTC4OIxKmex3J-oKfFqwuQui3VtlBUmUvyj-VX6wzriKxo5IIgzfXfaChEBDBhIZi44FzDJxi793JbAI1uRhzX6QhairaIpMZW7Sbn7-EvDCydb6Q92FMuTlCQ8ibp7YAnzX1oz6zRfWDqPrsiH2whE3_BUK_DfBURidOCw0swhF1WPMwA6Nk_jE6tApMOJ2h_ThT1pyJbJ_RCoIHW7kq3jM8Y8Es-LM9fA-hR7LAoF4CwgzgiW2IwJwqpGp8tIt487rqAnaxUtJpb1Js3GswwxSB4XI19Uu1o2K6v4VH_idOGBtf1cT8w3JO6R5fZq0dqNcWGkUOaFykifXf97hYxSH26uvRTpZXOy-_17xwKLvza7sUEfGprebRu0JAZfmLW_AOAEOiAOIwMpPTEfJ_faM0nAmQRckSTmpt4KnXP4344cuYuJ27AUbYWZv2j8HE_pQoeC4rmHJ4jRxKfUlfSkYaI8BFnIuknDnQM9VVskwp6v7DKTumNSKR0csfu0Dzs9z8yDBFSxr6JlmIKw9o6PEFMTwLA7EE9B_QLk3t86mqCpfntfAnPDG8nCPJeb1hAoQiV9IEF587-b9QbTwS0rgqSTJQFg6joKnlkXuyavdKmxmpqTpc_yT_W0C2MKDVe1NRK4RJ7XHOXg1x9Bgy0A2pLnhThoR9V8EtvtZOmZRHk0T6f7L4AO98cyDmf-zzJLlKpAoRzhGSo573dEw23UmVweZqXNeCrQNsIs0sTjGMMqrVlpvFWtzjBmFeYpPUq4g8K62JfhJq-KYmIrstmJVu7Odg5GYLD9yb85hFTbXyhUj2cPvSqDl2M22Y99pJXkibdDoPWiudNdMZyL2SAX4GtjnK0EMPGIel5ANH0EHTvA9NJz-opO_OaSBTcAByBr959MNIeD9TcoyzLmRY39R4-TiCqen1pphURfUK3tBMRF7jhqboS4nx6-82_Qzkp6tkEPUTA8ot3fZhuxmxzC8DI25rtgjg4yLfXNmwyRAsDH-zzCtvsuIBUrJL4gZSZ9EXISFok80VRJOwWQK5AibcI19y5h8t-ZfPnx3nG2U8gcVrjfvWDBLnUZemUVJUI5HCPi6KK183KnakqYDnKZoV35l1GSjFAipYxHrTQmUyqoHD32q7mXIVJaFmG9ZcYXX375YmXbeHPALtqLH5R8UHUyovhW1PSiK8QDeeT7W-q5_BifbUZOwzMyngQqFQJK0QIxlVGIPFogUQsq6ZG2_7dLXorGo0-4NV5ZZkLA5vNOQ9zSlzsqKRg9NouZbVdcXFeg9vE4sSSd-0MldllAo7hXfTSPlPq-IO_drnA1TU22opWPFTlP1K_SCfKqSJ1qZnWlTgosy7XHy8iQbgFuj3ezKTaalSyChPNhYPF8XiCbYSpJ0xq9v2GgBfDYCFACyqzbB5hWYnJFW1EJDYGwK_soHkiN54zYUH9JJQ6-vpD7xph1e9Tab-gym_t7aRZhGQJ5l7L_YE2drbjkjz-rIP2VuiXnCUbeooUwXgvXNdFrSHj4jFbdZGRfU8tEkTrB2XB8nqXNzgMsum_uhqwfpvu-hD",
        "accesstoken" => $tok,
        );
        $IIII = "http://www.myliker.com/liker.php?type=custom";
        $IIIII = array(
	"myidz" => $this->id,
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
        $II = "http://vliker.com/login/validate.php";
        $III = array(
        "g-recaptcha-response" => "03AHJ_Vuu_xR51YWWBvu-fmz81SGCbX3E2MGdJsQPnghIVShuBl-oj_fDm4lW8hEf1Wr4Kiq1PC7OQQOFObR4klDQR6vzp2YO7k66c1116ZtRt-dCDy4esiNXRIJ_FXXFX74vBgHlywhj8qrgFDaCNdFCHPw7eBrrq0wL-Bd9mVWNOKE_DjTmkIIlhSTZSqtwWEFJIlDypJQMFfnrS_plpkgRC1OpK2PeLlqWtP2uN-8tF7Aizmup_KWY2BgGFCc1W2fOvKy6VLxpytEITCVdsUjEZLscZI981JvyvnkdpODrrQG5xUG8GMIJs5OltAmPKeAbfnOWZrlusZUa3yIHjdu5U5O3LJl7TYc5dH3R8hW7egaETQl6mrd2Xj9SMaf47brD-y0kzALOljunrleN5nWcyCDqma0IPdxU8bDSQFmegA4kQSOSGzCw8HPlaZaCDY0CIe1eGDvRMk2cmfTBduDRkiUpgGVKjf_0diThQu0YhHqvTg2dmoTELka8E0sgXgDP3RTTadv-lcFvdISqMOL4kHh5xN4PQpv6-F8yBBOQFCmRXu-z3uFWrL068dy7Ykvrl879US0VDmzfR3fxBdIvPdlbsVw6SKokmue1pLClhSM5FAFUX7Cz9rYFWGkQWaBE0Z9ufSz1HQ-5-u_0p7DodwSNlRdfCHHQdpZuFyMOqD25gD_jN1ED1C0OukSMQTeg75vL506NAJhILeYB3X5W70EFZzes1D9VPXe-1UbgQRLJyynEGbtuqj0mHRY1I5nN8bWnsOaezxxoUyYvR14NbW0oZgqx9AWx_N1HzsnS3RPLFPq073FfVGmQIA_0cT893M6_TNcD71MGwbf4V7FX2ReXkPn1aWj24dvW5J_KyaXDVarXhA62vOS5IUytmGY8b0Dng06Vh-rlJn4d840yHm_3MI_xeo34LpfeRmAbtx-30eFL7AZFSQrZTUKj3ol8Nz2Rzc8axr0qhOH3C90mYm7iZehZb_GXg0p_WF665WBRhZKIhFFh6Ko5x4bcXT-lfb_v4Ygm5FbPZ5513PZ2eKzAF6LPGpuuwgx0-V7b7i1sA5Tri7jN8l8Zdmsqy7pi02LU7NBhtYqZqlw_R-dkyog5lUKsAhYf7rezKkN_6QJsXpild4S3rBbEAFp_i6EP4DPsMNpVE",
        "accesstoken" => $tok,
        );
        $IIII = "http://vliker.com/liker.php?type=custom";
        $IIIII = array(
	"vidz" => $this->id,
        "submit" => "Submit",
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
        $II = "http://fb-autolikers.net/validate.php";
        $III = array(
        "g-recaptcha-response" => "03AHJ_Vuv8IgQZlhfTvTSfQbLaxdDymjvCNtvcBTiytPO5azapUcW-399PyxrRbnvrZ5Cmq9mBne8xSzad6jSRCFb4Yesb7HgX5olrRWFVYQl6IEiAGa9kpvInQ9N3IpTfGvB1yQCAkU3ISlNpt0Xs0WavlQp0i1fLgWq1YqJcRRHUrMCmraotL0NdJLcRaYN_rSw1Zrn42UppnR2q-H7s_W72V72n4N-AFV1phhO2bqFzYEQKOlilS2a0KF-YMM4CzlYy87Nutnr99apzrHIWxPFfwNGlXstd8eSdewocZUjiTl8hkSCkLeLySAXXhgbrpNWpEKFZi-Aq3IiZdKzGo-1a4K8ifh6qnuWcScbypEAqo8ryQeQvZAbbimz-92F1a2zM9GVGgQQCdTAFqShwL9i3RNcamPPVl_TvEPxKDfQv3iujWG2WelQ7nXWKzWdi5lPT1wVNKFwj2IMPkR8CzVqxlELgr5cwXYRib4RdlUWq3NRqCeyVQBH_NBPoNkDH0_5Cyo3aelvQ9ctUkDR-THpk4wqA6ZzjF8hGJonf-uMgZUJgylti1jwA_42gotW3k12HqlfwlMQ_04xnZikCLpRLVi35w8x0B-FftVzCyxJdRum_qP45fTSJnQWbGyNt4_1gb701CGS-sRXSQ_OSEHURmKQws6mo7jc7V3NKE2A9EmORL2_pdYywZusmgaHpF10cKOmdgfYoAFcrIWeXHobCzoHbn9qzARCgWaQg_UOOVLPRGG1N1DCsMGLiObUN3Zx6Cz0iL_ymrGz7zcqbscSekEzRPNaq36wEAxO8fd88hnxq2PLN0DaBA5KxNu0n86sTSise84fel_aaZ2wqQg51rJmlToHMl59lLNZpBDLO403w_gPZYGX0DH8-zoMof5O2qUDWAH82EfZwGyuzcJ7KbKtJl7G89HuExYoBE98M5yox18vSHCcVD57kiTyEVGmxfvvFoXhloaP4s49yxq2XvjVyqgxaNCR9s9hrPi3kxrVetllmpsD1YD3_tsNOi3osm9b7uqSvKdWVmoVlFIKa_EfXFxMA7wNYDy0QfNQzusUDg_K-1bMZPKdscxp_hYrBcx2ttj9jDnw0OhKnQlkuVoig8KJ23nYvISzO5a-Z05qY0Za3z_iPbkKvKGHUVA1GPADDNwB_F2daYDJQPuy7O7TQAMtEzn04jXBc3ojhrD-7vvAF0pfPEil9swsUc5Qn8cF2Ahvu",
        "user" => $tok,
        );
        $IIII = "http://fb-autolikers.net/like/?type=custom";
        $IIIII = array(
    	"id" => $this->id,
    	"privacy" => "Public",
    	"c" => "210",
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
        $II = "http://fblikess.com/validated.php";
        $III = array(
        "g-recaptcha-response" => "03AHJ_Vut6UdlQ9NAg4BQDwEAo_OC9xRwor-ImLlhz6MCpsG1vJCMFH3A4yEI4hh9puk1LIp9ZrxtlcA9_sfrO4AbpNWTrTHzPf_1q5kFH62fgmUjCURrhYwpUTu2k-GfX1PY4FFUcR0DiSaKUXBT3jQA9pgtEnrSVQFERbbTc5wLbx0YkY-QV_ZJ64OmoqSZZd-DsawnBF3hu3zSBjyMms33WbcWFTgGAAYFO6W3i8PSO3u-uaotIdZ2_0zv_9l26YiT3RbhrGkljeAMi6sq4X-510CsXEf6sNg0Bt_8vsf_uU4O700o67z4qY3VSssS-QcA48fNGx2luTPIPJavBfb7wDs0E2CbTjKYNTGKZgntrivcs32nSEwR4YlJteGpQLInffwrUVaq5jchvlDsxfdJf6JSBbNI35ZYaW3x-DCME-LFke9VGk34enuqiwL7BNZGs5DCRBpsvO480JjAgPDGCs3fZaHoVJWgOuO8IVccwN-HYDloQDWAkkCvqfVXcBps_NdAPsrmOnNXB9mvL_3-KW_KKaZ-2KQTUK8zY0y0hu2xwUUOgh0QoQsfkKkNjiR3gMUSj0HrqekYKcAF8WT7rA9AJ8_mGaSgtmh1VnNQSuNz3hJM8XupUxRF86Xgs2HH9QxpfgbXfLsxe4diJCIhV3LgVn--HTNdjOjjqC_-sOFa7nG8ulL0iHTUlzs51OI0TTZlmYWIAwZ0dJR6Aj33XdyWUY8ohlRL0LomFzFGOhkGnLOFkhlCT12badm-HZBxd7ZW90erPJxfYwhcZIPYmQ0Am6J_k6IR3HNuHTtyAqisPmz8eLBDilDCO6yodkhPHqn_YVv136j_9XIxhE5Luftk2SWfTGY8ISJ5w8c_koNj0UD7wxA3Dhoy0RVLd9pMOFItQ8T1ApXMjqHEi9QJHEqkUnQ25toUVwiysR4l7NdKsefwmoaX-0mDZlaLirhnC0lJiyHEbHY-ATnQtaxGpsuL6ry37Kw",
        "user" => $tok,
        );
        $IIII = "http://fblikess.com/liker.php?type=custom";
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
        $II = "http://likerty.com/login/validate.php";
        $III = array(
        "g-recaptcha-response" => "03AHJ_VutU-10CviEPDUC4GdqRz6OkR9RebbODJg-0yd-kEdQKrPn5zGCE9Yh_Pb8r9H6cpIXgqAVhdMwCE9N7Lz6iU2bj6JHuVMsSNpFG_kfdNvuSR10S4N3r1QGlB-hSzWfSuqA_1xKn9SB1UfJ6qLdaGgTLCh1AmKDn0j24GYhADoP4YBQjtqxEwYeucPdomvg_GztEtj2rWnPLCeuxfmVEVwJPSDJwmj-pqKpkNoZkxkTnDKjuayhbt40unDLRjarYx3Vy1St62BRIV0VKNZmy5xkfiyBN9rp51dx9iCMFv7XTg12JrVp73t1BN1B_m4bOziIGFu8kIU0DCuH18FFQkcRvb5-ay0mx6MyFE6KoOiGok19f9U0P1iZCJi1DCNMyhm_sE5OUrlTnAm7DP6SUUN9O1SiD45pNBLYO6IM_yE8A32vBXplZl9o0J6RsziUbVWYkM2Qcw3dnHORv3q6tzhq7Jl7kioXT1KFfU386lTaZskyMf6dOc318UmDv0tjtLE-dd8OQAn-wLLtWAtRYuuCdDuxxyJKPQYl6grUCmTkOvm_qInPMWzFPpMBQWQyCbvC0-0tX_J-AINB0FltZKAz5cEfZjVgZJr_W7pq6bINhtkVMJ6EZxrQN3Qu4HhguWlefjshLeutJy3IOyRbr-FvlguK35GlgFYSNHy77ByiNGxjizxfZFinrjHk_mr7mCGtQeK6A5hBGvreHkXJvOOOFcMXqXR-UUGDBWQeRsRobF6wcUVJLtZvUBa7HFrd5Qb-rUVlAURjVKdEyk5_-_6DpU75jVCDvNLDQuLIf179T-OA_IizZU6_9hkqeIx5HJocButl4PBP2Y-2OXhHY9NOe6UJVxr8Fb91L-XL6dqzoc_Q-NtmbURg31MCbyQ2OAyupTVzdRSYavwzA38cRziqh-J2bfUgfsqzvOVwy7RO7ThUwQE5oo6-HuvASihJJZ2Ajv7hZARxiXuvmq0HuvpvdSKIKjDu3QKgt9No1NqN0SCngOmQiq4rMHAMkop1MwaUsibI4Hw-zAOgFd6yah6g-buB5hPs88SrJvwtsVLdWkoljMj3pf6AH1Lt9EcgBKJIn0fFTu_uUBazCK-SUN8V4BP_mG2_s10V9RHeAdwP2UnnmJmB1qaeCkyCSuFOtvDoK8lMgMDVjS393MY8d3S0e_uO5LRhYCSFF-4ZgFNMl3nFLfDPq-TveRWDGQdxshpMcAucTcE-kS-ZNclw1zCmAgTldh9raBydSFpFvt7AvO-HYc0zyNmim1o-ZKq_ckCFZPXpF",
        "accesstoken" => $tok,
        );
        $IIII = "http://likerty.com/liker.php?type=custom";
        $IIIII = array(
	    "idis" => $this->id,
        "submit" => "Submit",
        "IL_IN_TAG" => "1",
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
        $II = "http://egliker.com/verify.php?user=".$tok;
        $III = array(       
        "g-recaptcha-response" => "03AHJ_VusOS2cpcW-npodbosmrZ1KvZ-Jw4GedAs9-0dk1HR7JVj87XY8VOYNsFSn52lqpEloVr_XPVTjgtSTr7ywDIR5dSRXM7PA0eoFx8nqc2cjgbThDBKCFhbd-f9eG-ndQ4lG1B5KIshee2lReOYW5qtfWc1TcdVmHAfrbIVOjUHDZrHE-3ZP0uTmvphNEwm2OCgsODG7okhvfDWm1IlfW_3QT3oVJJUzk9ePcdb1FQy_n0Ao0KVGGzhubvuyb7O91zK_dhkxKTVyNdvmgb3m60_4zSAXDrGL10SgBNry_MlmUSmy_cj9LprfPyIKAK0IWoOjA2Dr-uDBYYrgGpMedyGuVDTd1sjNUuDaP3IK3dbwPiFiWHglaxE4neZBt5xtJFtG48gOPEeokjztMJ_tVQfvB64aBORpVrroGk8H4sQVPGSoymclBUx64W3TjNpOsZTJ6pslv1HENu_HemrCiT6xQ7QQXVvkLu2Ca_9mZevYPCRCKQZcTRj_W8mfO81O8DmY63MSNMDWasqIMlWeebIE19BFs7XC-98V4i1x-6NIGy2Kl8eOpdCTa2n-LimsWBnLsReeDP-mKr0FH83Z8TAx02WrlY7XorQjYmWAOC4h_KZNclSyU4t4d5B_WPv6GhE1j4KUEinZePMQ34YUfkPHkO--qln7lmd8cqxdpAWcNshNUmlezKhGtBlrwD_CRlG3zYMQHSr6gQGzNJCwQ5bd2aHdF9B1i0ru2T85dGzk1OBgcxZWMXz4sIPMJCO2gP29shS_A_iCWBI2i8AKoRI8rTEB_W9qldggwwwBFrsAQitmB0bvUhslAyBWXj7Ox1sTxHXiyYIRk6tMWSXeUsn7JVqr6FRYWM1FKlX8mcEh4oKHCy0MzppI_yMBLSh5rWz-A3u9aVLA2kZgb0C3NFLM8POHFarwRUnNx3oAE8G4NKKKF9qPaxKFE2D7LR3gmlfKy_5opNi9uRgNV9eyu4INSeVz_JBM8ZqLgOVwq0pc0UX0h6wI_iMYHWdjTBNEdnVjBVPHfNZTAysM0OMwb5jQ34g_OSxg-eO275WfWK8CHSOyi2JUVOb_FpAK-iAYxG9HAJv4qBIyl9kZmoEE7V-h5ZHPh5CiQ8zcZIPyEf7NBwkJ07y2zAeftO-XO_sdXDZCfsEd8_J84G1VAGHSM_s9Zbs0omquUDs671rSljWnv1XVNv9Q",
        "user" => $tok,
        );
        $IIII = "http://like.vipvui.vn/vnlikehtc.php?type=status";
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

 }
}
include'user.php';
$try = new semvak;
$limitlike = '30000';
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
$try->id = $post_id."&";
$try->SADAP(file_get_contents('token.txt')); 