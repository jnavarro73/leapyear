<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;

//require 'vendor/autoload.php';
class testLeapController extends Controller
{
    const FECHA = "22-11-2019";
    
    public function index(){
         $now_date = Carbon::now();
      
        return view('testLeap.index')->with('now',$now_date);
        // return View::make('testLeap.index')->with('now',$now);
    }
    /**
     * TODO calcular partes retornar errores si no es fecha valida
     * POr dia, mes o año y luego retornar true o false si es leap year
     * 
     * @param type $value
     * @return array (bool isLeap  true/false, array DaytwoLanguages)
     */
    public function isLeapDate($value){
        //$format="dd-mm-DDDD";
         $aDate = DateTime::createFromFormat('d-m-Y', self::FECHA); 
        //$k= date_parse_from_format($format, self::FECHA);
        /*
         * echo Carbon::create(2000, 1, 35, 13, 0, 0);
        // 2000-02-04 13:00:00

        try {
            Carbon::createSafe(2000, 1, 35, 13, 0, 0);
        } catch (\Carbon\Exceptions\InvalidDateException $exp) {
            echo $exp->getMessage();
        }
        // day : 35 is not a valid value.
        Note 1: 2018-02-29 produces also an exception while 2020-02-29 does not since 2020
                 * 
                 *  is a leap year.

        Note 2: Carbon::createSafe(2014, 3, 30, 1, 30, 0, 'Europe/London') also produces 
                 * an exception since PHP 5.4 because this time is in an hour skipped by 
                 * the daylight saving time, but before PHP 5.4, it will just create this 
                 * invalid date as it has existed.
                 */
        try{
            
            $aDaytwoLanguages= $this->aDaytwoLanguages();
            
        }catch(Exception $e){
            
        }
        return array($isLeap,$aDaytwoLanguages);
        
    }
    /**
     * 
     * 
     * @return array $aDayName day name in two languages
     */
    public function aDaytwoLanguages(){
        //Usamos FECHA
        /*
        setlocale(LC_TIME, 'Spanish');
        $dt = Carbon::create(2016, 01, 06, 00, 00, 00);
        Carbon::setUtf8(true);
        $aDayName[0] = $dt->formatLocalized('%A');
        setlocale(LC_TIME, 'Catalan');
        $dt = Carbon::create(2016, 01, 06, 00, 00, 00);
        $aDayName[1] = $dt->formatLocalized('%A');
         */
    }
}
