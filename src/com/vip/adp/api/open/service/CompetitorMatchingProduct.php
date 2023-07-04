<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\adp\api\open\service;

class CompetitorMatchingProduct {
	
	static $_TSPEC;
	public $goodsId = null;
	public $opponProductCode = null;
	public $opponProductName = null;
	public $opponProductUrl = null;
	public $opponProductModel = null;
	public $opponMerchantName = null;
	public $opponSiteName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'goodsId'
			),
			2 => array(
			'var' => 'opponProductCode'
			),
			3 => array(
			'var' => 'opponProductName'
			),
			4 => array(
			'var' => 'opponProductUrl'
			),
			5 => array(
			'var' => 'opponProductModel'
			),
			6 => array(
			'var' => 'opponMerchantName'
			),
			7 => array(
			'var' => 'opponSiteName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['goodsId'])){
				
				$this->goodsId = $vals['goodsId'];
			}
			
			
			if (isset($vals['opponProductCode'])){
				
				$this->opponProductCode = $vals['opponProductCode'];
			}
			
			
			if (isset($vals['opponProductName'])){
				
				$this->opponProductName = $vals['opponProductName'];
			}
			
			
			if (isset($vals['opponProductUrl'])){
				
				$this->opponProductUrl = $vals['opponProductUrl'];
			}
			
			
			if (isset($vals['opponProductModel'])){
				
				$this->opponProductModel = $vals['opponProductModel'];
			}
			
			
			if (isset($vals['opponMerchantName'])){
				
				$this->opponMerchantName = $vals['opponMerchantName'];
			}
			
			
			if (isset($vals['opponSiteName'])){
				
				$this->opponSiteName = $vals['opponSiteName'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CompetitorMatchingProduct';
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
			
			
			
			
			if ("opponProductCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->opponProductCode);
				
			}
			
			
			
			
			if ("opponProductName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->opponProductName);
				
			}
			
			
			
			
			if ("opponProductUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->opponProductUrl);
				
			}
			
			
			
			
			if ("opponProductModel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->opponProductModel);
				
			}
			
			
			
			
			if ("opponMerchantName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->opponMerchantName);
				
			}
			
			
			
			
			if ("opponSiteName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->opponSiteName);
				
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
		
		
		if($this->opponProductCode !== null) {
			
			$xfer += $output->writeFieldBegin('opponProductCode');
			$xfer += $output->writeString($this->opponProductCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->opponProductName !== null) {
			
			$xfer += $output->writeFieldBegin('opponProductName');
			$xfer += $output->writeString($this->opponProductName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->opponProductUrl !== null) {
			
			$xfer += $output->writeFieldBegin('opponProductUrl');
			$xfer += $output->writeString($this->opponProductUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->opponProductModel !== null) {
			
			$xfer += $output->writeFieldBegin('opponProductModel');
			$xfer += $output->writeString($this->opponProductModel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->opponMerchantName !== null) {
			
			$xfer += $output->writeFieldBegin('opponMerchantName');
			$xfer += $output->writeString($this->opponMerchantName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->opponSiteName !== null) {
			
			$xfer += $output->writeFieldBegin('opponSiteName');
			$xfer += $output->writeString($this->opponSiteName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>