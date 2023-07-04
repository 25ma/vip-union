<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\xstore\cc\bulkbuying\api;

class UpdatePoInvCleanQtyReq {
	
	static $_TSPEC;
	public $replaceNo = null;
	public $toPo = null;
	public $warehouseCode = null;
	public $totalLineQty = null;
	public $receiptNo = null;
	public $items = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'replaceNo'
			),
			2 => array(
			'var' => 'toPo'
			),
			3 => array(
			'var' => 'warehouseCode'
			),
			4 => array(
			'var' => 'totalLineQty'
			),
			5 => array(
			'var' => 'receiptNo'
			),
			6 => array(
			'var' => 'items'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['replaceNo'])){
				
				$this->replaceNo = $vals['replaceNo'];
			}
			
			
			if (isset($vals['toPo'])){
				
				$this->toPo = $vals['toPo'];
			}
			
			
			if (isset($vals['warehouseCode'])){
				
				$this->warehouseCode = $vals['warehouseCode'];
			}
			
			
			if (isset($vals['totalLineQty'])){
				
				$this->totalLineQty = $vals['totalLineQty'];
			}
			
			
			if (isset($vals['receiptNo'])){
				
				$this->receiptNo = $vals['receiptNo'];
			}
			
			
			if (isset($vals['items'])){
				
				$this->items = $vals['items'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'UpdatePoInvCleanQtyReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("replaceNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->replaceNo);
				
			}
			
			
			
			
			if ("toPo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->toPo);
				
			}
			
			
			
			
			if ("warehouseCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseCode);
				
			}
			
			
			
			
			if ("totalLineQty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->totalLineQty); 
				
			}
			
			
			
			
			if ("receiptNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiptNo);
				
			}
			
			
			
			
			if ("items" == $schemeField){
				
				$needSkip = false;
				
				$this->items = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\xstore\cc\bulkbuying\api\PoInvCleanItem();
						$elem0->read($input);
						
						$this->items[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('replaceNo');
		$xfer += $output->writeString($this->replaceNo);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->toPo !== null) {
			
			$xfer += $output->writeFieldBegin('toPo');
			$xfer += $output->writeString($this->toPo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('warehouseCode');
		$xfer += $output->writeString($this->warehouseCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('totalLineQty');
		$xfer += $output->writeI32($this->totalLineQty);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('receiptNo');
		$xfer += $output->writeString($this->receiptNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('items');
		
		if (!is_array($this->items)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->items as $iter0){
			
			
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