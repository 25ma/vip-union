<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class CSCRefundInfo {
	
	static $_TSPEC;
	public $afterSaleSn = null;
	public $status = null;
	public $refundStatus = null;
	public $refundAmount = null;
	public $createTime = null;
	public $afterSaleType = null;
	public $afterSaleTypeName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'afterSaleSn'
			),
			2 => array(
			'var' => 'status'
			),
			3 => array(
			'var' => 'refundStatus'
			),
			4 => array(
			'var' => 'refundAmount'
			),
			5 => array(
			'var' => 'createTime'
			),
			6 => array(
			'var' => 'afterSaleType'
			),
			7 => array(
			'var' => 'afterSaleTypeName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['afterSaleSn'])){
				
				$this->afterSaleSn = $vals['afterSaleSn'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['refundStatus'])){
				
				$this->refundStatus = $vals['refundStatus'];
			}
			
			
			if (isset($vals['refundAmount'])){
				
				$this->refundAmount = $vals['refundAmount'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['afterSaleType'])){
				
				$this->afterSaleType = $vals['afterSaleType'];
			}
			
			
			if (isset($vals['afterSaleTypeName'])){
				
				$this->afterSaleTypeName = $vals['afterSaleTypeName'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CSCRefundInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("afterSaleSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->afterSaleSn);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->status);
				
			}
			
			
			
			
			if ("refundStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refundStatus);
				
			}
			
			
			
			
			if ("refundAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refundAmount);
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createTime);
				
			}
			
			
			
			
			if ("afterSaleType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->afterSaleType); 
				
			}
			
			
			
			
			if ("afterSaleTypeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->afterSaleTypeName);
				
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
		
		if($this->afterSaleSn !== null) {
			
			$xfer += $output->writeFieldBegin('afterSaleSn');
			$xfer += $output->writeString($this->afterSaleSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeString($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundStatus !== null) {
			
			$xfer += $output->writeFieldBegin('refundStatus');
			$xfer += $output->writeString($this->refundStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundAmount !== null) {
			
			$xfer += $output->writeFieldBegin('refundAmount');
			$xfer += $output->writeString($this->refundAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeString($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->afterSaleType !== null) {
			
			$xfer += $output->writeFieldBegin('afterSaleType');
			$xfer += $output->writeByte($this->afterSaleType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->afterSaleTypeName !== null) {
			
			$xfer += $output->writeFieldBegin('afterSaleTypeName');
			$xfer += $output->writeString($this->afterSaleTypeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>