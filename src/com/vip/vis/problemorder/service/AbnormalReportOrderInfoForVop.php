<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\problemorder\service;

class AbnormalReportOrderInfoForVop {
	
	static $_TSPEC;
	public $delivery_no = null;
	public $warehouse = null;
	public $delivery_no_status = null;
	public $transport_no = null;
	public $delivery_batch = null;
	public $out_confirm_time = null;
	public $predict_arrived_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'delivery_no'
			),
			2 => array(
			'var' => 'warehouse'
			),
			3 => array(
			'var' => 'delivery_no_status'
			),
			4 => array(
			'var' => 'transport_no'
			),
			5 => array(
			'var' => 'delivery_batch'
			),
			6 => array(
			'var' => 'out_confirm_time'
			),
			7 => array(
			'var' => 'predict_arrived_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['delivery_no'])){
				
				$this->delivery_no = $vals['delivery_no'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['delivery_no_status'])){
				
				$this->delivery_no_status = $vals['delivery_no_status'];
			}
			
			
			if (isset($vals['transport_no'])){
				
				$this->transport_no = $vals['transport_no'];
			}
			
			
			if (isset($vals['delivery_batch'])){
				
				$this->delivery_batch = $vals['delivery_batch'];
			}
			
			
			if (isset($vals['out_confirm_time'])){
				
				$this->out_confirm_time = $vals['out_confirm_time'];
			}
			
			
			if (isset($vals['predict_arrived_time'])){
				
				$this->predict_arrived_time = $vals['predict_arrived_time'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AbnormalReportOrderInfoForVop';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("delivery_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->delivery_no);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("delivery_no_status" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->delivery_no_status); 
				
			}
			
			
			
			
			if ("transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_no);
				
			}
			
			
			
			
			if ("delivery_batch" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->delivery_batch);
				
			}
			
			
			
			
			if ("out_confirm_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->out_confirm_time);
				
			}
			
			
			
			
			if ("predict_arrived_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->predict_arrived_time);
				
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
		
		if($this->delivery_no !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_no');
			$xfer += $output->writeString($this->delivery_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->delivery_no_status !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_no_status');
			$xfer += $output->writeByte($this->delivery_no_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transport_no !== null) {
			
			$xfer += $output->writeFieldBegin('transport_no');
			$xfer += $output->writeString($this->transport_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->delivery_batch !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_batch');
			$xfer += $output->writeString($this->delivery_batch);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->out_confirm_time !== null) {
			
			$xfer += $output->writeFieldBegin('out_confirm_time');
			$xfer += $output->writeString($this->out_confirm_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->predict_arrived_time !== null) {
			
			$xfer += $output->writeFieldBegin('predict_arrived_time');
			$xfer += $output->writeString($this->predict_arrived_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>