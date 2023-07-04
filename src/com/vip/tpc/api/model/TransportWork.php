<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tpc\api\model;

class TransportWork {
	
	static $_TSPEC;
	public $loading_no = null;
	public $actual_total_weight = null;
	public $operator_user = null;
	public $extra_property = null;
	public $transport_plans = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'loading_no'
			),
			2 => array(
			'var' => 'actual_total_weight'
			),
			3 => array(
			'var' => 'operator_user'
			),
			4 => array(
			'var' => 'extra_property'
			),
			5 => array(
			'var' => 'transport_plans'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['loading_no'])){
				
				$this->loading_no = $vals['loading_no'];
			}
			
			
			if (isset($vals['actual_total_weight'])){
				
				$this->actual_total_weight = $vals['actual_total_weight'];
			}
			
			
			if (isset($vals['operator_user'])){
				
				$this->operator_user = $vals['operator_user'];
			}
			
			
			if (isset($vals['extra_property'])){
				
				$this->extra_property = $vals['extra_property'];
			}
			
			
			if (isset($vals['transport_plans'])){
				
				$this->transport_plans = $vals['transport_plans'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TransportWork';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("loading_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->loading_no);
				
			}
			
			
			
			
			if ("actual_total_weight" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->actual_total_weight);
				
			}
			
			
			
			
			if ("operator_user" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operator_user);
				
			}
			
			
			
			
			if ("extra_property" == $schemeField){
				
				$needSkip = false;
				
				$this->extra_property = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key1 = '';
						$input->readString($key1);
						
						$val1 = '';
						$input->readString($val1);
						
						$this->extra_property[$key1] = $val1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readMapEnd();
				
			}
			
			
			
			
			if ("transport_plans" == $schemeField){
				
				$needSkip = false;
				
				$this->transport_plans = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						
						$elem2 = new \com\vip\tpc\api\model\TransportPlan();
						$elem2->read($input);
						
						$this->transport_plans[$_size2++] = $elem2;
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
		
		if($this->loading_no !== null) {
			
			$xfer += $output->writeFieldBegin('loading_no');
			$xfer += $output->writeString($this->loading_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('actual_total_weight');
		$xfer += $output->writeDouble($this->actual_total_weight);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->operator_user !== null) {
			
			$xfer += $output->writeFieldBegin('operator_user');
			$xfer += $output->writeString($this->operator_user);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extra_property !== null) {
			
			$xfer += $output->writeFieldBegin('extra_property');
			
			if (!is_array($this->extra_property)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->extra_property as $kiter0 => $viter0){
				
				$xfer += $output->writeString($kiter0);
				
				$xfer += $output->writeString($viter0);
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transport_plans !== null) {
			
			$xfer += $output->writeFieldBegin('transport_plans');
			
			if (!is_array($this->transport_plans)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->transport_plans as $iter0){
				
				
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