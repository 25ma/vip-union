<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\ap\service;

class ExchangeDetail {
	
	static $_TSPEC;
	public $vendorCode = null;
	public $parentMonth = null;
	public $orderNum = null;
	public $pickNo = null;
	public $deliveryNo = null;
	public $poNo = null;
	public $itemNo = null;
	public $vendorSellingPrice = null;
	public $poDeliveryTypeName = null;
	public $grossMarginRate = null;
	public $billTaxPrice = null;
	public $quantity = null;
	public $totalBillAmount = null;
	public $discountAmount = null;
	public $vendorFavAmount = null;
	public $drCustQuantity = null;
	public $drCustAmount = null;
	public $drCustDiscountAmount = null;
	public $drCustVendorFavAmount = null;
	public $exchOrderNum = null;
	public $exchPickNo = null;
	public $exchDeliveryNo = null;
	public $exchPoNo = null;
	public $exchItemNo = null;
	public $exchVendorSellingPrice = null;
	public $exchPoDeliveryTypeName = null;
	public $exchGrossMarginRate = null;
	public $exchBillTaxPrice = null;
	public $exchQuantity = null;
	public $exchTotalBillAmount = null;
	public $exchDiscountAmount = null;
	public $exchVendorFavAmount = null;
	public $exchDrCustQuantity = null;
	public $exchDrCustAmount = null;
	public $exchDrCustDiscountAmount = null;
	public $exchDrCustVendorFavAmount = null;
	public $priceDiff = null;
	public $drCustPriceDiff = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendorCode'
			),
			2 => array(
			'var' => 'parentMonth'
			),
			3 => array(
			'var' => 'orderNum'
			),
			4 => array(
			'var' => 'pickNo'
			),
			5 => array(
			'var' => 'deliveryNo'
			),
			6 => array(
			'var' => 'poNo'
			),
			7 => array(
			'var' => 'itemNo'
			),
			8 => array(
			'var' => 'vendorSellingPrice'
			),
			9 => array(
			'var' => 'poDeliveryTypeName'
			),
			10 => array(
			'var' => 'grossMarginRate'
			),
			11 => array(
			'var' => 'billTaxPrice'
			),
			12 => array(
			'var' => 'quantity'
			),
			13 => array(
			'var' => 'totalBillAmount'
			),
			14 => array(
			'var' => 'discountAmount'
			),
			15 => array(
			'var' => 'vendorFavAmount'
			),
			16 => array(
			'var' => 'drCustQuantity'
			),
			17 => array(
			'var' => 'drCustAmount'
			),
			18 => array(
			'var' => 'drCustDiscountAmount'
			),
			19 => array(
			'var' => 'drCustVendorFavAmount'
			),
			20 => array(
			'var' => 'exchOrderNum'
			),
			21 => array(
			'var' => 'exchPickNo'
			),
			22 => array(
			'var' => 'exchDeliveryNo'
			),
			23 => array(
			'var' => 'exchPoNo'
			),
			24 => array(
			'var' => 'exchItemNo'
			),
			25 => array(
			'var' => 'exchVendorSellingPrice'
			),
			26 => array(
			'var' => 'exchPoDeliveryTypeName'
			),
			27 => array(
			'var' => 'exchGrossMarginRate'
			),
			28 => array(
			'var' => 'exchBillTaxPrice'
			),
			29 => array(
			'var' => 'exchQuantity'
			),
			30 => array(
			'var' => 'exchTotalBillAmount'
			),
			31 => array(
			'var' => 'exchDiscountAmount'
			),
			32 => array(
			'var' => 'exchVendorFavAmount'
			),
			33 => array(
			'var' => 'exchDrCustQuantity'
			),
			34 => array(
			'var' => 'exchDrCustAmount'
			),
			35 => array(
			'var' => 'exchDrCustDiscountAmount'
			),
			36 => array(
			'var' => 'exchDrCustVendorFavAmount'
			),
			37 => array(
			'var' => 'priceDiff'
			),
			38 => array(
			'var' => 'drCustPriceDiff'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['parentMonth'])){
				
				$this->parentMonth = $vals['parentMonth'];
			}
			
			
			if (isset($vals['orderNum'])){
				
				$this->orderNum = $vals['orderNum'];
			}
			
			
			if (isset($vals['pickNo'])){
				
				$this->pickNo = $vals['pickNo'];
			}
			
			
			if (isset($vals['deliveryNo'])){
				
				$this->deliveryNo = $vals['deliveryNo'];
			}
			
			
			if (isset($vals['poNo'])){
				
				$this->poNo = $vals['poNo'];
			}
			
			
			if (isset($vals['itemNo'])){
				
				$this->itemNo = $vals['itemNo'];
			}
			
			
			if (isset($vals['vendorSellingPrice'])){
				
				$this->vendorSellingPrice = $vals['vendorSellingPrice'];
			}
			
			
			if (isset($vals['poDeliveryTypeName'])){
				
				$this->poDeliveryTypeName = $vals['poDeliveryTypeName'];
			}
			
			
			if (isset($vals['grossMarginRate'])){
				
				$this->grossMarginRate = $vals['grossMarginRate'];
			}
			
			
			if (isset($vals['billTaxPrice'])){
				
				$this->billTaxPrice = $vals['billTaxPrice'];
			}
			
			
			if (isset($vals['quantity'])){
				
				$this->quantity = $vals['quantity'];
			}
			
			
			if (isset($vals['totalBillAmount'])){
				
				$this->totalBillAmount = $vals['totalBillAmount'];
			}
			
			
			if (isset($vals['discountAmount'])){
				
				$this->discountAmount = $vals['discountAmount'];
			}
			
			
			if (isset($vals['vendorFavAmount'])){
				
				$this->vendorFavAmount = $vals['vendorFavAmount'];
			}
			
			
			if (isset($vals['drCustQuantity'])){
				
				$this->drCustQuantity = $vals['drCustQuantity'];
			}
			
			
			if (isset($vals['drCustAmount'])){
				
				$this->drCustAmount = $vals['drCustAmount'];
			}
			
			
			if (isset($vals['drCustDiscountAmount'])){
				
				$this->drCustDiscountAmount = $vals['drCustDiscountAmount'];
			}
			
			
			if (isset($vals['drCustVendorFavAmount'])){
				
				$this->drCustVendorFavAmount = $vals['drCustVendorFavAmount'];
			}
			
			
			if (isset($vals['exchOrderNum'])){
				
				$this->exchOrderNum = $vals['exchOrderNum'];
			}
			
			
			if (isset($vals['exchPickNo'])){
				
				$this->exchPickNo = $vals['exchPickNo'];
			}
			
			
			if (isset($vals['exchDeliveryNo'])){
				
				$this->exchDeliveryNo = $vals['exchDeliveryNo'];
			}
			
			
			if (isset($vals['exchPoNo'])){
				
				$this->exchPoNo = $vals['exchPoNo'];
			}
			
			
			if (isset($vals['exchItemNo'])){
				
				$this->exchItemNo = $vals['exchItemNo'];
			}
			
			
			if (isset($vals['exchVendorSellingPrice'])){
				
				$this->exchVendorSellingPrice = $vals['exchVendorSellingPrice'];
			}
			
			
			if (isset($vals['exchPoDeliveryTypeName'])){
				
				$this->exchPoDeliveryTypeName = $vals['exchPoDeliveryTypeName'];
			}
			
			
			if (isset($vals['exchGrossMarginRate'])){
				
				$this->exchGrossMarginRate = $vals['exchGrossMarginRate'];
			}
			
			
			if (isset($vals['exchBillTaxPrice'])){
				
				$this->exchBillTaxPrice = $vals['exchBillTaxPrice'];
			}
			
			
			if (isset($vals['exchQuantity'])){
				
				$this->exchQuantity = $vals['exchQuantity'];
			}
			
			
			if (isset($vals['exchTotalBillAmount'])){
				
				$this->exchTotalBillAmount = $vals['exchTotalBillAmount'];
			}
			
			
			if (isset($vals['exchDiscountAmount'])){
				
				$this->exchDiscountAmount = $vals['exchDiscountAmount'];
			}
			
			
			if (isset($vals['exchVendorFavAmount'])){
				
				$this->exchVendorFavAmount = $vals['exchVendorFavAmount'];
			}
			
			
			if (isset($vals['exchDrCustQuantity'])){
				
				$this->exchDrCustQuantity = $vals['exchDrCustQuantity'];
			}
			
			
			if (isset($vals['exchDrCustAmount'])){
				
				$this->exchDrCustAmount = $vals['exchDrCustAmount'];
			}
			
			
			if (isset($vals['exchDrCustDiscountAmount'])){
				
				$this->exchDrCustDiscountAmount = $vals['exchDrCustDiscountAmount'];
			}
			
			
			if (isset($vals['exchDrCustVendorFavAmount'])){
				
				$this->exchDrCustVendorFavAmount = $vals['exchDrCustVendorFavAmount'];
			}
			
			
			if (isset($vals['priceDiff'])){
				
				$this->priceDiff = $vals['priceDiff'];
			}
			
			
			if (isset($vals['drCustPriceDiff'])){
				
				$this->drCustPriceDiff = $vals['drCustPriceDiff'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ExchangeDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCode);
				
			}
			
			
			
			
			if ("parentMonth" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->parentMonth);
				
			}
			
			
			
			
			if ("orderNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderNum);
				
			}
			
			
			
			
			if ("pickNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pickNo);
				
			}
			
			
			
			
			if ("deliveryNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deliveryNo);
				
			}
			
			
			
			
			if ("poNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poNo);
				
			}
			
			
			
			
			if ("itemNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->itemNo);
				
			}
			
			
			
			
			if ("vendorSellingPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->vendorSellingPrice);
				
			}
			
			
			
			
			if ("poDeliveryTypeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poDeliveryTypeName);
				
			}
			
			
			
			
			if ("grossMarginRate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->grossMarginRate);
				
			}
			
			
			
			
			if ("billTaxPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->billTaxPrice);
				
			}
			
			
			
			
			if ("quantity" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->quantity);
				
			}
			
			
			
			
			if ("totalBillAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->totalBillAmount);
				
			}
			
			
			
			
			if ("discountAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->discountAmount);
				
			}
			
			
			
			
			if ("vendorFavAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->vendorFavAmount);
				
			}
			
			
			
			
			if ("drCustQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->drCustQuantity);
				
			}
			
			
			
			
			if ("drCustAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->drCustAmount);
				
			}
			
			
			
			
			if ("drCustDiscountAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->drCustDiscountAmount);
				
			}
			
			
			
			
			if ("drCustVendorFavAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->drCustVendorFavAmount);
				
			}
			
			
			
			
			if ("exchOrderNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exchOrderNum);
				
			}
			
			
			
			
			if ("exchPickNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exchPickNo);
				
			}
			
			
			
			
			if ("exchDeliveryNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exchDeliveryNo);
				
			}
			
			
			
			
			if ("exchPoNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exchPoNo);
				
			}
			
			
			
			
			if ("exchItemNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exchItemNo);
				
			}
			
			
			
			
			if ("exchVendorSellingPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->exchVendorSellingPrice);
				
			}
			
			
			
			
			if ("exchPoDeliveryTypeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exchPoDeliveryTypeName);
				
			}
			
			
			
			
			if ("exchGrossMarginRate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exchGrossMarginRate);
				
			}
			
			
			
			
			if ("exchBillTaxPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->exchBillTaxPrice);
				
			}
			
			
			
			
			if ("exchQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->exchQuantity);
				
			}
			
			
			
			
			if ("exchTotalBillAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->exchTotalBillAmount);
				
			}
			
			
			
			
			if ("exchDiscountAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->exchDiscountAmount);
				
			}
			
			
			
			
			if ("exchVendorFavAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->exchVendorFavAmount);
				
			}
			
			
			
			
			if ("exchDrCustQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->exchDrCustQuantity);
				
			}
			
			
			
			
			if ("exchDrCustAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->exchDrCustAmount);
				
			}
			
			
			
			
			if ("exchDrCustDiscountAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->exchDrCustDiscountAmount);
				
			}
			
			
			
			
			if ("exchDrCustVendorFavAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->exchDrCustVendorFavAmount);
				
			}
			
			
			
			
			if ("priceDiff" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->priceDiff);
				
			}
			
			
			
			
			if ("drCustPriceDiff" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->drCustPriceDiff);
				
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
		
		if($this->vendorCode !== null) {
			
			$xfer += $output->writeFieldBegin('vendorCode');
			$xfer += $output->writeString($this->vendorCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->parentMonth !== null) {
			
			$xfer += $output->writeFieldBegin('parentMonth');
			$xfer += $output->writeString($this->parentMonth);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderNum !== null) {
			
			$xfer += $output->writeFieldBegin('orderNum');
			$xfer += $output->writeString($this->orderNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pickNo !== null) {
			
			$xfer += $output->writeFieldBegin('pickNo');
			$xfer += $output->writeString($this->pickNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliveryNo !== null) {
			
			$xfer += $output->writeFieldBegin('deliveryNo');
			$xfer += $output->writeString($this->deliveryNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poNo !== null) {
			
			$xfer += $output->writeFieldBegin('poNo');
			$xfer += $output->writeString($this->poNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->itemNo !== null) {
			
			$xfer += $output->writeFieldBegin('itemNo');
			$xfer += $output->writeString($this->itemNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorSellingPrice !== null) {
			
			$xfer += $output->writeFieldBegin('vendorSellingPrice');
			$xfer += $output->writeDouble($this->vendorSellingPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poDeliveryTypeName !== null) {
			
			$xfer += $output->writeFieldBegin('poDeliveryTypeName');
			$xfer += $output->writeString($this->poDeliveryTypeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->grossMarginRate !== null) {
			
			$xfer += $output->writeFieldBegin('grossMarginRate');
			$xfer += $output->writeString($this->grossMarginRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->billTaxPrice !== null) {
			
			$xfer += $output->writeFieldBegin('billTaxPrice');
			$xfer += $output->writeDouble($this->billTaxPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->quantity !== null) {
			
			$xfer += $output->writeFieldBegin('quantity');
			$xfer += $output->writeDouble($this->quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totalBillAmount !== null) {
			
			$xfer += $output->writeFieldBegin('totalBillAmount');
			$xfer += $output->writeDouble($this->totalBillAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->discountAmount !== null) {
			
			$xfer += $output->writeFieldBegin('discountAmount');
			$xfer += $output->writeDouble($this->discountAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorFavAmount !== null) {
			
			$xfer += $output->writeFieldBegin('vendorFavAmount');
			$xfer += $output->writeDouble($this->vendorFavAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->drCustQuantity !== null) {
			
			$xfer += $output->writeFieldBegin('drCustQuantity');
			$xfer += $output->writeDouble($this->drCustQuantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->drCustAmount !== null) {
			
			$xfer += $output->writeFieldBegin('drCustAmount');
			$xfer += $output->writeDouble($this->drCustAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->drCustDiscountAmount !== null) {
			
			$xfer += $output->writeFieldBegin('drCustDiscountAmount');
			$xfer += $output->writeDouble($this->drCustDiscountAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->drCustVendorFavAmount !== null) {
			
			$xfer += $output->writeFieldBegin('drCustVendorFavAmount');
			$xfer += $output->writeDouble($this->drCustVendorFavAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exchOrderNum !== null) {
			
			$xfer += $output->writeFieldBegin('exchOrderNum');
			$xfer += $output->writeString($this->exchOrderNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exchPickNo !== null) {
			
			$xfer += $output->writeFieldBegin('exchPickNo');
			$xfer += $output->writeString($this->exchPickNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exchDeliveryNo !== null) {
			
			$xfer += $output->writeFieldBegin('exchDeliveryNo');
			$xfer += $output->writeString($this->exchDeliveryNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exchPoNo !== null) {
			
			$xfer += $output->writeFieldBegin('exchPoNo');
			$xfer += $output->writeString($this->exchPoNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exchItemNo !== null) {
			
			$xfer += $output->writeFieldBegin('exchItemNo');
			$xfer += $output->writeString($this->exchItemNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exchVendorSellingPrice !== null) {
			
			$xfer += $output->writeFieldBegin('exchVendorSellingPrice');
			$xfer += $output->writeDouble($this->exchVendorSellingPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exchPoDeliveryTypeName !== null) {
			
			$xfer += $output->writeFieldBegin('exchPoDeliveryTypeName');
			$xfer += $output->writeString($this->exchPoDeliveryTypeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exchGrossMarginRate !== null) {
			
			$xfer += $output->writeFieldBegin('exchGrossMarginRate');
			$xfer += $output->writeString($this->exchGrossMarginRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exchBillTaxPrice !== null) {
			
			$xfer += $output->writeFieldBegin('exchBillTaxPrice');
			$xfer += $output->writeDouble($this->exchBillTaxPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exchQuantity !== null) {
			
			$xfer += $output->writeFieldBegin('exchQuantity');
			$xfer += $output->writeDouble($this->exchQuantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exchTotalBillAmount !== null) {
			
			$xfer += $output->writeFieldBegin('exchTotalBillAmount');
			$xfer += $output->writeDouble($this->exchTotalBillAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exchDiscountAmount !== null) {
			
			$xfer += $output->writeFieldBegin('exchDiscountAmount');
			$xfer += $output->writeDouble($this->exchDiscountAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exchVendorFavAmount !== null) {
			
			$xfer += $output->writeFieldBegin('exchVendorFavAmount');
			$xfer += $output->writeDouble($this->exchVendorFavAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exchDrCustQuantity !== null) {
			
			$xfer += $output->writeFieldBegin('exchDrCustQuantity');
			$xfer += $output->writeDouble($this->exchDrCustQuantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exchDrCustAmount !== null) {
			
			$xfer += $output->writeFieldBegin('exchDrCustAmount');
			$xfer += $output->writeDouble($this->exchDrCustAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exchDrCustDiscountAmount !== null) {
			
			$xfer += $output->writeFieldBegin('exchDrCustDiscountAmount');
			$xfer += $output->writeDouble($this->exchDrCustDiscountAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exchDrCustVendorFavAmount !== null) {
			
			$xfer += $output->writeFieldBegin('exchDrCustVendorFavAmount');
			$xfer += $output->writeDouble($this->exchDrCustVendorFavAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->priceDiff !== null) {
			
			$xfer += $output->writeFieldBegin('priceDiff');
			$xfer += $output->writeDouble($this->priceDiff);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->drCustPriceDiff !== null) {
			
			$xfer += $output->writeFieldBegin('drCustPriceDiff');
			$xfer += $output->writeDouble($this->drCustPriceDiff);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>