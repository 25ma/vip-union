<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class ClearanceInfo {
	
	static $_TSPEC;
	public $orderSn = null;
	public $htsStatus = null;
	public $htsResult = null;
	public $htsTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			2 => array(
			'var' => 'htsStatus'
			),
			3 => array(
			'var' => 'htsResult'
			),
			4 => array(
			'var' => 'htsTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['htsStatus'])){
				
				$this->htsStatus = $vals['htsStatus'];
			}
			
			
			if (isset($vals['htsResult'])){
				
				$this->htsResult = $vals['htsResult'];
			}
			
			
			if (isset($vals['htsTime'])){
				
				$this->htsTime = $vals['htsTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ClearanceInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("htsStatus" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->htsStatus); 
				
			}
			
			
			
			
			if ("htsResult" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->htsResult);
				
			}
			
			
			
			
			if ("htsTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->htsTime);
				
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
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->htsStatus !== null) {
			
			$xfer += $output->writeFieldBegin('htsStatus');
			$xfer += $output->writeByte($this->htsStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->htsResult !== null) {
			
			$xfer += $output->writeFieldBegin('htsResult');
			$xfer += $output->writeString($this->htsResult);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->htsTime !== null) {
			
			$xfer += $output->writeFieldBegin('htsTime');
			$xfer += $output->writeString($this->htsTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>