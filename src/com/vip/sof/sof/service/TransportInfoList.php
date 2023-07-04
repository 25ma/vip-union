<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class TransportInfoList {
	
	static $_TSPEC;
	public $transportNo = null;
	public $carriersCode = null;
	public $stat = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transportNo'
			),
			2 => array(
			'var' => 'carriersCode'
			),
			3 => array(
			'var' => 'stat'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['carriersCode'])){
				
				$this->carriersCode = $vals['carriersCode'];
			}
			
			
			if (isset($vals['stat'])){
				
				$this->stat = $vals['stat'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TransportInfoList';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("carriersCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriersCode);
				
			}
			
			
			
			
			if ("stat" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->stat);
				
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
		
		if($this->transportNo !== null) {
			
			$xfer += $output->writeFieldBegin('transportNo');
			$xfer += $output->writeString($this->transportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriersCode !== null) {
			
			$xfer += $output->writeFieldBegin('carriersCode');
			$xfer += $output->writeString($this->carriersCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->stat !== null) {
			
			$xfer += $output->writeFieldBegin('stat');
			$xfer += $output->writeString($this->stat);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>