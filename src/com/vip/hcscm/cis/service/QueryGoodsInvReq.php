<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\hcscm\cis\service;

class QueryGoodsInvReq {
	
	static $_TSPEC;
	public $spuAndWarehouseInfoList = null;
	public $skuAndSpuAndWarehouseInfoList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'spuAndWarehouseInfoList'
			),
			2 => array(
			'var' => 'skuAndSpuAndWarehouseInfoList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['spuAndWarehouseInfoList'])){
				
				$this->spuAndWarehouseInfoList = $vals['spuAndWarehouseInfoList'];
			}
			
			
			if (isset($vals['skuAndSpuAndWarehouseInfoList'])){
				
				$this->skuAndSpuAndWarehouseInfoList = $vals['skuAndSpuAndWarehouseInfoList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'QueryGoodsInvReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("spuAndWarehouseInfoList" == $schemeField){
				
				$needSkip = false;
				
				$this->spuAndWarehouseInfoList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\hcscm\cis\service\SkuAndSpuAndWarehouseInfo();
						$elem0->read($input);
						
						$this->spuAndWarehouseInfoList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("skuAndSpuAndWarehouseInfoList" == $schemeField){
				
				$needSkip = false;
				
				$this->skuAndSpuAndWarehouseInfoList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\hcscm\cis\service\SkuAndSpuAndWarehouseInfo();
						$elem1->read($input);
						
						$this->skuAndSpuAndWarehouseInfoList[$_size1++] = $elem1;
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
		
		if($this->spuAndWarehouseInfoList !== null) {
			
			$xfer += $output->writeFieldBegin('spuAndWarehouseInfoList');
			
			if (!is_array($this->spuAndWarehouseInfoList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->spuAndWarehouseInfoList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->skuAndSpuAndWarehouseInfoList !== null) {
			
			$xfer += $output->writeFieldBegin('skuAndSpuAndWarehouseInfoList');
			
			if (!is_array($this->skuAndSpuAndWarehouseInfoList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->skuAndSpuAndWarehouseInfoList as $iter0){
				
				
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