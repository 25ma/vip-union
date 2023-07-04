<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tpc\api\model;

class CarrierDeliverWarehouseDoorModel {
	
	static $_TSPEC;
	public $locationCode = null;
	public $carrierCode = null;
	public $transportNo = null;
	public $scanType = null;
	public $dataType = null;
	public $operationTime = null;
	public $orderSn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'locationCode'
			),
			2 => array(
			'var' => 'carrierCode'
			),
			3 => array(
			'var' => 'transportNo'
			),
			4 => array(
			'var' => 'scanType'
			),
			5 => array(
			'var' => 'dataType'
			),
			6 => array(
			'var' => 'operationTime'
			),
			7 => array(
			'var' => 'orderSn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['locationCode'])){
				
				$this->locationCode = $vals['locationCode'];
			}
			
			
			if (isset($vals['carrierCode'])){
				
				$this->carrierCode = $vals['carrierCode'];
			}
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['scanType'])){
				
				$this->scanType = $vals['scanType'];
			}
			
			
			if (isset($vals['dataType'])){
				
				$this->dataType = $vals['dataType'];
			}
			
			
			if (isset($vals['operationTime'])){
				
				$this->operationTime = $vals['operationTime'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CarrierDeliverWarehouseDoorModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("locationCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->locationCode);
				
			}
			
			
			
			
			if ("carrierCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrierCode);
				
			}
			
			
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("scanType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->scanType); 
				
			}
			
			
			
			
			if ("dataType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->dataType); 
				
			}
			
			
			
			
			if ("operationTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->operationTime);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
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
		
		$xfer += $output->writeFieldBegin('locationCode');
		$xfer += $output->writeString($this->locationCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('carrierCode');
		$xfer += $output->writeString($this->carrierCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('transportNo');
		$xfer += $output->writeString($this->transportNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('scanType');
		$xfer += $output->writeI32($this->scanType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('dataType');
		$xfer += $output->writeI32($this->dataType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('operationTime');
		$xfer += $output->writeI64($this->operationTime);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>