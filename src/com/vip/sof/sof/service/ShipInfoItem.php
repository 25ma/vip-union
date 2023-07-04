<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class ShipInfoItem {
	
	static $_TSPEC;
	public $carriersCode = null;
	public $transportNo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'carriersCode'
			),
			2 => array(
			'var' => 'transportNo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['carriersCode'])){
				
				$this->carriersCode = $vals['carriersCode'];
			}
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ShipInfoItem';
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
			
			
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
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
		
		
		if($this->transportNo !== null) {
			
			$xfer += $output->writeFieldBegin('transportNo');
			$xfer += $output->writeString($this->transportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>