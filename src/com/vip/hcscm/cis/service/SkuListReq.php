<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\hcscm\cis\service;

class SkuListReq {
	
	static $_TSPEC;
	public $pageSize = null;
	public $pageNum = null;
	public $rdcCode = null;
	public $warehouseCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			20000 => array(
			'var' => 'pageSize'
			),
			20001 => array(
			'var' => 'pageNum'
			),
			1 => array(
			'var' => 'rdcCode'
			),
			2 => array(
			'var' => 'warehouseCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
			if (isset($vals['pageNum'])){
				
				$this->pageNum = $vals['pageNum'];
			}
			
			
			if (isset($vals['rdcCode'])){
				
				$this->rdcCode = $vals['rdcCode'];
			}
			
			
			if (isset($vals['warehouseCode'])){
				
				$this->warehouseCode = $vals['warehouseCode'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SkuListReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("pageSize" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->pageSize); 
				
			}
			
			
			
			
			if ("pageNum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->pageNum); 
				
			}
			
			
			
			
			if ("rdcCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rdcCode);
				
			}
			
			
			
			
			if ("warehouseCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseCode);
				
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
		
		if($this->pageSize !== null) {
			
			$xfer += $output->writeFieldBegin('pageSize');
			$xfer += $output->writeI32($this->pageSize);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pageNum !== null) {
			
			$xfer += $output->writeFieldBegin('pageNum');
			$xfer += $output->writeI32($this->pageNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('rdcCode');
		$xfer += $output->writeString($this->rdcCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouseCode');
		$xfer += $output->writeString($this->warehouseCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>