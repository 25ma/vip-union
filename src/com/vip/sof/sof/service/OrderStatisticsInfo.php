<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class OrderStatisticsInfo {
	
	static $_TSPEC;
	public $toProcessingOrderCount = null;
	public $toDeliveryOrderCount = null;
	public $waitAuditOrderCount = null;
	public $passAuditOrderCount = null;
	public $waitInvoiceOrderCount = null;
	public $waitAuditCancelCount = null;
	public $autoCancelCount = null;
	public $autoRefundCount = null;
	public $waitRefuseOrderCount = null;
	public $waitAuditRefuseCount = null;
	public $waitAuditUserRefundCount = null;
	public $toProcessingUnnormalOrderCount = null;
	public $toDeliveryRedeliveryOrderCount = null;
	public $toTrackRedeliveryOrderCount = null;
	public $toSignRedeliveryOrderCount = null;
	public $toDeliveryExpeditedShipCount = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'toProcessingOrderCount'
			),
			2 => array(
			'var' => 'toDeliveryOrderCount'
			),
			3 => array(
			'var' => 'waitAuditOrderCount'
			),
			4 => array(
			'var' => 'passAuditOrderCount'
			),
			5 => array(
			'var' => 'waitInvoiceOrderCount'
			),
			6 => array(
			'var' => 'waitAuditCancelCount'
			),
			7 => array(
			'var' => 'autoCancelCount'
			),
			8 => array(
			'var' => 'autoRefundCount'
			),
			9 => array(
			'var' => 'waitRefuseOrderCount'
			),
			10 => array(
			'var' => 'waitAuditRefuseCount'
			),
			11 => array(
			'var' => 'waitAuditUserRefundCount'
			),
			12 => array(
			'var' => 'toProcessingUnnormalOrderCount'
			),
			13 => array(
			'var' => 'toDeliveryRedeliveryOrderCount'
			),
			14 => array(
			'var' => 'toTrackRedeliveryOrderCount'
			),
			15 => array(
			'var' => 'toSignRedeliveryOrderCount'
			),
			16 => array(
			'var' => 'toDeliveryExpeditedShipCount'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['toProcessingOrderCount'])){
				
				$this->toProcessingOrderCount = $vals['toProcessingOrderCount'];
			}
			
			
			if (isset($vals['toDeliveryOrderCount'])){
				
				$this->toDeliveryOrderCount = $vals['toDeliveryOrderCount'];
			}
			
			
			if (isset($vals['waitAuditOrderCount'])){
				
				$this->waitAuditOrderCount = $vals['waitAuditOrderCount'];
			}
			
			
			if (isset($vals['passAuditOrderCount'])){
				
				$this->passAuditOrderCount = $vals['passAuditOrderCount'];
			}
			
			
			if (isset($vals['waitInvoiceOrderCount'])){
				
				$this->waitInvoiceOrderCount = $vals['waitInvoiceOrderCount'];
			}
			
			
			if (isset($vals['waitAuditCancelCount'])){
				
				$this->waitAuditCancelCount = $vals['waitAuditCancelCount'];
			}
			
			
			if (isset($vals['autoCancelCount'])){
				
				$this->autoCancelCount = $vals['autoCancelCount'];
			}
			
			
			if (isset($vals['autoRefundCount'])){
				
				$this->autoRefundCount = $vals['autoRefundCount'];
			}
			
			
			if (isset($vals['waitRefuseOrderCount'])){
				
				$this->waitRefuseOrderCount = $vals['waitRefuseOrderCount'];
			}
			
			
			if (isset($vals['waitAuditRefuseCount'])){
				
				$this->waitAuditRefuseCount = $vals['waitAuditRefuseCount'];
			}
			
			
			if (isset($vals['waitAuditUserRefundCount'])){
				
				$this->waitAuditUserRefundCount = $vals['waitAuditUserRefundCount'];
			}
			
			
			if (isset($vals['toProcessingUnnormalOrderCount'])){
				
				$this->toProcessingUnnormalOrderCount = $vals['toProcessingUnnormalOrderCount'];
			}
			
			
			if (isset($vals['toDeliveryRedeliveryOrderCount'])){
				
				$this->toDeliveryRedeliveryOrderCount = $vals['toDeliveryRedeliveryOrderCount'];
			}
			
			
			if (isset($vals['toTrackRedeliveryOrderCount'])){
				
				$this->toTrackRedeliveryOrderCount = $vals['toTrackRedeliveryOrderCount'];
			}
			
			
			if (isset($vals['toSignRedeliveryOrderCount'])){
				
				$this->toSignRedeliveryOrderCount = $vals['toSignRedeliveryOrderCount'];
			}
			
			
			if (isset($vals['toDeliveryExpeditedShipCount'])){
				
				$this->toDeliveryExpeditedShipCount = $vals['toDeliveryExpeditedShipCount'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderStatisticsInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("toProcessingOrderCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->toProcessingOrderCount); 
				
			}
			
			
			
			
			if ("toDeliveryOrderCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->toDeliveryOrderCount); 
				
			}
			
			
			
			
			if ("waitAuditOrderCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->waitAuditOrderCount); 
				
			}
			
			
			
			
			if ("passAuditOrderCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->passAuditOrderCount); 
				
			}
			
			
			
			
			if ("waitInvoiceOrderCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->waitInvoiceOrderCount); 
				
			}
			
			
			
			
			if ("waitAuditCancelCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->waitAuditCancelCount); 
				
			}
			
			
			
			
			if ("autoCancelCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->autoCancelCount); 
				
			}
			
			
			
			
			if ("autoRefundCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->autoRefundCount); 
				
			}
			
			
			
			
			if ("waitRefuseOrderCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->waitRefuseOrderCount); 
				
			}
			
			
			
			
			if ("waitAuditRefuseCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->waitAuditRefuseCount); 
				
			}
			
			
			
			
			if ("waitAuditUserRefundCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->waitAuditUserRefundCount); 
				
			}
			
			
			
			
			if ("toProcessingUnnormalOrderCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->toProcessingUnnormalOrderCount); 
				
			}
			
			
			
			
			if ("toDeliveryRedeliveryOrderCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->toDeliveryRedeliveryOrderCount); 
				
			}
			
			
			
			
			if ("toTrackRedeliveryOrderCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->toTrackRedeliveryOrderCount); 
				
			}
			
			
			
			
			if ("toSignRedeliveryOrderCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->toSignRedeliveryOrderCount); 
				
			}
			
			
			
			
			if ("toDeliveryExpeditedShipCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->toDeliveryExpeditedShipCount); 
				
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
		
		$xfer += $output->writeFieldBegin('toProcessingOrderCount');
		$xfer += $output->writeI32($this->toProcessingOrderCount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('toDeliveryOrderCount');
		$xfer += $output->writeI32($this->toDeliveryOrderCount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('waitAuditOrderCount');
		$xfer += $output->writeI32($this->waitAuditOrderCount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('passAuditOrderCount');
		$xfer += $output->writeI32($this->passAuditOrderCount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('waitInvoiceOrderCount');
		$xfer += $output->writeI32($this->waitInvoiceOrderCount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('waitAuditCancelCount');
		$xfer += $output->writeI32($this->waitAuditCancelCount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('autoCancelCount');
		$xfer += $output->writeI32($this->autoCancelCount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('autoRefundCount');
		$xfer += $output->writeI32($this->autoRefundCount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('waitRefuseOrderCount');
		$xfer += $output->writeI32($this->waitRefuseOrderCount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('waitAuditRefuseCount');
		$xfer += $output->writeI32($this->waitAuditRefuseCount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('waitAuditUserRefundCount');
		$xfer += $output->writeI32($this->waitAuditUserRefundCount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('toProcessingUnnormalOrderCount');
		$xfer += $output->writeI32($this->toProcessingUnnormalOrderCount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('toDeliveryRedeliveryOrderCount');
		$xfer += $output->writeI32($this->toDeliveryRedeliveryOrderCount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('toTrackRedeliveryOrderCount');
		$xfer += $output->writeI32($this->toTrackRedeliveryOrderCount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('toSignRedeliveryOrderCount');
		$xfer += $output->writeI32($this->toSignRedeliveryOrderCount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('toDeliveryExpeditedShipCount');
		$xfer += $output->writeI32($this->toDeliveryExpeditedShipCount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>