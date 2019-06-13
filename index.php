<?php
class WeXin{
	public $appId = "wxa7b96a2f8220b6b8";
	public $appSecret = "ad536f0093bf1fde5dda5def57ca6063";
	public $token = "weixinTest";
	private $_msg_template = array(
        'text' => '<xml><ToUserName><![CDATA[%s]]></ToUserName><FromUserName><![CDATA[%s]]></FromUserName><CreateTime>%s</CreateTime><MsgType><![CDATA[text]]></MsgType><Content><![CDATA[%s]]></Content></xml>',//文本回复XML模板
        'image' => '<xml><ToUserName><![CDATA[%s]]></ToUserName><FromUserName><![CDATA[%s]]></FromUserName><CreateTime>%s</CreateTime><MsgType><![CDATA[image]]></MsgType><Image><MediaId><![CDATA[%s]]></MediaId></Image></xml>',//图片回复XML模板
        'music' => '<xml><ToUserName><![CDATA[%s]]></ToUserName><FromUserName><![CDATA[%s]]></FromUserName><CreateTime>%s</CreateTime><MsgType><![CDATA[music]]></MsgType><Music><Title><![CDATA[%s]]></Title><Description><![CDATA[%s]]></Description><MusicUrl><![CDATA[%s]]></MusicUrl><HQMusicUrl><![CDATA[%s]]></HQMusicUrl><ThumbMediaId><![CDATA[%s]]></ThumbMediaId></Music></xml>',//音乐模板
        'news' => '<xml><ToUserName><![CDATA[%s]]></ToUserName><FromUserName><![CDATA[%s]]></FromUserName><CreateTime>%s</CreateTime><MsgType><![CDATA[news]]></MsgType><ArticleCount>%s</ArticleCount><Articles>%s</Articles></xml>',// 新闻主体
        'news_item' => '<item><Title><![CDATA[%s]]></Title><Description><![CDATA[%s]]></Description><PicUrl><![CDATA[%s]]></PicUrl><Url><![CDATA[%s]]></Url></item>',//某个新闻模板
    );
	
	public function check()  
	 {  
	         $echoStr = $_GET["echostr"];  
	         if($this->checkSignature()){  
	             echo $echoStr;
    		     exit;  
                 }  
	  } 

	public function checkSignature(){
	        $signature = $_GET["signature"];  
	        $timestamp = $_GET["timestamp"];  
	        $nonce = $_GET["nonce"];      
			                   
	        $tmpArr = array($this->token, $timestamp, $nonce);  
	        sort($tmpArr);  
	        $tmpStr = implode( $tmpArr );  
	        $tmpStr = sha1( $tmpStr );  
	        if( $tmpStr == $signature ){  
	            return true;  
        	}else{  
	            return false;  
	        }
	}

	public function getToken(){
		//获取access_token
        if (isset($_COOKIE['access_token']) && empty($_COOKIE['access_token'])){
            $access_token2=$_COOKIE['access_token'];
        }else{
            $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid={$this->appId}&secret={$this->appSecret}";
            $json_token=$this->curl_post($url);
            $access_token1=json_decode($json_token,true);
            $access_token2=$access_token1['access_token'];
            setcookie('access_token',$access_token2,7200);
        }
        return $access_token2;
	}

	public function responseMsg(){
        /*
        获得请求时POST:XML字符串
        不能用$_POST获取，因为没有key
	 */
	$xml_str = file_get_contents('php://input');
        if(empty($xml_str)){
            die('');
        }
        if(!empty($xml_str)){
            // 解析该xml字符串，利用simpleXML
            libxml_disable_entity_loader(true);
            //禁止xml实体解析，防止xml注入
             $request_xml = simplexml_load_string($xml_str, 'SimpleXMLElement', LIBXML_NOCDATA);
            //判断该消息的类型，通过元素MsgType
            switch ($request_xml->MsgType){
                case 'event':
                    //判断具体的时间类型（关注、取消、点击）
                    $event = $request_xml->Event;
                      if ($event=='subscribe') { // 关注事件
                          $this->_doSubscribe($request_xml);
                      }elseif ($event=='CLICK') {//菜单点击事件
                          $this->_doClick($request_xml);
                      }elseif ($event=='VIEW') {//连接跳转事件
                          $this->_doView($request_xml);
                      }else{

                      }
                    break;
                case 'text'://文本消息
                    $this->_doText($request_xml);
                    break;
                case 'image'://图片消息
                    $this->_doImage($request_xml);
                    break;
                case 'voice'://语音消息
                    $this->_doVoice($request_xml);
                    break;
                case 'video'://视频消息
                    $this->_doVideo($request_xml);
                    break;
                case 'shortvideo'://短视频消息
                    $this->_doShortvideo($request_xml);
                    break;
                case 'location'://位置消息
                    $this->_doLocation($request_xml);
                    break;
                case 'link'://链接消息
                    $this->_doLink($request_xml);
                    break;
            }        
        }        
    }

    private function _msgText($to, $from, $content) {
	    $response = sprintf($this->_msg_template['text'], $to, $from, time(), $content);
	    $this->setLog(json_encode($response));
        die($response);
    }

    private function _doSubscribe($request_xml){
        //处理该关注事件，向用户发送关注信息
        $content = "欢迎关注！\n请在下方回复“#手机号#”绑定手机号。";
        $this->_msgText($request_xml->FromUserName, $request_xml->ToUserName, $content);
    }

    private function _doText($request_xml){
        $content = '无法识别的指令，请重新输入！';
	if(preg_match('/^#((13[\d]{9})|(14[5,7]{1}\d{8})|(15[^4]{1}\d{8})|(16[6]{1}\d{8})|(17[0,1,3,5,6,7,8]{1}\d{8})|(18[\d]{9})|(19[8,9]{1}\d{8}))#$/',$request_xml->Content)){
		//绑定手机号
		$content = "已绑定！\n请前往任务大厅领取新手任务！";
	}
	$this->_msgText($request_xml->FromUserName, $request_xml->ToUserName, $content);
    }

    public function setLog($str){
       	$file = fopen("a.txt", "a+");
    	fwrite($file, $str);
	fclose($file);
    }
}
$test = new WeXin();
//$Test->check();
$test->responseMsg();
