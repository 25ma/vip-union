<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\fbs\vop\service;

class BillVendorFeeLogisticsInfo {
	
	static $_TSPEC;
	public $cust_name = null;
	public $transport_no = null;
	public $biz_date = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'cust_name'
			),
			2 => array(
			'var' => 'transport_no'
			),
			3 => array(
			'var' => 'biz_date'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['cust_name'])){
				
				$this->cust_name = $vals['cust_name'];
			}
			
			
			if (isset($vals['transport_no'])){
				
				$this->transport_no = $vals['transport_no'];
			}
			
			
			if (isset($vals['biz_date'])){
				
				$this->biz_date = $vals['biz_date'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BillVendorFeeLogisticsInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("cust_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cust_name);
				
			}
			
			
			
			
			if ("transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_no);
				
			}
			
			
			
			
			if ("biz_date" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->biz_date);
				
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
		
		if($this->cust_name !== null) {
			
			$xfer += $output->writeFieldBegin('cust_name');
			$xfer += $output->writeString($this->cust_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transport_no !== null) {
			
			$xfer += $output->writeFieldBegin('transport_no');
			$xfer += $output->writeString($this->transport_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->biz_date !== null) {
			
			$xfer += $output->writeFieldBegin('biz_date');
			$xfer += $output->writeString($this->biz_date);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>