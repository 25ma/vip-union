<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\om\intfc\service;

class OmPreSaleOrderModel {
	
	static $_TSPEC;
	public $id = null;
	public $payType = null;
	public $orderEbsScenario = null;
	public $orderSn = null;
	public $sourceName = null;
	public $referenceOrderSn = null;
	public $userId = null;
	public $orderAddTime = null;
	public $specialType = null;
	public $warehouse = null;
	public $saleSite = null;
	public $channel = null;
	public $carrierName = null;
	public $transportNumber = null;
	public $carriage = null;
	public $totalMoney = null;
	public $moneyOnDelivery = null;
	public $invoiceMoney = null;
	public $invoiceType = null;
	public $invoiceTitle = null;
	public $currency = null;
	public $discountRate = null;
	public $orderExtFlags = null;
	public $transTime = null;
	public $createTime = null;
	public $activityDiffDiscountMoney = null;
	public $storeId = null;
	public $storeSource = null;
	public $channelStoreId = null;
	public $commodityTax = null;
	public $serviceNo = null;
	public $carriageApplyCancelReason = null;
	public $areaId = null;
	public $eximType = null;
	public $subOrderType = null;
	public $extCustomerCode = null;
	public $firstExchangeOrderSn = null;
	public $orderActives = null;
	public $orderGoods = null;
	public $orderPayDetails = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'payType'
			),
			3 => array(
			'var' => 'orderEbsScenario'
			),
			4 => array(
			'var' => 'orderSn'
			),
			5 => array(
			'var' => 'sourceName'
			),
			6 => array(
			'var' => 'referenceOrderSn'
			),
			7 => array(
			'var' => 'userId'
			),
			8 => array(
			'var' => 'orderAddTime'
			),
			9 => array(
			'var' => 'specialType'
			),
			10 => array(
			'var' => 'warehouse'
			),
			11 => array(
			'var' => 'saleSite'
			),
			12 => array(
			'var' => 'channel'
			),
			13 => array(
			'var' => 'carrierName'
			),
			14 => array(
			'var' => 'transportNumber'
			),
			15 => array(
			'var' => 'carriage'
			),
			16 => array(
			'var' => 'totalMoney'
			),
			17 => array(
			'var' => 'moneyOnDelivery'
			),
			18 => array(
			'var' => 'invoiceMoney'
			),
			19 => array(
			'var' => 'invoiceType'
			),
			20 => array(
			'var' => 'invoiceTitle'
			),
			21 => array(
			'var' => 'currency'
			),
			22 => array(
			'var' => 'discountRate'
			),
			23 => array(
			'var' => 'orderExtFlags'
			),
			24 => array(
			'var' => 'transTime'
			),
			25 => array(
			'var' => 'createTime'
			),
			26 => array(
			'var' => 'activityDiffDiscountMoney'
			),
			27 => array(
			'var' => 'storeId'
			),
			28 => array(
			'var' => 'storeSource'
			),
			29 => array(
			'var' => 'channelStoreId'
			),
			30 => array(
			'var' => 'commodityTax'
			),
			31 => array(
			'var' => 'serviceNo'
			),
			32 => array(
			'var' => 'carriageApplyCancelReason'
			),
			33 => array(
			'var' => 'areaId'
			),
			34 => array(
			'var' => 'eximType'
			),
			35 => array(
			'var' => 'subOrderType'
			),
			36 => array(
			'var' => 'extCustomerCode'
			),
			37 => array(
			'var' => 'firstExchangeOrderSn'
			),
			38 => array(
			'var' => 'orderActives'
			),
			39 => array(
			'var' => 'orderGoods'
			),
			40 => array(
			'var' => 'orderPayDetails'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['payType'])){
				
				$this->payType = $vals['payType'];
			}
			
			
			if (isset($vals['orderEbsScenario'])){
				
				$this->orderEbsScenario = $vals['orderEbsScenario'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['sourceName'])){
				
				$this->sourceName = $vals['sourceName'];
			}
			
			
			if (isset($vals['referenceOrderSn'])){
				
				$this->referenceOrderSn = $vals['referenceOrderSn'];
			}
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['orderAddTime'])){
				
				$this->orderAddTime = $vals['orderAddTime'];
			}
			
			
			if (isset($vals['specialType'])){
				
				$this->specialType = $vals['specialType'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['saleSite'])){
				
				$this->saleSite = $vals['saleSite'];
			}
			
			
			if (isset($vals['channel'])){
				
				$this->channel = $vals['channel'];
			}
			
			
			if (isset($vals['carrierName'])){
				
				$this->carrierName = $vals['carrierName'];
			}
			
			
			if (isset($vals['transportNumber'])){
				
				$this->transportNumber = $vals['transportNumber'];
			}
			
			
			if (isset($vals['carriage'])){
				
				$this->carriage = $vals['carriage'];
			}
			
			
			if (isset($vals['totalMoney'])){
				
				$this->totalMoney = $vals['totalMoney'];
			}
			
			
			if (isset($vals['moneyOnDelivery'])){
				
				$this->moneyOnDelivery = $vals['moneyOnDelivery'];
			}
			
			
			if (isset($vals['invoiceMoney'])){
				
				$this->invoiceMoney = $vals['invoiceMoney'];
			}
			
			
			if (isset($vals['invoiceType'])){
				
				$this->invoiceType = $vals['invoiceType'];
			}
			
			
			if (isset($vals['invoiceTitle'])){
				
				$this->invoiceTitle = $vals['invoiceTitle'];
			}
			
			
			if (isset($vals['currency'])){
				
				$this->currency = $vals['currency'];
			}
			
			
			if (isset($vals['discountRate'])){
				
				$this->discountRate = $vals['discountRate'];
			}
			
			
			if (isset($vals['orderExtFlags'])){
				
				$this->orderExtFlags = $vals['orderExtFlags'];
			}
			
			
			if (isset($vals['transTime'])){
				
				$this->transTime = $vals['transTime'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['activityDiffDiscountMoney'])){
				
				$this->activityDiffDiscountMoney = $vals['activityDiffDiscountMoney'];
			}
			
			
			if (isset($vals['storeId'])){
				
				$this->storeId = $vals['storeId'];
			}
			
			
			if (isset($vals['storeSource'])){
				
				$this->storeSource = $vals['storeSource'];
			}
			
			
			if (isset($vals['channelStoreId'])){
				
				$this->channelStoreId = $vals['channelStoreId'];
			}
			
			
			if (isset($vals['commodityTax'])){
				
				$this->commodityTax = $vals['commodityTax'];
			}
			
			
			if (isset($vals['serviceNo'])){
				
				$this->serviceNo = $vals['serviceNo'];
			}
			
			
			if (isset($vals['carriageApplyCancelReason'])){
				
				$this->carriageApplyCancelReason = $vals['carriageApplyCancelReason'];
			}
			
			
			if (isset($vals['areaId'])){
				
				$this->areaId = $vals['areaId'];
			}
			
			
			if (isset($vals['eximType'])){
				
				$this->eximType = $vals['eximType'];
			}
			
			
			if (isset($vals['subOrderType'])){
				
				$this->subOrderType = $vals['subOrderType'];
			}
			
			
			if (isset($vals['extCustomerCode'])){
				
				$this->extCustomerCode = $vals['extCustomerCode'];
			}
			
			
			if (isset($vals['firstExchangeOrderSn'])){
				
				$this->firstExchangeOrderSn = $vals['firstExchangeOrderSn'];
			}
			
			
			if (isset($vals['orderActives'])){
				
				$this->orderActives = $vals['orderActives'];
			}
			
			
			if (isset($vals['orderGoods'])){
				
				$this->orderGoods = $vals['orderGoods'];
			}
			
			
			if (isset($vals['orderPayDetails'])){
				
				$this->orderPayDetails = $vals['orderPayDetails'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OmPreSaleOrderModel';
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
			
			
			
			
			if ("payType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->payType); 
				
			}
			
			
			
			
			if ("orderEbsScenario" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->orderEbsScenario); 
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("sourceName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sourceName);
				
			}
			
			
			
			
			if ("referenceOrderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->referenceOrderSn);
				
			}
			
			
			
			
			if ("userId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->userId); 
				
			}
			
			
			
			
			if ("orderAddTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->orderAddTime); 
				
			}
			
			
			
			
			if ("specialType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->specialType); 
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("saleSite" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->saleSite);
				
			}
			
			
			
			
			if ("channel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->channel);
				
			}
			
			
			
			
			if ("carrierName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrierName);
				
			}
			
			
			
			
			if ("transportNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNumber);
				
			}
			
			
			
			
			if ("carriage" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriage);
				
			}
			
			
			
			
			if ("totalMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->totalMoney);
				
			}
			
			
			
			
			if ("moneyOnDelivery" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->moneyOnDelivery);
				
			}
			
			
			
			
			if ("invoiceMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceMoney);
				
			}
			
			
			
			
			if ("invoiceType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->invoiceType); 
				
			}
			
			
			
			
			if ("invoiceTitle" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceTitle);
				
			}
			
			
			
			
			if ("currency" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->currency);
				
			}
			
			
			
			
			if ("discountRate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->discountRate);
				
			}
			
			
			
			
			if ("orderExtFlags" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderExtFlags);
				
			}
			
			
			
			
			if ("transTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->transTime); 
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime); 
				
			}
			
			
			
			
			if ("activityDiffDiscountMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->activityDiffDiscountMoney);
				
			}
			
			
			
			
			if ("storeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeId);
				
			}
			
			
			
			
			if ("storeSource" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->storeSource); 
				
			}
			
			
			
			
			if ("channelStoreId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->channelStoreId);
				
			}
			
			
			
			
			if ("commodityTax" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->commodityTax);
				
			}
			
			
			
			
			if ("serviceNo" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->serviceNo); 
				
			}
			
			
			
			
			if ("carriageApplyCancelReason" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->carriageApplyCancelReason); 
				
			}
			
			
			
			
			if ("areaId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->areaId);
				
			}
			
			
			
			
			if ("eximType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->eximType);
				
			}
			
			
			
			
			if ("subOrderType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->subOrderType); 
				
			}
			
			
			
			
			if ("extCustomerCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->extCustomerCode);
				
			}
			
			
			
			
			if ("firstExchangeOrderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->firstExchangeOrderSn);
				
			}
			
			
			
			
			if ("orderActives" == $schemeField){
				
				$needSkip = false;
				
				$this->orderActives = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\fcs\osp\om\intfc\service\OmPreSaleOrderActiveModel();
						$elem1->read($input);
						
						$this->orderActives[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("orderGoods" == $schemeField){
				
				$needSkip = false;
				
				$this->orderGoods = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						
						$elem2 = new \com\vip\fcs\osp\om\intfc\service\OmPreSaleOrderGoodModel();
						$elem2->read($input);
						
						$this->orderGoods[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("orderPayDetails" == $schemeField){
				
				$needSkip = false;
				
				$this->orderPayDetails = array();
				$_size3 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem3 = null;
						
						$elem3 = new \com\vip\fcs\osp\om\intfc\service\OmPreSaleOrderPayDetailModel();
						$elem3->read($input);
						
						$this->orderPayDetails[$_size3++] = $elem3;
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
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payType !== null) {
			
			$xfer += $output->writeFieldBegin('payType');
			$xfer += $output->writeI32($this->payType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderEbsScenario !== null) {
			
			$xfer += $output->writeFieldBegin('orderEbsScenario');
			$xfer += $output->writeI32($this->orderEbsScenario);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('orderSn');
		$xfer += $output->writeString($this->orderSn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sourceName');
		$xfer += $output->writeString($this->sourceName);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->referenceOrderSn !== null) {
			
			$xfer += $output->writeFieldBegin('referenceOrderSn');
			$xfer += $output->writeString($this->referenceOrderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeI64($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderAddTime !== null) {
			
			$xfer += $output->writeFieldBegin('orderAddTime');
			$xfer += $output->writeI64($this->orderAddTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->specialType !== null) {
			
			$xfer += $output->writeFieldBegin('specialType');
			$xfer += $output->writeI32($this->specialType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->saleSite !== null) {
			
			$xfer += $output->writeFieldBegin('saleSite');
			$xfer += $output->writeString($this->saleSite);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->channel !== null) {
			
			$xfer += $output->writeFieldBegin('channel');
			$xfer += $output->writeString($this->channel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrierName !== null) {
			
			$xfer += $output->writeFieldBegin('carrierName');
			$xfer += $output->writeString($this->carrierName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportNumber !== null) {
			
			$xfer += $output->writeFieldBegin('transportNumber');
			$xfer += $output->writeString($this->transportNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriage !== null) {
			
			$xfer += $output->writeFieldBegin('carriage');
			$xfer += $output->writeString($this->carriage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totalMoney !== null) {
			
			$xfer += $output->writeFieldBegin('totalMoney');
			$xfer += $output->writeString($this->totalMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->moneyOnDelivery !== null) {
			
			$xfer += $output->writeFieldBegin('moneyOnDelivery');
			$xfer += $output->writeString($this->moneyOnDelivery);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceMoney !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceMoney');
			$xfer += $output->writeString($this->invoiceMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceType !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceType');
			$xfer += $output->writeI32($this->invoiceType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceTitle !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceTitle');
			$xfer += $output->writeString($this->invoiceTitle);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->currency !== null) {
			
			$xfer += $output->writeFieldBegin('currency');
			$xfer += $output->writeString($this->currency);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->discountRate !== null) {
			
			$xfer += $output->writeFieldBegin('discountRate');
			$xfer += $output->writeString($this->discountRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderExtFlags !== null) {
			
			$xfer += $output->writeFieldBegin('orderExtFlags');
			$xfer += $output->writeString($this->orderExtFlags);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('transTime');
		$xfer += $output->writeI64($this->transTime);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeI64($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activityDiffDiscountMoney !== null) {
			
			$xfer += $output->writeFieldBegin('activityDiffDiscountMoney');
			$xfer += $output->writeString($this->activityDiffDiscountMoney);
			
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
		
		
		if($this->channelStoreId !== null) {
			
			$xfer += $output->writeFieldBegin('channelStoreId');
			$xfer += $output->writeString($this->channelStoreId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->commodityTax !== null) {
			
			$xfer += $output->writeFieldBegin('commodityTax');
			$xfer += $output->writeString($this->commodityTax);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->serviceNo !== null) {
			
			$xfer += $output->writeFieldBegin('serviceNo');
			$xfer += $output->writeI64($this->serviceNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriageApplyCancelReason !== null) {
			
			$xfer += $output->writeFieldBegin('carriageApplyCancelReason');
			$xfer += $output->writeI32($this->carriageApplyCancelReason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->areaId !== null) {
			
			$xfer += $output->writeFieldBegin('areaId');
			$xfer += $output->writeString($this->areaId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->eximType !== null) {
			
			$xfer += $output->writeFieldBegin('eximType');
			$xfer += $output->writeString($this->eximType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->subOrderType !== null) {
			
			$xfer += $output->writeFieldBegin('subOrderType');
			$xfer += $output->writeI32($this->subOrderType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extCustomerCode !== null) {
			
			$xfer += $output->writeFieldBegin('extCustomerCode');
			$xfer += $output->writeString($this->extCustomerCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->firstExchangeOrderSn !== null) {
			
			$xfer += $output->writeFieldBegin('firstExchangeOrderSn');
			$xfer += $output->writeString($this->firstExchangeOrderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderActives !== null) {
			
			$xfer += $output->writeFieldBegin('orderActives');
			
			if (!is_array($this->orderActives)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->orderActives as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderGoods !== null) {
			
			$xfer += $output->writeFieldBegin('orderGoods');
			
			if (!is_array($this->orderGoods)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->orderGoods as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderPayDetails !== null) {
			
			$xfer += $output->writeFieldBegin('orderPayDetails');
			
			if (!is_array($this->orderPayDetails)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->orderPayDetails as $iter0){
				
				
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