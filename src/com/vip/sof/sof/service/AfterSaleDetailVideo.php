<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class AfterSaleDetailVideo {
	
	static $_TSPEC;
	public $videoUrl = null;
	public $videoCoverUrl = null;
	public $videoInternalUrl = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'videoUrl'
			),
			2 => array(
			'var' => 'videoCoverUrl'
			),
			3 => array(
			'var' => 'videoInternalUrl'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['videoUrl'])){
				
				$this->videoUrl = $vals['videoUrl'];
			}
			
			
			if (isset($vals['videoCoverUrl'])){
				
				$this->videoCoverUrl = $vals['videoCoverUrl'];
			}
			
			
			if (isset($vals['videoInternalUrl'])){
				
				$this->videoInternalUrl = $vals['videoInternalUrl'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AfterSaleDetailVideo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("videoUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->videoUrl);
				
			}
			
			
			
			
			if ("videoCoverUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->videoCoverUrl);
				
			}
			
			
			
			
			if ("videoInternalUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->videoInternalUrl);
				
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
		
		if($this->videoUrl !== null) {
			
			$xfer += $output->writeFieldBegin('videoUrl');
			$xfer += $output->writeString($this->videoUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->videoCoverUrl !== null) {
			
			$xfer += $output->writeFieldBegin('videoCoverUrl');
			$xfer += $output->writeString($this->videoCoverUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->videoInternalUrl !== null) {
			
			$xfer += $output->writeFieldBegin('videoInternalUrl');
			$xfer += $output->writeString($this->videoInternalUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>