<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class AfterSaleDetail {
	
	static $_TSPEC;
	public $barcode = null;
	public $goodName = null;
	public $quantity = null;
	public $goodsFav = null;
	public $price = null;
	public $returnReason = null;
	public $unit = null;
	public $pdcSN = null;
	public $pdcBarCode = null;
	public $onePieceList = null;
	public $quantityOrigin = null;
	public $quantityPass = null;
	public $quantityOpPassed = null;
	public $vSkuId = null;
	public $goodsVersion = null;
	public $orderSn = null;
	public $merItemNo = null;
	public $returnReasonId = null;
	public $isShipFinished = null;
	public $reasonName = null;
	public $reasonCategoryDesc = null;
	public $imageUrl = null;
	public $reasonCategory = null;
	public $txt = null;
	public $detailId = null;
	public $returnTotalMoney = null;
	public $videoList = null;
	public $video = null;
	public $cusomizedRefundMoney = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'barcode'
			),
			2 => array(
			'var' => 'goodName'
			),
			3 => array(
			'var' => 'quantity'
			),
			4 => array(
			'var' => 'goodsFav'
			),
			5 => array(
			'var' => 'price'
			),
			6 => array(
			'var' => 'returnReason'
			),
			7 => array(
			'var' => 'unit'
			),
			8 => array(
			'var' => 'pdcSN'
			),
			9 => array(
			'var' => 'pdcBarCode'
			),
			10 => array(
			'var' => 'onePieceList'
			),
			11 => array(
			'var' => 'quantityOrigin'
			),
			12 => array(
			'var' => 'quantityPass'
			),
			13 => array(
			'var' => 'quantityOpPassed'
			),
			14 => array(
			'var' => 'vSkuId'
			),
			15 => array(
			'var' => 'goodsVersion'
			),
			16 => array(
			'var' => 'orderSn'
			),
			17 => array(
			'var' => 'merItemNo'
			),
			18 => array(
			'var' => 'returnReasonId'
			),
			19 => array(
			'var' => 'isShipFinished'
			),
			20 => array(
			'var' => 'reasonName'
			),
			21 => array(
			'var' => 'reasonCategoryDesc'
			),
			22 => array(
			'var' => 'imageUrl'
			),
			23 => array(
			'var' => 'reasonCategory'
			),
			24 => array(
			'var' => 'txt'
			),
			25 => array(
			'var' => 'detailId'
			),
			26 => array(
			'var' => 'returnTotalMoney'
			),
			27 => array(
			'var' => 'videoList'
			),
			28 => array(
			'var' => 'video'
			),
			29 => array(
			'var' => 'cusomizedRefundMoney'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['goodName'])){
				
				$this->goodName = $vals['goodName'];
			}
			
			
			if (isset($vals['quantity'])){
				
				$this->quantity = $vals['quantity'];
			}
			
			
			if (isset($vals['goodsFav'])){
				
				$this->goodsFav = $vals['goodsFav'];
			}
			
			
			if (isset($vals['price'])){
				
				$this->price = $vals['price'];
			}
			
			
			if (isset($vals['returnReason'])){
				
				$this->returnReason = $vals['returnReason'];
			}
			
			
			if (isset($vals['unit'])){
				
				$this->unit = $vals['unit'];
			}
			
			
			if (isset($vals['pdcSN'])){
				
				$this->pdcSN = $vals['pdcSN'];
			}
			
			
			if (isset($vals['pdcBarCode'])){
				
				$this->pdcBarCode = $vals['pdcBarCode'];
			}
			
			
			if (isset($vals['onePieceList'])){
				
				$this->onePieceList = $vals['onePieceList'];
			}
			
			
			if (isset($vals['quantityOrigin'])){
				
				$this->quantityOrigin = $vals['quantityOrigin'];
			}
			
			
			if (isset($vals['quantityPass'])){
				
				$this->quantityPass = $vals['quantityPass'];
			}
			
			
			if (isset($vals['quantityOpPassed'])){
				
				$this->quantityOpPassed = $vals['quantityOpPassed'];
			}
			
			
			if (isset($vals['vSkuId'])){
				
				$this->vSkuId = $vals['vSkuId'];
			}
			
			
			if (isset($vals['goodsVersion'])){
				
				$this->goodsVersion = $vals['goodsVersion'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['merItemNo'])){
				
				$this->merItemNo = $vals['merItemNo'];
			}
			
			
			if (isset($vals['returnReasonId'])){
				
				$this->returnReasonId = $vals['returnReasonId'];
			}
			
			
			if (isset($vals['isShipFinished'])){
				
				$this->isShipFinished = $vals['isShipFinished'];
			}
			
			
			if (isset($vals['reasonName'])){
				
				$this->reasonName = $vals['reasonName'];
			}
			
			
			if (isset($vals['reasonCategoryDesc'])){
				
				$this->reasonCategoryDesc = $vals['reasonCategoryDesc'];
			}
			
			
			if (isset($vals['imageUrl'])){
				
				$this->imageUrl = $vals['imageUrl'];
			}
			
			
			if (isset($vals['reasonCategory'])){
				
				$this->reasonCategory = $vals['reasonCategory'];
			}
			
			
			if (isset($vals['txt'])){
				
				$this->txt = $vals['txt'];
			}
			
			
			if (isset($vals['detailId'])){
				
				$this->detailId = $vals['detailId'];
			}
			
			
			if (isset($vals['returnTotalMoney'])){
				
				$this->returnTotalMoney = $vals['returnTotalMoney'];
			}
			
			
			if (isset($vals['videoList'])){
				
				$this->videoList = $vals['videoList'];
			}
			
			
			if (isset($vals['video'])){
				
				$this->video = $vals['video'];
			}
			
			
			if (isset($vals['cusomizedRefundMoney'])){
				
				$this->cusomizedRefundMoney = $vals['cusomizedRefundMoney'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AfterSaleDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("goodName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodName);
				
			}
			
			
			
			
			if ("quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->quantity); 
				
			}
			
			
			
			
			if ("goodsFav" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsFav);
				
			}
			
			
			
			
			if ("price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->price);
				
			}
			
			
			
			
			if ("returnReason" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnReason);
				
			}
			
			
			
			
			if ("unit" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->unit);
				
			}
			
			
			
			
			if ("pdcSN" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pdcSN);
				
			}
			
			
			
			
			if ("pdcBarCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pdcBarCode);
				
			}
			
			
			
			
			if ("onePieceList" == $schemeField){
				
				$needSkip = false;
				
				$this->onePieceList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\sof\sof\service\AfterSaleOnePiece();
						$elem0->read($input);
						
						$this->onePieceList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("quantityOrigin" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->quantityOrigin); 
				
			}
			
			
			
			
			if ("quantityPass" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->quantityPass); 
				
			}
			
			
			
			
			if ("quantityOpPassed" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->quantityOpPassed); 
				
			}
			
			
			
			
			if ("vSkuId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->vSkuId); 
				
			}
			
			
			
			
			if ("goodsVersion" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->goodsVersion); 
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("merItemNo" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->merItemNo); 
				
			}
			
			
			
			
			if ("returnReasonId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->returnReasonId); 
				
			}
			
			
			
			
			if ("isShipFinished" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isShipFinished); 
				
			}
			
			
			
			
			if ("reasonName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reasonName);
				
			}
			
			
			
			
			if ("reasonCategoryDesc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reasonCategoryDesc);
				
			}
			
			
			
			
			if ("imageUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->imageUrl);
				
			}
			
			
			
			
			if ("reasonCategory" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->reasonCategory); 
				
			}
			
			
			
			
			if ("txt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->txt);
				
			}
			
			
			
			
			if ("detailId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->detailId); 
				
			}
			
			
			
			
			if ("returnTotalMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnTotalMoney);
				
			}
			
			
			
			
			if ("videoList" == $schemeField){
				
				$needSkip = false;
				
				$this->videoList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\sof\sof\service\AfterSaleDetailVideo();
						$elem1->read($input);
						
						$this->videoList[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("video" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->video);
				
			}
			
			
			
			
			if ("cusomizedRefundMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cusomizedRefundMoney);
				
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
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodName !== null) {
			
			$xfer += $output->writeFieldBegin('goodName');
			$xfer += $output->writeString($this->goodName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->quantity !== null) {
			
			$xfer += $output->writeFieldBegin('quantity');
			$xfer += $output->writeI32($this->quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsFav !== null) {
			
			$xfer += $output->writeFieldBegin('goodsFav');
			$xfer += $output->writeString($this->goodsFav);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->price !== null) {
			
			$xfer += $output->writeFieldBegin('price');
			$xfer += $output->writeString($this->price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnReason !== null) {
			
			$xfer += $output->writeFieldBegin('returnReason');
			$xfer += $output->writeString($this->returnReason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->unit !== null) {
			
			$xfer += $output->writeFieldBegin('unit');
			$xfer += $output->writeString($this->unit);
			
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
		
		
		if($this->onePieceList !== null) {
			
			$xfer += $output->writeFieldBegin('onePieceList');
			
			if (!is_array($this->onePieceList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->onePieceList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->quantityOrigin !== null) {
			
			$xfer += $output->writeFieldBegin('quantityOrigin');
			$xfer += $output->writeI32($this->quantityOrigin);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->quantityPass !== null) {
			
			$xfer += $output->writeFieldBegin('quantityPass');
			$xfer += $output->writeI32($this->quantityPass);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->quantityOpPassed !== null) {
			
			$xfer += $output->writeFieldBegin('quantityOpPassed');
			$xfer += $output->writeI32($this->quantityOpPassed);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vSkuId !== null) {
			
			$xfer += $output->writeFieldBegin('vSkuId');
			$xfer += $output->writeI64($this->vSkuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsVersion !== null) {
			
			$xfer += $output->writeFieldBegin('goodsVersion');
			$xfer += $output->writeI32($this->goodsVersion);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->merItemNo !== null) {
			
			$xfer += $output->writeFieldBegin('merItemNo');
			$xfer += $output->writeI64($this->merItemNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnReasonId !== null) {
			
			$xfer += $output->writeFieldBegin('returnReasonId');
			$xfer += $output->writeI32($this->returnReasonId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isShipFinished !== null) {
			
			$xfer += $output->writeFieldBegin('isShipFinished');
			$xfer += $output->writeI32($this->isShipFinished);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reasonName !== null) {
			
			$xfer += $output->writeFieldBegin('reasonName');
			$xfer += $output->writeString($this->reasonName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reasonCategoryDesc !== null) {
			
			$xfer += $output->writeFieldBegin('reasonCategoryDesc');
			$xfer += $output->writeString($this->reasonCategoryDesc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->imageUrl !== null) {
			
			$xfer += $output->writeFieldBegin('imageUrl');
			$xfer += $output->writeString($this->imageUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reasonCategory !== null) {
			
			$xfer += $output->writeFieldBegin('reasonCategory');
			$xfer += $output->writeI32($this->reasonCategory);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->txt !== null) {
			
			$xfer += $output->writeFieldBegin('txt');
			$xfer += $output->writeString($this->txt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->detailId !== null) {
			
			$xfer += $output->writeFieldBegin('detailId');
			$xfer += $output->writeI64($this->detailId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnTotalMoney !== null) {
			
			$xfer += $output->writeFieldBegin('returnTotalMoney');
			$xfer += $output->writeString($this->returnTotalMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->videoList !== null) {
			
			$xfer += $output->writeFieldBegin('videoList');
			
			if (!is_array($this->videoList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->videoList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->video !== null) {
			
			$xfer += $output->writeFieldBegin('video');
			$xfer += $output->writeString($this->video);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cusomizedRefundMoney !== null) {
			
			$xfer += $output->writeFieldBegin('cusomizedRefundMoney');
			$xfer += $output->writeString($this->cusomizedRefundMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>