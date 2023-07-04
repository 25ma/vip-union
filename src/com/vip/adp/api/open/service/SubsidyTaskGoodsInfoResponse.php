<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\adp\api\open\service;

class SubsidyTaskGoodsInfoResponse {
	
	static $_TSPEC;
	public $goodsInfoList = null;
	public $page = null;
	public $pageSize = null;
	public $taskBeginTime = null;
	public $taskEndTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'goodsInfoList'
			),
			2 => array(
			'var' => 'page'
			),
			3 => array(
			'var' => 'pageSize'
			),
			4 => array(
			'var' => 'taskBeginTime'
			),
			5 => array(
			'var' => 'taskEndTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['goodsInfoList'])){
				
				$this->goodsInfoList = $vals['goodsInfoList'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
			if (isset($vals['taskBeginTime'])){
				
				$this->taskBeginTime = $vals['taskBeginTime'];
			}
			
			
			if (isset($vals['taskEndTime'])){
				
				$this->taskEndTime = $vals['taskEndTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SubsidyTaskGoodsInfoResponse';
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
						
						$elem0 = new \com\vip\adp\common\service\tasksystem\api\ChannelSubsidyGoodsInfo();
						$elem0->read($input);
						
						$this->goodsInfoList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("page" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page); 
				
			}
			
			
			
			
			if ("pageSize" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->pageSize); 
				
			}
			
			
			
			
			if ("taskBeginTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->taskBeginTime); 
				
			}
			
			
			
			
			if ("taskEndTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->taskEndTime); 
				
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
		
		
		if($this->page !== null) {
			
			$xfer += $output->writeFieldBegin('page');
			$xfer += $output->writeI32($this->page);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pageSize !== null) {
			
			$xfer += $output->writeFieldBegin('pageSize');
			$xfer += $output->writeI32($this->pageSize);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->taskBeginTime !== null) {
			
			$xfer += $output->writeFieldBegin('taskBeginTime');
			$xfer += $output->writeI64($this->taskBeginTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->taskEndTime !== null) {
			
			$xfer += $output->writeFieldBegin('taskEndTime');
			$xfer += $output->writeI64($this->taskEndTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>