<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\order\vo;

class WpcOrderReturnItemVO {
	
	static $_TSPEC;
	public $returnId = null;
	public $orderSn = null;
	public $createTime = null;
	public $status = null;
	public $statusName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			2101 => array(
			'var' => 'returnId'
			),
			2102 => array(
			'var' => 'orderSn'
			),
			2103 => array(
			'var' => 'createTime'
			),
			2104 => array(
			'var' => 'status'
			),
			2105 => array(
			'var' => 'statusName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['returnId'])){
				
				$this->returnId = $vals['returnId'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['statusName'])){
				
				$this->statusName = $vals['statusName'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcOrderReturnItemVO';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("returnId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnId);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createTime);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->status); 
				
			}
			
			
			
			
			if ("statusName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->statusName);
				
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
		
		if($this->returnId !== null) {
			
			$xfer += $output->writeFieldBegin('returnId');
			$xfer += $output->writeString($this->returnId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeString($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeI32($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->statusName !== null) {
			
			$xfer += $output->writeFieldBegin('statusName');
			$xfer += $output->writeString($this->statusName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>