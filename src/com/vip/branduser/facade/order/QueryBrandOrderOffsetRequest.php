<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\branduser\facade\order;

class QueryBrandOrderOffsetRequest {
	
	static $_TSPEC;
	public $order_goods_state = null;
	public $start_time = null;
	public $end_time = null;
	public $brand_identify = null;
	public $timestamp = null;
	public $isv_identity = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_goods_state'
			),
			2 => array(
			'var' => 'start_time'
			),
			3 => array(
			'var' => 'end_time'
			),
			4 => array(
			'var' => 'brand_identify'
			),
			5 => array(
			'var' => 'timestamp'
			),
			6 => array(
			'var' => 'isv_identity'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_goods_state'])){
				
				$this->order_goods_state = $vals['order_goods_state'];
			}
			
			
			if (isset($vals['start_time'])){
				
				$this->start_time = $vals['start_time'];
			}
			
			
			if (isset($vals['end_time'])){
				
				$this->end_time = $vals['end_time'];
			}
			
			
			if (isset($vals['brand_identify'])){
				
				$this->brand_identify = $vals['brand_identify'];
			}
			
			
			if (isset($vals['timestamp'])){
				
				$this->timestamp = $vals['timestamp'];
			}
			
			
			if (isset($vals['isv_identity'])){
				
				$this->isv_identity = $vals['isv_identity'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'QueryBrandOrderOffsetRequest';
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
			
			
			
			
			if ("start_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->start_time);
				
			}
			
			
			
			
			if ("end_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->end_time);
				
			}
			
			
			
			
			if ("brand_identify" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_identify);
				
			}
			
			
			
			
			if ("timestamp" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->timestamp); 
				
			}
			
			
			
			
			if ("isv_identity" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->isv_identity);
				
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
		
		
		$xfer += $output->writeFieldBegin('start_time');
		$xfer += $output->writeI64($this->start_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('end_time');
		$xfer += $output->writeI64($this->end_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('brand_identify');
		$xfer += $output->writeString($this->brand_identify);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('timestamp');
		$xfer += $output->writeI64($this->timestamp);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('isv_identity');
		$xfer += $output->writeString($this->isv_identity);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>