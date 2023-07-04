<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\order\vo;

class WpcReturnOrderGoodsV2Vo {
	
	static $_TSPEC;
	public $goodsId = null;
	public $goodsName = null;
	public $image = null;
	public $brandCn = null;
	public $brandEn = null;
	public $sizeName = null;
	public $sizeId = null;
	public $num = null;
	public $price = null;
	public $returnAble = null;
	public $qualityProblemAfterSale = null;
	public $isSpecialGoods = null;
	public $specialAttrId = null;
	public $specialAttrName = null;
	public $specialGoodsOption = null;
	public $reasonList = null;
	public $reason = null;
	public $reasonCode = null;
	public $cate3Id = null;
	public $exActSubtotal = null;
	public $displayGoodsPrice = null;
	public $displayGoodsFav = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			2101 => array(
			'var' => 'goodsId'
			),
			2102 => array(
			'var' => 'goodsName'
			),
			2103 => array(
			'var' => 'image'
			),
			2104 => array(
			'var' => 'brandCn'
			),
			2105 => array(
			'var' => 'brandEn'
			),
			2106 => array(
			'var' => 'sizeName'
			),
			2107 => array(
			'var' => 'sizeId'
			),
			2108 => array(
			'var' => 'num'
			),
			2109 => array(
			'var' => 'price'
			),
			2110 => array(
			'var' => 'returnAble'
			),
			2111 => array(
			'var' => 'qualityProblemAfterSale'
			),
			2112 => array(
			'var' => 'isSpecialGoods'
			),
			2113 => array(
			'var' => 'specialAttrId'
			),
			2114 => array(
			'var' => 'specialAttrName'
			),
			2115 => array(
			'var' => 'specialGoodsOption'
			),
			2116 => array(
			'var' => 'reasonList'
			),
			2117 => array(
			'var' => 'reason'
			),
			2118 => array(
			'var' => 'reasonCode'
			),
			2119 => array(
			'var' => 'cate3Id'
			),
			2120 => array(
			'var' => 'exActSubtotal'
			),
			2121 => array(
			'var' => 'displayGoodsPrice'
			),
			2122 => array(
			'var' => 'displayGoodsFav'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['goodsId'])){
				
				$this->goodsId = $vals['goodsId'];
			}
			
			
			if (isset($vals['goodsName'])){
				
				$this->goodsName = $vals['goodsName'];
			}
			
			
			if (isset($vals['image'])){
				
				$this->image = $vals['image'];
			}
			
			
			if (isset($vals['brandCn'])){
				
				$this->brandCn = $vals['brandCn'];
			}
			
			
			if (isset($vals['brandEn'])){
				
				$this->brandEn = $vals['brandEn'];
			}
			
			
			if (isset($vals['sizeName'])){
				
				$this->sizeName = $vals['sizeName'];
			}
			
			
			if (isset($vals['sizeId'])){
				
				$this->sizeId = $vals['sizeId'];
			}
			
			
			if (isset($vals['num'])){
				
				$this->num = $vals['num'];
			}
			
			
			if (isset($vals['price'])){
				
				$this->price = $vals['price'];
			}
			
			
			if (isset($vals['returnAble'])){
				
				$this->returnAble = $vals['returnAble'];
			}
			
			
			if (isset($vals['qualityProblemAfterSale'])){
				
				$this->qualityProblemAfterSale = $vals['qualityProblemAfterSale'];
			}
			
			
			if (isset($vals['isSpecialGoods'])){
				
				$this->isSpecialGoods = $vals['isSpecialGoods'];
			}
			
			
			if (isset($vals['specialAttrId'])){
				
				$this->specialAttrId = $vals['specialAttrId'];
			}
			
			
			if (isset($vals['specialAttrName'])){
				
				$this->specialAttrName = $vals['specialAttrName'];
			}
			
			
			if (isset($vals['specialGoodsOption'])){
				
				$this->specialGoodsOption = $vals['specialGoodsOption'];
			}
			
			
			if (isset($vals['reasonList'])){
				
				$this->reasonList = $vals['reasonList'];
			}
			
			
			if (isset($vals['reason'])){
				
				$this->reason = $vals['reason'];
			}
			
			
			if (isset($vals['reasonCode'])){
				
				$this->reasonCode = $vals['reasonCode'];
			}
			
			
			if (isset($vals['cate3Id'])){
				
				$this->cate3Id = $vals['cate3Id'];
			}
			
			
			if (isset($vals['exActSubtotal'])){
				
				$this->exActSubtotal = $vals['exActSubtotal'];
			}
			
			
			if (isset($vals['displayGoodsPrice'])){
				
				$this->displayGoodsPrice = $vals['displayGoodsPrice'];
			}
			
			
			if (isset($vals['displayGoodsFav'])){
				
				$this->displayGoodsFav = $vals['displayGoodsFav'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcReturnOrderGoodsV2Vo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("goodsId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsId);
				
			}
			
			
			
			
			if ("goodsName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsName);
				
			}
			
			
			
			
			if ("image" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->image);
				
			}
			
			
			
			
			if ("brandCn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandCn);
				
			}
			
			
			
			
			if ("brandEn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandEn);
				
			}
			
			
			
			
			if ("sizeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sizeName);
				
			}
			
			
			
			
			if ("sizeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sizeId);
				
			}
			
			
			
			
			if ("num" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->num); 
				
			}
			
			
			
			
			if ("price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->price);
				
			}
			
			
			
			
			if ("returnAble" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->returnAble);
				
			}
			
			
			
			
			if ("qualityProblemAfterSale" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->qualityProblemAfterSale);
				
			}
			
			
			
			
			if ("isSpecialGoods" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->isSpecialGoods);
				
			}
			
			
			
			
			if ("specialAttrId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->specialAttrId); 
				
			}
			
			
			
			
			if ("specialAttrName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->specialAttrName);
				
			}
			
			
			
			
			if ("specialGoodsOption" == $schemeField){
				
				$needSkip = false;
				
				$this->specialGoodsOption = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\wpc\ospservice\order\vo\WpcReturnOrderSpecialGoodsOptionVo();
						$elem0->read($input);
						
						$this->specialGoodsOption[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("reasonList" == $schemeField){
				
				$needSkip = false;
				
				$this->reasonList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\wpc\ospservice\order\vo\WpcReturnReasonVO();
						$elem1->read($input);
						
						$this->reasonList[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("reason" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reason);
				
			}
			
			
			
			
			if ("reasonCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reasonCode);
				
			}
			
			
			
			
			if ("cate3Id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->cate3Id); 
				
			}
			
			
			
			
			if ("exActSubtotal" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exActSubtotal);
				
			}
			
			
			
			
			if ("displayGoodsPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->displayGoodsPrice);
				
			}
			
			
			
			
			if ("displayGoodsFav" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->displayGoodsFav);
				
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
		
		if($this->goodsId !== null) {
			
			$xfer += $output->writeFieldBegin('goodsId');
			$xfer += $output->writeString($this->goodsId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsName !== null) {
			
			$xfer += $output->writeFieldBegin('goodsName');
			$xfer += $output->writeString($this->goodsName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->image !== null) {
			
			$xfer += $output->writeFieldBegin('image');
			$xfer += $output->writeString($this->image);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandCn !== null) {
			
			$xfer += $output->writeFieldBegin('brandCn');
			$xfer += $output->writeString($this->brandCn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandEn !== null) {
			
			$xfer += $output->writeFieldBegin('brandEn');
			$xfer += $output->writeString($this->brandEn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sizeName !== null) {
			
			$xfer += $output->writeFieldBegin('sizeName');
			$xfer += $output->writeString($this->sizeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sizeId !== null) {
			
			$xfer += $output->writeFieldBegin('sizeId');
			$xfer += $output->writeString($this->sizeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->num !== null) {
			
			$xfer += $output->writeFieldBegin('num');
			$xfer += $output->writeI32($this->num);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->price !== null) {
			
			$xfer += $output->writeFieldBegin('price');
			$xfer += $output->writeString($this->price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnAble !== null) {
			
			$xfer += $output->writeFieldBegin('returnAble');
			$xfer += $output->writeBool($this->returnAble);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->qualityProblemAfterSale !== null) {
			
			$xfer += $output->writeFieldBegin('qualityProblemAfterSale');
			$xfer += $output->writeBool($this->qualityProblemAfterSale);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isSpecialGoods !== null) {
			
			$xfer += $output->writeFieldBegin('isSpecialGoods');
			$xfer += $output->writeBool($this->isSpecialGoods);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->specialAttrId !== null) {
			
			$xfer += $output->writeFieldBegin('specialAttrId');
			$xfer += $output->writeI32($this->specialAttrId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->specialAttrName !== null) {
			
			$xfer += $output->writeFieldBegin('specialAttrName');
			$xfer += $output->writeString($this->specialAttrName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->specialGoodsOption !== null) {
			
			$xfer += $output->writeFieldBegin('specialGoodsOption');
			
			if (!is_array($this->specialGoodsOption)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->specialGoodsOption as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reasonList !== null) {
			
			$xfer += $output->writeFieldBegin('reasonList');
			
			if (!is_array($this->reasonList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->reasonList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reason !== null) {
			
			$xfer += $output->writeFieldBegin('reason');
			$xfer += $output->writeString($this->reason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reasonCode !== null) {
			
			$xfer += $output->writeFieldBegin('reasonCode');
			$xfer += $output->writeString($this->reasonCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cate3Id !== null) {
			
			$xfer += $output->writeFieldBegin('cate3Id');
			$xfer += $output->writeI32($this->cate3Id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exActSubtotal !== null) {
			
			$xfer += $output->writeFieldBegin('exActSubtotal');
			$xfer += $output->writeString($this->exActSubtotal);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->displayGoodsPrice !== null) {
			
			$xfer += $output->writeFieldBegin('displayGoodsPrice');
			$xfer += $output->writeString($this->displayGoodsPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->displayGoodsFav !== null) {
			
			$xfer += $output->writeFieldBegin('displayGoodsFav');
			$xfer += $output->writeString($this->displayGoodsFav);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>