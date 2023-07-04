<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\cc\bulkbuying;

class CcPoExt {
	
	static $_TSPEC;
	public $purchaseNo = null;
	public $isSameBarcode = null;
	public $prId = null;
	public $poAlias = null;
	public $purchaseProperty = null;
	public $purchasePropertyName = null;
	public $attributionLine = null;
	public $attributionLineName = null;
	public $reconciliationRate = null;
	public $reconciliationRateDate = null;
	public $reconciliationCurrency = null;
	public $actualReconciliationRate = null;
	public $actualReconciliationRateDate = null;
	public $linkPo = null;
	public $generalTrade = null;
	public $taxRate = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'purchaseNo'
			),
			2 => array(
			'var' => 'isSameBarcode'
			),
			3 => array(
			'var' => 'prId'
			),
			4 => array(
			'var' => 'poAlias'
			),
			5 => array(
			'var' => 'purchaseProperty'
			),
			6 => array(
			'var' => 'purchasePropertyName'
			),
			7 => array(
			'var' => 'attributionLine'
			),
			8 => array(
			'var' => 'attributionLineName'
			),
			9 => array(
			'var' => 'reconciliationRate'
			),
			10 => array(
			'var' => 'reconciliationRateDate'
			),
			11 => array(
			'var' => 'reconciliationCurrency'
			),
			12 => array(
			'var' => 'actualReconciliationRate'
			),
			13 => array(
			'var' => 'actualReconciliationRateDate'
			),
			14 => array(
			'var' => 'linkPo'
			),
			15 => array(
			'var' => 'generalTrade'
			),
			16 => array(
			'var' => 'taxRate'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['purchaseNo'])){
				
				$this->purchaseNo = $vals['purchaseNo'];
			}
			
			
			if (isset($vals['isSameBarcode'])){
				
				$this->isSameBarcode = $vals['isSameBarcode'];
			}
			
			
			if (isset($vals['prId'])){
				
				$this->prId = $vals['prId'];
			}
			
			
			if (isset($vals['poAlias'])){
				
				$this->poAlias = $vals['poAlias'];
			}
			
			
			if (isset($vals['purchaseProperty'])){
				
				$this->purchaseProperty = $vals['purchaseProperty'];
			}
			
			
			if (isset($vals['purchasePropertyName'])){
				
				$this->purchasePropertyName = $vals['purchasePropertyName'];
			}
			
			
			if (isset($vals['attributionLine'])){
				
				$this->attributionLine = $vals['attributionLine'];
			}
			
			
			if (isset($vals['attributionLineName'])){
				
				$this->attributionLineName = $vals['attributionLineName'];
			}
			
			
			if (isset($vals['reconciliationRate'])){
				
				$this->reconciliationRate = $vals['reconciliationRate'];
			}
			
			
			if (isset($vals['reconciliationRateDate'])){
				
				$this->reconciliationRateDate = $vals['reconciliationRateDate'];
			}
			
			
			if (isset($vals['reconciliationCurrency'])){
				
				$this->reconciliationCurrency = $vals['reconciliationCurrency'];
			}
			
			
			if (isset($vals['actualReconciliationRate'])){
				
				$this->actualReconciliationRate = $vals['actualReconciliationRate'];
			}
			
			
			if (isset($vals['actualReconciliationRateDate'])){
				
				$this->actualReconciliationRateDate = $vals['actualReconciliationRateDate'];
			}
			
			
			if (isset($vals['linkPo'])){
				
				$this->linkPo = $vals['linkPo'];
			}
			
			
			if (isset($vals['generalTrade'])){
				
				$this->generalTrade = $vals['generalTrade'];
			}
			
			
			if (isset($vals['taxRate'])){
				
				$this->taxRate = $vals['taxRate'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CcPoExt';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("purchaseNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchaseNo);
				
			}
			
			
			
			
			if ("isSameBarcode" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->isSameBarcode);
				
			}
			
			
			
			
			if ("prId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->prId);
				
			}
			
			
			
			
			if ("poAlias" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poAlias);
				
			}
			
			
			
			
			if ("purchaseProperty" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->purchaseProperty); 
				
			}
			
			
			
			
			if ("purchasePropertyName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchasePropertyName);
				
			}
			
			
			
			
			if ("attributionLine" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->attributionLine); 
				
			}
			
			
			
			
			if ("attributionLineName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attributionLineName);
				
			}
			
			
			
			
			if ("reconciliationRate" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->reconciliationRate);
				
			}
			
			
			
			
			if ("reconciliationRateDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->reconciliationRateDate);
				
			}
			
			
			
			
			if ("reconciliationCurrency" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reconciliationCurrency);
				
			}
			
			
			
			
			if ("actualReconciliationRate" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->actualReconciliationRate);
				
			}
			
			
			
			
			if ("actualReconciliationRateDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->actualReconciliationRateDate);
				
			}
			
			
			
			
			if ("linkPo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->linkPo);
				
			}
			
			
			
			
			if ("generalTrade" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->generalTrade); 
				
			}
			
			
			
			
			if ("taxRate" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->taxRate);
				
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
		
		if($this->purchaseNo !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseNo');
			$xfer += $output->writeString($this->purchaseNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isSameBarcode !== null) {
			
			$xfer += $output->writeFieldBegin('isSameBarcode');
			$xfer += $output->writeBool($this->isSameBarcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->prId !== null) {
			
			$xfer += $output->writeFieldBegin('prId');
			$xfer += $output->writeString($this->prId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poAlias !== null) {
			
			$xfer += $output->writeFieldBegin('poAlias');
			$xfer += $output->writeString($this->poAlias);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchaseProperty !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseProperty');
			$xfer += $output->writeByte($this->purchaseProperty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchasePropertyName !== null) {
			
			$xfer += $output->writeFieldBegin('purchasePropertyName');
			$xfer += $output->writeString($this->purchasePropertyName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attributionLine !== null) {
			
			$xfer += $output->writeFieldBegin('attributionLine');
			$xfer += $output->writeByte($this->attributionLine);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attributionLineName !== null) {
			
			$xfer += $output->writeFieldBegin('attributionLineName');
			$xfer += $output->writeString($this->attributionLineName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reconciliationRate !== null) {
			
			$xfer += $output->writeFieldBegin('reconciliationRate');
			$xfer += $output->writeDouble($this->reconciliationRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reconciliationRateDate !== null) {
			
			$xfer += $output->writeFieldBegin('reconciliationRateDate');
			$xfer += $output->writeI64($this->reconciliationRateDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reconciliationCurrency !== null) {
			
			$xfer += $output->writeFieldBegin('reconciliationCurrency');
			$xfer += $output->writeString($this->reconciliationCurrency);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actualReconciliationRate !== null) {
			
			$xfer += $output->writeFieldBegin('actualReconciliationRate');
			$xfer += $output->writeDouble($this->actualReconciliationRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actualReconciliationRateDate !== null) {
			
			$xfer += $output->writeFieldBegin('actualReconciliationRateDate');
			$xfer += $output->writeI64($this->actualReconciliationRateDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->linkPo !== null) {
			
			$xfer += $output->writeFieldBegin('linkPo');
			$xfer += $output->writeString($this->linkPo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->generalTrade !== null) {
			
			$xfer += $output->writeFieldBegin('generalTrade');
			$xfer += $output->writeByte($this->generalTrade);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->taxRate !== null) {
			
			$xfer += $output->writeFieldBegin('taxRate');
			$xfer += $output->writeDouble($this->taxRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>