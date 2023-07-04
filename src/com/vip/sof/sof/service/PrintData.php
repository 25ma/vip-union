<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class PrintData {
	
	static $_TSPEC;
	public $transportNo = null;
	public $carriersCode = null;
	public $packageNo = null;
	public $printData = null;
	
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
			'var' => 'packageNo'
			),
			4 => array(
			'var' => 'printData'
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
			
			
			if (isset($vals['packageNo'])){
				
				$this->packageNo = $vals['packageNo'];
			}
			
			
			if (isset($vals['printData'])){
				
				$this->printData = $vals['printData'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PrintData';
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
			
			
			
			
			if ("packageNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->packageNo);
				
			}
			
			
			
			
			if ("printData" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->printData);
				
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
		
		$xfer += $output->writeFieldBegin('transportNo');
		$xfer += $output->writeString($this->transportNo);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->carriersCode !== null) {
			
			$xfer += $output->writeFieldBegin('carriersCode');
			$xfer += $output->writeString($this->carriersCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->packageNo !== null) {
			
			$xfer += $output->writeFieldBegin('packageNo');
			$xfer += $output->writeString($this->packageNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->printData !== null) {
			
			$xfer += $output->writeFieldBegin('printData');
			$xfer += $output->writeString($this->printData);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>