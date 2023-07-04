<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class PaymentInfo {
	
	static $_TSPEC;
	public $payType = null;
	public $payTypeName = null;
	public $money = null;
	public $favourableMoney = null;
	public $virtualMoney = null;
	public $surplus = null;
	public $goodsMoney = null;
	public $exFavMoney = null;
	public $carriage = null;
	public $accuracyError = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'payType'
			),
			2 => array(
			'var' => 'payTypeName'
			),
			3 => array(
			'var' => 'money'
			),
			4 => array(
			'var' => 'favourableMoney'
			),
			5 => array(
			'var' => 'virtualMoney'
			),
			6 => array(
			'var' => 'surplus'
			),
			7 => array(
			'var' => 'goodsMoney'
			),
			8 => array(
			'var' => 'exFavMoney'
			),
			9 => array(
			'var' => 'carriage'
			),
			10 => array(
			'var' => 'accuracyError'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['payType'])){
				
				$this->payType = $vals['payType'];
			}
			
			
			if (isset($vals['payTypeName'])){
				
				$this->payTypeName = $vals['payTypeName'];
			}
			
			
			if (isset($vals['money'])){
				
				$this->money = $vals['money'];
			}
			
			
			if (isset($vals['favourableMoney'])){
				
				$this->favourableMoney = $vals['favourableMoney'];
			}
			
			
			if (isset($vals['virtualMoney'])){
				
				$this->virtualMoney = $vals['virtualMoney'];
			}
			
			
			if (isset($vals['surplus'])){
				
				$this->surplus = $vals['surplus'];
			}
			
			
			if (isset($vals['goodsMoney'])){
				
				$this->goodsMoney = $vals['goodsMoney'];
			}
			
			
			if (isset($vals['exFavMoney'])){
				
				$this->exFavMoney = $vals['exFavMoney'];
			}
			
			
			if (isset($vals['carriage'])){
				
				$this->carriage = $vals['carriage'];
			}
			
			
			if (isset($vals['accuracyError'])){
				
				$this->accuracyError = $vals['accuracyError'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PaymentInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("payType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payType);
				
			}
			
			
			
			
			if ("payTypeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payTypeName);
				
			}
			
			
			
			
			if ("money" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->money);
				
			}
			
			
			
			
			if ("favourableMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->favourableMoney);
				
			}
			
			
			
			
			if ("virtualMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->virtualMoney);
				
			}
			
			
			
			
			if ("surplus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->surplus);
				
			}
			
			
			
			
			if ("goodsMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsMoney);
				
			}
			
			
			
			
			if ("exFavMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exFavMoney);
				
			}
			
			
			
			
			if ("carriage" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriage);
				
			}
			
			
			
			
			if ("accuracyError" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->accuracyError);
				
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
		
		if($this->payType !== null) {
			
			$xfer += $output->writeFieldBegin('payType');
			$xfer += $output->writeString($this->payType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payTypeName !== null) {
			
			$xfer += $output->writeFieldBegin('payTypeName');
			$xfer += $output->writeString($this->payTypeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->money !== null) {
			
			$xfer += $output->writeFieldBegin('money');
			$xfer += $output->writeString($this->money);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->favourableMoney !== null) {
			
			$xfer += $output->writeFieldBegin('favourableMoney');
			$xfer += $output->writeString($this->favourableMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->virtualMoney !== null) {
			
			$xfer += $output->writeFieldBegin('virtualMoney');
			$xfer += $output->writeString($this->virtualMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->surplus !== null) {
			
			$xfer += $output->writeFieldBegin('surplus');
			$xfer += $output->writeString($this->surplus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsMoney !== null) {
			
			$xfer += $output->writeFieldBegin('goodsMoney');
			$xfer += $output->writeString($this->goodsMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exFavMoney !== null) {
			
			$xfer += $output->writeFieldBegin('exFavMoney');
			$xfer += $output->writeString($this->exFavMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriage !== null) {
			
			$xfer += $output->writeFieldBegin('carriage');
			$xfer += $output->writeString($this->carriage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->accuracyError !== null) {
			
			$xfer += $output->writeFieldBegin('accuracyError');
			$xfer += $output->writeString($this->accuracyError);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>