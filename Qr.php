<?php
/**
* @user : wangying
* @date : 2018年5月30日
* @desc : 
**/
class Qr{
	private $_savePath = './imgs/';
	public function __construct(){
		require_once './phpqrcode/phpqrcode.php';
	}
	public function createQr($url,$imgName="qr"){
		$errorCorrectionLevel = 'L';    //容错级别
		$matrixPointSize = 6;           //生成图片大小
		
		//生成二维码图片
		$filename = $this->_savePath.$imgName.'.png';
		$result = QRcode::png($url,$filename , $errorCorrectionLevel, $matrixPointSize, 2);
		var_dump($result);
		
		$QR = $filename;                //已经生成的原始二维码图片文件
		
		
		$QR = imagecreatefromstring(file_get_contents($QR));
		
		//输出图片
		imagepng($QR, 'qrcode.png');
		imagedestroy($QR);  
	}
}