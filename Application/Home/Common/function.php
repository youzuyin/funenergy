<?php

function jsonReturn($data){
    $json_str = json_encode($data);
    // 返回JSON数据格式到客户端 包含状态信息
    header('Content-Type:application/json; charset=utf-8');
    //处理json中包含的‘null’，将其替换成空字符串
    $search = 'null';
    $replace = '""';
    $returndata = str_replace($search, $replace, $json_str);
//  testAddDataIntoTestTable(null,$returndata);
    exit($returndata);
}

function https_post($url, $data = null){
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
    if (!empty($data)){
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    }
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($curl);
    curl_close($curl);
    return $output;
}

function getJson($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return json_decode($output, true);
}

function xmlToArray($xml)
{
    //将XML转为array
    $array_data = json_decode(json_encode(simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA)), true);
    return $array_data;
}

function arraryToXml($arr){
    $xml ="<xml>";
    foreach($arr as $key=>$val){
        if(is_numeric($val)) {
            $xml .= "<".$key.">".$val."</".$key.">";
        }else{
            $xml.="<".$key."><![CDATA[".$val."]]></".$key.">";
        }
    }
    $xml.="</xml>";
    return $xml;
}

function time_format($time){
    echo date("Y-m-d G:i:s",$time);
}

// 数据处理模块
//   y=0.1x  2个16进制 14BA 转化为 十进制 530.6
function countten($data){
    return hexdec($data)/10;
}
//  y=x   2个16进制  直接转化为十进制
function countone($data){
    return hexdec($data)/10;
}
//充电流
function countminus1($data){
    $a = hexdec($data)*0.05-1600;
    if($a <0 ){
        return 0;
    }else{
        return $a;
    }
}
// 放电流
function countminus2($data){
    $a = hexdec($data)*0.05-1600;
    if($a >= 0 ){
        return 0;
    }else{
        return $a;
    }
}


?>