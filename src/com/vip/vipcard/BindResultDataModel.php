<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vipcard;

class BindResultDataModel {
	
	static $_TSPEC;
	public $userId = null;
	public $cardCode = null;
	public $faceMoney = null;
	public $bindResult = null;
	public $detailMsg = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			2 => array(
			'var' => 'cardCode'
			),
			3 => array(
			'var' => 'faceMoney'
			),
			4 => array(
			'var' => 'bindResult'
			),
			5 => array(
			'var' => 'detailMsg'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['cardCode'])){
				
				$this->cardCode = $vals['cardCode'];
			}
			
			
			if (isset($vals['faceMoney'])){
				
				$this->faceMoney = $vals['faceMoney'];
			}
			
			
			if (isset($vals['bindResult'])){
				
				$this->bindResult = $vals['bindResult'];
			}
			
			
			if (isset($vals['detailMsg'])){
				
				$this->detailMsg = $vals['detailMsg'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BindResultDataModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("userId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userId);
				
			}
			
			
			
			
			if ("cardCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cardCode);
				
			}
			
			
			
			
			if ("faceMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->faceMoney);
				
			}
			
			
			
			
			if ("bindResult" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bindResult);
				
			}
			
			
			
			
			if ("detailMsg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->detailMsg);
				
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
			$xfer += $output->writeString($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cardCode !== null) {
			
			$xfer += $output->writeFieldBegin('cardCode');
			$xfer += $output->writeString($this->cardCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->faceMoney !== null) {
			
			$xfer += $output->writeFieldBegin('faceMoney');
			$xfer += $output->writeString($this->faceMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bindResult !== null) {
			
			$xfer += $output->writeFieldBegin('bindResult');
			$xfer += $output->writeString($this->bindResult);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->detailMsg !== null) {
			
			$xfer += $output->writeFieldBegin('detailMsg');
			$xfer += $output->writeString($this->detailMsg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>