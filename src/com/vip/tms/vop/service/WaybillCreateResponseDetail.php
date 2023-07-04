<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tms\vop\service;

class WaybillCreateResponseDetail {
	
	static $_TSPEC;
	public $package_no = null;
	public $biz_code = null;
	public $biz_msg = null;
	public $order_no = null;
	public $transport_no = null;
	public $parent_transport_no = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'package_no'
			),
			2 => array(
			'var' => 'biz_code'
			),
			3 => array(
			'var' => 'biz_msg'
			),
			4 => array(
			'var' => 'order_no'
			),
			5 => array(
			'var' => 'transport_no'
			),
			6 => array(
			'var' => 'parent_transport_no'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['package_no'])){
				
				$this->package_no = $vals['package_no'];
			}
			
			
			if (isset($vals['biz_code'])){
				
				$this->biz_code = $vals['biz_code'];
			}
			
			
			if (isset($vals['biz_msg'])){
				
				$this->biz_msg = $vals['biz_msg'];
			}
			
			
			if (isset($vals['order_no'])){
				
				$this->order_no = $vals['order_no'];
			}
			
			
			if (isset($vals['transport_no'])){
				
				$this->transport_no = $vals['transport_no'];
			}
			
			
			if (isset($vals['parent_transport_no'])){
				
				$this->parent_transport_no = $vals['parent_transport_no'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WaybillCreateResponseDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("package_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->package_no);
				
			}
			
			
			
			
			if ("biz_code" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->biz_code); 
				
			}
			
			
			
			
			if ("biz_msg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->biz_msg);
				
			}
			
			
			
			
			if ("order_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_no);
				
			}
			
			
			
			
			if ("transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_no);
				
			}
			
			
			
			
			if ("parent_transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->parent_transport_no);
				
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
		
		if($this->package_no !== null) {
			
			$xfer += $output->writeFieldBegin('package_no');
			$xfer += $output->writeString($this->package_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->biz_code !== null) {
			
			$xfer += $output->writeFieldBegin('biz_code');
			$xfer += $output->writeI32($this->biz_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->biz_msg !== null) {
			
			$xfer += $output->writeFieldBegin('biz_msg');
			$xfer += $output->writeString($this->biz_msg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_no !== null) {
			
			$xfer += $output->writeFieldBegin('order_no');
			$xfer += $output->writeString($this->order_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transport_no !== null) {
			
			$xfer += $output->writeFieldBegin('transport_no');
			$xfer += $output->writeString($this->transport_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->parent_transport_no !== null) {
			
			$xfer += $output->writeFieldBegin('parent_transport_no');
			$xfer += $output->writeString($this->parent_transport_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>