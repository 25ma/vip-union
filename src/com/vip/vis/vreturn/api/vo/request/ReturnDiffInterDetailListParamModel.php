<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\vreturn\api\vo\request;

class ReturnDiffInterDetailListParamModel {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $rv_difference_no = null;
	public $return_no = null;
	public $pageIndex = null;
	public $pageSize = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'rv_difference_no'
			),
			3 => array(
			'var' => 'return_no'
			),
			7 => array(
			'var' => 'pageIndex'
			),
			8 => array(
			'var' => 'pageSize'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['rv_difference_no'])){
				
				$this->rv_difference_no = $vals['rv_difference_no'];
			}
			
			
			if (isset($vals['return_no'])){
				
				$this->return_no = $vals['return_no'];
			}
			
			
			if (isset($vals['pageIndex'])){
				
				$this->pageIndex = $vals['pageIndex'];
			}
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReturnDiffInterDetailListParamModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_id); 
				
			}
			
			
			
			
			if ("rv_difference_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rv_difference_no);
				
			}
			
			
			
			
			if ("return_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->return_no);
				
			}
			
			
			
			
			if ("pageIndex" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->pageIndex); 
				
			}
			
			
			
			
			if ("pageSize" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->pageSize); 
				
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
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->rv_difference_no !== null) {
			
			$xfer += $output->writeFieldBegin('rv_difference_no');
			$xfer += $output->writeString($this->rv_difference_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->return_no !== null) {
			
			$xfer += $output->writeFieldBegin('return_no');
			$xfer += $output->writeString($this->return_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pageIndex !== null) {
			
			$xfer += $output->writeFieldBegin('pageIndex');
			$xfer += $output->writeI32($this->pageIndex);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pageSize !== null) {
			
			$xfer += $output->writeFieldBegin('pageSize');
			$xfer += $output->writeI32($this->pageSize);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>