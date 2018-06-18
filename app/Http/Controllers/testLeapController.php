<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use DateTime;

class testLeapController extends Controller
{
    const FECHA = "22-11-2020";
    
    /**
     * Displays index page 
     * @return type
     */
    
    public function index(){
 
      
        return view('testLeap.index');
 
    }
    
    /**
     * 
     * Get const FECHA analizes it and returns an array with info
     * about if its a leap Year, day´s week name in spanish and catalan
     * and string with error
     * 
     * @return array (bool isLeap  true/false, array DaytwoLanguages)
     */
    

    public function isLeapDate(){
        
        try{
            $valores = explode('-', self::FECHA);
            if(count($valores) == 3 && checkdate($valores[1], $valores[0], $valores[2])){
                     
                     //Get day of week if date is correct
                     $aDaytwoLanguages= $this->aDaytwoLanguages($valores);
                     $aInfo= array("isLeapYear"=>true,"sDayName"=>$aDaytwoLanguages,"error"=>null);
                     //test febraury-29-YYYY from const FECHA
                     if(!checkdate(2,29,$valores[2])){
                         $aInfo= array("isLeapYear"=>false,
                                       "sDayName"=>$aDaytwoLanguages,
                                       "error"=>null);
                     }
            }
            else{
               $aInfo= array("isLeapYear"=>false,"sDayName"=>null,"error"=>"Incorrect Date format");
            }
            return json_encode($aInfo);

        }catch(Exception $e){
            //Error checkdate
            //TODO show a usual contact admisnistrator
        } 
        
      
        
    }
    /**
     * Get array created in isLeapDate with YYYY,dd,mm
     * @param array $aDayName
     * @return array $aDayName day name in two languages
     */
    public function aDaytwoLanguages($valores){
       
     
        setlocale(LC_TIME, 'Spanish');
        $dt = Carbon::create($valores[2], $valores[1], $valores[0], 00, 00, 00);
        Carbon::setUtf8(true);
        $aDayName[0] = $dt->formatLocalized('%A');
        setlocale(LC_TIME, 'Catalan');
        $dt = Carbon::create($valores[2], $valores[1], $valores[0], 00, 00, 00);
        $aDayName[1] = $dt->formatLocalized('%A');
        
        return array($aDayName);
    }
}
