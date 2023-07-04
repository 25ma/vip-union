<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tpc\api\model;

class ArrivalTimeRequest {
	
	static $_TSPEC;
	public $transaction_id = null;
	public $transport_no = null;
	public $estimated_arrival_time = null;
	public $node_type = null;
	public $create_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transaction_id'
			),
			2 => array(
			'var' => 'transport_no'
			),
			3 => array(
			'var' => 'estimated_arrival_time'
			),
			4 => array(
			'var' => 'node_type'
			),
			5 => array(
			'var' => 'create_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transaction_id'])){
				
				$this->transaction_id = $vals['transaction_id'];
			}
			
			
			if (isset($vals['transport_no'])){
				
				$this->transport_no = $vals['transport_no'];
			}
			
			
			if (isset($vals['estimated_arrival_time'])){
				
				$this->estimated_arrival_time = $vals['estimated_arrival_time'];
			}
			
			
			if (isset($vals['node_type'])){
				
				$this->node_type = $vals['node_type'];
			}
			
			
			if (isset($vals['create_time'])){
				
				$this->create_time = $vals['create_time'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ArrivalTimeRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("transaction_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transaction_id);
				
			}
			
			
			
			
			if ("transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_no);
				
			}
			
			
			
			
			if ("estimated_arrival_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->estimated_arrival_time);
				
			}
			
			
			
			
			if ("node_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->node_type);
				
			}
			
			
			
			
			if ("create_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->create_time);
				
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
		
		$xfer += $output->writeFieldBegin('transaction_id');
		$xfer += $output->writeString($this->transaction_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('transport_no');
		$xfer += $output->writeString($this->transport_no);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->estimated_arrival_time !== null) {
			
			$xfer += $output->writeFieldBegin('estimated_arrival_time');
			$xfer += $output->writeString($this->estimated_arrival_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('node_type');
		$xfer += $output->writeString($this->node_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('create_time');
		$xfer += $output->writeString($this->create_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>