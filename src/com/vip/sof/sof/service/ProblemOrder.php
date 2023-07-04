<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class ProblemOrder {
	
	static $_TSPEC;
	public $wdNo = null;
	public $category3Name = null;
	public $visStatusStr = null;
	public $isDelayStr = null;
	public $endTime = null;
	public $createTime = null;
	public $wdSrc = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'wdNo'
			),
			2 => array(
			'var' => 'category3Name'
			),
			3 => array(
			'var' => 'visStatusStr'
			),
			4 => array(
			'var' => 'isDelayStr'
			),
			5 => array(
			'var' => 'endTime'
			),
			6 => array(
			'var' => 'createTime'
			),
			7 => array(
			'var' => 'wdSrc'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['wdNo'])){
				
				$this->wdNo = $vals['wdNo'];
			}
			
			
			if (isset($vals['category3Name'])){
				
				$this->category3Name = $vals['category3Name'];
			}
			
			
			if (isset($vals['visStatusStr'])){
				
				$this->visStatusStr = $vals['visStatusStr'];
			}
			
			
			if (isset($vals['isDelayStr'])){
				
				$this->isDelayStr = $vals['isDelayStr'];
			}
			
			
			if (isset($vals['endTime'])){
				
				$this->endTime = $vals['endTime'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['wdSrc'])){
				
				$this->wdSrc = $vals['wdSrc'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ProblemOrder';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("wdNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->wdNo);
				
			}
			
			
			
			
			if ("category3Name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->category3Name);
				
			}
			
			
			
			
			if ("visStatusStr" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->visStatusStr);
				
			}
			
			
			
			
			if ("isDelayStr" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->isDelayStr);
				
			}
			
			
			
			
			if ("endTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->endTime);
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createTime);
				
			}
			
			
			
			
			if ("wdSrc" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->wdSrc); 
				
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
		
		if($this->wdNo !== null) {
			
			$xfer += $output->writeFieldBegin('wdNo');
			$xfer += $output->writeString($this->wdNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->category3Name !== null) {
			
			$xfer += $output->writeFieldBegin('category3Name');
			$xfer += $output->writeString($this->category3Name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->visStatusStr !== null) {
			
			$xfer += $output->writeFieldBegin('visStatusStr');
			$xfer += $output->writeString($this->visStatusStr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isDelayStr !== null) {
			
			$xfer += $output->writeFieldBegin('isDelayStr');
			$xfer += $output->writeString($this->isDelayStr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->endTime !== null) {
			
			$xfer += $output->writeFieldBegin('endTime');
			$xfer += $output->writeString($this->endTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeString($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->wdSrc !== null) {
			
			$xfer += $output->writeFieldBegin('wdSrc');
			$xfer += $output->writeI32($this->wdSrc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>