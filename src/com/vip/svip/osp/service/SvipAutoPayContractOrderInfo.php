<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class SvipAutoPayContractOrderInfo {
	
	static $_TSPEC;
	public $userId = null;
	public $contractSn = null;
	public $wxOrderSn = null;
	public $status = null;
	public $payChannel = null;
	public $autoGoodspPrice = null;
	public $createTime = null;
	public $updateTime = null;
	public $remark = null;
	public $svipAutoPayOrderInfo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			2 => array(
			'var' => 'contractSn'
			),
			3 => array(
			'var' => 'wxOrderSn'
			),
			4 => array(
			'var' => 'status'
			),
			5 => array(
			'var' => 'payChannel'
			),
			6 => array(
			'var' => 'autoGoodspPrice'
			),
			7 => array(
			'var' => 'createTime'
			),
			8 => array(
			'var' => 'updateTime'
			),
			9 => array(
			'var' => 'remark'
			),
			10 => array(
			'var' => 'svipAutoPayOrderInfo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['contractSn'])){
				
				$this->contractSn = $vals['contractSn'];
			}
			
			
			if (isset($vals['wxOrderSn'])){
				
				$this->wxOrderSn = $vals['wxOrderSn'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['payChannel'])){
				
				$this->payChannel = $vals['payChannel'];
			}
			
			
			if (isset($vals['autoGoodspPrice'])){
				
				$this->autoGoodspPrice = $vals['autoGoodspPrice'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['updateTime'])){
				
				$this->updateTime = $vals['updateTime'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['svipAutoPayOrderInfo'])){
				
				$this->svipAutoPayOrderInfo = $vals['svipAutoPayOrderInfo'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SvipAutoPayContractOrderInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("userId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->userId); 
				
			}
			
			
			
			
			if ("contractSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contractSn);
				
			}
			
			
			
			
			if ("wxOrderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->wxOrderSn);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->status); 
				
			}
			
			
			
			
			if ("payChannel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payChannel);
				
			}
			
			
			
			
			if ("autoGoodspPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->autoGoodspPrice);
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime);
				
			}
			
			
			
			
			if ("updateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updateTime);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("svipAutoPayOrderInfo" == $schemeField){
				
				$needSkip = false;
				
				$this->svipAutoPayOrderInfo = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\svip\osp\service\SvipAutoPayOrderInfo();
						$elem0->read($input);
						
						$this->svipAutoPayOrderInfo[$_size0++] = $elem0;
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
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeI64($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->contractSn !== null) {
			
			$xfer += $output->writeFieldBegin('contractSn');
			$xfer += $output->writeString($this->contractSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->wxOrderSn !== null) {
			
			$xfer += $output->writeFieldBegin('wxOrderSn');
			$xfer += $output->writeString($this->wxOrderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeI32($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payChannel !== null) {
			
			$xfer += $output->writeFieldBegin('payChannel');
			$xfer += $output->writeString($this->payChannel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->autoGoodspPrice !== null) {
			
			$xfer += $output->writeFieldBegin('autoGoodspPrice');
			$xfer += $output->writeString($this->autoGoodspPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeI64($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateTime !== null) {
			
			$xfer += $output->writeFieldBegin('updateTime');
			$xfer += $output->writeI64($this->updateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->svipAutoPayOrderInfo !== null) {
			
			$xfer += $output->writeFieldBegin('svipAutoPayOrderInfo');
			
			if (!is_array($this->svipAutoPayOrderInfo)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->svipAutoPayOrderInfo as $iter0){
				
				
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