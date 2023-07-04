<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\fbs\vop\service;

class GetBillVendorFeeInfoRequest {
	
	static $_TSPEC;
	public $vendor_code = null;
	public $start_date_time = null;
	public $end_date_time = null;
	public $page_index = null;
	public $page_size = null;
	public $search_type = null;
	public $master_order_sn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_code'
			),
			2 => array(
			'var' => 'start_date_time'
			),
			3 => array(
			'var' => 'end_date_time'
			),
			4 => array(
			'var' => 'page_index'
			),
			5 => array(
			'var' => 'page_size'
			),
			6 => array(
			'var' => 'search_type'
			),
			7 => array(
			'var' => 'master_order_sn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_code'])){
				
				$this->vendor_code = $vals['vendor_code'];
			}
			
			
			if (isset($vals['start_date_time'])){
				
				$this->start_date_time = $vals['start_date_time'];
			}
			
			
			if (isset($vals['end_date_time'])){
				
				$this->end_date_time = $vals['end_date_time'];
			}
			
			
			if (isset($vals['page_index'])){
				
				$this->page_index = $vals['page_index'];
			}
			
			
			if (isset($vals['page_size'])){
				
				$this->page_size = $vals['page_size'];
			}
			
			
			if (isset($vals['search_type'])){
				
				$this->search_type = $vals['search_type'];
			}
			
			
			if (isset($vals['master_order_sn'])){
				
				$this->master_order_sn = $vals['master_order_sn'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetBillVendorFeeInfoRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vendor_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_code);
				
			}
			
			
			
			
			if ("start_date_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->start_date_time);
				
			}
			
			
			
			
			if ("end_date_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->end_date_time);
				
			}
			
			
			
			
			if ("page_index" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page_index); 
				
			}
			
			
			
			
			if ("page_size" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page_size); 
				
			}
			
			
			
			
			if ("search_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->search_type); 
				
			}
			
			
			
			
			if ("master_order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->master_order_sn);
				
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
		
		$xfer += $output->writeFieldBegin('vendor_code');
		$xfer += $output->writeString($this->vendor_code);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->start_date_time !== null) {
			
			$xfer += $output->writeFieldBegin('start_date_time');
			$xfer += $output->writeString($this->start_date_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->end_date_time !== null) {
			
			$xfer += $output->writeFieldBegin('end_date_time');
			$xfer += $output->writeString($this->end_date_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page_index !== null) {
			
			$xfer += $output->writeFieldBegin('page_index');
			$xfer += $output->writeI32($this->page_index);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page_size !== null) {
			
			$xfer += $output->writeFieldBegin('page_size');
			$xfer += $output->writeI32($this->page_size);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->search_type !== null) {
			
			$xfer += $output->writeFieldBegin('search_type');
			$xfer += $output->writeI32($this->search_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->master_order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('master_order_sn');
			$xfer += $output->writeString($this->master_order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>