<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class SubTransportPackageVop {
	
	static $_TSPEC;
	public $package_no = null;
	public $goods = null;
	public $package_volume = null;
	public $package_weight = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'package_no'
			),
			2 => array(
			'var' => 'goods'
			),
			3 => array(
			'var' => 'package_volume'
			),
			4 => array(
			'var' => 'package_weight'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['package_no'])){
				
				$this->package_no = $vals['package_no'];
			}
			
			
			if (isset($vals['goods'])){
				
				$this->goods = $vals['goods'];
			}
			
			
			if (isset($vals['package_volume'])){
				
				$this->package_volume = $vals['package_volume'];
			}
			
			
			if (isset($vals['package_weight'])){
				
				$this->package_weight = $vals['package_weight'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SubTransportPackageVop';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("package_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->package_no);
				
			}
			
			
			
			
			if ("goods" == $schemeField){
				
				$needSkip = false;
				
				$this->goods = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\sof\sof\service\PackageGoodsVop();
						$elem1->read($input);
						
						$this->goods[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("package_volume" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->package_volume);
				
			}
			
			
			
			
			if ("package_weight" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->package_weight);
				
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
		
		if($this->package_no !== null) {
			
			$xfer += $output->writeFieldBegin('package_no');
			$xfer += $output->writeString($this->package_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goods !== null) {
			
			$xfer += $output->writeFieldBegin('goods');
			
			if (!is_array($this->goods)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->goods as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->package_volume !== null) {
			
			$xfer += $output->writeFieldBegin('package_volume');
			$xfer += $output->writeString($this->package_volume);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->package_weight !== null) {
			
			$xfer += $output->writeFieldBegin('package_weight');
			$xfer += $output->writeString($this->package_weight);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>