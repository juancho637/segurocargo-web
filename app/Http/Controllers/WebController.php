<?php

namespace App\Http\Controllers;

use Goutte\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WebController extends Controller
{
    public function searchLabel(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'label' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->all()], 422);
        }

        $client = new Client();
        $req = $client->request('GET', 'http://50.31.20.157/sce/frm_RasGui.aspx?RastreaSello=' . $request->label);

        if ($req->filter('span#ctl00_ContentPlaceHolder1_lbl_BusErr')->first()->text() === "Número de rastreo no encontrado, trate mas tarde.") {
            return response()->json(['error' => 'No. de guía no encontrada.'], 404);
        }

        $data = ["info" => [], "tracking" => []];

        $info = $req->filter('table#ctl00_ContentPlaceHolder1_FormView1 > tr > td > table')->filter('tr');
        $info->each(function ($tr) use (&$data) {
            $textInfo = explode(':', $tr->text());
            $data['info'][trim($textInfo[0])] = trim(preg_replace('/[\t\n\r\s]+/', '', $textInfo[1]));
        });

        $tracking = $req->filter('table#ctl00_ContentPlaceHolder1_grd_Tracki')->filter('tr');
        $trackingCount = $tracking->count();
        $tracking->each(function ($tr, $key) use (&$data, $trackingCount) {
            if ($key !== 0 && $key !== ($trackingCount - 1)) {
                $item = [
                    'date' => str_replace('.', '/', $tr->filter('td')->eq(0)->text()),
                    'site' => $tr->filter('td')->eq(1)->text(),
                    'tracing' => str_replace('TRANSPORTADORA', 'TRANSPORTADORA TCC', str_replace(' TCC', '', $tr->filter('td')->eq(2)->text()))
                ];
                $data['tracking'][] = $item;
            }
        });

        return response()->json([
            'success' => true,
            'html' => view('partials.following_label_modal', compact('data'))->render()
        ], 200);
    }
}
