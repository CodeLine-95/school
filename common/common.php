<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
/**
 * 密码加密
 * @param string $str
 * @return bool|string
 */
function cms_pwd_encode($str=''){
    $key_secret = config('database')['auto_code'];
    $pwd_encode = password_hash('###'.$key_secret.$str,PASSWORD_DEFAULT);
    return $pwd_encode;
}

/**
 * 密码验证
 * @param string $verifyStr
 * @param $passwordHash
 * @return bool
 */
function cms_pwd_verify($verifyStr='',$passwordHash){
    $key_secret = config('database')['auto_code'];
    if (password_verify('###'.$key_secret.$verifyStr,$passwordHash)) {
        return true;
    } else {
        return false;
    }
}

/**
 * 随机字符
 * @param string
 * @return bool
 */
function randStr($length=5){
  if(!is_int($length) || $length < 0) {
    return false;
  }
  $char = '0123456789abcdefghijklmnopqrstuvwxyz';
  $string = '';
  for($i = $length; $i > 0; $i--) {
    $string .= $char[mt_rand(0, strlen($char) - 1)];
  }
  return $string;
}
// 阿里云短信验证码
function sendSms($phone) {

    $params = array ();

    // *** 需用户填写部分 ***
    // fixme 必填：是否启用https
    $security = false;

    // fixme 必填: 请参阅 https://ak-console.aliyun.com/ 取得您的AK信息
    $accessKeyId = "LTAI7KLOLCRblBYv";
    $accessKeySecret = "r9JuQTh8grhyJTStw8sok2JwoGpSUi";

    // fixme 必填: 短信接收号码
    $params["PhoneNumbers"] = $phone;

    // fixme 必填: 短信签名，应严格按"签名名称"填写，请参考: https://dysms.console.aliyun.com/dysms.htm#/develop/sign
    $params["SignName"] = "巨推研究院";

    // fixme 必填: 短信模板Code，应严格按"模板CODE"填写, 请参考: https://dysms.console.aliyun.com/dysms.htm#/develop/template
    $params["TemplateCode"] = "SMS_151780237";
    $codes = rand(111111, 999999);
    session('code',$codes);
    // fixme 可选: 设置模板参数, 假如模板中存在变量需要替换则为必填项
    $params['TemplateParam'] = Array (
        "code" => $codes
    );

    // fixme 可选: 设置发送短信流水号
    $params['OutId'] = "12345";

    // fixme 可选: 上行短信扩展码, 扩展码字段控制在7位或以下，无特殊需求用户请忽略此字段
    $params['SmsUpExtendCode'] = "1234567";


    // *** 需用户填写部分结束, 以下代码若无必要无需更改 ***
    if(!empty($params["TemplateParam"]) && is_array($params["TemplateParam"])) {
        $params["TemplateParam"] = json_encode($params["TemplateParam"], JSON_UNESCAPED_UNICODE);
    }

    // 初始化SignatureHelper实例用于设置参数，签名以及发送请求

    // 此处可能会抛出异常，注意catch
    $content = requestcode(
        $accessKeyId,
        $accessKeySecret,
        "dysmsapi.aliyuncs.com",
        array_merge($params, array(
            "RegionId" => "cn-hangzhou",
            "Action" => "SendSms",
            "Version" => "2017-05-25",
        )),
        $security
    );

    return $content;
}
function requestcode($accessKeyId, $accessKeySecret, $domain, $params, $security=false, $method='POST') {
        $apiParams = array_merge(array (
            "SignatureMethod" => "HMAC-SHA1",
            "SignatureNonce" => uniqid(mt_rand(0,0xffff), true),
            "SignatureVersion" => "1.0",
            "AccessKeyId" => $accessKeyId,
            "Timestamp" => gmdate("Y-m-d\TH:i:s\Z"),
            "Format" => "JSON",
        ), $params);
        ksort($apiParams);

        $sortedQueryStringTmp = "";
        foreach ($apiParams as $key => $value) {
            $sortedQueryStringTmp .= "&" . encode($key) . "=" . encode($value);
        }

        $stringToSign = "${method}&%2F&" . encode(substr($sortedQueryStringTmp, 1));

        $sign = base64_encode(hash_hmac("sha1", $stringToSign, $accessKeySecret . "&",true));

        $signature = encode($sign);

        $url = ($security ? 'https' : 'http')."://{$domain}/";

        try {
            $content = fetchContent($url, $method, "Signature={$signature}{$sortedQueryStringTmp}");
            return json_decode($content,true);
        } catch( \Exception $e) {
            return false;
        }
    }

    function encode($str)
    {
        $res = urlencode($str);
        $res = preg_replace("/\+/", "%20", $res);
        $res = preg_replace("/\*/", "%2A", $res);
        $res = preg_replace("/%7E/", "~", $res);
        return $res;
    }

     function fetchContent($url, $method, $body) {
        $ch = curl_init();

        if($method == 'POST') {
            curl_setopt($ch, CURLOPT_POST, 1);//post提交方式
            curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
        } else {
            $url .= '?'.$body;
        }

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "x-sdk-client" => "php/2.0.0"
        ));

        if(substr($url, 0,5) == 'https') {
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        }

        $rtn = curl_exec($ch);

        if($rtn === false) {
            // 大多由设置等原因引起，一般无法保障后续逻辑正常执行，
            // 所以这里触发的是E_USER_ERROR，会终止脚本执行，无法被try...catch捕获，需要用户排查环境、网络等故障
            trigger_error("[CURL_" . curl_errno($ch) . "]: " . curl_error($ch), E_USER_ERROR);
        }
        curl_close($ch);

        return $rtn;
    }
     // 微信分享名片开始
     function wechatshare(){
    	$appid = 'wxeceba81b9be9420d';
        $appsecret = '548256b42ecc1040491fed4fbcba516a';
        $signPackage = getSignPackage($appid,$appsecret);
        return $signPackage;
     }
      function getSignPackage($appId, $appsecret) {
            $jsapiTicket = getJsApiTicket($appId, $appsecret);
            if(is_https()){
                $url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            }else{
                $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            }
            $timestamp = time();
            $nonceStr = createNonceStr();
            // 这里参数的顺序要按照 key 值 ASCII 码升序排序
            $string = "jsapi_ticket=$jsapiTicket&noncestr=$nonceStr&timestamp=$timestamp&url=$url";
            $signature = sha1($string);
            $signPackage = array(
              "appId"     => $appId,
              "nonceStr"  => $nonceStr,
              "timestamp" => $timestamp,
              "url"       => $url,
              "signature" => $signature,
              "rawString" => $string
            );
            return $signPackage; 
          }

        function createNonceStr($length = 16) {
            $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
            $str = "";
            for ($i = 0; $i < $length; $i++) {
              $str .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
            }
            return $str;
          }

        function getJsApiTicket($appId, $appSecret) {
            $data = json_decode(file_get_contents(ROOT_PATH."/public/jsapi_ticket.json"));
            if ($data->expire_time < time()) {
              $accessToken = getAccessToken($appId, $appSecret);
              if(is_https()){
                  $url = "https://api.weixin.qq.com/cgi-bin/ticket/getticket?type=1&access_token=$accessToken";
	            }else{
	              $url = "http://api.weixin.qq.com/cgi-bin/ticket/getticket?type=1&access_token=$accessToken";
	            }
              $res = json_decode(httpGet($url));
              $ticket = $res->ticket;
              if ($ticket) {
                $data->expire_time = time() + 7000;
                $data->jsapi_ticket = $ticket;
                $fp = fopen(ROOT_PATH."/public/jsapi_ticket.json", "w");
                fwrite($fp, json_encode($data));
                fclose($fp);
              }
            } else {
              $ticket = $data->jsapi_ticket;
            }
            return $ticket;
          }

        function getAccessToken($appId, $appSecret) {
            // access_token 应该全局存储与更新，以下代码以写入到文件中做示例
            $data = json_decode(file_get_contents(ROOT_PATH."/public/access_token.json"));
            if ($data->expire_time < time()) {
        	if(is_https()){
              $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$appId&secret=$appSecret";
            }else{
               $url = "http://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$appId&secret=$appSecret";
            }
              $res = json_decode(httpGet($url));
              $access_token = $res->access_token;
              if ($access_token) {
                $data->expire_time = time() + 7000;
                $data->access_token = $access_token;
                $fp = fopen("access_token.json", "w");
                fwrite($fp, json_encode($data));
                fclose($fp);
              }
            } else {
              $access_token = $data->access_token;
            }
            return $access_token;
          }
        // 微信分享名片结束
        function httpGet($url) {
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_TIMEOUT, 500);
            curl_setopt($curl, CURLOPT_URL, $url);

            $res = curl_exec($curl);
            curl_close($curl);

            return $res;
        }
// 检验域名是否是https访问
        function is_https() {
            if (!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off') {
            return TRUE;
            } elseif (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
            return TRUE;
            } elseif (!empty($_SERVER['HTTP_FRONT_END_HTTPS']) && strtolower($_SERVER['HTTP_FRONT_END_HTTPS']) !== 'off') {
            return TRUE;
            }
            return FALSE;
        }
        // url跨域传输
        function Cross_domain_transfer($url,$urlid,$type,$token){
            $data = array('url'=>$url,'urlid'=>$urlid,'type'=>$type);
            $urldata = serialize($data);
            $urldataarr = base64_encode($urldata);
            $durl = "http://seo.yilxin.cn/index.php/login/addurl/token/".$token."/urldata/".$urldataarr;
            $this->curls($durl);
            return true;
        }
        function curls($durl){
         $ch = curl_init();
         curl_setopt($ch, CURLOPT_URL, $durl);
         curl_setopt($ch, CURLOPT_TIMEOUT, 5);
         curl_setopt($ch, CURLOPT_USERAGENT, _USERAGENT_);
         curl_setopt($ch, CURLOPT_REFERER,_REFERER_);
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
         $r = curl_exec($ch);
         curl_close($ch);
         return $r;
        }
            //获取访客ip
    function getIp()
     {
          $ip=false;
          if(!empty($_SERVER["HTTP_CLIENT_IP"])){
           $ip = $_SERVER["HTTP_CLIENT_IP"];
          }
          if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
           $ips = explode (", ", $_SERVER['HTTP_X_FORWARDED_FOR']);
           if ($ip) { array_unshift($ips, $ip); $ip = FALSE; }
           for ($i = 0; $i < count($ips); $i++) {
            if (!eregi ("^(10│172.16│192.168).", $ips[$i])) {
             $ip = $ips[$i];
             break;
            }
           }
          }
          return ($ip ? $ip : $_SERVER['REMOTE_ADDR']);
     }