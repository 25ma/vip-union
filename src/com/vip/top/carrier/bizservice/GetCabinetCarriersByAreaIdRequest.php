<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\carrier\bizservice;

class GetCabinetCarriersByAreaIdRequest {
	
	static $_TSPEC;
	public $tmsRequestHeader = null;
	public $areaId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tmsRequestHeader'
			),
			2 => array(
			'var' => 'areaId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tmsRequestHeader'])){
				
				$this->tmsRequestHeader = $vals['tmsRequestHeader'];
			}
			
			
			if (isset($vals['areaId'])){
				
				$this->areaId = $vals['areaId'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetCabinetCarriersByAreaIdRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("tmsRequestHeader" == $schemeField){
				
				$needSkip = false;
				
				$this->tmsRequestHeader = new \com\vip\top\carrier\service\TmsRequestHeader();
				$this->tmsRequestHeader->read($input);
				
			}
			
			
			
			
			if ("areaId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->areaId);
				
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
		
		$xfer += $output->writeFieldBegin('tmsRequestHeader');
		
		if (!is_object($this->tmsRequestHeader)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->tmsRequestHeader->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('areaId');
		$xfer += $output->writeString($this->areaId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>