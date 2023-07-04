<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tpc\api\model;

class UploadCarrierBillResult {
	
	static $_TSPEC;
	public $transport_no = null;
	public $delivery_type = null;
	public $result = null;
	public $result_message = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transport_no'
			),
			2 => array(
			'var' => 'delivery_type'
			),
			3 => array(
			'var' => 'result'
			),
			4 => array(
			'var' => 'result_message'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transport_no'])){
				
				$this->transport_no = $vals['transport_no'];
			}
			
			
			if (isset($vals['delivery_type'])){
				
				$this->delivery_type = $vals['delivery_type'];
			}
			
			
			if (isset($vals['result'])){
				
				$this->result = $vals['result'];
			}
			
			
			if (isset($vals['result_message'])){
				
				$this->result_message = $vals['result_message'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'UploadCarrierBillResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_no);
				
			}
			
			
			
			
			if ("delivery_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->delivery_type); 
				
			}
			
			
			
			
			if ("result" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->result); 
				
			}
			
			
			
			
			if ("result_message" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->result_message);
				
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
		
		$xfer += $output->writeFieldBegin('transport_no');
		$xfer += $output->writeString($this->transport_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('delivery_type');
		$xfer += $output->writeI32($this->delivery_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('result');
		$xfer += $output->writeI32($this->result);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->result_message !== null) {
			
			$xfer += $output->writeFieldBegin('result_message');
			$xfer += $output->writeString($this->result_message);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>