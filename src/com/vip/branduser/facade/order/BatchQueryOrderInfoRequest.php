<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\branduser\facade\order;

class BatchQueryOrderInfoRequest {
	
	static $_TSPEC;
	public $order_goods_state = null;
	public $start_index = null;
	public $end_index = null;
	public $brand_identify = null;
	public $timestamp = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_goods_state'
			),
			2 => array(
			'var' => 'start_index'
			),
			3 => array(
			'var' => 'end_index'
			),
			4 => array(
			'var' => 'brand_identify'
			),
			5 => array(
			'var' => 'timestamp'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_goods_state'])){
				
				$this->order_goods_state = $vals['order_goods_state'];
			}
			
			
			if (isset($vals['start_index'])){
				
				$this->start_index = $vals['start_index'];
			}
			
			
			if (isset($vals['end_index'])){
				
				$this->end_index = $vals['end_index'];
			}
			
			
			if (isset($vals['brand_identify'])){
				
				$this->brand_identify = $vals['brand_identify'];
			}
			
			
			if (isset($vals['timestamp'])){
				
				$this->timestamp = $vals['timestamp'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BatchQueryOrderInfoRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("order_goods_state" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_goods_state);
				
			}
			
			
			
			
			if ("start_index" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->start_index); 
				
			}
			
			
			
			
			if ("end_index" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->end_index); 
				
			}
			
			
			
			
			if ("brand_identify" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_identify);
				
			}
			
			
			
			
			if ("timestamp" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->timestamp); 
				
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
		
		if($this->order_goods_state !== null) {
			
			$xfer += $output->writeFieldBegin('order_goods_state');
			$xfer += $output->writeString($this->order_goods_state);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('start_index');
		$xfer += $output->writeI64($this->start_index);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('end_index');
		$xfer += $output->writeI64($this->end_index);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('brand_identify');
		$xfer += $output->writeString($this->brand_identify);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('timestamp');
		$xfer += $output->writeI64($this->timestamp);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>