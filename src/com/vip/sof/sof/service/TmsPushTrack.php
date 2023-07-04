<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class TmsPushTrack {
	
	static $_TSPEC;
	public $orderSn = null;
	public $transportNo = null;
	public $transportCode = null;
	public $tmsId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			2 => array(
			'var' => 'transportNo'
			),
			3 => array(
			'var' => 'transportCode'
			),
			4 => array(
			'var' => 'tmsId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['transportCode'])){
				
				$this->transportCode = $vals['transportCode'];
			}
			
			
			if (isset($vals['tmsId'])){
				
				$this->tmsId = $vals['tmsId'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TmsPushTrack';
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
			
			
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("transportCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportCode);
				
			}
			
			
			
			
			if ("tmsId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tmsId);
				
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
		
		
		if($this->transportNo !== null) {
			
			$xfer += $output->writeFieldBegin('transportNo');
			$xfer += $output->writeString($this->transportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportCode !== null) {
			
			$xfer += $output->writeFieldBegin('transportCode');
			$xfer += $output->writeString($this->transportCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tmsId !== null) {
			
			$xfer += $output->writeFieldBegin('tmsId');
			$xfer += $output->writeString($this->tmsId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>