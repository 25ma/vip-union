<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\vop;

class WpcReputationSummaryVo {
	
	static $_TSPEC;
	public $goodRate = null;
	public $sizeRightRate = null;
	public $totalCount = null;
	public $keyList = null;
	public $sizeSuitableKeyList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			12001 => array(
			'var' => 'goodRate'
			),
			12002 => array(
			'var' => 'sizeRightRate'
			),
			12003 => array(
			'var' => 'totalCount'
			),
			12004 => array(
			'var' => 'keyList'
			),
			12005 => array(
			'var' => 'sizeSuitableKeyList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['goodRate'])){
				
				$this->goodRate = $vals['goodRate'];
			}
			
			
			if (isset($vals['sizeRightRate'])){
				
				$this->sizeRightRate = $vals['sizeRightRate'];
			}
			
			
			if (isset($vals['totalCount'])){
				
				$this->totalCount = $vals['totalCount'];
			}
			
			
			if (isset($vals['keyList'])){
				
				$this->keyList = $vals['keyList'];
			}
			
			
			if (isset($vals['sizeSuitableKeyList'])){
				
				$this->sizeSuitableKeyList = $vals['sizeSuitableKeyList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcReputationSummaryVo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("goodRate" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->goodRate);
				
			}
			
			
			
			
			if ("sizeRightRate" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->sizeRightRate);
				
			}
			
			
			
			
			if ("totalCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->totalCount); 
				
			}
			
			
			
			
			if ("keyList" == $schemeField){
				
				$needSkip = false;
				
				$this->keyList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\wpc\ospservice\vop\WpcReputationKeyVo();
						$elem0->read($input);
						
						$this->keyList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("sizeSuitableKeyList" == $schemeField){
				
				$needSkip = false;
				
				$this->sizeSuitableKeyList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\wpc\ospservice\vop\WpcReputationKeyVo();
						$elem1->read($input);
						
						$this->sizeSuitableKeyList[$_size1++] = $elem1;
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
		
		if($this->goodRate !== null) {
			
			$xfer += $output->writeFieldBegin('goodRate');
			$xfer += $output->writeDouble($this->goodRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sizeRightRate !== null) {
			
			$xfer += $output->writeFieldBegin('sizeRightRate');
			$xfer += $output->writeDouble($this->sizeRightRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('totalCount');
		$xfer += $output->writeI32($this->totalCount);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->keyList !== null) {
			
			$xfer += $output->writeFieldBegin('keyList');
			
			if (!is_array($this->keyList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->keyList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sizeSuitableKeyList !== null) {
			
			$xfer += $output->writeFieldBegin('sizeSuitableKeyList');
			
			if (!is_array($this->sizeSuitableKeyList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->sizeSuitableKeyList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>