<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\delivery;

class ExchangeOrderCheckItem {
	
	static $_TSPEC;
	public $delivery_warehouse = null;
	public $channel = null;
	public $first_classification = null;
	public $second_classification = null;
	public $third_classification = null;
	public $problem_desc = null;
	public $image_list = null;
	public $video_list = null;
	public $order_sn = null;
	public $order_label = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'delivery_warehouse'
			),
			2 => array(
			'var' => 'channel'
			),
			3 => array(
			'var' => 'first_classification'
			),
			4 => array(
			'var' => 'second_classification'
			),
			5 => array(
			'var' => 'third_classification'
			),
			6 => array(
			'var' => 'problem_desc'
			),
			7 => array(
			'var' => 'image_list'
			),
			8 => array(
			'var' => 'video_list'
			),
			9 => array(
			'var' => 'order_sn'
			),
			10 => array(
			'var' => 'order_label'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['delivery_warehouse'])){
				
				$this->delivery_warehouse = $vals['delivery_warehouse'];
			}
			
			
			if (isset($vals['channel'])){
				
				$this->channel = $vals['channel'];
			}
			
			
			if (isset($vals['first_classification'])){
				
				$this->first_classification = $vals['first_classification'];
			}
			
			
			if (isset($vals['second_classification'])){
				
				$this->second_classification = $vals['second_classification'];
			}
			
			
			if (isset($vals['third_classification'])){
				
				$this->third_classification = $vals['third_classification'];
			}
			
			
			if (isset($vals['problem_desc'])){
				
				$this->problem_desc = $vals['problem_desc'];
			}
			
			
			if (isset($vals['image_list'])){
				
				$this->image_list = $vals['image_list'];
			}
			
			
			if (isset($vals['video_list'])){
				
				$this->video_list = $vals['video_list'];
			}
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['order_label'])){
				
				$this->order_label = $vals['order_label'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ExchangeOrderCheckItem';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("delivery_warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->delivery_warehouse);
				
			}
			
			
			
			
			if ("channel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->channel);
				
			}
			
			
			
			
			if ("first_classification" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->first_classification);
				
			}
			
			
			
			
			if ("second_classification" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->second_classification);
				
			}
			
			
			
			
			if ("third_classification" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->third_classification);
				
			}
			
			
			
			
			if ("problem_desc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->problem_desc);
				
			}
			
			
			
			
			if ("image_list" == $schemeField){
				
				$needSkip = false;
				
				$this->image_list = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->image_list[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("video_list" == $schemeField){
				
				$needSkip = false;
				
				$this->video_list = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->video_list[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sn);
				
			}
			
			
			
			
			if ("order_label" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_label);
				
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
		
		if($this->delivery_warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_warehouse');
			$xfer += $output->writeString($this->delivery_warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->channel !== null) {
			
			$xfer += $output->writeFieldBegin('channel');
			$xfer += $output->writeString($this->channel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->first_classification !== null) {
			
			$xfer += $output->writeFieldBegin('first_classification');
			$xfer += $output->writeString($this->first_classification);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->second_classification !== null) {
			
			$xfer += $output->writeFieldBegin('second_classification');
			$xfer += $output->writeString($this->second_classification);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->third_classification !== null) {
			
			$xfer += $output->writeFieldBegin('third_classification');
			$xfer += $output->writeString($this->third_classification);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->problem_desc !== null) {
			
			$xfer += $output->writeFieldBegin('problem_desc');
			$xfer += $output->writeString($this->problem_desc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->image_list !== null) {
			
			$xfer += $output->writeFieldBegin('image_list');
			
			if (!is_array($this->image_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->image_list as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->video_list !== null) {
			
			$xfer += $output->writeFieldBegin('video_list');
			
			if (!is_array($this->video_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->video_list as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('order_sn');
			$xfer += $output->writeString($this->order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_label !== null) {
			
			$xfer += $output->writeFieldBegin('order_label');
			$xfer += $output->writeString($this->order_label);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>