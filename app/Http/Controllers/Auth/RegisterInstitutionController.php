<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use http\Env\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterInstitutionController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/homee';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        return Validator::make($data, [
            //normal users
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'facility_name' => 'required|string|max:255',
            'telephone' => 'required|string|max:255',

            'type' => 'required|string|max:255',
            'keph_level' => 'required|string|max:255',
            'facility_type' => 'required|string|max:255',
            'owner' => 'required|string|max:255',
            'regulatory_body' => 'required|string|max:255',
            'bed_capacity' => 'required|string|max:255',
            'branches' => 'required|string|max:255',

            'working_days' => 'required|string|max:255',
            'brief_description_of_services' => 'required|string|max:255',
            'insurance' => 'required|string|max:255',
            //company information
            'company_name' => 'required|string|max:255',
            'legal_name' => 'required|string|max:255',
            'tax_id' => 'required|string|max:255',
            'street_address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'county' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'sub_county' => 'required|string|max:255',
            'ward' => 'required|string|max:255',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'facility_name' => $data['facility_name'],
            'telephone' => $data['telephone'],
            'password' => Hash::make($data['password']),

            'keph_level'=> $data['keph_level'],
            'facility_type'=> $data['facility_type'],
            'owner'=> $data['owner'],
            'regulatory_body'=> $data['regulatory_body'],
            'bed_capacity'=> $data['bed_capacity'],
            'branches'=> $data['branches'],
            'working_days'=> $data['working_days'],
            'brief_description_of_services'=> $data['brief_description_of_services'],
            'insurance'=> $data['insurance'],
            'company_name'=> $data['company_name'],
            'legal_name'=> $data['legal_name'],
            'tax_id'=> $data['tax_id'],
            'street_address'=> $data['street_address'],
            'city'=> $data['city'],
            'county'=> $data['county'],
            'address'=> $data['address'],
            'sub_county'=> $data['sub_county'],
            'ward'=> $data['ward'],
        ]);



    }


}
