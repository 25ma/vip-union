<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\hcscm\cis\service;

class SoOperateInfo {
	
	static $_TSPEC;
	public $soNo = null;
	public $sku = null;
	public $qty = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'soNo'
			),
			2 => array(
			'var' => 'sku'
			),
			3 => array(
			'var' => 'qty'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['soNo'])){
				
				$this->soNo = $vals['soNo'];
			}
			
			
			if (isset($vals['sku'])){
				
				$this->sku = $vals['sku'];
			}
			
			
			if (isset($vals['qty'])){
				
				$this->qty = $vals['qty'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SoOperateInfo';
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
			
			
			
			
			if ("sku" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sku);
				
			}
			
			
			
			
			if ("qty" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->qty); 
				
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
		
		$xfer += $output->writeFieldBegin('sku');
		$xfer += $output->writeString($this->sku);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('qty');
		$xfer += $output->writeI64($this->qty);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>