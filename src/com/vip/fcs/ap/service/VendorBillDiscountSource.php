<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\ap\service;

class VendorBillDiscountSource {
	
	static $_TSPEC;
	public $dbNo = null;
	public $itemSize = null;
	public $vendorGoodsNo = null;
	public $poDeliveryType = null;
	public $priceTime = null;
	public $extOrderNum = null;
	public $deliveryWarehouseCode = null;
	public $deliveryWarehouseName = null;
	public $claimType = null;
	public $applyQuantity = null;
	public $actualQuantity = null;
	public $workNo = null;
	public $workSolvedTime = null;
	public $errorItemNo = null;
	public $judgedBy = null;
	public $extBillTaxPrice = null;
	public $extSumFavPrice = null;
	public $extSumVendorFavPrice = null;
	public $extBasePrice = null;
	public $extPoDeliveryTypeName = null;
	public $extGrossMarginRate = null;
	public $extWarehouseExt = null;
	public $specialOrderCategory = null;
	public $specialScheduleId = null;
	public $specialRelatedOrder = null;
	public $extendField = null;
	public $globalId = null;
	public $vendorId = null;
	public $vendorCode = null;
	public $vendorName = null;
	public $orgId = null;
	public $orgName = null;
	public $warehouse = null;
	public $scheduleId = null;
	public $scheduleName = null;
	public $brandId = null;
	public $vBrandName = null;
	public $poNo = null;
	public $poCreationDate = null;
	public $origPoNo = null;
	public $orderNum = null;
	public $orderDate = null;
	public $itemNo = null;
	public $itemDescription = null;
	public $goodsNo = null;
	public $brandCode = null;
	public $brandName = null;
	public $transactionQuantity = null;
	public $dataSign = null;
	public $orderPrice = null;
	public $currencyCode = null;
	public $taxRate = null;
	public $periodName = null;
	public $transactionTypeId = null;
	public $transactionDate = null;
	public $payableBillAmount = null;
	public $vendorRate = null;
	public $confirmNo = null;
	public $salePlatform = null;
	public $salePlatformName = null;
	public $createdTime = null;
	public $updatedTime = null;
	public $isDeleted = null;
	public $grossMarginRate = null;
	public $remark = null;
	public $poPrice = null;
	public $poTaxPrice = null;
	public $payableTotalBillAmount = null;
	public $detailLineType = null;
	public $warehouseExt = null;
	public $sourceId = null;
	public $activeType = null;
	public $activeTypeName = null;
	public $actParentNo = null;
	public $actParentName = null;
	public $discountLevel = null;
	public $redPacketValue = null;
	public $activeBeginTime = null;
	public $billAmount = null;
	public $totalBillAmount = null;
	public $favPrice = null;
	public $totalAmount = null;
	public $vendorRedpacketCount = null;
	public $enterTotalBillAmount = null;
	public $enterPayableTotalBillAmount = null;
	public $masterScheduleId = null;
	public $sourceOrderNo = null;
	public $sourceTotalAmount = null;
	public $sourceTotalDiscountAmount = null;
	public $businessType = null;
	public $processingType = null;
	public $referenceBillNumber = null;
	public $transactionType = null;
	public $transactionTypeName = null;
	public $billType = null;
	public $discountConversionRate = null;
	public $salesChannel = null;
	public $orderStatus = null;
	public $invPo = null;
	public $grossMargin = null;
	public $invGlobalId = null;
	public $actVendorAmount = null;
	public $saleBrandId = null;
	public $rateMid = null;
	public $isAdjustLine = null;
	public $origActVendorRate = null;
	public $origActVendorAmount = null;
	public $newActVendorRate = null;
	public $newActVendorAmount = null;
	public $adjustReason = null;
	public $poWareHouseType = null;
	public $activeTypeNameStr = null;
	public $v2TrxDate = null;
	public $stageBillNumber = null;
	public $residualBillNumber = null;
	public $vendorOrderNum = null;
	public $vendorOrderBilledFlag = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			501 => array(
			'var' => 'dbNo'
			),
			502 => array(
			'var' => 'itemSize'
			),
			503 => array(
			'var' => 'vendorGoodsNo'
			),
			504 => array(
			'var' => 'poDeliveryType'
			),
			505 => array(
			'var' => 'priceTime'
			),
			506 => array(
			'var' => 'extOrderNum'
			),
			507 => array(
			'var' => 'deliveryWarehouseCode'
			),
			508 => array(
			'var' => 'deliveryWarehouseName'
			),
			509 => array(
			'var' => 'claimType'
			),
			510 => array(
			'var' => 'applyQuantity'
			),
			511 => array(
			'var' => 'actualQuantity'
			),
			512 => array(
			'var' => 'workNo'
			),
			513 => array(
			'var' => 'workSolvedTime'
			),
			514 => array(
			'var' => 'errorItemNo'
			),
			515 => array(
			'var' => 'judgedBy'
			),
			516 => array(
			'var' => 'extBillTaxPrice'
			),
			517 => array(
			'var' => 'extSumFavPrice'
			),
			518 => array(
			'var' => 'extSumVendorFavPrice'
			),
			519 => array(
			'var' => 'extBasePrice'
			),
			520 => array(
			'var' => 'extPoDeliveryTypeName'
			),
			521 => array(
			'var' => 'extGrossMarginRate'
			),
			522 => array(
			'var' => 'extWarehouseExt'
			),
			523 => array(
			'var' => 'specialOrderCategory'
			),
			524 => array(
			'var' => 'specialScheduleId'
			),
			525 => array(
			'var' => 'specialRelatedOrder'
			),
			526 => array(
			'var' => 'extendField'
			),
			1 => array(
			'var' => 'globalId'
			),
			2 => array(
			'var' => 'vendorId'
			),
			3 => array(
			'var' => 'vendorCode'
			),
			4 => array(
			'var' => 'vendorName'
			),
			6 => array(
			'var' => 'orgId'
			),
			7 => array(
			'var' => 'orgName'
			),
			8 => array(
			'var' => 'warehouse'
			),
			9 => array(
			'var' => 'scheduleId'
			),
			10 => array(
			'var' => 'scheduleName'
			),
			11 => array(
			'var' => 'brandId'
			),
			12 => array(
			'var' => 'vBrandName'
			),
			13 => array(
			'var' => 'poNo'
			),
			14 => array(
			'var' => 'poCreationDate'
			),
			15 => array(
			'var' => 'origPoNo'
			),
			16 => array(
			'var' => 'orderNum'
			),
			17 => array(
			'var' => 'orderDate'
			),
			18 => array(
			'var' => 'itemNo'
			),
			19 => array(
			'var' => 'itemDescription'
			),
			20 => array(
			'var' => 'goodsNo'
			),
			21 => array(
			'var' => 'brandCode'
			),
			22 => array(
			'var' => 'brandName'
			),
			23 => array(
			'var' => 'transactionQuantity'
			),
			24 => array(
			'var' => 'dataSign'
			),
			25 => array(
			'var' => 'orderPrice'
			),
			26 => array(
			'var' => 'currencyCode'
			),
			27 => array(
			'var' => 'taxRate'
			),
			28 => array(
			'var' => 'periodName'
			),
			29 => array(
			'var' => 'transactionTypeId'
			),
			30 => array(
			'var' => 'transactionDate'
			),
			31 => array(
			'var' => 'payableBillAmount'
			),
			33 => array(
			'var' => 'vendorRate'
			),
			34 => array(
			'var' => 'confirmNo'
			),
			35 => array(
			'var' => 'salePlatform'
			),
			36 => array(
			'var' => 'salePlatformName'
			),
			37 => array(
			'var' => 'createdTime'
			),
			38 => array(
			'var' => 'updatedTime'
			),
			39 => array(
			'var' => 'isDeleted'
			),
			40 => array(
			'var' => 'grossMarginRate'
			),
			41 => array(
			'var' => 'remark'
			),
			42 => array(
			'var' => 'poPrice'
			),
			43 => array(
			'var' => 'poTaxPrice'
			),
			48 => array(
			'var' => 'payableTotalBillAmount'
			),
			49 => array(
			'var' => 'detailLineType'
			),
			50 => array(
			'var' => 'warehouseExt'
			),
			100 => array(
			'var' => 'sourceId'
			),
			101 => array(
			'var' => 'activeType'
			),
			102 => array(
			'var' => 'activeTypeName'
			),
			103 => array(
			'var' => 'actParentNo'
			),
			104 => array(
			'var' => 'actParentName'
			),
			105 => array(
			'var' => 'discountLevel'
			),
			106 => array(
			'var' => 'redPacketValue'
			),
			107 => array(
			'var' => 'activeBeginTime'
			),
			108 => array(
			'var' => 'billAmount'
			),
			109 => array(
			'var' => 'totalBillAmount'
			),
			110 => array(
			'var' => 'favPrice'
			),
			111 => array(
			'var' => 'totalAmount'
			),
			112 => array(
			'var' => 'vendorRedpacketCount'
			),
			113 => array(
			'var' => 'enterTotalBillAmount'
			),
			114 => array(
			'var' => 'enterPayableTotalBillAmount'
			),
			116 => array(
			'var' => 'masterScheduleId'
			),
			117 => array(
			'var' => 'sourceOrderNo'
			),
			118 => array(
			'var' => 'sourceTotalAmount'
			),
			119 => array(
			'var' => 'sourceTotalDiscountAmount'
			),
			121 => array(
			'var' => 'businessType'
			),
			122 => array(
			'var' => 'processingType'
			),
			123 => array(
			'var' => 'referenceBillNumber'
			),
			124 => array(
			'var' => 'transactionType'
			),
			125 => array(
			'var' => 'transactionTypeName'
			),
			126 => array(
			'var' => 'billType'
			),
			127 => array(
			'var' => 'discountConversionRate'
			),
			128 => array(
			'var' => 'salesChannel'
			),
			129 => array(
			'var' => 'orderStatus'
			),
			131 => array(
			'var' => 'invPo'
			),
			132 => array(
			'var' => 'grossMargin'
			),
			133 => array(
			'var' => 'invGlobalId'
			),
			134 => array(
			'var' => 'actVendorAmount'
			),
			135 => array(
			'var' => 'saleBrandId'
			),
			136 => array(
			'var' => 'rateMid'
			),
			137 => array(
			'var' => 'isAdjustLine'
			),
			138 => array(
			'var' => 'origActVendorRate'
			),
			139 => array(
			'var' => 'origActVendorAmount'
			),
			140 => array(
			'var' => 'newActVendorRate'
			),
			141 => array(
			'var' => 'newActVendorAmount'
			),
			142 => array(
			'var' => 'adjustReason'
			),
			143 => array(
			'var' => 'poWareHouseType'
			),
			144 => array(
			'var' => 'activeTypeNameStr'
			),
			145 => array(
			'var' => 'v2TrxDate'
			),
			146 => array(
			'var' => 'stageBillNumber'
			),
			147 => array(
			'var' => 'residualBillNumber'
			),
			148 => array(
			'var' => 'vendorOrderNum'
			),
			149 => array(
			'var' => 'vendorOrderBilledFlag'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['dbNo'])){
				
				$this->dbNo = $vals['dbNo'];
			}
			
			
			if (isset($vals['itemSize'])){
				
				$this->itemSize = $vals['itemSize'];
			}
			
			
			if (isset($vals['vendorGoodsNo'])){
				
				$this->vendorGoodsNo = $vals['vendorGoodsNo'];
			}
			
			
			if (isset($vals['poDeliveryType'])){
				
				$this->poDeliveryType = $vals['poDeliveryType'];
			}
			
			
			if (isset($vals['priceTime'])){
				
				$this->priceTime = $vals['priceTime'];
			}
			
			
			if (isset($vals['extOrderNum'])){
				
				$this->extOrderNum = $vals['extOrderNum'];
			}
			
			
			if (isset($vals['deliveryWarehouseCode'])){
				
				$this->deliveryWarehouseCode = $vals['deliveryWarehouseCode'];
			}
			
			
			if (isset($vals['deliveryWarehouseName'])){
				
				$this->deliveryWarehouseName = $vals['deliveryWarehouseName'];
			}
			
			
			if (isset($vals['claimType'])){
				
				$this->claimType = $vals['claimType'];
			}
			
			
			if (isset($vals['applyQuantity'])){
				
				$this->applyQuantity = $vals['applyQuantity'];
			}
			
			
			if (isset($vals['actualQuantity'])){
				
				$this->actualQuantity = $vals['actualQuantity'];
			}
			
			
			if (isset($vals['workNo'])){
				
				$this->workNo = $vals['workNo'];
			}
			
			
			if (isset($vals['workSolvedTime'])){
				
				$this->workSolvedTime = $vals['workSolvedTime'];
			}
			
			
			if (isset($vals['errorItemNo'])){
				
				$this->errorItemNo = $vals['errorItemNo'];
			}
			
			
			if (isset($vals['judgedBy'])){
				
				$this->judgedBy = $vals['judgedBy'];
			}
			
			
			if (isset($vals['extBillTaxPrice'])){
				
				$this->extBillTaxPrice = $vals['extBillTaxPrice'];
			}
			
			
			if (isset($vals['extSumFavPrice'])){
				
				$this->extSumFavPrice = $vals['extSumFavPrice'];
			}
			
			
			if (isset($vals['extSumVendorFavPrice'])){
				
				$this->extSumVendorFavPrice = $vals['extSumVendorFavPrice'];
			}
			
			
			if (isset($vals['extBasePrice'])){
				
				$this->extBasePrice = $vals['extBasePrice'];
			}
			
			
			if (isset($vals['extPoDeliveryTypeName'])){
				
				$this->extPoDeliveryTypeName = $vals['extPoDeliveryTypeName'];
			}
			
			
			if (isset($vals['extGrossMarginRate'])){
				
				$this->extGrossMarginRate = $vals['extGrossMarginRate'];
			}
			
			
			if (isset($vals['extWarehouseExt'])){
				
				$this->extWarehouseExt = $vals['extWarehouseExt'];
			}
			
			
			if (isset($vals['specialOrderCategory'])){
				
				$this->specialOrderCategory = $vals['specialOrderCategory'];
			}
			
			
			if (isset($vals['specialScheduleId'])){
				
				$this->specialScheduleId = $vals['specialScheduleId'];
			}
			
			
			if (isset($vals['specialRelatedOrder'])){
				
				$this->specialRelatedOrder = $vals['specialRelatedOrder'];
			}
			
			
			if (isset($vals['extendField'])){
				
				$this->extendField = $vals['extendField'];
			}
			
			
			if (isset($vals['globalId'])){
				
				$this->globalId = $vals['globalId'];
			}
			
			
			if (isset($vals['vendorId'])){
				
				$this->vendorId = $vals['vendorId'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['vendorName'])){
				
				$this->vendorName = $vals['vendorName'];
			}
			
			
			if (isset($vals['orgId'])){
				
				$this->orgId = $vals['orgId'];
			}
			
			
			if (isset($vals['orgName'])){
				
				$this->orgName = $vals['orgName'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['scheduleId'])){
				
				$this->scheduleId = $vals['scheduleId'];
			}
			
			
			if (isset($vals['scheduleName'])){
				
				$this->scheduleName = $vals['scheduleName'];
			}
			
			
			if (isset($vals['brandId'])){
				
				$this->brandId = $vals['brandId'];
			}
			
			
			if (isset($vals['vBrandName'])){
				
				$this->vBrandName = $vals['vBrandName'];
			}
			
			
			if (isset($vals['poNo'])){
				
				$this->poNo = $vals['poNo'];
			}
			
			
			if (isset($vals['poCreationDate'])){
				
				$this->poCreationDate = $vals['poCreationDate'];
			}
			
			
			if (isset($vals['origPoNo'])){
				
				$this->origPoNo = $vals['origPoNo'];
			}
			
			
			if (isset($vals['orderNum'])){
				
				$this->orderNum = $vals['orderNum'];
			}
			
			
			if (isset($vals['orderDate'])){
				
				$this->orderDate = $vals['orderDate'];
			}
			
			
			if (isset($vals['itemNo'])){
				
				$this->itemNo = $vals['itemNo'];
			}
			
			
			if (isset($vals['itemDescription'])){
				
				$this->itemDescription = $vals['itemDescription'];
			}
			
			
			if (isset($vals['goodsNo'])){
				
				$this->goodsNo = $vals['goodsNo'];
			}
			
			
			if (isset($vals['brandCode'])){
				
				$this->brandCode = $vals['brandCode'];
			}
			
			
			if (isset($vals['brandName'])){
				
				$this->brandName = $vals['brandName'];
			}
			
			
			if (isset($vals['transactionQuantity'])){
				
				$this->transactionQuantity = $vals['transactionQuantity'];
			}
			
			
			if (isset($vals['dataSign'])){
				
				$this->dataSign = $vals['dataSign'];
			}
			
			
			if (isset($vals['orderPrice'])){
				
				$this->orderPrice = $vals['orderPrice'];
			}
			
			
			if (isset($vals['currencyCode'])){
				
				$this->currencyCode = $vals['currencyCode'];
			}
			
			
			if (isset($vals['taxRate'])){
				
				$this->taxRate = $vals['taxRate'];
			}
			
			
			if (isset($vals['periodName'])){
				
				$this->periodName = $vals['periodName'];
			}
			
			
			if (isset($vals['transactionTypeId'])){
				
				$this->transactionTypeId = $vals['transactionTypeId'];
			}
			
			
			if (isset($vals['transactionDate'])){
				
				$this->transactionDate = $vals['transactionDate'];
			}
			
			
			if (isset($vals['payableBillAmount'])){
				
				$this->payableBillAmount = $vals['payableBillAmount'];
			}
			
			
			if (isset($vals['vendorRate'])){
				
				$this->vendorRate = $vals['vendorRate'];
			}
			
			
			if (isset($vals['confirmNo'])){
				
				$this->confirmNo = $vals['confirmNo'];
			}
			
			
			if (isset($vals['salePlatform'])){
				
				$this->salePlatform = $vals['salePlatform'];
			}
			
			
			if (isset($vals['salePlatformName'])){
				
				$this->salePlatformName = $vals['salePlatformName'];
			}
			
			
			if (isset($vals['createdTime'])){
				
				$this->createdTime = $vals['createdTime'];
			}
			
			
			if (isset($vals['updatedTime'])){
				
				$this->updatedTime = $vals['updatedTime'];
			}
			
			
			if (isset($vals['isDeleted'])){
				
				$this->isDeleted = $vals['isDeleted'];
			}
			
			
			if (isset($vals['grossMarginRate'])){
				
				$this->grossMarginRate = $vals['grossMarginRate'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['poPrice'])){
				
				$this->poPrice = $vals['poPrice'];
			}
			
			
			if (isset($vals['poTaxPrice'])){
				
				$this->poTaxPrice = $vals['poTaxPrice'];
			}
			
			
			if (isset($vals['payableTotalBillAmount'])){
				
				$this->payableTotalBillAmount = $vals['payableTotalBillAmount'];
			}
			
			
			if (isset($vals['detailLineType'])){
				
				$this->detailLineType = $vals['detailLineType'];
			}
			
			
			if (isset($vals['warehouseExt'])){
				
				$this->warehouseExt = $vals['warehouseExt'];
			}
			
			
			if (isset($vals['sourceId'])){
				
				$this->sourceId = $vals['sourceId'];
			}
			
			
			if (isset($vals['activeType'])){
				
				$this->activeType = $vals['activeType'];
			}
			
			
			if (isset($vals['activeTypeName'])){
				
				$this->activeTypeName = $vals['activeTypeName'];
			}
			
			
			if (isset($vals['actParentNo'])){
				
				$this->actParentNo = $vals['actParentNo'];
			}
			
			
			if (isset($vals['actParentName'])){
				
				$this->actParentName = $vals['actParentName'];
			}
			
			
			if (isset($vals['discountLevel'])){
				
				$this->discountLevel = $vals['discountLevel'];
			}
			
			
			if (isset($vals['redPacketValue'])){
				
				$this->redPacketValue = $vals['redPacketValue'];
			}
			
			
			if (isset($vals['activeBeginTime'])){
				
				$this->activeBeginTime = $vals['activeBeginTime'];
			}
			
			
			if (isset($vals['billAmount'])){
				
				$this->billAmount = $vals['billAmount'];
			}
			
			
			if (isset($vals['totalBillAmount'])){
				
				$this->totalBillAmount = $vals['totalBillAmount'];
			}
			
			
			if (isset($vals['favPrice'])){
				
				$this->favPrice = $vals['favPrice'];
			}
			
			
			if (isset($vals['totalAmount'])){
				
				$this->totalAmount = $vals['totalAmount'];
			}
			
			
			if (isset($vals['vendorRedpacketCount'])){
				
				$this->vendorRedpacketCount = $vals['vendorRedpacketCount'];
			}
			
			
			if (isset($vals['enterTotalBillAmount'])){
				
				$this->enterTotalBillAmount = $vals['enterTotalBillAmount'];
			}
			
			
			if (isset($vals['enterPayableTotalBillAmount'])){
				
				$this->enterPayableTotalBillAmount = $vals['enterPayableTotalBillAmount'];
			}
			
			
			if (isset($vals['masterScheduleId'])){
				
				$this->masterScheduleId = $vals['masterScheduleId'];
			}
			
			
			if (isset($vals['sourceOrderNo'])){
				
				$this->sourceOrderNo = $vals['sourceOrderNo'];
			}
			
			
			if (isset($vals['sourceTotalAmount'])){
				
				$this->sourceTotalAmount = $vals['sourceTotalAmount'];
			}
			
			
			if (isset($vals['sourceTotalDiscountAmount'])){
				
				$this->sourceTotalDiscountAmount = $vals['sourceTotalDiscountAmount'];
			}
			
			
			if (isset($vals['businessType'])){
				
				$this->businessType = $vals['businessType'];
			}
			
			
			if (isset($vals['processingType'])){
				
				$this->processingType = $vals['processingType'];
			}
			
			
			if (isset($vals['referenceBillNumber'])){
				
				$this->referenceBillNumber = $vals['referenceBillNumber'];
			}
			
			
			if (isset($vals['transactionType'])){
				
				$this->transactionType = $vals['transactionType'];
			}
			
			
			if (isset($vals['transactionTypeName'])){
				
				$this->transactionTypeName = $vals['transactionTypeName'];
			}
			
			
			if (isset($vals['billType'])){
				
				$this->billType = $vals['billType'];
			}
			
			
			if (isset($vals['discountConversionRate'])){
				
				$this->discountConversionRate = $vals['discountConversionRate'];
			}
			
			
			if (isset($vals['salesChannel'])){
				
				$this->salesChannel = $vals['salesChannel'];
			}
			
			
			if (isset($vals['orderStatus'])){
				
				$this->orderStatus = $vals['orderStatus'];
			}
			
			
			if (isset($vals['invPo'])){
				
				$this->invPo = $vals['invPo'];
			}
			
			
			if (isset($vals['grossMargin'])){
				
				$this->grossMargin = $vals['grossMargin'];
			}
			
			
			if (isset($vals['invGlobalId'])){
				
				$this->invGlobalId = $vals['invGlobalId'];
			}
			
			
			if (isset($vals['actVendorAmount'])){
				
				$this->actVendorAmount = $vals['actVendorAmount'];
			}
			
			
			if (isset($vals['saleBrandId'])){
				
				$this->saleBrandId = $vals['saleBrandId'];
			}
			
			
			if (isset($vals['rateMid'])){
				
				$this->rateMid = $vals['rateMid'];
			}
			
			
			if (isset($vals['isAdjustLine'])){
				
				$this->isAdjustLine = $vals['isAdjustLine'];
			}
			
			
			if (isset($vals['origActVendorRate'])){
				
				$this->origActVendorRate = $vals['origActVendorRate'];
			}
			
			
			if (isset($vals['origActVendorAmount'])){
				
				$this->origActVendorAmount = $vals['origActVendorAmount'];
			}
			
			
			if (isset($vals['newActVendorRate'])){
				
				$this->newActVendorRate = $vals['newActVendorRate'];
			}
			
			
			if (isset($vals['newActVendorAmount'])){
				
				$this->newActVendorAmount = $vals['newActVendorAmount'];
			}
			
			
			if (isset($vals['adjustReason'])){
				
				$this->adjustReason = $vals['adjustReason'];
			}
			
			
			if (isset($vals['poWareHouseType'])){
				
				$this->poWareHouseType = $vals['poWareHouseType'];
			}
			
			
			if (isset($vals['activeTypeNameStr'])){
				
				$this->activeTypeNameStr = $vals['activeTypeNameStr'];
			}
			
			
			if (isset($vals['v2TrxDate'])){
				
				$this->v2TrxDate = $vals['v2TrxDate'];
			}
			
			
			if (isset($vals['stageBillNumber'])){
				
				$this->stageBillNumber = $vals['stageBillNumber'];
			}
			
			
			if (isset($vals['residualBillNumber'])){
				
				$this->residualBillNumber = $vals['residualBillNumber'];
			}
			
			
			if (isset($vals['vendorOrderNum'])){
				
				$this->vendorOrderNum = $vals['vendorOrderNum'];
			}
			
			
			if (isset($vals['vendorOrderBilledFlag'])){
				
				$this->vendorOrderBilledFlag = $vals['vendorOrderBilledFlag'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'VendorBillDiscountSource';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("dbNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dbNo);
				
			}
			
			
			
			
			if ("itemSize" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->itemSize);
				
			}
			
			
			
			
			if ("vendorGoodsNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorGoodsNo);
				
			}
			
			
			
			
			if ("poDeliveryType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poDeliveryType);
				
			}
			
			
			
			
			if ("priceTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->priceTime);
				
			}
			
			
			
			
			if ("extOrderNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->extOrderNum);
				
			}
			
			
			
			
			if ("deliveryWarehouseCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deliveryWarehouseCode);
				
			}
			
			
			
			
			if ("deliveryWarehouseName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deliveryWarehouseName);
				
			}
			
			
			
			
			if ("claimType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->claimType);
				
			}
			
			
			
			
			if ("applyQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->applyQuantity);
				
			}
			
			
			
			
			if ("actualQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->actualQuantity);
				
			}
			
			
			
			
			if ("workNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->workNo);
				
			}
			
			
			
			
			if ("workSolvedTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->workSolvedTime);
				
			}
			
			
			
			
			if ("errorItemNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->errorItemNo);
				
			}
			
			
			
			
			if ("judgedBy" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->judgedBy);
				
			}
			
			
			
			
			if ("extBillTaxPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->extBillTaxPrice);
				
			}
			
			
			
			
			if ("extSumFavPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->extSumFavPrice);
				
			}
			
			
			
			
			if ("extSumVendorFavPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->extSumVendorFavPrice);
				
			}
			
			
			
			
			if ("extBasePrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->extBasePrice);
				
			}
			
			
			
			
			if ("extPoDeliveryTypeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->extPoDeliveryTypeName);
				
			}
			
			
			
			
			if ("extGrossMarginRate" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->extGrossMarginRate);
				
			}
			
			
			
			
			if ("extWarehouseExt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->extWarehouseExt);
				
			}
			
			
			
			
			if ("specialOrderCategory" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->specialOrderCategory);
				
			}
			
			
			
			
			if ("specialScheduleId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->specialScheduleId);
				
			}
			
			
			
			
			if ("specialRelatedOrder" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->specialRelatedOrder);
				
			}
			
			
			
			
			if ("extendField" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->extendField);
				
			}
			
			
			
			
			if ("globalId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->globalId); 
				
			}
			
			
			
			
			if ("vendorId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->vendorId); 
				
			}
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCode);
				
			}
			
			
			
			
			if ("vendorName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorName);
				
			}
			
			
			
			
			if ("orgId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orgId);
				
			}
			
			
			
			
			if ("orgName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orgName);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("scheduleId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->scheduleId);
				
			}
			
			
			
			
			if ("scheduleName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->scheduleName);
				
			}
			
			
			
			
			if ("brandId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandId);
				
			}
			
			
			
			
			if ("vBrandName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vBrandName);
				
			}
			
			
			
			
			if ("poNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poNo);
				
			}
			
			
			
			
			if ("poCreationDate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poCreationDate);
				
			}
			
			
			
			
			if ("origPoNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->origPoNo);
				
			}
			
			
			
			
			if ("orderNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderNum);
				
			}
			
			
			
			
			if ("orderDate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderDate);
				
			}
			
			
			
			
			if ("itemNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->itemNo);
				
			}
			
			
			
			
			if ("itemDescription" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->itemDescription);
				
			}
			
			
			
			
			if ("goodsNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsNo);
				
			}
			
			
			
			
			if ("brandCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandCode);
				
			}
			
			
			
			
			if ("brandName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandName);
				
			}
			
			
			
			
			if ("transactionQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->transactionQuantity);
				
			}
			
			
			
			
			if ("dataSign" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->dataSign); 
				
			}
			
			
			
			
			if ("orderPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderPrice);
				
			}
			
			
			
			
			if ("currencyCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->currencyCode);
				
			}
			
			
			
			
			if ("taxRate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->taxRate);
				
			}
			
			
			
			
			if ("periodName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->periodName);
				
			}
			
			
			
			
			if ("transactionTypeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transactionTypeId);
				
			}
			
			
			
			
			if ("transactionDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->transactionDate);
				
			}
			
			
			
			
			if ("payableBillAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->payableBillAmount);
				
			}
			
			
			
			
			if ("vendorRate" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->vendorRate);
				
			}
			
			
			
			
			if ("confirmNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->confirmNo);
				
			}
			
			
			
			
			if ("salePlatform" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->salePlatform);
				
			}
			
			
			
			
			if ("salePlatformName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->salePlatformName);
				
			}
			
			
			
			
			if ("createdTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createdTime);
				
			}
			
			
			
			
			if ("updatedTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updatedTime);
				
			}
			
			
			
			
			if ("isDeleted" == $schemeField){
				
				$needSkip = false;
				$input->readI16($this->isDeleted); 
				
			}
			
			
			
			
			if ("grossMarginRate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->grossMarginRate);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("poPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->poPrice);
				
			}
			
			
			
			
			if ("poTaxPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->poTaxPrice);
				
			}
			
			
			
			
			if ("payableTotalBillAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->payableTotalBillAmount);
				
			}
			
			
			
			
			if ("detailLineType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->detailLineType);
				
			}
			
			
			
			
			if ("warehouseExt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseExt);
				
			}
			
			
			
			
			if ("sourceId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->sourceId); 
				
			}
			
			
			
			
			if ("activeType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->activeType);
				
			}
			
			
			
			
			if ("activeTypeName" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->activeTypeName); 
				
			}
			
			
			
			
			if ("actParentNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actParentNo);
				
			}
			
			
			
			
			if ("actParentName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actParentName);
				
			}
			
			
			
			
			if ("discountLevel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->discountLevel);
				
			}
			
			
			
			
			if ("redPacketValue" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->redPacketValue);
				
			}
			
			
			
			
			if ("activeBeginTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->activeBeginTime);
				
			}
			
			
			
			
			if ("billAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->billAmount);
				
			}
			
			
			
			
			if ("totalBillAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->totalBillAmount);
				
			}
			
			
			
			
			if ("favPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->favPrice);
				
			}
			
			
			
			
			if ("totalAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->totalAmount);
				
			}
			
			
			
			
			if ("vendorRedpacketCount" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->vendorRedpacketCount); 
				
			}
			
			
			
			
			if ("enterTotalBillAmount" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->enterTotalBillAmount); 
				
			}
			
			
			
			
			if ("enterPayableTotalBillAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->enterPayableTotalBillAmount);
				
			}
			
			
			
			
			if ("masterScheduleId" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->masterScheduleId);
				
			}
			
			
			
			
			if ("sourceOrderNo" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->sourceOrderNo);
				
			}
			
			
			
			
			if ("sourceTotalAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->sourceTotalAmount);
				
			}
			
			
			
			
			if ("sourceTotalDiscountAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->sourceTotalDiscountAmount);
				
			}
			
			
			
			
			if ("businessType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->businessType);
				
			}
			
			
			
			
			if ("processingType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->processingType);
				
			}
			
			
			
			
			if ("referenceBillNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->referenceBillNumber);
				
			}
			
			
			
			
			if ("transactionType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transactionType);
				
			}
			
			
			
			
			if ("transactionTypeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transactionTypeName);
				
			}
			
			
			
			
			if ("billType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->billType);
				
			}
			
			
			
			
			if ("discountConversionRate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->discountConversionRate);
				
			}
			
			
			
			
			if ("salesChannel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->salesChannel);
				
			}
			
			
			
			
			if ("orderStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderStatus);
				
			}
			
			
			
			
			if ("invPo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invPo);
				
			}
			
			
			
			
			if ("grossMargin" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->grossMargin);
				
			}
			
			
			
			
			if ("invGlobalId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->invGlobalId); 
				
			}
			
			
			
			
			if ("actVendorAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->actVendorAmount);
				
			}
			
			
			
			
			if ("saleBrandId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->saleBrandId);
				
			}
			
			
			
			
			if ("rateMid" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->rateMid); 
				
			}
			
			
			
			
			if ("isAdjustLine" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->isAdjustLine);
				
			}
			
			
			
			
			if ("origActVendorRate" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->origActVendorRate);
				
			}
			
			
			
			
			if ("origActVendorAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->origActVendorAmount);
				
			}
			
			
			
			
			if ("newActVendorRate" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->newActVendorRate);
				
			}
			
			
			
			
			if ("newActVendorAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->newActVendorAmount);
				
			}
			
			
			
			
			if ("adjustReason" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->adjustReason);
				
			}
			
			
			
			
			if ("poWareHouseType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poWareHouseType);
				
			}
			
			
			
			
			if ("activeTypeNameStr" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->activeTypeNameStr);
				
			}
			
			
			
			
			if ("v2TrxDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->v2TrxDate);
				
			}
			
			
			
			
			if ("stageBillNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->stageBillNumber);
				
			}
			
			
			
			
			if ("residualBillNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->residualBillNumber);
				
			}
			
			
			
			
			if ("vendorOrderNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorOrderNum);
				
			}
			
			
			
			
			if ("vendorOrderBilledFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorOrderBilledFlag);
				
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
		
		if($this->dbNo !== null) {
			
			$xfer += $output->writeFieldBegin('dbNo');
			$xfer += $output->writeString($this->dbNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->itemSize !== null) {
			
			$xfer += $output->writeFieldBegin('itemSize');
			$xfer += $output->writeString($this->itemSize);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorGoodsNo !== null) {
			
			$xfer += $output->writeFieldBegin('vendorGoodsNo');
			$xfer += $output->writeString($this->vendorGoodsNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poDeliveryType !== null) {
			
			$xfer += $output->writeFieldBegin('poDeliveryType');
			$xfer += $output->writeString($this->poDeliveryType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->priceTime !== null) {
			
			$xfer += $output->writeFieldBegin('priceTime');
			$xfer += $output->writeI64($this->priceTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extOrderNum !== null) {
			
			$xfer += $output->writeFieldBegin('extOrderNum');
			$xfer += $output->writeString($this->extOrderNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliveryWarehouseCode !== null) {
			
			$xfer += $output->writeFieldBegin('deliveryWarehouseCode');
			$xfer += $output->writeString($this->deliveryWarehouseCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliveryWarehouseName !== null) {
			
			$xfer += $output->writeFieldBegin('deliveryWarehouseName');
			$xfer += $output->writeString($this->deliveryWarehouseName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->claimType !== null) {
			
			$xfer += $output->writeFieldBegin('claimType');
			$xfer += $output->writeString($this->claimType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->applyQuantity !== null) {
			
			$xfer += $output->writeFieldBegin('applyQuantity');
			$xfer += $output->writeDouble($this->applyQuantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actualQuantity !== null) {
			
			$xfer += $output->writeFieldBegin('actualQuantity');
			$xfer += $output->writeDouble($this->actualQuantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->workNo !== null) {
			
			$xfer += $output->writeFieldBegin('workNo');
			$xfer += $output->writeString($this->workNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->workSolvedTime !== null) {
			
			$xfer += $output->writeFieldBegin('workSolvedTime');
			$xfer += $output->writeI64($this->workSolvedTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->errorItemNo !== null) {
			
			$xfer += $output->writeFieldBegin('errorItemNo');
			$xfer += $output->writeString($this->errorItemNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->judgedBy !== null) {
			
			$xfer += $output->writeFieldBegin('judgedBy');
			$xfer += $output->writeString($this->judgedBy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extBillTaxPrice !== null) {
			
			$xfer += $output->writeFieldBegin('extBillTaxPrice');
			$xfer += $output->writeDouble($this->extBillTaxPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extSumFavPrice !== null) {
			
			$xfer += $output->writeFieldBegin('extSumFavPrice');
			$xfer += $output->writeDouble($this->extSumFavPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extSumVendorFavPrice !== null) {
			
			$xfer += $output->writeFieldBegin('extSumVendorFavPrice');
			$xfer += $output->writeDouble($this->extSumVendorFavPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extBasePrice !== null) {
			
			$xfer += $output->writeFieldBegin('extBasePrice');
			$xfer += $output->writeDouble($this->extBasePrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extPoDeliveryTypeName !== null) {
			
			$xfer += $output->writeFieldBegin('extPoDeliveryTypeName');
			$xfer += $output->writeString($this->extPoDeliveryTypeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extGrossMarginRate !== null) {
			
			$xfer += $output->writeFieldBegin('extGrossMarginRate');
			$xfer += $output->writeDouble($this->extGrossMarginRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extWarehouseExt !== null) {
			
			$xfer += $output->writeFieldBegin('extWarehouseExt');
			$xfer += $output->writeString($this->extWarehouseExt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->specialOrderCategory !== null) {
			
			$xfer += $output->writeFieldBegin('specialOrderCategory');
			$xfer += $output->writeString($this->specialOrderCategory);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->specialScheduleId !== null) {
			
			$xfer += $output->writeFieldBegin('specialScheduleId');
			$xfer += $output->writeString($this->specialScheduleId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->specialRelatedOrder !== null) {
			
			$xfer += $output->writeFieldBegin('specialRelatedOrder');
			$xfer += $output->writeString($this->specialRelatedOrder);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extendField !== null) {
			
			$xfer += $output->writeFieldBegin('extendField');
			$xfer += $output->writeString($this->extendField);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->globalId !== null) {
			
			$xfer += $output->writeFieldBegin('globalId');
			$xfer += $output->writeI64($this->globalId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorId !== null) {
			
			$xfer += $output->writeFieldBegin('vendorId');
			$xfer += $output->writeI64($this->vendorId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorCode !== null) {
			
			$xfer += $output->writeFieldBegin('vendorCode');
			$xfer += $output->writeString($this->vendorCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorName !== null) {
			
			$xfer += $output->writeFieldBegin('vendorName');
			$xfer += $output->writeString($this->vendorName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orgId !== null) {
			
			$xfer += $output->writeFieldBegin('orgId');
			$xfer += $output->writeString($this->orgId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orgName !== null) {
			
			$xfer += $output->writeFieldBegin('orgName');
			$xfer += $output->writeString($this->orgName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->scheduleId !== null) {
			
			$xfer += $output->writeFieldBegin('scheduleId');
			$xfer += $output->writeString($this->scheduleId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->scheduleName !== null) {
			
			$xfer += $output->writeFieldBegin('scheduleName');
			$xfer += $output->writeString($this->scheduleName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandId !== null) {
			
			$xfer += $output->writeFieldBegin('brandId');
			$xfer += $output->writeString($this->brandId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vBrandName !== null) {
			
			$xfer += $output->writeFieldBegin('vBrandName');
			$xfer += $output->writeString($this->vBrandName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poNo !== null) {
			
			$xfer += $output->writeFieldBegin('poNo');
			$xfer += $output->writeString($this->poNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poCreationDate !== null) {
			
			$xfer += $output->writeFieldBegin('poCreationDate');
			$xfer += $output->writeString($this->poCreationDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->origPoNo !== null) {
			
			$xfer += $output->writeFieldBegin('origPoNo');
			$xfer += $output->writeString($this->origPoNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderNum !== null) {
			
			$xfer += $output->writeFieldBegin('orderNum');
			$xfer += $output->writeString($this->orderNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderDate !== null) {
			
			$xfer += $output->writeFieldBegin('orderDate');
			$xfer += $output->writeString($this->orderDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->itemNo !== null) {
			
			$xfer += $output->writeFieldBegin('itemNo');
			$xfer += $output->writeString($this->itemNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->itemDescription !== null) {
			
			$xfer += $output->writeFieldBegin('itemDescription');
			$xfer += $output->writeString($this->itemDescription);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsNo !== null) {
			
			$xfer += $output->writeFieldBegin('goodsNo');
			$xfer += $output->writeString($this->goodsNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandCode !== null) {
			
			$xfer += $output->writeFieldBegin('brandCode');
			$xfer += $output->writeString($this->brandCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandName !== null) {
			
			$xfer += $output->writeFieldBegin('brandName');
			$xfer += $output->writeString($this->brandName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transactionQuantity !== null) {
			
			$xfer += $output->writeFieldBegin('transactionQuantity');
			$xfer += $output->writeDouble($this->transactionQuantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dataSign !== null) {
			
			$xfer += $output->writeFieldBegin('dataSign');
			$xfer += $output->writeI32($this->dataSign);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderPrice !== null) {
			
			$xfer += $output->writeFieldBegin('orderPrice');
			$xfer += $output->writeString($this->orderPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->currencyCode !== null) {
			
			$xfer += $output->writeFieldBegin('currencyCode');
			$xfer += $output->writeString($this->currencyCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->taxRate !== null) {
			
			$xfer += $output->writeFieldBegin('taxRate');
			$xfer += $output->writeString($this->taxRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->periodName !== null) {
			
			$xfer += $output->writeFieldBegin('periodName');
			$xfer += $output->writeString($this->periodName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transactionTypeId !== null) {
			
			$xfer += $output->writeFieldBegin('transactionTypeId');
			$xfer += $output->writeString($this->transactionTypeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transactionDate !== null) {
			
			$xfer += $output->writeFieldBegin('transactionDate');
			$xfer += $output->writeI64($this->transactionDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payableBillAmount !== null) {
			
			$xfer += $output->writeFieldBegin('payableBillAmount');
			$xfer += $output->writeDouble($this->payableBillAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorRate !== null) {
			
			$xfer += $output->writeFieldBegin('vendorRate');
			$xfer += $output->writeDouble($this->vendorRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->confirmNo !== null) {
			
			$xfer += $output->writeFieldBegin('confirmNo');
			$xfer += $output->writeString($this->confirmNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->salePlatform !== null) {
			
			$xfer += $output->writeFieldBegin('salePlatform');
			$xfer += $output->writeString($this->salePlatform);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->salePlatformName !== null) {
			
			$xfer += $output->writeFieldBegin('salePlatformName');
			$xfer += $output->writeString($this->salePlatformName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createdTime !== null) {
			
			$xfer += $output->writeFieldBegin('createdTime');
			$xfer += $output->writeI64($this->createdTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updatedTime !== null) {
			
			$xfer += $output->writeFieldBegin('updatedTime');
			$xfer += $output->writeI64($this->updatedTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isDeleted !== null) {
			
			$xfer += $output->writeFieldBegin('isDeleted');
			$xfer += $output->writeI16($this->isDeleted);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->grossMarginRate !== null) {
			
			$xfer += $output->writeFieldBegin('grossMarginRate');
			$xfer += $output->writeString($this->grossMarginRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poPrice !== null) {
			
			$xfer += $output->writeFieldBegin('poPrice');
			$xfer += $output->writeDouble($this->poPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poTaxPrice !== null) {
			
			$xfer += $output->writeFieldBegin('poTaxPrice');
			$xfer += $output->writeDouble($this->poTaxPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payableTotalBillAmount !== null) {
			
			$xfer += $output->writeFieldBegin('payableTotalBillAmount');
			$xfer += $output->writeDouble($this->payableTotalBillAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->detailLineType !== null) {
			
			$xfer += $output->writeFieldBegin('detailLineType');
			$xfer += $output->writeString($this->detailLineType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouseExt !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseExt');
			$xfer += $output->writeString($this->warehouseExt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sourceId !== null) {
			
			$xfer += $output->writeFieldBegin('sourceId');
			$xfer += $output->writeI64($this->sourceId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activeType !== null) {
			
			$xfer += $output->writeFieldBegin('activeType');
			$xfer += $output->writeString($this->activeType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activeTypeName !== null) {
			
			$xfer += $output->writeFieldBegin('activeTypeName');
			$xfer += $output->writeI64($this->activeTypeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actParentNo !== null) {
			
			$xfer += $output->writeFieldBegin('actParentNo');
			$xfer += $output->writeString($this->actParentNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actParentName !== null) {
			
			$xfer += $output->writeFieldBegin('actParentName');
			$xfer += $output->writeString($this->actParentName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->discountLevel !== null) {
			
			$xfer += $output->writeFieldBegin('discountLevel');
			$xfer += $output->writeString($this->discountLevel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->redPacketValue !== null) {
			
			$xfer += $output->writeFieldBegin('redPacketValue');
			$xfer += $output->writeDouble($this->redPacketValue);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activeBeginTime !== null) {
			
			$xfer += $output->writeFieldBegin('activeBeginTime');
			$xfer += $output->writeI64($this->activeBeginTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->billAmount !== null) {
			
			$xfer += $output->writeFieldBegin('billAmount');
			$xfer += $output->writeDouble($this->billAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totalBillAmount !== null) {
			
			$xfer += $output->writeFieldBegin('totalBillAmount');
			$xfer += $output->writeDouble($this->totalBillAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->favPrice !== null) {
			
			$xfer += $output->writeFieldBegin('favPrice');
			$xfer += $output->writeDouble($this->favPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totalAmount !== null) {
			
			$xfer += $output->writeFieldBegin('totalAmount');
			$xfer += $output->writeDouble($this->totalAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorRedpacketCount !== null) {
			
			$xfer += $output->writeFieldBegin('vendorRedpacketCount');
			$xfer += $output->writeI64($this->vendorRedpacketCount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->enterTotalBillAmount !== null) {
			
			$xfer += $output->writeFieldBegin('enterTotalBillAmount');
			$xfer += $output->writeI64($this->enterTotalBillAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->enterPayableTotalBillAmount !== null) {
			
			$xfer += $output->writeFieldBegin('enterPayableTotalBillAmount');
			$xfer += $output->writeDouble($this->enterPayableTotalBillAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->masterScheduleId !== null) {
			
			$xfer += $output->writeFieldBegin('masterScheduleId');
			$xfer += $output->writeDouble($this->masterScheduleId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sourceOrderNo !== null) {
			
			$xfer += $output->writeFieldBegin('sourceOrderNo');
			$xfer += $output->writeDouble($this->sourceOrderNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sourceTotalAmount !== null) {
			
			$xfer += $output->writeFieldBegin('sourceTotalAmount');
			$xfer += $output->writeDouble($this->sourceTotalAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sourceTotalDiscountAmount !== null) {
			
			$xfer += $output->writeFieldBegin('sourceTotalDiscountAmount');
			$xfer += $output->writeDouble($this->sourceTotalDiscountAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->businessType !== null) {
			
			$xfer += $output->writeFieldBegin('businessType');
			$xfer += $output->writeString($this->businessType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->processingType !== null) {
			
			$xfer += $output->writeFieldBegin('processingType');
			$xfer += $output->writeString($this->processingType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->referenceBillNumber !== null) {
			
			$xfer += $output->writeFieldBegin('referenceBillNumber');
			$xfer += $output->writeString($this->referenceBillNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transactionType !== null) {
			
			$xfer += $output->writeFieldBegin('transactionType');
			$xfer += $output->writeString($this->transactionType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transactionTypeName !== null) {
			
			$xfer += $output->writeFieldBegin('transactionTypeName');
			$xfer += $output->writeString($this->transactionTypeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->billType !== null) {
			
			$xfer += $output->writeFieldBegin('billType');
			$xfer += $output->writeString($this->billType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->discountConversionRate !== null) {
			
			$xfer += $output->writeFieldBegin('discountConversionRate');
			$xfer += $output->writeString($this->discountConversionRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->salesChannel !== null) {
			
			$xfer += $output->writeFieldBegin('salesChannel');
			$xfer += $output->writeString($this->salesChannel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderStatus !== null) {
			
			$xfer += $output->writeFieldBegin('orderStatus');
			$xfer += $output->writeString($this->orderStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invPo !== null) {
			
			$xfer += $output->writeFieldBegin('invPo');
			$xfer += $output->writeString($this->invPo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->grossMargin !== null) {
			
			$xfer += $output->writeFieldBegin('grossMargin');
			$xfer += $output->writeString($this->grossMargin);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invGlobalId !== null) {
			
			$xfer += $output->writeFieldBegin('invGlobalId');
			$xfer += $output->writeI64($this->invGlobalId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actVendorAmount !== null) {
			
			$xfer += $output->writeFieldBegin('actVendorAmount');
			$xfer += $output->writeDouble($this->actVendorAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->saleBrandId !== null) {
			
			$xfer += $output->writeFieldBegin('saleBrandId');
			$xfer += $output->writeString($this->saleBrandId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rateMid !== null) {
			
			$xfer += $output->writeFieldBegin('rateMid');
			$xfer += $output->writeI64($this->rateMid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isAdjustLine !== null) {
			
			$xfer += $output->writeFieldBegin('isAdjustLine');
			$xfer += $output->writeString($this->isAdjustLine);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->origActVendorRate !== null) {
			
			$xfer += $output->writeFieldBegin('origActVendorRate');
			$xfer += $output->writeDouble($this->origActVendorRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->origActVendorAmount !== null) {
			
			$xfer += $output->writeFieldBegin('origActVendorAmount');
			$xfer += $output->writeDouble($this->origActVendorAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->newActVendorRate !== null) {
			
			$xfer += $output->writeFieldBegin('newActVendorRate');
			$xfer += $output->writeDouble($this->newActVendorRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->newActVendorAmount !== null) {
			
			$xfer += $output->writeFieldBegin('newActVendorAmount');
			$xfer += $output->writeDouble($this->newActVendorAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->adjustReason !== null) {
			
			$xfer += $output->writeFieldBegin('adjustReason');
			$xfer += $output->writeString($this->adjustReason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poWareHouseType !== null) {
			
			$xfer += $output->writeFieldBegin('poWareHouseType');
			$xfer += $output->writeString($this->poWareHouseType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activeTypeNameStr !== null) {
			
			$xfer += $output->writeFieldBegin('activeTypeNameStr');
			$xfer += $output->writeString($this->activeTypeNameStr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->v2TrxDate !== null) {
			
			$xfer += $output->writeFieldBegin('v2TrxDate');
			$xfer += $output->writeI64($this->v2TrxDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->stageBillNumber !== null) {
			
			$xfer += $output->writeFieldBegin('stageBillNumber');
			$xfer += $output->writeString($this->stageBillNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->residualBillNumber !== null) {
			
			$xfer += $output->writeFieldBegin('residualBillNumber');
			$xfer += $output->writeString($this->residualBillNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorOrderNum !== null) {
			
			$xfer += $output->writeFieldBegin('vendorOrderNum');
			$xfer += $output->writeString($this->vendorOrderNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorOrderBilledFlag !== null) {
			
			$xfer += $output->writeFieldBegin('vendorOrderBilledFlag');
			$xfer += $output->writeString($this->vendorOrderBilledFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>