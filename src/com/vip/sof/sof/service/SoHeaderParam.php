<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class SoHeaderParam {
	
	static $_TSPEC;
	public $orderSn = null;
	public $oldOrderSn = null;
	public $stat = null;
	public $warehouseName = null;
	public $ebsWarehouseCode = null;
	public $b2cWarehouseCode = null;
	public $userType = null;
	public $userName = null;
	public $buyerId = null;
	public $address = null;
	public $buyer = null;
	public $areaId = null;
	public $postcode = null;
	public $county = null;
	public $city = null;
	public $state = null;
	public $countryId = null;
	public $tel = null;
	public $mobile = null;
	public $payType = null;
	public $pos = null;
	public $transportDay = null;
	public $remark = null;
	public $orderType = null;
	public $vipclub = null;
	public $invoice = null;
	public $goodsMoney = null;
	public $money = null;
	public $aigo = null;
	public $favourableMoney = null;
	public $exFavMoney = null;
	public $surplus = null;
	public $carriage = null;
	public $transportNo = null;
	public $carriersCode = null;
	public $carrier = null;
	public $transportDetail = null;
	public $transportId = null;
	public $transportType = null;
	public $vendorCode = null;
	public $vendorId = null;
	public $vendorName = null;
	public $brandName = null;
	public $addTime = null;
	public $deliveryTime = null;
	public $edbPopOrderInfoId = null;
	public $edbOrderId = null;
	public $b2cOrderSysId = null;
	public $edbCreateTime = null;
	public $edbPopOrderStatusUpdateTime = null;
	public $changeTime = null;
	public $exPayMoney1 = null;
	public $tmsOrderStatus = null;
	public $saleType = null;
	public $popTrackStat = null;
	public $parentOrderSn = null;
	public $storeSn = null;
	public $cancelReason = null;
	public $returnDeal = null;
	public $isDirectDeliveryOxo = null;
	public $taxPayerNo = null;
	public $detailGoods = null;
	public $storeId = null;
	public $storeSource = null;
	public $invoiceType = null;
	
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
			'var' => 'stat'
			),
			4 => array(
			'var' => 'warehouseName'
			),
			5 => array(
			'var' => 'ebsWarehouseCode'
			),
			6 => array(
			'var' => 'b2cWarehouseCode'
			),
			7 => array(
			'var' => 'userType'
			),
			8 => array(
			'var' => 'userName'
			),
			9 => array(
			'var' => 'buyerId'
			),
			10 => array(
			'var' => 'address'
			),
			11 => array(
			'var' => 'buyer'
			),
			12 => array(
			'var' => 'areaId'
			),
			13 => array(
			'var' => 'postcode'
			),
			14 => array(
			'var' => 'county'
			),
			15 => array(
			'var' => 'city'
			),
			16 => array(
			'var' => 'state'
			),
			17 => array(
			'var' => 'countryId'
			),
			18 => array(
			'var' => 'tel'
			),
			19 => array(
			'var' => 'mobile'
			),
			20 => array(
			'var' => 'payType'
			),
			21 => array(
			'var' => 'pos'
			),
			22 => array(
			'var' => 'transportDay'
			),
			23 => array(
			'var' => 'remark'
			),
			24 => array(
			'var' => 'orderType'
			),
			25 => array(
			'var' => 'vipclub'
			),
			26 => array(
			'var' => 'invoice'
			),
			27 => array(
			'var' => 'goodsMoney'
			),
			28 => array(
			'var' => 'money'
			),
			29 => array(
			'var' => 'aigo'
			),
			30 => array(
			'var' => 'favourableMoney'
			),
			31 => array(
			'var' => 'exFavMoney'
			),
			32 => array(
			'var' => 'surplus'
			),
			33 => array(
			'var' => 'carriage'
			),
			34 => array(
			'var' => 'transportNo'
			),
			35 => array(
			'var' => 'carriersCode'
			),
			36 => array(
			'var' => 'carrier'
			),
			37 => array(
			'var' => 'transportDetail'
			),
			38 => array(
			'var' => 'transportId'
			),
			39 => array(
			'var' => 'transportType'
			),
			40 => array(
			'var' => 'vendorCode'
			),
			41 => array(
			'var' => 'vendorId'
			),
			42 => array(
			'var' => 'vendorName'
			),
			43 => array(
			'var' => 'brandName'
			),
			44 => array(
			'var' => 'addTime'
			),
			45 => array(
			'var' => 'deliveryTime'
			),
			46 => array(
			'var' => 'edbPopOrderInfoId'
			),
			47 => array(
			'var' => 'edbOrderId'
			),
			48 => array(
			'var' => 'b2cOrderSysId'
			),
			49 => array(
			'var' => 'edbCreateTime'
			),
			50 => array(
			'var' => 'edbPopOrderStatusUpdateTime'
			),
			51 => array(
			'var' => 'changeTime'
			),
			52 => array(
			'var' => 'exPayMoney1'
			),
			53 => array(
			'var' => 'tmsOrderStatus'
			),
			54 => array(
			'var' => 'saleType'
			),
			55 => array(
			'var' => 'popTrackStat'
			),
			56 => array(
			'var' => 'parentOrderSn'
			),
			57 => array(
			'var' => 'storeSn'
			),
			58 => array(
			'var' => 'cancelReason'
			),
			59 => array(
			'var' => 'returnDeal'
			),
			60 => array(
			'var' => 'isDirectDeliveryOxo'
			),
			61 => array(
			'var' => 'taxPayerNo'
			),
			62 => array(
			'var' => 'detailGoods'
			),
			63 => array(
			'var' => 'storeId'
			),
			64 => array(
			'var' => 'storeSource'
			),
			65 => array(
			'var' => 'invoiceType'
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
			
			
			if (isset($vals['stat'])){
				
				$this->stat = $vals['stat'];
			}
			
			
			if (isset($vals['warehouseName'])){
				
				$this->warehouseName = $vals['warehouseName'];
			}
			
			
			if (isset($vals['ebsWarehouseCode'])){
				
				$this->ebsWarehouseCode = $vals['ebsWarehouseCode'];
			}
			
			
			if (isset($vals['b2cWarehouseCode'])){
				
				$this->b2cWarehouseCode = $vals['b2cWarehouseCode'];
			}
			
			
			if (isset($vals['userType'])){
				
				$this->userType = $vals['userType'];
			}
			
			
			if (isset($vals['userName'])){
				
				$this->userName = $vals['userName'];
			}
			
			
			if (isset($vals['buyerId'])){
				
				$this->buyerId = $vals['buyerId'];
			}
			
			
			if (isset($vals['address'])){
				
				$this->address = $vals['address'];
			}
			
			
			if (isset($vals['buyer'])){
				
				$this->buyer = $vals['buyer'];
			}
			
			
			if (isset($vals['areaId'])){
				
				$this->areaId = $vals['areaId'];
			}
			
			
			if (isset($vals['postcode'])){
				
				$this->postcode = $vals['postcode'];
			}
			
			
			if (isset($vals['county'])){
				
				$this->county = $vals['county'];
			}
			
			
			if (isset($vals['city'])){
				
				$this->city = $vals['city'];
			}
			
			
			if (isset($vals['state'])){
				
				$this->state = $vals['state'];
			}
			
			
			if (isset($vals['countryId'])){
				
				$this->countryId = $vals['countryId'];
			}
			
			
			if (isset($vals['tel'])){
				
				$this->tel = $vals['tel'];
			}
			
			
			if (isset($vals['mobile'])){
				
				$this->mobile = $vals['mobile'];
			}
			
			
			if (isset($vals['payType'])){
				
				$this->payType = $vals['payType'];
			}
			
			
			if (isset($vals['pos'])){
				
				$this->pos = $vals['pos'];
			}
			
			
			if (isset($vals['transportDay'])){
				
				$this->transportDay = $vals['transportDay'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['orderType'])){
				
				$this->orderType = $vals['orderType'];
			}
			
			
			if (isset($vals['vipclub'])){
				
				$this->vipclub = $vals['vipclub'];
			}
			
			
			if (isset($vals['invoice'])){
				
				$this->invoice = $vals['invoice'];
			}
			
			
			if (isset($vals['goodsMoney'])){
				
				$this->goodsMoney = $vals['goodsMoney'];
			}
			
			
			if (isset($vals['money'])){
				
				$this->money = $vals['money'];
			}
			
			
			if (isset($vals['aigo'])){
				
				$this->aigo = $vals['aigo'];
			}
			
			
			if (isset($vals['favourableMoney'])){
				
				$this->favourableMoney = $vals['favourableMoney'];
			}
			
			
			if (isset($vals['exFavMoney'])){
				
				$this->exFavMoney = $vals['exFavMoney'];
			}
			
			
			if (isset($vals['surplus'])){
				
				$this->surplus = $vals['surplus'];
			}
			
			
			if (isset($vals['carriage'])){
				
				$this->carriage = $vals['carriage'];
			}
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['carriersCode'])){
				
				$this->carriersCode = $vals['carriersCode'];
			}
			
			
			if (isset($vals['carrier'])){
				
				$this->carrier = $vals['carrier'];
			}
			
			
			if (isset($vals['transportDetail'])){
				
				$this->transportDetail = $vals['transportDetail'];
			}
			
			
			if (isset($vals['transportId'])){
				
				$this->transportId = $vals['transportId'];
			}
			
			
			if (isset($vals['transportType'])){
				
				$this->transportType = $vals['transportType'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['vendorId'])){
				
				$this->vendorId = $vals['vendorId'];
			}
			
			
			if (isset($vals['vendorName'])){
				
				$this->vendorName = $vals['vendorName'];
			}
			
			
			if (isset($vals['brandName'])){
				
				$this->brandName = $vals['brandName'];
			}
			
			
			if (isset($vals['addTime'])){
				
				$this->addTime = $vals['addTime'];
			}
			
			
			if (isset($vals['deliveryTime'])){
				
				$this->deliveryTime = $vals['deliveryTime'];
			}
			
			
			if (isset($vals['edbPopOrderInfoId'])){
				
				$this->edbPopOrderInfoId = $vals['edbPopOrderInfoId'];
			}
			
			
			if (isset($vals['edbOrderId'])){
				
				$this->edbOrderId = $vals['edbOrderId'];
			}
			
			
			if (isset($vals['b2cOrderSysId'])){
				
				$this->b2cOrderSysId = $vals['b2cOrderSysId'];
			}
			
			
			if (isset($vals['edbCreateTime'])){
				
				$this->edbCreateTime = $vals['edbCreateTime'];
			}
			
			
			if (isset($vals['edbPopOrderStatusUpdateTime'])){
				
				$this->edbPopOrderStatusUpdateTime = $vals['edbPopOrderStatusUpdateTime'];
			}
			
			
			if (isset($vals['changeTime'])){
				
				$this->changeTime = $vals['changeTime'];
			}
			
			
			if (isset($vals['exPayMoney1'])){
				
				$this->exPayMoney1 = $vals['exPayMoney1'];
			}
			
			
			if (isset($vals['tmsOrderStatus'])){
				
				$this->tmsOrderStatus = $vals['tmsOrderStatus'];
			}
			
			
			if (isset($vals['saleType'])){
				
				$this->saleType = $vals['saleType'];
			}
			
			
			if (isset($vals['popTrackStat'])){
				
				$this->popTrackStat = $vals['popTrackStat'];
			}
			
			
			if (isset($vals['parentOrderSn'])){
				
				$this->parentOrderSn = $vals['parentOrderSn'];
			}
			
			
			if (isset($vals['storeSn'])){
				
				$this->storeSn = $vals['storeSn'];
			}
			
			
			if (isset($vals['cancelReason'])){
				
				$this->cancelReason = $vals['cancelReason'];
			}
			
			
			if (isset($vals['returnDeal'])){
				
				$this->returnDeal = $vals['returnDeal'];
			}
			
			
			if (isset($vals['isDirectDeliveryOxo'])){
				
				$this->isDirectDeliveryOxo = $vals['isDirectDeliveryOxo'];
			}
			
			
			if (isset($vals['taxPayerNo'])){
				
				$this->taxPayerNo = $vals['taxPayerNo'];
			}
			
			
			if (isset($vals['detailGoods'])){
				
				$this->detailGoods = $vals['detailGoods'];
			}
			
			
			if (isset($vals['storeId'])){
				
				$this->storeId = $vals['storeId'];
			}
			
			
			if (isset($vals['storeSource'])){
				
				$this->storeSource = $vals['storeSource'];
			}
			
			
			if (isset($vals['invoiceType'])){
				
				$this->invoiceType = $vals['invoiceType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SoHeaderParam';
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
			
			
			
			
			if ("stat" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->stat);
				
			}
			
			
			
			
			if ("warehouseName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseName);
				
			}
			
			
			
			
			if ("ebsWarehouseCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ebsWarehouseCode);
				
			}
			
			
			
			
			if ("b2cWarehouseCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->b2cWarehouseCode);
				
			}
			
			
			
			
			if ("userType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->userType); 
				
			}
			
			
			
			
			if ("userName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userName);
				
			}
			
			
			
			
			if ("buyerId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->buyerId); 
				
			}
			
			
			
			
			if ("address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address);
				
			}
			
			
			
			
			if ("buyer" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyer);
				
			}
			
			
			
			
			if ("areaId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->areaId);
				
			}
			
			
			
			
			if ("postcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->postcode);
				
			}
			
			
			
			
			if ("county" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->county);
				
			}
			
			
			
			
			if ("city" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->city);
				
			}
			
			
			
			
			if ("state" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->state);
				
			}
			
			
			
			
			if ("countryId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->countryId);
				
			}
			
			
			
			
			if ("tel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tel);
				
			}
			
			
			
			
			if ("mobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mobile);
				
			}
			
			
			
			
			if ("payType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payType);
				
			}
			
			
			
			
			if ("pos" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->pos); 
				
			}
			
			
			
			
			if ("transportDay" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportDay);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("orderType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderType);
				
			}
			
			
			
			
			if ("vipclub" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vipclub);
				
			}
			
			
			
			
			if ("invoice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoice);
				
			}
			
			
			
			
			if ("goodsMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsMoney);
				
			}
			
			
			
			
			if ("money" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->money);
				
			}
			
			
			
			
			if ("aigo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->aigo);
				
			}
			
			
			
			
			if ("favourableMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->favourableMoney);
				
			}
			
			
			
			
			if ("exFavMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exFavMoney);
				
			}
			
			
			
			
			if ("surplus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->surplus);
				
			}
			
			
			
			
			if ("carriage" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriage);
				
			}
			
			
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("carriersCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriersCode);
				
			}
			
			
			
			
			if ("carrier" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier);
				
			}
			
			
			
			
			if ("transportDetail" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportDetail);
				
			}
			
			
			
			
			if ("transportId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportId);
				
			}
			
			
			
			
			if ("transportType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportType);
				
			}
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCode);
				
			}
			
			
			
			
			if ("vendorId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendorId); 
				
			}
			
			
			
			
			if ("vendorName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorName);
				
			}
			
			
			
			
			if ("brandName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandName);
				
			}
			
			
			
			
			if ("addTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->addTime);
				
			}
			
			
			
			
			if ("deliveryTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deliveryTime);
				
			}
			
			
			
			
			if ("edbPopOrderInfoId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->edbPopOrderInfoId); 
				
			}
			
			
			
			
			if ("edbOrderId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->edbOrderId); 
				
			}
			
			
			
			
			if ("b2cOrderSysId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->b2cOrderSysId); 
				
			}
			
			
			
			
			if ("edbCreateTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->edbCreateTime);
				
			}
			
			
			
			
			if ("edbPopOrderStatusUpdateTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->edbPopOrderStatusUpdateTime);
				
			}
			
			
			
			
			if ("changeTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->changeTime);
				
			}
			
			
			
			
			if ("exPayMoney1" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exPayMoney1);
				
			}
			
			
			
			
			if ("tmsOrderStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tmsOrderStatus);
				
			}
			
			
			
			
			if ("saleType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->saleType); 
				
			}
			
			
			
			
			if ("popTrackStat" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->popTrackStat); 
				
			}
			
			
			
			
			if ("parentOrderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->parentOrderSn);
				
			}
			
			
			
			
			if ("storeSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeSn);
				
			}
			
			
			
			
			if ("cancelReason" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->cancelReason); 
				
			}
			
			
			
			
			if ("returnDeal" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->returnDeal); 
				
			}
			
			
			
			
			if ("isDirectDeliveryOxo" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isDirectDeliveryOxo); 
				
			}
			
			
			
			
			if ("taxPayerNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->taxPayerNo);
				
			}
			
			
			
			
			if ("detailGoods" == $schemeField){
				
				$needSkip = false;
				
				$this->detailGoods = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\sof\sof\service\SoDetailParam();
						$elem0->read($input);
						
						$this->detailGoods[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("storeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeId);
				
			}
			
			
			
			
			if ("storeSource" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->storeSource); 
				
			}
			
			
			
			
			if ("invoiceType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->invoiceType); 
				
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
		
		
		if($this->stat !== null) {
			
			$xfer += $output->writeFieldBegin('stat');
			$xfer += $output->writeString($this->stat);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouseName !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseName');
			$xfer += $output->writeString($this->warehouseName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ebsWarehouseCode !== null) {
			
			$xfer += $output->writeFieldBegin('ebsWarehouseCode');
			$xfer += $output->writeString($this->ebsWarehouseCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->b2cWarehouseCode !== null) {
			
			$xfer += $output->writeFieldBegin('b2cWarehouseCode');
			$xfer += $output->writeString($this->b2cWarehouseCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userType !== null) {
			
			$xfer += $output->writeFieldBegin('userType');
			$xfer += $output->writeI32($this->userType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userName !== null) {
			
			$xfer += $output->writeFieldBegin('userName');
			$xfer += $output->writeString($this->userName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerId !== null) {
			
			$xfer += $output->writeFieldBegin('buyerId');
			$xfer += $output->writeI32($this->buyerId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->address !== null) {
			
			$xfer += $output->writeFieldBegin('address');
			$xfer += $output->writeString($this->address);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyer !== null) {
			
			$xfer += $output->writeFieldBegin('buyer');
			$xfer += $output->writeString($this->buyer);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->areaId !== null) {
			
			$xfer += $output->writeFieldBegin('areaId');
			$xfer += $output->writeString($this->areaId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->postcode !== null) {
			
			$xfer += $output->writeFieldBegin('postcode');
			$xfer += $output->writeString($this->postcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->county !== null) {
			
			$xfer += $output->writeFieldBegin('county');
			$xfer += $output->writeString($this->county);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->city !== null) {
			
			$xfer += $output->writeFieldBegin('city');
			$xfer += $output->writeString($this->city);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->state !== null) {
			
			$xfer += $output->writeFieldBegin('state');
			$xfer += $output->writeString($this->state);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->countryId !== null) {
			
			$xfer += $output->writeFieldBegin('countryId');
			$xfer += $output->writeString($this->countryId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tel !== null) {
			
			$xfer += $output->writeFieldBegin('tel');
			$xfer += $output->writeString($this->tel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mobile !== null) {
			
			$xfer += $output->writeFieldBegin('mobile');
			$xfer += $output->writeString($this->mobile);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payType !== null) {
			
			$xfer += $output->writeFieldBegin('payType');
			$xfer += $output->writeString($this->payType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pos !== null) {
			
			$xfer += $output->writeFieldBegin('pos');
			$xfer += $output->writeI32($this->pos);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportDay !== null) {
			
			$xfer += $output->writeFieldBegin('transportDay');
			$xfer += $output->writeString($this->transportDay);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
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
		
		
		if($this->invoice !== null) {
			
			$xfer += $output->writeFieldBegin('invoice');
			$xfer += $output->writeString($this->invoice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsMoney !== null) {
			
			$xfer += $output->writeFieldBegin('goodsMoney');
			$xfer += $output->writeString($this->goodsMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->money !== null) {
			
			$xfer += $output->writeFieldBegin('money');
			$xfer += $output->writeString($this->money);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->aigo !== null) {
			
			$xfer += $output->writeFieldBegin('aigo');
			$xfer += $output->writeString($this->aigo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->favourableMoney !== null) {
			
			$xfer += $output->writeFieldBegin('favourableMoney');
			$xfer += $output->writeString($this->favourableMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exFavMoney !== null) {
			
			$xfer += $output->writeFieldBegin('exFavMoney');
			$xfer += $output->writeString($this->exFavMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->surplus !== null) {
			
			$xfer += $output->writeFieldBegin('surplus');
			$xfer += $output->writeString($this->surplus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriage !== null) {
			
			$xfer += $output->writeFieldBegin('carriage');
			$xfer += $output->writeString($this->carriage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportNo !== null) {
			
			$xfer += $output->writeFieldBegin('transportNo');
			$xfer += $output->writeString($this->transportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriersCode !== null) {
			
			$xfer += $output->writeFieldBegin('carriersCode');
			$xfer += $output->writeString($this->carriersCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrier !== null) {
			
			$xfer += $output->writeFieldBegin('carrier');
			$xfer += $output->writeString($this->carrier);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportDetail !== null) {
			
			$xfer += $output->writeFieldBegin('transportDetail');
			$xfer += $output->writeString($this->transportDetail);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportId !== null) {
			
			$xfer += $output->writeFieldBegin('transportId');
			$xfer += $output->writeString($this->transportId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportType !== null) {
			
			$xfer += $output->writeFieldBegin('transportType');
			$xfer += $output->writeString($this->transportType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorCode !== null) {
			
			$xfer += $output->writeFieldBegin('vendorCode');
			$xfer += $output->writeString($this->vendorCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorId !== null) {
			
			$xfer += $output->writeFieldBegin('vendorId');
			$xfer += $output->writeI32($this->vendorId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorName !== null) {
			
			$xfer += $output->writeFieldBegin('vendorName');
			$xfer += $output->writeString($this->vendorName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandName !== null) {
			
			$xfer += $output->writeFieldBegin('brandName');
			$xfer += $output->writeString($this->brandName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->addTime !== null) {
			
			$xfer += $output->writeFieldBegin('addTime');
			$xfer += $output->writeString($this->addTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliveryTime !== null) {
			
			$xfer += $output->writeFieldBegin('deliveryTime');
			$xfer += $output->writeString($this->deliveryTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->edbPopOrderInfoId !== null) {
			
			$xfer += $output->writeFieldBegin('edbPopOrderInfoId');
			$xfer += $output->writeI32($this->edbPopOrderInfoId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->edbOrderId !== null) {
			
			$xfer += $output->writeFieldBegin('edbOrderId');
			$xfer += $output->writeI64($this->edbOrderId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->b2cOrderSysId !== null) {
			
			$xfer += $output->writeFieldBegin('b2cOrderSysId');
			$xfer += $output->writeI32($this->b2cOrderSysId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->edbCreateTime !== null) {
			
			$xfer += $output->writeFieldBegin('edbCreateTime');
			$xfer += $output->writeString($this->edbCreateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->edbPopOrderStatusUpdateTime !== null) {
			
			$xfer += $output->writeFieldBegin('edbPopOrderStatusUpdateTime');
			$xfer += $output->writeString($this->edbPopOrderStatusUpdateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->changeTime !== null) {
			
			$xfer += $output->writeFieldBegin('changeTime');
			$xfer += $output->writeString($this->changeTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exPayMoney1 !== null) {
			
			$xfer += $output->writeFieldBegin('exPayMoney1');
			$xfer += $output->writeString($this->exPayMoney1);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tmsOrderStatus !== null) {
			
			$xfer += $output->writeFieldBegin('tmsOrderStatus');
			$xfer += $output->writeString($this->tmsOrderStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->saleType !== null) {
			
			$xfer += $output->writeFieldBegin('saleType');
			$xfer += $output->writeByte($this->saleType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->popTrackStat !== null) {
			
			$xfer += $output->writeFieldBegin('popTrackStat');
			$xfer += $output->writeI32($this->popTrackStat);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->parentOrderSn !== null) {
			
			$xfer += $output->writeFieldBegin('parentOrderSn');
			$xfer += $output->writeString($this->parentOrderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeSn !== null) {
			
			$xfer += $output->writeFieldBegin('storeSn');
			$xfer += $output->writeString($this->storeSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cancelReason !== null) {
			
			$xfer += $output->writeFieldBegin('cancelReason');
			$xfer += $output->writeByte($this->cancelReason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnDeal !== null) {
			
			$xfer += $output->writeFieldBegin('returnDeal');
			$xfer += $output->writeI32($this->returnDeal);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isDirectDeliveryOxo !== null) {
			
			$xfer += $output->writeFieldBegin('isDirectDeliveryOxo');
			$xfer += $output->writeByte($this->isDirectDeliveryOxo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->taxPayerNo !== null) {
			
			$xfer += $output->writeFieldBegin('taxPayerNo');
			$xfer += $output->writeString($this->taxPayerNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->detailGoods !== null) {
			
			$xfer += $output->writeFieldBegin('detailGoods');
			
			if (!is_array($this->detailGoods)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->detailGoods as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
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
		
		
		if($this->invoiceType !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceType');
			$xfer += $output->writeI32($this->invoiceType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>