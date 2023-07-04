<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\adp\api\open\service;

class PromotionMaterialDetailRequest {
	
	static $_TSPEC;
	public $itemId = null;
	public $itemType = null;
	public $materialType = null;
	public $commonParams = null;
	public $requestId = null;
	public $chanTag = null;
	public $openId = null;
	public $realCall = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'itemId'
			),
			2 => array(
			'var' => 'itemType'
			),
			3 => array(
			'var' => 'materialType'
			),
			4 => array(
			'var' => 'commonParams'
			),
			5 => array(
			'var' => 'requestId'
			),
			6 => array(
			'var' => 'chanTag'
			),
			7 => array(
			'var' => 'openId'
			),
			8 => array(
			'var' => 'realCall'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['itemId'])){
				
				$this->itemId = $vals['itemId'];
			}
			
			
			if (isset($vals['itemType'])){
				
				$this->itemType = $vals['itemType'];
			}
			
			
			if (isset($vals['materialType'])){
				
				$this->materialType = $vals['materialType'];
			}
			
			
			if (isset($vals['commonParams'])){
				
				$this->commonParams = $vals['commonParams'];
			}
			
			
			if (isset($vals['requestId'])){
				
				$this->requestId = $vals['requestId'];
			}
			
			
			if (isset($vals['chanTag'])){
				
				$this->chanTag = $vals['chanTag'];
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
		
		return 'PromotionMaterialDetailRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("itemId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->itemId);
				
			}
			
			
			
			
			if ("itemType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->itemType);
				
			}
			
			
			
			
			if ("materialType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->materialType);
				
			}
			
			
			
			
			if ("commonParams" == $schemeField){
				
				$needSkip = false;
				
				$this->commonParams = new \com\vip\adp\api\open\service\CommonParams();
				$this->commonParams->read($input);
				
			}
			
			
			
			
			if ("requestId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->requestId);
				
			}
			
			
			
			
			if ("chanTag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->chanTag);
				
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
		
		if($this->itemId !== null) {
			
			$xfer += $output->writeFieldBegin('itemId');
			$xfer += $output->writeString($this->itemId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->itemType !== null) {
			
			$xfer += $output->writeFieldBegin('itemType');
			$xfer += $output->writeString($this->itemType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->materialType !== null) {
			
			$xfer += $output->writeFieldBegin('materialType');
			$xfer += $output->writeString($this->materialType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->commonParams !== null) {
			
			$xfer += $output->writeFieldBegin('commonParams');
			
			if (!is_object($this->commonParams)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->commonParams->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->requestId !== null) {
			
			$xfer += $output->writeFieldBegin('requestId');
			$xfer += $output->writeString($this->requestId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->chanTag !== null) {
			
			$xfer += $output->writeFieldBegin('chanTag');
			$xfer += $output->writeString($this->chanTag);
			
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