<?php
                 
 
function grap_page($site){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Series 60; Opera Mini/6.5.27309/34.1445; U; en) Presto/2.8.119 Version/11.10');
    curl_setopt($ch, CURLOPT_TIMEOUT, 40);
    curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie1.txt");
    curl_setopt($ch, CURLOPT_URL, $site);
    ob_start();
    return curl_exec ($ch);
    ob_end_clean();
    curl_close ($ch);
}
 
function post_data($site,$data){
    $datapost = curl_init();
    $headers = array("Expect:");
    curl_setopt($datapost, CURLOPT_URL, $site);
    curl_setopt($datapost, CURLOPT_TIMEOUT, 40000);
    curl_setopt($datapost, CURLOPT_HEADER, 0);	
	curl_setopt($datapost, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($datapost, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($datapost, CURLOPT_NOBODY, true);
    curl_setopt($datapost, CURLOPT_USERAGENT, 'Opera/9.80 (Series 60; Opera Mini/6.5.27309/34.1445; U; en) Presto/2.8.119 Version/11.10');
    curl_setopt($datapost, CURLOPT_POST, TRUE);
    curl_setopt($datapost, CURLOPT_POSTFIELDS, $data);
    curl_setopt($datapost, CURLOPT_COOKIEFILE, "cookielike.txt");
    ob_start();
	curl_exec ($datapost);
	$info = curl_getinfo($datapost);
    $redir = $info['redirect_url'];
    $code = $info['http_code'];
	return $redir." <br> = ".$code."<br>";
    ob_end_clean();
    curl_close ($datapost);
	unlink("cookielike.txt");
    unset($datapost); 
}
function login($url,$data){
    $fp = fopen("cookie.txt", "w");
    fclose($fp);
    $login = curl_init();
    curl_setopt($login, CURLOPT_COOKIEJAR, "cookielike.txt");
    curl_setopt($login, CURLOPT_COOKIEFILE, "cookielike.txt");
    curl_setopt($login, CURLOPT_TIMEOUT, 40000);
	curl_setopt($login, CURLOPT_HEADER, 0);	
    curl_setopt($login, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($login, CURLOPT_URL, $url);
    curl_setopt($login, CURLOPT_REFERER, $url);
    curl_setopt($login, CURLOPT_USERAGENT, 'Opera/9.80 (Series 60; Opera Mini/6.5.27309/34.1445; U; en) Presto/2.8.119 Version/11.10');
    curl_setopt($login, CURLOPT_FOLLOWLOCATION, false);
    curl_setopt($login, CURLOPT_POST, TRUE);
    curl_setopt($login, CURLOPT_POSTFIELDS, $data);
    ob_start();
	curl_exec ($login);
	$info = curl_getinfo($login);
    $redir = $info['redirect_url'];
    $code = $info['http_code'];
	return $redir." <br> = ".$code."<br>";

    ob_end_clean();
    curl_close ($login);
    unset($login);    
} 
		
function Submit($url,$data)
        {
        $random_IP = "".mt_rand(0,255).".".mt_rand(0,255).".".mt_rand(0,255).".".mt_rand(0,255);
        $field_string = http_build_query($data);
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
        curl_setopt($ch,CURLOPT_COOKIEFILE,'cookieliker.txt');
        curl_setopt($ch,CURLOPT_COOKIEJAR,'cookieliker.txt');
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
        return $redir." <br>  = ".$code."";
        }
        unlink("cookieliker.txt");
        curl_close($ch);
        }
function copyright()
        {
                $w = '<body style="background-color:black">
                <font color="white" style="Times New Roman"><b>
                <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
                <pre>
        <center><font color="red" size="10"> Vịt Vàng Đang Nhấp Nhẹ Nhẹ </font>
        </pre>';
        echo $w;
        }
 
?>