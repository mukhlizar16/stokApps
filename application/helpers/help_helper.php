<?php
defined('BASEPATH') or exit('No direct script access allowed');


function get_indo_bulan($bln = '')
{
	$data = array(1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
	if (empty($bln)) {
		return $data;
	} else {
		$bln = (int)$bln;
		return isset($data[$bln]) ? $data[$bln] : "";
	}
}

function get_indo_hari($hari = '')
{
	$data = array(1 => 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'at', 'Sabtu', 'Minggu');
	if (empty($hari)) {
		return $data;
	} else {
		$hari = (int)$hari;
		return $data[$hari];
	}
}

function tgl_jam_indo($tgl_jam = '')
{
	if (!empty($tgl_jam)) {
		$pisah = explode(' ', $tgl_jam);
		return tgl_indo($pisah[0]) . ' ' . date('H:i', strtotime($tgl_jam));
	}
}

function tgl_indo($tgl = '')
{
	if (!empty($tgl)) {
		$pisah = explode('-', $tgl);
		return $pisah[2] . ' ' . get_indo_bulan($pisah[1]) . ' ' . $pisah[0];
	}
}

function get_url($url) {
	$CI =& get_instance();
	$alamat = $CI->uri->segment(1);
	if ($alamat != $url)
	{
		return false;
	} else
	{
		return true;
	}
	return false;
}

if(! function_exists('is_login')){
	function is_login()
	{
		if (!empty($_SESSION['status_login'])) {
			return TRUE;
		}

		return FALSE;
	}
}

function is_admin()
{
	$level = $_SESSION['level'];
	if($level == 1){
		return true;
	}
	return false;
}
