<?php

namespace App\Http\Controllers;

use App\bmi;
use App\childhealthcard;
use App\childhealthcard1;
use App\childhealthcard2;
use App\childhealthcard3;
use App\childhealthcard4;
use App\childhealthcard5;
use App\childhealthcard6;
use App\childmonitoring;
use App\childtemperature;
use App\createchild;
use App\maternal;
use App\mothersbloodpressure;
use App\motherstemperature;
use App\mothersweight;
use App\physical;
use App\present_pregnancy;
use App\previous_pregnancy;
use App\surgical;
use App\weight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class MCHController extends Controller
{

    public function home()

    {

        $create_user_results = DB::table('users')->get();
        $create_child_results = DB::table('createchildren')->get();
        $maternalreport_results = DB::table('maternals')->get();
        return view('mch.homee',['create_child_results'=>$create_child_results,'maternalreport_results'=>$maternalreport_results,'create_user_results'=>$create_user_results

        ]);
    }
    public function maternal()
{
    return view('mch.maternal');
}
    public function mch_booklet()
    {
        return view('mch.mchbooklet');
    }
    public function maternalreport()
    {
        $maternalreport_results = DB::table('maternals')->get();
        return view('mch.maternalreport',[
            'maternalreport_results'=>$maternalreport_results
        ]);
    }
    public function maternal_post()
    {
        $maternal = new maternal(Input::all());
        $maternal->save();


        return redirect(route('maternalreport'));
    }



    public function physicalexamination()
    {
        return view('mch.physicalexamination');
    }
    public function physicalexaminationreport()
    {
        $physicalexaminationreport_results = DB::table('physicals')->get();
        return view('mch.physicalexaminationreport',[
            'physicalexaminationreport_results'=>$physicalexaminationreport_results
        ]);

    }
    public function physicalexamination_post()
    {
        $physicalexamination = new physical(Input::all());
        $physicalexamination->save();


        return redirect(route('physicalexaminationreport'));
    }

    public function weight()
    {
        $weight_results = DB::table('weights')->get();
        return view('mch.weight',[
            'weight_results'=>$weight_results
        ]);
    }
    public function childmonitoring()
    {
        $childmonitoring_results = DB::table('childmonitorings')->get();
        return view('mch.childmonitoring',[
            'childmonitoring_results'=>$childmonitoring_results
        ]);
    }



    public function childhealthcard()
    {
        return view('mch.childhealthcard');
    }
    public function childhealthcard_post()
    {
        $child1 = new childhealthcard(Input::all());
        $child1->save();


        return redirect(route('childhealthcardreport'));
    }
    public function childhealthcard1()
    {
        return view('mch.childhealthcard1');
    }
    public function childhealthcard1_post()
    {
        $child2 = new childhealthcard1(Input::all());
        $child2->save();


        return redirect(route('childhealthcard1report'));
    }
    public function childhealthcard2()
    {
        return view('mch.childhealthcard2');
    }
    public function childhealthcard2_post()
    {
        $child3 = new childhealthcard2(Input::all());
        $child3->save();


        return redirect(route('childhealthcard2report'));
    }
    public function childhealthcard3()
    {
        return view('mch.childhealthcard3');
    }
    public function childhealthcard3_post()
    {
        $child4 = new childhealthcard3(Input::all());
        $child4->save();


        return redirect(route('childhealthcard3report'));
    }
    public function childhealthcard4()
    {
        return view('mch.childhealthcard4');
    }
    public function childhealthcard4_post()
    {
        $child5 = new childhealthcard4(Input::all());
        $child5->save();


        return redirect(route('childhealthcard4report'));
    }
    public function childhealthcard5()
    {
        return view('mch.childhealthcard5');
    }

    public function not_allowed()
    {
        return view('mch.not_allowed');
    }
    public function admin()
    {
        $maternalreport_results = DB::table('maternals')->get();
        $physicalexaminationreport_results = DB::table('physicals')->get();
        $previousreport_results = DB::table('previous_pregnancies')->get();
        $surgicalreport_results = DB::table('surgicals')->get();
        $childhealthcard_results = DB::table('childhealthcards')->get();
        $childhealthcard1_results = DB::table('childhealthcard1s')->get();
        $childhealthcard2_results = DB::table('childhealthcard2s')->get();
        $childhealthcard3_results = DB::table('childhealthcard3s')->get();
        $childhealthcard4_results = DB::table('childhealthcard4s')->get();
        $childhealthcard5_results = DB::table('childhealthcard5s')->get();
        $childhealthcard6_results = DB::table('childhealthcard6s')->get();
        $create_child_results = DB::table('createchildren')->get();
        return view('mch.admin',[
            'maternalreport_results'=>$maternalreport_results,'childhealthcard_results'=>$childhealthcard_results,'physicalexaminationreport_results'=>$physicalexaminationreport_results,'previousreport_results'=>$previousreport_results,'surgicalreport_results'=>$surgicalreport_results,'childhealthcard1_results'=>$childhealthcard1_results,'childhealthcard2_results'=>$childhealthcard2_results, 'childhealthcard3_results'=>$childhealthcard3_results,'childhealthcard4_results'=>$childhealthcard4_results,'childhealthcard5_results'=>$childhealthcard5_results,'childhealthcard6_results'=>$childhealthcard6_results,'create_child_results'=>$create_child_results,


        ]);
    }
    public function childhealthcard5_post()
    {
        $child6 = new childhealthcard5(Input::all());
        $child6->save();


        return redirect(route('childhealthcard5report'));
    }

    public function mother()
    {
        if (Auth::user()->user_type==1)
        {
            return view('mch.mother');
        }
        if (Auth::user()->user_type==0)
        {
            return view('mch.home');
        }
        if (Auth::user()->user_type==2)
        {
            return view('mch.admin');
        }
        else
        {
            return view('mch.not_allowed');
        }
    }
    public function childhealthcard6_post()
    {



        $child7 = new childhealthcard6(Input::all());
        $child7->save();


        return redirect(route('childhealthcard6report'));
    }
    public function previous()
    {
        return view('mch.previous');
    }
    public function previousreport()
    {
        $previousreport_results = DB::table('previous_pregnancies')->get();

        return view("mch.previousreport",[
            'previousreport_results'=>$previousreport_results
        ]);

    }
    public function previous_post()
    {
        $previous = new previous_pregnancy(Input::all());
        $previous->save();


        return redirect(route('previousreport'));
    }
    public function surgical()
    {
        return view('mch.surgical');
    }

    public function maternal_home()
    {
        $create_user_results = DB::table('users')->get();
        $mothersbloodpressure_results = DB::table('mothersbloodpressures')->get();
        $motherstemperature_results = DB::table('motherstemperatures')->get();
        $motherweight_results = DB::table('mothersweights')->get();
        $create_child_results = DB::table('createchildren')->get();
        $maternalreport_results = DB::table('maternals')->get();
        return view('mch.mternalhome',['mothersbloodpressure_results'=>$mothersbloodpressure_results, 'motherstemperature_results'=>$motherstemperature_results, 'motherweight_results'=>$motherweight_results, 'create_child_results'=>$create_child_results,'maternalreport_results'=>$maternalreport_results, 'create_user_results'=>$create_user_results

        ]);
    }
    public function child_home()
    {   $create_user_results = DB::table('users')->get();
        $childtemperature_results = DB::table('childtemperatures')->get();
        $childmonitoring_results = DB::table('childmonitorings')->get();
        $create_child_results = DB::table('createchildren')->get();
        $weight_results = DB::table('weights')->get();
        $maternalreport_results = DB::table('maternals')->get();
        return view('mch.childhome',[
            'weight_results'=>$weight_results,'childmonitoring_results'=>$childmonitoring_results,'childtemperature_results'=>$childtemperature_results, 'create_child_results'=>$create_child_results,'maternalreport_results'=>$maternalreport_results, 'create_user_results'=>$create_user_results
        ]);


    }
    public function surgicalreport()
    {
        $surgicalreport_results = DB::table('surgicals')->get();

        return view('mch.surgicalreport',[
            'surgicalreport_results'=>$surgicalreport_results
        ]);

    }
    public function surgical_post()
    {
        $surgical = new surgical(Input::all());
        $surgical->save();


        return redirect(route('surgicalreport'));
    }
    public function bmi()
    {
        return view('mch.mothersbmi');

    }
    public function bmi_post()
    {
        $bmi = new bmi(Input::all());
        $bmi->save();


        return redirect(route('bmi'));
    }
    public function childhealthcardreport()
    {
        $childhealthcard_results = DB::table('childhealthcards')->get();
        return view('mch.childhealthcardreport',[
            'childhealthcard_results'=>$childhealthcard_results
        ]);
    }
    public function childhealthcard1report()
    {
        $childhealthcard1_results = DB::table('childhealthcard1s')->get();
        return view('mch.childhealthcard1report',[
            'childhealthcard1_results'=>$childhealthcard1_results
        ]);
    }
    public function childhealthcard2report()
    {
        $childhealthcard2_results = DB::table('childhealthcard2s')->get();
        return view('mch.childhealthcard2report',[
            'childhealthcard2_results'=>$childhealthcard2_results
        ]);
    }
    public function childhealthcard3report()
    {
        $childhealthcard3_results = DB::table('childhealthcard3s')->get();
        return view('mch.childhealthcard3report',[
            'childhealthcard3_results'=>$childhealthcard3_results
        ]);
    }
    public function childhealthcard4report()
    {
        $childhealthcard4_results = DB::table('childhealthcard4s')->get();
        return view('mch.childhealthcard4report',[
            'childhealthcard4_results'=>$childhealthcard4_results
        ]);
    }
    public function childhealthcard5report()
    {
        $childhealthcard5_results = DB::table('childhealthcard5s')->get();
        return view('mch.childhealthcard5report',[
            'childhealthcard5_results'=>$childhealthcard5_results
        ]);
    }
    public function childhealthcard6report()
    {
        $childhealthcard6_results = DB::table('childhealthcard6s')->get();
        return view('mch.childhealthcard6report',[
            'childhealthcard6_results'=>$childhealthcard6_results
        ]);
    }

    public function childmonitemp()
    {

        $childtemperature_results = DB::table('childtemperatures')->get();
        return view('mch.childtemperature',[
            'childtemperature_results'=>$childtemperature_results
        ]);

    }
    public function mothersbp()
    {
        $mothersbloodpressure_results = DB::table('mothersbloodpressures')->get();
        return view('mch.mothersbloodpressure',[
            'mothersbloodpressure_results'=>$mothersbloodpressure_results
        ]);

    }
    public function motherstemp()
    {
        $motherstemperature_results = DB::table('motherstemperatures')->get();
        return view('mch.motherstemperature',[
            'motherstemperature_results'=>$motherstemperature_results
        ]);
    }
    public function mothersweight()
    {
        $motherweight_results = DB::table('mothersweights')->get();
        return view('mch.motherweight',[
            'motherweight_results'=>$motherweight_results
        ]);
    }
    public function weight_post()
    {
        $weight = new weight(Input::all());
        $weight->save();


        return redirect(route('weight'));
    }
    public function childmonitemp_post()
    {
        $childmonitemp = new childtemperature(Input::all());
        $childmonitemp->save();


        return redirect(route('weight'));
    }
    public function childmonitoring_post()
    {
        $childmonitoring = new childmonitoring(Input::all());
        $childmonitoring->save();


        return redirect(route('childmonitoring'));
    }
    public function mothersbp_post()
    {
        $mothersbloodpressure = new mothersbloodpressure(Input::all());
        $mothersbloodpressure->save();


        return redirect(route('mothersbp'));
    }
    public function motherstemp_post()
    {
        $motherstemp = new motherstemperature(Input::all());
        $motherstemp->save();


        return redirect(route('motherstemp'));
    }
    public function mothersweight_post()
    {
        $mothersweight = new mothersweight(Input::all());
        $mothersweight->save();


        return redirect(route('mothersweight'));
    }
    public function create_child()
    {
        return view('mch.createchild');
    }
    public function create_child_report()
    {
        $create_child_results = DB::table('createchildren')->get();
        return view('mch.createchildreport',[
            'create_child_results'=>$create_child_results
        ]);
    }
    public function create_child_post()
    {
        $create_child = new createchild(Input::all());
        $create_child->save();


        return redirect(route('create_child_report'));
    }
    public function maternal_delete(Request $request, $id) {
        $maternalreport_results = maternal::where('id', $id);

        $maternalreport_results->delete();
        return redirect(route('maternalreport'));
    }
    public function previous_delete(Request $request, $id) {
        $previousreport_results = previous_pregnancy::where('id', $id);

        $previousreport_results->delete();
        return redirect(route('previousreport'));
    }
    public function surgical_delete(Request $request, $id) {
        $surgicalreport_results = surgical::where('id', $id);

        $surgicalreport_results->delete();
        return redirect(route('surgicalreport'));
    }
    public function physicalexamination_delete(Request $request, $id) {
        $physicalexaminationreport_results = physical::where('id', $id);

        $physicalexaminationreport_results->delete();
        return redirect(route('physicalexaminationreport'));
    }
    public function childhealthcard_delete(Request $request, $id) {
        $childhealthcard_results = childhealthcard::where('id', $id);

        $childhealthcard_results->delete();
        return redirect(route('childhealthcardreport'));
    }
    public function childhealthcard1_delete(Request $request, $id) {
        $childhealthcard1_results = childhealthcard1::where('id', $id);

        $childhealthcard1_results->delete();
        return redirect(route('childhealthcard1report'));
    }
    public function childhealthcard2_delete(Request $request, $id) {
        $childhealthcard2_results = childhealthcard2::where('id', $id);

        $childhealthcard2_results->delete();
        return redirect(route('childhealthcard2report'));
    }
    public function childhealthcard3_delete(Request $request, $id) {
        $childhealthcard3_results = childhealthcard3::where('id', $id);

        $childhealthcard3_results->delete();
        return redirect(route('childhealthcard3report'));
    }
    public function childhealthcard4_delete(Request $request, $id) {
        $childhealthcard4_results = childhealthcard4::where('id', $id);

        $childhealthcard4_results->delete();
        return redirect(route('childhealthcard4report'));
    }
    public function childhealthcard5_delete(Request $request, $id) {
        $childhealthcard5_results = childhealthcard5::where('id', $id);

        $childhealthcard5_results->delete();
        return redirect(route('childhealthcard5report'));
    }
    public function childhealthcard6_delete(Request $request, $id) {
        $childhealthcard6_results = childhealthcard6::where('id', $id);

        $childhealthcard6_results->delete();
        return redirect(route('childhealthcard6report'));
    }
    public function create_child_delete(Request $request, $id) {
        $create_child_report_results = createchild::where('id', $id);

        $create_child_report_results->delete();
        return redirect(route('create_child_report'));
    }

}
