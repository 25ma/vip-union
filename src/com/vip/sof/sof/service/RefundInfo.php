<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class RefundInfo {
	
	static $_TSPEC;
	public $returnGoodsMoney = null;
	public $returnGoodsFav = null;
	public $sendCarriage = null;
	public $refundAmount = null;
	public $backCarriage = null;
	public $refundPoint = null;
	public $invoiceDeductMoney = null;
	public $refundPay = null;
	public $payType = null;
	public $orderRefundInfo = null;
	public $refundAllowance = null;
	public $returnShippingMoney = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'returnGoodsMoney'
			),
			2 => array(
			'var' => 'returnGoodsFav'
			),
			3 => array(
			'var' => 'sendCarriage'
			),
			4 => array(
			'var' => 'refundAmount'
			),
			5 => array(
			'var' => 'backCarriage'
			),
			6 => array(
			'var' => 'refundPoint'
			),
			7 => array(
			'var' => 'invoiceDeductMoney'
			),
			8 => array(
			'var' => 'refundPay'
			),
			9 => array(
			'var' => 'payType'
			),
			10 => array(
			'var' => 'orderRefundInfo'
			),
			11 => array(
			'var' => 'refundAllowance'
			),
			12 => array(
			'var' => 'returnShippingMoney'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['returnGoodsMoney'])){
				
				$this->returnGoodsMoney = $vals['returnGoodsMoney'];
			}
			
			
			if (isset($vals['returnGoodsFav'])){
				
				$this->returnGoodsFav = $vals['returnGoodsFav'];
			}
			
			
			if (isset($vals['sendCarriage'])){
				
				$this->sendCarriage = $vals['sendCarriage'];
			}
			
			
			if (isset($vals['refundAmount'])){
				
				$this->refundAmount = $vals['refundAmount'];
			}
			
			
			if (isset($vals['backCarriage'])){
				
				$this->backCarriage = $vals['backCarriage'];
			}
			
			
			if (isset($vals['refundPoint'])){
				
				$this->refundPoint = $vals['refundPoint'];
			}
			
			
			if (isset($vals['invoiceDeductMoney'])){
				
				$this->invoiceDeductMoney = $vals['invoiceDeductMoney'];
			}
			
			
			if (isset($vals['refundPay'])){
				
				$this->refundPay = $vals['refundPay'];
			}
			
			
			if (isset($vals['payType'])){
				
				$this->payType = $vals['payType'];
			}
			
			
			if (isset($vals['orderRefundInfo'])){
				
				$this->orderRefundInfo = $vals['orderRefundInfo'];
			}
			
			
			if (isset($vals['refundAllowance'])){
				
				$this->refundAllowance = $vals['refundAllowance'];
			}
			
			
			if (isset($vals['returnShippingMoney'])){
				
				$this->returnShippingMoney = $vals['returnShippingMoney'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'RefundInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("returnGoodsMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnGoodsMoney);
				
			}
			
			
			
			
			if ("returnGoodsFav" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnGoodsFav);
				
			}
			
			
			
			
			if ("sendCarriage" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sendCarriage);
				
			}
			
			
			
			
			if ("refundAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refundAmount);
				
			}
			
			
			
			
			if ("backCarriage" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->backCarriage);
				
			}
			
			
			
			
			if ("refundPoint" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refundPoint);
				
			}
			
			
			
			
			if ("invoiceDeductMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceDeductMoney);
				
			}
			
			
			
			
			if ("refundPay" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refundPay);
				
			}
			
			
			
			
			if ("payType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payType);
				
			}
			
			
			
			
			if ("orderRefundInfo" == $schemeField){
				
				$needSkip = false;
				
				$this->orderRefundInfo = new \com\vip\sof\sof\service\OrderRefundInfo();
				$this->orderRefundInfo->read($input);
				
			}
			
			
			
			
			if ("refundAllowance" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refundAllowance);
				
			}
			
			
			
			
			if ("returnShippingMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnShippingMoney);
				
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
		
		if($this->returnGoodsMoney !== null) {
			
			$xfer += $output->writeFieldBegin('returnGoodsMoney');
			$xfer += $output->writeString($this->returnGoodsMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnGoodsFav !== null) {
			
			$xfer += $output->writeFieldBegin('returnGoodsFav');
			$xfer += $output->writeString($this->returnGoodsFav);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sendCarriage !== null) {
			
			$xfer += $output->writeFieldBegin('sendCarriage');
			$xfer += $output->writeString($this->sendCarriage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundAmount !== null) {
			
			$xfer += $output->writeFieldBegin('refundAmount');
			$xfer += $output->writeString($this->refundAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->backCarriage !== null) {
			
			$xfer += $output->writeFieldBegin('backCarriage');
			$xfer += $output->writeString($this->backCarriage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundPoint !== null) {
			
			$xfer += $output->writeFieldBegin('refundPoint');
			$xfer += $output->writeString($this->refundPoint);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceDeductMoney !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceDeductMoney');
			$xfer += $output->writeString($this->invoiceDeductMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundPay !== null) {
			
			$xfer += $output->writeFieldBegin('refundPay');
			$xfer += $output->writeString($this->refundPay);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payType !== null) {
			
			$xfer += $output->writeFieldBegin('payType');
			$xfer += $output->writeString($this->payType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderRefundInfo !== null) {
			
			$xfer += $output->writeFieldBegin('orderRefundInfo');
			
			if (!is_object($this->orderRefundInfo)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->orderRefundInfo->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundAllowance !== null) {
			
			$xfer += $output->writeFieldBegin('refundAllowance');
			$xfer += $output->writeString($this->refundAllowance);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnShippingMoney !== null) {
			
			$xfer += $output->writeFieldBegin('returnShippingMoney');
			$xfer += $output->writeString($this->returnShippingMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>