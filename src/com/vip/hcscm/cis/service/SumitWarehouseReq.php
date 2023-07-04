<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\hcscm\cis\service;

class SumitWarehouseReq {
	
	static $_TSPEC;
	public $warehouseInfo = null;
	public $details = null;
	public $warehouseAddressInfos = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'warehouseInfo'
			),
			2 => array(
			'var' => 'details'
			),
			3 => array(
			'var' => 'warehouseAddressInfos'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['warehouseInfo'])){
				
				$this->warehouseInfo = $vals['warehouseInfo'];
			}
			
			
			if (isset($vals['details'])){
				
				$this->details = $vals['details'];
			}
			
			
			if (isset($vals['warehouseAddressInfos'])){
				
				$this->warehouseAddressInfos = $vals['warehouseAddressInfos'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SumitWarehouseReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("warehouseInfo" == $schemeField){
				
				$needSkip = false;
				
				$this->warehouseInfo = new \com\vip\hcscm\cis\service\SumitWarehouseInfo();
				$this->warehouseInfo->read($input);
				
			}
			
			
			
			
			if ("details" == $schemeField){
				
				$needSkip = false;
				
				$this->details = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\hcscm\cis\service\SumitStoreInfo();
						$elem0->read($input);
						
						$this->details[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("warehouseAddressInfos" == $schemeField){
				
				$needSkip = false;
				
				$this->warehouseAddressInfos = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\hcscm\cis\service\SubmitWarehouseAddressInfo();
						$elem1->read($input);
						
						$this->warehouseAddressInfos[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('warehouseInfo');
		
		if (!is_object($this->warehouseInfo)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->warehouseInfo->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->details !== null) {
			
			$xfer += $output->writeFieldBegin('details');
			
			if (!is_array($this->details)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->details as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouseAddressInfos !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseAddressInfos');
			
			if (!is_array($this->warehouseAddressInfos)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->warehouseAddressInfos as $iter0){
				
				
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