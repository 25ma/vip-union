<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tpc\api\model;

class LineTransportPlanBox {
	
	static $_TSPEC;
	public $box_no = null;
	public $box_weight = null;
	public $box_volume = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'box_no'
			),
			2 => array(
			'var' => 'box_weight'
			),
			3 => array(
			'var' => 'box_volume'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['box_no'])){
				
				$this->box_no = $vals['box_no'];
			}
			
			
			if (isset($vals['box_weight'])){
				
				$this->box_weight = $vals['box_weight'];
			}
			
			
			if (isset($vals['box_volume'])){
				
				$this->box_volume = $vals['box_volume'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'LineTransportPlanBox';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("box_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->box_no);
				
			}
			
			
			
			
			if ("box_weight" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->box_weight);
				
			}
			
			
			
			
			if ("box_volume" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->box_volume);
				
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
		
		$xfer += $output->writeFieldBegin('box_no');
		$xfer += $output->writeString($this->box_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('box_weight');
		$xfer += $output->writeDouble($this->box_weight);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('box_volume');
		$xfer += $output->writeDouble($this->box_volume);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>