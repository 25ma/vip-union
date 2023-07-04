<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\adp\api\open\service;

class GoodsInfoResponseV2 {
	
	static $_TSPEC;
	public $goodsInfoList = null;
	public $lastPage = null;
	public $nextPageOffset = null;
	public $batchNo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'goodsInfoList'
			),
			2 => array(
			'var' => 'lastPage'
			),
			3 => array(
			'var' => 'nextPageOffset'
			),
			4 => array(
			'var' => 'batchNo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['goodsInfoList'])){
				
				$this->goodsInfoList = $vals['goodsInfoList'];
			}
			
			
			if (isset($vals['lastPage'])){
				
				$this->lastPage = $vals['lastPage'];
			}
			
			
			if (isset($vals['nextPageOffset'])){
				
				$this->nextPageOffset = $vals['nextPageOffset'];
			}
			
			
			if (isset($vals['batchNo'])){
				
				$this->batchNo = $vals['batchNo'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GoodsInfoResponseV2';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("goodsInfoList" == $schemeField){
				
				$needSkip = false;
				
				$this->goodsInfoList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\adp\api\open\service\GoodsInfo();
						$elem0->read($input);
						
						$this->goodsInfoList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("lastPage" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->lastPage);
				
			}
			
			
			
			
			if ("nextPageOffset" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->nextPageOffset); 
				
			}
			
			
			
			
			if ("batchNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->batchNo);
				
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
		
		if($this->goodsInfoList !== null) {
			
			$xfer += $output->writeFieldBegin('goodsInfoList');
			
			if (!is_array($this->goodsInfoList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->goodsInfoList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lastPage !== null) {
			
			$xfer += $output->writeFieldBegin('lastPage');
			$xfer += $output->writeBool($this->lastPage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->nextPageOffset !== null) {
			
			$xfer += $output->writeFieldBegin('nextPageOffset');
			$xfer += $output->writeI64($this->nextPageOffset);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->batchNo !== null) {
			
			$xfer += $output->writeFieldBegin('batchNo');
			$xfer += $output->writeString($this->batchNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>