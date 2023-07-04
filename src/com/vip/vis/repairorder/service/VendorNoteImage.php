<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\repairorder\service;

class VendorNoteImage {
	
	static $_TSPEC;
	public $fid = null;
	public $imageType = null;
	public $imageUrl = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'fid'
			),
			2 => array(
			'var' => 'imageType'
			),
			3 => array(
			'var' => 'imageUrl'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['fid'])){
				
				$this->fid = $vals['fid'];
			}
			
			
			if (isset($vals['imageType'])){
				
				$this->imageType = $vals['imageType'];
			}
			
			
			if (isset($vals['imageUrl'])){
				
				$this->imageUrl = $vals['imageUrl'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'VendorNoteImage';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("fid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fid);
				
			}
			
			
			
			
			if ("imageType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->imageType);
				
			}
			
			
			
			
			if ("imageUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->imageUrl);
				
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
		
		if($this->fid !== null) {
			
			$xfer += $output->writeFieldBegin('fid');
			$xfer += $output->writeString($this->fid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->imageType !== null) {
			
			$xfer += $output->writeFieldBegin('imageType');
			$xfer += $output->writeString($this->imageType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->imageUrl !== null) {
			
			$xfer += $output->writeFieldBegin('imageUrl');
			$xfer += $output->writeString($this->imageUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>