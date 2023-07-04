<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\vreturn\api\vo\request;

class ReturnSalesOrderPriceParam {
	
	static $_TSPEC;
	public $warehouse_code = null;
	public $vendor_id = null;
	public $return_sn = null;
	public $from_source = null;
	public $page_num = null;
	public $page_size = null;
	public $request_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'warehouse_code'
			),
			2 => array(
			'var' => 'vendor_id'
			),
			3 => array(
			'var' => 'return_sn'
			),
			4 => array(
			'var' => 'from_source'
			),
			5 => array(
			'var' => 'page_num'
			),
			6 => array(
			'var' => 'page_size'
			),
			7 => array(
			'var' => 'request_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['warehouse_code'])){
				
				$this->warehouse_code = $vals['warehouse_code'];
			}
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['return_sn'])){
				
				$this->return_sn = $vals['return_sn'];
			}
			
			
			if (isset($vals['from_source'])){
				
				$this->from_source = $vals['from_source'];
			}
			
			
			if (isset($vals['page_num'])){
				
				$this->page_num = $vals['page_num'];
			}
			
			
			if (isset($vals['page_size'])){
				
				$this->page_size = $vals['page_size'];
			}
			
			
			if (isset($vals['request_time'])){
				
				$this->request_time = $vals['request_time'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReturnSalesOrderPriceParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("warehouse_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse_code);
				
			}
			
			
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_id); 
				
			}
			
			
			
			
			if ("return_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->return_sn);
				
			}
			
			
			
			
			if ("from_source" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->from_source);
				
			}
			
			
			
			
			if ("page_num" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page_num); 
				
			}
			
			
			
			
			if ("page_size" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page_size); 
				
			}
			
			
			
			
			if ("request_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->request_time);
				
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
		
		$xfer += $output->writeFieldBegin('warehouse_code');
		$xfer += $output->writeString($this->warehouse_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('return_sn');
		$xfer += $output->writeString($this->return_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('from_source');
		$xfer += $output->writeString($this->from_source);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->page_num !== null) {
			
			$xfer += $output->writeFieldBegin('page_num');
			$xfer += $output->writeI32($this->page_num);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page_size !== null) {
			
			$xfer += $output->writeFieldBegin('page_size');
			$xfer += $output->writeI32($this->page_size);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->request_time !== null) {
			
			$xfer += $output->writeFieldBegin('request_time');
			$xfer += $output->writeString($this->request_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>