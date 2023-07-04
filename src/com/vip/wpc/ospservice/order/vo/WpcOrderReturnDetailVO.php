<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\order\vo;

class WpcOrderReturnDetailVO {
	
	static $_TSPEC;
	public $orderId = null;
	public $orderSn = null;
	public $returnId = null;
	public $returnStatus = null;
	public $showCancelReturnBtn = null;
	public $transportStatus = null;
	public $returnProgressDesc = null;
	public $returnProgressTime = null;
	public $returnAmount = null;
	public $returnAddressInfo = null;
	public $returnFee = null;
	public $goodsList = null;
	public $returnGoodsAmount = null;
	public $hasOXO = null;
	public $isStoreOrder = null;
	public $returnStatusCode = null;
	public $isQualityProblem = null;
	public $createTime = null;
	public $auditTime = null;
	public $qualityProblemUserModifyTimeout = null;
	public $cancelReasonType = null;
	public $cancelReason = null;
	public $refundStatus = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			2001 => array(
			'var' => 'orderId'
			),
			2002 => array(
			'var' => 'orderSn'
			),
			2101 => array(
			'var' => 'returnId'
			),
			2102 => array(
			'var' => 'returnStatus'
			),
			2103 => array(
			'var' => 'showCancelReturnBtn'
			),
			2104 => array(
			'var' => 'transportStatus'
			),
			2105 => array(
			'var' => 'returnProgressDesc'
			),
			2106 => array(
			'var' => 'returnProgressTime'
			),
			2107 => array(
			'var' => 'returnAmount'
			),
			2108 => array(
			'var' => 'returnAddressInfo'
			),
			2109 => array(
			'var' => 'returnFee'
			),
			2110 => array(
			'var' => 'goodsList'
			),
			2111 => array(
			'var' => 'returnGoodsAmount'
			),
			2112 => array(
			'var' => 'hasOXO'
			),
			2113 => array(
			'var' => 'isStoreOrder'
			),
			2114 => array(
			'var' => 'returnStatusCode'
			),
			2115 => array(
			'var' => 'isQualityProblem'
			),
			2116 => array(
			'var' => 'createTime'
			),
			2117 => array(
			'var' => 'auditTime'
			),
			2118 => array(
			'var' => 'qualityProblemUserModifyTimeout'
			),
			2119 => array(
			'var' => 'cancelReasonType'
			),
			2120 => array(
			'var' => 'cancelReason'
			),
			2121 => array(
			'var' => 'refundStatus'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderId'])){
				
				$this->orderId = $vals['orderId'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['returnId'])){
				
				$this->returnId = $vals['returnId'];
			}
			
			
			if (isset($vals['returnStatus'])){
				
				$this->returnStatus = $vals['returnStatus'];
			}
			
			
			if (isset($vals['showCancelReturnBtn'])){
				
				$this->showCancelReturnBtn = $vals['showCancelReturnBtn'];
			}
			
			
			if (isset($vals['transportStatus'])){
				
				$this->transportStatus = $vals['transportStatus'];
			}
			
			
			if (isset($vals['returnProgressDesc'])){
				
				$this->returnProgressDesc = $vals['returnProgressDesc'];
			}
			
			
			if (isset($vals['returnProgressTime'])){
				
				$this->returnProgressTime = $vals['returnProgressTime'];
			}
			
			
			if (isset($vals['returnAmount'])){
				
				$this->returnAmount = $vals['returnAmount'];
			}
			
			
			if (isset($vals['returnAddressInfo'])){
				
				$this->returnAddressInfo = $vals['returnAddressInfo'];
			}
			
			
			if (isset($vals['returnFee'])){
				
				$this->returnFee = $vals['returnFee'];
			}
			
			
			if (isset($vals['goodsList'])){
				
				$this->goodsList = $vals['goodsList'];
			}
			
			
			if (isset($vals['returnGoodsAmount'])){
				
				$this->returnGoodsAmount = $vals['returnGoodsAmount'];
			}
			
			
			if (isset($vals['hasOXO'])){
				
				$this->hasOXO = $vals['hasOXO'];
			}
			
			
			if (isset($vals['isStoreOrder'])){
				
				$this->isStoreOrder = $vals['isStoreOrder'];
			}
			
			
			if (isset($vals['returnStatusCode'])){
				
				$this->returnStatusCode = $vals['returnStatusCode'];
			}
			
			
			if (isset($vals['isQualityProblem'])){
				
				$this->isQualityProblem = $vals['isQualityProblem'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['auditTime'])){
				
				$this->auditTime = $vals['auditTime'];
			}
			
			
			if (isset($vals['qualityProblemUserModifyTimeout'])){
				
				$this->qualityProblemUserModifyTimeout = $vals['qualityProblemUserModifyTimeout'];
			}
			
			
			if (isset($vals['cancelReasonType'])){
				
				$this->cancelReasonType = $vals['cancelReasonType'];
			}
			
			
			if (isset($vals['cancelReason'])){
				
				$this->cancelReason = $vals['cancelReason'];
			}
			
			
			if (isset($vals['refundStatus'])){
				
				$this->refundStatus = $vals['refundStatus'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcOrderReturnDetailVO';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("orderId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderId);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("returnId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnId);
				
			}
			
			
			
			
			if ("returnStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnStatus);
				
			}
			
			
			
			
			if ("showCancelReturnBtn" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->showCancelReturnBtn);
				
			}
			
			
			
			
			if ("transportStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->transportStatus); 
				
			}
			
			
			
			
			if ("returnProgressDesc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnProgressDesc);
				
			}
			
			
			
			
			if ("returnProgressTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnProgressTime);
				
			}
			
			
			
			
			if ("returnAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnAmount);
				
			}
			
			
			
			
			if ("returnAddressInfo" == $schemeField){
				
				$needSkip = false;
				
				$this->returnAddressInfo = new \com\vip\wpc\ospservice\order\vo\WpcOrderReturnAddressInfo();
				$this->returnAddressInfo->read($input);
				
			}
			
			
			
			
			if ("returnFee" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnFee);
				
			}
			
			
			
			
			if ("goodsList" == $schemeField){
				
				$needSkip = false;
				
				$this->goodsList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\wpc\ospservice\order\vo\WpcOrderReturnDetailGoodsVO();
						$elem1->read($input);
						
						$this->goodsList[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("returnGoodsAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnGoodsAmount);
				
			}
			
			
			
			
			if ("hasOXO" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->hasOXO);
				
			}
			
			
			
			
			if ("isStoreOrder" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isStoreOrder); 
				
			}
			
			
			
			
			if ("returnStatusCode" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->returnStatusCode); 
				
			}
			
			
			
			
			if ("isQualityProblem" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->isQualityProblem);
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createTime);
				
			}
			
			
			
			
			if ("auditTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->auditTime);
				
			}
			
			
			
			
			if ("qualityProblemUserModifyTimeout" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->qualityProblemUserModifyTimeout);
				
			}
			
			
			
			
			if ("cancelReasonType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->cancelReasonType); 
				
			}
			
			
			
			
			if ("cancelReason" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cancelReason);
				
			}
			
			
			
			
			if ("refundStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->refundStatus); 
				
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
		
		if($this->orderId !== null) {
			
			$xfer += $output->writeFieldBegin('orderId');
			$xfer += $output->writeString($this->orderId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnId !== null) {
			
			$xfer += $output->writeFieldBegin('returnId');
			$xfer += $output->writeString($this->returnId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnStatus !== null) {
			
			$xfer += $output->writeFieldBegin('returnStatus');
			$xfer += $output->writeString($this->returnStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('showCancelReturnBtn');
		$xfer += $output->writeBool($this->showCancelReturnBtn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('transportStatus');
		$xfer += $output->writeI32($this->transportStatus);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->returnProgressDesc !== null) {
			
			$xfer += $output->writeFieldBegin('returnProgressDesc');
			$xfer += $output->writeString($this->returnProgressDesc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnProgressTime !== null) {
			
			$xfer += $output->writeFieldBegin('returnProgressTime');
			$xfer += $output->writeString($this->returnProgressTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnAmount !== null) {
			
			$xfer += $output->writeFieldBegin('returnAmount');
			$xfer += $output->writeString($this->returnAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnAddressInfo !== null) {
			
			$xfer += $output->writeFieldBegin('returnAddressInfo');
			
			if (!is_object($this->returnAddressInfo)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->returnAddressInfo->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnFee !== null) {
			
			$xfer += $output->writeFieldBegin('returnFee');
			$xfer += $output->writeString($this->returnFee);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsList !== null) {
			
			$xfer += $output->writeFieldBegin('goodsList');
			
			if (!is_array($this->goodsList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->goodsList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnGoodsAmount !== null) {
			
			$xfer += $output->writeFieldBegin('returnGoodsAmount');
			$xfer += $output->writeString($this->returnGoodsAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('hasOXO');
		$xfer += $output->writeBool($this->hasOXO);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('isStoreOrder');
		$xfer += $output->writeI32($this->isStoreOrder);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->returnStatusCode !== null) {
			
			$xfer += $output->writeFieldBegin('returnStatusCode');
			$xfer += $output->writeI32($this->returnStatusCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isQualityProblem !== null) {
			
			$xfer += $output->writeFieldBegin('isQualityProblem');
			$xfer += $output->writeBool($this->isQualityProblem);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeString($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->auditTime !== null) {
			
			$xfer += $output->writeFieldBegin('auditTime');
			$xfer += $output->writeString($this->auditTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->qualityProblemUserModifyTimeout !== null) {
			
			$xfer += $output->writeFieldBegin('qualityProblemUserModifyTimeout');
			$xfer += $output->writeString($this->qualityProblemUserModifyTimeout);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cancelReasonType !== null) {
			
			$xfer += $output->writeFieldBegin('cancelReasonType');
			$xfer += $output->writeI32($this->cancelReasonType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cancelReason !== null) {
			
			$xfer += $output->writeFieldBegin('cancelReason');
			$xfer += $output->writeString($this->cancelReason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundStatus !== null) {
			
			$xfer += $output->writeFieldBegin('refundStatus');
			$xfer += $output->writeI32($this->refundStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>