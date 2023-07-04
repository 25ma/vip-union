<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\carrier\bizservice;

class GetDeliveryMethodRequestDetail {
	
	static $_TSPEC;
	public $custNo = null;
	public $areaId = null;
	public $custStandardCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'custNo'
			),
			2 => array(
			'var' => 'areaId'
			),
			3 => array(
			'var' => 'custStandardCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['custNo'])){
				
				$this->custNo = $vals['custNo'];
			}
			
			
			if (isset($vals['areaId'])){
				
				$this->areaId = $vals['areaId'];
			}
			
			
			if (isset($vals['custStandardCode'])){
				
				$this->custStandardCode = $vals['custStandardCode'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetDeliveryMethodRequestDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("custNo" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->custNo); 
				
			}
			
			
			
			
			if ("areaId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->areaId);
				
			}
			
			
			
			
			if ("custStandardCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->custStandardCode);
				
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
		
		$xfer += $output->writeFieldBegin('custNo');
		$xfer += $output->writeI64($this->custNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('areaId');
		$xfer += $output->writeString($this->areaId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->custStandardCode !== null) {
			
			$xfer += $output->writeFieldBegin('custStandardCode');
			$xfer += $output->writeString($this->custStandardCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>