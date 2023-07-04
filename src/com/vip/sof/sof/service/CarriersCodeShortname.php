<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class CarriersCodeShortname {
	
	static $_TSPEC;
	public $carriersCode = null;
	public $carriersName = null;
	public $fullName = null;
	public $engName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'carriersCode'
			),
			2 => array(
			'var' => 'carriersName'
			),
			3 => array(
			'var' => 'fullName'
			),
			4 => array(
			'var' => 'engName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['carriersCode'])){
				
				$this->carriersCode = $vals['carriersCode'];
			}
			
			
			if (isset($vals['carriersName'])){
				
				$this->carriersName = $vals['carriersName'];
			}
			
			
			if (isset($vals['fullName'])){
				
				$this->fullName = $vals['fullName'];
			}
			
			
			if (isset($vals['engName'])){
				
				$this->engName = $vals['engName'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CarriersCodeShortname';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("carriersCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriersCode);
				
			}
			
			
			
			
			if ("carriersName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriersName);
				
			}
			
			
			
			
			if ("fullName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fullName);
				
			}
			
			
			
			
			if ("engName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->engName);
				
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
		
		if($this->carriersCode !== null) {
			
			$xfer += $output->writeFieldBegin('carriersCode');
			$xfer += $output->writeString($this->carriersCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriersName !== null) {
			
			$xfer += $output->writeFieldBegin('carriersName');
			$xfer += $output->writeString($this->carriersName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fullName !== null) {
			
			$xfer += $output->writeFieldBegin('fullName');
			$xfer += $output->writeString($this->fullName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->engName !== null) {
			
			$xfer += $output->writeFieldBegin('engName');
			$xfer += $output->writeString($this->engName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>