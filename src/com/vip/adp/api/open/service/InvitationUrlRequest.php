<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\adp\api\open\service;

class InvitationUrlRequest {
	
	static $_TSPEC;
	public $requestId = null;
	public $inviterTag = null;
	public $businessType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'requestId'
			),
			2 => array(
			'var' => 'inviterTag'
			),
			3 => array(
			'var' => 'businessType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['requestId'])){
				
				$this->requestId = $vals['requestId'];
			}
			
			
			if (isset($vals['inviterTag'])){
				
				$this->inviterTag = $vals['inviterTag'];
			}
			
			
			if (isset($vals['businessType'])){
				
				$this->businessType = $vals['businessType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'InvitationUrlRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("requestId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->requestId);
				
			}
			
			
			
			
			if ("inviterTag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->inviterTag);
				
			}
			
			
			
			
			if ("businessType" == $schemeField){
				
				$needSkip = false;
				$input->readI16($this->businessType); 
				
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
		
		if($this->requestId !== null) {
			
			$xfer += $output->writeFieldBegin('requestId');
			$xfer += $output->writeString($this->requestId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->inviterTag !== null) {
			
			$xfer += $output->writeFieldBegin('inviterTag');
			$xfer += $output->writeString($this->inviterTag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('businessType');
		$xfer += $output->writeI16($this->businessType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>