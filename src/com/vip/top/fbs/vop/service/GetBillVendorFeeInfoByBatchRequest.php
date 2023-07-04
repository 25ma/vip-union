<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\fbs\vop\service;

class GetBillVendorFeeInfoByBatchRequest {
	
	static $_TSPEC;
	public $vendor_code = null;
	public $start_date_time = null;
	public $end_date_time = null;
	public $batch_no = null;
	public $thread_total_count = null;
	public $thread_no = null;
	public $data_size = null;
	
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
			'var' => 'batch_no'
			),
			5 => array(
			'var' => 'thread_total_count'
			),
			6 => array(
			'var' => 'thread_no'
			),
			7 => array(
			'var' => 'data_size'
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
			
			
			if (isset($vals['batch_no'])){
				
				$this->batch_no = $vals['batch_no'];
			}
			
			
			if (isset($vals['thread_total_count'])){
				
				$this->thread_total_count = $vals['thread_total_count'];
			}
			
			
			if (isset($vals['thread_no'])){
				
				$this->thread_no = $vals['thread_no'];
			}
			
			
			if (isset($vals['data_size'])){
				
				$this->data_size = $vals['data_size'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetBillVendorFeeInfoByBatchRequest';
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
			
			
			
			
			if ("batch_no" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->batch_no); 
				
			}
			
			
			
			
			if ("thread_total_count" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->thread_total_count); 
				
			}
			
			
			
			
			if ("thread_no" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->thread_no); 
				
			}
			
			
			
			
			if ("data_size" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->data_size); 
				
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
		
		$xfer += $output->writeFieldBegin('start_date_time');
		$xfer += $output->writeString($this->start_date_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('end_date_time');
		$xfer += $output->writeString($this->end_date_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('batch_no');
		$xfer += $output->writeI32($this->batch_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('thread_total_count');
		$xfer += $output->writeI32($this->thread_total_count);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('thread_no');
		$xfer += $output->writeI32($this->thread_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('data_size');
		$xfer += $output->writeI32($this->data_size);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>