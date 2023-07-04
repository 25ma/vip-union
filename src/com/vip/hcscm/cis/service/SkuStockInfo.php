<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\hcscm\cis\service;

class SkuStockInfo {
	
	static $_TSPEC;
	public $spu = null;
	public $sku = null;
	public $stock = null;
	public $poNo = null;
	public $warehouseCode = null;
	public $vendorCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'spu'
			),
			2 => array(
			'var' => 'sku'
			),
			3 => array(
			'var' => 'stock'
			),
			4 => array(
			'var' => 'poNo'
			),
			5 => array(
			'var' => 'warehouseCode'
			),
			6 => array(
			'var' => 'vendorCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['spu'])){
				
				$this->spu = $vals['spu'];
			}
			
			
			if (isset($vals['sku'])){
				
				$this->sku = $vals['sku'];
			}
			
			
			if (isset($vals['stock'])){
				
				$this->stock = $vals['stock'];
			}
			
			
			if (isset($vals['poNo'])){
				
				$this->poNo = $vals['poNo'];
			}
			
			
			if (isset($vals['warehouseCode'])){
				
				$this->warehouseCode = $vals['warehouseCode'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SkuStockInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("spu" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->spu);
				
			}
			
			
			
			
			if ("sku" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sku);
				
			}
			
			
			
			
			if ("stock" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->stock); 
				
			}
			
			
			
			
			if ("poNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poNo);
				
			}
			
			
			
			
			if ("warehouseCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseCode);
				
			}
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCode);
				
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
		
		
		if($this->stock !== null) {
			
			$xfer += $output->writeFieldBegin('stock');
			$xfer += $output->writeI32($this->stock);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poNo !== null) {
			
			$xfer += $output->writeFieldBegin('poNo');
			$xfer += $output->writeString($this->poNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouseCode !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseCode');
			$xfer += $output->writeString($this->warehouseCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorCode !== null) {
			
			$xfer += $output->writeFieldBegin('vendorCode');
			$xfer += $output->writeString($this->vendorCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>