<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vipcard;

class BindResultModel {
	
	static $_TSPEC;
	public $phoneNo = null;
	public $cardCode = null;
	public $bindResult = null;
	public $detailMsg = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'phoneNo'
			),
			2 => array(
			'var' => 'cardCode'
			),
			3 => array(
			'var' => 'bindResult'
			),
			4 => array(
			'var' => 'detailMsg'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['phoneNo'])){
				
				$this->phoneNo = $vals['phoneNo'];
			}
			
			
			if (isset($vals['cardCode'])){
				
				$this->cardCode = $vals['cardCode'];
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
		
		return 'BindResultModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("phoneNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->phoneNo);
				
			}
			
			
			
			
			if ("cardCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cardCode);
				
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
		
		if($this->phoneNo !== null) {
			
			$xfer += $output->writeFieldBegin('phoneNo');
			$xfer += $output->writeString($this->phoneNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cardCode !== null) {
			
			$xfer += $output->writeFieldBegin('cardCode');
			$xfer += $output->writeString($this->cardCode);
			
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