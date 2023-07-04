<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\platform\backend\cipher;

class CreateCipherNamespaceReq {
	
	static $_TSPEC;
	public $namespace = null;
	public $desc = null;
	public $createBy = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'namespace'
			),
			2 => array(
			'var' => 'desc'
			),
			3 => array(
			'var' => 'createBy'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['namespace'])){
				
				$this->namespace = $vals['namespace'];
			}
			
			
			if (isset($vals['desc'])){
				
				$this->desc = $vals['desc'];
			}
			
			
			if (isset($vals['createBy'])){
				
				$this->createBy = $vals['createBy'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CreateCipherNamespaceReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("namespace" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->namespace);
				
			}
			
			
			
			
			if ("desc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->desc);
				
			}
			
			
			
			
			if ("createBy" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createBy);
				
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
		
		$xfer += $output->writeFieldBegin('namespace');
		$xfer += $output->writeString($this->namespace);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('desc');
		$xfer += $output->writeString($this->desc);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('createBy');
		$xfer += $output->writeString($this->createBy);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>