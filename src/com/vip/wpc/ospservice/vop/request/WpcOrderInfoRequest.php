<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\vop\request;

class WpcOrderInfoRequest {
	
	static $_TSPEC;
	public $areaId = null;
	public $timestamp = null;
	public $vopChannelId = null;
	public $userNumber = null;
	public $page = null;
	public $pageSize = null;
	public $orderSnList = null;
	public $isShowCommission = null;
	public $isShowDeliveryAbnormalLabels = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			501 => array(
			'var' => 'areaId'
			),
			502 => array(
			'var' => 'timestamp'
			),
			503 => array(
			'var' => 'vopChannelId'
			),
			504 => array(
			'var' => 'userNumber'
			),
			505 => array(
			'var' => 'page'
			),
			506 => array(
			'var' => 'pageSize'
			),
			12001 => array(
			'var' => 'orderSnList'
			),
			12002 => array(
			'var' => 'isShowCommission'
			),
			12003 => array(
			'var' => 'isShowDeliveryAbnormalLabels'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['areaId'])){
				
				$this->areaId = $vals['areaId'];
			}
			
			
			if (isset($vals['timestamp'])){
				
				$this->timestamp = $vals['timestamp'];
			}
			
			
			if (isset($vals['vopChannelId'])){
				
				$this->vopChannelId = $vals['vopChannelId'];
			}
			
			
			if (isset($vals['userNumber'])){
				
				$this->userNumber = $vals['userNumber'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
			if (isset($vals['orderSnList'])){
				
				$this->orderSnList = $vals['orderSnList'];
			}
			
			
			if (isset($vals['isShowCommission'])){
				
				$this->isShowCommission = $vals['isShowCommission'];
			}
			
			
			if (isset($vals['isShowDeliveryAbnormalLabels'])){
				
				$this->isShowDeliveryAbnormalLabels = $vals['isShowDeliveryAbnormalLabels'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcOrderInfoRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("areaId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->areaId);
				
			}
			
			
			
			
			if ("timestamp" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->timestamp);
				
			}
			
			
			
			
			if ("vopChannelId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vopChannelId);
				
			}
			
			
			
			
			if ("userNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userNumber);
				
			}
			
			
			
			
			if ("page" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page); 
				
			}
			
			
			
			
			if ("pageSize" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->pageSize); 
				
			}
			
			
			
			
			if ("orderSnList" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSnList);
				
			}
			
			
			
			
			if ("isShowCommission" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->isShowCommission);
				
			}
			
			
			
			
			if ("isShowDeliveryAbnormalLabels" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->isShowDeliveryAbnormalLabels);
				
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
		
		if($this->areaId !== null) {
			
			$xfer += $output->writeFieldBegin('areaId');
			$xfer += $output->writeString($this->areaId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->timestamp !== null) {
			
			$xfer += $output->writeFieldBegin('timestamp');
			$xfer += $output->writeString($this->timestamp);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vopChannelId !== null) {
			
			$xfer += $output->writeFieldBegin('vopChannelId');
			$xfer += $output->writeString($this->vopChannelId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userNumber !== null) {
			
			$xfer += $output->writeFieldBegin('userNumber');
			$xfer += $output->writeString($this->userNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('page');
		$xfer += $output->writeI32($this->page);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pageSize');
		$xfer += $output->writeI32($this->pageSize);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->orderSnList !== null) {
			
			$xfer += $output->writeFieldBegin('orderSnList');
			$xfer += $output->writeString($this->orderSnList);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isShowCommission !== null) {
			
			$xfer += $output->writeFieldBegin('isShowCommission');
			$xfer += $output->writeBool($this->isShowCommission);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isShowDeliveryAbnormalLabels !== null) {
			
			$xfer += $output->writeFieldBegin('isShowDeliveryAbnormalLabels');
			$xfer += $output->writeBool($this->isShowDeliveryAbnormalLabels);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>