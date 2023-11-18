<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\job;
use App\Models\eamailForNotification;
use App\Models\notfication;

use App\Http\Requests\notficationRequest;
use App\Http\Requests\ubdateNotficationRequest;
use App\Http\Requests\jobRequest;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function view_card(){
      $data =job::all();
      return view('admin.card',compact('data'));
    }
    public function add_card(notficationRequest $request){
      $product=new notfication;
      $product->name=$request->name;
      $product->jobId=$request->job;
      $product->idntityNum=$request->idntityNum;
      $product->salry=$request->salry;
      $product->beginingDate=$request->beginingDate;
      $product->endDate=$request->endDate;
      $product->notfyDate=$request->notfyDate;
      $product->notes=$request->notes;
      $product->also=$request->also;

      $backImage=$request->backImage;
      $imageNameBack=time().'back'.'.'.$backImage->getClientOriginalExtension();
      $request->backImage->move('product',$imageNameBack);
      $product->backImage=$imageNameBack;

      $frontImage=$request->frontImage;
      $imagename=time().'.'.$frontImage->getClientOriginalExtension();
      $request->frontImage->move('product',$imagename);
      $product->frontImage=$imagename;

      $product->save();

      return redirect()->back()->with('message','تمت الاضافة');;
    }
    public function show_notfication(){
      $notfication=notfication::paginate(20);
      return view('admin.show_notfication',compact('notfication'));
    }
    public function delete_card($id){
      $data = notfication::find($id);

      $data->delete();

      return redirect()->back()->with('message','تم الحذف بنجاح');
    }
    public function update_card($id){
      $job =job::all();
      $data = notfication::find($id);
      return view('admin.update_card',compact('data','job'));
    }
    public function edit_card(ubdateNotficationRequest $request,$id){
      $card=notfication::find($id);
      $card->name=$request->name;
      $card->jobId=$request->job;
      $card->idntityNum=$request->idntityNum;
      $card->salry=$request->salry;
      $card->beginingDate=$request->beginingDate;
      $card->endDate=$request->endDate;
      $card->notfyDate=$request->notfyDate;
      $card->notes=$request->notes;
      $card->also=$request->also;

      $backImage=$request->backImage;
      if($backImage){
      $imageNameBack=time().'back'.'.'.$backImage->getClientOriginalExtension();
      $request->backImage->move('product',$imageNameBack);
      $card->backImage=$imageNameBack;
      }
      $frontImage=$request->frontImage;
      if($frontImage){
      $imagename=time().'.'.$frontImage->getClientOriginalExtension();
      $request->frontImage->move('product',$imagename);
      $card->frontImage=$imagename;
      }
      $card->save();

      return redirect()->back()->with('message','تم التعديل ');
    }




    public function view_job(){
      $data =job::all();
      return view('admin.job',compact('data'));
    }
    public function add_job(jobRequest $request){
      $product=new job;
      $product->name=$request->name;

      $product->save();

      return redirect()->back()->with('message','تمت الاضافة');;
    }
    public function delete_job($id){
      $data = job::find($id);

      $data->delete();

      return redirect()->back()->with('message','تم الحذف بنجاح');
    }
    public function endCard(){
      $ldate = date('Y-m-d');
      $notfication=notfication::where('notfyDate','>=','$ldate')->orderby('notfyDate','DESC')->get();
      return view('admin.endCard',compact('notfication'));
    }
    public function details($id){
      $data = notfication::find($id);
      return view('admin.details',compact('data'));
    }



    public function dashboard(){
      $user = User::all()->count();
      $fonshedCard=notfication::where('notfyDate','>=','$ldate')->count();
      $card=notfication::where('notfyDate','<','$ldate')->count();
      $cardAll=notfication::all()->count();
      return view('admin.dashboard',compact('user','fonshedCard','card','cardAll'));
    }

    public function card_search(Request $request){
      $searchText=$request->search;
      $notfication=notfication::where('name','LIKE',"%$searchText%")->get();
      return view('admin.show_notfication',compact('notfication'));
    }

    public function ChoseEmail(){
      $User =User::all();
      $data = eamailForNotification::first();
      return view('admin.ChoseEmail',compact('User','data'));
    }
   public function choseUserForNotification(Request $request){
    $data = eamailForNotification::first();
    $User =User::all();
    if($data==null){
      $email=new eamailForNotification;
      $email->userId=$request->userId;
      $email->save();
    }else{
      $email=eamailForNotification::where('userId',$data->userId);
      $toUbdate['userId']=$request->userId;
      $email->update($toUbdate);
    }
    $data = eamailForNotification::first();
    return view('admin.ChoseEmail',compact('User','data'))->with('message','تم التحديث');
   }
}
