<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class VopExportDetail {
	
	static $_TSPEC;
	public $orderSn = null;
	public $stat = null;
	public $vipclub = null;
	public $addTime = null;
	public $updateTime = null;
	public $vendorName = null;
	public $transportDay = null;
	public $buyer = null;
	public $address = null;
	public $mobile = null;
	public $tel = null;
	public $postcode = null;
	public $isExport = null;
	public $exportTime = null;
	public $invoice = null;
	public $taxPayerNo = null;
	public $exPayMoney1 = null;
	public $remark = null;
	public $po = null;
	public $brandName = null;
	public $goodName = null;
	public $amount = null;
	public $size = null;
	public $goodNo = null;
	public $Barcode = null;
	public $price = null;
	public $customizedInfo = null;
	public $vendorRemark = null;
	public $pdcSN = null;
	public $pdcBarCode = null;
	public $b2cWarehouseName = null;
	public $goodsColor = null;
	public $goodsMoney = null;
	public $favourableMoney = null;
	public $carriage = null;
	public $payableAmount = null;
	public $payType = null;
	public $exPayMoney2 = null;
	public $invoiceDeductMoney = null;
	public $goodsLineMoney = null;
	public $cscRemarkList = null;
	public $storeRemarkList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			2 => array(
			'var' => 'stat'
			),
			3 => array(
			'var' => 'vipclub'
			),
			4 => array(
			'var' => 'addTime'
			),
			5 => array(
			'var' => 'updateTime'
			),
			6 => array(
			'var' => 'vendorName'
			),
			7 => array(
			'var' => 'transportDay'
			),
			8 => array(
			'var' => 'buyer'
			),
			9 => array(
			'var' => 'address'
			),
			10 => array(
			'var' => 'mobile'
			),
			11 => array(
			'var' => 'tel'
			),
			12 => array(
			'var' => 'postcode'
			),
			13 => array(
			'var' => 'isExport'
			),
			14 => array(
			'var' => 'exportTime'
			),
			15 => array(
			'var' => 'invoice'
			),
			16 => array(
			'var' => 'taxPayerNo'
			),
			17 => array(
			'var' => 'exPayMoney1'
			),
			18 => array(
			'var' => 'remark'
			),
			19 => array(
			'var' => 'po'
			),
			20 => array(
			'var' => 'brandName'
			),
			21 => array(
			'var' => 'goodName'
			),
			22 => array(
			'var' => 'amount'
			),
			23 => array(
			'var' => 'size'
			),
			24 => array(
			'var' => 'goodNo'
			),
			25 => array(
			'var' => 'Barcode'
			),
			26 => array(
			'var' => 'price'
			),
			27 => array(
			'var' => 'customizedInfo'
			),
			28 => array(
			'var' => 'vendorRemark'
			),
			29 => array(
			'var' => 'pdcSN'
			),
			30 => array(
			'var' => 'pdcBarCode'
			),
			31 => array(
			'var' => 'b2cWarehouseName'
			),
			32 => array(
			'var' => 'goodsColor'
			),
			33 => array(
			'var' => 'goodsMoney'
			),
			34 => array(
			'var' => 'favourableMoney'
			),
			35 => array(
			'var' => 'carriage'
			),
			36 => array(
			'var' => 'payableAmount'
			),
			37 => array(
			'var' => 'payType'
			),
			38 => array(
			'var' => 'exPayMoney2'
			),
			39 => array(
			'var' => 'invoiceDeductMoney'
			),
			40 => array(
			'var' => 'goodsLineMoney'
			),
			41 => array(
			'var' => 'cscRemarkList'
			),
			42 => array(
			'var' => 'storeRemarkList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['stat'])){
				
				$this->stat = $vals['stat'];
			}
			
			
			if (isset($vals['vipclub'])){
				
				$this->vipclub = $vals['vipclub'];
			}
			
			
			if (isset($vals['addTime'])){
				
				$this->addTime = $vals['addTime'];
			}
			
			
			if (isset($vals['updateTime'])){
				
				$this->updateTime = $vals['updateTime'];
			}
			
			
			if (isset($vals['vendorName'])){
				
				$this->vendorName = $vals['vendorName'];
			}
			
			
			if (isset($vals['transportDay'])){
				
				$this->transportDay = $vals['transportDay'];
			}
			
			
			if (isset($vals['buyer'])){
				
				$this->buyer = $vals['buyer'];
			}
			
			
			if (isset($vals['address'])){
				
				$this->address = $vals['address'];
			}
			
			
			if (isset($vals['mobile'])){
				
				$this->mobile = $vals['mobile'];
			}
			
			
			if (isset($vals['tel'])){
				
				$this->tel = $vals['tel'];
			}
			
			
			if (isset($vals['postcode'])){
				
				$this->postcode = $vals['postcode'];
			}
			
			
			if (isset($vals['isExport'])){
				
				$this->isExport = $vals['isExport'];
			}
			
			
			if (isset($vals['exportTime'])){
				
				$this->exportTime = $vals['exportTime'];
			}
			
			
			if (isset($vals['invoice'])){
				
				$this->invoice = $vals['invoice'];
			}
			
			
			if (isset($vals['taxPayerNo'])){
				
				$this->taxPayerNo = $vals['taxPayerNo'];
			}
			
			
			if (isset($vals['exPayMoney1'])){
				
				$this->exPayMoney1 = $vals['exPayMoney1'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['po'])){
				
				$this->po = $vals['po'];
			}
			
			
			if (isset($vals['brandName'])){
				
				$this->brandName = $vals['brandName'];
			}
			
			
			if (isset($vals['goodName'])){
				
				$this->goodName = $vals['goodName'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['size'])){
				
				$this->size = $vals['size'];
			}
			
			
			if (isset($vals['goodNo'])){
				
				$this->goodNo = $vals['goodNo'];
			}
			
			
			if (isset($vals['Barcode'])){
				
				$this->Barcode = $vals['Barcode'];
			}
			
			
			if (isset($vals['price'])){
				
				$this->price = $vals['price'];
			}
			
			
			if (isset($vals['customizedInfo'])){
				
				$this->customizedInfo = $vals['customizedInfo'];
			}
			
			
			if (isset($vals['vendorRemark'])){
				
				$this->vendorRemark = $vals['vendorRemark'];
			}
			
			
			if (isset($vals['pdcSN'])){
				
				$this->pdcSN = $vals['pdcSN'];
			}
			
			
			if (isset($vals['pdcBarCode'])){
				
				$this->pdcBarCode = $vals['pdcBarCode'];
			}
			
			
			if (isset($vals['b2cWarehouseName'])){
				
				$this->b2cWarehouseName = $vals['b2cWarehouseName'];
			}
			
			
			if (isset($vals['goodsColor'])){
				
				$this->goodsColor = $vals['goodsColor'];
			}
			
			
			if (isset($vals['goodsMoney'])){
				
				$this->goodsMoney = $vals['goodsMoney'];
			}
			
			
			if (isset($vals['favourableMoney'])){
				
				$this->favourableMoney = $vals['favourableMoney'];
			}
			
			
			if (isset($vals['carriage'])){
				
				$this->carriage = $vals['carriage'];
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
			
			
			if (isset($vals['goodsLineMoney'])){
				
				$this->goodsLineMoney = $vals['goodsLineMoney'];
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
		
		return 'VopExportDetail';
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
			
			
			
			
			if ("stat" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->stat);
				
			}
			
			
			
			
			if ("vipclub" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vipclub);
				
			}
			
			
			
			
			if ("addTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->addTime);
				
			}
			
			
			
			
			if ("updateTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->updateTime);
				
			}
			
			
			
			
			if ("vendorName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorName);
				
			}
			
			
			
			
			if ("transportDay" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportDay);
				
			}
			
			
			
			
			if ("buyer" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyer);
				
			}
			
			
			
			
			if ("address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address);
				
			}
			
			
			
			
			if ("mobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mobile);
				
			}
			
			
			
			
			if ("tel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tel);
				
			}
			
			
			
			
			if ("postcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->postcode);
				
			}
			
			
			
			
			if ("isExport" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->isExport);
				
			}
			
			
			
			
			if ("exportTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exportTime);
				
			}
			
			
			
			
			if ("invoice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoice);
				
			}
			
			
			
			
			if ("taxPayerNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->taxPayerNo);
				
			}
			
			
			
			
			if ("exPayMoney1" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exPayMoney1);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("po" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po);
				
			}
			
			
			
			
			if ("brandName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandName);
				
			}
			
			
			
			
			if ("goodName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodName);
				
			}
			
			
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->amount); 
				
			}
			
			
			
			
			if ("size" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->size);
				
			}
			
			
			
			
			if ("goodNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodNo);
				
			}
			
			
			
			
			if ("Barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->Barcode);
				
			}
			
			
			
			
			if ("price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->price);
				
			}
			
			
			
			
			if ("customizedInfo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->customizedInfo);
				
			}
			
			
			
			
			if ("vendorRemark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorRemark);
				
			}
			
			
			
			
			if ("pdcSN" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pdcSN);
				
			}
			
			
			
			
			if ("pdcBarCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pdcBarCode);
				
			}
			
			
			
			
			if ("b2cWarehouseName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->b2cWarehouseName);
				
			}
			
			
			
			
			if ("goodsColor" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsColor);
				
			}
			
			
			
			
			if ("goodsMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsMoney);
				
			}
			
			
			
			
			if ("favourableMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->favourableMoney);
				
			}
			
			
			
			
			if ("carriage" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriage);
				
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
			
			
			
			
			if ("goodsLineMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsLineMoney);
				
			}
			
			
			
			
			if ("cscRemarkList" == $schemeField){
				
				$needSkip = false;
				
				$this->cscRemarkList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\sof\sof\service\Remark();
						$elem0->read($input);
						
						$this->cscRemarkList[$_size0++] = $elem0;
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
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\sof\sof\service\Remark();
						$elem1->read($input);
						
						$this->storeRemarkList[$_size1++] = $elem1;
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
		
		
		if($this->vendorName !== null) {
			
			$xfer += $output->writeFieldBegin('vendorName');
			$xfer += $output->writeString($this->vendorName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportDay !== null) {
			
			$xfer += $output->writeFieldBegin('transportDay');
			$xfer += $output->writeString($this->transportDay);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyer !== null) {
			
			$xfer += $output->writeFieldBegin('buyer');
			$xfer += $output->writeString($this->buyer);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->address !== null) {
			
			$xfer += $output->writeFieldBegin('address');
			$xfer += $output->writeString($this->address);
			
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
		
		
		if($this->postcode !== null) {
			
			$xfer += $output->writeFieldBegin('postcode');
			$xfer += $output->writeString($this->postcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isExport !== null) {
			
			$xfer += $output->writeFieldBegin('isExport');
			$xfer += $output->writeString($this->isExport);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exportTime !== null) {
			
			$xfer += $output->writeFieldBegin('exportTime');
			$xfer += $output->writeString($this->exportTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoice !== null) {
			
			$xfer += $output->writeFieldBegin('invoice');
			$xfer += $output->writeString($this->invoice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->taxPayerNo !== null) {
			
			$xfer += $output->writeFieldBegin('taxPayerNo');
			$xfer += $output->writeString($this->taxPayerNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exPayMoney1 !== null) {
			
			$xfer += $output->writeFieldBegin('exPayMoney1');
			$xfer += $output->writeString($this->exPayMoney1);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po !== null) {
			
			$xfer += $output->writeFieldBegin('po');
			$xfer += $output->writeString($this->po);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandName !== null) {
			
			$xfer += $output->writeFieldBegin('brandName');
			$xfer += $output->writeString($this->brandName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodName !== null) {
			
			$xfer += $output->writeFieldBegin('goodName');
			$xfer += $output->writeString($this->goodName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->amount !== null) {
			
			$xfer += $output->writeFieldBegin('amount');
			$xfer += $output->writeI32($this->amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->size !== null) {
			
			$xfer += $output->writeFieldBegin('size');
			$xfer += $output->writeString($this->size);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodNo !== null) {
			
			$xfer += $output->writeFieldBegin('goodNo');
			$xfer += $output->writeString($this->goodNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->Barcode !== null) {
			
			$xfer += $output->writeFieldBegin('Barcode');
			$xfer += $output->writeString($this->Barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->price !== null) {
			
			$xfer += $output->writeFieldBegin('price');
			$xfer += $output->writeString($this->price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customizedInfo !== null) {
			
			$xfer += $output->writeFieldBegin('customizedInfo');
			$xfer += $output->writeString($this->customizedInfo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorRemark !== null) {
			
			$xfer += $output->writeFieldBegin('vendorRemark');
			$xfer += $output->writeString($this->vendorRemark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pdcSN !== null) {
			
			$xfer += $output->writeFieldBegin('pdcSN');
			$xfer += $output->writeString($this->pdcSN);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pdcBarCode !== null) {
			
			$xfer += $output->writeFieldBegin('pdcBarCode');
			$xfer += $output->writeString($this->pdcBarCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->b2cWarehouseName !== null) {
			
			$xfer += $output->writeFieldBegin('b2cWarehouseName');
			$xfer += $output->writeString($this->b2cWarehouseName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsColor !== null) {
			
			$xfer += $output->writeFieldBegin('goodsColor');
			$xfer += $output->writeString($this->goodsColor);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsMoney !== null) {
			
			$xfer += $output->writeFieldBegin('goodsMoney');
			$xfer += $output->writeString($this->goodsMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->favourableMoney !== null) {
			
			$xfer += $output->writeFieldBegin('favourableMoney');
			$xfer += $output->writeString($this->favourableMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriage !== null) {
			
			$xfer += $output->writeFieldBegin('carriage');
			$xfer += $output->writeString($this->carriage);
			
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
		
		
		if($this->goodsLineMoney !== null) {
			
			$xfer += $output->writeFieldBegin('goodsLineMoney');
			$xfer += $output->writeString($this->goodsLineMoney);
			
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