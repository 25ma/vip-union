<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\order\jit\service\goodsExt;

class QueryGoodsIdentityParam {
	
	static $_TSPEC;
	public $app_name = null;
	public $order_sns = null;
	public $bar_codes = null;
	public $start_update_time = null;
	public $end_update_time = null;
	public $vendor_id = null;
	public $page = null;
	public $page_size = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'app_name'
			),
			2 => array(
			'var' => 'order_sns'
			),
			3 => array(
			'var' => 'bar_codes'
			),
			4 => array(
			'var' => 'start_update_time'
			),
			5 => array(
			'var' => 'end_update_time'
			),
			6 => array(
			'var' => 'vendor_id'
			),
			7 => array(
			'var' => 'page'
			),
			8 => array(
			'var' => 'page_size'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['app_name'])){
				
				$this->app_name = $vals['app_name'];
			}
			
			
			if (isset($vals['order_sns'])){
				
				$this->order_sns = $vals['order_sns'];
			}
			
			
			if (isset($vals['bar_codes'])){
				
				$this->bar_codes = $vals['bar_codes'];
			}
			
			
			if (isset($vals['start_update_time'])){
				
				$this->start_update_time = $vals['start_update_time'];
			}
			
			
			if (isset($vals['end_update_time'])){
				
				$this->end_update_time = $vals['end_update_time'];
			}
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['page_size'])){
				
				$this->page_size = $vals['page_size'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'QueryGoodsIdentityParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("app_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->app_name);
				
			}
			
			
			
			
			if ("order_sns" == $schemeField){
				
				$needSkip = false;
				
				$this->order_sns = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->order_sns[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("bar_codes" == $schemeField){
				
				$needSkip = false;
				
				$this->bar_codes = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						$input->readString($elem2);
						
						$this->bar_codes[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("start_update_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->start_update_time);
				
			}
			
			
			
			
			if ("end_update_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->end_update_time);
				
			}
			
			
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_id); 
				
			}
			
			
			
			
			if ("page" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page); 
				
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
		
		$xfer += $output->writeFieldBegin('app_name');
		$xfer += $output->writeString($this->app_name);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->order_sns !== null) {
			
			$xfer += $output->writeFieldBegin('order_sns');
			
			if (!is_array($this->order_sns)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->order_sns as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bar_codes !== null) {
			
			$xfer += $output->writeFieldBegin('bar_codes');
			
			if (!is_array($this->bar_codes)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->bar_codes as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->start_update_time !== null) {
			
			$xfer += $output->writeFieldBegin('start_update_time');
			$xfer += $output->writeString($this->start_update_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->end_update_time !== null) {
			
			$xfer += $output->writeFieldBegin('end_update_time');
			$xfer += $output->writeString($this->end_update_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_id !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_id');
			$xfer += $output->writeI32($this->vendor_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('page');
		$xfer += $output->writeI32($this->page);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('page_size');
		$xfer += $output->writeI32($this->page_size);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>