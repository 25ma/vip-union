<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\adp\api\open\service;

class InvitedUserOrderResponse {
	
	static $_TSPEC;
	public $orderSn = null;
	public $orderTime = null;
	public $commissionTotalCost = null;
	public $status = null;
	public $commission = null;
	public $updateTime = null;
	public $newCustomer = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			2 => array(
			'var' => 'orderTime'
			),
			3 => array(
			'var' => 'commissionTotalCost'
			),
			4 => array(
			'var' => 'status'
			),
			5 => array(
			'var' => 'commission'
			),
			6 => array(
			'var' => 'updateTime'
			),
			7 => array(
			'var' => 'newCustomer'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['orderTime'])){
				
				$this->orderTime = $vals['orderTime'];
			}
			
			
			if (isset($vals['commissionTotalCost'])){
				
				$this->commissionTotalCost = $vals['commissionTotalCost'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['commission'])){
				
				$this->commission = $vals['commission'];
			}
			
			
			if (isset($vals['updateTime'])){
				
				$this->updateTime = $vals['updateTime'];
			}
			
			
			if (isset($vals['newCustomer'])){
				
				$this->newCustomer = $vals['newCustomer'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'InvitedUserOrderResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("orderTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->orderTime); 
				
			}
			
			
			
			
			if ("commissionTotalCost" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->commissionTotalCost);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readI16($this->status); 
				
			}
			
			
			
			
			if ("commission" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->commission);
				
			}
			
			
			
			
			if ("updateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updateTime); 
				
			}
			
			
			
			
			if ("newCustomer" == $schemeField){
				
				$needSkip = false;
				$input->readI16($this->newCustomer); 
				
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
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderTime !== null) {
			
			$xfer += $output->writeFieldBegin('orderTime');
			$xfer += $output->writeI64($this->orderTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->commissionTotalCost !== null) {
			
			$xfer += $output->writeFieldBegin('commissionTotalCost');
			$xfer += $output->writeString($this->commissionTotalCost);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeI16($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->commission !== null) {
			
			$xfer += $output->writeFieldBegin('commission');
			$xfer += $output->writeString($this->commission);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateTime !== null) {
			
			$xfer += $output->writeFieldBegin('updateTime');
			$xfer += $output->writeI64($this->updateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->newCustomer !== null) {
			
			$xfer += $output->writeFieldBegin('newCustomer');
			$xfer += $output->writeI16($this->newCustomer);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>