<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\hcscm\purchase\service;

class AliSkuResp {
	
	static $_TSPEC;
	public $colorId = null;
	public $colorValue = null;
	public $consignPrice = null;
	public $extendAttrId = null;
	public $extendAttrValue = null;
	public $sizeId = null;
	public $sizeValue = null;
	public $specId = null;
	public $skuImageUrl = null;
	public $extendAttrId2 = null;
	public $extendAttrValue2 = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'colorId'
			),
			2 => array(
			'var' => 'colorValue'
			),
			3 => array(
			'var' => 'consignPrice'
			),
			4 => array(
			'var' => 'extendAttrId'
			),
			5 => array(
			'var' => 'extendAttrValue'
			),
			6 => array(
			'var' => 'sizeId'
			),
			7 => array(
			'var' => 'sizeValue'
			),
			8 => array(
			'var' => 'specId'
			),
			9 => array(
			'var' => 'skuImageUrl'
			),
			10 => array(
			'var' => 'extendAttrId2'
			),
			11 => array(
			'var' => 'extendAttrValue2'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['colorId'])){
				
				$this->colorId = $vals['colorId'];
			}
			
			
			if (isset($vals['colorValue'])){
				
				$this->colorValue = $vals['colorValue'];
			}
			
			
			if (isset($vals['consignPrice'])){
				
				$this->consignPrice = $vals['consignPrice'];
			}
			
			
			if (isset($vals['extendAttrId'])){
				
				$this->extendAttrId = $vals['extendAttrId'];
			}
			
			
			if (isset($vals['extendAttrValue'])){
				
				$this->extendAttrValue = $vals['extendAttrValue'];
			}
			
			
			if (isset($vals['sizeId'])){
				
				$this->sizeId = $vals['sizeId'];
			}
			
			
			if (isset($vals['sizeValue'])){
				
				$this->sizeValue = $vals['sizeValue'];
			}
			
			
			if (isset($vals['specId'])){
				
				$this->specId = $vals['specId'];
			}
			
			
			if (isset($vals['skuImageUrl'])){
				
				$this->skuImageUrl = $vals['skuImageUrl'];
			}
			
			
			if (isset($vals['extendAttrId2'])){
				
				$this->extendAttrId2 = $vals['extendAttrId2'];
			}
			
			
			if (isset($vals['extendAttrValue2'])){
				
				$this->extendAttrValue2 = $vals['extendAttrValue2'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AliSkuResp';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("colorId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->colorId); 
				
			}
			
			
			
			
			if ("colorValue" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->colorValue);
				
			}
			
			
			
			
			if ("consignPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->consignPrice);
				
			}
			
			
			
			
			if ("extendAttrId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->extendAttrId); 
				
			}
			
			
			
			
			if ("extendAttrValue" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->extendAttrValue);
				
			}
			
			
			
			
			if ("sizeId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->sizeId); 
				
			}
			
			
			
			
			if ("sizeValue" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sizeValue);
				
			}
			
			
			
			
			if ("specId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->specId);
				
			}
			
			
			
			
			if ("skuImageUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->skuImageUrl);
				
			}
			
			
			
			
			if ("extendAttrId2" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->extendAttrId2); 
				
			}
			
			
			
			
			if ("extendAttrValue2" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->extendAttrValue2);
				
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
		
		if($this->colorId !== null) {
			
			$xfer += $output->writeFieldBegin('colorId');
			$xfer += $output->writeI64($this->colorId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->colorValue !== null) {
			
			$xfer += $output->writeFieldBegin('colorValue');
			$xfer += $output->writeString($this->colorValue);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->consignPrice !== null) {
			
			$xfer += $output->writeFieldBegin('consignPrice');
			$xfer += $output->writeString($this->consignPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extendAttrId !== null) {
			
			$xfer += $output->writeFieldBegin('extendAttrId');
			$xfer += $output->writeI64($this->extendAttrId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extendAttrValue !== null) {
			
			$xfer += $output->writeFieldBegin('extendAttrValue');
			$xfer += $output->writeString($this->extendAttrValue);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sizeId !== null) {
			
			$xfer += $output->writeFieldBegin('sizeId');
			$xfer += $output->writeI64($this->sizeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sizeValue !== null) {
			
			$xfer += $output->writeFieldBegin('sizeValue');
			$xfer += $output->writeString($this->sizeValue);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->specId !== null) {
			
			$xfer += $output->writeFieldBegin('specId');
			$xfer += $output->writeString($this->specId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->skuImageUrl !== null) {
			
			$xfer += $output->writeFieldBegin('skuImageUrl');
			$xfer += $output->writeString($this->skuImageUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extendAttrId2 !== null) {
			
			$xfer += $output->writeFieldBegin('extendAttrId2');
			$xfer += $output->writeI64($this->extendAttrId2);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extendAttrValue2 !== null) {
			
			$xfer += $output->writeFieldBegin('extendAttrValue2');
			$xfer += $output->writeString($this->extendAttrValue2);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>