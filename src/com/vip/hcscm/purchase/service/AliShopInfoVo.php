<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\hcscm\purchase\service;

class AliShopInfoVo {
	
	static $_TSPEC;
	public $companyName = null;
	public $loginId = null;
	public $shopUrl = null;
	public $supplierName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'companyName'
			),
			2 => array(
			'var' => 'loginId'
			),
			3 => array(
			'var' => 'shopUrl'
			),
			4 => array(
			'var' => 'supplierName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['companyName'])){
				
				$this->companyName = $vals['companyName'];
			}
			
			
			if (isset($vals['loginId'])){
				
				$this->loginId = $vals['loginId'];
			}
			
			
			if (isset($vals['shopUrl'])){
				
				$this->shopUrl = $vals['shopUrl'];
			}
			
			
			if (isset($vals['supplierName'])){
				
				$this->supplierName = $vals['supplierName'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AliShopInfoVo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("companyName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->companyName);
				
			}
			
			
			
			
			if ("loginId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->loginId);
				
			}
			
			
			
			
			if ("shopUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shopUrl);
				
			}
			
			
			
			
			if ("supplierName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->supplierName);
				
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
		
		if($this->companyName !== null) {
			
			$xfer += $output->writeFieldBegin('companyName');
			$xfer += $output->writeString($this->companyName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->loginId !== null) {
			
			$xfer += $output->writeFieldBegin('loginId');
			$xfer += $output->writeString($this->loginId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shopUrl !== null) {
			
			$xfer += $output->writeFieldBegin('shopUrl');
			$xfer += $output->writeString($this->shopUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->supplierName !== null) {
			
			$xfer += $output->writeFieldBegin('supplierName');
			$xfer += $output->writeString($this->supplierName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>