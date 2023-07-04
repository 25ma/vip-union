<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tpc\api\model;

class QueryCancelledLineTransportPlanRequest {
	
	static $_TSPEC;
	public $carrier_code = null;
	public $cancel_time_begin = null;
	public $cancel_time_end = null;
	public $transport_no = null;
	public $transport_plan_no = null;
	public $page_number = null;
	public $page_size = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'carrier_code'
			),
			2 => array(
			'var' => 'cancel_time_begin'
			),
			3 => array(
			'var' => 'cancel_time_end'
			),
			4 => array(
			'var' => 'transport_no'
			),
			5 => array(
			'var' => 'transport_plan_no'
			),
			6 => array(
			'var' => 'page_number'
			),
			7 => array(
			'var' => 'page_size'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['carrier_code'])){
				
				$this->carrier_code = $vals['carrier_code'];
			}
			
			
			if (isset($vals['cancel_time_begin'])){
				
				$this->cancel_time_begin = $vals['cancel_time_begin'];
			}
			
			
			if (isset($vals['cancel_time_end'])){
				
				$this->cancel_time_end = $vals['cancel_time_end'];
			}
			
			
			if (isset($vals['transport_no'])){
				
				$this->transport_no = $vals['transport_no'];
			}
			
			
			if (isset($vals['transport_plan_no'])){
				
				$this->transport_plan_no = $vals['transport_plan_no'];
			}
			
			
			if (isset($vals['page_number'])){
				
				$this->page_number = $vals['page_number'];
			}
			
			
			if (isset($vals['page_size'])){
				
				$this->page_size = $vals['page_size'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'QueryCancelledLineTransportPlanRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("carrier_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_code);
				
			}
			
			
			
			
			if ("cancel_time_begin" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->cancel_time_begin);
				
			}
			
			
			
			
			if ("cancel_time_end" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->cancel_time_end);
				
			}
			
			
			
			
			if ("transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_no);
				
			}
			
			
			
			
			if ("transport_plan_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_plan_no);
				
			}
			
			
			
			
			if ("page_number" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page_number); 
				
			}
			
			
			
			
			if ("page_size" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page_size); 
				
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
		
		$xfer += $output->writeFieldBegin('carrier_code');
		$xfer += $output->writeString($this->carrier_code);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->cancel_time_begin !== null) {
			
			$xfer += $output->writeFieldBegin('cancel_time_begin');
			$xfer += $output->writeI64($this->cancel_time_begin);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cancel_time_end !== null) {
			
			$xfer += $output->writeFieldBegin('cancel_time_end');
			$xfer += $output->writeI64($this->cancel_time_end);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transport_no !== null) {
			
			$xfer += $output->writeFieldBegin('transport_no');
			$xfer += $output->writeString($this->transport_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transport_plan_no !== null) {
			
			$xfer += $output->writeFieldBegin('transport_plan_no');
			$xfer += $output->writeString($this->transport_plan_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page_number !== null) {
			
			$xfer += $output->writeFieldBegin('page_number');
			$xfer += $output->writeI32($this->page_number);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page_size !== null) {
			
			$xfer += $output->writeFieldBegin('page_size');
			$xfer += $output->writeI32($this->page_size);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>