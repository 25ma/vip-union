<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\fbs\vop\service;

class BillVendorFeeAssistVerifyInfo {
	
	static $_TSPEC;
	public $master_order_sn = null;
	public $sub_orders = null;
	public $expand_field = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'master_order_sn'
			),
			2 => array(
			'var' => 'sub_orders'
			),
			3 => array(
			'var' => 'expand_field'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['master_order_sn'])){
				
				$this->master_order_sn = $vals['master_order_sn'];
			}
			
			
			if (isset($vals['sub_orders'])){
				
				$this->sub_orders = $vals['sub_orders'];
			}
			
			
			if (isset($vals['expand_field'])){
				
				$this->expand_field = $vals['expand_field'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BillVendorFeeAssistVerifyInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("master_order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->master_order_sn);
				
			}
			
			
			
			
			if ("sub_orders" == $schemeField){
				
				$needSkip = false;
				
				$this->sub_orders = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\top\fbs\vop\service\BillVendorFeeSubOrderInfo();
						$elem0->read($input);
						
						$this->sub_orders[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("expand_field" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->expand_field);
				
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
		
		if($this->master_order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('master_order_sn');
			$xfer += $output->writeString($this->master_order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sub_orders !== null) {
			
			$xfer += $output->writeFieldBegin('sub_orders');
			
			if (!is_array($this->sub_orders)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->sub_orders as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expand_field !== null) {
			
			$xfer += $output->writeFieldBegin('expand_field');
			$xfer += $output->writeString($this->expand_field);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>