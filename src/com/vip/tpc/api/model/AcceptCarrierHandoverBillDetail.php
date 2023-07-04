<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tpc\api\model;

class AcceptCarrierHandoverBillDetail {
	
	static $_TSPEC;
	public $consignment_no = null;
	public $confirm_box_count = null;
	public $confirm_charged_weight = null;
	public $confirm_charged_volume = null;
	public $scanned_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'consignment_no'
			),
			2 => array(
			'var' => 'confirm_box_count'
			),
			3 => array(
			'var' => 'confirm_charged_weight'
			),
			4 => array(
			'var' => 'confirm_charged_volume'
			),
			5 => array(
			'var' => 'scanned_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['consignment_no'])){
				
				$this->consignment_no = $vals['consignment_no'];
			}
			
			
			if (isset($vals['confirm_box_count'])){
				
				$this->confirm_box_count = $vals['confirm_box_count'];
			}
			
			
			if (isset($vals['confirm_charged_weight'])){
				
				$this->confirm_charged_weight = $vals['confirm_charged_weight'];
			}
			
			
			if (isset($vals['confirm_charged_volume'])){
				
				$this->confirm_charged_volume = $vals['confirm_charged_volume'];
			}
			
			
			if (isset($vals['scanned_time'])){
				
				$this->scanned_time = $vals['scanned_time'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AcceptCarrierHandoverBillDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("consignment_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->consignment_no);
				
			}
			
			
			
			
			if ("confirm_box_count" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->confirm_box_count); 
				
			}
			
			
			
			
			if ("confirm_charged_weight" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->confirm_charged_weight);
				
			}
			
			
			
			
			if ("confirm_charged_volume" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->confirm_charged_volume);
				
			}
			
			
			
			
			if ("scanned_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->scanned_time);
				
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
		
		$xfer += $output->writeFieldBegin('consignment_no');
		$xfer += $output->writeString($this->consignment_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('confirm_box_count');
		$xfer += $output->writeI32($this->confirm_box_count);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('confirm_charged_weight');
		$xfer += $output->writeDouble($this->confirm_charged_weight);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('confirm_charged_volume');
		$xfer += $output->writeDouble($this->confirm_charged_volume);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('scanned_time');
		$xfer += $output->writeI64($this->scanned_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>