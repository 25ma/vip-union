<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class CancelQueryParam {
	
	static $_TSPEC;
	public $orderSn = null;
	public $applySn = null;
	public $auditStatus = null;
	public $storeId = null;
	public $appName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			2 => array(
			'var' => 'applySn'
			),
			3 => array(
			'var' => 'auditStatus'
			),
			4 => array(
			'var' => 'storeId'
			),
			5 => array(
			'var' => 'appName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['applySn'])){
				
				$this->applySn = $vals['applySn'];
			}
			
			
			if (isset($vals['auditStatus'])){
				
				$this->auditStatus = $vals['auditStatus'];
			}
			
			
			if (isset($vals['storeId'])){
				
				$this->storeId = $vals['storeId'];
			}
			
			
			if (isset($vals['appName'])){
				
				$this->appName = $vals['appName'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CancelQueryParam';
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
			
			
			
			
			if ("applySn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->applySn);
				
			}
			
			
			
			
			if ("auditStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->auditStatus);
				
			}
			
			
			
			
			if ("storeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeId);
				
			}
			
			
			
			
			if ("appName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->appName);
				
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
		
		
		if($this->applySn !== null) {
			
			$xfer += $output->writeFieldBegin('applySn');
			$xfer += $output->writeString($this->applySn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->auditStatus !== null) {
			
			$xfer += $output->writeFieldBegin('auditStatus');
			$xfer += $output->writeString($this->auditStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeId !== null) {
			
			$xfer += $output->writeFieldBegin('storeId');
			$xfer += $output->writeString($this->storeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->appName !== null) {
			
			$xfer += $output->writeFieldBegin('appName');
			$xfer += $output->writeString($this->appName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>