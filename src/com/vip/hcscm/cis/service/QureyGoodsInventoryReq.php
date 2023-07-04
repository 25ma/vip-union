<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\hcscm\cis\service;

class QureyGoodsInventoryReq {
	
	static $_TSPEC;
	public $id = null;
	public $rdcCodeList = null;
	public $warehouseCode = null;
	public $spuList = null;
	public $skuList = null;
	public $pageNum = null;
	public $pageSize = null;
	public $operationalCharacter = null;
	public $stockQty = null;
	public $inTransitQtyOperationalCharacter = null;
	public $inTransitQty = null;
	public $safeQtyOperationalCharacter = null;
	public $safeQty = null;
	public $availableQtyOperationalCharacter = null;
	public $availableQty = null;
	public $cargoOwner = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'rdcCodeList'
			),
			3 => array(
			'var' => 'warehouseCode'
			),
			4 => array(
			'var' => 'spuList'
			),
			5 => array(
			'var' => 'skuList'
			),
			6 => array(
			'var' => 'pageNum'
			),
			7 => array(
			'var' => 'pageSize'
			),
			8 => array(
			'var' => 'operationalCharacter'
			),
			9 => array(
			'var' => 'stockQty'
			),
			10 => array(
			'var' => 'inTransitQtyOperationalCharacter'
			),
			11 => array(
			'var' => 'inTransitQty'
			),
			12 => array(
			'var' => 'safeQtyOperationalCharacter'
			),
			13 => array(
			'var' => 'safeQty'
			),
			14 => array(
			'var' => 'availableQtyOperationalCharacter'
			),
			15 => array(
			'var' => 'availableQty'
			),
			16 => array(
			'var' => 'cargoOwner'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['rdcCodeList'])){
				
				$this->rdcCodeList = $vals['rdcCodeList'];
			}
			
			
			if (isset($vals['warehouseCode'])){
				
				$this->warehouseCode = $vals['warehouseCode'];
			}
			
			
			if (isset($vals['spuList'])){
				
				$this->spuList = $vals['spuList'];
			}
			
			
			if (isset($vals['skuList'])){
				
				$this->skuList = $vals['skuList'];
			}
			
			
			if (isset($vals['pageNum'])){
				
				$this->pageNum = $vals['pageNum'];
			}
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
			if (isset($vals['operationalCharacter'])){
				
				$this->operationalCharacter = $vals['operationalCharacter'];
			}
			
			
			if (isset($vals['stockQty'])){
				
				$this->stockQty = $vals['stockQty'];
			}
			
			
			if (isset($vals['inTransitQtyOperationalCharacter'])){
				
				$this->inTransitQtyOperationalCharacter = $vals['inTransitQtyOperationalCharacter'];
			}
			
			
			if (isset($vals['inTransitQty'])){
				
				$this->inTransitQty = $vals['inTransitQty'];
			}
			
			
			if (isset($vals['safeQtyOperationalCharacter'])){
				
				$this->safeQtyOperationalCharacter = $vals['safeQtyOperationalCharacter'];
			}
			
			
			if (isset($vals['safeQty'])){
				
				$this->safeQty = $vals['safeQty'];
			}
			
			
			if (isset($vals['availableQtyOperationalCharacter'])){
				
				$this->availableQtyOperationalCharacter = $vals['availableQtyOperationalCharacter'];
			}
			
			
			if (isset($vals['availableQty'])){
				
				$this->availableQty = $vals['availableQty'];
			}
			
			
			if (isset($vals['cargoOwner'])){
				
				$this->cargoOwner = $vals['cargoOwner'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'QureyGoodsInventoryReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
			}
			
			
			
			
			if ("rdcCodeList" == $schemeField){
				
				$needSkip = false;
				
				$this->rdcCodeList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->rdcCodeList[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("warehouseCode" == $schemeField){
				
				$needSkip = false;
				
				$this->warehouseCode = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						$input->readString($elem2);
						
						$this->warehouseCode[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("spuList" == $schemeField){
				
				$needSkip = false;
				
				$this->spuList = array();
				$_size3 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem3 = null;
						$input->readString($elem3);
						
						$this->spuList[$_size3++] = $elem3;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("skuList" == $schemeField){
				
				$needSkip = false;
				
				$this->skuList = array();
				$_size4 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem4 = null;
						$input->readString($elem4);
						
						$this->skuList[$_size4++] = $elem4;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("pageNum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->pageNum); 
				
			}
			
			
			
			
			if ("pageSize" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->pageSize); 
				
			}
			
			
			
			
			if ("operationalCharacter" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operationalCharacter);
				
			}
			
			
			
			
			if ("stockQty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->stockQty); 
				
			}
			
			
			
			
			if ("inTransitQtyOperationalCharacter" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->inTransitQtyOperationalCharacter);
				
			}
			
			
			
			
			if ("inTransitQty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->inTransitQty); 
				
			}
			
			
			
			
			if ("safeQtyOperationalCharacter" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->safeQtyOperationalCharacter);
				
			}
			
			
			
			
			if ("safeQty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->safeQty); 
				
			}
			
			
			
			
			if ("availableQtyOperationalCharacter" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->availableQtyOperationalCharacter);
				
			}
			
			
			
			
			if ("availableQty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->availableQty); 
				
			}
			
			
			
			
			if ("cargoOwner" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cargoOwner);
				
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
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rdcCodeList !== null) {
			
			$xfer += $output->writeFieldBegin('rdcCodeList');
			
			if (!is_array($this->rdcCodeList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->rdcCodeList as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouseCode !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseCode');
			
			if (!is_array($this->warehouseCode)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->warehouseCode as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->spuList !== null) {
			
			$xfer += $output->writeFieldBegin('spuList');
			
			if (!is_array($this->spuList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->spuList as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->skuList !== null) {
			
			$xfer += $output->writeFieldBegin('skuList');
			
			if (!is_array($this->skuList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->skuList as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pageNum !== null) {
			
			$xfer += $output->writeFieldBegin('pageNum');
			$xfer += $output->writeI32($this->pageNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pageSize !== null) {
			
			$xfer += $output->writeFieldBegin('pageSize');
			$xfer += $output->writeI32($this->pageSize);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operationalCharacter !== null) {
			
			$xfer += $output->writeFieldBegin('operationalCharacter');
			$xfer += $output->writeString($this->operationalCharacter);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->stockQty !== null) {
			
			$xfer += $output->writeFieldBegin('stockQty');
			$xfer += $output->writeI32($this->stockQty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->inTransitQtyOperationalCharacter !== null) {
			
			$xfer += $output->writeFieldBegin('inTransitQtyOperationalCharacter');
			$xfer += $output->writeString($this->inTransitQtyOperationalCharacter);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->inTransitQty !== null) {
			
			$xfer += $output->writeFieldBegin('inTransitQty');
			$xfer += $output->writeI32($this->inTransitQty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->safeQtyOperationalCharacter !== null) {
			
			$xfer += $output->writeFieldBegin('safeQtyOperationalCharacter');
			$xfer += $output->writeString($this->safeQtyOperationalCharacter);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->safeQty !== null) {
			
			$xfer += $output->writeFieldBegin('safeQty');
			$xfer += $output->writeI32($this->safeQty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->availableQtyOperationalCharacter !== null) {
			
			$xfer += $output->writeFieldBegin('availableQtyOperationalCharacter');
			$xfer += $output->writeString($this->availableQtyOperationalCharacter);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->availableQty !== null) {
			
			$xfer += $output->writeFieldBegin('availableQty');
			$xfer += $output->writeI32($this->availableQty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cargoOwner !== null) {
			
			$xfer += $output->writeFieldBegin('cargoOwner');
			$xfer += $output->writeString($this->cargoOwner);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>