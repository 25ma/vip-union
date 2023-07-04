<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\cc\bulkbuying\service;

class ProcessExcelReq {
	
	static $_TSPEC;
	public $accessKey = null;
	public $type = null;
	public $fid = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'accessKey'
			),
			2 => array(
			'var' => 'type'
			),
			3 => array(
			'var' => 'fid'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['accessKey'])){
				
				$this->accessKey = $vals['accessKey'];
			}
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['fid'])){
				
				$this->fid = $vals['fid'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ProcessExcelReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("accessKey" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->accessKey);
				
			}
			
			
			
			
			if ("type" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->type); 
				
			}
			
			
			
			
			if ("fid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fid);
				
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
		
		if($this->accessKey !== null) {
			
			$xfer += $output->writeFieldBegin('accessKey');
			$xfer += $output->writeString($this->accessKey);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->type !== null) {
			
			$xfer += $output->writeFieldBegin('type');
			$xfer += $output->writeByte($this->type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('fid');
		$xfer += $output->writeString($this->fid);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>