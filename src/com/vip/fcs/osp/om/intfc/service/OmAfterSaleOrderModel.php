<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\om\intfc\service;

class OmAfterSaleOrderModel {
	
	static $_TSPEC;
	public $id = null;
	public $operation = null;
	public $orderEbsScenario = null;
	public $orderSn = null;
	public $sourceName = null;
	public $userId = null;
	public $orderReturnApplyType = null;
	public $orderReturnApplyId = null;
	public $orderReturnApplyTime = null;
	public $refundType = null;
	public $returnWarehouse = null;
	public $returnMoney = null;
	public $adminAdjustMoney = null;
	public $returnExDiscountMoney = null;
	public $returnCarriage = null;
	public $returnsWay = null;
	public $returnTransportNumber = null;
	public $returnCarrierName = null;
	public $transTime = null;
	public $createTime = null;
	public $updateTime = null;
	public $extUserCode = null;
	public $extApplyId = null;
	public $ctReference = null;
	public $activityDiffDiscountMoney = null;
	public $refundAmount = null;
	public $storeId = null;
	public $storeSource = null;
	public $channelStoreId = null;
	public $vipPaidBackCarriage = null;
	public $noNeedRefundAmount = null;
	public $abnormalAmount = null;
	public $channel = null;
	public $customerRefundSubsidies = null;
	public $isPremium = null;
	public $carriagePayWay = null;
	public $withdrawRewardedPoint = null;
	public $feeBearType = null;
	public $subOrderType = null;
	public $referenceApplyId = null;
	public $referenceAfterSaleSn = null;
	public $afterSaleSn = null;
	public $returnInsuredPriceTotalAmount = null;
	public $ofcEbsOrderReturnGoodsList = null;
	public $ofcEbsOrderReturnActiveList = null;
	public $ofcEbsOrderReturnRefundDetailsList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'operation'
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
			'var' => 'userId'
			),
			7 => array(
			'var' => 'orderReturnApplyType'
			),
			8 => array(
			'var' => 'orderReturnApplyId'
			),
			9 => array(
			'var' => 'orderReturnApplyTime'
			),
			10 => array(
			'var' => 'refundType'
			),
			11 => array(
			'var' => 'returnWarehouse'
			),
			12 => array(
			'var' => 'returnMoney'
			),
			13 => array(
			'var' => 'adminAdjustMoney'
			),
			14 => array(
			'var' => 'returnExDiscountMoney'
			),
			15 => array(
			'var' => 'returnCarriage'
			),
			16 => array(
			'var' => 'returnsWay'
			),
			17 => array(
			'var' => 'returnTransportNumber'
			),
			18 => array(
			'var' => 'returnCarrierName'
			),
			19 => array(
			'var' => 'transTime'
			),
			20 => array(
			'var' => 'createTime'
			),
			21 => array(
			'var' => 'updateTime'
			),
			22 => array(
			'var' => 'extUserCode'
			),
			23 => array(
			'var' => 'extApplyId'
			),
			24 => array(
			'var' => 'ctReference'
			),
			25 => array(
			'var' => 'activityDiffDiscountMoney'
			),
			26 => array(
			'var' => 'refundAmount'
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
			'var' => 'vipPaidBackCarriage'
			),
			31 => array(
			'var' => 'noNeedRefundAmount'
			),
			32 => array(
			'var' => 'abnormalAmount'
			),
			33 => array(
			'var' => 'channel'
			),
			34 => array(
			'var' => 'customerRefundSubsidies'
			),
			35 => array(
			'var' => 'isPremium'
			),
			36 => array(
			'var' => 'carriagePayWay'
			),
			37 => array(
			'var' => 'withdrawRewardedPoint'
			),
			38 => array(
			'var' => 'feeBearType'
			),
			39 => array(
			'var' => 'subOrderType'
			),
			40 => array(
			'var' => 'referenceApplyId'
			),
			41 => array(
			'var' => 'referenceAfterSaleSn'
			),
			42 => array(
			'var' => 'afterSaleSn'
			),
			43 => array(
			'var' => 'returnInsuredPriceTotalAmount'
			),
			44 => array(
			'var' => 'ofcEbsOrderReturnGoodsList'
			),
			45 => array(
			'var' => 'ofcEbsOrderReturnActiveList'
			),
			46 => array(
			'var' => 'ofcEbsOrderReturnRefundDetailsList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['operation'])){
				
				$this->operation = $vals['operation'];
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
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['orderReturnApplyType'])){
				
				$this->orderReturnApplyType = $vals['orderReturnApplyType'];
			}
			
			
			if (isset($vals['orderReturnApplyId'])){
				
				$this->orderReturnApplyId = $vals['orderReturnApplyId'];
			}
			
			
			if (isset($vals['orderReturnApplyTime'])){
				
				$this->orderReturnApplyTime = $vals['orderReturnApplyTime'];
			}
			
			
			if (isset($vals['refundType'])){
				
				$this->refundType = $vals['refundType'];
			}
			
			
			if (isset($vals['returnWarehouse'])){
				
				$this->returnWarehouse = $vals['returnWarehouse'];
			}
			
			
			if (isset($vals['returnMoney'])){
				
				$this->returnMoney = $vals['returnMoney'];
			}
			
			
			if (isset($vals['adminAdjustMoney'])){
				
				$this->adminAdjustMoney = $vals['adminAdjustMoney'];
			}
			
			
			if (isset($vals['returnExDiscountMoney'])){
				
				$this->returnExDiscountMoney = $vals['returnExDiscountMoney'];
			}
			
			
			if (isset($vals['returnCarriage'])){
				
				$this->returnCarriage = $vals['returnCarriage'];
			}
			
			
			if (isset($vals['returnsWay'])){
				
				$this->returnsWay = $vals['returnsWay'];
			}
			
			
			if (isset($vals['returnTransportNumber'])){
				
				$this->returnTransportNumber = $vals['returnTransportNumber'];
			}
			
			
			if (isset($vals['returnCarrierName'])){
				
				$this->returnCarrierName = $vals['returnCarrierName'];
			}
			
			
			if (isset($vals['transTime'])){
				
				$this->transTime = $vals['transTime'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['updateTime'])){
				
				$this->updateTime = $vals['updateTime'];
			}
			
			
			if (isset($vals['extUserCode'])){
				
				$this->extUserCode = $vals['extUserCode'];
			}
			
			
			if (isset($vals['extApplyId'])){
				
				$this->extApplyId = $vals['extApplyId'];
			}
			
			
			if (isset($vals['ctReference'])){
				
				$this->ctReference = $vals['ctReference'];
			}
			
			
			if (isset($vals['activityDiffDiscountMoney'])){
				
				$this->activityDiffDiscountMoney = $vals['activityDiffDiscountMoney'];
			}
			
			
			if (isset($vals['refundAmount'])){
				
				$this->refundAmount = $vals['refundAmount'];
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
			
			
			if (isset($vals['vipPaidBackCarriage'])){
				
				$this->vipPaidBackCarriage = $vals['vipPaidBackCarriage'];
			}
			
			
			if (isset($vals['noNeedRefundAmount'])){
				
				$this->noNeedRefundAmount = $vals['noNeedRefundAmount'];
			}
			
			
			if (isset($vals['abnormalAmount'])){
				
				$this->abnormalAmount = $vals['abnormalAmount'];
			}
			
			
			if (isset($vals['channel'])){
				
				$this->channel = $vals['channel'];
			}
			
			
			if (isset($vals['customerRefundSubsidies'])){
				
				$this->customerRefundSubsidies = $vals['customerRefundSubsidies'];
			}
			
			
			if (isset($vals['isPremium'])){
				
				$this->isPremium = $vals['isPremium'];
			}
			
			
			if (isset($vals['carriagePayWay'])){
				
				$this->carriagePayWay = $vals['carriagePayWay'];
			}
			
			
			if (isset($vals['withdrawRewardedPoint'])){
				
				$this->withdrawRewardedPoint = $vals['withdrawRewardedPoint'];
			}
			
			
			if (isset($vals['feeBearType'])){
				
				$this->feeBearType = $vals['feeBearType'];
			}
			
			
			if (isset($vals['subOrderType'])){
				
				$this->subOrderType = $vals['subOrderType'];
			}
			
			
			if (isset($vals['referenceApplyId'])){
				
				$this->referenceApplyId = $vals['referenceApplyId'];
			}
			
			
			if (isset($vals['referenceAfterSaleSn'])){
				
				$this->referenceAfterSaleSn = $vals['referenceAfterSaleSn'];
			}
			
			
			if (isset($vals['afterSaleSn'])){
				
				$this->afterSaleSn = $vals['afterSaleSn'];
			}
			
			
			if (isset($vals['returnInsuredPriceTotalAmount'])){
				
				$this->returnInsuredPriceTotalAmount = $vals['returnInsuredPriceTotalAmount'];
			}
			
			
			if (isset($vals['ofcEbsOrderReturnGoodsList'])){
				
				$this->ofcEbsOrderReturnGoodsList = $vals['ofcEbsOrderReturnGoodsList'];
			}
			
			
			if (isset($vals['ofcEbsOrderReturnActiveList'])){
				
				$this->ofcEbsOrderReturnActiveList = $vals['ofcEbsOrderReturnActiveList'];
			}
			
			
			if (isset($vals['ofcEbsOrderReturnRefundDetailsList'])){
				
				$this->ofcEbsOrderReturnRefundDetailsList = $vals['ofcEbsOrderReturnRefundDetailsList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OmAfterSaleOrderModel';
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
			
			
			
			
			if ("operation" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->operation); 
				
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
			
			
			
			
			if ("userId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->userId); 
				
			}
			
			
			
			
			if ("orderReturnApplyType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->orderReturnApplyType); 
				
			}
			
			
			
			
			if ("orderReturnApplyId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderReturnApplyId);
				
			}
			
			
			
			
			if ("orderReturnApplyTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->orderReturnApplyTime); 
				
			}
			
			
			
			
			if ("refundType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->refundType); 
				
			}
			
			
			
			
			if ("returnWarehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnWarehouse);
				
			}
			
			
			
			
			if ("returnMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnMoney);
				
			}
			
			
			
			
			if ("adminAdjustMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->adminAdjustMoney);
				
			}
			
			
			
			
			if ("returnExDiscountMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnExDiscountMoney);
				
			}
			
			
			
			
			if ("returnCarriage" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnCarriage);
				
			}
			
			
			
			
			if ("returnsWay" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->returnsWay); 
				
			}
			
			
			
			
			if ("returnTransportNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnTransportNumber);
				
			}
			
			
			
			
			if ("returnCarrierName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnCarrierName);
				
			}
			
			
			
			
			if ("transTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->transTime); 
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime); 
				
			}
			
			
			
			
			if ("updateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updateTime); 
				
			}
			
			
			
			
			if ("extUserCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->extUserCode);
				
			}
			
			
			
			
			if ("extApplyId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->extApplyId);
				
			}
			
			
			
			
			if ("ctReference" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ctReference);
				
			}
			
			
			
			
			if ("activityDiffDiscountMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->activityDiffDiscountMoney);
				
			}
			
			
			
			
			if ("refundAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refundAmount);
				
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
			
			
			
			
			if ("vipPaidBackCarriage" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vipPaidBackCarriage);
				
			}
			
			
			
			
			if ("noNeedRefundAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->noNeedRefundAmount);
				
			}
			
			
			
			
			if ("abnormalAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->abnormalAmount);
				
			}
			
			
			
			
			if ("channel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->channel);
				
			}
			
			
			
			
			if ("customerRefundSubsidies" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->customerRefundSubsidies);
				
			}
			
			
			
			
			if ("isPremium" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isPremium); 
				
			}
			
			
			
			
			if ("carriagePayWay" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->carriagePayWay); 
				
			}
			
			
			
			
			if ("withdrawRewardedPoint" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->withdrawRewardedPoint);
				
			}
			
			
			
			
			if ("feeBearType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->feeBearType);
				
			}
			
			
			
			
			if ("subOrderType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->subOrderType); 
				
			}
			
			
			
			
			if ("referenceApplyId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->referenceApplyId);
				
			}
			
			
			
			
			if ("referenceAfterSaleSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->referenceAfterSaleSn);
				
			}
			
			
			
			
			if ("afterSaleSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->afterSaleSn);
				
			}
			
			
			
			
			if ("returnInsuredPriceTotalAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnInsuredPriceTotalAmount);
				
			}
			
			
			
			
			if ("ofcEbsOrderReturnGoodsList" == $schemeField){
				
				$needSkip = false;
				
				$this->ofcEbsOrderReturnGoodsList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\fcs\osp\om\intfc\service\OmAfterSaleOrderGoodModel();
						$elem1->read($input);
						
						$this->ofcEbsOrderReturnGoodsList[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("ofcEbsOrderReturnActiveList" == $schemeField){
				
				$needSkip = false;
				
				$this->ofcEbsOrderReturnActiveList = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						
						$elem2 = new \com\vip\fcs\osp\om\intfc\service\OmAfterSaleOrderActiveModel();
						$elem2->read($input);
						
						$this->ofcEbsOrderReturnActiveList[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("ofcEbsOrderReturnRefundDetailsList" == $schemeField){
				
				$needSkip = false;
				
				$this->ofcEbsOrderReturnRefundDetailsList = array();
				$_size3 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem3 = null;
						
						$elem3 = new \com\vip\fcs\osp\om\intfc\service\OmAfterSaleOrderPayDetailModel();
						$elem3->read($input);
						
						$this->ofcEbsOrderReturnRefundDetailsList[$_size3++] = $elem3;
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
		
		
		if($this->operation !== null) {
			
			$xfer += $output->writeFieldBegin('operation');
			$xfer += $output->writeByte($this->operation);
			
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
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeI64($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderReturnApplyType !== null) {
			
			$xfer += $output->writeFieldBegin('orderReturnApplyType');
			$xfer += $output->writeByte($this->orderReturnApplyType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderReturnApplyId !== null) {
			
			$xfer += $output->writeFieldBegin('orderReturnApplyId');
			$xfer += $output->writeString($this->orderReturnApplyId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderReturnApplyTime !== null) {
			
			$xfer += $output->writeFieldBegin('orderReturnApplyTime');
			$xfer += $output->writeI64($this->orderReturnApplyTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundType !== null) {
			
			$xfer += $output->writeFieldBegin('refundType');
			$xfer += $output->writeByte($this->refundType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnWarehouse !== null) {
			
			$xfer += $output->writeFieldBegin('returnWarehouse');
			$xfer += $output->writeString($this->returnWarehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnMoney !== null) {
			
			$xfer += $output->writeFieldBegin('returnMoney');
			$xfer += $output->writeString($this->returnMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->adminAdjustMoney !== null) {
			
			$xfer += $output->writeFieldBegin('adminAdjustMoney');
			$xfer += $output->writeString($this->adminAdjustMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnExDiscountMoney !== null) {
			
			$xfer += $output->writeFieldBegin('returnExDiscountMoney');
			$xfer += $output->writeString($this->returnExDiscountMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnCarriage !== null) {
			
			$xfer += $output->writeFieldBegin('returnCarriage');
			$xfer += $output->writeString($this->returnCarriage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnsWay !== null) {
			
			$xfer += $output->writeFieldBegin('returnsWay');
			$xfer += $output->writeByte($this->returnsWay);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnTransportNumber !== null) {
			
			$xfer += $output->writeFieldBegin('returnTransportNumber');
			$xfer += $output->writeString($this->returnTransportNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnCarrierName !== null) {
			
			$xfer += $output->writeFieldBegin('returnCarrierName');
			$xfer += $output->writeString($this->returnCarrierName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transTime !== null) {
			
			$xfer += $output->writeFieldBegin('transTime');
			$xfer += $output->writeI64($this->transTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeI64($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateTime !== null) {
			
			$xfer += $output->writeFieldBegin('updateTime');
			$xfer += $output->writeI64($this->updateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extUserCode !== null) {
			
			$xfer += $output->writeFieldBegin('extUserCode');
			$xfer += $output->writeString($this->extUserCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extApplyId !== null) {
			
			$xfer += $output->writeFieldBegin('extApplyId');
			$xfer += $output->writeString($this->extApplyId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ctReference !== null) {
			
			$xfer += $output->writeFieldBegin('ctReference');
			$xfer += $output->writeString($this->ctReference);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activityDiffDiscountMoney !== null) {
			
			$xfer += $output->writeFieldBegin('activityDiffDiscountMoney');
			$xfer += $output->writeString($this->activityDiffDiscountMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundAmount !== null) {
			
			$xfer += $output->writeFieldBegin('refundAmount');
			$xfer += $output->writeString($this->refundAmount);
			
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
		
		
		if($this->vipPaidBackCarriage !== null) {
			
			$xfer += $output->writeFieldBegin('vipPaidBackCarriage');
			$xfer += $output->writeString($this->vipPaidBackCarriage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->noNeedRefundAmount !== null) {
			
			$xfer += $output->writeFieldBegin('noNeedRefundAmount');
			$xfer += $output->writeString($this->noNeedRefundAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->abnormalAmount !== null) {
			
			$xfer += $output->writeFieldBegin('abnormalAmount');
			$xfer += $output->writeString($this->abnormalAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->channel !== null) {
			
			$xfer += $output->writeFieldBegin('channel');
			$xfer += $output->writeString($this->channel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customerRefundSubsidies !== null) {
			
			$xfer += $output->writeFieldBegin('customerRefundSubsidies');
			$xfer += $output->writeString($this->customerRefundSubsidies);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isPremium !== null) {
			
			$xfer += $output->writeFieldBegin('isPremium');
			$xfer += $output->writeI32($this->isPremium);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriagePayWay !== null) {
			
			$xfer += $output->writeFieldBegin('carriagePayWay');
			$xfer += $output->writeI32($this->carriagePayWay);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->withdrawRewardedPoint !== null) {
			
			$xfer += $output->writeFieldBegin('withdrawRewardedPoint');
			$xfer += $output->writeString($this->withdrawRewardedPoint);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->feeBearType !== null) {
			
			$xfer += $output->writeFieldBegin('feeBearType');
			$xfer += $output->writeString($this->feeBearType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->subOrderType !== null) {
			
			$xfer += $output->writeFieldBegin('subOrderType');
			$xfer += $output->writeI32($this->subOrderType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->referenceApplyId !== null) {
			
			$xfer += $output->writeFieldBegin('referenceApplyId');
			$xfer += $output->writeString($this->referenceApplyId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->referenceAfterSaleSn !== null) {
			
			$xfer += $output->writeFieldBegin('referenceAfterSaleSn');
			$xfer += $output->writeString($this->referenceAfterSaleSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->afterSaleSn !== null) {
			
			$xfer += $output->writeFieldBegin('afterSaleSn');
			$xfer += $output->writeString($this->afterSaleSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnInsuredPriceTotalAmount !== null) {
			
			$xfer += $output->writeFieldBegin('returnInsuredPriceTotalAmount');
			$xfer += $output->writeString($this->returnInsuredPriceTotalAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ofcEbsOrderReturnGoodsList !== null) {
			
			$xfer += $output->writeFieldBegin('ofcEbsOrderReturnGoodsList');
			
			if (!is_array($this->ofcEbsOrderReturnGoodsList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->ofcEbsOrderReturnGoodsList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ofcEbsOrderReturnActiveList !== null) {
			
			$xfer += $output->writeFieldBegin('ofcEbsOrderReturnActiveList');
			
			if (!is_array($this->ofcEbsOrderReturnActiveList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->ofcEbsOrderReturnActiveList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ofcEbsOrderReturnRefundDetailsList !== null) {
			
			$xfer += $output->writeFieldBegin('ofcEbsOrderReturnRefundDetailsList');
			
			if (!is_array($this->ofcEbsOrderReturnRefundDetailsList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->ofcEbsOrderReturnRefundDetailsList as $iter0){
				
				
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