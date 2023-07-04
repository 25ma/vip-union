<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\ar\intfc\service;

class ArIntTrxlInModel {
	
	static $_TSPEC;
	public $id = null;
	public $globalId = null;
	public $dbNo = null;
	public $sourceName = null;
	public $lineId = null;
	public $headerId = null;
	public $orderNum = null;
	public $orderId = null;
	public $lineNum = null;
	public $lineType = null;
	public $skuId = null;
	public $itemNum = null;
	public $description = null;
	public $payType = null;
	public $payMethod = null;
	public $payNumber = null;
	public $payDate = null;
	public $returnPath = null;
	public $uomCode = null;
	public $qty = null;
	public $price = null;
	public $amount = null;
	public $taxRate = null;
	public $taxCode = null;
	public $taxAmount = null;
	public $totalAmount = null;
	public $ctlReference = null;
	public $vendorNum = null;
	public $vendorName = null;
	public $chargeRate = null;
	public $sourceOrder = null;
	public $poNumber = null;
	public $warehouse = null;
	public $discountRate = null;
	public $scheduleId = null;
	public $brandId = null;
	public $priceId = null;
	public $vSkuId = null;
	public $processFlag = null;
	public $errorMessage = null;
	public $versionNumber = null;
	public $requestId = null;
	public $attributeCategory = null;
	public $attribute1 = null;
	public $attribute2 = null;
	public $attribute3 = null;
	public $attribute4 = null;
	public $attribute5 = null;
	public $attribute6 = null;
	public $attribute7 = null;
	public $attribute8 = null;
	public $attribute9 = null;
	public $attribute10 = null;
	public $ebsTrxId = null;
	public $imgReason = null;
	public $priceTime = null;
	public $discountSku = null;
	public $activeFav = null;
	public $couponFav = null;
	public $payFav = null;
	public $realPaidMoney = null;
	public $createTime = null;
	public $createdBy = null;
	public $updateTime = null;
	public $updatedBy = null;
	public $isDeleted = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'globalId'
			),
			3 => array(
			'var' => 'dbNo'
			),
			4 => array(
			'var' => 'sourceName'
			),
			5 => array(
			'var' => 'lineId'
			),
			6 => array(
			'var' => 'headerId'
			),
			7 => array(
			'var' => 'orderNum'
			),
			8 => array(
			'var' => 'orderId'
			),
			9 => array(
			'var' => 'lineNum'
			),
			10 => array(
			'var' => 'lineType'
			),
			11 => array(
			'var' => 'skuId'
			),
			12 => array(
			'var' => 'itemNum'
			),
			13 => array(
			'var' => 'description'
			),
			14 => array(
			'var' => 'payType'
			),
			15 => array(
			'var' => 'payMethod'
			),
			16 => array(
			'var' => 'payNumber'
			),
			17 => array(
			'var' => 'payDate'
			),
			18 => array(
			'var' => 'returnPath'
			),
			19 => array(
			'var' => 'uomCode'
			),
			20 => array(
			'var' => 'qty'
			),
			21 => array(
			'var' => 'price'
			),
			22 => array(
			'var' => 'amount'
			),
			23 => array(
			'var' => 'taxRate'
			),
			24 => array(
			'var' => 'taxCode'
			),
			25 => array(
			'var' => 'taxAmount'
			),
			26 => array(
			'var' => 'totalAmount'
			),
			27 => array(
			'var' => 'ctlReference'
			),
			28 => array(
			'var' => 'vendorNum'
			),
			29 => array(
			'var' => 'vendorName'
			),
			30 => array(
			'var' => 'chargeRate'
			),
			31 => array(
			'var' => 'sourceOrder'
			),
			32 => array(
			'var' => 'poNumber'
			),
			33 => array(
			'var' => 'warehouse'
			),
			34 => array(
			'var' => 'discountRate'
			),
			35 => array(
			'var' => 'scheduleId'
			),
			36 => array(
			'var' => 'brandId'
			),
			37 => array(
			'var' => 'priceId'
			),
			38 => array(
			'var' => 'vSkuId'
			),
			39 => array(
			'var' => 'processFlag'
			),
			40 => array(
			'var' => 'errorMessage'
			),
			41 => array(
			'var' => 'versionNumber'
			),
			42 => array(
			'var' => 'requestId'
			),
			43 => array(
			'var' => 'attributeCategory'
			),
			44 => array(
			'var' => 'attribute1'
			),
			45 => array(
			'var' => 'attribute2'
			),
			46 => array(
			'var' => 'attribute3'
			),
			47 => array(
			'var' => 'attribute4'
			),
			48 => array(
			'var' => 'attribute5'
			),
			49 => array(
			'var' => 'attribute6'
			),
			50 => array(
			'var' => 'attribute7'
			),
			51 => array(
			'var' => 'attribute8'
			),
			52 => array(
			'var' => 'attribute9'
			),
			53 => array(
			'var' => 'attribute10'
			),
			54 => array(
			'var' => 'ebsTrxId'
			),
			55 => array(
			'var' => 'imgReason'
			),
			56 => array(
			'var' => 'priceTime'
			),
			57 => array(
			'var' => 'discountSku'
			),
			58 => array(
			'var' => 'activeFav'
			),
			59 => array(
			'var' => 'couponFav'
			),
			60 => array(
			'var' => 'payFav'
			),
			61 => array(
			'var' => 'realPaidMoney'
			),
			62 => array(
			'var' => 'createTime'
			),
			63 => array(
			'var' => 'createdBy'
			),
			64 => array(
			'var' => 'updateTime'
			),
			65 => array(
			'var' => 'updatedBy'
			),
			66 => array(
			'var' => 'isDeleted'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['globalId'])){
				
				$this->globalId = $vals['globalId'];
			}
			
			
			if (isset($vals['dbNo'])){
				
				$this->dbNo = $vals['dbNo'];
			}
			
			
			if (isset($vals['sourceName'])){
				
				$this->sourceName = $vals['sourceName'];
			}
			
			
			if (isset($vals['lineId'])){
				
				$this->lineId = $vals['lineId'];
			}
			
			
			if (isset($vals['headerId'])){
				
				$this->headerId = $vals['headerId'];
			}
			
			
			if (isset($vals['orderNum'])){
				
				$this->orderNum = $vals['orderNum'];
			}
			
			
			if (isset($vals['orderId'])){
				
				$this->orderId = $vals['orderId'];
			}
			
			
			if (isset($vals['lineNum'])){
				
				$this->lineNum = $vals['lineNum'];
			}
			
			
			if (isset($vals['lineType'])){
				
				$this->lineType = $vals['lineType'];
			}
			
			
			if (isset($vals['skuId'])){
				
				$this->skuId = $vals['skuId'];
			}
			
			
			if (isset($vals['itemNum'])){
				
				$this->itemNum = $vals['itemNum'];
			}
			
			
			if (isset($vals['description'])){
				
				$this->description = $vals['description'];
			}
			
			
			if (isset($vals['payType'])){
				
				$this->payType = $vals['payType'];
			}
			
			
			if (isset($vals['payMethod'])){
				
				$this->payMethod = $vals['payMethod'];
			}
			
			
			if (isset($vals['payNumber'])){
				
				$this->payNumber = $vals['payNumber'];
			}
			
			
			if (isset($vals['payDate'])){
				
				$this->payDate = $vals['payDate'];
			}
			
			
			if (isset($vals['returnPath'])){
				
				$this->returnPath = $vals['returnPath'];
			}
			
			
			if (isset($vals['uomCode'])){
				
				$this->uomCode = $vals['uomCode'];
			}
			
			
			if (isset($vals['qty'])){
				
				$this->qty = $vals['qty'];
			}
			
			
			if (isset($vals['price'])){
				
				$this->price = $vals['price'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['taxRate'])){
				
				$this->taxRate = $vals['taxRate'];
			}
			
			
			if (isset($vals['taxCode'])){
				
				$this->taxCode = $vals['taxCode'];
			}
			
			
			if (isset($vals['taxAmount'])){
				
				$this->taxAmount = $vals['taxAmount'];
			}
			
			
			if (isset($vals['totalAmount'])){
				
				$this->totalAmount = $vals['totalAmount'];
			}
			
			
			if (isset($vals['ctlReference'])){
				
				$this->ctlReference = $vals['ctlReference'];
			}
			
			
			if (isset($vals['vendorNum'])){
				
				$this->vendorNum = $vals['vendorNum'];
			}
			
			
			if (isset($vals['vendorName'])){
				
				$this->vendorName = $vals['vendorName'];
			}
			
			
			if (isset($vals['chargeRate'])){
				
				$this->chargeRate = $vals['chargeRate'];
			}
			
			
			if (isset($vals['sourceOrder'])){
				
				$this->sourceOrder = $vals['sourceOrder'];
			}
			
			
			if (isset($vals['poNumber'])){
				
				$this->poNumber = $vals['poNumber'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['discountRate'])){
				
				$this->discountRate = $vals['discountRate'];
			}
			
			
			if (isset($vals['scheduleId'])){
				
				$this->scheduleId = $vals['scheduleId'];
			}
			
			
			if (isset($vals['brandId'])){
				
				$this->brandId = $vals['brandId'];
			}
			
			
			if (isset($vals['priceId'])){
				
				$this->priceId = $vals['priceId'];
			}
			
			
			if (isset($vals['vSkuId'])){
				
				$this->vSkuId = $vals['vSkuId'];
			}
			
			
			if (isset($vals['processFlag'])){
				
				$this->processFlag = $vals['processFlag'];
			}
			
			
			if (isset($vals['errorMessage'])){
				
				$this->errorMessage = $vals['errorMessage'];
			}
			
			
			if (isset($vals['versionNumber'])){
				
				$this->versionNumber = $vals['versionNumber'];
			}
			
			
			if (isset($vals['requestId'])){
				
				$this->requestId = $vals['requestId'];
			}
			
			
			if (isset($vals['attributeCategory'])){
				
				$this->attributeCategory = $vals['attributeCategory'];
			}
			
			
			if (isset($vals['attribute1'])){
				
				$this->attribute1 = $vals['attribute1'];
			}
			
			
			if (isset($vals['attribute2'])){
				
				$this->attribute2 = $vals['attribute2'];
			}
			
			
			if (isset($vals['attribute3'])){
				
				$this->attribute3 = $vals['attribute3'];
			}
			
			
			if (isset($vals['attribute4'])){
				
				$this->attribute4 = $vals['attribute4'];
			}
			
			
			if (isset($vals['attribute5'])){
				
				$this->attribute5 = $vals['attribute5'];
			}
			
			
			if (isset($vals['attribute6'])){
				
				$this->attribute6 = $vals['attribute6'];
			}
			
			
			if (isset($vals['attribute7'])){
				
				$this->attribute7 = $vals['attribute7'];
			}
			
			
			if (isset($vals['attribute8'])){
				
				$this->attribute8 = $vals['attribute8'];
			}
			
			
			if (isset($vals['attribute9'])){
				
				$this->attribute9 = $vals['attribute9'];
			}
			
			
			if (isset($vals['attribute10'])){
				
				$this->attribute10 = $vals['attribute10'];
			}
			
			
			if (isset($vals['ebsTrxId'])){
				
				$this->ebsTrxId = $vals['ebsTrxId'];
			}
			
			
			if (isset($vals['imgReason'])){
				
				$this->imgReason = $vals['imgReason'];
			}
			
			
			if (isset($vals['priceTime'])){
				
				$this->priceTime = $vals['priceTime'];
			}
			
			
			if (isset($vals['discountSku'])){
				
				$this->discountSku = $vals['discountSku'];
			}
			
			
			if (isset($vals['activeFav'])){
				
				$this->activeFav = $vals['activeFav'];
			}
			
			
			if (isset($vals['couponFav'])){
				
				$this->couponFav = $vals['couponFav'];
			}
			
			
			if (isset($vals['payFav'])){
				
				$this->payFav = $vals['payFav'];
			}
			
			
			if (isset($vals['realPaidMoney'])){
				
				$this->realPaidMoney = $vals['realPaidMoney'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['createdBy'])){
				
				$this->createdBy = $vals['createdBy'];
			}
			
			
			if (isset($vals['updateTime'])){
				
				$this->updateTime = $vals['updateTime'];
			}
			
			
			if (isset($vals['updatedBy'])){
				
				$this->updatedBy = $vals['updatedBy'];
			}
			
			
			if (isset($vals['isDeleted'])){
				
				$this->isDeleted = $vals['isDeleted'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ArIntTrxlInModel';
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
			
			
			
			
			if ("globalId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->globalId); 
				
			}
			
			
			
			
			if ("dbNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dbNo);
				
			}
			
			
			
			
			if ("sourceName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sourceName);
				
			}
			
			
			
			
			if ("lineId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->lineId); 
				
			}
			
			
			
			
			if ("headerId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->headerId); 
				
			}
			
			
			
			
			if ("orderNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderNum);
				
			}
			
			
			
			
			if ("orderId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderId);
				
			}
			
			
			
			
			if ("lineNum" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->lineNum); 
				
			}
			
			
			
			
			if ("lineType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->lineType);
				
			}
			
			
			
			
			if ("skuId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->skuId);
				
			}
			
			
			
			
			if ("itemNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->itemNum);
				
			}
			
			
			
			
			if ("description" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->description);
				
			}
			
			
			
			
			if ("payType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payType);
				
			}
			
			
			
			
			if ("payMethod" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payMethod);
				
			}
			
			
			
			
			if ("payNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payNumber);
				
			}
			
			
			
			
			if ("payDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->payDate); 
				
			}
			
			
			
			
			if ("returnPath" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnPath);
				
			}
			
			
			
			
			if ("uomCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->uomCode);
				
			}
			
			
			
			
			if ("qty" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->qty);
				
			}
			
			
			
			
			if ("price" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->price);
				
			}
			
			
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->amount);
				
			}
			
			
			
			
			if ("taxRate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->taxRate);
				
			}
			
			
			
			
			if ("taxCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->taxCode);
				
			}
			
			
			
			
			if ("taxAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->taxAmount);
				
			}
			
			
			
			
			if ("totalAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->totalAmount);
				
			}
			
			
			
			
			if ("ctlReference" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ctlReference);
				
			}
			
			
			
			
			if ("vendorNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorNum);
				
			}
			
			
			
			
			if ("vendorName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorName);
				
			}
			
			
			
			
			if ("chargeRate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->chargeRate);
				
			}
			
			
			
			
			if ("sourceOrder" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sourceOrder);
				
			}
			
			
			
			
			if ("poNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poNumber);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("discountRate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->discountRate);
				
			}
			
			
			
			
			if ("scheduleId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->scheduleId); 
				
			}
			
			
			
			
			if ("brandId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->brandId); 
				
			}
			
			
			
			
			if ("priceId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->priceId); 
				
			}
			
			
			
			
			if ("vSkuId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->vSkuId); 
				
			}
			
			
			
			
			if ("processFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->processFlag);
				
			}
			
			
			
			
			if ("errorMessage" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->errorMessage);
				
			}
			
			
			
			
			if ("versionNumber" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->versionNumber); 
				
			}
			
			
			
			
			if ("requestId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->requestId); 
				
			}
			
			
			
			
			if ("attributeCategory" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attributeCategory);
				
			}
			
			
			
			
			if ("attribute1" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute1);
				
			}
			
			
			
			
			if ("attribute2" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute2);
				
			}
			
			
			
			
			if ("attribute3" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute3);
				
			}
			
			
			
			
			if ("attribute4" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute4);
				
			}
			
			
			
			
			if ("attribute5" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute5);
				
			}
			
			
			
			
			if ("attribute6" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute6);
				
			}
			
			
			
			
			if ("attribute7" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute7);
				
			}
			
			
			
			
			if ("attribute8" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute8);
				
			}
			
			
			
			
			if ("attribute9" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute9);
				
			}
			
			
			
			
			if ("attribute10" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute10);
				
			}
			
			
			
			
			if ("ebsTrxId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->ebsTrxId); 
				
			}
			
			
			
			
			if ("imgReason" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->imgReason);
				
			}
			
			
			
			
			if ("priceTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->priceTime);
				
			}
			
			
			
			
			if ("discountSku" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->discountSku);
				
			}
			
			
			
			
			if ("activeFav" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->activeFav);
				
			}
			
			
			
			
			if ("couponFav" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->couponFav);
				
			}
			
			
			
			
			if ("payFav" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->payFav);
				
			}
			
			
			
			
			if ("realPaidMoney" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->realPaidMoney);
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime); 
				
			}
			
			
			
			
			if ("createdBy" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createdBy);
				
			}
			
			
			
			
			if ("updateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updateTime); 
				
			}
			
			
			
			
			if ("updatedBy" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->updatedBy);
				
			}
			
			
			
			
			if ("isDeleted" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isDeleted); 
				
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
		
		
		if($this->globalId !== null) {
			
			$xfer += $output->writeFieldBegin('globalId');
			$xfer += $output->writeI64($this->globalId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dbNo !== null) {
			
			$xfer += $output->writeFieldBegin('dbNo');
			$xfer += $output->writeString($this->dbNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sourceName !== null) {
			
			$xfer += $output->writeFieldBegin('sourceName');
			$xfer += $output->writeString($this->sourceName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lineId !== null) {
			
			$xfer += $output->writeFieldBegin('lineId');
			$xfer += $output->writeI64($this->lineId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->headerId !== null) {
			
			$xfer += $output->writeFieldBegin('headerId');
			$xfer += $output->writeI64($this->headerId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderNum !== null) {
			
			$xfer += $output->writeFieldBegin('orderNum');
			$xfer += $output->writeString($this->orderNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderId !== null) {
			
			$xfer += $output->writeFieldBegin('orderId');
			$xfer += $output->writeString($this->orderId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lineNum !== null) {
			
			$xfer += $output->writeFieldBegin('lineNum');
			$xfer += $output->writeI64($this->lineNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lineType !== null) {
			
			$xfer += $output->writeFieldBegin('lineType');
			$xfer += $output->writeString($this->lineType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->skuId !== null) {
			
			$xfer += $output->writeFieldBegin('skuId');
			$xfer += $output->writeString($this->skuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->itemNum !== null) {
			
			$xfer += $output->writeFieldBegin('itemNum');
			$xfer += $output->writeString($this->itemNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->description !== null) {
			
			$xfer += $output->writeFieldBegin('description');
			$xfer += $output->writeString($this->description);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payType !== null) {
			
			$xfer += $output->writeFieldBegin('payType');
			$xfer += $output->writeString($this->payType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payMethod !== null) {
			
			$xfer += $output->writeFieldBegin('payMethod');
			$xfer += $output->writeString($this->payMethod);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payNumber !== null) {
			
			$xfer += $output->writeFieldBegin('payNumber');
			$xfer += $output->writeString($this->payNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payDate !== null) {
			
			$xfer += $output->writeFieldBegin('payDate');
			$xfer += $output->writeI64($this->payDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnPath !== null) {
			
			$xfer += $output->writeFieldBegin('returnPath');
			$xfer += $output->writeString($this->returnPath);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->uomCode !== null) {
			
			$xfer += $output->writeFieldBegin('uomCode');
			$xfer += $output->writeString($this->uomCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->qty !== null) {
			
			$xfer += $output->writeFieldBegin('qty');
			$xfer += $output->writeDouble($this->qty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->price !== null) {
			
			$xfer += $output->writeFieldBegin('price');
			$xfer += $output->writeDouble($this->price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->amount !== null) {
			
			$xfer += $output->writeFieldBegin('amount');
			$xfer += $output->writeDouble($this->amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->taxRate !== null) {
			
			$xfer += $output->writeFieldBegin('taxRate');
			$xfer += $output->writeString($this->taxRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->taxCode !== null) {
			
			$xfer += $output->writeFieldBegin('taxCode');
			$xfer += $output->writeString($this->taxCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->taxAmount !== null) {
			
			$xfer += $output->writeFieldBegin('taxAmount');
			$xfer += $output->writeDouble($this->taxAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totalAmount !== null) {
			
			$xfer += $output->writeFieldBegin('totalAmount');
			$xfer += $output->writeDouble($this->totalAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ctlReference !== null) {
			
			$xfer += $output->writeFieldBegin('ctlReference');
			$xfer += $output->writeString($this->ctlReference);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorNum !== null) {
			
			$xfer += $output->writeFieldBegin('vendorNum');
			$xfer += $output->writeString($this->vendorNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorName !== null) {
			
			$xfer += $output->writeFieldBegin('vendorName');
			$xfer += $output->writeString($this->vendorName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->chargeRate !== null) {
			
			$xfer += $output->writeFieldBegin('chargeRate');
			$xfer += $output->writeString($this->chargeRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sourceOrder !== null) {
			
			$xfer += $output->writeFieldBegin('sourceOrder');
			$xfer += $output->writeString($this->sourceOrder);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poNumber !== null) {
			
			$xfer += $output->writeFieldBegin('poNumber');
			$xfer += $output->writeString($this->poNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->discountRate !== null) {
			
			$xfer += $output->writeFieldBegin('discountRate');
			$xfer += $output->writeString($this->discountRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->scheduleId !== null) {
			
			$xfer += $output->writeFieldBegin('scheduleId');
			$xfer += $output->writeI64($this->scheduleId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandId !== null) {
			
			$xfer += $output->writeFieldBegin('brandId');
			$xfer += $output->writeI64($this->brandId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->priceId !== null) {
			
			$xfer += $output->writeFieldBegin('priceId');
			$xfer += $output->writeI64($this->priceId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vSkuId !== null) {
			
			$xfer += $output->writeFieldBegin('vSkuId');
			$xfer += $output->writeI64($this->vSkuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->processFlag !== null) {
			
			$xfer += $output->writeFieldBegin('processFlag');
			$xfer += $output->writeString($this->processFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->errorMessage !== null) {
			
			$xfer += $output->writeFieldBegin('errorMessage');
			$xfer += $output->writeString($this->errorMessage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->versionNumber !== null) {
			
			$xfer += $output->writeFieldBegin('versionNumber');
			$xfer += $output->writeI64($this->versionNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->requestId !== null) {
			
			$xfer += $output->writeFieldBegin('requestId');
			$xfer += $output->writeI64($this->requestId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attributeCategory !== null) {
			
			$xfer += $output->writeFieldBegin('attributeCategory');
			$xfer += $output->writeString($this->attributeCategory);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute1 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute1');
			$xfer += $output->writeString($this->attribute1);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute2 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute2');
			$xfer += $output->writeString($this->attribute2);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute3 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute3');
			$xfer += $output->writeString($this->attribute3);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute4 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute4');
			$xfer += $output->writeString($this->attribute4);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute5 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute5');
			$xfer += $output->writeString($this->attribute5);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute6 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute6');
			$xfer += $output->writeString($this->attribute6);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute7 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute7');
			$xfer += $output->writeString($this->attribute7);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute8 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute8');
			$xfer += $output->writeString($this->attribute8);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute9 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute9');
			$xfer += $output->writeString($this->attribute9);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute10 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute10');
			$xfer += $output->writeString($this->attribute10);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ebsTrxId !== null) {
			
			$xfer += $output->writeFieldBegin('ebsTrxId');
			$xfer += $output->writeI64($this->ebsTrxId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->imgReason !== null) {
			
			$xfer += $output->writeFieldBegin('imgReason');
			$xfer += $output->writeString($this->imgReason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->priceTime !== null) {
			
			$xfer += $output->writeFieldBegin('priceTime');
			$xfer += $output->writeString($this->priceTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->discountSku !== null) {
			
			$xfer += $output->writeFieldBegin('discountSku');
			$xfer += $output->writeString($this->discountSku);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activeFav !== null) {
			
			$xfer += $output->writeFieldBegin('activeFav');
			$xfer += $output->writeDouble($this->activeFav);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->couponFav !== null) {
			
			$xfer += $output->writeFieldBegin('couponFav');
			$xfer += $output->writeDouble($this->couponFav);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payFav !== null) {
			
			$xfer += $output->writeFieldBegin('payFav');
			$xfer += $output->writeDouble($this->payFav);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->realPaidMoney !== null) {
			
			$xfer += $output->writeFieldBegin('realPaidMoney');
			$xfer += $output->writeDouble($this->realPaidMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeI64($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createdBy !== null) {
			
			$xfer += $output->writeFieldBegin('createdBy');
			$xfer += $output->writeString($this->createdBy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateTime !== null) {
			
			$xfer += $output->writeFieldBegin('updateTime');
			$xfer += $output->writeI64($this->updateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updatedBy !== null) {
			
			$xfer += $output->writeFieldBegin('updatedBy');
			$xfer += $output->writeString($this->updatedBy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isDeleted !== null) {
			
			$xfer += $output->writeFieldBegin('isDeleted');
			$xfer += $output->writeByte($this->isDeleted);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>