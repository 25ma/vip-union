<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\cup\sal\vop;

class AttributeForVop {
	
	static $_TSPEC;
	public $attriuteId = null;
	public $attributeName = null;
	public $foreignname = null;
	public $type = null;
	public $dataType = null;
	public $flag = null;
	public $values = null;
	public $sort = null;
	public $viewFlag = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'attriuteId'
			),
			2 => array(
			'var' => 'attributeName'
			),
			3 => array(
			'var' => 'foreignname'
			),
			4 => array(
			'var' => 'type'
			),
			5 => array(
			'var' => 'dataType'
			),
			6 => array(
			'var' => 'flag'
			),
			7 => array(
			'var' => 'values'
			),
			8 => array(
			'var' => 'sort'
			),
			9 => array(
			'var' => 'viewFlag'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['attriuteId'])){
				
				$this->attriuteId = $vals['attriuteId'];
			}
			
			
			if (isset($vals['attributeName'])){
				
				$this->attributeName = $vals['attributeName'];
			}
			
			
			if (isset($vals['foreignname'])){
				
				$this->foreignname = $vals['foreignname'];
			}
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['dataType'])){
				
				$this->dataType = $vals['dataType'];
			}
			
			
			if (isset($vals['flag'])){
				
				$this->flag = $vals['flag'];
			}
			
			
			if (isset($vals['values'])){
				
				$this->values = $vals['values'];
			}
			
			
			if (isset($vals['sort'])){
				
				$this->sort = $vals['sort'];
			}
			
			
			if (isset($vals['viewFlag'])){
				
				$this->viewFlag = $vals['viewFlag'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AttributeForVop';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("attriuteId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->attriuteId); 
				
			}
			
			
			
			
			if ("attributeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attributeName);
				
			}
			
			
			
			
			if ("foreignname" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->foreignname);
				
			}
			
			
			
			
			if ("type" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\cup\sal\vop\AttributeTypeForVop::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->type = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("dataType" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\cup\sal\vop\DataTypeForVop::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->dataType = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("flag" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->flag); 
				
			}
			
			
			
			
			if ("values" == $schemeField){
				
				$needSkip = false;
				
				$this->values = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\cup\sal\vop\AttributeValueForVop();
						$elem0->read($input);
						
						$this->values[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("sort" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->sort); 
				
			}
			
			
			
			
			if ("viewFlag" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->viewFlag); 
				
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
		
		$xfer += $output->writeFieldBegin('attriuteId');
		$xfer += $output->writeI32($this->attriuteId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->attributeName !== null) {
			
			$xfer += $output->writeFieldBegin('attributeName');
			$xfer += $output->writeString($this->attributeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->foreignname !== null) {
			
			$xfer += $output->writeFieldBegin('foreignname');
			$xfer += $output->writeString($this->foreignname);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->type !== null) {
			
			$xfer += $output->writeFieldBegin('type');
			
			$em = new \com\vip\cup\sal\vop\AttributeTypeForVop; 
			$output->writeString($em::$__names[$this->type]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dataType !== null) {
			
			$xfer += $output->writeFieldBegin('dataType');
			
			$em = new \com\vip\cup\sal\vop\DataTypeForVop; 
			$output->writeString($em::$__names[$this->dataType]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('flag');
		$xfer += $output->writeByte($this->flag);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->values !== null) {
			
			$xfer += $output->writeFieldBegin('values');
			
			if (!is_array($this->values)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->values as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sort !== null) {
			
			$xfer += $output->writeFieldBegin('sort');
			$xfer += $output->writeI32($this->sort);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->viewFlag !== null) {
			
			$xfer += $output->writeFieldBegin('viewFlag');
			$xfer += $output->writeByte($this->viewFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>