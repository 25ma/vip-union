<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tpc\api\model;

class CancelledTransportPlan {
	
	static $_TSPEC;
	public $transport_no = null;
	public $transport_plan_no = null;
	public $consignment_no = null;
	public $carrier_code = null;
	public $cancel_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transport_no'
			),
			2 => array(
			'var' => 'transport_plan_no'
			),
			3 => array(
			'var' => 'consignment_no'
			),
			4 => array(
			'var' => 'carrier_code'
			),
			5 => array(
			'var' => 'cancel_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transport_no'])){
				
				$this->transport_no = $vals['transport_no'];
			}
			
			
			if (isset($vals['transport_plan_no'])){
				
				$this->transport_plan_no = $vals['transport_plan_no'];
			}
			
			
			if (isset($vals['consignment_no'])){
				
				$this->consignment_no = $vals['consignment_no'];
			}
			
			
			if (isset($vals['carrier_code'])){
				
				$this->carrier_code = $vals['carrier_code'];
			}
			
			
			if (isset($vals['cancel_time'])){
				
				$this->cancel_time = $vals['cancel_time'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CancelledTransportPlan';
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
			
			
			
			
			if ("transport_plan_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_plan_no);
				
			}
			
			
			
			
			if ("consignment_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->consignment_no);
				
			}
			
			
			
			
			if ("carrier_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_code);
				
			}
			
			
			
			
			if ("cancel_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->cancel_time);
				
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
		
		
		if($this->consignment_no !== null) {
			
			$xfer += $output->writeFieldBegin('consignment_no');
			$xfer += $output->writeString($this->consignment_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrier_code !== null) {
			
			$xfer += $output->writeFieldBegin('carrier_code');
			$xfer += $output->writeString($this->carrier_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cancel_time !== null) {
			
			$xfer += $output->writeFieldBegin('cancel_time');
			$xfer += $output->writeI64($this->cancel_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>