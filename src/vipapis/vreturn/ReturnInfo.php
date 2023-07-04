<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\vreturn;

class ReturnInfo {
	
	static $_TSPEC;
	public $return_sn = null;
	public $warehouse = null;
	public $return_type = null;
	public $pay_type = null;
	public $consignee = null;
	public $country = null;
	public $state = null;
	public $city = null;
	public $region = null;
	public $town = null;
	public $address = null;
	public $postcode = null;
	public $telephone = null;
	public $mobile = null;
	public $to_email = null;
	public $cc_email = null;
	public $self_reference = null;
	public $is_store_delivery = null;
	public $return_address_no = null;
	public $posted_time = null;
	public $out_time = null;
	public $carrier_take_time = null;
	public $vendor_sign_time = null;
	public $vendor_confirm_time = null;
	public $return_status = null;
	public $return_status_name = null;
	public $carrier_name = null;
	public $carrier_code = null;
	public $total_cases = null;
	public $total_skus = null;
	public $total_qtys = null;
	public $origin_return_type = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'return_sn'
			),
			2 => array(
			'var' => 'warehouse'
			),
			3 => array(
			'var' => 'return_type'
			),
			4 => array(
			'var' => 'pay_type'
			),
			5 => array(
			'var' => 'consignee'
			),
			6 => array(
			'var' => 'country'
			),
			7 => array(
			'var' => 'state'
			),
			8 => array(
			'var' => 'city'
			),
			9 => array(
			'var' => 'region'
			),
			10 => array(
			'var' => 'town'
			),
			11 => array(
			'var' => 'address'
			),
			12 => array(
			'var' => 'postcode'
			),
			13 => array(
			'var' => 'telephone'
			),
			14 => array(
			'var' => 'mobile'
			),
			15 => array(
			'var' => 'to_email'
			),
			16 => array(
			'var' => 'cc_email'
			),
			17 => array(
			'var' => 'self_reference'
			),
			18 => array(
			'var' => 'is_store_delivery'
			),
			19 => array(
			'var' => 'return_address_no'
			),
			20 => array(
			'var' => 'posted_time'
			),
			21 => array(
			'var' => 'out_time'
			),
			22 => array(
			'var' => 'carrier_take_time'
			),
			23 => array(
			'var' => 'vendor_sign_time'
			),
			24 => array(
			'var' => 'vendor_confirm_time'
			),
			25 => array(
			'var' => 'return_status'
			),
			26 => array(
			'var' => 'return_status_name'
			),
			27 => array(
			'var' => 'carrier_name'
			),
			28 => array(
			'var' => 'carrier_code'
			),
			29 => array(
			'var' => 'total_cases'
			),
			30 => array(
			'var' => 'total_skus'
			),
			31 => array(
			'var' => 'total_qtys'
			),
			32 => array(
			'var' => 'origin_return_type'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['return_sn'])){
				
				$this->return_sn = $vals['return_sn'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['return_type'])){
				
				$this->return_type = $vals['return_type'];
			}
			
			
			if (isset($vals['pay_type'])){
				
				$this->pay_type = $vals['pay_type'];
			}
			
			
			if (isset($vals['consignee'])){
				
				$this->consignee = $vals['consignee'];
			}
			
			
			if (isset($vals['country'])){
				
				$this->country = $vals['country'];
			}
			
			
			if (isset($vals['state'])){
				
				$this->state = $vals['state'];
			}
			
			
			if (isset($vals['city'])){
				
				$this->city = $vals['city'];
			}
			
			
			if (isset($vals['region'])){
				
				$this->region = $vals['region'];
			}
			
			
			if (isset($vals['town'])){
				
				$this->town = $vals['town'];
			}
			
			
			if (isset($vals['address'])){
				
				$this->address = $vals['address'];
			}
			
			
			if (isset($vals['postcode'])){
				
				$this->postcode = $vals['postcode'];
			}
			
			
			if (isset($vals['telephone'])){
				
				$this->telephone = $vals['telephone'];
			}
			
			
			if (isset($vals['mobile'])){
				
				$this->mobile = $vals['mobile'];
			}
			
			
			if (isset($vals['to_email'])){
				
				$this->to_email = $vals['to_email'];
			}
			
			
			if (isset($vals['cc_email'])){
				
				$this->cc_email = $vals['cc_email'];
			}
			
			
			if (isset($vals['self_reference'])){
				
				$this->self_reference = $vals['self_reference'];
			}
			
			
			if (isset($vals['is_store_delivery'])){
				
				$this->is_store_delivery = $vals['is_store_delivery'];
			}
			
			
			if (isset($vals['return_address_no'])){
				
				$this->return_address_no = $vals['return_address_no'];
			}
			
			
			if (isset($vals['posted_time'])){
				
				$this->posted_time = $vals['posted_time'];
			}
			
			
			if (isset($vals['out_time'])){
				
				$this->out_time = $vals['out_time'];
			}
			
			
			if (isset($vals['carrier_take_time'])){
				
				$this->carrier_take_time = $vals['carrier_take_time'];
			}
			
			
			if (isset($vals['vendor_sign_time'])){
				
				$this->vendor_sign_time = $vals['vendor_sign_time'];
			}
			
			
			if (isset($vals['vendor_confirm_time'])){
				
				$this->vendor_confirm_time = $vals['vendor_confirm_time'];
			}
			
			
			if (isset($vals['return_status'])){
				
				$this->return_status = $vals['return_status'];
			}
			
			
			if (isset($vals['return_status_name'])){
				
				$this->return_status_name = $vals['return_status_name'];
			}
			
			
			if (isset($vals['carrier_name'])){
				
				$this->carrier_name = $vals['carrier_name'];
			}
			
			
			if (isset($vals['carrier_code'])){
				
				$this->carrier_code = $vals['carrier_code'];
			}
			
			
			if (isset($vals['total_cases'])){
				
				$this->total_cases = $vals['total_cases'];
			}
			
			
			if (isset($vals['total_skus'])){
				
				$this->total_skus = $vals['total_skus'];
			}
			
			
			if (isset($vals['total_qtys'])){
				
				$this->total_qtys = $vals['total_qtys'];
			}
			
			
			if (isset($vals['origin_return_type'])){
				
				$this->origin_return_type = $vals['origin_return_type'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReturnInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("return_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->return_sn);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				
				$names = \vipapis\common\Warehouse::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->warehouse = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("return_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->return_type); 
				
			}
			
			
			
			
			if ("pay_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->pay_type); 
				
			}
			
			
			
			
			if ("consignee" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->consignee);
				
			}
			
			
			
			
			if ("country" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->country);
				
			}
			
			
			
			
			if ("state" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->state);
				
			}
			
			
			
			
			if ("city" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->city);
				
			}
			
			
			
			
			if ("region" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->region);
				
			}
			
			
			
			
			if ("town" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->town);
				
			}
			
			
			
			
			if ("address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address);
				
			}
			
			
			
			
			if ("postcode" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->postcode); 
				
			}
			
			
			
			
			if ("telephone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->telephone);
				
			}
			
			
			
			
			if ("mobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mobile);
				
			}
			
			
			
			
			if ("to_email" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->to_email);
				
			}
			
			
			
			
			if ("cc_email" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cc_email);
				
			}
			
			
			
			
			if ("self_reference" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->self_reference); 
				
			}
			
			
			
			
			if ("is_store_delivery" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->is_store_delivery); 
				
			}
			
			
			
			
			if ("return_address_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->return_address_no);
				
			}
			
			
			
			
			if ("posted_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->posted_time);
				
			}
			
			
			
			
			if ("out_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->out_time);
				
			}
			
			
			
			
			if ("carrier_take_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_take_time);
				
			}
			
			
			
			
			if ("vendor_sign_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_sign_time);
				
			}
			
			
			
			
			if ("vendor_confirm_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_confirm_time);
				
			}
			
			
			
			
			if ("return_status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->return_status); 
				
			}
			
			
			
			
			if ("return_status_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->return_status_name);
				
			}
			
			
			
			
			if ("carrier_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_name);
				
			}
			
			
			
			
			if ("carrier_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_code);
				
			}
			
			
			
			
			if ("total_cases" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->total_cases); 
				
			}
			
			
			
			
			if ("total_skus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->total_skus); 
				
			}
			
			
			
			
			if ("total_qtys" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->total_qtys); 
				
			}
			
			
			
			
			if ("origin_return_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->origin_return_type);
				
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
		
		if($this->return_sn !== null) {
			
			$xfer += $output->writeFieldBegin('return_sn');
			$xfer += $output->writeString($this->return_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			
			$em = new \vipapis\common\Warehouse; 
			$output->writeString($em::$__names[$this->warehouse]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->return_type !== null) {
			
			$xfer += $output->writeFieldBegin('return_type');
			$xfer += $output->writeI32($this->return_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pay_type !== null) {
			
			$xfer += $output->writeFieldBegin('pay_type');
			$xfer += $output->writeI32($this->pay_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->consignee !== null) {
			
			$xfer += $output->writeFieldBegin('consignee');
			$xfer += $output->writeString($this->consignee);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->country !== null) {
			
			$xfer += $output->writeFieldBegin('country');
			$xfer += $output->writeString($this->country);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->state !== null) {
			
			$xfer += $output->writeFieldBegin('state');
			$xfer += $output->writeString($this->state);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->city !== null) {
			
			$xfer += $output->writeFieldBegin('city');
			$xfer += $output->writeString($this->city);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->region !== null) {
			
			$xfer += $output->writeFieldBegin('region');
			$xfer += $output->writeString($this->region);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->town !== null) {
			
			$xfer += $output->writeFieldBegin('town');
			$xfer += $output->writeString($this->town);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->address !== null) {
			
			$xfer += $output->writeFieldBegin('address');
			$xfer += $output->writeString($this->address);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->postcode !== null) {
			
			$xfer += $output->writeFieldBegin('postcode');
			$xfer += $output->writeI32($this->postcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->telephone !== null) {
			
			$xfer += $output->writeFieldBegin('telephone');
			$xfer += $output->writeString($this->telephone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mobile !== null) {
			
			$xfer += $output->writeFieldBegin('mobile');
			$xfer += $output->writeString($this->mobile);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->to_email !== null) {
			
			$xfer += $output->writeFieldBegin('to_email');
			$xfer += $output->writeString($this->to_email);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cc_email !== null) {
			
			$xfer += $output->writeFieldBegin('cc_email');
			$xfer += $output->writeString($this->cc_email);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->self_reference !== null) {
			
			$xfer += $output->writeFieldBegin('self_reference');
			$xfer += $output->writeI32($this->self_reference);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_store_delivery !== null) {
			
			$xfer += $output->writeFieldBegin('is_store_delivery');
			$xfer += $output->writeI32($this->is_store_delivery);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->return_address_no !== null) {
			
			$xfer += $output->writeFieldBegin('return_address_no');
			$xfer += $output->writeString($this->return_address_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->posted_time !== null) {
			
			$xfer += $output->writeFieldBegin('posted_time');
			$xfer += $output->writeString($this->posted_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->out_time !== null) {
			
			$xfer += $output->writeFieldBegin('out_time');
			$xfer += $output->writeString($this->out_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrier_take_time !== null) {
			
			$xfer += $output->writeFieldBegin('carrier_take_time');
			$xfer += $output->writeString($this->carrier_take_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_sign_time !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_sign_time');
			$xfer += $output->writeString($this->vendor_sign_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_confirm_time !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_confirm_time');
			$xfer += $output->writeString($this->vendor_confirm_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->return_status !== null) {
			
			$xfer += $output->writeFieldBegin('return_status');
			$xfer += $output->writeI32($this->return_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->return_status_name !== null) {
			
			$xfer += $output->writeFieldBegin('return_status_name');
			$xfer += $output->writeString($this->return_status_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrier_name !== null) {
			
			$xfer += $output->writeFieldBegin('carrier_name');
			$xfer += $output->writeString($this->carrier_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrier_code !== null) {
			
			$xfer += $output->writeFieldBegin('carrier_code');
			$xfer += $output->writeString($this->carrier_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->total_cases !== null) {
			
			$xfer += $output->writeFieldBegin('total_cases');
			$xfer += $output->writeI32($this->total_cases);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->total_skus !== null) {
			
			$xfer += $output->writeFieldBegin('total_skus');
			$xfer += $output->writeI32($this->total_skus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->total_qtys !== null) {
			
			$xfer += $output->writeFieldBegin('total_qtys');
			$xfer += $output->writeI32($this->total_qtys);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->origin_return_type !== null) {
			
			$xfer += $output->writeFieldBegin('origin_return_type');
			$xfer += $output->writeString($this->origin_return_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>