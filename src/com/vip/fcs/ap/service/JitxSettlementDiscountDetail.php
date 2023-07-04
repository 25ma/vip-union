<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\ap\service;

class JitxSettlementDiscountDetail {
	
	static $_TSPEC;
	public $actParentNo = null;
	public $actParentName = null;
	public $activeType = null;
	public $activeTypeNameStr = null;
	public $favPrice = null;
	public $actVendorRate = null;
	public $vendorFavPrice = null;
	public $chargeType = null;
	public $discloseRateType = null;
	public $discountLevel = null;
	public $actSubType = null;
	public $businessCode = null;
	public $rateMid = null;
	public $vendorRedpacketCount = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'actParentNo'
			),
			2 => array(
			'var' => 'actParentName'
			),
			3 => array(
			'var' => 'activeType'
			),
			4 => array(
			'var' => 'activeTypeNameStr'
			),
			5 => array(
			'var' => 'favPrice'
			),
			6 => array(
			'var' => 'actVendorRate'
			),
			7 => array(
			'var' => 'vendorFavPrice'
			),
			8 => array(
			'var' => 'chargeType'
			),
			9 => array(
			'var' => 'discloseRateType'
			),
			10 => array(
			'var' => 'discountLevel'
			),
			11 => array(
			'var' => 'actSubType'
			),
			12 => array(
			'var' => 'businessCode'
			),
			13 => array(
			'var' => 'rateMid'
			),
			14 => array(
			'var' => 'vendorRedpacketCount'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['actParentNo'])){
				
				$this->actParentNo = $vals['actParentNo'];
			}
			
			
			if (isset($vals['actParentName'])){
				
				$this->actParentName = $vals['actParentName'];
			}
			
			
			if (isset($vals['activeType'])){
				
				$this->activeType = $vals['activeType'];
			}
			
			
			if (isset($vals['activeTypeNameStr'])){
				
				$this->activeTypeNameStr = $vals['activeTypeNameStr'];
			}
			
			
			if (isset($vals['favPrice'])){
				
				$this->favPrice = $vals['favPrice'];
			}
			
			
			if (isset($vals['actVendorRate'])){
				
				$this->actVendorRate = $vals['actVendorRate'];
			}
			
			
			if (isset($vals['vendorFavPrice'])){
				
				$this->vendorFavPrice = $vals['vendorFavPrice'];
			}
			
			
			if (isset($vals['chargeType'])){
				
				$this->chargeType = $vals['chargeType'];
			}
			
			
			if (isset($vals['discloseRateType'])){
				
				$this->discloseRateType = $vals['discloseRateType'];
			}
			
			
			if (isset($vals['discountLevel'])){
				
				$this->discountLevel = $vals['discountLevel'];
			}
			
			
			if (isset($vals['actSubType'])){
				
				$this->actSubType = $vals['actSubType'];
			}
			
			
			if (isset($vals['businessCode'])){
				
				$this->businessCode = $vals['businessCode'];
			}
			
			
			if (isset($vals['rateMid'])){
				
				$this->rateMid = $vals['rateMid'];
			}
			
			
			if (isset($vals['vendorRedpacketCount'])){
				
				$this->vendorRedpacketCount = $vals['vendorRedpacketCount'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'JitxSettlementDiscountDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("actParentNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actParentNo);
				
			}
			
			
			
			
			if ("actParentName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actParentName);
				
			}
			
			
			
			
			if ("activeType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->activeType);
				
			}
			
			
			
			
			if ("activeTypeNameStr" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->activeTypeNameStr);
				
			}
			
			
			
			
			if ("favPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->favPrice);
				
			}
			
			
			
			
			if ("actVendorRate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actVendorRate);
				
			}
			
			
			
			
			if ("vendorFavPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorFavPrice);
				
			}
			
			
			
			
			if ("chargeType" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->chargeType); 
				
			}
			
			
			
			
			if ("discloseRateType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->discloseRateType); 
				
			}
			
			
			
			
			if ("discountLevel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->discountLevel);
				
			}
			
			
			
			
			if ("actSubType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actSubType);
				
			}
			
			
			
			
			if ("businessCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->businessCode);
				
			}
			
			
			
			
			if ("rateMid" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->rateMid); 
				
			}
			
			
			
			
			if ("vendorRedpacketCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendorRedpacketCount); 
				
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
		
		if($this->actParentNo !== null) {
			
			$xfer += $output->writeFieldBegin('actParentNo');
			$xfer += $output->writeString($this->actParentNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actParentName !== null) {
			
			$xfer += $output->writeFieldBegin('actParentName');
			$xfer += $output->writeString($this->actParentName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activeType !== null) {
			
			$xfer += $output->writeFieldBegin('activeType');
			$xfer += $output->writeString($this->activeType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activeTypeNameStr !== null) {
			
			$xfer += $output->writeFieldBegin('activeTypeNameStr');
			$xfer += $output->writeString($this->activeTypeNameStr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->favPrice !== null) {
			
			$xfer += $output->writeFieldBegin('favPrice');
			$xfer += $output->writeString($this->favPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actVendorRate !== null) {
			
			$xfer += $output->writeFieldBegin('actVendorRate');
			$xfer += $output->writeString($this->actVendorRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorFavPrice !== null) {
			
			$xfer += $output->writeFieldBegin('vendorFavPrice');
			$xfer += $output->writeString($this->vendorFavPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->chargeType !== null) {
			
			$xfer += $output->writeFieldBegin('chargeType');
			$xfer += $output->writeI64($this->chargeType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('discloseRateType');
		$xfer += $output->writeI32($this->discloseRateType);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->discountLevel !== null) {
			
			$xfer += $output->writeFieldBegin('discountLevel');
			$xfer += $output->writeString($this->discountLevel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actSubType !== null) {
			
			$xfer += $output->writeFieldBegin('actSubType');
			$xfer += $output->writeString($this->actSubType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->businessCode !== null) {
			
			$xfer += $output->writeFieldBegin('businessCode');
			$xfer += $output->writeString($this->businessCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rateMid !== null) {
			
			$xfer += $output->writeFieldBegin('rateMid');
			$xfer += $output->writeI64($this->rateMid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('vendorRedpacketCount');
		$xfer += $output->writeI32($this->vendorRedpacketCount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>