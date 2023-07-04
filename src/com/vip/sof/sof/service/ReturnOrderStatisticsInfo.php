<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class ReturnOrderStatisticsInfo {
	
	static $_TSPEC;
	public $toConfirmReturnOrderCount = null;
	public $refuseRejectReturnWarehouseCount = null;
	public $toAppealRefundCount = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'toConfirmReturnOrderCount'
			),
			2 => array(
			'var' => 'refuseRejectReturnWarehouseCount'
			),
			3 => array(
			'var' => 'toAppealRefundCount'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['toConfirmReturnOrderCount'])){
				
				$this->toConfirmReturnOrderCount = $vals['toConfirmReturnOrderCount'];
			}
			
			
			if (isset($vals['refuseRejectReturnWarehouseCount'])){
				
				$this->refuseRejectReturnWarehouseCount = $vals['refuseRejectReturnWarehouseCount'];
			}
			
			
			if (isset($vals['toAppealRefundCount'])){
				
				$this->toAppealRefundCount = $vals['toAppealRefundCount'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReturnOrderStatisticsInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("toConfirmReturnOrderCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->toConfirmReturnOrderCount); 
				
			}
			
			
			
			
			if ("refuseRejectReturnWarehouseCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->refuseRejectReturnWarehouseCount); 
				
			}
			
			
			
			
			if ("toAppealRefundCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->toAppealRefundCount); 
				
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
		
		$xfer += $output->writeFieldBegin('toConfirmReturnOrderCount');
		$xfer += $output->writeI32($this->toConfirmReturnOrderCount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('refuseRejectReturnWarehouseCount');
		$xfer += $output->writeI32($this->refuseRejectReturnWarehouseCount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('toAppealRefundCount');
		$xfer += $output->writeI32($this->toAppealRefundCount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>