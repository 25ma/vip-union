<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\imp\otd\otdapi\service;

class VopFinancePageModel {
	
	static $_TSPEC;
	public $pageIndex = null;
	public $pageSize = null;
	public $totalCount = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'pageIndex'
			),
			2 => array(
			'var' => 'pageSize'
			),
			3 => array(
			'var' => 'totalCount'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['pageIndex'])){
				
				$this->pageIndex = $vals['pageIndex'];
			}
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
			if (isset($vals['totalCount'])){
				
				$this->totalCount = $vals['totalCount'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'VopFinancePageModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("pageIndex" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->pageIndex); 
				
			}
			
			
			
			
			if ("pageSize" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->pageSize); 
				
			}
			
			
			
			
			if ("totalCount" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->totalCount); 
				
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
		
		$xfer += $output->writeFieldBegin('pageIndex');
		$xfer += $output->writeI64($this->pageIndex);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pageSize');
		$xfer += $output->writeI64($this->pageSize);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('totalCount');
		$xfer += $output->writeI64($this->totalCount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>