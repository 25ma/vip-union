<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\deliveryorder\service;

class TmsCarrierTrackResponse {
	
	static $_TSPEC;
	public $version = null;
	public $responseTime = null;
	public $custCode = null;
	public $sysResponseCode = null;
	public $sysResponseMsg = null;
	public $results = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'version'
			),
			2 => array(
			'var' => 'responseTime'
			),
			3 => array(
			'var' => 'custCode'
			),
			4 => array(
			'var' => 'sysResponseCode'
			),
			5 => array(
			'var' => 'sysResponseMsg'
			),
			6 => array(
			'var' => 'results'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['version'])){
				
				$this->version = $vals['version'];
			}
			
			
			if (isset($vals['responseTime'])){
				
				$this->responseTime = $vals['responseTime'];
			}
			
			
			if (isset($vals['custCode'])){
				
				$this->custCode = $vals['custCode'];
			}
			
			
			if (isset($vals['sysResponseCode'])){
				
				$this->sysResponseCode = $vals['sysResponseCode'];
			}
			
			
			if (isset($vals['sysResponseMsg'])){
				
				$this->sysResponseMsg = $vals['sysResponseMsg'];
			}
			
			
			if (isset($vals['results'])){
				
				$this->results = $vals['results'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TmsCarrierTrackResponse';
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
			
			
			
			
			if ("responseTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->responseTime);
				
			}
			
			
			
			
			if ("custCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->custCode);
				
			}
			
			
			
			
			if ("sysResponseCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sysResponseCode);
				
			}
			
			
			
			
			if ("sysResponseMsg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sysResponseMsg);
				
			}
			
			
			
			
			if ("results" == $schemeField){
				
				$needSkip = false;
				
				$this->results = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\top\deliveryorder\service\TmsCarrierTrackResult();
						$elem0->read($input);
						
						$this->results[$_size0++] = $elem0;
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
		
		
		if($this->responseTime !== null) {
			
			$xfer += $output->writeFieldBegin('responseTime');
			$xfer += $output->writeString($this->responseTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->custCode !== null) {
			
			$xfer += $output->writeFieldBegin('custCode');
			$xfer += $output->writeString($this->custCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sysResponseCode !== null) {
			
			$xfer += $output->writeFieldBegin('sysResponseCode');
			$xfer += $output->writeString($this->sysResponseCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sysResponseMsg !== null) {
			
			$xfer += $output->writeFieldBegin('sysResponseMsg');
			$xfer += $output->writeString($this->sysResponseMsg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->results !== null) {
			
			$xfer += $output->writeFieldBegin('results');
			
			if (!is_array($this->results)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->results as $iter0){
				
				
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