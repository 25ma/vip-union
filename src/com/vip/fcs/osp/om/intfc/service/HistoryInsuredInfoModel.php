<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\om\intfc\service;

class HistoryInsuredInfoModel {
	
	static $_TSPEC;
	public $afterSaleSn = null;
	public $applyId = null;
	public $originalApplyTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'afterSaleSn'
			),
			2 => array(
			'var' => 'applyId'
			),
			3 => array(
			'var' => 'originalApplyTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['afterSaleSn'])){
				
				$this->afterSaleSn = $vals['afterSaleSn'];
			}
			
			
			if (isset($vals['applyId'])){
				
				$this->applyId = $vals['applyId'];
			}
			
			
			if (isset($vals['originalApplyTime'])){
				
				$this->originalApplyTime = $vals['originalApplyTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'HistoryInsuredInfoModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("afterSaleSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->afterSaleSn);
				
			}
			
			
			
			
			if ("applyId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->applyId); 
				
			}
			
			
			
			
			if ("originalApplyTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->originalApplyTime); 
				
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
		
		if($this->afterSaleSn !== null) {
			
			$xfer += $output->writeFieldBegin('afterSaleSn');
			$xfer += $output->writeString($this->afterSaleSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->applyId !== null) {
			
			$xfer += $output->writeFieldBegin('applyId');
			$xfer += $output->writeI64($this->applyId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->originalApplyTime !== null) {
			
			$xfer += $output->writeFieldBegin('originalApplyTime');
			$xfer += $output->writeI64($this->originalApplyTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>