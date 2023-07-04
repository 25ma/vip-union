<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\adp\api\open\service;

class UserVerifyQuery {
	
	static $_TSPEC;
	public $scene = null;
	public $attributeValue = null;
	public $requestId = null;
	public $commonParams = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'scene'
			),
			2 => array(
			'var' => 'attributeValue'
			),
			3 => array(
			'var' => 'requestId'
			),
			4 => array(
			'var' => 'commonParams'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['scene'])){
				
				$this->scene = $vals['scene'];
			}
			
			
			if (isset($vals['attributeValue'])){
				
				$this->attributeValue = $vals['attributeValue'];
			}
			
			
			if (isset($vals['requestId'])){
				
				$this->requestId = $vals['requestId'];
			}
			
			
			if (isset($vals['commonParams'])){
				
				$this->commonParams = $vals['commonParams'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'UserVerifyQuery';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("scene" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->scene);
				
			}
			
			
			
			
			if ("attributeValue" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attributeValue);
				
			}
			
			
			
			
			if ("requestId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->requestId);
				
			}
			
			
			
			
			if ("commonParams" == $schemeField){
				
				$needSkip = false;
				
				$this->commonParams = new \com\vip\adp\api\open\service\CommonParams();
				$this->commonParams->read($input);
				
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
		
		if($this->scene !== null) {
			
			$xfer += $output->writeFieldBegin('scene');
			$xfer += $output->writeString($this->scene);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attributeValue !== null) {
			
			$xfer += $output->writeFieldBegin('attributeValue');
			$xfer += $output->writeString($this->attributeValue);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('requestId');
		$xfer += $output->writeString($this->requestId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->commonParams !== null) {
			
			$xfer += $output->writeFieldBegin('commonParams');
			
			if (!is_object($this->commonParams)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->commonParams->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>