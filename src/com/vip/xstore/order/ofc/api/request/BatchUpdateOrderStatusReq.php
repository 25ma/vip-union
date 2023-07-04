<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\order\ofc\api\request;

class BatchUpdateOrderStatusReq {
	
	static $_TSPEC;
	public $signTimeBegin = null;
	public $signTimeEnd = null;
	public $orderStatus = null;
	public $newOrderStatus = null;
	public $maxSize = null;
	public $needSendVms = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'signTimeBegin'
			),
			2 => array(
			'var' => 'signTimeEnd'
			),
			3 => array(
			'var' => 'orderStatus'
			),
			4 => array(
			'var' => 'newOrderStatus'
			),
			5 => array(
			'var' => 'maxSize'
			),
			6 => array(
			'var' => 'needSendVms'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['signTimeBegin'])){
				
				$this->signTimeBegin = $vals['signTimeBegin'];
			}
			
			
			if (isset($vals['signTimeEnd'])){
				
				$this->signTimeEnd = $vals['signTimeEnd'];
			}
			
			
			if (isset($vals['orderStatus'])){
				
				$this->orderStatus = $vals['orderStatus'];
			}
			
			
			if (isset($vals['newOrderStatus'])){
				
				$this->newOrderStatus = $vals['newOrderStatus'];
			}
			
			
			if (isset($vals['maxSize'])){
				
				$this->maxSize = $vals['maxSize'];
			}
			
			
			if (isset($vals['needSendVms'])){
				
				$this->needSendVms = $vals['needSendVms'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BatchUpdateOrderStatusReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("signTimeBegin" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->signTimeBegin); 
				
			}
			
			
			
			
			if ("signTimeEnd" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->signTimeEnd); 
				
			}
			
			
			
			
			if ("orderStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->orderStatus); 
				
			}
			
			
			
			
			if ("newOrderStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->newOrderStatus); 
				
			}
			
			
			
			
			if ("maxSize" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->maxSize); 
				
			}
			
			
			
			
			if ("needSendVms" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->needSendVms);
				
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
		
		if($this->signTimeBegin !== null) {
			
			$xfer += $output->writeFieldBegin('signTimeBegin');
			$xfer += $output->writeI64($this->signTimeBegin);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->signTimeEnd !== null) {
			
			$xfer += $output->writeFieldBegin('signTimeEnd');
			$xfer += $output->writeI64($this->signTimeEnd);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderStatus !== null) {
			
			$xfer += $output->writeFieldBegin('orderStatus');
			$xfer += $output->writeI32($this->orderStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->newOrderStatus !== null) {
			
			$xfer += $output->writeFieldBegin('newOrderStatus');
			$xfer += $output->writeI32($this->newOrderStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->maxSize !== null) {
			
			$xfer += $output->writeFieldBegin('maxSize');
			$xfer += $output->writeI32($this->maxSize);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->needSendVms !== null) {
			
			$xfer += $output->writeFieldBegin('needSendVms');
			$xfer += $output->writeBool($this->needSendVms);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>