<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\file;

class FileUploadRequest {
	
	static $_TSPEC;
	public $resource_value = null;
	public $file_name = null;
	public $file_data = null;
	public $scenario = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'resource_value'
			),
			2 => array(
			'var' => 'file_name'
			),
			3 => array(
			'var' => 'file_data'
			),
			4 => array(
			'var' => 'scenario'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['resource_value'])){
				
				$this->resource_value = $vals['resource_value'];
			}
			
			
			if (isset($vals['file_name'])){
				
				$this->file_name = $vals['file_name'];
			}
			
			
			if (isset($vals['file_data'])){
				
				$this->file_data = $vals['file_data'];
			}
			
			
			if (isset($vals['scenario'])){
				
				$this->scenario = $vals['scenario'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'FileUploadRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("resource_value" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->resource_value);
				
			}
			
			
			
			
			if ("file_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->file_name);
				
			}
			
			
			
			
			if ("file_data" == $schemeField){
				
				$needSkip = false;
				
				$this->file_data = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readByte($elem0); 
						
						$this->file_data[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("scenario" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->scenario);
				
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
		
		$xfer += $output->writeFieldBegin('resource_value');
		$xfer += $output->writeString($this->resource_value);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('file_name');
		$xfer += $output->writeString($this->file_name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('file_data');
		
		if (!is_array($this->file_data)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->file_data as $iter0){
			
			$xfer += $output->writeByte($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('scenario');
		$xfer += $output->writeString($this->scenario);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>