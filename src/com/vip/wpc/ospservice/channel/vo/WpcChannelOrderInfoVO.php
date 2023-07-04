<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\channel\vo;

class WpcChannelOrderInfoVO {
	
	static $_TSPEC;
	public $orderSn = null;
	public $statusName = null;
	public $transportNo = null;
	public $transportName = null;
	public $goods = null;
	public $statusCode = null;
	public $refundStatus = null;
	public $ShippingFee = null;
	public $RealPayTotal = null;
	public $transportList = null;
	public $unpackAbnormals = null;
	public $orderSourceType = null;
	public $paySn = null;
	public $pingAnOpenid = null;
	public $payTime = null;
	public $isRejectOrder = null;
	public $signTime = null;
	public $orderCommissionTotal = null;
	public $isCancelOrder = null;
	public $deliveryAbnormalLabels = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			2 => array(
			'var' => 'statusName'
			),
			3 => array(
			'var' => 'transportNo'
			),
			4 => array(
			'var' => 'transportName'
			),
			5 => array(
			'var' => 'goods'
			),
			6 => array(
			'var' => 'statusCode'
			),
			7 => array(
			'var' => 'refundStatus'
			),
			8 => array(
			'var' => 'ShippingFee'
			),
			9 => array(
			'var' => 'RealPayTotal'
			),
			10 => array(
			'var' => 'transportList'
			),
			11 => array(
			'var' => 'unpackAbnormals'
			),
			12 => array(
			'var' => 'orderSourceType'
			),
			13 => array(
			'var' => 'paySn'
			),
			14 => array(
			'var' => 'pingAnOpenid'
			),
			15 => array(
			'var' => 'payTime'
			),
			16 => array(
			'var' => 'isRejectOrder'
			),
			17 => array(
			'var' => 'signTime'
			),
			18 => array(
			'var' => 'orderCommissionTotal'
			),
			19 => array(
			'var' => 'isCancelOrder'
			),
			20 => array(
			'var' => 'deliveryAbnormalLabels'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['statusName'])){
				
				$this->statusName = $vals['statusName'];
			}
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['transportName'])){
				
				$this->transportName = $vals['transportName'];
			}
			
			
			if (isset($vals['goods'])){
				
				$this->goods = $vals['goods'];
			}
			
			
			if (isset($vals['statusCode'])){
				
				$this->statusCode = $vals['statusCode'];
			}
			
			
			if (isset($vals['refundStatus'])){
				
				$this->refundStatus = $vals['refundStatus'];
			}
			
			
			if (isset($vals['ShippingFee'])){
				
				$this->ShippingFee = $vals['ShippingFee'];
			}
			
			
			if (isset($vals['RealPayTotal'])){
				
				$this->RealPayTotal = $vals['RealPayTotal'];
			}
			
			
			if (isset($vals['transportList'])){
				
				$this->transportList = $vals['transportList'];
			}
			
			
			if (isset($vals['unpackAbnormals'])){
				
				$this->unpackAbnormals = $vals['unpackAbnormals'];
			}
			
			
			if (isset($vals['orderSourceType'])){
				
				$this->orderSourceType = $vals['orderSourceType'];
			}
			
			
			if (isset($vals['paySn'])){
				
				$this->paySn = $vals['paySn'];
			}
			
			
			if (isset($vals['pingAnOpenid'])){
				
				$this->pingAnOpenid = $vals['pingAnOpenid'];
			}
			
			
			if (isset($vals['payTime'])){
				
				$this->payTime = $vals['payTime'];
			}
			
			
			if (isset($vals['isRejectOrder'])){
				
				$this->isRejectOrder = $vals['isRejectOrder'];
			}
			
			
			if (isset($vals['signTime'])){
				
				$this->signTime = $vals['signTime'];
			}
			
			
			if (isset($vals['orderCommissionTotal'])){
				
				$this->orderCommissionTotal = $vals['orderCommissionTotal'];
			}
			
			
			if (isset($vals['isCancelOrder'])){
				
				$this->isCancelOrder = $vals['isCancelOrder'];
			}
			
			
			if (isset($vals['deliveryAbnormalLabels'])){
				
				$this->deliveryAbnormalLabels = $vals['deliveryAbnormalLabels'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcChannelOrderInfoVO';
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
			
			
			
			
			if ("statusName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->statusName);
				
			}
			
			
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("transportName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportName);
				
			}
			
			
			
			
			if ("goods" == $schemeField){
				
				$needSkip = false;
				
				$this->goods = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\wpc\ospservice\channel\vo\WpcChannelOrderGoodsVO();
						$elem1->read($input);
						
						$this->goods[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("statusCode" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->statusCode); 
				
			}
			
			
			
			
			if ("refundStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->refundStatus); 
				
			}
			
			
			
			
			if ("ShippingFee" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ShippingFee);
				
			}
			
			
			
			
			if ("RealPayTotal" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->RealPayTotal);
				
			}
			
			
			
			
			if ("transportList" == $schemeField){
				
				$needSkip = false;
				
				$this->transportList = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						
						$elem2 = new \com\vip\wpc\ospservice\channel\vo\WpcChannelOrderTransportVO();
						$elem2->read($input);
						
						$this->transportList[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("unpackAbnormals" == $schemeField){
				
				$needSkip = false;
				
				$this->unpackAbnormals = array();
				$_size3 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem3 = null;
						
						$elem3 = new \com\vip\wpc\ospservice\order\vo\WpcUnpackAbnormalVo();
						$elem3->read($input);
						
						$this->unpackAbnormals[$_size3++] = $elem3;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("orderSourceType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->orderSourceType); 
				
			}
			
			
			
			
			if ("paySn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->paySn);
				
			}
			
			
			
			
			if ("pingAnOpenid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pingAnOpenid);
				
			}
			
			
			
			
			if ("payTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payTime);
				
			}
			
			
			
			
			if ("isRejectOrder" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->isRejectOrder);
				
			}
			
			
			
			
			if ("signTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->signTime);
				
			}
			
			
			
			
			if ("orderCommissionTotal" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderCommissionTotal);
				
			}
			
			
			
			
			if ("isCancelOrder" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->isCancelOrder);
				
			}
			
			
			
			
			if ("deliveryAbnormalLabels" == $schemeField){
				
				$needSkip = false;
				
				$this->deliveryAbnormalLabels = array();
				$_size4 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem4 = null;
						
						$elem4 = new \com\vip\wpc\ospservice\common\vo\WpcDeliveryAbnormalDetailVo();
						$elem4->read($input);
						
						$this->deliveryAbnormalLabels[$_size4++] = $elem4;
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
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->statusName !== null) {
			
			$xfer += $output->writeFieldBegin('statusName');
			$xfer += $output->writeString($this->statusName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportNo !== null) {
			
			$xfer += $output->writeFieldBegin('transportNo');
			$xfer += $output->writeString($this->transportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportName !== null) {
			
			$xfer += $output->writeFieldBegin('transportName');
			$xfer += $output->writeString($this->transportName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goods !== null) {
			
			$xfer += $output->writeFieldBegin('goods');
			
			if (!is_array($this->goods)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->goods as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->statusCode !== null) {
			
			$xfer += $output->writeFieldBegin('statusCode');
			$xfer += $output->writeI32($this->statusCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundStatus !== null) {
			
			$xfer += $output->writeFieldBegin('refundStatus');
			$xfer += $output->writeI32($this->refundStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ShippingFee !== null) {
			
			$xfer += $output->writeFieldBegin('ShippingFee');
			$xfer += $output->writeString($this->ShippingFee);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->RealPayTotal !== null) {
			
			$xfer += $output->writeFieldBegin('RealPayTotal');
			$xfer += $output->writeString($this->RealPayTotal);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportList !== null) {
			
			$xfer += $output->writeFieldBegin('transportList');
			
			if (!is_array($this->transportList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->transportList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->unpackAbnormals !== null) {
			
			$xfer += $output->writeFieldBegin('unpackAbnormals');
			
			if (!is_array($this->unpackAbnormals)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->unpackAbnormals as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSourceType !== null) {
			
			$xfer += $output->writeFieldBegin('orderSourceType');
			$xfer += $output->writeI32($this->orderSourceType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->paySn !== null) {
			
			$xfer += $output->writeFieldBegin('paySn');
			$xfer += $output->writeString($this->paySn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pingAnOpenid !== null) {
			
			$xfer += $output->writeFieldBegin('pingAnOpenid');
			$xfer += $output->writeString($this->pingAnOpenid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payTime !== null) {
			
			$xfer += $output->writeFieldBegin('payTime');
			$xfer += $output->writeString($this->payTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isRejectOrder !== null) {
			
			$xfer += $output->writeFieldBegin('isRejectOrder');
			$xfer += $output->writeBool($this->isRejectOrder);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->signTime !== null) {
			
			$xfer += $output->writeFieldBegin('signTime');
			$xfer += $output->writeString($this->signTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderCommissionTotal !== null) {
			
			$xfer += $output->writeFieldBegin('orderCommissionTotal');
			$xfer += $output->writeString($this->orderCommissionTotal);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isCancelOrder !== null) {
			
			$xfer += $output->writeFieldBegin('isCancelOrder');
			$xfer += $output->writeBool($this->isCancelOrder);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliveryAbnormalLabels !== null) {
			
			$xfer += $output->writeFieldBegin('deliveryAbnormalLabels');
			
			if (!is_array($this->deliveryAbnormalLabels)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->deliveryAbnormalLabels as $iter0){
				
				
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