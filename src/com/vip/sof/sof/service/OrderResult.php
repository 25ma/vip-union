<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class OrderResult {
	
	static $_TSPEC;
	public $goods = null;
	public $returnOrders = null;
	public $transportInfos = null;
	public $orderSn = null;
	public $stat = null;
	public $vipclub = null;
	public $storeSn = null;
	public $storeName = null;
	public $transportDay = null;
	public $address = null;
	public $isExport = null;
	public $cancelReason = null;
	public $invoice = null;
	public $exPayMoney1 = null;
	public $goodsMoney = null;
	public $carriage = null;
	public $favourableMoney = null;
	public $exFavMoney = null;
	public $remark = null;
	public $vendorId = null;
	public $vendorName = null;
	public $addTime = null;
	public $updateTime = null;
	public $exportTime = null;
	public $buyer = null;
	public $mobile = null;
	public $tel = null;
	public $invoiceTransportNo = null;
	public $postcode = null;
	public $county = null;
	public $city = null;
	public $state = null;
	public $countryId = null;
	public $createTime = null;
	public $oldOrderSn = null;
	public $warehouseName = null;
	public $ebsWarehouseCode = null;
	public $b2cWarehouseCode = null;
	public $userType = null;
	public $userName = null;
	public $returnFastType = null;
	public $returnDeal = null;
	public $saleType = null;
	public $invoiceCreateTime = null;
	public $transportNo = null;
	public $carrier = null;
	public $carriersCode = null;
	public $vendorRemark = null;
	public $invoiceCarrier = null;
	public $taxPayerNo = null;
	public $deliveryTime = null;
	public $storeId = null;
	public $invoiceStat = null;
	public $invoiceInfos = null;
	public $vSkuId = null;
	public $b2cWarehouseName = null;
	public $openId = null;
	public $buyerId = null;
	public $payableAmount = null;
	public $payType = null;
	public $exPayMoney2 = null;
	public $invoiceDeductMoney = null;
	public $hasRefusePackage = null;
	public $storeSource = null;
	public $shippingMethod = null;
	public $saleWarehouse = null;
	public $cancelInfos = null;
	public $clearanceInfoList = null;
	public $invoiceType = null;
	public $rejectDelay = null;
	public $signedLocal = null;
	public $expectDeliveryTime = null;
	public $cancelApplyTime = null;
	public $autoCancelTime = null;
	public $autoApplyTime = null;
	public $transRefuseTime = null;
	public $autoRefuseTime = null;
	public $refuseConfirmTime = null;
	public $lbsSignTime = null;
	public $signTime = null;
	public $refuseConfirm = null;
	public $isPrepay = null;
	public $deliveryStatus = null;
	public $problemOrderList = null;
	public $packageList = null;
	public $cscRefundList = null;
	public $finalStatus = null;
	public $hasOpereate = null;
	public $eximType = null;
	public $buyerEncrypt = null;
	public $addressEncrypt = null;
	public $telEncrypt = null;
	public $mobileEncrypt = null;
	public $yunPeiType = null;
	public $yunPeiTypeName = null;
	public $goodsBizFlags = null;
	public $orderBizFlagList = null;
	public $reDeliverPackageList = null;
	public $hebaoIdentificationCode = null;
	public $isCreateTransport = null;
	public $isShipOrCancel = null;
	public $isPrint = null;
	public $orderType = null;
	public $street = null;
	public $transportConfirm = null;
	public $transportNoType = null;
	public $controlAddress = null;
	public $orderLabelList = null;
	public $controlInvalidTime = null;
	public $controlEventName = null;
	public $orderPlanTime = null;
	public $cancelAuditStatus = null;
	public $payTime = null;
	public $cscRemarkList = null;
	public $storeRemarkList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'goods'
			),
			2 => array(
			'var' => 'returnOrders'
			),
			3 => array(
			'var' => 'transportInfos'
			),
			4 => array(
			'var' => 'orderSn'
			),
			5 => array(
			'var' => 'stat'
			),
			6 => array(
			'var' => 'vipclub'
			),
			7 => array(
			'var' => 'storeSn'
			),
			8 => array(
			'var' => 'storeName'
			),
			9 => array(
			'var' => 'transportDay'
			),
			10 => array(
			'var' => 'address'
			),
			11 => array(
			'var' => 'isExport'
			),
			12 => array(
			'var' => 'cancelReason'
			),
			13 => array(
			'var' => 'invoice'
			),
			14 => array(
			'var' => 'exPayMoney1'
			),
			15 => array(
			'var' => 'goodsMoney'
			),
			16 => array(
			'var' => 'carriage'
			),
			17 => array(
			'var' => 'favourableMoney'
			),
			18 => array(
			'var' => 'exFavMoney'
			),
			19 => array(
			'var' => 'remark'
			),
			20 => array(
			'var' => 'vendorId'
			),
			21 => array(
			'var' => 'vendorName'
			),
			22 => array(
			'var' => 'addTime'
			),
			23 => array(
			'var' => 'updateTime'
			),
			24 => array(
			'var' => 'exportTime'
			),
			25 => array(
			'var' => 'buyer'
			),
			26 => array(
			'var' => 'mobile'
			),
			27 => array(
			'var' => 'tel'
			),
			28 => array(
			'var' => 'invoiceTransportNo'
			),
			29 => array(
			'var' => 'postcode'
			),
			30 => array(
			'var' => 'county'
			),
			31 => array(
			'var' => 'city'
			),
			32 => array(
			'var' => 'state'
			),
			33 => array(
			'var' => 'countryId'
			),
			34 => array(
			'var' => 'createTime'
			),
			35 => array(
			'var' => 'oldOrderSn'
			),
			36 => array(
			'var' => 'warehouseName'
			),
			37 => array(
			'var' => 'ebsWarehouseCode'
			),
			38 => array(
			'var' => 'b2cWarehouseCode'
			),
			39 => array(
			'var' => 'userType'
			),
			40 => array(
			'var' => 'userName'
			),
			41 => array(
			'var' => 'returnFastType'
			),
			42 => array(
			'var' => 'returnDeal'
			),
			43 => array(
			'var' => 'saleType'
			),
			44 => array(
			'var' => 'invoiceCreateTime'
			),
			45 => array(
			'var' => 'transportNo'
			),
			46 => array(
			'var' => 'carrier'
			),
			47 => array(
			'var' => 'carriersCode'
			),
			48 => array(
			'var' => 'vendorRemark'
			),
			49 => array(
			'var' => 'invoiceCarrier'
			),
			50 => array(
			'var' => 'taxPayerNo'
			),
			51 => array(
			'var' => 'deliveryTime'
			),
			52 => array(
			'var' => 'storeId'
			),
			53 => array(
			'var' => 'invoiceStat'
			),
			54 => array(
			'var' => 'invoiceInfos'
			),
			55 => array(
			'var' => 'vSkuId'
			),
			56 => array(
			'var' => 'b2cWarehouseName'
			),
			57 => array(
			'var' => 'openId'
			),
			58 => array(
			'var' => 'buyerId'
			),
			59 => array(
			'var' => 'payableAmount'
			),
			60 => array(
			'var' => 'payType'
			),
			61 => array(
			'var' => 'exPayMoney2'
			),
			62 => array(
			'var' => 'invoiceDeductMoney'
			),
			63 => array(
			'var' => 'hasRefusePackage'
			),
			64 => array(
			'var' => 'storeSource'
			),
			65 => array(
			'var' => 'shippingMethod'
			),
			66 => array(
			'var' => 'saleWarehouse'
			),
			67 => array(
			'var' => 'cancelInfos'
			),
			68 => array(
			'var' => 'clearanceInfoList'
			),
			69 => array(
			'var' => 'invoiceType'
			),
			70 => array(
			'var' => 'rejectDelay'
			),
			71 => array(
			'var' => 'signedLocal'
			),
			72 => array(
			'var' => 'expectDeliveryTime'
			),
			73 => array(
			'var' => 'cancelApplyTime'
			),
			74 => array(
			'var' => 'autoCancelTime'
			),
			75 => array(
			'var' => 'autoApplyTime'
			),
			76 => array(
			'var' => 'transRefuseTime'
			),
			77 => array(
			'var' => 'autoRefuseTime'
			),
			78 => array(
			'var' => 'refuseConfirmTime'
			),
			79 => array(
			'var' => 'lbsSignTime'
			),
			80 => array(
			'var' => 'signTime'
			),
			81 => array(
			'var' => 'refuseConfirm'
			),
			82 => array(
			'var' => 'isPrepay'
			),
			83 => array(
			'var' => 'deliveryStatus'
			),
			84 => array(
			'var' => 'problemOrderList'
			),
			85 => array(
			'var' => 'packageList'
			),
			86 => array(
			'var' => 'cscRefundList'
			),
			87 => array(
			'var' => 'finalStatus'
			),
			88 => array(
			'var' => 'hasOpereate'
			),
			89 => array(
			'var' => 'eximType'
			),
			90 => array(
			'var' => 'buyerEncrypt'
			),
			91 => array(
			'var' => 'addressEncrypt'
			),
			92 => array(
			'var' => 'telEncrypt'
			),
			93 => array(
			'var' => 'mobileEncrypt'
			),
			94 => array(
			'var' => 'yunPeiType'
			),
			95 => array(
			'var' => 'yunPeiTypeName'
			),
			96 => array(
			'var' => 'goodsBizFlags'
			),
			97 => array(
			'var' => 'orderBizFlagList'
			),
			98 => array(
			'var' => 'reDeliverPackageList'
			),
			99 => array(
			'var' => 'hebaoIdentificationCode'
			),
			100 => array(
			'var' => 'isCreateTransport'
			),
			101 => array(
			'var' => 'isShipOrCancel'
			),
			102 => array(
			'var' => 'isPrint'
			),
			103 => array(
			'var' => 'orderType'
			),
			104 => array(
			'var' => 'street'
			),
			105 => array(
			'var' => 'transportConfirm'
			),
			106 => array(
			'var' => 'transportNoType'
			),
			107 => array(
			'var' => 'controlAddress'
			),
			108 => array(
			'var' => 'orderLabelList'
			),
			109 => array(
			'var' => 'controlInvalidTime'
			),
			110 => array(
			'var' => 'controlEventName'
			),
			111 => array(
			'var' => 'orderPlanTime'
			),
			112 => array(
			'var' => 'cancelAuditStatus'
			),
			113 => array(
			'var' => 'payTime'
			),
			114 => array(
			'var' => 'cscRemarkList'
			),
			115 => array(
			'var' => 'storeRemarkList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['goods'])){
				
				$this->goods = $vals['goods'];
			}
			
			
			if (isset($vals['returnOrders'])){
				
				$this->returnOrders = $vals['returnOrders'];
			}
			
			
			if (isset($vals['transportInfos'])){
				
				$this->transportInfos = $vals['transportInfos'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['stat'])){
				
				$this->stat = $vals['stat'];
			}
			
			
			if (isset($vals['vipclub'])){
				
				$this->vipclub = $vals['vipclub'];
			}
			
			
			if (isset($vals['storeSn'])){
				
				$this->storeSn = $vals['storeSn'];
			}
			
			
			if (isset($vals['storeName'])){
				
				$this->storeName = $vals['storeName'];
			}
			
			
			if (isset($vals['transportDay'])){
				
				$this->transportDay = $vals['transportDay'];
			}
			
			
			if (isset($vals['address'])){
				
				$this->address = $vals['address'];
			}
			
			
			if (isset($vals['isExport'])){
				
				$this->isExport = $vals['isExport'];
			}
			
			
			if (isset($vals['cancelReason'])){
				
				$this->cancelReason = $vals['cancelReason'];
			}
			
			
			if (isset($vals['invoice'])){
				
				$this->invoice = $vals['invoice'];
			}
			
			
			if (isset($vals['exPayMoney1'])){
				
				$this->exPayMoney1 = $vals['exPayMoney1'];
			}
			
			
			if (isset($vals['goodsMoney'])){
				
				$this->goodsMoney = $vals['goodsMoney'];
			}
			
			
			if (isset($vals['carriage'])){
				
				$this->carriage = $vals['carriage'];
			}
			
			
			if (isset($vals['favourableMoney'])){
				
				$this->favourableMoney = $vals['favourableMoney'];
			}
			
			
			if (isset($vals['exFavMoney'])){
				
				$this->exFavMoney = $vals['exFavMoney'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['vendorId'])){
				
				$this->vendorId = $vals['vendorId'];
			}
			
			
			if (isset($vals['vendorName'])){
				
				$this->vendorName = $vals['vendorName'];
			}
			
			
			if (isset($vals['addTime'])){
				
				$this->addTime = $vals['addTime'];
			}
			
			
			if (isset($vals['updateTime'])){
				
				$this->updateTime = $vals['updateTime'];
			}
			
			
			if (isset($vals['exportTime'])){
				
				$this->exportTime = $vals['exportTime'];
			}
			
			
			if (isset($vals['buyer'])){
				
				$this->buyer = $vals['buyer'];
			}
			
			
			if (isset($vals['mobile'])){
				
				$this->mobile = $vals['mobile'];
			}
			
			
			if (isset($vals['tel'])){
				
				$this->tel = $vals['tel'];
			}
			
			
			if (isset($vals['invoiceTransportNo'])){
				
				$this->invoiceTransportNo = $vals['invoiceTransportNo'];
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
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['oldOrderSn'])){
				
				$this->oldOrderSn = $vals['oldOrderSn'];
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
			
			
			if (isset($vals['returnFastType'])){
				
				$this->returnFastType = $vals['returnFastType'];
			}
			
			
			if (isset($vals['returnDeal'])){
				
				$this->returnDeal = $vals['returnDeal'];
			}
			
			
			if (isset($vals['saleType'])){
				
				$this->saleType = $vals['saleType'];
			}
			
			
			if (isset($vals['invoiceCreateTime'])){
				
				$this->invoiceCreateTime = $vals['invoiceCreateTime'];
			}
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['carrier'])){
				
				$this->carrier = $vals['carrier'];
			}
			
			
			if (isset($vals['carriersCode'])){
				
				$this->carriersCode = $vals['carriersCode'];
			}
			
			
			if (isset($vals['vendorRemark'])){
				
				$this->vendorRemark = $vals['vendorRemark'];
			}
			
			
			if (isset($vals['invoiceCarrier'])){
				
				$this->invoiceCarrier = $vals['invoiceCarrier'];
			}
			
			
			if (isset($vals['taxPayerNo'])){
				
				$this->taxPayerNo = $vals['taxPayerNo'];
			}
			
			
			if (isset($vals['deliveryTime'])){
				
				$this->deliveryTime = $vals['deliveryTime'];
			}
			
			
			if (isset($vals['storeId'])){
				
				$this->storeId = $vals['storeId'];
			}
			
			
			if (isset($vals['invoiceStat'])){
				
				$this->invoiceStat = $vals['invoiceStat'];
			}
			
			
			if (isset($vals['invoiceInfos'])){
				
				$this->invoiceInfos = $vals['invoiceInfos'];
			}
			
			
			if (isset($vals['vSkuId'])){
				
				$this->vSkuId = $vals['vSkuId'];
			}
			
			
			if (isset($vals['b2cWarehouseName'])){
				
				$this->b2cWarehouseName = $vals['b2cWarehouseName'];
			}
			
			
			if (isset($vals['openId'])){
				
				$this->openId = $vals['openId'];
			}
			
			
			if (isset($vals['buyerId'])){
				
				$this->buyerId = $vals['buyerId'];
			}
			
			
			if (isset($vals['payableAmount'])){
				
				$this->payableAmount = $vals['payableAmount'];
			}
			
			
			if (isset($vals['payType'])){
				
				$this->payType = $vals['payType'];
			}
			
			
			if (isset($vals['exPayMoney2'])){
				
				$this->exPayMoney2 = $vals['exPayMoney2'];
			}
			
			
			if (isset($vals['invoiceDeductMoney'])){
				
				$this->invoiceDeductMoney = $vals['invoiceDeductMoney'];
			}
			
			
			if (isset($vals['hasRefusePackage'])){
				
				$this->hasRefusePackage = $vals['hasRefusePackage'];
			}
			
			
			if (isset($vals['storeSource'])){
				
				$this->storeSource = $vals['storeSource'];
			}
			
			
			if (isset($vals['shippingMethod'])){
				
				$this->shippingMethod = $vals['shippingMethod'];
			}
			
			
			if (isset($vals['saleWarehouse'])){
				
				$this->saleWarehouse = $vals['saleWarehouse'];
			}
			
			
			if (isset($vals['cancelInfos'])){
				
				$this->cancelInfos = $vals['cancelInfos'];
			}
			
			
			if (isset($vals['clearanceInfoList'])){
				
				$this->clearanceInfoList = $vals['clearanceInfoList'];
			}
			
			
			if (isset($vals['invoiceType'])){
				
				$this->invoiceType = $vals['invoiceType'];
			}
			
			
			if (isset($vals['rejectDelay'])){
				
				$this->rejectDelay = $vals['rejectDelay'];
			}
			
			
			if (isset($vals['signedLocal'])){
				
				$this->signedLocal = $vals['signedLocal'];
			}
			
			
			if (isset($vals['expectDeliveryTime'])){
				
				$this->expectDeliveryTime = $vals['expectDeliveryTime'];
			}
			
			
			if (isset($vals['cancelApplyTime'])){
				
				$this->cancelApplyTime = $vals['cancelApplyTime'];
			}
			
			
			if (isset($vals['autoCancelTime'])){
				
				$this->autoCancelTime = $vals['autoCancelTime'];
			}
			
			
			if (isset($vals['autoApplyTime'])){
				
				$this->autoApplyTime = $vals['autoApplyTime'];
			}
			
			
			if (isset($vals['transRefuseTime'])){
				
				$this->transRefuseTime = $vals['transRefuseTime'];
			}
			
			
			if (isset($vals['autoRefuseTime'])){
				
				$this->autoRefuseTime = $vals['autoRefuseTime'];
			}
			
			
			if (isset($vals['refuseConfirmTime'])){
				
				$this->refuseConfirmTime = $vals['refuseConfirmTime'];
			}
			
			
			if (isset($vals['lbsSignTime'])){
				
				$this->lbsSignTime = $vals['lbsSignTime'];
			}
			
			
			if (isset($vals['signTime'])){
				
				$this->signTime = $vals['signTime'];
			}
			
			
			if (isset($vals['refuseConfirm'])){
				
				$this->refuseConfirm = $vals['refuseConfirm'];
			}
			
			
			if (isset($vals['isPrepay'])){
				
				$this->isPrepay = $vals['isPrepay'];
			}
			
			
			if (isset($vals['deliveryStatus'])){
				
				$this->deliveryStatus = $vals['deliveryStatus'];
			}
			
			
			if (isset($vals['problemOrderList'])){
				
				$this->problemOrderList = $vals['problemOrderList'];
			}
			
			
			if (isset($vals['packageList'])){
				
				$this->packageList = $vals['packageList'];
			}
			
			
			if (isset($vals['cscRefundList'])){
				
				$this->cscRefundList = $vals['cscRefundList'];
			}
			
			
			if (isset($vals['finalStatus'])){
				
				$this->finalStatus = $vals['finalStatus'];
			}
			
			
			if (isset($vals['hasOpereate'])){
				
				$this->hasOpereate = $vals['hasOpereate'];
			}
			
			
			if (isset($vals['eximType'])){
				
				$this->eximType = $vals['eximType'];
			}
			
			
			if (isset($vals['buyerEncrypt'])){
				
				$this->buyerEncrypt = $vals['buyerEncrypt'];
			}
			
			
			if (isset($vals['addressEncrypt'])){
				
				$this->addressEncrypt = $vals['addressEncrypt'];
			}
			
			
			if (isset($vals['telEncrypt'])){
				
				$this->telEncrypt = $vals['telEncrypt'];
			}
			
			
			if (isset($vals['mobileEncrypt'])){
				
				$this->mobileEncrypt = $vals['mobileEncrypt'];
			}
			
			
			if (isset($vals['yunPeiType'])){
				
				$this->yunPeiType = $vals['yunPeiType'];
			}
			
			
			if (isset($vals['yunPeiTypeName'])){
				
				$this->yunPeiTypeName = $vals['yunPeiTypeName'];
			}
			
			
			if (isset($vals['goodsBizFlags'])){
				
				$this->goodsBizFlags = $vals['goodsBizFlags'];
			}
			
			
			if (isset($vals['orderBizFlagList'])){
				
				$this->orderBizFlagList = $vals['orderBizFlagList'];
			}
			
			
			if (isset($vals['reDeliverPackageList'])){
				
				$this->reDeliverPackageList = $vals['reDeliverPackageList'];
			}
			
			
			if (isset($vals['hebaoIdentificationCode'])){
				
				$this->hebaoIdentificationCode = $vals['hebaoIdentificationCode'];
			}
			
			
			if (isset($vals['isCreateTransport'])){
				
				$this->isCreateTransport = $vals['isCreateTransport'];
			}
			
			
			if (isset($vals['isShipOrCancel'])){
				
				$this->isShipOrCancel = $vals['isShipOrCancel'];
			}
			
			
			if (isset($vals['isPrint'])){
				
				$this->isPrint = $vals['isPrint'];
			}
			
			
			if (isset($vals['orderType'])){
				
				$this->orderType = $vals['orderType'];
			}
			
			
			if (isset($vals['street'])){
				
				$this->street = $vals['street'];
			}
			
			
			if (isset($vals['transportConfirm'])){
				
				$this->transportConfirm = $vals['transportConfirm'];
			}
			
			
			if (isset($vals['transportNoType'])){
				
				$this->transportNoType = $vals['transportNoType'];
			}
			
			
			if (isset($vals['controlAddress'])){
				
				$this->controlAddress = $vals['controlAddress'];
			}
			
			
			if (isset($vals['orderLabelList'])){
				
				$this->orderLabelList = $vals['orderLabelList'];
			}
			
			
			if (isset($vals['controlInvalidTime'])){
				
				$this->controlInvalidTime = $vals['controlInvalidTime'];
			}
			
			
			if (isset($vals['controlEventName'])){
				
				$this->controlEventName = $vals['controlEventName'];
			}
			
			
			if (isset($vals['orderPlanTime'])){
				
				$this->orderPlanTime = $vals['orderPlanTime'];
			}
			
			
			if (isset($vals['cancelAuditStatus'])){
				
				$this->cancelAuditStatus = $vals['cancelAuditStatus'];
			}
			
			
			if (isset($vals['payTime'])){
				
				$this->payTime = $vals['payTime'];
			}
			
			
			if (isset($vals['cscRemarkList'])){
				
				$this->cscRemarkList = $vals['cscRemarkList'];
			}
			
			
			if (isset($vals['storeRemarkList'])){
				
				$this->storeRemarkList = $vals['storeRemarkList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("goods" == $schemeField){
				
				$needSkip = false;
				
				$this->goods = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\sof\sof\service\GoodsResult();
						$elem0->read($input);
						
						$this->goods[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("returnOrders" == $schemeField){
				
				$needSkip = false;
				
				$this->returnOrders = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\sof\sof\service\ReturnOrderResult();
						$elem1->read($input);
						
						$this->returnOrders[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("transportInfos" == $schemeField){
				
				$needSkip = false;
				
				$this->transportInfos = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						
						$elem2 = new \com\vip\sof\sof\service\TransportInfoResult();
						$elem2->read($input);
						
						$this->transportInfos[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("stat" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->stat);
				
			}
			
			
			
			
			if ("vipclub" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vipclub);
				
			}
			
			
			
			
			if ("storeSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeSn);
				
			}
			
			
			
			
			if ("storeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeName);
				
			}
			
			
			
			
			if ("transportDay" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportDay);
				
			}
			
			
			
			
			if ("address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address);
				
			}
			
			
			
			
			if ("isExport" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->isExport);
				
			}
			
			
			
			
			if ("cancelReason" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cancelReason);
				
			}
			
			
			
			
			if ("invoice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoice);
				
			}
			
			
			
			
			if ("exPayMoney1" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exPayMoney1);
				
			}
			
			
			
			
			if ("goodsMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsMoney);
				
			}
			
			
			
			
			if ("carriage" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriage);
				
			}
			
			
			
			
			if ("favourableMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->favourableMoney);
				
			}
			
			
			
			
			if ("exFavMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exFavMoney);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("vendorId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendorId); 
				
			}
			
			
			
			
			if ("vendorName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorName);
				
			}
			
			
			
			
			if ("addTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->addTime);
				
			}
			
			
			
			
			if ("updateTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->updateTime);
				
			}
			
			
			
			
			if ("exportTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exportTime);
				
			}
			
			
			
			
			if ("buyer" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyer);
				
			}
			
			
			
			
			if ("mobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mobile);
				
			}
			
			
			
			
			if ("tel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tel);
				
			}
			
			
			
			
			if ("invoiceTransportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceTransportNo);
				
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
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createTime);
				
			}
			
			
			
			
			if ("oldOrderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->oldOrderSn);
				
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
				$input->readString($this->userType);
				
			}
			
			
			
			
			if ("userName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userName);
				
			}
			
			
			
			
			if ("returnFastType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnFastType);
				
			}
			
			
			
			
			if ("returnDeal" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnDeal);
				
			}
			
			
			
			
			if ("saleType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->saleType);
				
			}
			
			
			
			
			if ("invoiceCreateTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceCreateTime);
				
			}
			
			
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("carrier" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier);
				
			}
			
			
			
			
			if ("carriersCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriersCode);
				
			}
			
			
			
			
			if ("vendorRemark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorRemark);
				
			}
			
			
			
			
			if ("invoiceCarrier" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceCarrier);
				
			}
			
			
			
			
			if ("taxPayerNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->taxPayerNo);
				
			}
			
			
			
			
			if ("deliveryTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deliveryTime);
				
			}
			
			
			
			
			if ("storeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeId);
				
			}
			
			
			
			
			if ("invoiceStat" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceStat);
				
			}
			
			
			
			
			if ("invoiceInfos" == $schemeField){
				
				$needSkip = false;
				
				$this->invoiceInfos = array();
				$_size3 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem3 = null;
						
						$elem3 = new \com\vip\sof\sof\service\InvoiceVO();
						$elem3->read($input);
						
						$this->invoiceInfos[$_size3++] = $elem3;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("vSkuId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->vSkuId); 
				
			}
			
			
			
			
			if ("b2cWarehouseName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->b2cWarehouseName);
				
			}
			
			
			
			
			if ("openId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->openId);
				
			}
			
			
			
			
			if ("buyerId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->buyerId); 
				
			}
			
			
			
			
			if ("payableAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payableAmount);
				
			}
			
			
			
			
			if ("payType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payType);
				
			}
			
			
			
			
			if ("exPayMoney2" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exPayMoney2);
				
			}
			
			
			
			
			if ("invoiceDeductMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceDeductMoney);
				
			}
			
			
			
			
			if ("hasRefusePackage" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->hasRefusePackage);
				
			}
			
			
			
			
			if ("storeSource" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->storeSource); 
				
			}
			
			
			
			
			if ("shippingMethod" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->shippingMethod); 
				
			}
			
			
			
			
			if ("saleWarehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->saleWarehouse);
				
			}
			
			
			
			
			if ("cancelInfos" == $schemeField){
				
				$needSkip = false;
				
				$this->cancelInfos = array();
				$_size4 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem4 = null;
						
						$elem4 = new \com\vip\sof\sof\service\CancelQueryResult();
						$elem4->read($input);
						
						$this->cancelInfos[$_size4++] = $elem4;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("clearanceInfoList" == $schemeField){
				
				$needSkip = false;
				
				$this->clearanceInfoList = array();
				$_size5 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem5 = null;
						
						$elem5 = new \com\vip\sof\sof\service\ClearanceInfo();
						$elem5->read($input);
						
						$this->clearanceInfoList[$_size5++] = $elem5;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("invoiceType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceType);
				
			}
			
			
			
			
			if ("rejectDelay" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rejectDelay);
				
			}
			
			
			
			
			if ("signedLocal" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->signedLocal);
				
			}
			
			
			
			
			if ("expectDeliveryTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->expectDeliveryTime);
				
			}
			
			
			
			
			if ("cancelApplyTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cancelApplyTime);
				
			}
			
			
			
			
			if ("autoCancelTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->autoCancelTime);
				
			}
			
			
			
			
			if ("autoApplyTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->autoApplyTime);
				
			}
			
			
			
			
			if ("transRefuseTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transRefuseTime);
				
			}
			
			
			
			
			if ("autoRefuseTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->autoRefuseTime);
				
			}
			
			
			
			
			if ("refuseConfirmTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refuseConfirmTime);
				
			}
			
			
			
			
			if ("lbsSignTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->lbsSignTime);
				
			}
			
			
			
			
			if ("signTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->signTime);
				
			}
			
			
			
			
			if ("refuseConfirm" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->refuseConfirm); 
				
			}
			
			
			
			
			if ("isPrepay" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->isPrepay);
				
			}
			
			
			
			
			if ("deliveryStatus" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->deliveryStatus); 
				
			}
			
			
			
			
			if ("problemOrderList" == $schemeField){
				
				$needSkip = false;
				
				$this->problemOrderList = array();
				$_size6 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem6 = null;
						
						$elem6 = new \com\vip\sof\sof\service\ProblemOrder();
						$elem6->read($input);
						
						$this->problemOrderList[$_size6++] = $elem6;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("packageList" == $schemeField){
				
				$needSkip = false;
				
				$this->packageList = array();
				$_size7 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem7 = null;
						
						$elem7 = new \com\vip\sof\sof\service\PackageInfoResult();
						$elem7->read($input);
						
						$this->packageList[$_size7++] = $elem7;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("cscRefundList" == $schemeField){
				
				$needSkip = false;
				
				$this->cscRefundList = array();
				$_size8 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem8 = null;
						
						$elem8 = new \com\vip\sof\sof\service\CSCRefundInfo();
						$elem8->read($input);
						
						$this->cscRefundList[$_size8++] = $elem8;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("finalStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->finalStatus); 
				
			}
			
			
			
			
			if ("hasOpereate" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->hasOpereate); 
				
			}
			
			
			
			
			if ("eximType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->eximType);
				
			}
			
			
			
			
			if ("buyerEncrypt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerEncrypt);
				
			}
			
			
			
			
			if ("addressEncrypt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->addressEncrypt);
				
			}
			
			
			
			
			if ("telEncrypt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->telEncrypt);
				
			}
			
			
			
			
			if ("mobileEncrypt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mobileEncrypt);
				
			}
			
			
			
			
			if ("yunPeiType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->yunPeiType); 
				
			}
			
			
			
			
			if ("yunPeiTypeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->yunPeiTypeName);
				
			}
			
			
			
			
			if ("goodsBizFlags" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsBizFlags);
				
			}
			
			
			
			
			if ("orderBizFlagList" == $schemeField){
				
				$needSkip = false;
				
				$this->orderBizFlagList = array();
				$_size9 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem9 = null;
						
						$elem9 = new \com\vip\sof\sof\service\GoodsBizFlag();
						$elem9->read($input);
						
						$this->orderBizFlagList[$_size9++] = $elem9;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("reDeliverPackageList" == $schemeField){
				
				$needSkip = false;
				
				$this->reDeliverPackageList = array();
				$_size10 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem10 = null;
						
						$elem10 = new \com\vip\sof\sof\service\PackageInfoResult();
						$elem10->read($input);
						
						$this->reDeliverPackageList[$_size10++] = $elem10;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("hebaoIdentificationCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->hebaoIdentificationCode);
				
			}
			
			
			
			
			if ("isCreateTransport" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isCreateTransport); 
				
			}
			
			
			
			
			if ("isShipOrCancel" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isShipOrCancel); 
				
			}
			
			
			
			
			if ("isPrint" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isPrint); 
				
			}
			
			
			
			
			if ("orderType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderType);
				
			}
			
			
			
			
			if ("street" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->street);
				
			}
			
			
			
			
			if ("transportConfirm" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->transportConfirm); 
				
			}
			
			
			
			
			if ("transportNoType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->transportNoType); 
				
			}
			
			
			
			
			if ("controlAddress" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->controlAddress); 
				
			}
			
			
			
			
			if ("orderLabelList" == $schemeField){
				
				$needSkip = false;
				
				$this->orderLabelList = array();
				$_size11 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem11 = null;
						
						$elem11 = new \com\vip\sof\sof\service\OrderLabel();
						$elem11->read($input);
						
						$this->orderLabelList[$_size11++] = $elem11;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("controlInvalidTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->controlInvalidTime);
				
			}
			
			
			
			
			if ("controlEventName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->controlEventName);
				
			}
			
			
			
			
			if ("orderPlanTime" == $schemeField){
				
				$needSkip = false;
				
				$this->orderPlanTime = new \com\vip\sof\sof\service\OrderPlanTime();
				$this->orderPlanTime->read($input);
				
			}
			
			
			
			
			if ("cancelAuditStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cancelAuditStatus);
				
			}
			
			
			
			
			if ("payTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payTime);
				
			}
			
			
			
			
			if ("cscRemarkList" == $schemeField){
				
				$needSkip = false;
				
				$this->cscRemarkList = array();
				$_size12 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem12 = null;
						
						$elem12 = new \com\vip\sof\sof\service\Remark();
						$elem12->read($input);
						
						$this->cscRemarkList[$_size12++] = $elem12;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("storeRemarkList" == $schemeField){
				
				$needSkip = false;
				
				$this->storeRemarkList = array();
				$_size13 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem13 = null;
						
						$elem13 = new \com\vip\sof\sof\service\Remark();
						$elem13->read($input);
						
						$this->storeRemarkList[$_size13++] = $elem13;
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
		
		if($this->goods !== null) {
			
			$xfer += $output->writeFieldBegin('goods');
			
			if (!is_array($this->goods)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->goods as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnOrders !== null) {
			
			$xfer += $output->writeFieldBegin('returnOrders');
			
			if (!is_array($this->returnOrders)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->returnOrders as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportInfos !== null) {
			
			$xfer += $output->writeFieldBegin('transportInfos');
			
			if (!is_array($this->transportInfos)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->transportInfos as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->stat !== null) {
			
			$xfer += $output->writeFieldBegin('stat');
			$xfer += $output->writeString($this->stat);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipclub !== null) {
			
			$xfer += $output->writeFieldBegin('vipclub');
			$xfer += $output->writeString($this->vipclub);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeSn !== null) {
			
			$xfer += $output->writeFieldBegin('storeSn');
			$xfer += $output->writeString($this->storeSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeName !== null) {
			
			$xfer += $output->writeFieldBegin('storeName');
			$xfer += $output->writeString($this->storeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportDay !== null) {
			
			$xfer += $output->writeFieldBegin('transportDay');
			$xfer += $output->writeString($this->transportDay);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->address !== null) {
			
			$xfer += $output->writeFieldBegin('address');
			$xfer += $output->writeString($this->address);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isExport !== null) {
			
			$xfer += $output->writeFieldBegin('isExport');
			$xfer += $output->writeString($this->isExport);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cancelReason !== null) {
			
			$xfer += $output->writeFieldBegin('cancelReason');
			$xfer += $output->writeString($this->cancelReason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoice !== null) {
			
			$xfer += $output->writeFieldBegin('invoice');
			$xfer += $output->writeString($this->invoice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exPayMoney1 !== null) {
			
			$xfer += $output->writeFieldBegin('exPayMoney1');
			$xfer += $output->writeString($this->exPayMoney1);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsMoney !== null) {
			
			$xfer += $output->writeFieldBegin('goodsMoney');
			$xfer += $output->writeString($this->goodsMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriage !== null) {
			
			$xfer += $output->writeFieldBegin('carriage');
			$xfer += $output->writeString($this->carriage);
			
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
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
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
		
		
		if($this->addTime !== null) {
			
			$xfer += $output->writeFieldBegin('addTime');
			$xfer += $output->writeString($this->addTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateTime !== null) {
			
			$xfer += $output->writeFieldBegin('updateTime');
			$xfer += $output->writeString($this->updateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exportTime !== null) {
			
			$xfer += $output->writeFieldBegin('exportTime');
			$xfer += $output->writeString($this->exportTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyer !== null) {
			
			$xfer += $output->writeFieldBegin('buyer');
			$xfer += $output->writeString($this->buyer);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mobile !== null) {
			
			$xfer += $output->writeFieldBegin('mobile');
			$xfer += $output->writeString($this->mobile);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tel !== null) {
			
			$xfer += $output->writeFieldBegin('tel');
			$xfer += $output->writeString($this->tel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceTransportNo !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceTransportNo');
			$xfer += $output->writeString($this->invoiceTransportNo);
			
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
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeString($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->oldOrderSn !== null) {
			
			$xfer += $output->writeFieldBegin('oldOrderSn');
			$xfer += $output->writeString($this->oldOrderSn);
			
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
			$xfer += $output->writeString($this->userType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userName !== null) {
			
			$xfer += $output->writeFieldBegin('userName');
			$xfer += $output->writeString($this->userName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnFastType !== null) {
			
			$xfer += $output->writeFieldBegin('returnFastType');
			$xfer += $output->writeString($this->returnFastType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnDeal !== null) {
			
			$xfer += $output->writeFieldBegin('returnDeal');
			$xfer += $output->writeString($this->returnDeal);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->saleType !== null) {
			
			$xfer += $output->writeFieldBegin('saleType');
			$xfer += $output->writeString($this->saleType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceCreateTime !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceCreateTime');
			$xfer += $output->writeString($this->invoiceCreateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportNo !== null) {
			
			$xfer += $output->writeFieldBegin('transportNo');
			$xfer += $output->writeString($this->transportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrier !== null) {
			
			$xfer += $output->writeFieldBegin('carrier');
			$xfer += $output->writeString($this->carrier);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriersCode !== null) {
			
			$xfer += $output->writeFieldBegin('carriersCode');
			$xfer += $output->writeString($this->carriersCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorRemark !== null) {
			
			$xfer += $output->writeFieldBegin('vendorRemark');
			$xfer += $output->writeString($this->vendorRemark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceCarrier !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceCarrier');
			$xfer += $output->writeString($this->invoiceCarrier);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->taxPayerNo !== null) {
			
			$xfer += $output->writeFieldBegin('taxPayerNo');
			$xfer += $output->writeString($this->taxPayerNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliveryTime !== null) {
			
			$xfer += $output->writeFieldBegin('deliveryTime');
			$xfer += $output->writeString($this->deliveryTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeId !== null) {
			
			$xfer += $output->writeFieldBegin('storeId');
			$xfer += $output->writeString($this->storeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceStat !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceStat');
			$xfer += $output->writeString($this->invoiceStat);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceInfos !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceInfos');
			
			if (!is_array($this->invoiceInfos)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->invoiceInfos as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vSkuId !== null) {
			
			$xfer += $output->writeFieldBegin('vSkuId');
			$xfer += $output->writeI64($this->vSkuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->b2cWarehouseName !== null) {
			
			$xfer += $output->writeFieldBegin('b2cWarehouseName');
			$xfer += $output->writeString($this->b2cWarehouseName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->openId !== null) {
			
			$xfer += $output->writeFieldBegin('openId');
			$xfer += $output->writeString($this->openId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerId !== null) {
			
			$xfer += $output->writeFieldBegin('buyerId');
			$xfer += $output->writeI32($this->buyerId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payableAmount !== null) {
			
			$xfer += $output->writeFieldBegin('payableAmount');
			$xfer += $output->writeString($this->payableAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payType !== null) {
			
			$xfer += $output->writeFieldBegin('payType');
			$xfer += $output->writeString($this->payType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exPayMoney2 !== null) {
			
			$xfer += $output->writeFieldBegin('exPayMoney2');
			$xfer += $output->writeString($this->exPayMoney2);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceDeductMoney !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceDeductMoney');
			$xfer += $output->writeString($this->invoiceDeductMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->hasRefusePackage !== null) {
			
			$xfer += $output->writeFieldBegin('hasRefusePackage');
			$xfer += $output->writeBool($this->hasRefusePackage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeSource !== null) {
			
			$xfer += $output->writeFieldBegin('storeSource');
			$xfer += $output->writeI32($this->storeSource);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shippingMethod !== null) {
			
			$xfer += $output->writeFieldBegin('shippingMethod');
			$xfer += $output->writeI32($this->shippingMethod);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->saleWarehouse !== null) {
			
			$xfer += $output->writeFieldBegin('saleWarehouse');
			$xfer += $output->writeString($this->saleWarehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cancelInfos !== null) {
			
			$xfer += $output->writeFieldBegin('cancelInfos');
			
			if (!is_array($this->cancelInfos)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->cancelInfos as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->clearanceInfoList !== null) {
			
			$xfer += $output->writeFieldBegin('clearanceInfoList');
			
			if (!is_array($this->clearanceInfoList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->clearanceInfoList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceType !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceType');
			$xfer += $output->writeString($this->invoiceType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rejectDelay !== null) {
			
			$xfer += $output->writeFieldBegin('rejectDelay');
			$xfer += $output->writeString($this->rejectDelay);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->signedLocal !== null) {
			
			$xfer += $output->writeFieldBegin('signedLocal');
			$xfer += $output->writeString($this->signedLocal);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expectDeliveryTime !== null) {
			
			$xfer += $output->writeFieldBegin('expectDeliveryTime');
			$xfer += $output->writeString($this->expectDeliveryTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cancelApplyTime !== null) {
			
			$xfer += $output->writeFieldBegin('cancelApplyTime');
			$xfer += $output->writeString($this->cancelApplyTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->autoCancelTime !== null) {
			
			$xfer += $output->writeFieldBegin('autoCancelTime');
			$xfer += $output->writeString($this->autoCancelTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->autoApplyTime !== null) {
			
			$xfer += $output->writeFieldBegin('autoApplyTime');
			$xfer += $output->writeString($this->autoApplyTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transRefuseTime !== null) {
			
			$xfer += $output->writeFieldBegin('transRefuseTime');
			$xfer += $output->writeString($this->transRefuseTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->autoRefuseTime !== null) {
			
			$xfer += $output->writeFieldBegin('autoRefuseTime');
			$xfer += $output->writeString($this->autoRefuseTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refuseConfirmTime !== null) {
			
			$xfer += $output->writeFieldBegin('refuseConfirmTime');
			$xfer += $output->writeString($this->refuseConfirmTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lbsSignTime !== null) {
			
			$xfer += $output->writeFieldBegin('lbsSignTime');
			$xfer += $output->writeString($this->lbsSignTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->signTime !== null) {
			
			$xfer += $output->writeFieldBegin('signTime');
			$xfer += $output->writeString($this->signTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refuseConfirm !== null) {
			
			$xfer += $output->writeFieldBegin('refuseConfirm');
			$xfer += $output->writeByte($this->refuseConfirm);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isPrepay !== null) {
			
			$xfer += $output->writeFieldBegin('isPrepay');
			$xfer += $output->writeString($this->isPrepay);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliveryStatus !== null) {
			
			$xfer += $output->writeFieldBegin('deliveryStatus');
			$xfer += $output->writeByte($this->deliveryStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->problemOrderList !== null) {
			
			$xfer += $output->writeFieldBegin('problemOrderList');
			
			if (!is_array($this->problemOrderList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->problemOrderList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->packageList !== null) {
			
			$xfer += $output->writeFieldBegin('packageList');
			
			if (!is_array($this->packageList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->packageList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cscRefundList !== null) {
			
			$xfer += $output->writeFieldBegin('cscRefundList');
			
			if (!is_array($this->cscRefundList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->cscRefundList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->finalStatus !== null) {
			
			$xfer += $output->writeFieldBegin('finalStatus');
			$xfer += $output->writeI32($this->finalStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->hasOpereate !== null) {
			
			$xfer += $output->writeFieldBegin('hasOpereate');
			$xfer += $output->writeI32($this->hasOpereate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->eximType !== null) {
			
			$xfer += $output->writeFieldBegin('eximType');
			$xfer += $output->writeString($this->eximType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerEncrypt !== null) {
			
			$xfer += $output->writeFieldBegin('buyerEncrypt');
			$xfer += $output->writeString($this->buyerEncrypt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->addressEncrypt !== null) {
			
			$xfer += $output->writeFieldBegin('addressEncrypt');
			$xfer += $output->writeString($this->addressEncrypt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->telEncrypt !== null) {
			
			$xfer += $output->writeFieldBegin('telEncrypt');
			$xfer += $output->writeString($this->telEncrypt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mobileEncrypt !== null) {
			
			$xfer += $output->writeFieldBegin('mobileEncrypt');
			$xfer += $output->writeString($this->mobileEncrypt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->yunPeiType !== null) {
			
			$xfer += $output->writeFieldBegin('yunPeiType');
			$xfer += $output->writeI32($this->yunPeiType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->yunPeiTypeName !== null) {
			
			$xfer += $output->writeFieldBegin('yunPeiTypeName');
			$xfer += $output->writeString($this->yunPeiTypeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsBizFlags !== null) {
			
			$xfer += $output->writeFieldBegin('goodsBizFlags');
			$xfer += $output->writeString($this->goodsBizFlags);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderBizFlagList !== null) {
			
			$xfer += $output->writeFieldBegin('orderBizFlagList');
			
			if (!is_array($this->orderBizFlagList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->orderBizFlagList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reDeliverPackageList !== null) {
			
			$xfer += $output->writeFieldBegin('reDeliverPackageList');
			
			if (!is_array($this->reDeliverPackageList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->reDeliverPackageList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->hebaoIdentificationCode !== null) {
			
			$xfer += $output->writeFieldBegin('hebaoIdentificationCode');
			$xfer += $output->writeString($this->hebaoIdentificationCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isCreateTransport !== null) {
			
			$xfer += $output->writeFieldBegin('isCreateTransport');
			$xfer += $output->writeByte($this->isCreateTransport);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isShipOrCancel !== null) {
			
			$xfer += $output->writeFieldBegin('isShipOrCancel');
			$xfer += $output->writeByte($this->isShipOrCancel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isPrint !== null) {
			
			$xfer += $output->writeFieldBegin('isPrint');
			$xfer += $output->writeByte($this->isPrint);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderType !== null) {
			
			$xfer += $output->writeFieldBegin('orderType');
			$xfer += $output->writeString($this->orderType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->street !== null) {
			
			$xfer += $output->writeFieldBegin('street');
			$xfer += $output->writeString($this->street);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportConfirm !== null) {
			
			$xfer += $output->writeFieldBegin('transportConfirm');
			$xfer += $output->writeByte($this->transportConfirm);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportNoType !== null) {
			
			$xfer += $output->writeFieldBegin('transportNoType');
			$xfer += $output->writeByte($this->transportNoType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->controlAddress !== null) {
			
			$xfer += $output->writeFieldBegin('controlAddress');
			$xfer += $output->writeByte($this->controlAddress);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderLabelList !== null) {
			
			$xfer += $output->writeFieldBegin('orderLabelList');
			
			if (!is_array($this->orderLabelList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->orderLabelList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->controlInvalidTime !== null) {
			
			$xfer += $output->writeFieldBegin('controlInvalidTime');
			$xfer += $output->writeString($this->controlInvalidTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->controlEventName !== null) {
			
			$xfer += $output->writeFieldBegin('controlEventName');
			$xfer += $output->writeString($this->controlEventName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderPlanTime !== null) {
			
			$xfer += $output->writeFieldBegin('orderPlanTime');
			
			if (!is_object($this->orderPlanTime)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->orderPlanTime->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cancelAuditStatus !== null) {
			
			$xfer += $output->writeFieldBegin('cancelAuditStatus');
			$xfer += $output->writeString($this->cancelAuditStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payTime !== null) {
			
			$xfer += $output->writeFieldBegin('payTime');
			$xfer += $output->writeString($this->payTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cscRemarkList !== null) {
			
			$xfer += $output->writeFieldBegin('cscRemarkList');
			
			if (!is_array($this->cscRemarkList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->cscRemarkList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeRemarkList !== null) {
			
			$xfer += $output->writeFieldBegin('storeRemarkList');
			
			if (!is_array($this->storeRemarkList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->storeRemarkList as $iter0){
				
				
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