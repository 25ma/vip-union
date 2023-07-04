<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\ap\service;

class ItemSourceDetailRespItem {
	
	static $_TSPEC;
	public $code = null;
	public $msg = null;
	public $count = null;
	public $reqItem = null;
	public $detailList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'code'
			),
			2 => array(
			'var' => 'msg'
			),
			3 => array(
			'var' => 'count'
			),
			10 => array(
			'var' => 'reqItem'
			),
			20 => array(
			'var' => 'detailList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['code'])){
				
				$this->code = $vals['code'];
			}
			
			
			if (isset($vals['msg'])){
				
				$this->msg = $vals['msg'];
			}
			
			
			if (isset($vals['count'])){
				
				$this->count = $vals['count'];
			}
			
			
			if (isset($vals['reqItem'])){
				
				$this->reqItem = $vals['reqItem'];
			}
			
			
			if (isset($vals['detailList'])){
				
				$this->detailList = $vals['detailList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ItemSourceDetailRespItem';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("code" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->code); 
				
			}
			
			
			
			
			if ("msg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->msg);
				
			}
			
			
			
			
			if ("count" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->count); 
				
			}
			
			
			
			
			if ("reqItem" == $schemeField){
				
				$needSkip = false;
				
				$this->reqItem = new \com\vip\fcs\ap\service\ItemSourceDetailReqItem();
				$this->reqItem->read($input);
				
			}
			
			
			
			
			if ("detailList" == $schemeField){
				
				$needSkip = false;
				
				$this->detailList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\fcs\ap\service\ItemSourceDetailResp();
						$elem1->read($input);
						
						$this->detailList[$_size1++] = $elem1;
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
		
		if($this->code !== null) {
			
			$xfer += $output->writeFieldBegin('code');
			$xfer += $output->writeI32($this->code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->msg !== null) {
			
			$xfer += $output->writeFieldBegin('msg');
			$xfer += $output->writeString($this->msg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->count !== null) {
			
			$xfer += $output->writeFieldBegin('count');
			$xfer += $output->writeI64($this->count);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reqItem !== null) {
			
			$xfer += $output->writeFieldBegin('reqItem');
			
			if (!is_object($this->reqItem)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->reqItem->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->detailList !== null) {
			
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
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>