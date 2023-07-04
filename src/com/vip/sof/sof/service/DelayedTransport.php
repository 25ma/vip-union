<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class DelayedTransport {
	
	static $_TSPEC;
	public $transportNo = null;
	public $carriersCode = null;
	public $vskuId = null;
	public $vspuId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transportNo'
			),
			2 => array(
			'var' => 'carriersCode'
			),
			3 => array(
			'var' => 'vskuId'
			),
			4 => array(
			'var' => 'vspuId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['carriersCode'])){
				
				$this->carriersCode = $vals['carriersCode'];
			}
			
			
			if (isset($vals['vskuId'])){
				
				$this->vskuId = $vals['vskuId'];
			}
			
			
			if (isset($vals['vspuId'])){
				
				$this->vspuId = $vals['vspuId'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'DelayedTransport';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("carriersCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriersCode);
				
			}
			
			
			
			
			if ("vskuId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->vskuId); 
				
			}
			
			
			
			
			if ("vspuId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->vspuId); 
				
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
		
		if($this->transportNo !== null) {
			
			$xfer += $output->writeFieldBegin('transportNo');
			$xfer += $output->writeString($this->transportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriersCode !== null) {
			
			$xfer += $output->writeFieldBegin('carriersCode');
			$xfer += $output->writeString($this->carriersCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vskuId !== null) {
			
			$xfer += $output->writeFieldBegin('vskuId');
			$xfer += $output->writeI64($this->vskuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vspuId !== null) {
			
			$xfer += $output->writeFieldBegin('vspuId');
			$xfer += $output->writeI64($this->vspuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>