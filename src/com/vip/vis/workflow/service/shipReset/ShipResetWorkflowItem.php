<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\workflow\service\shipReset;

class ShipResetWorkflowItem {
	
	static $_TSPEC;
	public $requestId = null;
	public $orderSn = null;
	public $reasonCode = null;
	public $reasonRemark = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'requestId'
			),
			2 => array(
			'var' => 'orderSn'
			),
			3 => array(
			'var' => 'reasonCode'
			),
			4 => array(
			'var' => 'reasonRemark'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['requestId'])){
				
				$this->requestId = $vals['requestId'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['reasonCode'])){
				
				$this->reasonCode = $vals['reasonCode'];
			}
			
			
			if (isset($vals['reasonRemark'])){
				
				$this->reasonRemark = $vals['reasonRemark'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ShipResetWorkflowItem';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("requestId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->requestId);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("reasonCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reasonCode);
				
			}
			
			
			
			
			if ("reasonRemark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reasonRemark);
				
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
		
		$xfer += $output->writeFieldBegin('requestId');
		$xfer += $output->writeString($this->requestId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orderSn');
		$xfer += $output->writeString($this->orderSn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('reasonCode');
		$xfer += $output->writeString($this->reasonCode);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->reasonRemark !== null) {
			
			$xfer += $output->writeFieldBegin('reasonRemark');
			$xfer += $output->writeString($this->reasonRemark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>