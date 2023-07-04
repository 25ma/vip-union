<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\deliveryorder\service;

class TmsCarrierTrackRequest {
	
	static $_TSPEC;
	public $version = null;
	public $requestTime = null;
	public $custCode = null;
	public $traces = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'version'
			),
			2 => array(
			'var' => 'requestTime'
			),
			3 => array(
			'var' => 'custCode'
			),
			4 => array(
			'var' => 'traces'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['version'])){
				
				$this->version = $vals['version'];
			}
			
			
			if (isset($vals['requestTime'])){
				
				$this->requestTime = $vals['requestTime'];
			}
			
			
			if (isset($vals['custCode'])){
				
				$this->custCode = $vals['custCode'];
			}
			
			
			if (isset($vals['traces'])){
				
				$this->traces = $vals['traces'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TmsCarrierTrackRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("version" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->version);
				
			}
			
			
			
			
			if ("requestTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->requestTime);
				
			}
			
			
			
			
			if ("custCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->custCode);
				
			}
			
			
			
			
			if ("traces" == $schemeField){
				
				$needSkip = false;
				
				$this->traces = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\top\deliveryorder\service\TmsCarrierTrackInfo();
						$elem0->read($input);
						
						$this->traces[$_size0++] = $elem0;
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
		
		if($this->version !== null) {
			
			$xfer += $output->writeFieldBegin('version');
			$xfer += $output->writeString($this->version);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->requestTime !== null) {
			
			$xfer += $output->writeFieldBegin('requestTime');
			$xfer += $output->writeString($this->requestTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->custCode !== null) {
			
			$xfer += $output->writeFieldBegin('custCode');
			$xfer += $output->writeString($this->custCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->traces !== null) {
			
			$xfer += $output->writeFieldBegin('traces');
			
			if (!is_array($this->traces)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->traces as $iter0){
				
				
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