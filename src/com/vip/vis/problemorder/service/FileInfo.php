<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\problemorder\service;

class FileInfo {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $file_content = null;
	public $file_name = null;
	public $file_type = null;
	public $log_id = null;
	public $wd_no = null;
	public $wd_src = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'file_content'
			),
			3 => array(
			'var' => 'file_name'
			),
			4 => array(
			'var' => 'file_type'
			),
			5 => array(
			'var' => 'log_id'
			),
			6 => array(
			'var' => 'wd_no'
			),
			7 => array(
			'var' => 'wd_src'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['file_content'])){
				
				$this->file_content = $vals['file_content'];
			}
			
			
			if (isset($vals['file_name'])){
				
				$this->file_name = $vals['file_name'];
			}
			
			
			if (isset($vals['file_type'])){
				
				$this->file_type = $vals['file_type'];
			}
			
			
			if (isset($vals['log_id'])){
				
				$this->log_id = $vals['log_id'];
			}
			
			
			if (isset($vals['wd_no'])){
				
				$this->wd_no = $vals['wd_no'];
			}
			
			
			if (isset($vals['wd_src'])){
				
				$this->wd_src = $vals['wd_src'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'FileInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_id); 
				
			}
			
			
			
			
			if ("file_content" == $schemeField){
				
				$needSkip = false;
				
				$this->file_content = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readByte($elem0); 
						
						$this->file_content[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("file_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->file_name);
				
			}
			
			
			
			
			if ("file_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->file_type);
				
			}
			
			
			
			
			if ("log_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->log_id);
				
			}
			
			
			
			
			if ("wd_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->wd_no);
				
			}
			
			
			
			
			if ("wd_src" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->wd_src); 
				
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
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('file_content');
		
		if (!is_array($this->file_content)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->file_content as $iter0){
			
			$xfer += $output->writeByte($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('file_name');
		$xfer += $output->writeString($this->file_name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('file_type');
		$xfer += $output->writeString($this->file_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('log_id');
		$xfer += $output->writeString($this->log_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('wd_no');
		$xfer += $output->writeString($this->wd_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('wd_src');
		$xfer += $output->writeByte($this->wd_src);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>