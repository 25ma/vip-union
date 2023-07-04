<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tpc\api\model;

class AbnormalDirectRequest {
	
	static $_TSPEC;
	public $transport_no = null;
	public $order_sn = null;
	public $code = null;
	public $content = null;
	public $time = null;
	public $report_city = null;
	public $report_org_code = null;
	public $report_org_name = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transport_no'
			),
			2 => array(
			'var' => 'order_sn'
			),
			3 => array(
			'var' => 'code'
			),
			4 => array(
			'var' => 'content'
			),
			5 => array(
			'var' => 'time'
			),
			6 => array(
			'var' => 'report_city'
			),
			7 => array(
			'var' => 'report_org_code'
			),
			8 => array(
			'var' => 'report_org_name'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transport_no'])){
				
				$this->transport_no = $vals['transport_no'];
			}
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['code'])){
				
				$this->code = $vals['code'];
			}
			
			
			if (isset($vals['content'])){
				
				$this->content = $vals['content'];
			}
			
			
			if (isset($vals['time'])){
				
				$this->time = $vals['time'];
			}
			
			
			if (isset($vals['report_city'])){
				
				$this->report_city = $vals['report_city'];
			}
			
			
			if (isset($vals['report_org_code'])){
				
				$this->report_org_code = $vals['report_org_code'];
			}
			
			
			if (isset($vals['report_org_name'])){
				
				$this->report_org_name = $vals['report_org_name'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AbnormalDirectRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_no);
				
			}
			
			
			
			
			if ("order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sn);
				
			}
			
			
			
			
			if ("code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->code);
				
			}
			
			
			
			
			if ("content" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->content);
				
			}
			
			
			
			
			if ("time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->time); 
				
			}
			
			
			
			
			if ("report_city" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->report_city);
				
			}
			
			
			
			
			if ("report_org_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->report_org_code);
				
			}
			
			
			
			
			if ("report_org_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->report_org_name);
				
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
		
		$xfer += $output->writeFieldBegin('transport_no');
		$xfer += $output->writeString($this->transport_no);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('order_sn');
			$xfer += $output->writeString($this->order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('code');
		$xfer += $output->writeString($this->code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('content');
		$xfer += $output->writeString($this->content);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('time');
		$xfer += $output->writeI64($this->time);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->report_city !== null) {
			
			$xfer += $output->writeFieldBegin('report_city');
			$xfer += $output->writeString($this->report_city);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->report_org_code !== null) {
			
			$xfer += $output->writeFieldBegin('report_org_code');
			$xfer += $output->writeString($this->report_org_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->report_org_name !== null) {
			
			$xfer += $output->writeFieldBegin('report_org_name');
			$xfer += $output->writeString($this->report_org_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>