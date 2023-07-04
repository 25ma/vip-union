<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tms\vop\service;

class WaybillContractCancelRequestDetail {
	
	static $_TSPEC;
	public $store_id = null;
	public $contract_id = null;
	public $operate_time = null;
	public $operate_remark = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'store_id'
			),
			2 => array(
			'var' => 'contract_id'
			),
			3 => array(
			'var' => 'operate_time'
			),
			4 => array(
			'var' => 'operate_remark'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['store_id'])){
				
				$this->store_id = $vals['store_id'];
			}
			
			
			if (isset($vals['contract_id'])){
				
				$this->contract_id = $vals['contract_id'];
			}
			
			
			if (isset($vals['operate_time'])){
				
				$this->operate_time = $vals['operate_time'];
			}
			
			
			if (isset($vals['operate_remark'])){
				
				$this->operate_remark = $vals['operate_remark'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WaybillContractCancelRequestDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("store_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->store_id);
				
			}
			
			
			
			
			if ("contract_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contract_id);
				
			}
			
			
			
			
			if ("operate_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->operate_time); 
				
			}
			
			
			
			
			if ("operate_remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operate_remark);
				
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
		
		if($this->store_id !== null) {
			
			$xfer += $output->writeFieldBegin('store_id');
			$xfer += $output->writeString($this->store_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('contract_id');
		$xfer += $output->writeString($this->contract_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('operate_time');
		$xfer += $output->writeI64($this->operate_time);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->operate_remark !== null) {
			
			$xfer += $output->writeFieldBegin('operate_remark');
			$xfer += $output->writeString($this->operate_remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>