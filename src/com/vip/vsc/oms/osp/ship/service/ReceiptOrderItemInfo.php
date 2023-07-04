<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vsc\oms\osp\ship\service;

class ReceiptOrderItemInfo {
	
	static $_TSPEC;
	public $itemId = null;
	public $itemCode = null;
	public $realReceiveQty = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'itemId'
			),
			2 => array(
			'var' => 'itemCode'
			),
			3 => array(
			'var' => 'realReceiveQty'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['itemId'])){
				
				$this->itemId = $vals['itemId'];
			}
			
			
			if (isset($vals['itemCode'])){
				
				$this->itemCode = $vals['itemCode'];
			}
			
			
			if (isset($vals['realReceiveQty'])){
				
				$this->realReceiveQty = $vals['realReceiveQty'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReceiptOrderItemInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("itemId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->itemId); 
				
			}
			
			
			
			
			if ("itemCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->itemCode);
				
			}
			
			
			
			
			if ("realReceiveQty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->realReceiveQty); 
				
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
		
		$xfer += $output->writeFieldBegin('itemId');
		$xfer += $output->writeI64($this->itemId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('itemCode');
		$xfer += $output->writeString($this->itemCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('realReceiveQty');
		$xfer += $output->writeI32($this->realReceiveQty);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>