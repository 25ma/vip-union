<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\om\intfc\service;

class OmIntOrderInHeaderIdAndOrderNumReqModel {
	
	static $_TSPEC;
	public $headerId = null;
	public $orderNum = null;
	public $sourceName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'headerId'
			),
			2 => array(
			'var' => 'orderNum'
			),
			3 => array(
			'var' => 'sourceName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['headerId'])){
				
				$this->headerId = $vals['headerId'];
			}
			
			
			if (isset($vals['orderNum'])){
				
				$this->orderNum = $vals['orderNum'];
			}
			
			
			if (isset($vals['sourceName'])){
				
				$this->sourceName = $vals['sourceName'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OmIntOrderInHeaderIdAndOrderNumReqModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("headerId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->headerId); 
				
			}
			
			
			
			
			if ("orderNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderNum);
				
			}
			
			
			
			
			if ("sourceName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sourceName);
				
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
		
		if($this->headerId !== null) {
			
			$xfer += $output->writeFieldBegin('headerId');
			$xfer += $output->writeI64($this->headerId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderNum !== null) {
			
			$xfer += $output->writeFieldBegin('orderNum');
			$xfer += $output->writeString($this->orderNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sourceName !== null) {
			
			$xfer += $output->writeFieldBegin('sourceName');
			$xfer += $output->writeString($this->sourceName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>