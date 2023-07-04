<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class OneToManyThirdInfoRequest {
	
	static $_TSPEC;
	public $actCode = null;
	public $thirdCode = null;
	public $client = null;
	public $extentsion = null;
	public $orderNo = null;
	public $captchaId = null;
	public $ticket = null;
	public $data = null;
	public $phone = null;
	public $mid = null;
	public $midType = null;
	public $styleType = null;
	public $certificateType = null;
	public $certificate = null;
	public $appid = null;
	public $accessToken = null;
	public $nick = null;
	public $pic = null;
	public $dataSign = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'actCode'
			),
			2 => array(
			'var' => 'thirdCode'
			),
			3 => array(
			'var' => 'client'
			),
			4 => array(
			'var' => 'extentsion'
			),
			5 => array(
			'var' => 'orderNo'
			),
			6 => array(
			'var' => 'captchaId'
			),
			7 => array(
			'var' => 'ticket'
			),
			8 => array(
			'var' => 'data'
			),
			9 => array(
			'var' => 'phone'
			),
			10 => array(
			'var' => 'mid'
			),
			11 => array(
			'var' => 'midType'
			),
			12 => array(
			'var' => 'styleType'
			),
			13 => array(
			'var' => 'certificateType'
			),
			14 => array(
			'var' => 'certificate'
			),
			15 => array(
			'var' => 'appid'
			),
			16 => array(
			'var' => 'accessToken'
			),
			17 => array(
			'var' => 'nick'
			),
			18 => array(
			'var' => 'pic'
			),
			19 => array(
			'var' => 'dataSign'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['actCode'])){
				
				$this->actCode = $vals['actCode'];
			}
			
			
			if (isset($vals['thirdCode'])){
				
				$this->thirdCode = $vals['thirdCode'];
			}
			
			
			if (isset($vals['client'])){
				
				$this->client = $vals['client'];
			}
			
			
			if (isset($vals['extentsion'])){
				
				$this->extentsion = $vals['extentsion'];
			}
			
			
			if (isset($vals['orderNo'])){
				
				$this->orderNo = $vals['orderNo'];
			}
			
			
			if (isset($vals['captchaId'])){
				
				$this->captchaId = $vals['captchaId'];
			}
			
			
			if (isset($vals['ticket'])){
				
				$this->ticket = $vals['ticket'];
			}
			
			
			if (isset($vals['data'])){
				
				$this->data = $vals['data'];
			}
			
			
			if (isset($vals['phone'])){
				
				$this->phone = $vals['phone'];
			}
			
			
			if (isset($vals['mid'])){
				
				$this->mid = $vals['mid'];
			}
			
			
			if (isset($vals['midType'])){
				
				$this->midType = $vals['midType'];
			}
			
			
			if (isset($vals['styleType'])){
				
				$this->styleType = $vals['styleType'];
			}
			
			
			if (isset($vals['certificateType'])){
				
				$this->certificateType = $vals['certificateType'];
			}
			
			
			if (isset($vals['certificate'])){
				
				$this->certificate = $vals['certificate'];
			}
			
			
			if (isset($vals['appid'])){
				
				$this->appid = $vals['appid'];
			}
			
			
			if (isset($vals['accessToken'])){
				
				$this->accessToken = $vals['accessToken'];
			}
			
			
			if (isset($vals['nick'])){
				
				$this->nick = $vals['nick'];
			}
			
			
			if (isset($vals['pic'])){
				
				$this->pic = $vals['pic'];
			}
			
			
			if (isset($vals['dataSign'])){
				
				$this->dataSign = $vals['dataSign'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OneToManyThirdInfoRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("actCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actCode);
				
			}
			
			
			
			
			if ("thirdCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->thirdCode);
				
			}
			
			
			
			
			if ("client" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->client);
				
			}
			
			
			
			
			if ("extentsion" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->extentsion);
				
			}
			
			
			
			
			if ("orderNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderNo);
				
			}
			
			
			
			
			if ("captchaId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->captchaId);
				
			}
			
			
			
			
			if ("ticket" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ticket);
				
			}
			
			
			
			
			if ("data" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->data);
				
			}
			
			
			
			
			if ("phone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->phone);
				
			}
			
			
			
			
			if ("mid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mid);
				
			}
			
			
			
			
			if ("midType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->midType);
				
			}
			
			
			
			
			if ("styleType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->styleType); 
				
			}
			
			
			
			
			if ("certificateType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->certificateType); 
				
			}
			
			
			
			
			if ("certificate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->certificate);
				
			}
			
			
			
			
			if ("appid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->appid);
				
			}
			
			
			
			
			if ("accessToken" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->accessToken);
				
			}
			
			
			
			
			if ("nick" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->nick);
				
			}
			
			
			
			
			if ("pic" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pic);
				
			}
			
			
			
			
			if ("dataSign" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dataSign);
				
			}
			
			
			
			if($needSkip){
				
				\Osp\Protocol\ProtocolUtil::skip($input);
			}
			
			$input->readFieldEnd();
		}
		
		$input->readStructEnd();
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->actCode !== null) {
			
			$xfer += $output->writeFieldBegin('actCode');
			$xfer += $output->writeString($this->actCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->thirdCode !== null) {
			
			$xfer += $output->writeFieldBegin('thirdCode');
			$xfer += $output->writeString($this->thirdCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->client !== null) {
			
			$xfer += $output->writeFieldBegin('client');
			$xfer += $output->writeString($this->client);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extentsion !== null) {
			
			$xfer += $output->writeFieldBegin('extentsion');
			$xfer += $output->writeString($this->extentsion);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderNo !== null) {
			
			$xfer += $output->writeFieldBegin('orderNo');
			$xfer += $output->writeString($this->orderNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->captchaId !== null) {
			
			$xfer += $output->writeFieldBegin('captchaId');
			$xfer += $output->writeString($this->captchaId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ticket !== null) {
			
			$xfer += $output->writeFieldBegin('ticket');
			$xfer += $output->writeString($this->ticket);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->data !== null) {
			
			$xfer += $output->writeFieldBegin('data');
			$xfer += $output->writeString($this->data);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->phone !== null) {
			
			$xfer += $output->writeFieldBegin('phone');
			$xfer += $output->writeString($this->phone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mid !== null) {
			
			$xfer += $output->writeFieldBegin('mid');
			$xfer += $output->writeString($this->mid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->midType !== null) {
			
			$xfer += $output->writeFieldBegin('midType');
			$xfer += $output->writeString($this->midType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->styleType !== null) {
			
			$xfer += $output->writeFieldBegin('styleType');
			$xfer += $output->writeI32($this->styleType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->certificateType !== null) {
			
			$xfer += $output->writeFieldBegin('certificateType');
			$xfer += $output->writeI32($this->certificateType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->certificate !== null) {
			
			$xfer += $output->writeFieldBegin('certificate');
			$xfer += $output->writeString($this->certificate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->appid !== null) {
			
			$xfer += $output->writeFieldBegin('appid');
			$xfer += $output->writeString($this->appid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->accessToken !== null) {
			
			$xfer += $output->writeFieldBegin('accessToken');
			$xfer += $output->writeString($this->accessToken);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->nick !== null) {
			
			$xfer += $output->writeFieldBegin('nick');
			$xfer += $output->writeString($this->nick);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pic !== null) {
			
			$xfer += $output->writeFieldBegin('pic');
			$xfer += $output->writeString($this->pic);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dataSign !== null) {
			
			$xfer += $output->writeFieldBegin('dataSign');
			$xfer += $output->writeString($this->dataSign);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>