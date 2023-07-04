<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vsc\oms\osp\carrier\track\service;

class AcceptTrackResult {
	
	static $_TSPEC;
	public $transport_no = null;
	public $status = null;
	public $desc = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transport_no'
			),
			2 => array(
			'var' => 'status'
			),
			3 => array(
			'var' => 'desc'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transport_no'])){
				
				$this->transport_no = $vals['transport_no'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['desc'])){
				
				$this->desc = $vals['desc'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AcceptTrackResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_no);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->status); 
				
			}
			
			
			
			
			if ("desc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->desc);
				
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
		
		$xfer += $output->writeFieldBegin('transport_no');
		$xfer += $output->writeString($this->transport_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('status');
		$xfer += $output->writeI32($this->status);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->desc !== null) {
			
			$xfer += $output->writeFieldBegin('desc');
			$xfer += $output->writeString($this->desc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>