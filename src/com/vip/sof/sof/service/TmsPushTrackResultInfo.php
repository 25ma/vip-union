<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class TmsPushTrackResultInfo {
	
	static $_TSPEC;
	public $tmsId = null;
	public $bizResponseCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tmsId'
			),
			2 => array(
			'var' => 'bizResponseCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tmsId'])){
				
				$this->tmsId = $vals['tmsId'];
			}
			
			
			if (isset($vals['bizResponseCode'])){
				
				$this->bizResponseCode = $vals['bizResponseCode'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TmsPushTrackResultInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("tmsId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tmsId);
				
			}
			
			
			
			
			if ("bizResponseCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bizResponseCode);
				
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
		
		if($this->tmsId !== null) {
			
			$xfer += $output->writeFieldBegin('tmsId');
			$xfer += $output->writeString($this->tmsId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bizResponseCode !== null) {
			
			$xfer += $output->writeFieldBegin('bizResponseCode');
			$xfer += $output->writeString($this->bizResponseCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>