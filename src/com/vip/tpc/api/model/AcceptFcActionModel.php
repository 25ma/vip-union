<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tpc\api\model;

class AcceptFcActionModel {
	
	static $_TSPEC;
	public $tid = null;
	public $transport_no = null;
	public $ed_code = null;
	public $receiver_mobile = null;
	public $pick_code = null;
	public $action_code = null;
	public $action_time = null;
	public $position = null;
	public $country = null;
	public $province = null;
	public $city = null;
	public $county = null;
	public $town = null;
	public $address = null;
	public $express_company = null;
	public $courier_name = null;
	public $courier_mobile = null;
	public $longitude = null;
	public $latitude = null;
	public $remark = null;
	public $collection_type = null;
	public $collection_name = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tid'
			),
			2 => array(
			'var' => 'transport_no'
			),
			3 => array(
			'var' => 'ed_code'
			),
			4 => array(
			'var' => 'receiver_mobile'
			),
			5 => array(
			'var' => 'pick_code'
			),
			6 => array(
			'var' => 'action_code'
			),
			7 => array(
			'var' => 'action_time'
			),
			8 => array(
			'var' => 'position'
			),
			9 => array(
			'var' => 'country'
			),
			10 => array(
			'var' => 'province'
			),
			11 => array(
			'var' => 'city'
			),
			12 => array(
			'var' => 'county'
			),
			13 => array(
			'var' => 'town'
			),
			14 => array(
			'var' => 'address'
			),
			15 => array(
			'var' => 'express_company'
			),
			16 => array(
			'var' => 'courier_name'
			),
			17 => array(
			'var' => 'courier_mobile'
			),
			18 => array(
			'var' => 'longitude'
			),
			19 => array(
			'var' => 'latitude'
			),
			20 => array(
			'var' => 'remark'
			),
			21 => array(
			'var' => 'collection_type'
			),
			22 => array(
			'var' => 'collection_name'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tid'])){
				
				$this->tid = $vals['tid'];
			}
			
			
			if (isset($vals['transport_no'])){
				
				$this->transport_no = $vals['transport_no'];
			}
			
			
			if (isset($vals['ed_code'])){
				
				$this->ed_code = $vals['ed_code'];
			}
			
			
			if (isset($vals['receiver_mobile'])){
				
				$this->receiver_mobile = $vals['receiver_mobile'];
			}
			
			
			if (isset($vals['pick_code'])){
				
				$this->pick_code = $vals['pick_code'];
			}
			
			
			if (isset($vals['action_code'])){
				
				$this->action_code = $vals['action_code'];
			}
			
			
			if (isset($vals['action_time'])){
				
				$this->action_time = $vals['action_time'];
			}
			
			
			if (isset($vals['position'])){
				
				$this->position = $vals['position'];
			}
			
			
			if (isset($vals['country'])){
				
				$this->country = $vals['country'];
			}
			
			
			if (isset($vals['province'])){
				
				$this->province = $vals['province'];
			}
			
			
			if (isset($vals['city'])){
				
				$this->city = $vals['city'];
			}
			
			
			if (isset($vals['county'])){
				
				$this->county = $vals['county'];
			}
			
			
			if (isset($vals['town'])){
				
				$this->town = $vals['town'];
			}
			
			
			if (isset($vals['address'])){
				
				$this->address = $vals['address'];
			}
			
			
			if (isset($vals['express_company'])){
				
				$this->express_company = $vals['express_company'];
			}
			
			
			if (isset($vals['courier_name'])){
				
				$this->courier_name = $vals['courier_name'];
			}
			
			
			if (isset($vals['courier_mobile'])){
				
				$this->courier_mobile = $vals['courier_mobile'];
			}
			
			
			if (isset($vals['longitude'])){
				
				$this->longitude = $vals['longitude'];
			}
			
			
			if (isset($vals['latitude'])){
				
				$this->latitude = $vals['latitude'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['collection_type'])){
				
				$this->collection_type = $vals['collection_type'];
			}
			
			
			if (isset($vals['collection_name'])){
				
				$this->collection_name = $vals['collection_name'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AcceptFcActionModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("tid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tid);
				
			}
			
			
			
			
			if ("transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_no);
				
			}
			
			
			
			
			if ("ed_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ed_code);
				
			}
			
			
			
			
			if ("receiver_mobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiver_mobile);
				
			}
			
			
			
			
			if ("pick_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pick_code);
				
			}
			
			
			
			
			if ("action_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->action_code);
				
			}
			
			
			
			
			if ("action_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->action_time);
				
			}
			
			
			
			
			if ("position" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->position);
				
			}
			
			
			
			
			if ("country" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->country);
				
			}
			
			
			
			
			if ("province" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->province);
				
			}
			
			
			
			
			if ("city" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->city);
				
			}
			
			
			
			
			if ("county" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->county);
				
			}
			
			
			
			
			if ("town" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->town);
				
			}
			
			
			
			
			if ("address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address);
				
			}
			
			
			
			
			if ("express_company" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->express_company);
				
			}
			
			
			
			
			if ("courier_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->courier_name);
				
			}
			
			
			
			
			if ("courier_mobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->courier_mobile);
				
			}
			
			
			
			
			if ("longitude" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->longitude);
				
			}
			
			
			
			
			if ("latitude" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->latitude);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("collection_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->collection_type);
				
			}
			
			
			
			
			if ("collection_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->collection_name);
				
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
		
		$xfer += $output->writeFieldBegin('tid');
		$xfer += $output->writeString($this->tid);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('transport_no');
		$xfer += $output->writeString($this->transport_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('ed_code');
		$xfer += $output->writeString($this->ed_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('receiver_mobile');
		$xfer += $output->writeString($this->receiver_mobile);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->pick_code !== null) {
			
			$xfer += $output->writeFieldBegin('pick_code');
			$xfer += $output->writeString($this->pick_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('action_code');
		$xfer += $output->writeString($this->action_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('action_time');
		$xfer += $output->writeString($this->action_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('position');
		$xfer += $output->writeString($this->position);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->country !== null) {
			
			$xfer += $output->writeFieldBegin('country');
			$xfer += $output->writeString($this->country);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->province !== null) {
			
			$xfer += $output->writeFieldBegin('province');
			$xfer += $output->writeString($this->province);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->city !== null) {
			
			$xfer += $output->writeFieldBegin('city');
			$xfer += $output->writeString($this->city);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->county !== null) {
			
			$xfer += $output->writeFieldBegin('county');
			$xfer += $output->writeString($this->county);
			
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
		
		
		if($this->express_company !== null) {
			
			$xfer += $output->writeFieldBegin('express_company');
			$xfer += $output->writeString($this->express_company);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->courier_name !== null) {
			
			$xfer += $output->writeFieldBegin('courier_name');
			$xfer += $output->writeString($this->courier_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('courier_mobile');
		$xfer += $output->writeString($this->courier_mobile);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->longitude !== null) {
			
			$xfer += $output->writeFieldBegin('longitude');
			$xfer += $output->writeString($this->longitude);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->latitude !== null) {
			
			$xfer += $output->writeFieldBegin('latitude');
			$xfer += $output->writeString($this->latitude);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->collection_type !== null) {
			
			$xfer += $output->writeFieldBegin('collection_type');
			$xfer += $output->writeString($this->collection_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->collection_name !== null) {
			
			$xfer += $output->writeFieldBegin('collection_name');
			$xfer += $output->writeString($this->collection_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>