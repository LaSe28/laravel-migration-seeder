<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;
class TrainController extends Controller
{
    public function trainsList() {
        $trains = Train::all();
        return view('trains', compact('trains'));
    }
    public function popolaDB() {
        $data = [
            'towns'=>['pescara','bergamo','venezia','roma','milano','firenze','termoli','ostia','sulmona','genova','livorno','torino','chieti','campobasso','pisticci','lecce'],
            'time'=>['2022-05-23 16:02:16','2022-05-12 14:12:16','2022-06-01 14:30:16','2022-05-30 07:45:23','2022-05-08 22:56:16','2022-05-10 12:35:16','2022-06-26 09:41:23','2022-05-30 01:50:23'],
            'code'=>['g2i54oq1','qverfq45','445dgvzq','423fqfvr','rv24c45g','4bvvgtht','vqeirnv2','qiurfbn3','vqner02a'],
            'late' => ['in orario','10 min di ritardo','5 min di ritardo','62 min di ritardo','46 min di ritardo','74 min di ritardo','14 min di ritardo','90 min di ritardo','30 min di ritardo'],
            'platform' =>[1,2,3,4,5,6,7,8,9,10,11,12,13,14]
        ];


        for ($i=0; $i<100; $i++){
            $train = new Train();
            $train->stazione_partenza = $data['towns'][rand(0, 15)];
            $train->stazione_arrivo = $data['towns'][rand(0, 15)];
            $train->orario_partenza = $data['time'][rand(0, 7)];
            $train->orario_arrivo = $data['time'][rand(0, 7)];
            $train->codice_treno = $data['code'][rand(0, 7)];
            $train->treno_in_orario = $data['late'][rand(0, 8)];
            $train->binario = $data['platform'][rand(0, 13)];
            $train->save();
        }
        return 'fatto';
    }
}
