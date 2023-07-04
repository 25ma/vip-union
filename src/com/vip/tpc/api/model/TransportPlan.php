<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tpc\api\model;

class TransportPlan {
	
	static $_TSPEC;
	public $transport_plan_no = null;
	public $actual_box_qty = null;
	public $actual_volume = null;
	public $actual_weight = null;
	public $scanned_time = null;
	public $boxes = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transport_plan_no'
			),
			2 => array(
			'var' => 'actual_box_qty'
			),
			3 => array(
			'var' => 'actual_volume'
			),
			4 => array(
			'var' => 'actual_weight'
			),
			5 => array(
			'var' => 'scanned_time'
			),
			6 => array(
			'var' => 'boxes'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transport_plan_no'])){
				
				$this->transport_plan_no = $vals['transport_plan_no'];
			}
			
			
			if (isset($vals['actual_box_qty'])){
				
				$this->actual_box_qty = $vals['actual_box_qty'];
			}
			
			
			if (isset($vals['actual_volume'])){
				
				$this->actual_volume = $vals['actual_volume'];
			}
			
			
			if (isset($vals['actual_weight'])){
				
				$this->actual_weight = $vals['actual_weight'];
			}
			
			
			if (isset($vals['scanned_time'])){
				
				$this->scanned_time = $vals['scanned_time'];
			}
			
			
			if (isset($vals['boxes'])){
				
				$this->boxes = $vals['boxes'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TransportPlan';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("transport_plan_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_plan_no);
				
			}
			
			
			
			
			if ("actual_box_qty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->actual_box_qty); 
				
			}
			
			
			
			
			if ("actual_volume" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->actual_volume);
				
			}
			
			
			
			
			if ("actual_weight" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->actual_weight);
				
			}
			
			
			
			
			if ("scanned_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->scanned_time);
				
			}
			
			
			
			
			if ("boxes" == $schemeField){
				
				$needSkip = false;
				
				$this->boxes = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\tpc\api\model\LineTransportPlanBox();
						$elem0->read($input);
						
						$this->boxes[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('transport_plan_no');
		$xfer += $output->writeString($this->transport_plan_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('actual_box_qty');
		$xfer += $output->writeI32($this->actual_box_qty);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('actual_volume');
		$xfer += $output->writeDouble($this->actual_volume);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('actual_weight');
		$xfer += $output->writeDouble($this->actual_weight);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->scanned_time !== null) {
			
			$xfer += $output->writeFieldBegin('scanned_time');
			$xfer += $output->writeI64($this->scanned_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->boxes !== null) {
			
			$xfer += $output->writeFieldBegin('boxes');
			
			if (!is_array($this->boxes)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->boxes as $iter0){
				
				
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