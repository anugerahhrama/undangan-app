<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Tamu extends Model
{
    protected $fillable =[
        'id','id_undangan','nama','email','alamat','url_undangan','url_presensi','status_undangan','status_presensi'
    ];
    public $incrementing = false;
    use HasFactory;

    public static function kode()
    {
    	$kode = DB::table('tamus')->max('id');
    	$addNol = '';
    	$kode = str_replace("TM", "", $kode);
    	$kode = (int) $kode + 1;
        $incrementKode = $kode;

    	if (strlen($kode) == 1) {
    		$addNol = "000";
    	} elseif (strlen($kode) == 2) {
    		$addNol = "00";
    	} elseif (strlen($kode == 3)) {
    		$addNol = "0";
    	}

    	$kodeBaru = "TM".$addNol.$incrementKode;
    	return $kodeBaru;
    }
}
