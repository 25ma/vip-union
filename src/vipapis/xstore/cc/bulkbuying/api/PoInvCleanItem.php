<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\xstore\cc\bulkbuying\api;

class PoInvCleanItem {
	
	static $_TSPEC;
	public $txid = null;
	public $purchaseNo = null;
	public $barcode = null;
	public $subDisabilityLevel = null;
	public $sellingStatus = null;
	public $cleanQty = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'txid'
			),
			2 => array(
			'var' => 'purchaseNo'
			),
			3 => array(
			'var' => 'barcode'
			),
			4 => array(
			'var' => 'subDisabilityLevel'
			),
			5 => array(
			'var' => 'sellingStatus'
			),
			6 => array(
			'var' => 'cleanQty'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['txid'])){
				
				$this->txid = $vals['txid'];
			}
			
			
			if (isset($vals['purchaseNo'])){
				
				$this->purchaseNo = $vals['purchaseNo'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['subDisabilityLevel'])){
				
				$this->subDisabilityLevel = $vals['subDisabilityLevel'];
			}
			
			
			if (isset($vals['sellingStatus'])){
				
				$this->sellingStatus = $vals['sellingStatus'];
			}
			
			
			if (isset($vals['cleanQty'])){
				
				$this->cleanQty = $vals['cleanQty'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PoInvCleanItem';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("txid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->txid);
				
			}
			
			
			
			
			if ("purchaseNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchaseNo);
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("subDisabilityLevel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->subDisabilityLevel);
				
			}
			
			
			
			
			if ("sellingStatus" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->sellingStatus); 
				
			}
			
			
			
			
			if ("cleanQty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->cleanQty); 
				
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
		
		$xfer += $output->writeFieldBegin('txid');
		$xfer += $output->writeString($this->txid);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('purchaseNo');
		$xfer += $output->writeString($this->purchaseNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('barcode');
		$xfer += $output->writeString($this->barcode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('subDisabilityLevel');
		$xfer += $output->writeString($this->subDisabilityLevel);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sellingStatus');
		$xfer += $output->writeByte($this->sellingStatus);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('cleanQty');
		$xfer += $output->writeI32($this->cleanQty);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>