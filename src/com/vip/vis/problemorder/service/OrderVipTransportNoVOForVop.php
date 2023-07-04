<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\problemorder\service;

class OrderVipTransportNoVOForVop {
	
	static $_TSPEC;
	public $order_sn = null;
	public $vip_transport_no = null;
	public $stat = null;
	public $stat_name = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_sn'
			),
			2 => array(
			'var' => 'vip_transport_no'
			),
			3 => array(
			'var' => 'stat'
			),
			4 => array(
			'var' => 'stat_name'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['vip_transport_no'])){
				
				$this->vip_transport_no = $vals['vip_transport_no'];
			}
			
			
			if (isset($vals['stat'])){
				
				$this->stat = $vals['stat'];
			}
			
			
			if (isset($vals['stat_name'])){
				
				$this->stat_name = $vals['stat_name'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderVipTransportNoVOForVop';
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
			
			
			
			
			if ("vip_transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vip_transport_no);
				
			}
			
			
			
			
			if ("stat" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->stat);
				
			}
			
			
			
			
			if ("stat_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->stat_name);
				
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
		
		if($this->order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('order_sn');
			$xfer += $output->writeString($this->order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vip_transport_no !== null) {
			
			$xfer += $output->writeFieldBegin('vip_transport_no');
			$xfer += $output->writeString($this->vip_transport_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->stat !== null) {
			
			$xfer += $output->writeFieldBegin('stat');
			$xfer += $output->writeString($this->stat);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->stat_name !== null) {
			
			$xfer += $output->writeFieldBegin('stat_name');
			$xfer += $output->writeString($this->stat_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>