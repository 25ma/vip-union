<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\mapi\shop\service\vop;

class EquipmentDataModel {
	
	static $_TSPEC;
	public $statisticsDate = null;
	public $equipmentNo = null;
	public $scanCount = null;
	public $scanProuctCount = null;
	public $hitCount = null;
	public $hitProuctCount = null;
	public $browseProductDuration = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'statisticsDate'
			),
			2 => array(
			'var' => 'equipmentNo'
			),
			3 => array(
			'var' => 'scanCount'
			),
			4 => array(
			'var' => 'scanProuctCount'
			),
			5 => array(
			'var' => 'hitCount'
			),
			6 => array(
			'var' => 'hitProuctCount'
			),
			7 => array(
			'var' => 'browseProductDuration'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['statisticsDate'])){
				
				$this->statisticsDate = $vals['statisticsDate'];
			}
			
			
			if (isset($vals['equipmentNo'])){
				
				$this->equipmentNo = $vals['equipmentNo'];
			}
			
			
			if (isset($vals['scanCount'])){
				
				$this->scanCount = $vals['scanCount'];
			}
			
			
			if (isset($vals['scanProuctCount'])){
				
				$this->scanProuctCount = $vals['scanProuctCount'];
			}
			
			
			if (isset($vals['hitCount'])){
				
				$this->hitCount = $vals['hitCount'];
			}
			
			
			if (isset($vals['hitProuctCount'])){
				
				$this->hitProuctCount = $vals['hitProuctCount'];
			}
			
			
			if (isset($vals['browseProductDuration'])){
				
				$this->browseProductDuration = $vals['browseProductDuration'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'EquipmentDataModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("statisticsDate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->statisticsDate);
				
			}
			
			
			
			
			if ("equipmentNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->equipmentNo);
				
			}
			
			
			
			
			if ("scanCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->scanCount); 
				
			}
			
			
			
			
			if ("scanProuctCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->scanProuctCount); 
				
			}
			
			
			
			
			if ("hitCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->hitCount); 
				
			}
			
			
			
			
			if ("hitProuctCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->hitProuctCount); 
				
			}
			
			
			
			
			if ("browseProductDuration" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->browseProductDuration);
				
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
		
		if($this->statisticsDate !== null) {
			
			$xfer += $output->writeFieldBegin('statisticsDate');
			$xfer += $output->writeString($this->statisticsDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->equipmentNo !== null) {
			
			$xfer += $output->writeFieldBegin('equipmentNo');
			$xfer += $output->writeString($this->equipmentNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->scanCount !== null) {
			
			$xfer += $output->writeFieldBegin('scanCount');
			$xfer += $output->writeI32($this->scanCount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->scanProuctCount !== null) {
			
			$xfer += $output->writeFieldBegin('scanProuctCount');
			$xfer += $output->writeI32($this->scanProuctCount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->hitCount !== null) {
			
			$xfer += $output->writeFieldBegin('hitCount');
			$xfer += $output->writeI32($this->hitCount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->hitProuctCount !== null) {
			
			$xfer += $output->writeFieldBegin('hitProuctCount');
			$xfer += $output->writeI32($this->hitProuctCount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->browseProductDuration !== null) {
			
			$xfer += $output->writeFieldBegin('browseProductDuration');
			$xfer += $output->writeString($this->browseProductDuration);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>