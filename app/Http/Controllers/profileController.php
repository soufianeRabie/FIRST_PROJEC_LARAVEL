<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ProfileRequest;
use Symfony\Component\HttpKernel\Profiler\Profile as ProfilerProfile;

class profileController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->except([
             'show']);
    }
    public function index (){
        $profiles = Profile::paginate(9);
        return view("Profile.index" , compact("profiles"));
    }

    public function show(Profile $profile)
    {
        // Route mode binding RMB
        // dd($profile->name);
        // $id = $request->id;
        // $profile = profile::findOrFail($id);
        return view("Profile.show", compact("profile"));
    }

    public function create ()
    {
        return view("Profile.create");
    }

    public function store (ProfileRequest $request)
    {
        // Validation 
        $name = $request->name;
        $email = $request->email;
        $bio = $request->bio;
        $image = $request->image;


        // Hash 
        $password = Hash::make($request->password);
        // upload image
        if($request->hasFile('image'))
        {

            $image = $this->UploadImage($request);
        }

        // Insertion 
        Profile::create([
            'name'=> $name ,
            'email'=> $email,
            'password'=> $password,
            'bio'=> $bio,
            'image'=>$image,

        ]);

        //  OR USE THIS OTHER  METHODE  [profile::create($request->post());]

        //Redirection 
        return redirect()->route("profiles.index")->with("success" , "the profile added successfly");
        

    }

    public function destroy (Profile $profile)
    {
        // Route Model binding 
        $profile->delete();

            return to_route('profiles.index' , compact('profile'))->with('success' , "$profile->name has been deleted successfly");
    }

    public function edit(Profile $profile)
    {
        return view('profile.edit',compact('profile'));
    }

    public function update(ProfileRequest $request , Profile $profile)
    {
        $formfields = $request->validated();
        $formfields['password'] =Hash::make($request->password);

        //upload image 
        

        if($request->hasFile('image'))
        {
        $formfields['image'] = $this->UploadImage($request);
        }

        $profile->fill($formfields)->save();
        
        return to_route('profiles.show' , $profile->id)->with('success', "the profile has updated successflly");

    }

    private function UploadImage(ProfileRequest $request )
    {
        {
            return $request->file('image')->store('profile' , 'public');
        }
    }
};
