<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\workflow\service;

class ConfirmCustomizeStatus {
	
	static $_TSPEC;
	public $order_sn = null;
	public $good_sn = null;
	public $customize_status = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_sn'
			),
			2 => array(
			'var' => 'good_sn'
			),
			3 => array(
			'var' => 'customize_status'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['good_sn'])){
				
				$this->good_sn = $vals['good_sn'];
			}
			
			
			if (isset($vals['customize_status'])){
				
				$this->customize_status = $vals['customize_status'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ConfirmCustomizeStatus';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sn);
				
			}
			
			
			
			
			if ("good_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->good_sn);
				
			}
			
			
			
			
			if ("customize_status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->customize_status); 
				
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
		
		$xfer += $output->writeFieldBegin('order_sn');
		$xfer += $output->writeString($this->order_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('good_sn');
		$xfer += $output->writeString($this->good_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('customize_status');
		$xfer += $output->writeI32($this->customize_status);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>