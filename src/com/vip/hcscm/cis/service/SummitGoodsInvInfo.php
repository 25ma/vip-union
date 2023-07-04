<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\hcscm\cis\service;

class SummitGoodsInvInfo {
	
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
	public $qty = null;
	public $opType = null;
	public $createdBy = null;
	public $updatedBy = null;
	public $remark = null;
	
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
			'var' => 'qty'
			),
			13 => array(
			'var' => 'opType'
			),
			14 => array(
			'var' => 'createdBy'
			),
			15 => array(
			'var' => 'updatedBy'
			),
			16 => array(
			'var' => 'remark'
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
			
			
			if (isset($vals['qty'])){
				
				$this->qty = $vals['qty'];
			}
			
			
			if (isset($vals['opType'])){
				
				$this->opType = $vals['opType'];
			}
			
			
			if (isset($vals['createdBy'])){
				
				$this->createdBy = $vals['createdBy'];
			}
			
			
			if (isset($vals['updatedBy'])){
				
				$this->updatedBy = $vals['updatedBy'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SummitGoodsInvInfo';
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
			
			
			
			
			if ("qty" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->qty); 
				
			}
			
			
			
			
			if ("opType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->opType);
				
			}
			
			
			
			
			if ("createdBy" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createdBy);
				
			}
			
			
			
			
			if ("updatedBy" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->updatedBy);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
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
		
		
		$xfer += $output->writeFieldBegin('rdcCode');
		$xfer += $output->writeString($this->rdcCode);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->rdcName !== null) {
			
			$xfer += $output->writeFieldBegin('rdcName');
			$xfer += $output->writeString($this->rdcName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('cargoOwner');
		$xfer += $output->writeString($this->cargoOwner);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouseCode');
		$xfer += $output->writeString($this->warehouseCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('spu');
		$xfer += $output->writeString($this->spu);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sku');
		$xfer += $output->writeString($this->sku);
		
		$xfer += $output->writeFieldEnd();
		
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
		
		
		$xfer += $output->writeFieldBegin('qty');
		$xfer += $output->writeI64($this->qty);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('opType');
		$xfer += $output->writeString($this->opType);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->createdBy !== null) {
			
			$xfer += $output->writeFieldBegin('createdBy');
			$xfer += $output->writeString($this->createdBy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updatedBy !== null) {
			
			$xfer += $output->writeFieldBegin('updatedBy');
			$xfer += $output->writeString($this->updatedBy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>