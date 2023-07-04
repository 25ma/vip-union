<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\purchase\schedules\service\query;

class BatchQueryPurchaseParam {
	
	static $_TSPEC;
	public $shopCodeList = null;
	public $system = null;
	public $retScheduleInfo = null;
	public $brandAdminUserEmail = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'shopCodeList'
			),
			2 => array(
			'var' => 'system'
			),
			3 => array(
			'var' => 'retScheduleInfo'
			),
			4 => array(
			'var' => 'brandAdminUserEmail'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['shopCodeList'])){
				
				$this->shopCodeList = $vals['shopCodeList'];
			}
			
			
			if (isset($vals['system'])){
				
				$this->system = $vals['system'];
			}
			
			
			if (isset($vals['retScheduleInfo'])){
				
				$this->retScheduleInfo = $vals['retScheduleInfo'];
			}
			
			
			if (isset($vals['brandAdminUserEmail'])){
				
				$this->brandAdminUserEmail = $vals['brandAdminUserEmail'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BatchQueryPurchaseParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("shopCodeList" == $schemeField){
				
				$needSkip = false;
				
				$this->shopCodeList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readI64($elem0); 
						
						$this->shopCodeList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("system" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->system);
				
			}
			
			
			
			
			if ("retScheduleInfo" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->retScheduleInfo);
				
			}
			
			
			
			
			if ("brandAdminUserEmail" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandAdminUserEmail);
				
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
		
		$xfer += $output->writeFieldBegin('shopCodeList');
		
		if (!is_array($this->shopCodeList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->shopCodeList as $iter0){
			
			$xfer += $output->writeI64($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('system');
		$xfer += $output->writeString($this->system);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->retScheduleInfo !== null) {
			
			$xfer += $output->writeFieldBegin('retScheduleInfo');
			$xfer += $output->writeBool($this->retScheduleInfo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandAdminUserEmail !== null) {
			
			$xfer += $output->writeFieldBegin('brandAdminUserEmail');
			$xfer += $output->writeString($this->brandAdminUserEmail);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>