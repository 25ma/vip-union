<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\om\intfc\service;

class OmPreSaleOrderGoodModel {
	
	static $_TSPEC;
	public $ebsOrderId = null;
	public $merItemNo = null;
	public $qty = null;
	public $price = null;
	public $barcode = null;
	public $vSkuId = null;
	public $vSkuVersion = null;
	public $priceId = null;
	public $orderGoodsExtFlags = null;
	public $goodsType = null;
	public $brandId = null;
	public $deliverTime = null;
	public $createTime = null;
	public $singleGoodsCommodityTax = null;
	public $priceTime = null;
	public $favPrice = null;
	public $prodSkuId = null;
	public $extSubOrderSnList = null;
	public $yardNoList = null;
	public $insuredPriceMoneyRemaining = null;
	public $referenceMerItemNo = null;
	public $scheduledSellingInfoList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'ebsOrderId'
			),
			2 => array(
			'var' => 'merItemNo'
			),
			3 => array(
			'var' => 'qty'
			),
			4 => array(
			'var' => 'price'
			),
			5 => array(
			'var' => 'barcode'
			),
			6 => array(
			'var' => 'vSkuId'
			),
			7 => array(
			'var' => 'vSkuVersion'
			),
			8 => array(
			'var' => 'priceId'
			),
			9 => array(
			'var' => 'orderGoodsExtFlags'
			),
			10 => array(
			'var' => 'goodsType'
			),
			11 => array(
			'var' => 'brandId'
			),
			12 => array(
			'var' => 'deliverTime'
			),
			13 => array(
			'var' => 'createTime'
			),
			14 => array(
			'var' => 'singleGoodsCommodityTax'
			),
			15 => array(
			'var' => 'priceTime'
			),
			16 => array(
			'var' => 'favPrice'
			),
			17 => array(
			'var' => 'prodSkuId'
			),
			18 => array(
			'var' => 'extSubOrderSnList'
			),
			19 => array(
			'var' => 'yardNoList'
			),
			20 => array(
			'var' => 'insuredPriceMoneyRemaining'
			),
			21 => array(
			'var' => 'referenceMerItemNo'
			),
			22 => array(
			'var' => 'scheduledSellingInfoList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['ebsOrderId'])){
				
				$this->ebsOrderId = $vals['ebsOrderId'];
			}
			
			
			if (isset($vals['merItemNo'])){
				
				$this->merItemNo = $vals['merItemNo'];
			}
			
			
			if (isset($vals['qty'])){
				
				$this->qty = $vals['qty'];
			}
			
			
			if (isset($vals['price'])){
				
				$this->price = $vals['price'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['vSkuId'])){
				
				$this->vSkuId = $vals['vSkuId'];
			}
			
			
			if (isset($vals['vSkuVersion'])){
				
				$this->vSkuVersion = $vals['vSkuVersion'];
			}
			
			
			if (isset($vals['priceId'])){
				
				$this->priceId = $vals['priceId'];
			}
			
			
			if (isset($vals['orderGoodsExtFlags'])){
				
				$this->orderGoodsExtFlags = $vals['orderGoodsExtFlags'];
			}
			
			
			if (isset($vals['goodsType'])){
				
				$this->goodsType = $vals['goodsType'];
			}
			
			
			if (isset($vals['brandId'])){
				
				$this->brandId = $vals['brandId'];
			}
			
			
			if (isset($vals['deliverTime'])){
				
				$this->deliverTime = $vals['deliverTime'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['singleGoodsCommodityTax'])){
				
				$this->singleGoodsCommodityTax = $vals['singleGoodsCommodityTax'];
			}
			
			
			if (isset($vals['priceTime'])){
				
				$this->priceTime = $vals['priceTime'];
			}
			
			
			if (isset($vals['favPrice'])){
				
				$this->favPrice = $vals['favPrice'];
			}
			
			
			if (isset($vals['prodSkuId'])){
				
				$this->prodSkuId = $vals['prodSkuId'];
			}
			
			
			if (isset($vals['extSubOrderSnList'])){
				
				$this->extSubOrderSnList = $vals['extSubOrderSnList'];
			}
			
			
			if (isset($vals['yardNoList'])){
				
				$this->yardNoList = $vals['yardNoList'];
			}
			
			
			if (isset($vals['insuredPriceMoneyRemaining'])){
				
				$this->insuredPriceMoneyRemaining = $vals['insuredPriceMoneyRemaining'];
			}
			
			
			if (isset($vals['referenceMerItemNo'])){
				
				$this->referenceMerItemNo = $vals['referenceMerItemNo'];
			}
			
			
			if (isset($vals['scheduledSellingInfoList'])){
				
				$this->scheduledSellingInfoList = $vals['scheduledSellingInfoList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OmPreSaleOrderGoodModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("ebsOrderId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->ebsOrderId); 
				
			}
			
			
			
			
			if ("merItemNo" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->merItemNo); 
				
			}
			
			
			
			
			if ("qty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->qty); 
				
			}
			
			
			
			
			if ("price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->price);
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("vSkuId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->vSkuId); 
				
			}
			
			
			
			
			if ("vSkuVersion" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->vSkuVersion); 
				
			}
			
			
			
			
			if ("priceId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->priceId); 
				
			}
			
			
			
			
			if ("orderGoodsExtFlags" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderGoodsExtFlags);
				
			}
			
			
			
			
			if ("goodsType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->goodsType); 
				
			}
			
			
			
			
			if ("brandId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->brandId); 
				
			}
			
			
			
			
			if ("deliverTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->deliverTime); 
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime); 
				
			}
			
			
			
			
			if ("singleGoodsCommodityTax" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->singleGoodsCommodityTax);
				
			}
			
			
			
			
			if ("priceTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->priceTime); 
				
			}
			
			
			
			
			if ("favPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->favPrice);
				
			}
			
			
			
			
			if ("prodSkuId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->prodSkuId);
				
			}
			
			
			
			
			if ("extSubOrderSnList" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->extSubOrderSnList);
				
			}
			
			
			
			
			if ("yardNoList" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->yardNoList);
				
			}
			
			
			
			
			if ("insuredPriceMoneyRemaining" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->insuredPriceMoneyRemaining);
				
			}
			
			
			
			
			if ("referenceMerItemNo" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->referenceMerItemNo); 
				
			}
			
			
			
			
			if ("scheduledSellingInfoList" == $schemeField){
				
				$needSkip = false;
				
				$this->scheduledSellingInfoList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\fcs\osp\om\intfc\service\OmPreSaleScheduledSellingInfo();
						$elem0->read($input);
						
						$this->scheduledSellingInfoList[$_size0++] = $elem0;
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
		
		if($this->ebsOrderId !== null) {
			
			$xfer += $output->writeFieldBegin('ebsOrderId');
			$xfer += $output->writeI64($this->ebsOrderId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->merItemNo !== null) {
			
			$xfer += $output->writeFieldBegin('merItemNo');
			$xfer += $output->writeI64($this->merItemNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->qty !== null) {
			
			$xfer += $output->writeFieldBegin('qty');
			$xfer += $output->writeI32($this->qty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->price !== null) {
			
			$xfer += $output->writeFieldBegin('price');
			$xfer += $output->writeString($this->price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vSkuId !== null) {
			
			$xfer += $output->writeFieldBegin('vSkuId');
			$xfer += $output->writeI64($this->vSkuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vSkuVersion !== null) {
			
			$xfer += $output->writeFieldBegin('vSkuVersion');
			$xfer += $output->writeI64($this->vSkuVersion);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->priceId !== null) {
			
			$xfer += $output->writeFieldBegin('priceId');
			$xfer += $output->writeI64($this->priceId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderGoodsExtFlags !== null) {
			
			$xfer += $output->writeFieldBegin('orderGoodsExtFlags');
			$xfer += $output->writeString($this->orderGoodsExtFlags);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsType !== null) {
			
			$xfer += $output->writeFieldBegin('goodsType');
			$xfer += $output->writeI32($this->goodsType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandId !== null) {
			
			$xfer += $output->writeFieldBegin('brandId');
			$xfer += $output->writeI64($this->brandId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliverTime !== null) {
			
			$xfer += $output->writeFieldBegin('deliverTime');
			$xfer += $output->writeI64($this->deliverTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeI64($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->singleGoodsCommodityTax !== null) {
			
			$xfer += $output->writeFieldBegin('singleGoodsCommodityTax');
			$xfer += $output->writeString($this->singleGoodsCommodityTax);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->priceTime !== null) {
			
			$xfer += $output->writeFieldBegin('priceTime');
			$xfer += $output->writeI64($this->priceTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->favPrice !== null) {
			
			$xfer += $output->writeFieldBegin('favPrice');
			$xfer += $output->writeString($this->favPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->prodSkuId !== null) {
			
			$xfer += $output->writeFieldBegin('prodSkuId');
			$xfer += $output->writeString($this->prodSkuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extSubOrderSnList !== null) {
			
			$xfer += $output->writeFieldBegin('extSubOrderSnList');
			$xfer += $output->writeString($this->extSubOrderSnList);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->yardNoList !== null) {
			
			$xfer += $output->writeFieldBegin('yardNoList');
			$xfer += $output->writeString($this->yardNoList);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->insuredPriceMoneyRemaining !== null) {
			
			$xfer += $output->writeFieldBegin('insuredPriceMoneyRemaining');
			$xfer += $output->writeString($this->insuredPriceMoneyRemaining);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->referenceMerItemNo !== null) {
			
			$xfer += $output->writeFieldBegin('referenceMerItemNo');
			$xfer += $output->writeI64($this->referenceMerItemNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->scheduledSellingInfoList !== null) {
			
			$xfer += $output->writeFieldBegin('scheduledSellingInfoList');
			
			if (!is_array($this->scheduledSellingInfoList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->scheduledSellingInfoList as $iter0){
				
				
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