<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vsc\oms\osp\ship\service;

class ReceiveOperationStatusReq {
	
	static $_TSPEC;
	public $billNo = null;
	public $billType = null;
	public $status = null;
	public $statusDesc = null;
	public $operationTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'billNo'
			),
			2 => array(
			'var' => 'billType'
			),
			3 => array(
			'var' => 'status'
			),
			4 => array(
			'var' => 'statusDesc'
			),
			5 => array(
			'var' => 'operationTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['billNo'])){
				
				$this->billNo = $vals['billNo'];
			}
			
			
			if (isset($vals['billType'])){
				
				$this->billType = $vals['billType'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['statusDesc'])){
				
				$this->statusDesc = $vals['statusDesc'];
			}
			
			
			if (isset($vals['operationTime'])){
				
				$this->operationTime = $vals['operationTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReceiveOperationStatusReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("billNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->billNo);
				
			}
			
			
			
			
			if ("billType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->billType);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->status);
				
			}
			
			
			
			
			if ("statusDesc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->statusDesc);
				
			}
			
			
			
			
			if ("operationTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->operationTime); 
				
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
		
		$xfer += $output->writeFieldBegin('billNo');
		$xfer += $output->writeString($this->billNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('billType');
		$xfer += $output->writeString($this->billType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('status');
		$xfer += $output->writeString($this->status);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->statusDesc !== null) {
			
			$xfer += $output->writeFieldBegin('statusDesc');
			$xfer += $output->writeString($this->statusDesc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('operationTime');
		$xfer += $output->writeI64($this->operationTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>