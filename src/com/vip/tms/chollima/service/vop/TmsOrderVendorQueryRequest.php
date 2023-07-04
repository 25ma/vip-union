<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tms\chollima\service\vop;

class TmsOrderVendorQueryRequest {
	
	static $_TSPEC;
	public $tms_request_header = null;
	public $tms_order_no = null;
	public $order_type = null;
	public $vendor_code = null;
	public $vendor_order_no = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tms_request_header'
			),
			2 => array(
			'var' => 'tms_order_no'
			),
			3 => array(
			'var' => 'order_type'
			),
			4 => array(
			'var' => 'vendor_code'
			),
			5 => array(
			'var' => 'vendor_order_no'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tms_request_header'])){
				
				$this->tms_request_header = $vals['tms_request_header'];
			}
			
			
			if (isset($vals['tms_order_no'])){
				
				$this->tms_order_no = $vals['tms_order_no'];
			}
			
			
			if (isset($vals['order_type'])){
				
				$this->order_type = $vals['order_type'];
			}
			
			
			if (isset($vals['vendor_code'])){
				
				$this->vendor_code = $vals['vendor_code'];
			}
			
			
			if (isset($vals['vendor_order_no'])){
				
				$this->vendor_order_no = $vals['vendor_order_no'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TmsOrderVendorQueryRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("tms_request_header" == $schemeField){
				
				$needSkip = false;
				
				$this->tms_request_header = new \com\vip\tms\chollima\service\vop\TmsRequestHeader();
				$this->tms_request_header->read($input);
				
			}
			
			
			
			
			if ("tms_order_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tms_order_no);
				
			}
			
			
			
			
			if ("order_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_type);
				
			}
			
			
			
			
			if ("vendor_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_code);
				
			}
			
			
			
			
			if ("vendor_order_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_order_no);
				
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
		
		$xfer += $output->writeFieldBegin('tms_request_header');
		
		if (!is_object($this->tms_request_header)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->tms_request_header->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->tms_order_no !== null) {
			
			$xfer += $output->writeFieldBegin('tms_order_no');
			$xfer += $output->writeString($this->tms_order_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('order_type');
		$xfer += $output->writeString($this->order_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendor_code');
		$xfer += $output->writeString($this->vendor_code);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->vendor_order_no !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_order_no');
			$xfer += $output->writeString($this->vendor_order_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>