<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class GoodsResult {
	
	static $_TSPEC;
	public $amount = null;
	public $fetchAddress = null;
	public $customizedInfo = null;
	public $brandName = null;
	public $goodName = null;
	public $size = null;
	public $barcode = null;
	public $price = null;
	public $pdcSN = null;
	public $pdcBarCode = null;
	public $goodNo = null;
	public $goodsColor = null;
	public $goodsLineMoney = null;
	public $exActSubtotal = null;
	public $exPaySubtotal = null;
	public $exCouponSubtotal = null;
	public $exAllSubtotal = null;
	public $vSkuId = null;
	public $goodsVersion = null;
	public $goodsBizFlagList = null;
	public $goodsPic = null;
	public $orderSn = null;
	public $transportInterfaceList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'amount'
			),
			2 => array(
			'var' => 'fetchAddress'
			),
			3 => array(
			'var' => 'customizedInfo'
			),
			4 => array(
			'var' => 'brandName'
			),
			5 => array(
			'var' => 'goodName'
			),
			6 => array(
			'var' => 'size'
			),
			7 => array(
			'var' => 'barcode'
			),
			8 => array(
			'var' => 'price'
			),
			9 => array(
			'var' => 'pdcSN'
			),
			10 => array(
			'var' => 'pdcBarCode'
			),
			11 => array(
			'var' => 'goodNo'
			),
			12 => array(
			'var' => 'goodsColor'
			),
			13 => array(
			'var' => 'goodsLineMoney'
			),
			14 => array(
			'var' => 'exActSubtotal'
			),
			15 => array(
			'var' => 'exPaySubtotal'
			),
			16 => array(
			'var' => 'exCouponSubtotal'
			),
			17 => array(
			'var' => 'exAllSubtotal'
			),
			18 => array(
			'var' => 'vSkuId'
			),
			19 => array(
			'var' => 'goodsVersion'
			),
			20 => array(
			'var' => 'goodsBizFlagList'
			),
			21 => array(
			'var' => 'goodsPic'
			),
			22 => array(
			'var' => 'orderSn'
			),
			23 => array(
			'var' => 'transportInterfaceList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['fetchAddress'])){
				
				$this->fetchAddress = $vals['fetchAddress'];
			}
			
			
			if (isset($vals['customizedInfo'])){
				
				$this->customizedInfo = $vals['customizedInfo'];
			}
			
			
			if (isset($vals['brandName'])){
				
				$this->brandName = $vals['brandName'];
			}
			
			
			if (isset($vals['goodName'])){
				
				$this->goodName = $vals['goodName'];
			}
			
			
			if (isset($vals['size'])){
				
				$this->size = $vals['size'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['price'])){
				
				$this->price = $vals['price'];
			}
			
			
			if (isset($vals['pdcSN'])){
				
				$this->pdcSN = $vals['pdcSN'];
			}
			
			
			if (isset($vals['pdcBarCode'])){
				
				$this->pdcBarCode = $vals['pdcBarCode'];
			}
			
			
			if (isset($vals['goodNo'])){
				
				$this->goodNo = $vals['goodNo'];
			}
			
			
			if (isset($vals['goodsColor'])){
				
				$this->goodsColor = $vals['goodsColor'];
			}
			
			
			if (isset($vals['goodsLineMoney'])){
				
				$this->goodsLineMoney = $vals['goodsLineMoney'];
			}
			
			
			if (isset($vals['exActSubtotal'])){
				
				$this->exActSubtotal = $vals['exActSubtotal'];
			}
			
			
			if (isset($vals['exPaySubtotal'])){
				
				$this->exPaySubtotal = $vals['exPaySubtotal'];
			}
			
			
			if (isset($vals['exCouponSubtotal'])){
				
				$this->exCouponSubtotal = $vals['exCouponSubtotal'];
			}
			
			
			if (isset($vals['exAllSubtotal'])){
				
				$this->exAllSubtotal = $vals['exAllSubtotal'];
			}
			
			
			if (isset($vals['vSkuId'])){
				
				$this->vSkuId = $vals['vSkuId'];
			}
			
			
			if (isset($vals['goodsVersion'])){
				
				$this->goodsVersion = $vals['goodsVersion'];
			}
			
			
			if (isset($vals['goodsBizFlagList'])){
				
				$this->goodsBizFlagList = $vals['goodsBizFlagList'];
			}
			
			
			if (isset($vals['goodsPic'])){
				
				$this->goodsPic = $vals['goodsPic'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['transportInterfaceList'])){
				
				$this->transportInterfaceList = $vals['transportInterfaceList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GoodsResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->amount);
				
			}
			
			
			
			
			if ("fetchAddress" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fetchAddress);
				
			}
			
			
			
			
			if ("customizedInfo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->customizedInfo);
				
			}
			
			
			
			
			if ("brandName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandName);
				
			}
			
			
			
			
			if ("goodName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodName);
				
			}
			
			
			
			
			if ("size" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->size);
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->price);
				
			}
			
			
			
			
			if ("pdcSN" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pdcSN);
				
			}
			
			
			
			
			if ("pdcBarCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pdcBarCode);
				
			}
			
			
			
			
			if ("goodNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodNo);
				
			}
			
			
			
			
			if ("goodsColor" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsColor);
				
			}
			
			
			
			
			if ("goodsLineMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsLineMoney);
				
			}
			
			
			
			
			if ("exActSubtotal" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exActSubtotal);
				
			}
			
			
			
			
			if ("exPaySubtotal" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exPaySubtotal);
				
			}
			
			
			
			
			if ("exCouponSubtotal" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exCouponSubtotal);
				
			}
			
			
			
			
			if ("exAllSubtotal" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exAllSubtotal);
				
			}
			
			
			
			
			if ("vSkuId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->vSkuId); 
				
			}
			
			
			
			
			if ("goodsVersion" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->goodsVersion); 
				
			}
			
			
			
			
			if ("goodsBizFlagList" == $schemeField){
				
				$needSkip = false;
				
				$this->goodsBizFlagList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\sof\sof\service\GoodsBizFlag();
						$elem0->read($input);
						
						$this->goodsBizFlagList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("goodsPic" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsPic);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("transportInterfaceList" == $schemeField){
				
				$needSkip = false;
				
				$this->transportInterfaceList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\sof\sof\service\TransportInterfaceInfo();
						$elem1->read($input);
						
						$this->transportInterfaceList[$_size1++] = $elem1;
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
		
		if($this->amount !== null) {
			
			$xfer += $output->writeFieldBegin('amount');
			$xfer += $output->writeString($this->amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fetchAddress !== null) {
			
			$xfer += $output->writeFieldBegin('fetchAddress');
			$xfer += $output->writeString($this->fetchAddress);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customizedInfo !== null) {
			
			$xfer += $output->writeFieldBegin('customizedInfo');
			$xfer += $output->writeString($this->customizedInfo);
			
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
		
		
		if($this->size !== null) {
			
			$xfer += $output->writeFieldBegin('size');
			$xfer += $output->writeString($this->size);
			
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
		
		
		if($this->goodNo !== null) {
			
			$xfer += $output->writeFieldBegin('goodNo');
			$xfer += $output->writeString($this->goodNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsColor !== null) {
			
			$xfer += $output->writeFieldBegin('goodsColor');
			$xfer += $output->writeString($this->goodsColor);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsLineMoney !== null) {
			
			$xfer += $output->writeFieldBegin('goodsLineMoney');
			$xfer += $output->writeString($this->goodsLineMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exActSubtotal !== null) {
			
			$xfer += $output->writeFieldBegin('exActSubtotal');
			$xfer += $output->writeString($this->exActSubtotal);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exPaySubtotal !== null) {
			
			$xfer += $output->writeFieldBegin('exPaySubtotal');
			$xfer += $output->writeString($this->exPaySubtotal);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exCouponSubtotal !== null) {
			
			$xfer += $output->writeFieldBegin('exCouponSubtotal');
			$xfer += $output->writeString($this->exCouponSubtotal);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exAllSubtotal !== null) {
			
			$xfer += $output->writeFieldBegin('exAllSubtotal');
			$xfer += $output->writeString($this->exAllSubtotal);
			
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
		
		
		if($this->goodsBizFlagList !== null) {
			
			$xfer += $output->writeFieldBegin('goodsBizFlagList');
			
			if (!is_array($this->goodsBizFlagList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->goodsBizFlagList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsPic !== null) {
			
			$xfer += $output->writeFieldBegin('goodsPic');
			$xfer += $output->writeString($this->goodsPic);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportInterfaceList !== null) {
			
			$xfer += $output->writeFieldBegin('transportInterfaceList');
			
			if (!is_array($this->transportInterfaceList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->transportInterfaceList as $iter0){
				
				
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