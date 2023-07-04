<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\xstore\cc\bulkbuying\api;

class PoRefundPlanItem {
	
	static $_TSPEC;
	public $purchaseNo = null;
	public $barcode = null;
	public $planRefundQty = null;
	public $holdQty = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'purchaseNo'
			),
			2 => array(
			'var' => 'barcode'
			),
			3 => array(
			'var' => 'planRefundQty'
			),
			4 => array(
			'var' => 'holdQty'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['purchaseNo'])){
				
				$this->purchaseNo = $vals['purchaseNo'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['planRefundQty'])){
				
				$this->planRefundQty = $vals['planRefundQty'];
			}
			
			
			if (isset($vals['holdQty'])){
				
				$this->holdQty = $vals['holdQty'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PoRefundPlanItem';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("purchaseNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchaseNo);
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("planRefundQty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->planRefundQty); 
				
			}
			
			
			
			
			if ("holdQty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->holdQty); 
				
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
		
		$xfer += $output->writeFieldBegin('purchaseNo');
		$xfer += $output->writeString($this->purchaseNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('barcode');
		$xfer += $output->writeString($this->barcode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('planRefundQty');
		$xfer += $output->writeI32($this->planRefundQty);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('holdQty');
		$xfer += $output->writeI32($this->holdQty);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>