<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class OrderSignedConfirmParam {
	
	static $_TSPEC;
	public $orderSn = null;
	public $shippingType = null;
	public $shipInfoList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			2 => array(
			'var' => 'shippingType'
			),
			3 => array(
			'var' => 'shipInfoList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['shippingType'])){
				
				$this->shippingType = $vals['shippingType'];
			}
			
			
			if (isset($vals['shipInfoList'])){
				
				$this->shipInfoList = $vals['shipInfoList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderSignedConfirmParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("shippingType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->shippingType); 
				
			}
			
			
			
			
			if ("shipInfoList" == $schemeField){
				
				$needSkip = false;
				
				$this->shipInfoList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\sof\sof\service\ShipInfoItem();
						$elem0->read($input);
						
						$this->shipInfoList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shippingType !== null) {
			
			$xfer += $output->writeFieldBegin('shippingType');
			$xfer += $output->writeI32($this->shippingType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shipInfoList !== null) {
			
			$xfer += $output->writeFieldBegin('shipInfoList');
			
			if (!is_array($this->shipInfoList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->shipInfoList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>