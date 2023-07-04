<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\cc\bulkbuying\service;

class PurchaseStopOrderResp {
	
	static $_TSPEC;
	public $orderInfoList = null;
	public $totalCnt = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderInfoList'
			),
			2 => array(
			'var' => 'totalCnt'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderInfoList'])){
				
				$this->orderInfoList = $vals['orderInfoList'];
			}
			
			
			if (isset($vals['totalCnt'])){
				
				$this->totalCnt = $vals['totalCnt'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PurchaseStopOrderResp';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("orderInfoList" == $schemeField){
				
				$needSkip = false;
				
				$this->orderInfoList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\xstore\cc\bulkbuying\service\PurchaseStopOrderInfo();
						$elem0->read($input);
						
						$this->orderInfoList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("totalCnt" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->totalCnt); 
				
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
		
		if($this->orderInfoList !== null) {
			
			$xfer += $output->writeFieldBegin('orderInfoList');
			
			if (!is_array($this->orderInfoList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->orderInfoList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totalCnt !== null) {
			
			$xfer += $output->writeFieldBegin('totalCnt');
			$xfer += $output->writeI32($this->totalCnt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>