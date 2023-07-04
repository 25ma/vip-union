<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\mapi\shop\service\vop;

class MidPicHotsModel {
	
	static $_TSPEC;
	public $mid = null;
	public $hotspotLeft = null;
	public $hotspotRight = null;
	public $hotspotTop = null;
	public $hotspotBottom = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'mid'
			),
			2 => array(
			'var' => 'hotspotLeft'
			),
			3 => array(
			'var' => 'hotspotRight'
			),
			4 => array(
			'var' => 'hotspotTop'
			),
			5 => array(
			'var' => 'hotspotBottom'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['mid'])){
				
				$this->mid = $vals['mid'];
			}
			
			
			if (isset($vals['hotspotLeft'])){
				
				$this->hotspotLeft = $vals['hotspotLeft'];
			}
			
			
			if (isset($vals['hotspotRight'])){
				
				$this->hotspotRight = $vals['hotspotRight'];
			}
			
			
			if (isset($vals['hotspotTop'])){
				
				$this->hotspotTop = $vals['hotspotTop'];
			}
			
			
			if (isset($vals['hotspotBottom'])){
				
				$this->hotspotBottom = $vals['hotspotBottom'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'MidPicHotsModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("mid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mid);
				
			}
			
			
			
			
			if ("hotspotLeft" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->hotspotLeft);
				
			}
			
			
			
			
			if ("hotspotRight" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->hotspotRight);
				
			}
			
			
			
			
			if ("hotspotTop" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->hotspotTop);
				
			}
			
			
			
			
			if ("hotspotBottom" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->hotspotBottom);
				
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
		
		if($this->mid !== null) {
			
			$xfer += $output->writeFieldBegin('mid');
			$xfer += $output->writeString($this->mid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->hotspotLeft !== null) {
			
			$xfer += $output->writeFieldBegin('hotspotLeft');
			$xfer += $output->writeString($this->hotspotLeft);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->hotspotRight !== null) {
			
			$xfer += $output->writeFieldBegin('hotspotRight');
			$xfer += $output->writeString($this->hotspotRight);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->hotspotTop !== null) {
			
			$xfer += $output->writeFieldBegin('hotspotTop');
			$xfer += $output->writeString($this->hotspotTop);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->hotspotBottom !== null) {
			
			$xfer += $output->writeFieldBegin('hotspotBottom');
			$xfer += $output->writeString($this->hotspotBottom);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>