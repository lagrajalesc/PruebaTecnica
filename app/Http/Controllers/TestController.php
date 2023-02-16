<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function ejercicio1A(Request $request){
        $units = 15000;
        $total = 0;
        $totalFail = 0;
        $fails = 5;
        $months = explode('.', $request->months);
        for($i = 0; $i<ceil($request->months); $i++){
            $total += $units - ($units * ($fails + $i*2))/100; 
        }
        $totalFail = (ceil($request->months) * $units) - $total;      
        if(sizeof($months) > 1) {
            $totalFail =  $totalFail - ($units *($fails + $months[0]*2)/100)/2;
            return response()->json([
                'message' => 'Estas son las unidades defectuosas encontradas',
                'fails' => $totalFail,
                'state' => '200',
            ]);
        } 
        return response()->json([
            'message' => 'Estas son las unidades defectuosas encontradas',
            'fails' => $totalFail,
            'state' => '200',
        ]);

    }

    public function ejercicio1B(Request $request){

        if($request->units/15000 == 0){
            return response()->json([
                'messageFail' => 'La máquina aún no está en funcionamiento',
                'state' => '200'
            ]);
        }
        elseif($request->units/15000 <= 1){
            return response()->json([
                'messageFail' => 'La máquina lleva un mes en funcionamiento aproximadamente',
                'messageReview' => 'debe ser revisada aproximadamente en agosto',
                'state' => '200'
            ]); 
        }
        else {
            $useTime = explode('.',$request->units/15000);
            $technicalReview = explode('.',($request->units/15000)/6);
            $technicalReview = explode('.',6 * ((($request->units/15000)/6) - $technicalReview[0]));

            switch($technicalReview[0]){
                case 2;
                    return response()->json([
                        'messageFail' => 'La máquina lleva en funcionamiento aproximadamente',
                        'fails' => $useTime[0] . ' meses ',
                        'messageReview' => 'debe ser revisada en julio',
                        'state' => '200'
                    ]);
                break;
                case 3;
                    return response()->json([
                        'messageFail' => 'La máquina lleva en funcionamiento aproximadamente',
                        'fails' => $useTime[0] . ' meses ',
                        'messageReview' => 'debe ser revisada en junio',
                        'state' => '200'
                    ]);
                break;
                case 4;
                    return response()->json([
                        'messageFail' => 'La máquina lleva en funcionamiento aproximadamente',
                        'fails' => $useTime[0] . ' meses ',
                        'messageReview' => 'debe ser revisada en mayo',
                        'state' => '200'
                    ]);
                break;
                case 5;
                    return response()->json([
                        'messageFail' => 'La máquina lleva en funcionamiento aproximadamente',
                        'fails' => $useTime[0] . ' meses ',
                        'messageReview' => 'debe ser revisada en abril',
                        'state' => '200'
                    ]);
                break;
                case 6;
                    return response()->json([
                        'messageFail' => 'La máquina lleva en funcionamiento aproximadamente',
                        'fails' => $useTime[0] . ' meses ',
                        'messageReview' => 'debe ser revisada en marzo',
                        'state' => '200'
                    ]);
                break;
            }
        }
    }

    public function ejercicio2(Request $request){
        $days = 360 * $request->yeards;
        $settlement = 0;
        if($request->yeards <= 1){
            return response()->json([
                'messageDays' => 'El empleado lleva',
                'days' => $days . ' días vinculado a la compañía ',
                'messageSettlement' => 'Su liquidación es por un valor de',
                'settlement' => $request->salary,
                'state' => '200'
            ]);
        }else {
            for($i = 2; $i < ($request->yeards+1); $i++){
                $settlement += $request->salary * (2/3);
            }
            $settlement = $settlement + $request->salary;
            return response()->json([
                'messageDays' => 'El empleado lleva',
                'days' => $days . ' días vinculado a la compañía ',
                'messageSettlement' => 'Su liquidación es por un valor de',
                'settlement' => $settlement,
                'state' => '200'
            ]);
        }
         
    }

    public function ejercicio3(Request $request){
        return response()->json([
            'message' => 'La compañía debe abonar',
            'amount' => ($request->amount * 0.4),
            'state' => '200'
        ]);
    }

}
