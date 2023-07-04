<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\app\rbp\fin\service;

class RbpFnExpenseInfImportRequest {
	
	static $_TSPEC;
	public $batchNo = null;
	public $companyCode = null;
	public $mallNo = null;
	public $createdBy = null;
	public $remark = null;
	public $details = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'batchNo'
			),
			2 => array(
			'var' => 'companyCode'
			),
			3 => array(
			'var' => 'mallNo'
			),
			4 => array(
			'var' => 'createdBy'
			),
			5 => array(
			'var' => 'remark'
			),
			6 => array(
			'var' => 'details'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['batchNo'])){
				
				$this->batchNo = $vals['batchNo'];
			}
			
			
			if (isset($vals['companyCode'])){
				
				$this->companyCode = $vals['companyCode'];
			}
			
			
			if (isset($vals['mallNo'])){
				
				$this->mallNo = $vals['mallNo'];
			}
			
			
			if (isset($vals['createdBy'])){
				
				$this->createdBy = $vals['createdBy'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['details'])){
				
				$this->details = $vals['details'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'RbpFnExpenseInfImportRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("batchNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->batchNo);
				
			}
			
			
			
			
			if ("companyCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->companyCode);
				
			}
			
			
			
			
			if ("mallNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mallNo);
				
			}
			
			
			
			
			if ("createdBy" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createdBy);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("details" == $schemeField){
				
				$needSkip = false;
				
				$this->details = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\fcs\app\rbp\fin\service\RbpFnExpenseInfImportDetailRequest();
						$elem0->read($input);
						
						$this->details[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		$xfer += $output->writeFieldBegin('batchNo');
		$xfer += $output->writeString($this->batchNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('companyCode');
		$xfer += $output->writeString($this->companyCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('mallNo');
		$xfer += $output->writeString($this->mallNo);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->createdBy !== null) {
			
			$xfer += $output->writeFieldBegin('createdBy');
			$xfer += $output->writeString($this->createdBy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('details');
		
		if (!is_array($this->details)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->details as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>