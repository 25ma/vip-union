<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\hcscm\cis\service;

class GetSeekResultPoResp {
	
	static $_TSPEC;
	public $poNo = null;
	public $poInTransitQty = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'poNo'
			),
			2 => array(
			'var' => 'poInTransitQty'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['poNo'])){
				
				$this->poNo = $vals['poNo'];
			}
			
			
			if (isset($vals['poInTransitQty'])){
				
				$this->poInTransitQty = $vals['poInTransitQty'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetSeekResultPoResp';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("poNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poNo);
				
			}
			
			
			
			
			if ("poInTransitQty" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->poInTransitQty); 
				
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
		
		if($this->poNo !== null) {
			
			$xfer += $output->writeFieldBegin('poNo');
			$xfer += $output->writeString($this->poNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poInTransitQty !== null) {
			
			$xfer += $output->writeFieldBegin('poInTransitQty');
			$xfer += $output->writeI64($this->poInTransitQty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>