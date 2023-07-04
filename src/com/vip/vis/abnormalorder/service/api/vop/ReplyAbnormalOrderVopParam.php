<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\abnormalorder\service\api\vop;

class ReplyAbnormalOrderVopParam {
	
	static $_TSPEC;
	public $abnormal_order_sn = null;
	public $id = null;
	public $vendor_id = null;
	public $reason_first = null;
	public $reason_second = null;
	public $handle_time = null;
	public $lack_num = null;
	
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
			'var' => 'reason_first'
			),
			6 => array(
			'var' => 'reason_second'
			),
			7 => array(
			'var' => 'handle_time'
			),
			8 => array(
			'var' => 'lack_num'
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
			
			
			if (isset($vals['reason_first'])){
				
				$this->reason_first = $vals['reason_first'];
			}
			
			
			if (isset($vals['reason_second'])){
				
				$this->reason_second = $vals['reason_second'];
			}
			
			
			if (isset($vals['handle_time'])){
				
				$this->handle_time = $vals['handle_time'];
			}
			
			
			if (isset($vals['lack_num'])){
				
				$this->lack_num = $vals['lack_num'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReplyAbnormalOrderVopParam';
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
			
			
			
			
			if ("reason_first" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reason_first);
				
			}
			
			
			
			
			if ("reason_second" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reason_second);
				
			}
			
			
			
			
			if ("handle_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->handle_time);
				
			}
			
			
			
			
			if ("lack_num" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->lack_num); 
				
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
		
		if($this->reason_first !== null) {
			
			$xfer += $output->writeFieldBegin('reason_first');
			$xfer += $output->writeString($this->reason_first);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reason_second !== null) {
			
			$xfer += $output->writeFieldBegin('reason_second');
			$xfer += $output->writeString($this->reason_second);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->handle_time !== null) {
			
			$xfer += $output->writeFieldBegin('handle_time');
			$xfer += $output->writeString($this->handle_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lack_num !== null) {
			
			$xfer += $output->writeFieldBegin('lack_num');
			$xfer += $output->writeI32($this->lack_num);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>