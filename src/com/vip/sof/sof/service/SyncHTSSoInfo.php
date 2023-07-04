<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class SyncHTSSoInfo {
	
	static $_TSPEC;
	public $scenarionCode = null;
	public $distributeId = null;
	public $bizTime = null;
	public $orderInfo = null;
	public $goodsItems = null;
	public $userInfo = null;
	public $receiverInfo = null;
	public $paymentInfo = null;
	public $invoiceInfo = null;
	public $orderActiveList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'scenarionCode'
			),
			2 => array(
			'var' => 'distributeId'
			),
			3 => array(
			'var' => 'bizTime'
			),
			4 => array(
			'var' => 'orderInfo'
			),
			5 => array(
			'var' => 'goodsItems'
			),
			6 => array(
			'var' => 'userInfo'
			),
			7 => array(
			'var' => 'receiverInfo'
			),
			8 => array(
			'var' => 'paymentInfo'
			),
			9 => array(
			'var' => 'invoiceInfo'
			),
			10 => array(
			'var' => 'orderActiveList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['scenarionCode'])){
				
				$this->scenarionCode = $vals['scenarionCode'];
			}
			
			
			if (isset($vals['distributeId'])){
				
				$this->distributeId = $vals['distributeId'];
			}
			
			
			if (isset($vals['bizTime'])){
				
				$this->bizTime = $vals['bizTime'];
			}
			
			
			if (isset($vals['orderInfo'])){
				
				$this->orderInfo = $vals['orderInfo'];
			}
			
			
			if (isset($vals['goodsItems'])){
				
				$this->goodsItems = $vals['goodsItems'];
			}
			
			
			if (isset($vals['userInfo'])){
				
				$this->userInfo = $vals['userInfo'];
			}
			
			
			if (isset($vals['receiverInfo'])){
				
				$this->receiverInfo = $vals['receiverInfo'];
			}
			
			
			if (isset($vals['paymentInfo'])){
				
				$this->paymentInfo = $vals['paymentInfo'];
			}
			
			
			if (isset($vals['invoiceInfo'])){
				
				$this->invoiceInfo = $vals['invoiceInfo'];
			}
			
			
			if (isset($vals['orderActiveList'])){
				
				$this->orderActiveList = $vals['orderActiveList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SyncHTSSoInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("scenarionCode" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->scenarionCode); 
				
			}
			
			
			
			
			if ("distributeId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->distributeId); 
				
			}
			
			
			
			
			if ("bizTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->bizTime); 
				
			}
			
			
			
			
			if ("orderInfo" == $schemeField){
				
				$needSkip = false;
				
				$this->orderInfo = new \com\vip\sof\sof\service\OrderInfo();
				$this->orderInfo->read($input);
				
			}
			
			
			
			
			if ("goodsItems" == $schemeField){
				
				$needSkip = false;
				
				$this->goodsItems = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\sof\sof\service\GoodsItem();
						$elem0->read($input);
						
						$this->goodsItems[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("userInfo" == $schemeField){
				
				$needSkip = false;
				
				$this->userInfo = new \com\vip\sof\sof\service\UserInfo();
				$this->userInfo->read($input);
				
			}
			
			
			
			
			if ("receiverInfo" == $schemeField){
				
				$needSkip = false;
				
				$this->receiverInfo = new \com\vip\sof\sof\service\ReceiverInfo();
				$this->receiverInfo->read($input);
				
			}
			
			
			
			
			if ("paymentInfo" == $schemeField){
				
				$needSkip = false;
				
				$this->paymentInfo = new \com\vip\sof\sof\service\PaymentInfo();
				$this->paymentInfo->read($input);
				
			}
			
			
			
			
			if ("invoiceInfo" == $schemeField){
				
				$needSkip = false;
				
				$this->invoiceInfo = new \com\vip\sof\sof\service\InvoiceInfo();
				$this->invoiceInfo->read($input);
				
			}
			
			
			
			
			if ("orderActiveList" == $schemeField){
				
				$needSkip = false;
				
				$this->orderActiveList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\sof\sof\service\OrderActiveInfo();
						$elem1->read($input);
						
						$this->orderActiveList[$_size1++] = $elem1;
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
		
		if($this->scenarionCode !== null) {
			
			$xfer += $output->writeFieldBegin('scenarionCode');
			$xfer += $output->writeI32($this->scenarionCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->distributeId !== null) {
			
			$xfer += $output->writeFieldBegin('distributeId');
			$xfer += $output->writeI64($this->distributeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bizTime !== null) {
			
			$xfer += $output->writeFieldBegin('bizTime');
			$xfer += $output->writeI64($this->bizTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderInfo !== null) {
			
			$xfer += $output->writeFieldBegin('orderInfo');
			
			if (!is_object($this->orderInfo)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->orderInfo->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsItems !== null) {
			
			$xfer += $output->writeFieldBegin('goodsItems');
			
			if (!is_array($this->goodsItems)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->goodsItems as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userInfo !== null) {
			
			$xfer += $output->writeFieldBegin('userInfo');
			
			if (!is_object($this->userInfo)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->userInfo->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiverInfo !== null) {
			
			$xfer += $output->writeFieldBegin('receiverInfo');
			
			if (!is_object($this->receiverInfo)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->receiverInfo->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->paymentInfo !== null) {
			
			$xfer += $output->writeFieldBegin('paymentInfo');
			
			if (!is_object($this->paymentInfo)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->paymentInfo->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceInfo !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceInfo');
			
			if (!is_object($this->invoiceInfo)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->invoiceInfo->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderActiveList !== null) {
			
			$xfer += $output->writeFieldBegin('orderActiveList');
			
			if (!is_array($this->orderActiveList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->orderActiveList as $iter0){
				
				
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