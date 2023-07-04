<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vipcard;

class CardAndPhoneNoModel {
	
	static $_TSPEC;
	public $phoneNo = null;
	public $cardCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'phoneNo'
			),
			2 => array(
			'var' => 'cardCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['phoneNo'])){
				
				$this->phoneNo = $vals['phoneNo'];
			}
			
			
			if (isset($vals['cardCode'])){
				
				$this->cardCode = $vals['cardCode'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CardAndPhoneNoModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("phoneNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->phoneNo);
				
			}
			
			
			
			
			if ("cardCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cardCode);
				
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
		
		$xfer += $output->writeFieldBegin('phoneNo');
		$xfer += $output->writeString($this->phoneNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('cardCode');
		$xfer += $output->writeString($this->cardCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>