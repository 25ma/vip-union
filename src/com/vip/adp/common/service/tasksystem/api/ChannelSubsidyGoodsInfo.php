<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\adp\common\service\tasksystem\api;

class ChannelSubsidyGoodsInfo {
	
	static $_TSPEC;
	public $goodsName = null;
	public $goodsImage = null;
	public $couponPrice = null;
	public $saleMarketPrice = null;
	public $selfBuy = null;
	public $shareBuy = null;
	public $commission = null;
	public $subsidy = null;
	public $detailUrl = null;
	public $promoteUrl = null;
	public $goodsId = null;
	public $brandId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'goodsName'
			),
			2 => array(
			'var' => 'goodsImage'
			),
			3 => array(
			'var' => 'couponPrice'
			),
			4 => array(
			'var' => 'saleMarketPrice'
			),
			5 => array(
			'var' => 'selfBuy'
			),
			6 => array(
			'var' => 'shareBuy'
			),
			7 => array(
			'var' => 'commission'
			),
			8 => array(
			'var' => 'subsidy'
			),
			9 => array(
			'var' => 'detailUrl'
			),
			10 => array(
			'var' => 'promoteUrl'
			),
			11 => array(
			'var' => 'goodsId'
			),
			12 => array(
			'var' => 'brandId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['goodsName'])){
				
				$this->goodsName = $vals['goodsName'];
			}
			
			
			if (isset($vals['goodsImage'])){
				
				$this->goodsImage = $vals['goodsImage'];
			}
			
			
			if (isset($vals['couponPrice'])){
				
				$this->couponPrice = $vals['couponPrice'];
			}
			
			
			if (isset($vals['saleMarketPrice'])){
				
				$this->saleMarketPrice = $vals['saleMarketPrice'];
			}
			
			
			if (isset($vals['selfBuy'])){
				
				$this->selfBuy = $vals['selfBuy'];
			}
			
			
			if (isset($vals['shareBuy'])){
				
				$this->shareBuy = $vals['shareBuy'];
			}
			
			
			if (isset($vals['commission'])){
				
				$this->commission = $vals['commission'];
			}
			
			
			if (isset($vals['subsidy'])){
				
				$this->subsidy = $vals['subsidy'];
			}
			
			
			if (isset($vals['detailUrl'])){
				
				$this->detailUrl = $vals['detailUrl'];
			}
			
			
			if (isset($vals['promoteUrl'])){
				
				$this->promoteUrl = $vals['promoteUrl'];
			}
			
			
			if (isset($vals['goodsId'])){
				
				$this->goodsId = $vals['goodsId'];
			}
			
			
			if (isset($vals['brandId'])){
				
				$this->brandId = $vals['brandId'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ChannelSubsidyGoodsInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("goodsName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsName);
				
			}
			
			
			
			
			if ("goodsImage" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsImage);
				
			}
			
			
			
			
			if ("couponPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->couponPrice);
				
			}
			
			
			
			
			if ("saleMarketPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->saleMarketPrice);
				
			}
			
			
			
			
			if ("selfBuy" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->selfBuy);
				
			}
			
			
			
			
			if ("shareBuy" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shareBuy);
				
			}
			
			
			
			
			if ("commission" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->commission);
				
			}
			
			
			
			
			if ("subsidy" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->subsidy);
				
			}
			
			
			
			
			if ("detailUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->detailUrl);
				
			}
			
			
			
			
			if ("promoteUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->promoteUrl);
				
			}
			
			
			
			
			if ("goodsId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsId);
				
			}
			
			
			
			
			if ("brandId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandId);
				
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
		
		if($this->goodsName !== null) {
			
			$xfer += $output->writeFieldBegin('goodsName');
			$xfer += $output->writeString($this->goodsName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsImage !== null) {
			
			$xfer += $output->writeFieldBegin('goodsImage');
			$xfer += $output->writeString($this->goodsImage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->couponPrice !== null) {
			
			$xfer += $output->writeFieldBegin('couponPrice');
			$xfer += $output->writeString($this->couponPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->saleMarketPrice !== null) {
			
			$xfer += $output->writeFieldBegin('saleMarketPrice');
			$xfer += $output->writeString($this->saleMarketPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->selfBuy !== null) {
			
			$xfer += $output->writeFieldBegin('selfBuy');
			$xfer += $output->writeString($this->selfBuy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shareBuy !== null) {
			
			$xfer += $output->writeFieldBegin('shareBuy');
			$xfer += $output->writeString($this->shareBuy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->commission !== null) {
			
			$xfer += $output->writeFieldBegin('commission');
			$xfer += $output->writeString($this->commission);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->subsidy !== null) {
			
			$xfer += $output->writeFieldBegin('subsidy');
			$xfer += $output->writeString($this->subsidy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->detailUrl !== null) {
			
			$xfer += $output->writeFieldBegin('detailUrl');
			$xfer += $output->writeString($this->detailUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->promoteUrl !== null) {
			
			$xfer += $output->writeFieldBegin('promoteUrl');
			$xfer += $output->writeString($this->promoteUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsId !== null) {
			
			$xfer += $output->writeFieldBegin('goodsId');
			$xfer += $output->writeString($this->goodsId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandId !== null) {
			
			$xfer += $output->writeFieldBegin('brandId');
			$xfer += $output->writeString($this->brandId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>