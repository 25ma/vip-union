<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\om\intfc\service;

class OmAfterSaleOrderGoodModel {
	
	static $_TSPEC;
	public $id = null;
	public $ebsOrderReturnId = null;
	public $merItemNo = null;
	public $vSkuId = null;
	public $priceId = null;
	public $brandId = null;
	public $priceTime = null;
	public $barcode = null;
	public $price = null;
	public $qty = null;
	public $favPrice = null;
	public $paidPrice = null;
	public $ourReason = null;
	public $unpackTime = null;
	public $imgReason = null;
	public $unpackStatus = null;
	public $createTime = null;
	public $updateTime = null;
	public $prodSkuId = null;
	public $returnGoodsId = null;
	public $insuredPriceAmount = null;
	public $justRefundAmount = null;
	public $relationOrderReturnApplyId = null;
	public $relationOrderSn = null;
	public $relationMerItemNo = null;
	public $relationQty = null;
	public $goodsCategory = null;
	public $noNeedRefundAmount = null;
	public $vendorInfos = null;
	public $historyInsuredInfos = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'ebsOrderReturnId'
			),
			3 => array(
			'var' => 'merItemNo'
			),
			4 => array(
			'var' => 'vSkuId'
			),
			5 => array(
			'var' => 'priceId'
			),
			6 => array(
			'var' => 'brandId'
			),
			7 => array(
			'var' => 'priceTime'
			),
			8 => array(
			'var' => 'barcode'
			),
			9 => array(
			'var' => 'price'
			),
			10 => array(
			'var' => 'qty'
			),
			11 => array(
			'var' => 'favPrice'
			),
			12 => array(
			'var' => 'paidPrice'
			),
			13 => array(
			'var' => 'ourReason'
			),
			14 => array(
			'var' => 'unpackTime'
			),
			15 => array(
			'var' => 'imgReason'
			),
			16 => array(
			'var' => 'unpackStatus'
			),
			17 => array(
			'var' => 'createTime'
			),
			18 => array(
			'var' => 'updateTime'
			),
			19 => array(
			'var' => 'prodSkuId'
			),
			20 => array(
			'var' => 'returnGoodsId'
			),
			21 => array(
			'var' => 'insuredPriceAmount'
			),
			22 => array(
			'var' => 'justRefundAmount'
			),
			23 => array(
			'var' => 'relationOrderReturnApplyId'
			),
			24 => array(
			'var' => 'relationOrderSn'
			),
			25 => array(
			'var' => 'relationMerItemNo'
			),
			26 => array(
			'var' => 'relationQty'
			),
			27 => array(
			'var' => 'goodsCategory'
			),
			28 => array(
			'var' => 'noNeedRefundAmount'
			),
			29 => array(
			'var' => 'vendorInfos'
			),
			30 => array(
			'var' => 'historyInsuredInfos'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['ebsOrderReturnId'])){
				
				$this->ebsOrderReturnId = $vals['ebsOrderReturnId'];
			}
			
			
			if (isset($vals['merItemNo'])){
				
				$this->merItemNo = $vals['merItemNo'];
			}
			
			
			if (isset($vals['vSkuId'])){
				
				$this->vSkuId = $vals['vSkuId'];
			}
			
			
			if (isset($vals['priceId'])){
				
				$this->priceId = $vals['priceId'];
			}
			
			
			if (isset($vals['brandId'])){
				
				$this->brandId = $vals['brandId'];
			}
			
			
			if (isset($vals['priceTime'])){
				
				$this->priceTime = $vals['priceTime'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['price'])){
				
				$this->price = $vals['price'];
			}
			
			
			if (isset($vals['qty'])){
				
				$this->qty = $vals['qty'];
			}
			
			
			if (isset($vals['favPrice'])){
				
				$this->favPrice = $vals['favPrice'];
			}
			
			
			if (isset($vals['paidPrice'])){
				
				$this->paidPrice = $vals['paidPrice'];
			}
			
			
			if (isset($vals['ourReason'])){
				
				$this->ourReason = $vals['ourReason'];
			}
			
			
			if (isset($vals['unpackTime'])){
				
				$this->unpackTime = $vals['unpackTime'];
			}
			
			
			if (isset($vals['imgReason'])){
				
				$this->imgReason = $vals['imgReason'];
			}
			
			
			if (isset($vals['unpackStatus'])){
				
				$this->unpackStatus = $vals['unpackStatus'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['updateTime'])){
				
				$this->updateTime = $vals['updateTime'];
			}
			
			
			if (isset($vals['prodSkuId'])){
				
				$this->prodSkuId = $vals['prodSkuId'];
			}
			
			
			if (isset($vals['returnGoodsId'])){
				
				$this->returnGoodsId = $vals['returnGoodsId'];
			}
			
			
			if (isset($vals['insuredPriceAmount'])){
				
				$this->insuredPriceAmount = $vals['insuredPriceAmount'];
			}
			
			
			if (isset($vals['justRefundAmount'])){
				
				$this->justRefundAmount = $vals['justRefundAmount'];
			}
			
			
			if (isset($vals['relationOrderReturnApplyId'])){
				
				$this->relationOrderReturnApplyId = $vals['relationOrderReturnApplyId'];
			}
			
			
			if (isset($vals['relationOrderSn'])){
				
				$this->relationOrderSn = $vals['relationOrderSn'];
			}
			
			
			if (isset($vals['relationMerItemNo'])){
				
				$this->relationMerItemNo = $vals['relationMerItemNo'];
			}
			
			
			if (isset($vals['relationQty'])){
				
				$this->relationQty = $vals['relationQty'];
			}
			
			
			if (isset($vals['goodsCategory'])){
				
				$this->goodsCategory = $vals['goodsCategory'];
			}
			
			
			if (isset($vals['noNeedRefundAmount'])){
				
				$this->noNeedRefundAmount = $vals['noNeedRefundAmount'];
			}
			
			
			if (isset($vals['vendorInfos'])){
				
				$this->vendorInfos = $vals['vendorInfos'];
			}
			
			
			if (isset($vals['historyInsuredInfos'])){
				
				$this->historyInsuredInfos = $vals['historyInsuredInfos'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OmAfterSaleOrderGoodModel';
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
			
			
			
			
			if ("ebsOrderReturnId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->ebsOrderReturnId); 
				
			}
			
			
			
			
			if ("merItemNo" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->merItemNo); 
				
			}
			
			
			
			
			if ("vSkuId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->vSkuId); 
				
			}
			
			
			
			
			if ("priceId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->priceId); 
				
			}
			
			
			
			
			if ("brandId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->brandId); 
				
			}
			
			
			
			
			if ("priceTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->priceTime); 
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->price);
				
			}
			
			
			
			
			if ("qty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->qty); 
				
			}
			
			
			
			
			if ("favPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->favPrice);
				
			}
			
			
			
			
			if ("paidPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->paidPrice);
				
			}
			
			
			
			
			if ("ourReason" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ourReason);
				
			}
			
			
			
			
			if ("unpackTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->unpackTime); 
				
			}
			
			
			
			
			if ("imgReason" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->imgReason); 
				
			}
			
			
			
			
			if ("unpackStatus" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->unpackStatus); 
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime); 
				
			}
			
			
			
			
			if ("updateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updateTime); 
				
			}
			
			
			
			
			if ("prodSkuId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->prodSkuId);
				
			}
			
			
			
			
			if ("returnGoodsId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnGoodsId);
				
			}
			
			
			
			
			if ("insuredPriceAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->insuredPriceAmount);
				
			}
			
			
			
			
			if ("justRefundAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->justRefundAmount);
				
			}
			
			
			
			
			if ("relationOrderReturnApplyId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->relationOrderReturnApplyId);
				
			}
			
			
			
			
			if ("relationOrderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->relationOrderSn);
				
			}
			
			
			
			
			if ("relationMerItemNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->relationMerItemNo);
				
			}
			
			
			
			
			if ("relationQty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->relationQty); 
				
			}
			
			
			
			
			if ("goodsCategory" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsCategory);
				
			}
			
			
			
			
			if ("noNeedRefundAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->noNeedRefundAmount);
				
			}
			
			
			
			
			if ("vendorInfos" == $schemeField){
				
				$needSkip = false;
				
				$this->vendorInfos = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\fcs\osp\om\intfc\service\VendorInfoModel();
						$elem0->read($input);
						
						$this->vendorInfos[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("historyInsuredInfos" == $schemeField){
				
				$needSkip = false;
				
				$this->historyInsuredInfos = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\fcs\osp\om\intfc\service\HistoryInsuredInfoModel();
						$elem1->read($input);
						
						$this->historyInsuredInfos[$_size1++] = $elem1;
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
		
		
		if($this->ebsOrderReturnId !== null) {
			
			$xfer += $output->writeFieldBegin('ebsOrderReturnId');
			$xfer += $output->writeI64($this->ebsOrderReturnId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->merItemNo !== null) {
			
			$xfer += $output->writeFieldBegin('merItemNo');
			$xfer += $output->writeI64($this->merItemNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vSkuId !== null) {
			
			$xfer += $output->writeFieldBegin('vSkuId');
			$xfer += $output->writeI64($this->vSkuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->priceId !== null) {
			
			$xfer += $output->writeFieldBegin('priceId');
			$xfer += $output->writeI64($this->priceId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandId !== null) {
			
			$xfer += $output->writeFieldBegin('brandId');
			$xfer += $output->writeI64($this->brandId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->priceTime !== null) {
			
			$xfer += $output->writeFieldBegin('priceTime');
			$xfer += $output->writeI64($this->priceTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->price !== null) {
			
			$xfer += $output->writeFieldBegin('price');
			$xfer += $output->writeString($this->price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->qty !== null) {
			
			$xfer += $output->writeFieldBegin('qty');
			$xfer += $output->writeI32($this->qty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->favPrice !== null) {
			
			$xfer += $output->writeFieldBegin('favPrice');
			$xfer += $output->writeString($this->favPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->paidPrice !== null) {
			
			$xfer += $output->writeFieldBegin('paidPrice');
			$xfer += $output->writeString($this->paidPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ourReason !== null) {
			
			$xfer += $output->writeFieldBegin('ourReason');
			$xfer += $output->writeString($this->ourReason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->unpackTime !== null) {
			
			$xfer += $output->writeFieldBegin('unpackTime');
			$xfer += $output->writeI64($this->unpackTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->imgReason !== null) {
			
			$xfer += $output->writeFieldBegin('imgReason');
			$xfer += $output->writeByte($this->imgReason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->unpackStatus !== null) {
			
			$xfer += $output->writeFieldBegin('unpackStatus');
			$xfer += $output->writeByte($this->unpackStatus);
			
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
		
		
		if($this->prodSkuId !== null) {
			
			$xfer += $output->writeFieldBegin('prodSkuId');
			$xfer += $output->writeString($this->prodSkuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnGoodsId !== null) {
			
			$xfer += $output->writeFieldBegin('returnGoodsId');
			$xfer += $output->writeString($this->returnGoodsId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->insuredPriceAmount !== null) {
			
			$xfer += $output->writeFieldBegin('insuredPriceAmount');
			$xfer += $output->writeString($this->insuredPriceAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->justRefundAmount !== null) {
			
			$xfer += $output->writeFieldBegin('justRefundAmount');
			$xfer += $output->writeString($this->justRefundAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->relationOrderReturnApplyId !== null) {
			
			$xfer += $output->writeFieldBegin('relationOrderReturnApplyId');
			$xfer += $output->writeString($this->relationOrderReturnApplyId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->relationOrderSn !== null) {
			
			$xfer += $output->writeFieldBegin('relationOrderSn');
			$xfer += $output->writeString($this->relationOrderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->relationMerItemNo !== null) {
			
			$xfer += $output->writeFieldBegin('relationMerItemNo');
			$xfer += $output->writeString($this->relationMerItemNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->relationQty !== null) {
			
			$xfer += $output->writeFieldBegin('relationQty');
			$xfer += $output->writeI32($this->relationQty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsCategory !== null) {
			
			$xfer += $output->writeFieldBegin('goodsCategory');
			$xfer += $output->writeString($this->goodsCategory);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->noNeedRefundAmount !== null) {
			
			$xfer += $output->writeFieldBegin('noNeedRefundAmount');
			$xfer += $output->writeString($this->noNeedRefundAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorInfos !== null) {
			
			$xfer += $output->writeFieldBegin('vendorInfos');
			
			if (!is_array($this->vendorInfos)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->vendorInfos as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->historyInsuredInfos !== null) {
			
			$xfer += $output->writeFieldBegin('historyInsuredInfos');
			
			if (!is_array($this->historyInsuredInfos)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->historyInsuredInfos as $iter0){
				
				
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