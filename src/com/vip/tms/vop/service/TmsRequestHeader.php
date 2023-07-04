<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tms\vop\service;

class TmsRequestHeader {
	
	static $_TSPEC;
	public $caller = null;
	public $request_time = null;
	public $order_channel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'caller'
			),
			2 => array(
			'var' => 'request_time'
			),
			3 => array(
			'var' => 'order_channel'
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
			
			
			if (isset($vals['order_channel'])){
				
				$this->order_channel = $vals['order_channel'];
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
			
			
			
			
			if ("order_channel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_channel);
				
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
		
		if($this->order_channel !== null) {
			
			$xfer += $output->writeFieldBegin('order_channel');
			$xfer += $output->writeString($this->order_channel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>