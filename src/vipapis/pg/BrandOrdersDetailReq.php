<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\pg;

class BrandOrdersDetailReq {
	
	static $_TSPEC;
	public $brand_store_sn = null;
	public $st_query_time = null;
	public $et_query_time = null;
	public $limit = null;
	public $page = null;
	public $order_sn = null;
	public $dt = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'brand_store_sn'
			),
			2 => array(
			'var' => 'st_query_time'
			),
			3 => array(
			'var' => 'et_query_time'
			),
			4 => array(
			'var' => 'limit'
			),
			5 => array(
			'var' => 'page'
			),
			6 => array(
			'var' => 'order_sn'
			),
			7 => array(
			'var' => 'dt'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['brand_store_sn'])){
				
				$this->brand_store_sn = $vals['brand_store_sn'];
			}
			
			
			if (isset($vals['st_query_time'])){
				
				$this->st_query_time = $vals['st_query_time'];
			}
			
			
			if (isset($vals['et_query_time'])){
				
				$this->et_query_time = $vals['et_query_time'];
			}
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['dt'])){
				
				$this->dt = $vals['dt'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BrandOrdersDetailReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("brand_store_sn" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->brand_store_sn); 
				
			}
			
			
			
			
			if ("st_query_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->st_query_time); 
				
			}
			
			
			
			
			if ("et_query_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->et_query_time); 
				
			}
			
			
			
			
			if ("limit" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->limit); 
				
			}
			
			
			
			
			if ("page" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page); 
				
			}
			
			
			
			
			if ("order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sn);
				
			}
			
			
			
			
			if ("dt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dt);
				
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
		
		$xfer += $output->writeFieldBegin('brand_store_sn');
		$xfer += $output->writeI64($this->brand_store_sn);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->st_query_time !== null) {
			
			$xfer += $output->writeFieldBegin('st_query_time');
			$xfer += $output->writeI64($this->st_query_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->et_query_time !== null) {
			
			$xfer += $output->writeFieldBegin('et_query_time');
			$xfer += $output->writeI64($this->et_query_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->limit !== null) {
			
			$xfer += $output->writeFieldBegin('limit');
			$xfer += $output->writeI32($this->limit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page !== null) {
			
			$xfer += $output->writeFieldBegin('page');
			$xfer += $output->writeI32($this->page);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('order_sn');
			$xfer += $output->writeString($this->order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dt !== null) {
			
			$xfer += $output->writeFieldBegin('dt');
			$xfer += $output->writeString($this->dt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>