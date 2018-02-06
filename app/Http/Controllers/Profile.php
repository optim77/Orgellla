<?php

namespace App\Http\Controllers;

use App\Bought;
use App\Category;
use App\Conv;
use App\Product;
use App\User;
use Faker\Provider\DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class Profile extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(){
        $id = Auth::id();
        $data = User::find($id);
        if($data->lat == null || $data->lng == null){
            $ipaddress = '';
            if (isset($_SERVER['HTTP_CLIENT_IP']))
                $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
            else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
                $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
            else if(isset($_SERVER['HTTP_X_FORWARDED']))
                $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
            else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
                $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
            else if(isset($_SERVER['HTTP_FORWARDED']))
                $ipaddress = $_SERVER['HTTP_FORWARDED'];
            else if(isset($_SERVER['REMOTE_ADDR']))
                $ipaddress = $_SERVER['REMOTE_ADDR'];
            else
                $ipaddress = 'UNKNOWN';

            $json  = file_get_contents("https://freegeoip.net/json/$ipaddress");
            $json  =  json_decode($json ,true);
            $country =  $json['country_name'];
            $region= $json['region_name'];
            $city = $json['city'];
            $lat = $json['latitude'];
            $lng = $json['longitude'];

            User::where('id',$id)->update(['lat' => $lat,'lng' => $lng]);
        }


        return view('profile.data')->with('data',$data);
    }

    public function onSell(){
        $id = Auth::id();
        $products = Product::where('user_id',$id)->get()->all();
        return view('profile.onSell',['products' => $products]);
    }

    public function edit(Request $request){
        $id = Auth::id();
        $data = User::find($id);
        $data->update($request->all());
        return view('profile.form')->with('data',$data);
    }

    public function editAction(Request $request){
        $id = Auth::id();
        $data = User::find($id);
        $data->update($request->all());
        return redirect('profile');
    }

    public function bought(){
        $id = Auth::id();
        $data = Bought::where('user_id',$id)->get();
        return view('profile.bought')->with('data',$data);
    }

    public function editProduct($id){

        $product = Product::find($id);
        $categories = Category::pluck('name','id');
        return view('profile.editProduct',['product' => $product,'categories' => $categories]);
    }

    public function editProductAction(Request $request){

        $product = Product::find($request->product);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;

        print_r($request->all());
        if(Input::hasFile('photo1') && $request->file('photo1')->getClientSize() < 500000){
            $name = uniqid(null,true);
            $guessExtension = $request->file('photo1')->guessExtension();
            $product->photo1 = $name.'.'.$guessExtension;
            $file = $request->file('photo1')->move('upload/photos', $name.'.'.$guessExtension);
        }

        if(Input::hasFile('photo2') && $request->file('photo2')->getClientSize() < 500000){

            $name = uniqid(null,true);
            $guessExtension = $request->file('photo2')->guessExtension();
            $product->photo3 = $name.'.'.$guessExtension;
            $file = $request->file('photo2')->move('upload/photos', $name.'.'.$guessExtension);
        }

        if(Input::hasFile('photo3') && $request->file('photo3')->getClientSize() < 500000){

            $name = uniqid(null,true);
            $guessExtension = $request->file('photo3')->guessExtension();
            $product->photo4 = $name.'.'.$guessExtension;
            $file = $request->file('photo3')->move('upload/photos', $name.'.'.$guessExtension);
        }

        if(Input::hasFile('photo5') && $request->file('photo5')->getClientSize() < 500000){

            $name = uniqid(null,true);
            $guessExtension = $request->file('photo5')->guessExtension();
            $product->photo5 = $name.'.'.$guessExtension;
            $file = $request->file('photo5')->move('upload/photos', $name.'.'.$guessExtension);
        }

        if(Input::hasFile('photo6') && $request->file('photo6')->getClientSize() < 500000){

            $name = uniqid(null,true);
            $guessExtension = $request->file('photo6')->guessExtension();
            $product->photo6 = $name.'.'.$guessExtension;
            $file = $request->file('photo6')->move('upload/photos', $name.'.'.$guessExtension);
        }


        $product->save();

        return back();


    }

    public function destroyProduct($id){
        Product::destroy($id);
        return back();
    }

    public function create(){
        $categories = Category::pluck('name','id');
        return view('profile.create')->with('categories',$categories);
    }

    public function createAction(Request $request){
        $id = Auth::id();
        $data = User::find($id);
        $plain = sha1(uniqid(null,true));
        print_r($request->all());
        $product = new Product($request->all());
        $product->slug = $plain;
        $product->user_id = $id;


        if(Input::hasFile('photo1') && $request->file('photo1')->getClientSize() < 500000){

            $name = uniqid(null,true);
            $guessExtension = $request->file('photo1')->guessExtension();
            $product->photo1 = $name.'.'.$guessExtension;
            $file = $request->file('photo1')->move('upload/photos', $name.'.'.$guessExtension);
        }

        if(Input::hasFile('photo2') && $request->file('photo2')->getClientSize() < 500000){

            $name = uniqid(null,true);
            $guessExtension = $request->file('photo2')->guessExtension();
            $product->photo3 = $name.'.'.$guessExtension;
            $file = $request->file('photo2')->move('upload/photos', $name.'.'.$guessExtension);
        }

        if(Input::hasFile('photo3') && $request->file('photo3')->getClientSize() < 500000){

            $name = uniqid(null,true);
            $guessExtension = $request->file('photo3')->guessExtension();
            $product->photo4 = $name.'.'.$guessExtension;
            $file = $request->file('photo3')->move('upload/photos', $name.'.'.$guessExtension);
        }

        if(Input::hasFile('photo5') && $request->file('photo5')->getClientSize() < 500000){

            $name = uniqid(null,true);
            $guessExtension = $request->file('photo5')->guessExtension();
            $product->photo5 = $name.'.'.$guessExtension;
            $file = $request->file('photo5')->move('upload/photos', $name.'.'.$guessExtension);
        }

        if(Input::hasFile('photo6') && $request->file('photo6')->getClientSize() < 500000){

            $name = uniqid(null,true);
            $guessExtension = $request->file('photo6')->guessExtension();
            $product->photo6 = $name.'.'.$guessExtension;
            $file = $request->file('photo6')->move('upload/photos', $name.'.'.$guessExtension);
        }

        $product->save();
        return redirect('profile');
    }


    public function conversation($userId,$slug,$productId){
        $Suser = User::find($userId);
        $Uuser = Auth::id();
        $messages = Conv::where(['f_user' => $Uuser,'s_user' => $Suser->id])->orWhere(['f_user' => $Suser->id,'s_user' => $Uuser])->get();
        $content = null;
        foreach ($messages as $m){
           $f = 'conv/'.$m->file;
           $handle = fopen($f,'r');
           $content = fread($handle,filesize($f));

           fclose($handle);
//            $file = fopen('conv/'.$m->file,'r') or die('Unable to open file!');
//            echo fread($file,filesize('conv/'.$m->file));
        }

        return view('profile.conversation',['user' => $Suser,'product' => Product::where('slug',$slug)->get(),'conv' => $content  ]);

    }

    public function sendMessage(Request $request){
        $userId = Auth::id();
        $user = $request->user;
        $space = '0%';
        if (Auth::id() != $user){
            $space = '75%';
        }
        $message = "<div class='col-sm-12 bg-primary mt-1 w-25 ' style='margin-left:".$space."'>".$request->message."</div>";
        $product = $request->productId;


        $is = DB::table('convs')->where(['product_id' => $product,'f_user' => $user,'s_user' => $userId])->orWhere(['product_id' => $product,'f_user' => $userId,'s_user' => $user])->get();
        $file = '';


        if ($is->all() !== array()){
            foreach ($is as $i){
                if ($i->file !== null){
                    $fp = fopen('conv/'.$i->file,'a+');
                    fwrite($fp,$message);
                    fclose($fp);

                }

            }
        }else{
            $nameMessage = uniqid(null,true).'.txt';
            $conv = Conv::insert(['f_user' => $userId , 's_user' => $user,'file' => $nameMessage,'product_id' => $product,'created_at' => new \DateTime()]);

            $fp = fopen('conv/'.$nameMessage,'a+');
            fwrite($fp,$message);
            fclose($fp);
        }
        return Redirect::back();
    }


    public function showConv(){
        $id = Auth::id();
        $convs = Conv::where('f_user',$id)->orWhere('s_user',$id)->get()->all();

        return view('profile.convs',['convs' => $convs]);
    }

    public function loadConv($id){

        $conv = Conv::where('file',$id)->get();
        foreach ($conv as $m){
            if($m->f_user == Auth::id()){
                $user = $m->s_user;
            }else{
                $user = $m->f_user;
            }
            $userS = User::where('id',$user)->get();
            $f = 'conv/'.$m->file;
            $handle = fopen($f,'r');
            $content = fread($handle,filesize($f));
            fclose($handle);
        }
        return view('profile.cnv',['conv' => $content,'product' => $conv,'user' => $userS]);

    }


    public function getProfile($id){
        $user = User::find($id);
        return view('profile.getProfile')->with('user',$user);
    }

    public function logout(Request $request){
        session_destroy();

        return \redirect(route('mainIndex'));
    }

}
