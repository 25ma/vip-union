<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\hcscm\cis\service;

class GoodsInventoryInfo {
	
	static $_TSPEC;
	public $id = null;
	public $rdcCode = null;
	public $rdcName = null;
	public $cargoOwner = null;
	public $warehouseCode = null;
	public $spu = null;
	public $sku = null;
	public $pic = null;
	public $color = null;
	public $size = null;
	public $model = null;
	public $stockQty = null;
	public $allocatedQty = null;
	public $inTransitQty = null;
	public $canPreallocatedQty = null;
	public $preallocatedQty = null;
	public $defectLevel = null;
	public $frozenQty = null;
	public $availableQty = null;
	public $safeQty = null;
	public $createdBy = null;
	public $createTimeStr = null;
	public $updatedBy = null;
	public $updateTimeStr = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'rdcCode'
			),
			3 => array(
			'var' => 'rdcName'
			),
			4 => array(
			'var' => 'cargoOwner'
			),
			5 => array(
			'var' => 'warehouseCode'
			),
			6 => array(
			'var' => 'spu'
			),
			7 => array(
			'var' => 'sku'
			),
			8 => array(
			'var' => 'pic'
			),
			9 => array(
			'var' => 'color'
			),
			10 => array(
			'var' => 'size'
			),
			11 => array(
			'var' => 'model'
			),
			12 => array(
			'var' => 'stockQty'
			),
			13 => array(
			'var' => 'allocatedQty'
			),
			14 => array(
			'var' => 'inTransitQty'
			),
			15 => array(
			'var' => 'canPreallocatedQty'
			),
			16 => array(
			'var' => 'preallocatedQty'
			),
			17 => array(
			'var' => 'defectLevel'
			),
			18 => array(
			'var' => 'frozenQty'
			),
			19 => array(
			'var' => 'availableQty'
			),
			20 => array(
			'var' => 'safeQty'
			),
			21 => array(
			'var' => 'createdBy'
			),
			22 => array(
			'var' => 'createTimeStr'
			),
			23 => array(
			'var' => 'updatedBy'
			),
			24 => array(
			'var' => 'updateTimeStr'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['rdcCode'])){
				
				$this->rdcCode = $vals['rdcCode'];
			}
			
			
			if (isset($vals['rdcName'])){
				
				$this->rdcName = $vals['rdcName'];
			}
			
			
			if (isset($vals['cargoOwner'])){
				
				$this->cargoOwner = $vals['cargoOwner'];
			}
			
			
			if (isset($vals['warehouseCode'])){
				
				$this->warehouseCode = $vals['warehouseCode'];
			}
			
			
			if (isset($vals['spu'])){
				
				$this->spu = $vals['spu'];
			}
			
			
			if (isset($vals['sku'])){
				
				$this->sku = $vals['sku'];
			}
			
			
			if (isset($vals['pic'])){
				
				$this->pic = $vals['pic'];
			}
			
			
			if (isset($vals['color'])){
				
				$this->color = $vals['color'];
			}
			
			
			if (isset($vals['size'])){
				
				$this->size = $vals['size'];
			}
			
			
			if (isset($vals['model'])){
				
				$this->model = $vals['model'];
			}
			
			
			if (isset($vals['stockQty'])){
				
				$this->stockQty = $vals['stockQty'];
			}
			
			
			if (isset($vals['allocatedQty'])){
				
				$this->allocatedQty = $vals['allocatedQty'];
			}
			
			
			if (isset($vals['inTransitQty'])){
				
				$this->inTransitQty = $vals['inTransitQty'];
			}
			
			
			if (isset($vals['canPreallocatedQty'])){
				
				$this->canPreallocatedQty = $vals['canPreallocatedQty'];
			}
			
			
			if (isset($vals['preallocatedQty'])){
				
				$this->preallocatedQty = $vals['preallocatedQty'];
			}
			
			
			if (isset($vals['defectLevel'])){
				
				$this->defectLevel = $vals['defectLevel'];
			}
			
			
			if (isset($vals['frozenQty'])){
				
				$this->frozenQty = $vals['frozenQty'];
			}
			
			
			if (isset($vals['availableQty'])){
				
				$this->availableQty = $vals['availableQty'];
			}
			
			
			if (isset($vals['safeQty'])){
				
				$this->safeQty = $vals['safeQty'];
			}
			
			
			if (isset($vals['createdBy'])){
				
				$this->createdBy = $vals['createdBy'];
			}
			
			
			if (isset($vals['createTimeStr'])){
				
				$this->createTimeStr = $vals['createTimeStr'];
			}
			
			
			if (isset($vals['updatedBy'])){
				
				$this->updatedBy = $vals['updatedBy'];
			}
			
			
			if (isset($vals['updateTimeStr'])){
				
				$this->updateTimeStr = $vals['updateTimeStr'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GoodsInventoryInfo';
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
			
			
			
			
			if ("rdcCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rdcCode);
				
			}
			
			
			
			
			if ("rdcName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rdcName);
				
			}
			
			
			
			
			if ("cargoOwner" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cargoOwner);
				
			}
			
			
			
			
			if ("warehouseCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseCode);
				
			}
			
			
			
			
			if ("spu" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->spu);
				
			}
			
			
			
			
			if ("sku" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sku);
				
			}
			
			
			
			
			if ("pic" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pic);
				
			}
			
			
			
			
			if ("color" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->color);
				
			}
			
			
			
			
			if ("size" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->size);
				
			}
			
			
			
			
			if ("model" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->model);
				
			}
			
			
			
			
			if ("stockQty" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->stockQty); 
				
			}
			
			
			
			
			if ("allocatedQty" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->allocatedQty); 
				
			}
			
			
			
			
			if ("inTransitQty" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->inTransitQty); 
				
			}
			
			
			
			
			if ("canPreallocatedQty" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->canPreallocatedQty); 
				
			}
			
			
			
			
			if ("preallocatedQty" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->preallocatedQty); 
				
			}
			
			
			
			
			if ("defectLevel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->defectLevel);
				
			}
			
			
			
			
			if ("frozenQty" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->frozenQty); 
				
			}
			
			
			
			
			if ("availableQty" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->availableQty); 
				
			}
			
			
			
			
			if ("safeQty" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->safeQty); 
				
			}
			
			
			
			
			if ("createdBy" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createdBy);
				
			}
			
			
			
			
			if ("createTimeStr" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createTimeStr);
				
			}
			
			
			
			
			if ("updatedBy" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->updatedBy);
				
			}
			
			
			
			
			if ("updateTimeStr" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->updateTimeStr);
				
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
		
		
		if($this->rdcCode !== null) {
			
			$xfer += $output->writeFieldBegin('rdcCode');
			$xfer += $output->writeString($this->rdcCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rdcName !== null) {
			
			$xfer += $output->writeFieldBegin('rdcName');
			$xfer += $output->writeString($this->rdcName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cargoOwner !== null) {
			
			$xfer += $output->writeFieldBegin('cargoOwner');
			$xfer += $output->writeString($this->cargoOwner);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouseCode !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseCode');
			$xfer += $output->writeString($this->warehouseCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->spu !== null) {
			
			$xfer += $output->writeFieldBegin('spu');
			$xfer += $output->writeString($this->spu);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sku !== null) {
			
			$xfer += $output->writeFieldBegin('sku');
			$xfer += $output->writeString($this->sku);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pic !== null) {
			
			$xfer += $output->writeFieldBegin('pic');
			$xfer += $output->writeString($this->pic);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->color !== null) {
			
			$xfer += $output->writeFieldBegin('color');
			$xfer += $output->writeString($this->color);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->size !== null) {
			
			$xfer += $output->writeFieldBegin('size');
			$xfer += $output->writeString($this->size);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->model !== null) {
			
			$xfer += $output->writeFieldBegin('model');
			$xfer += $output->writeString($this->model);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->stockQty !== null) {
			
			$xfer += $output->writeFieldBegin('stockQty');
			$xfer += $output->writeI64($this->stockQty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->allocatedQty !== null) {
			
			$xfer += $output->writeFieldBegin('allocatedQty');
			$xfer += $output->writeI64($this->allocatedQty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->inTransitQty !== null) {
			
			$xfer += $output->writeFieldBegin('inTransitQty');
			$xfer += $output->writeI64($this->inTransitQty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->canPreallocatedQty !== null) {
			
			$xfer += $output->writeFieldBegin('canPreallocatedQty');
			$xfer += $output->writeI64($this->canPreallocatedQty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->preallocatedQty !== null) {
			
			$xfer += $output->writeFieldBegin('preallocatedQty');
			$xfer += $output->writeI64($this->preallocatedQty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->defectLevel !== null) {
			
			$xfer += $output->writeFieldBegin('defectLevel');
			$xfer += $output->writeString($this->defectLevel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->frozenQty !== null) {
			
			$xfer += $output->writeFieldBegin('frozenQty');
			$xfer += $output->writeI64($this->frozenQty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->availableQty !== null) {
			
			$xfer += $output->writeFieldBegin('availableQty');
			$xfer += $output->writeI64($this->availableQty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->safeQty !== null) {
			
			$xfer += $output->writeFieldBegin('safeQty');
			$xfer += $output->writeI64($this->safeQty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createdBy !== null) {
			
			$xfer += $output->writeFieldBegin('createdBy');
			$xfer += $output->writeString($this->createdBy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTimeStr !== null) {
			
			$xfer += $output->writeFieldBegin('createTimeStr');
			$xfer += $output->writeString($this->createTimeStr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updatedBy !== null) {
			
			$xfer += $output->writeFieldBegin('updatedBy');
			$xfer += $output->writeString($this->updatedBy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateTimeStr !== null) {
			
			$xfer += $output->writeFieldBegin('updateTimeStr');
			$xfer += $output->writeString($this->updateTimeStr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>