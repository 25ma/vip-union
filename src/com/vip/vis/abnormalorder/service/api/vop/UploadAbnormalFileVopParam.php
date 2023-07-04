<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\abnormalorder\service\api\vop;

class UploadAbnormalFileVopParam {
	
	static $_TSPEC;
	public $abnormal_order_sn = null;
	public $id = null;
	public $vendor_id = null;
	public $attach_url = null;
	public $attach_name = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			2 => array(
			'var' => 'abnormal_order_sn'
			),
			3 => array(
			'var' => 'id'
			),
			4 => array(
			'var' => 'vendor_id'
			),
			5 => array(
			'var' => 'attach_url'
			),
			6 => array(
			'var' => 'attach_name'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['abnormal_order_sn'])){
				
				$this->abnormal_order_sn = $vals['abnormal_order_sn'];
			}
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['attach_url'])){
				
				$this->attach_url = $vals['attach_url'];
			}
			
			
			if (isset($vals['attach_name'])){
				
				$this->attach_name = $vals['attach_name'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'UploadAbnormalFileVopParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("abnormal_order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->abnormal_order_sn);
				
			}
			
			
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
			}
			
			
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_id); 
				
			}
			
			
			
			
			if ("attach_url" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attach_url);
				
			}
			
			
			
			
			if ("attach_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attach_name);
				
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
		
		$xfer += $output->writeFieldBegin('abnormal_order_sn');
		$xfer += $output->writeString($this->abnormal_order_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('id');
		$xfer += $output->writeI64($this->id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('attach_url');
		$xfer += $output->writeString($this->attach_url);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('attach_name');
		$xfer += $output->writeString($this->attach_name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>