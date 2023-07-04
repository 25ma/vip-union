<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\lbs\api\service\printtemplate;

class PrintDataDTO {
	
	static $_TSPEC;
	public $subCode = null;
	public $subMsg = null;
	public $transportNo = null;
	public $packageNo = null;
	public $printData = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'subCode'
			),
			2 => array(
			'var' => 'subMsg'
			),
			3 => array(
			'var' => 'transportNo'
			),
			4 => array(
			'var' => 'packageNo'
			),
			5 => array(
			'var' => 'printData'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['subCode'])){
				
				$this->subCode = $vals['subCode'];
			}
			
			
			if (isset($vals['subMsg'])){
				
				$this->subMsg = $vals['subMsg'];
			}
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
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
		
		return 'PrintDataDTO';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("subCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->subCode);
				
			}
			
			
			
			
			if ("subMsg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->subMsg);
				
			}
			
			
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
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
		
		$xfer += $output->writeFieldBegin('subCode');
		$xfer += $output->writeString($this->subCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('subMsg');
		$xfer += $output->writeString($this->subMsg);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('transportNo');
		$xfer += $output->writeString($this->transportNo);
		
		$xfer += $output->writeFieldEnd();
		
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