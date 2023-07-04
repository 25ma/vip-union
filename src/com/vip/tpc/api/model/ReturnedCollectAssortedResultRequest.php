<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tpc\api\model;

class ReturnedCollectAssortedResultRequest {
	
	static $_TSPEC;
	public $header = null;
	public $carrierCode = null;
	public $cageSn = null;
	public $returnWarehouseCode = null;
	public $cageName = null;
	public $cageTime = null;
	public $cagePackageList = null;
	public $transactionId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'carrierCode'
			),
			3 => array(
			'var' => 'cageSn'
			),
			4 => array(
			'var' => 'returnWarehouseCode'
			),
			5 => array(
			'var' => 'cageName'
			),
			6 => array(
			'var' => 'cageTime'
			),
			7 => array(
			'var' => 'cagePackageList'
			),
			8 => array(
			'var' => 'transactionId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['carrierCode'])){
				
				$this->carrierCode = $vals['carrierCode'];
			}
			
			
			if (isset($vals['cageSn'])){
				
				$this->cageSn = $vals['cageSn'];
			}
			
			
			if (isset($vals['returnWarehouseCode'])){
				
				$this->returnWarehouseCode = $vals['returnWarehouseCode'];
			}
			
			
			if (isset($vals['cageName'])){
				
				$this->cageName = $vals['cageName'];
			}
			
			
			if (isset($vals['cageTime'])){
				
				$this->cageTime = $vals['cageTime'];
			}
			
			
			if (isset($vals['cagePackageList'])){
				
				$this->cagePackageList = $vals['cagePackageList'];
			}
			
			
			if (isset($vals['transactionId'])){
				
				$this->transactionId = $vals['transactionId'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReturnedCollectAssortedResultRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("header" == $schemeField){
				
				$needSkip = false;
				
				$this->header = new \com\vip\tpc\api\model\common\TpcRequestHeader();
				$this->header->read($input);
				
			}
			
			
			
			
			if ("carrierCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrierCode);
				
			}
			
			
			
			
			if ("cageSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cageSn);
				
			}
			
			
			
			
			if ("returnWarehouseCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnWarehouseCode);
				
			}
			
			
			
			
			if ("cageName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cageName);
				
			}
			
			
			
			
			if ("cageTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->cageTime); 
				
			}
			
			
			
			
			if ("cagePackageList" == $schemeField){
				
				$needSkip = false;
				
				$this->cagePackageList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\tpc\api\model\CagePackage();
						$elem1->read($input);
						
						$this->cagePackageList[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("transactionId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transactionId);
				
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
		
		$xfer += $output->writeFieldBegin('header');
		
		if (!is_object($this->header)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->header->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('carrierCode');
		$xfer += $output->writeString($this->carrierCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('cageSn');
		$xfer += $output->writeString($this->cageSn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('returnWarehouseCode');
		$xfer += $output->writeString($this->returnWarehouseCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('cageName');
		$xfer += $output->writeString($this->cageName);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('cageTime');
		$xfer += $output->writeI64($this->cageTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('cagePackageList');
		
		if (!is_array($this->cagePackageList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->cagePackageList as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('transactionId');
		$xfer += $output->writeString($this->transactionId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>