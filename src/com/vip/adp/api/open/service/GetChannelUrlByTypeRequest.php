<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\adp\api\open\service;

class GetChannelUrlByTypeRequest {
	
	static $_TSPEC;
	public $type = null;
	public $ucode = null;
	public $commissionDiscountRate = null;
	public $subsidyDiscountRate = null;
	public $statParam = null;
	public $chanTag = null;
	public $requestId = null;
	public $userId = null;
	public $appKey = null;
	public $compressShortUrl = null;
	public $generateByUcode = null;
	public $openId = null;
	public $realCall = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'type'
			),
			2 => array(
			'var' => 'ucode'
			),
			3 => array(
			'var' => 'commissionDiscountRate'
			),
			4 => array(
			'var' => 'subsidyDiscountRate'
			),
			5 => array(
			'var' => 'statParam'
			),
			6 => array(
			'var' => 'chanTag'
			),
			7 => array(
			'var' => 'requestId'
			),
			8 => array(
			'var' => 'userId'
			),
			9 => array(
			'var' => 'appKey'
			),
			10 => array(
			'var' => 'compressShortUrl'
			),
			11 => array(
			'var' => 'generateByUcode'
			),
			12 => array(
			'var' => 'openId'
			),
			13 => array(
			'var' => 'realCall'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['ucode'])){
				
				$this->ucode = $vals['ucode'];
			}
			
			
			if (isset($vals['commissionDiscountRate'])){
				
				$this->commissionDiscountRate = $vals['commissionDiscountRate'];
			}
			
			
			if (isset($vals['subsidyDiscountRate'])){
				
				$this->subsidyDiscountRate = $vals['subsidyDiscountRate'];
			}
			
			
			if (isset($vals['statParam'])){
				
				$this->statParam = $vals['statParam'];
			}
			
			
			if (isset($vals['chanTag'])){
				
				$this->chanTag = $vals['chanTag'];
			}
			
			
			if (isset($vals['requestId'])){
				
				$this->requestId = $vals['requestId'];
			}
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['appKey'])){
				
				$this->appKey = $vals['appKey'];
			}
			
			
			if (isset($vals['compressShortUrl'])){
				
				$this->compressShortUrl = $vals['compressShortUrl'];
			}
			
			
			if (isset($vals['generateByUcode'])){
				
				$this->generateByUcode = $vals['generateByUcode'];
			}
			
			
			if (isset($vals['openId'])){
				
				$this->openId = $vals['openId'];
			}
			
			
			if (isset($vals['realCall'])){
				
				$this->realCall = $vals['realCall'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetChannelUrlByTypeRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("type" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\adp\api\open\service\GetChannelUrlByTypeEnum::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->type = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("ucode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ucode);
				
			}
			
			
			
			
			if ("commissionDiscountRate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->commissionDiscountRate);
				
			}
			
			
			
			
			if ("subsidyDiscountRate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->subsidyDiscountRate);
				
			}
			
			
			
			
			if ("statParam" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->statParam);
				
			}
			
			
			
			
			if ("chanTag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->chanTag);
				
			}
			
			
			
			
			if ("requestId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->requestId);
				
			}
			
			
			
			
			if ("userId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userId);
				
			}
			
			
			
			
			if ("appKey" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->appKey);
				
			}
			
			
			
			
			if ("compressShortUrl" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->compressShortUrl);
				
			}
			
			
			
			
			if ("generateByUcode" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->generateByUcode);
				
			}
			
			
			
			
			if ("openId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->openId);
				
			}
			
			
			
			
			if ("realCall" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->realCall);
				
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
		
		if($this->type !== null) {
			
			$xfer += $output->writeFieldBegin('type');
			
			$em = new \com\vip\adp\api\open\service\GetChannelUrlByTypeEnum; 
			$output->writeString($em::$__names[$this->type]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ucode !== null) {
			
			$xfer += $output->writeFieldBegin('ucode');
			$xfer += $output->writeString($this->ucode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->commissionDiscountRate !== null) {
			
			$xfer += $output->writeFieldBegin('commissionDiscountRate');
			$xfer += $output->writeString($this->commissionDiscountRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->subsidyDiscountRate !== null) {
			
			$xfer += $output->writeFieldBegin('subsidyDiscountRate');
			$xfer += $output->writeString($this->subsidyDiscountRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->statParam !== null) {
			
			$xfer += $output->writeFieldBegin('statParam');
			$xfer += $output->writeString($this->statParam);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->chanTag !== null) {
			
			$xfer += $output->writeFieldBegin('chanTag');
			$xfer += $output->writeString($this->chanTag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->requestId !== null) {
			
			$xfer += $output->writeFieldBegin('requestId');
			$xfer += $output->writeString($this->requestId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeString($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->appKey !== null) {
			
			$xfer += $output->writeFieldBegin('appKey');
			$xfer += $output->writeString($this->appKey);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->compressShortUrl !== null) {
			
			$xfer += $output->writeFieldBegin('compressShortUrl');
			$xfer += $output->writeBool($this->compressShortUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->generateByUcode !== null) {
			
			$xfer += $output->writeFieldBegin('generateByUcode');
			$xfer += $output->writeBool($this->generateByUcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->openId !== null) {
			
			$xfer += $output->writeFieldBegin('openId');
			$xfer += $output->writeString($this->openId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->realCall !== null) {
			
			$xfer += $output->writeFieldBegin('realCall');
			$xfer += $output->writeBool($this->realCall);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>