<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class CurrencyrateController extends Controller
{
	 public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function currencyrate()
    {
    	$currency=DB::table('currency_rates')->get();
    	return view('admin.Currency.currencyrate',compact('currency'));
    }

     public function storecurrency(Request $request)
    {
        $validatedData = $request->validate([
        'we_buy' => 'required|unique:currency_rates|max:55',
        'we_sell' => 'required|unique:currency_rates|max:55',
        ]);

        $data=array();
        $data['we_buy']=$request->we_buy;
        $data['we_sell']=$request->we_sell;
        $image=$request->file('logo');
            if ($image) {
                // $image_name= str_random(5);
                $image_name= date('dmy_H_s_i');

                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $upload_path='public/media/currency/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);
              
                $data['logo']=$image_url;
                $currency=DB::table('currency_rates')
                          ->insert($data);
                    $notification=array(
                     'messege'=>'Successfully Currency Inserted ',
                     'alert-type'=>'success'
                    );
                return Redirect()->back()->with($notification);                      
            }else{
              $currency=DB::table('currency_rates')
                          ->insert($data);
                 $notification=array(
                     'messege'=>'Done!',
                     'alert-type'=>'success'
                      );
                return Redirect()->back()->with($notification); 
            }

    }

    public function DeleteCurrency($id){
    	$data=DB::table('currency_rates')->where('id',$id)->first();
    	$image=$data->logo;
    	unlink($image);
    	 $currency=DB::table('currency_rates')->where('id',$id)->delete();
                    $notification=array(
                     'messege'=>'Successfully Brand Deleted ',
                     'alert-type'=>'success'
                    );
              return Redirect()->back()->with($notification);
    }

    public function EditCurrency($id){
    	$currency=DB::table('currency_rates')->where('id',$id)->first();
    
    	$image=$currency->logo;

    	return view('admin.currency.editcurrency',compact('currency'));
    }

    public function UpdateCurrency(Request $request,$id){
    	$oldlogo=$request->old_logo;
    	$data=array();
        $data['we_buy']=$request->we_buy;
        $data['we_sell']=$request->we_sell; 
        $image=$request->file('logo');
            if ($image) {

            	unlink($oldlogo);
                $image_name= date('dmy_H_s_i');
                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $upload_path='public/media/currency/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);
              
                $data['logo']=$image_url;
                $currency=DB::table('currency_rates')->where('id',$id)->update($data);
                    $notification=array(
                     'messege'=>'Successfully currency Updated ',
                     'alert-type'=>'success'
                    );
                return Redirect()->route('currencyrates')->with($notification);                      
            }else{
              $currency=DB::table('currency_rates')->where('id',$id)->update($data);
                 $notification=array(
                     'messege'=>'Successfully without Updated',
                     'alert-type'=>'success'
                      );
                return Redirect()->route('currencyrates')->with($notification); 
            }
    }

}
