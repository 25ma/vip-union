<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class PrintInfo {
	
	static $_TSPEC;
	public $orderSn = null;
	public $buyer = null;
	public $mobile = null;
	public $address = null;
	public $goodsSum = null;
	public $goodsPriceSum = null;
	public $storeName = null;
	public $csPhone = null;
	public $returnAddress = null;
	public $returnPostcode = null;
	public $returnContact = null;
	public $returnMobile = null;
	public $printGoodsInfoList = null;
	public $insuranceName = null;
	public $insuranceNumber = null;
	public $insuranceTelephone = null;
	public $insuranceUrl = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			2 => array(
			'var' => 'buyer'
			),
			3 => array(
			'var' => 'mobile'
			),
			4 => array(
			'var' => 'address'
			),
			5 => array(
			'var' => 'goodsSum'
			),
			6 => array(
			'var' => 'goodsPriceSum'
			),
			7 => array(
			'var' => 'storeName'
			),
			8 => array(
			'var' => 'csPhone'
			),
			9 => array(
			'var' => 'returnAddress'
			),
			10 => array(
			'var' => 'returnPostcode'
			),
			11 => array(
			'var' => 'returnContact'
			),
			12 => array(
			'var' => 'returnMobile'
			),
			13 => array(
			'var' => 'printGoodsInfoList'
			),
			14 => array(
			'var' => 'insuranceName'
			),
			15 => array(
			'var' => 'insuranceNumber'
			),
			16 => array(
			'var' => 'insuranceTelephone'
			),
			17 => array(
			'var' => 'insuranceUrl'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['buyer'])){
				
				$this->buyer = $vals['buyer'];
			}
			
			
			if (isset($vals['mobile'])){
				
				$this->mobile = $vals['mobile'];
			}
			
			
			if (isset($vals['address'])){
				
				$this->address = $vals['address'];
			}
			
			
			if (isset($vals['goodsSum'])){
				
				$this->goodsSum = $vals['goodsSum'];
			}
			
			
			if (isset($vals['goodsPriceSum'])){
				
				$this->goodsPriceSum = $vals['goodsPriceSum'];
			}
			
			
			if (isset($vals['storeName'])){
				
				$this->storeName = $vals['storeName'];
			}
			
			
			if (isset($vals['csPhone'])){
				
				$this->csPhone = $vals['csPhone'];
			}
			
			
			if (isset($vals['returnAddress'])){
				
				$this->returnAddress = $vals['returnAddress'];
			}
			
			
			if (isset($vals['returnPostcode'])){
				
				$this->returnPostcode = $vals['returnPostcode'];
			}
			
			
			if (isset($vals['returnContact'])){
				
				$this->returnContact = $vals['returnContact'];
			}
			
			
			if (isset($vals['returnMobile'])){
				
				$this->returnMobile = $vals['returnMobile'];
			}
			
			
			if (isset($vals['printGoodsInfoList'])){
				
				$this->printGoodsInfoList = $vals['printGoodsInfoList'];
			}
			
			
			if (isset($vals['insuranceName'])){
				
				$this->insuranceName = $vals['insuranceName'];
			}
			
			
			if (isset($vals['insuranceNumber'])){
				
				$this->insuranceNumber = $vals['insuranceNumber'];
			}
			
			
			if (isset($vals['insuranceTelephone'])){
				
				$this->insuranceTelephone = $vals['insuranceTelephone'];
			}
			
			
			if (isset($vals['insuranceUrl'])){
				
				$this->insuranceUrl = $vals['insuranceUrl'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PrintInfo';
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
			
			
			
			
			if ("buyer" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyer);
				
			}
			
			
			
			
			if ("mobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mobile);
				
			}
			
			
			
			
			if ("address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address);
				
			}
			
			
			
			
			if ("goodsSum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsSum);
				
			}
			
			
			
			
			if ("goodsPriceSum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsPriceSum);
				
			}
			
			
			
			
			if ("storeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeName);
				
			}
			
			
			
			
			if ("csPhone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->csPhone);
				
			}
			
			
			
			
			if ("returnAddress" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnAddress);
				
			}
			
			
			
			
			if ("returnPostcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnPostcode);
				
			}
			
			
			
			
			if ("returnContact" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnContact);
				
			}
			
			
			
			
			if ("returnMobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnMobile);
				
			}
			
			
			
			
			if ("printGoodsInfoList" == $schemeField){
				
				$needSkip = false;
				
				$this->printGoodsInfoList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\sof\sof\service\PrintGoodsInfo();
						$elem0->read($input);
						
						$this->printGoodsInfoList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("insuranceName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->insuranceName);
				
			}
			
			
			
			
			if ("insuranceNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->insuranceNumber);
				
			}
			
			
			
			
			if ("insuranceTelephone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->insuranceTelephone);
				
			}
			
			
			
			
			if ("insuranceUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->insuranceUrl);
				
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
		
		
		if($this->buyer !== null) {
			
			$xfer += $output->writeFieldBegin('buyer');
			$xfer += $output->writeString($this->buyer);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mobile !== null) {
			
			$xfer += $output->writeFieldBegin('mobile');
			$xfer += $output->writeString($this->mobile);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->address !== null) {
			
			$xfer += $output->writeFieldBegin('address');
			$xfer += $output->writeString($this->address);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsSum !== null) {
			
			$xfer += $output->writeFieldBegin('goodsSum');
			$xfer += $output->writeString($this->goodsSum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsPriceSum !== null) {
			
			$xfer += $output->writeFieldBegin('goodsPriceSum');
			$xfer += $output->writeString($this->goodsPriceSum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeName !== null) {
			
			$xfer += $output->writeFieldBegin('storeName');
			$xfer += $output->writeString($this->storeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->csPhone !== null) {
			
			$xfer += $output->writeFieldBegin('csPhone');
			$xfer += $output->writeString($this->csPhone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnAddress !== null) {
			
			$xfer += $output->writeFieldBegin('returnAddress');
			$xfer += $output->writeString($this->returnAddress);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnPostcode !== null) {
			
			$xfer += $output->writeFieldBegin('returnPostcode');
			$xfer += $output->writeString($this->returnPostcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnContact !== null) {
			
			$xfer += $output->writeFieldBegin('returnContact');
			$xfer += $output->writeString($this->returnContact);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnMobile !== null) {
			
			$xfer += $output->writeFieldBegin('returnMobile');
			$xfer += $output->writeString($this->returnMobile);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->printGoodsInfoList !== null) {
			
			$xfer += $output->writeFieldBegin('printGoodsInfoList');
			
			if (!is_array($this->printGoodsInfoList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->printGoodsInfoList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->insuranceName !== null) {
			
			$xfer += $output->writeFieldBegin('insuranceName');
			$xfer += $output->writeString($this->insuranceName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->insuranceNumber !== null) {
			
			$xfer += $output->writeFieldBegin('insuranceNumber');
			$xfer += $output->writeString($this->insuranceNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->insuranceTelephone !== null) {
			
			$xfer += $output->writeFieldBegin('insuranceTelephone');
			$xfer += $output->writeString($this->insuranceTelephone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->insuranceUrl !== null) {
			
			$xfer += $output->writeFieldBegin('insuranceUrl');
			$xfer += $output->writeString($this->insuranceUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>