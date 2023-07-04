<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\ofc\tp\biz\service\deductionorder\request;

class NotifyDeductionOrderRecycleResultReq {
	
	static $_TSPEC;
	public $order_sn = null;
	public $recycle_status = null;
	public $inspection_price = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_sn'
			),
			2 => array(
			'var' => 'recycle_status'
			),
			3 => array(
			'var' => 'inspection_price'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['recycle_status'])){
				
				$this->recycle_status = $vals['recycle_status'];
			}
			
			
			if (isset($vals['inspection_price'])){
				
				$this->inspection_price = $vals['inspection_price'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'NotifyDeductionOrderRecycleResultReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sn);
				
			}
			
			
			
			
			if ("recycle_status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->recycle_status); 
				
			}
			
			
			
			
			if ("inspection_price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->inspection_price);
				
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
		
		if($this->order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('order_sn');
			$xfer += $output->writeString($this->order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->recycle_status !== null) {
			
			$xfer += $output->writeFieldBegin('recycle_status');
			$xfer += $output->writeI32($this->recycle_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->inspection_price !== null) {
			
			$xfer += $output->writeFieldBegin('inspection_price');
			$xfer += $output->writeString($this->inspection_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>