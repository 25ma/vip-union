<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class OrderInfo {
	
	static $_TSPEC;
	public $orderSn = null;
	public $oldOrderSn = null;
	public $preParentOrderSn = null;
	public $warehouse = null;
	public $saleWarehouse = null;
	public $saleType = null;
	public $orderType = null;
	public $vipclub = null;
	public $vipclubName = null;
	public $platform = null;
	public $orderBizFlagsMap = null;
	public $addTime = null;
	public $storeId = null;
	public $storeSource = null;
	public $remark = null;
	public $isDirectDeliveryOxo = null;
	public $payer = null;
	public $customsCode = null;
	public $carrierCode = null;
	public $eximType = null;
	public $payerUniqueCode = null;
	public $payerEncrypt = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			2 => array(
			'var' => 'oldOrderSn'
			),
			3 => array(
			'var' => 'preParentOrderSn'
			),
			4 => array(
			'var' => 'warehouse'
			),
			5 => array(
			'var' => 'saleWarehouse'
			),
			6 => array(
			'var' => 'saleType'
			),
			7 => array(
			'var' => 'orderType'
			),
			8 => array(
			'var' => 'vipclub'
			),
			9 => array(
			'var' => 'vipclubName'
			),
			10 => array(
			'var' => 'platform'
			),
			11 => array(
			'var' => 'orderBizFlagsMap'
			),
			12 => array(
			'var' => 'addTime'
			),
			13 => array(
			'var' => 'storeId'
			),
			14 => array(
			'var' => 'storeSource'
			),
			15 => array(
			'var' => 'remark'
			),
			16 => array(
			'var' => 'isDirectDeliveryOxo'
			),
			17 => array(
			'var' => 'payer'
			),
			18 => array(
			'var' => 'customsCode'
			),
			19 => array(
			'var' => 'carrierCode'
			),
			20 => array(
			'var' => 'eximType'
			),
			21 => array(
			'var' => 'payerUniqueCode'
			),
			22 => array(
			'var' => 'payerEncrypt'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['oldOrderSn'])){
				
				$this->oldOrderSn = $vals['oldOrderSn'];
			}
			
			
			if (isset($vals['preParentOrderSn'])){
				
				$this->preParentOrderSn = $vals['preParentOrderSn'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['saleWarehouse'])){
				
				$this->saleWarehouse = $vals['saleWarehouse'];
			}
			
			
			if (isset($vals['saleType'])){
				
				$this->saleType = $vals['saleType'];
			}
			
			
			if (isset($vals['orderType'])){
				
				$this->orderType = $vals['orderType'];
			}
			
			
			if (isset($vals['vipclub'])){
				
				$this->vipclub = $vals['vipclub'];
			}
			
			
			if (isset($vals['vipclubName'])){
				
				$this->vipclubName = $vals['vipclubName'];
			}
			
			
			if (isset($vals['platform'])){
				
				$this->platform = $vals['platform'];
			}
			
			
			if (isset($vals['orderBizFlagsMap'])){
				
				$this->orderBizFlagsMap = $vals['orderBizFlagsMap'];
			}
			
			
			if (isset($vals['addTime'])){
				
				$this->addTime = $vals['addTime'];
			}
			
			
			if (isset($vals['storeId'])){
				
				$this->storeId = $vals['storeId'];
			}
			
			
			if (isset($vals['storeSource'])){
				
				$this->storeSource = $vals['storeSource'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['isDirectDeliveryOxo'])){
				
				$this->isDirectDeliveryOxo = $vals['isDirectDeliveryOxo'];
			}
			
			
			if (isset($vals['payer'])){
				
				$this->payer = $vals['payer'];
			}
			
			
			if (isset($vals['customsCode'])){
				
				$this->customsCode = $vals['customsCode'];
			}
			
			
			if (isset($vals['carrierCode'])){
				
				$this->carrierCode = $vals['carrierCode'];
			}
			
			
			if (isset($vals['eximType'])){
				
				$this->eximType = $vals['eximType'];
			}
			
			
			if (isset($vals['payerUniqueCode'])){
				
				$this->payerUniqueCode = $vals['payerUniqueCode'];
			}
			
			
			if (isset($vals['payerEncrypt'])){
				
				$this->payerEncrypt = $vals['payerEncrypt'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderInfo';
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
			
			
			
			
			if ("oldOrderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->oldOrderSn);
				
			}
			
			
			
			
			if ("preParentOrderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->preParentOrderSn);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("saleWarehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->saleWarehouse);
				
			}
			
			
			
			
			if ("saleType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->saleType); 
				
			}
			
			
			
			
			if ("orderType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderType);
				
			}
			
			
			
			
			if ("vipclub" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vipclub);
				
			}
			
			
			
			
			if ("vipclubName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vipclubName);
				
			}
			
			
			
			
			if ("platform" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->platform);
				
			}
			
			
			
			
			if ("orderBizFlagsMap" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderBizFlagsMap);
				
			}
			
			
			
			
			if ("addTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->addTime);
				
			}
			
			
			
			
			if ("storeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeId);
				
			}
			
			
			
			
			if ("storeSource" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->storeSource); 
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("isDirectDeliveryOxo" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isDirectDeliveryOxo); 
				
			}
			
			
			
			
			if ("payer" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payer);
				
			}
			
			
			
			
			if ("customsCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->customsCode);
				
			}
			
			
			
			
			if ("carrierCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrierCode);
				
			}
			
			
			
			
			if ("eximType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->eximType);
				
			}
			
			
			
			
			if ("payerUniqueCode" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->payerUniqueCode); 
				
			}
			
			
			
			
			if ("payerEncrypt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payerEncrypt);
				
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
		
		
		if($this->oldOrderSn !== null) {
			
			$xfer += $output->writeFieldBegin('oldOrderSn');
			$xfer += $output->writeString($this->oldOrderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->preParentOrderSn !== null) {
			
			$xfer += $output->writeFieldBegin('preParentOrderSn');
			$xfer += $output->writeString($this->preParentOrderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->saleWarehouse !== null) {
			
			$xfer += $output->writeFieldBegin('saleWarehouse');
			$xfer += $output->writeString($this->saleWarehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->saleType !== null) {
			
			$xfer += $output->writeFieldBegin('saleType');
			$xfer += $output->writeByte($this->saleType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderType !== null) {
			
			$xfer += $output->writeFieldBegin('orderType');
			$xfer += $output->writeString($this->orderType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipclub !== null) {
			
			$xfer += $output->writeFieldBegin('vipclub');
			$xfer += $output->writeString($this->vipclub);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipclubName !== null) {
			
			$xfer += $output->writeFieldBegin('vipclubName');
			$xfer += $output->writeString($this->vipclubName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->platform !== null) {
			
			$xfer += $output->writeFieldBegin('platform');
			$xfer += $output->writeString($this->platform);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderBizFlagsMap !== null) {
			
			$xfer += $output->writeFieldBegin('orderBizFlagsMap');
			$xfer += $output->writeString($this->orderBizFlagsMap);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->addTime !== null) {
			
			$xfer += $output->writeFieldBegin('addTime');
			$xfer += $output->writeString($this->addTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeId !== null) {
			
			$xfer += $output->writeFieldBegin('storeId');
			$xfer += $output->writeString($this->storeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeSource !== null) {
			
			$xfer += $output->writeFieldBegin('storeSource');
			$xfer += $output->writeI32($this->storeSource);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isDirectDeliveryOxo !== null) {
			
			$xfer += $output->writeFieldBegin('isDirectDeliveryOxo');
			$xfer += $output->writeByte($this->isDirectDeliveryOxo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payer !== null) {
			
			$xfer += $output->writeFieldBegin('payer');
			$xfer += $output->writeString($this->payer);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customsCode !== null) {
			
			$xfer += $output->writeFieldBegin('customsCode');
			$xfer += $output->writeString($this->customsCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrierCode !== null) {
			
			$xfer += $output->writeFieldBegin('carrierCode');
			$xfer += $output->writeString($this->carrierCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->eximType !== null) {
			
			$xfer += $output->writeFieldBegin('eximType');
			$xfer += $output->writeString($this->eximType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payerUniqueCode !== null) {
			
			$xfer += $output->writeFieldBegin('payerUniqueCode');
			$xfer += $output->writeI64($this->payerUniqueCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payerEncrypt !== null) {
			
			$xfer += $output->writeFieldBegin('payerEncrypt');
			$xfer += $output->writeString($this->payerEncrypt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>