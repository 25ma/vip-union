<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tms\chollima\service\vop;

class TmsRequestHeader {
	
	static $_TSPEC;
	public $caller = null;
	public $request_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'caller'
			),
			2 => array(
			'var' => 'request_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['caller'])){
				
				$this->caller = $vals['caller'];
			}
			
			
			if (isset($vals['request_time'])){
				
				$this->request_time = $vals['request_time'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TmsRequestHeader';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("caller" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->caller);
				
			}
			
			
			
			
			if ("request_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->request_time);
				
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
		
		$xfer += $output->writeFieldBegin('caller');
		$xfer += $output->writeString($this->caller);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('request_time');
		$xfer += $output->writeI64($this->request_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>