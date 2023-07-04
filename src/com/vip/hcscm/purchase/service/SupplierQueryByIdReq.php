<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\hcscm\purchase\service;

class SupplierQueryByIdReq {
	
	static $_TSPEC;
	public $id = null;
	public $chooseDecrypt = null;
	public $updater = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'chooseDecrypt'
			),
			3 => array(
			'var' => 'updater'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['chooseDecrypt'])){
				
				$this->chooseDecrypt = $vals['chooseDecrypt'];
			}
			
			
			if (isset($vals['updater'])){
				
				$this->updater = $vals['updater'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SupplierQueryByIdReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
			}
			
			
			
			
			if ("chooseDecrypt" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->chooseDecrypt);
				
			}
			
			
			
			
			if ("updater" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->updater);
				
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
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->chooseDecrypt !== null) {
			
			$xfer += $output->writeFieldBegin('chooseDecrypt');
			$xfer += $output->writeBool($this->chooseDecrypt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updater !== null) {
			
			$xfer += $output->writeFieldBegin('updater');
			$xfer += $output->writeString($this->updater);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>