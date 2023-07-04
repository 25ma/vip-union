<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tms\vop\service;

class WaybillPackageDto {
	
	static $_TSPEC;
	public $order_sn_list = null;
	public $package_desc = null;
	public $package_volume = null;
	public $package_weight = null;
	public $good_item_list = null;
	public $order_biz_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_sn_list'
			),
			2 => array(
			'var' => 'package_desc'
			),
			3 => array(
			'var' => 'package_volume'
			),
			4 => array(
			'var' => 'package_weight'
			),
			5 => array(
			'var' => 'good_item_list'
			),
			6 => array(
			'var' => 'order_biz_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_sn_list'])){
				
				$this->order_sn_list = $vals['order_sn_list'];
			}
			
			
			if (isset($vals['package_desc'])){
				
				$this->package_desc = $vals['package_desc'];
			}
			
			
			if (isset($vals['package_volume'])){
				
				$this->package_volume = $vals['package_volume'];
			}
			
			
			if (isset($vals['package_weight'])){
				
				$this->package_weight = $vals['package_weight'];
			}
			
			
			if (isset($vals['good_item_list'])){
				
				$this->good_item_list = $vals['good_item_list'];
			}
			
			
			if (isset($vals['order_biz_time'])){
				
				$this->order_biz_time = $vals['order_biz_time'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WaybillPackageDto';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("order_sn_list" == $schemeField){
				
				$needSkip = false;
				
				$this->order_sn_list = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->order_sn_list[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("package_desc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->package_desc);
				
			}
			
			
			
			
			if ("package_volume" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->package_volume);
				
			}
			
			
			
			
			if ("package_weight" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->package_weight);
				
			}
			
			
			
			
			if ("good_item_list" == $schemeField){
				
				$needSkip = false;
				
				$this->good_item_list = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\tms\vop\service\GoodItemDto();
						$elem1->read($input);
						
						$this->good_item_list[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("order_biz_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->order_biz_time); 
				
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
		
		if($this->order_sn_list !== null) {
			
			$xfer += $output->writeFieldBegin('order_sn_list');
			
			if (!is_array($this->order_sn_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->order_sn_list as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->package_desc !== null) {
			
			$xfer += $output->writeFieldBegin('package_desc');
			$xfer += $output->writeString($this->package_desc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->package_volume !== null) {
			
			$xfer += $output->writeFieldBegin('package_volume');
			$xfer += $output->writeString($this->package_volume);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->package_weight !== null) {
			
			$xfer += $output->writeFieldBegin('package_weight');
			$xfer += $output->writeString($this->package_weight);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->good_item_list !== null) {
			
			$xfer += $output->writeFieldBegin('good_item_list');
			
			if (!is_array($this->good_item_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->good_item_list as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_biz_time !== null) {
			
			$xfer += $output->writeFieldBegin('order_biz_time');
			$xfer += $output->writeI64($this->order_biz_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>