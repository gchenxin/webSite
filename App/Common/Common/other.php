<?php
/***
*用户自定义函数文件，二次开发，可将函数写于此，升级不会覆盖此文件
***/

	//XXXtest为测试数据
	function xxxtest() {
		echo "xxxtest function";
	}

//curl方法
function curlPost($url, $param='', $header="", $isPost=true )
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.2; Win64; x64) Presto/2.12.388 Version/12.15');
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // stop verifying certificate
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_POST, $isPost);           //提交方式
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $param);    //传输数据
    if (!empty($header))
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);   //header头
    curl_setopt($ch, CURLOPT_URL, $url);
    $res = curl_exec($ch);
    if ($res === false) {
        //echo 'Curl error:'. curl_errno($ch);
        $res = '{}';
    }
    curl_close($ch);
    return $res;
}

function asynExec($domainName, $domainPort, $detailPage){
    $fp = fsockopen($domainName, $domainPort, $errNo, $errStr, 30);
    if (!$fp){
        return false;
    }else{
        stream_set_blocking($fp,true);      //开启了手册上说的非阻塞模式
        stream_set_timeout($fp,1);
        $out = "GET {$detailPage} HTTP/1.1\r\n";
        $out .= "Host: {$domainName}\r\n";
        $out .= "Connection: Close\r\n\r\n";

        fwrite($fp, $out);
        usleep(1000);
        //while(!feof($fp)){
        //echo fgets($fp, 128);
        //}
        fclose($fp);
    }
}

function getRedis(){
    $config = config("cache.redis");
    $redis = new \Redis();
    $redis->connect($config['host'], $config['port']);
    $redis->auth($config['password']);

    return $redis;
}


function parseData($path){
    $result = curlPost(C('API_SERVER_URL').$path,[]);
	$data = json_decode($result,true);
	return $data['data'];
}


?>