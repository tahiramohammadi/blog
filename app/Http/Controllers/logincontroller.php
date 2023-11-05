<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validation;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use DB;
use Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;
use App\Models\passwordReset;
class logincontroller extends Controller
{
   
 

  function login(){
    return view('login/login');
   }
   public function loginUser(Request $request){
    $request->validate([
              'email' => 'required|email',
              'password' =>'required|max:12|min:8',
       ],[
        'email.required'=>"*ضروری",
           'password.required'=>"*ضروری",
        ]);
       $user= User::where('email','=', $request->email)->first();
      if( $user){
              if(Hash::check($request->password,$user->password)){
                 $request->session()->put('LoginId',$user->id);
                  return redirect('dashboard');
          
                 }else {
                   return back()->with('fail','معلومات شما نامعتبر است ');
          }
        }else{
            return back()->with('fail','گذرواژه درست نیست ');
          }
                                
} 
        function register(){
            return view('registration/register');
        }

        public function registerUser(Request $req){
            
         $req->validate([
             'name'=> 'required',
          'email'=>'required|email|unique:users',
             'password' =>'required|string|max:12|min:8',
             'cpassword'=>'required| same:password',
             'image'=>'required|mimes:jpg, png, jpeg|max:5048',

           ],[
                'name.required'=>"*ضروری",
                   'email.required'=>"*ضروری",
                   'password.required'=>"*ضروری",
                   'cpassword.required'=>"گذرواژه درست وارد نمایید",
                   
          ]);
          $user = new User();
          $user->name=$req->input('name');
        $user->email=$req->input('email');
      $user->password=Hash::make( $req->input('password'));

            if($req->hasfile('image')){
                 $file=$req->file('image');
             
                 $filename=time().'.' .$file->getClientOriginalExtension();
                    $path=public_path('assets/image/user');
                   $file->move($path, $filename);
                   $user->image=$path.$filename;
            }
        
           $u=$user->save();
           if($u){
            Session::flash('ذخیره','موفقانه ذخیره شد ');
           }else{
              return redirect('master/master');
           }
      
     
        }
        function showforgetpasswordform(){
         return view('forgetpassword');
        }
       
  //  public function  submitforgetpasswordform(Request $request){

  //           try {
  //             $user = User::where('email',$request->email)->get();
  //             if(count($user) > 0){
  //                     $token = Str::random(40);
  //                     $domain = URL::to('/');
  //                     $url= $domain.'/reset-password?token='.$token;
  //                     $data['url'] = $url;
  //                     $data['email'] = $request->email;
  //                     $data['title'] =' password reset';
  //                     $data['body']= 'please click on below link to reset your password.';
  //                     Mail::send('email/forgetpasswordMail',['data'=>$data],function($message) use ($data){

  //                       $message->to($data['email'])->subject($data['title']);
  //                     });
  //                      $dateTime = Carbon::now()->format('Y-m-d H:i:s');
  //                      passwordReset::create(
  //                       ['email'=>$request->email],
  //                       [
  //                         'email'=>$request->email,
  //                         'token'=>$token,
  //                         'created_at'=> $dateTime
  //                       ]
  //                      );

  //                      return back()->with('success','ما ایمیل خواهیم کرد لینک گذرواژه شما را ');
                        
                      
  //             }else{
  //               return back()->with('fail', 'ایمیل وجود ندارد ');
  //             }
  //           } catch (\Exception $e) {
  //             return back()->with('fail', $e->getMessage());
  //           }

  //         }
          // public function showresetpasswordform(Request  $request){
          //   $reset= passwordReset::where('token',$request->token)->get();
          //   if(isset($request->token) && count($reset) > 0 ){
          //          $user = User::where('email',$reset[0]['email'])->get();
          //          return view('resetPassword',compact('user'));

          //   }
          // }
             public function submitforgetpasswordform(Request $request){
                //  $request->validate([
                //   'email'=>'required|exits:users,email',
                //  ],[
                //  'email.required'=>'*ضروری',
                //  ]);
                 $token = Str::random(64);
                 DB::table('password_resets')->insert([
                   'email'=>$request->email,
                   'token'=>$token,
                   'created_at'=>Carbon::now(),
                 ]);
               //   $action_link = route('email-forgot',['token'=>$token,'email'=>$request->email]);
               //   $body="  <b/>دریچه کانکور<b>ما دریافت کردیم درخواست بازیابی گذرواژه برای شما از ".$request->email.". شما می توانید دو باره تنظیم نمایید گذرواژه تان را توسط کلیک کردن لینک ";
                 Mail::send('email/forgetpasswordMail',['token'=>$token],function($message) use($request){
                      $message->to($request->email);
                     $message ->subject('تنظیم گذارواژه');
                 });
                 return back()->with('success','ما ایمیل خواهیم کرد لینک گذرواژه شما را ');
   
                }
public function showresetpasswordform($token){
  return view ('resetPassword',['token'=>$token]);
}


public function submitresetpasswordform(Request $request){
       $request->validate([
         'email'=>'required|email|exits:users',
         'password'=>'required|string|max:12|min:8|confirmed',
         'cpassword'=>'required|same:password',

       ],[
           'email.required'=>"*ضروری",
           'password.required'=>"*ضروری",
           'cpassword.required'=>"گذرواژه درست وارد نمایید",
          
          ]);
          $updatepassword=DB::table('password_resets')->where([
            'email'=>$request->email,
            'token'=>$request->token
          ])
          ->first();
          if( $updatepassword){
            return back()->withInput()->with('هشدار','reset link has expired!');
          }
          $user=User::where('email', $request->email)->update([
            'password'=>Hash::make($request->password)
          ]);
          DB::table('password_resets')->where(['email'=>$request->email])->delete();
          return redirect('login')->with('موفقانه',' !گذرواژه شما تغیر کرده ');
}

    

} 
      