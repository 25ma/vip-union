<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\hcscm\cis\service;

class SoReturnInfoParam {
	
	static $_TSPEC;
	public $soNo = null;
	public $returnNo = null;
	public $warehouseCode = null;
	public $createTime = null;
	public $remark = null;
	public $detailList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'soNo'
			),
			2 => array(
			'var' => 'returnNo'
			),
			3 => array(
			'var' => 'warehouseCode'
			),
			4 => array(
			'var' => 'createTime'
			),
			5 => array(
			'var' => 'remark'
			),
			6 => array(
			'var' => 'detailList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['soNo'])){
				
				$this->soNo = $vals['soNo'];
			}
			
			
			if (isset($vals['returnNo'])){
				
				$this->returnNo = $vals['returnNo'];
			}
			
			
			if (isset($vals['warehouseCode'])){
				
				$this->warehouseCode = $vals['warehouseCode'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['detailList'])){
				
				$this->detailList = $vals['detailList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SoReturnInfoParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("soNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->soNo);
				
			}
			
			
			
			
			if ("returnNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnNo);
				
			}
			
			
			
			
			if ("warehouseCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseCode);
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createTime);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("detailList" == $schemeField){
				
				$needSkip = false;
				
				$this->detailList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\hcscm\cis\service\SoOperateInfo();
						$elem0->read($input);
						
						$this->detailList[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('soNo');
		$xfer += $output->writeString($this->soNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('returnNo');
		$xfer += $output->writeString($this->returnNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouseCode');
		$xfer += $output->writeString($this->warehouseCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('createTime');
		$xfer += $output->writeString($this->createTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('remark');
		$xfer += $output->writeString($this->remark);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('detailList');
		
		if (!is_array($this->detailList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->detailList as $iter0){
			
			
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