<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class AfterSaleInfoRet {
	
	static $_TSPEC;
	public $afterSaleHeaderBrief = null;
	public $returnReason = null;
	public $remark = null;
	public $transportInfo = null;
	public $refundInfo = null;
	public $afterSaleDetailList = null;
	public $packageTabs = null;
	public $problemOrderList = null;
	public $orderAddress = null;
	public $returnAddressInfo = null;
	public $saleWarehouse = null;
	public $retreatInfo = null;
	public $fastRefundFlag = null;
	public $auditFlag = null;
	public $refundMode = null;
	public $abnormalFlag = null;
	public $exceptionalOrderFlag = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'afterSaleHeaderBrief'
			),
			2 => array(
			'var' => 'returnReason'
			),
			3 => array(
			'var' => 'remark'
			),
			4 => array(
			'var' => 'transportInfo'
			),
			5 => array(
			'var' => 'refundInfo'
			),
			6 => array(
			'var' => 'afterSaleDetailList'
			),
			7 => array(
			'var' => 'packageTabs'
			),
			8 => array(
			'var' => 'problemOrderList'
			),
			9 => array(
			'var' => 'orderAddress'
			),
			10 => array(
			'var' => 'returnAddressInfo'
			),
			11 => array(
			'var' => 'saleWarehouse'
			),
			12 => array(
			'var' => 'retreatInfo'
			),
			13 => array(
			'var' => 'fastRefundFlag'
			),
			14 => array(
			'var' => 'auditFlag'
			),
			15 => array(
			'var' => 'refundMode'
			),
			16 => array(
			'var' => 'abnormalFlag'
			),
			17 => array(
			'var' => 'exceptionalOrderFlag'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['afterSaleHeaderBrief'])){
				
				$this->afterSaleHeaderBrief = $vals['afterSaleHeaderBrief'];
			}
			
			
			if (isset($vals['returnReason'])){
				
				$this->returnReason = $vals['returnReason'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['transportInfo'])){
				
				$this->transportInfo = $vals['transportInfo'];
			}
			
			
			if (isset($vals['refundInfo'])){
				
				$this->refundInfo = $vals['refundInfo'];
			}
			
			
			if (isset($vals['afterSaleDetailList'])){
				
				$this->afterSaleDetailList = $vals['afterSaleDetailList'];
			}
			
			
			if (isset($vals['packageTabs'])){
				
				$this->packageTabs = $vals['packageTabs'];
			}
			
			
			if (isset($vals['problemOrderList'])){
				
				$this->problemOrderList = $vals['problemOrderList'];
			}
			
			
			if (isset($vals['orderAddress'])){
				
				$this->orderAddress = $vals['orderAddress'];
			}
			
			
			if (isset($vals['returnAddressInfo'])){
				
				$this->returnAddressInfo = $vals['returnAddressInfo'];
			}
			
			
			if (isset($vals['saleWarehouse'])){
				
				$this->saleWarehouse = $vals['saleWarehouse'];
			}
			
			
			if (isset($vals['retreatInfo'])){
				
				$this->retreatInfo = $vals['retreatInfo'];
			}
			
			
			if (isset($vals['fastRefundFlag'])){
				
				$this->fastRefundFlag = $vals['fastRefundFlag'];
			}
			
			
			if (isset($vals['auditFlag'])){
				
				$this->auditFlag = $vals['auditFlag'];
			}
			
			
			if (isset($vals['refundMode'])){
				
				$this->refundMode = $vals['refundMode'];
			}
			
			
			if (isset($vals['abnormalFlag'])){
				
				$this->abnormalFlag = $vals['abnormalFlag'];
			}
			
			
			if (isset($vals['exceptionalOrderFlag'])){
				
				$this->exceptionalOrderFlag = $vals['exceptionalOrderFlag'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AfterSaleInfoRet';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("afterSaleHeaderBrief" == $schemeField){
				
				$needSkip = false;
				
				$this->afterSaleHeaderBrief = new \com\vip\sof\sof\service\AfterSaleHeaderBrief();
				$this->afterSaleHeaderBrief->read($input);
				
			}
			
			
			
			
			if ("returnReason" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnReason);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("transportInfo" == $schemeField){
				
				$needSkip = false;
				
				$this->transportInfo = new \com\vip\sof\sof\service\TransportBaseInfo();
				$this->transportInfo->read($input);
				
			}
			
			
			
			
			if ("refundInfo" == $schemeField){
				
				$needSkip = false;
				
				$this->refundInfo = new \com\vip\sof\sof\service\RefundInfo();
				$this->refundInfo->read($input);
				
			}
			
			
			
			
			if ("afterSaleDetailList" == $schemeField){
				
				$needSkip = false;
				
				$this->afterSaleDetailList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\sof\sof\service\AfterSaleDetail();
						$elem0->read($input);
						
						$this->afterSaleDetailList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("packageTabs" == $schemeField){
				
				$needSkip = false;
				
				$this->packageTabs = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->packageTabs[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("problemOrderList" == $schemeField){
				
				$needSkip = false;
				
				$this->problemOrderList = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						
						$elem2 = new \com\vip\sof\sof\service\ProblemOrder();
						$elem2->read($input);
						
						$this->problemOrderList[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("orderAddress" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderAddress);
				
			}
			
			
			
			
			if ("returnAddressInfo" == $schemeField){
				
				$needSkip = false;
				
				$this->returnAddressInfo = new \com\vip\sof\sof\service\ReturnAddressInfo();
				$this->returnAddressInfo->read($input);
				
			}
			
			
			
			
			if ("saleWarehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->saleWarehouse);
				
			}
			
			
			
			
			if ("retreatInfo" == $schemeField){
				
				$needSkip = false;
				
				$this->retreatInfo = new \com\vip\sof\sof\service\RetreatInfo();
				$this->retreatInfo->read($input);
				
			}
			
			
			
			
			if ("fastRefundFlag" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->fastRefundFlag); 
				
			}
			
			
			
			
			if ("auditFlag" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->auditFlag); 
				
			}
			
			
			
			
			if ("refundMode" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->refundMode); 
				
			}
			
			
			
			
			if ("abnormalFlag" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->abnormalFlag); 
				
			}
			
			
			
			
			if ("exceptionalOrderFlag" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->exceptionalOrderFlag); 
				
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
		
		if($this->afterSaleHeaderBrief !== null) {
			
			$xfer += $output->writeFieldBegin('afterSaleHeaderBrief');
			
			if (!is_object($this->afterSaleHeaderBrief)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->afterSaleHeaderBrief->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnReason !== null) {
			
			$xfer += $output->writeFieldBegin('returnReason');
			$xfer += $output->writeString($this->returnReason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportInfo !== null) {
			
			$xfer += $output->writeFieldBegin('transportInfo');
			
			if (!is_object($this->transportInfo)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->transportInfo->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundInfo !== null) {
			
			$xfer += $output->writeFieldBegin('refundInfo');
			
			if (!is_object($this->refundInfo)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->refundInfo->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->afterSaleDetailList !== null) {
			
			$xfer += $output->writeFieldBegin('afterSaleDetailList');
			
			if (!is_array($this->afterSaleDetailList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->afterSaleDetailList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->packageTabs !== null) {
			
			$xfer += $output->writeFieldBegin('packageTabs');
			
			if (!is_array($this->packageTabs)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->packageTabs as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->problemOrderList !== null) {
			
			$xfer += $output->writeFieldBegin('problemOrderList');
			
			if (!is_array($this->problemOrderList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->problemOrderList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderAddress !== null) {
			
			$xfer += $output->writeFieldBegin('orderAddress');
			$xfer += $output->writeString($this->orderAddress);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnAddressInfo !== null) {
			
			$xfer += $output->writeFieldBegin('returnAddressInfo');
			
			if (!is_object($this->returnAddressInfo)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->returnAddressInfo->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->saleWarehouse !== null) {
			
			$xfer += $output->writeFieldBegin('saleWarehouse');
			$xfer += $output->writeString($this->saleWarehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->retreatInfo !== null) {
			
			$xfer += $output->writeFieldBegin('retreatInfo');
			
			if (!is_object($this->retreatInfo)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->retreatInfo->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fastRefundFlag !== null) {
			
			$xfer += $output->writeFieldBegin('fastRefundFlag');
			$xfer += $output->writeByte($this->fastRefundFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->auditFlag !== null) {
			
			$xfer += $output->writeFieldBegin('auditFlag');
			$xfer += $output->writeByte($this->auditFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundMode !== null) {
			
			$xfer += $output->writeFieldBegin('refundMode');
			$xfer += $output->writeByte($this->refundMode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->abnormalFlag !== null) {
			
			$xfer += $output->writeFieldBegin('abnormalFlag');
			$xfer += $output->writeByte($this->abnormalFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exceptionalOrderFlag !== null) {
			
			$xfer += $output->writeFieldBegin('exceptionalOrderFlag');
			$xfer += $output->writeByte($this->exceptionalOrderFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>