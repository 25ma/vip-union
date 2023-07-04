<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class AfterSalePullGoods {
	
	static $_TSPEC;
	public $goodName = null;
	public $amount = null;
	public $barcode = null;
	public $quantity = null;
	public $unit = null;
	public $prodSkuId = null;
	public $merItemNo = null;
	public $vSkuId = null;
	public $goodsVersion = null;
	public $reasonId = null;
	public $reasonName = null;
	public $reasonCategoryDesc = null;
	public $imageUrl = null;
	public $reasonCategory = null;
	public $txt = null;
	public $specialAttr = null;
	public $orderReturnGoodsId = null;
	public $video = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'goodName'
			),
			2 => array(
			'var' => 'amount'
			),
			3 => array(
			'var' => 'barcode'
			),
			4 => array(
			'var' => 'quantity'
			),
			5 => array(
			'var' => 'unit'
			),
			6 => array(
			'var' => 'prodSkuId'
			),
			7 => array(
			'var' => 'merItemNo'
			),
			8 => array(
			'var' => 'vSkuId'
			),
			9 => array(
			'var' => 'goodsVersion'
			),
			10 => array(
			'var' => 'reasonId'
			),
			11 => array(
			'var' => 'reasonName'
			),
			12 => array(
			'var' => 'reasonCategoryDesc'
			),
			13 => array(
			'var' => 'imageUrl'
			),
			14 => array(
			'var' => 'reasonCategory'
			),
			15 => array(
			'var' => 'txt'
			),
			16 => array(
			'var' => 'specialAttr'
			),
			17 => array(
			'var' => 'orderReturnGoodsId'
			),
			18 => array(
			'var' => 'video'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['goodName'])){
				
				$this->goodName = $vals['goodName'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['quantity'])){
				
				$this->quantity = $vals['quantity'];
			}
			
			
			if (isset($vals['unit'])){
				
				$this->unit = $vals['unit'];
			}
			
			
			if (isset($vals['prodSkuId'])){
				
				$this->prodSkuId = $vals['prodSkuId'];
			}
			
			
			if (isset($vals['merItemNo'])){
				
				$this->merItemNo = $vals['merItemNo'];
			}
			
			
			if (isset($vals['vSkuId'])){
				
				$this->vSkuId = $vals['vSkuId'];
			}
			
			
			if (isset($vals['goodsVersion'])){
				
				$this->goodsVersion = $vals['goodsVersion'];
			}
			
			
			if (isset($vals['reasonId'])){
				
				$this->reasonId = $vals['reasonId'];
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
			
			
			if (isset($vals['specialAttr'])){
				
				$this->specialAttr = $vals['specialAttr'];
			}
			
			
			if (isset($vals['orderReturnGoodsId'])){
				
				$this->orderReturnGoodsId = $vals['orderReturnGoodsId'];
			}
			
			
			if (isset($vals['video'])){
				
				$this->video = $vals['video'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AfterSalePullGoods';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("goodName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodName);
				
			}
			
			
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->amount); 
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->quantity); 
				
			}
			
			
			
			
			if ("unit" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->unit);
				
			}
			
			
			
			
			if ("prodSkuId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->prodSkuId);
				
			}
			
			
			
			
			if ("merItemNo" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->merItemNo); 
				
			}
			
			
			
			
			if ("vSkuId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->vSkuId); 
				
			}
			
			
			
			
			if ("goodsVersion" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->goodsVersion); 
				
			}
			
			
			
			
			if ("reasonId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->reasonId); 
				
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
			
			
			
			
			if ("specialAttr" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->specialAttr); 
				
			}
			
			
			
			
			if ("orderReturnGoodsId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderReturnGoodsId);
				
			}
			
			
			
			
			if ("video" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->video);
				
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
		
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->quantity !== null) {
			
			$xfer += $output->writeFieldBegin('quantity');
			$xfer += $output->writeI32($this->quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->unit !== null) {
			
			$xfer += $output->writeFieldBegin('unit');
			$xfer += $output->writeString($this->unit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->prodSkuId !== null) {
			
			$xfer += $output->writeFieldBegin('prodSkuId');
			$xfer += $output->writeString($this->prodSkuId);
			
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
		
		
		if($this->goodsVersion !== null) {
			
			$xfer += $output->writeFieldBegin('goodsVersion');
			$xfer += $output->writeI32($this->goodsVersion);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reasonId !== null) {
			
			$xfer += $output->writeFieldBegin('reasonId');
			$xfer += $output->writeI32($this->reasonId);
			
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
		
		
		if($this->specialAttr !== null) {
			
			$xfer += $output->writeFieldBegin('specialAttr');
			$xfer += $output->writeI32($this->specialAttr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderReturnGoodsId !== null) {
			
			$xfer += $output->writeFieldBegin('orderReturnGoodsId');
			$xfer += $output->writeString($this->orderReturnGoodsId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->video !== null) {
			
			$xfer += $output->writeFieldBegin('video');
			$xfer += $output->writeString($this->video);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>