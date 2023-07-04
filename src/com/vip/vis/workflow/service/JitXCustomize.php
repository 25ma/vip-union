<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\workflow\service;

class JitXCustomize {
	
	static $_TSPEC;
	public $id = null;
	public $orderSn = null;
	public $statsName = null;
	public $jitxOrderType = null;
	public $createTime = null;
	public $thirdCustName = null;
	public $deliveryKpiStartTime = null;
	public $deliveryWarehouseCode = null;
	public $isForbiddenDelivery = null;
	public $forbiddenReason = null;
	public $isCustomizeGoods = null;
	public $customizeStatus = null;
	public $customizeJsonContent = null;
	public $customizeUrl = null;
	public $goodSn = null;
	public $amount = null;
	public $isCancel = null;
	public $customizeStatusName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'orderSn'
			),
			3 => array(
			'var' => 'statsName'
			),
			4 => array(
			'var' => 'jitxOrderType'
			),
			5 => array(
			'var' => 'createTime'
			),
			6 => array(
			'var' => 'thirdCustName'
			),
			7 => array(
			'var' => 'deliveryKpiStartTime'
			),
			8 => array(
			'var' => 'deliveryWarehouseCode'
			),
			9 => array(
			'var' => 'isForbiddenDelivery'
			),
			10 => array(
			'var' => 'forbiddenReason'
			),
			11 => array(
			'var' => 'isCustomizeGoods'
			),
			12 => array(
			'var' => 'customizeStatus'
			),
			13 => array(
			'var' => 'customizeJsonContent'
			),
			14 => array(
			'var' => 'customizeUrl'
			),
			15 => array(
			'var' => 'goodSn'
			),
			16 => array(
			'var' => 'amount'
			),
			17 => array(
			'var' => 'isCancel'
			),
			18 => array(
			'var' => 'customizeStatusName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['statsName'])){
				
				$this->statsName = $vals['statsName'];
			}
			
			
			if (isset($vals['jitxOrderType'])){
				
				$this->jitxOrderType = $vals['jitxOrderType'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['thirdCustName'])){
				
				$this->thirdCustName = $vals['thirdCustName'];
			}
			
			
			if (isset($vals['deliveryKpiStartTime'])){
				
				$this->deliveryKpiStartTime = $vals['deliveryKpiStartTime'];
			}
			
			
			if (isset($vals['deliveryWarehouseCode'])){
				
				$this->deliveryWarehouseCode = $vals['deliveryWarehouseCode'];
			}
			
			
			if (isset($vals['isForbiddenDelivery'])){
				
				$this->isForbiddenDelivery = $vals['isForbiddenDelivery'];
			}
			
			
			if (isset($vals['forbiddenReason'])){
				
				$this->forbiddenReason = $vals['forbiddenReason'];
			}
			
			
			if (isset($vals['isCustomizeGoods'])){
				
				$this->isCustomizeGoods = $vals['isCustomizeGoods'];
			}
			
			
			if (isset($vals['customizeStatus'])){
				
				$this->customizeStatus = $vals['customizeStatus'];
			}
			
			
			if (isset($vals['customizeJsonContent'])){
				
				$this->customizeJsonContent = $vals['customizeJsonContent'];
			}
			
			
			if (isset($vals['customizeUrl'])){
				
				$this->customizeUrl = $vals['customizeUrl'];
			}
			
			
			if (isset($vals['goodSn'])){
				
				$this->goodSn = $vals['goodSn'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['isCancel'])){
				
				$this->isCancel = $vals['isCancel'];
			}
			
			
			if (isset($vals['customizeStatusName'])){
				
				$this->customizeStatusName = $vals['customizeStatusName'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'JitXCustomize';
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
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("statsName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->statsName);
				
			}
			
			
			
			
			if ("jitxOrderType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->jitxOrderType);
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createTime);
				
			}
			
			
			
			
			if ("thirdCustName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->thirdCustName);
				
			}
			
			
			
			
			if ("deliveryKpiStartTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deliveryKpiStartTime);
				
			}
			
			
			
			
			if ("deliveryWarehouseCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deliveryWarehouseCode);
				
			}
			
			
			
			
			if ("isForbiddenDelivery" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->isForbiddenDelivery);
				
			}
			
			
			
			
			if ("forbiddenReason" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->forbiddenReason);
				
			}
			
			
			
			
			if ("isCustomizeGoods" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->isCustomizeGoods);
				
			}
			
			
			
			
			if ("customizeStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->customizeStatus); 
				
			}
			
			
			
			
			if ("customizeJsonContent" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->customizeJsonContent);
				
			}
			
			
			
			
			if ("customizeUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->customizeUrl);
				
			}
			
			
			
			
			if ("goodSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodSn);
				
			}
			
			
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->amount); 
				
			}
			
			
			
			
			if ("isCancel" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->isCancel);
				
			}
			
			
			
			
			if ("customizeStatusName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->customizeStatusName);
				
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
		
		$xfer += $output->writeFieldBegin('id');
		$xfer += $output->writeI64($this->id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->statsName !== null) {
			
			$xfer += $output->writeFieldBegin('statsName');
			$xfer += $output->writeString($this->statsName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->jitxOrderType !== null) {
			
			$xfer += $output->writeFieldBegin('jitxOrderType');
			$xfer += $output->writeString($this->jitxOrderType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeString($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->thirdCustName !== null) {
			
			$xfer += $output->writeFieldBegin('thirdCustName');
			$xfer += $output->writeString($this->thirdCustName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliveryKpiStartTime !== null) {
			
			$xfer += $output->writeFieldBegin('deliveryKpiStartTime');
			$xfer += $output->writeString($this->deliveryKpiStartTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliveryWarehouseCode !== null) {
			
			$xfer += $output->writeFieldBegin('deliveryWarehouseCode');
			$xfer += $output->writeString($this->deliveryWarehouseCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isForbiddenDelivery !== null) {
			
			$xfer += $output->writeFieldBegin('isForbiddenDelivery');
			$xfer += $output->writeString($this->isForbiddenDelivery);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->forbiddenReason !== null) {
			
			$xfer += $output->writeFieldBegin('forbiddenReason');
			$xfer += $output->writeString($this->forbiddenReason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isCustomizeGoods !== null) {
			
			$xfer += $output->writeFieldBegin('isCustomizeGoods');
			$xfer += $output->writeString($this->isCustomizeGoods);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customizeStatus !== null) {
			
			$xfer += $output->writeFieldBegin('customizeStatus');
			$xfer += $output->writeI32($this->customizeStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customizeJsonContent !== null) {
			
			$xfer += $output->writeFieldBegin('customizeJsonContent');
			$xfer += $output->writeString($this->customizeJsonContent);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customizeUrl !== null) {
			
			$xfer += $output->writeFieldBegin('customizeUrl');
			$xfer += $output->writeString($this->customizeUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodSn !== null) {
			
			$xfer += $output->writeFieldBegin('goodSn');
			$xfer += $output->writeString($this->goodSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->amount !== null) {
			
			$xfer += $output->writeFieldBegin('amount');
			$xfer += $output->writeI32($this->amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isCancel !== null) {
			
			$xfer += $output->writeFieldBegin('isCancel');
			$xfer += $output->writeBool($this->isCancel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customizeStatusName !== null) {
			
			$xfer += $output->writeFieldBegin('customizeStatusName');
			$xfer += $output->writeString($this->customizeStatusName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>