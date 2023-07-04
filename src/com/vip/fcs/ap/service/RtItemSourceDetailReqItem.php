<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\ap\service;

class RtItemSourceDetailReqItem {
	
	static $_TSPEC;
	public $pager = null;
	public $vendorCode = null;
	public $stVendorSyncTime = null;
	public $etVendorSyncTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'pager'
			),
			2 => array(
			'var' => 'vendorCode'
			),
			3 => array(
			'var' => 'stVendorSyncTime'
			),
			4 => array(
			'var' => 'etVendorSyncTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['pager'])){
				
				$this->pager = $vals['pager'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['stVendorSyncTime'])){
				
				$this->stVendorSyncTime = $vals['stVendorSyncTime'];
			}
			
			
			if (isset($vals['etVendorSyncTime'])){
				
				$this->etVendorSyncTime = $vals['etVendorSyncTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'RtItemSourceDetailReqItem';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("pager" == $schemeField){
				
				$needSkip = false;
				
				$this->pager = new \com\vip\fcs\ap\service\Pager();
				$this->pager->read($input);
				
			}
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCode);
				
			}
			
			
			
			
			if ("stVendorSyncTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->stVendorSyncTime);
				
			}
			
			
			
			
			if ("etVendorSyncTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->etVendorSyncTime);
				
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
		
		if($this->pager !== null) {
			
			$xfer += $output->writeFieldBegin('pager');
			
			if (!is_object($this->pager)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->pager->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('vendorCode');
		$xfer += $output->writeString($this->vendorCode);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->stVendorSyncTime !== null) {
			
			$xfer += $output->writeFieldBegin('stVendorSyncTime');
			$xfer += $output->writeI64($this->stVendorSyncTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->etVendorSyncTime !== null) {
			
			$xfer += $output->writeFieldBegin('etVendorSyncTime');
			$xfer += $output->writeI64($this->etVendorSyncTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>