<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class TrackItem {
	
	static $_TSPEC;
	public $trackCreateTime = null;
	public $trackDesc = null;
	public $remark = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'trackCreateTime'
			),
			2 => array(
			'var' => 'trackDesc'
			),
			3 => array(
			'var' => 'remark'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['trackCreateTime'])){
				
				$this->trackCreateTime = $vals['trackCreateTime'];
			}
			
			
			if (isset($vals['trackDesc'])){
				
				$this->trackDesc = $vals['trackDesc'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TrackItem';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("trackCreateTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->trackCreateTime);
				
			}
			
			
			
			
			if ("trackDesc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->trackDesc);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
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
		
		if($this->trackCreateTime !== null) {
			
			$xfer += $output->writeFieldBegin('trackCreateTime');
			$xfer += $output->writeString($this->trackCreateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->trackDesc !== null) {
			
			$xfer += $output->writeFieldBegin('trackDesc');
			$xfer += $output->writeString($this->trackDesc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>