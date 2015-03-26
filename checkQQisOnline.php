<?php

/**
 * @todo 方法一
 */
function get_img_str($qq){
	$url = 'http://wpa.qq.com/pa?p=2:'.$qq.':45';
	$fp = fopen($url, 'r');

	$str = '';
	for($i=0;$i< 30;$i++){
		$str .= fgetc($fp);
	}
	echo mb_substr($str, 14, 3, 'UTF-8') == 'xxx' ? '不在线' : '在线' ,'<br>';
}

get_img_str('2361909732');


/**
 * @todo 方法二
 */
$qqStr = '1628312247:2361909732:863758705:2903785012:469382018';
$qqArr = explode ( ':', $qqStr );
$qqArr = array_unique ( $qqArr );
sort ( $qqArr );
$qqStr = implode ( ':', $qqArr );
$url = 'http://webpresence.qq.com/getonline?Type=1&' . $qqStr . ':';
$html = file_get_contents ( $url );
$Arr = explode ( ']=', $html );
$count = count ( $Arr );
for($i = 1; $i < $count; $i ++) {
    $result [$qqArr [$i - 1]] = substr ( $Arr [$i], 0, 1 );
}
print_r ( $result );

/**
 * @todo 方法三
 */
$qq = '1628312247';
$header = get_headers('http://wpa.qq.com/pa?p=2:'.$qq.':45', 1);
if($header['Location'] == 'http://pub.idqqimg.com/qconn/wpa/button/button_51.gif'){
	echo '在线';
}elseif($header['Location'] == 'http://pub.idqqimg.com/qconn/wpa/button/button_50.gif'){
	echo '不在线';
}else{
	echo '没启用';
}

?>
