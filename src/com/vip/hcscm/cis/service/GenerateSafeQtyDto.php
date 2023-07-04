<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\hcscm\cis\service;

class GenerateSafeQtyDto {
	
	static $_TSPEC;
	public $warehouseCode = null;
	public $spu = null;
	public $sku = null;
	public $stockQty = null;
	public $safeQty = null;
	public $info = null;
	public $warehouseName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'warehouseCode'
			),
			2 => array(
			'var' => 'spu'
			),
			3 => array(
			'var' => 'sku'
			),
			4 => array(
			'var' => 'stockQty'
			),
			5 => array(
			'var' => 'safeQty'
			),
			6 => array(
			'var' => 'info'
			),
			7 => array(
			'var' => 'warehouseName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['warehouseCode'])){
				
				$this->warehouseCode = $vals['warehouseCode'];
			}
			
			
			if (isset($vals['spu'])){
				
				$this->spu = $vals['spu'];
			}
			
			
			if (isset($vals['sku'])){
				
				$this->sku = $vals['sku'];
			}
			
			
			if (isset($vals['stockQty'])){
				
				$this->stockQty = $vals['stockQty'];
			}
			
			
			if (isset($vals['safeQty'])){
				
				$this->safeQty = $vals['safeQty'];
			}
			
			
			if (isset($vals['info'])){
				
				$this->info = $vals['info'];
			}
			
			
			if (isset($vals['warehouseName'])){
				
				$this->warehouseName = $vals['warehouseName'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GenerateSafeQtyDto';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
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
			
			
			
			
			if ("stockQty" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->stockQty); 
				
			}
			
			
			
			
			if ("safeQty" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->safeQty); 
				
			}
			
			
			
			
			if ("info" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->info);
				
			}
			
			
			
			
			if ("warehouseName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseName);
				
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
		
		
		if($this->stockQty !== null) {
			
			$xfer += $output->writeFieldBegin('stockQty');
			$xfer += $output->writeI64($this->stockQty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->safeQty !== null) {
			
			$xfer += $output->writeFieldBegin('safeQty');
			$xfer += $output->writeI64($this->safeQty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->info !== null) {
			
			$xfer += $output->writeFieldBegin('info');
			$xfer += $output->writeString($this->info);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouseName !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseName');
			$xfer += $output->writeString($this->warehouseName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>