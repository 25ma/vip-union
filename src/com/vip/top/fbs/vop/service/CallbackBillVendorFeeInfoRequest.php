<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\fbs\vop\service;

class CallbackBillVendorFeeInfoRequest {
	
	static $_TSPEC;
	public $vendor_code = null;
	public $serial_id = null;
	public $batch_no = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_code'
			),
			2 => array(
			'var' => 'serial_id'
			),
			3 => array(
			'var' => 'batch_no'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_code'])){
				
				$this->vendor_code = $vals['vendor_code'];
			}
			
			
			if (isset($vals['serial_id'])){
				
				$this->serial_id = $vals['serial_id'];
			}
			
			
			if (isset($vals['batch_no'])){
				
				$this->batch_no = $vals['batch_no'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CallbackBillVendorFeeInfoRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vendor_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_code);
				
			}
			
			
			
			
			if ("serial_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->serial_id);
				
			}
			
			
			
			
			if ("batch_no" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->batch_no); 
				
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
		
		$xfer += $output->writeFieldBegin('vendor_code');
		$xfer += $output->writeString($this->vendor_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('serial_id');
		$xfer += $output->writeString($this->serial_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('batch_no');
		$xfer += $output->writeI32($this->batch_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>