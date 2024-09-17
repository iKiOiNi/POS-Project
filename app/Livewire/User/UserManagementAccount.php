<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\Employee;
use Illuminate\Support\Facades\Hash;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;

class UserManagementAccount extends Component
{
    use WithPagination;
    use WithFileUploads;


    public $firstname;
    public $lastname;
    public $middle;
    public $suffix;
    public $age;
    public $address;
    public $contact_number;
    public $gender;
    public $role;
    public $status;
    public $username;
    public $password;
    public $password_confirmation;
    public $avatar;

    public $ufirstname;
    public $ulastname;
    public $umiddle;
    public $usuffix;
    public $uage;
    public $uaddress;
    public $ucontact_number;
    public $ugender;
    public $urole;
    public $ustatus;
    public $uusername;
    public $upassword;
    public $upassword_confirmation;
    public $uavatar;
    public $employee_id;


    public $search = '';

    public function render()
    {
        return view('livewire.user.user-management-account', [
            'employees' => Employee::search($this->search)->paginate(10),
        ]);
    }

    public function store()
    {

        $this->validate(
            [
                'firstname' => 'required|string|max:255',
                'lastname' => 'required|string|max:255',
                'middle' => 'nullable|string|max:255',
                'suffix' => 'nullable|string|max:10',
                'age' => 'required|integer|min:18',
                'address' => 'required|string|max:255',
                'contact_number' => 'required|string|max:20',
                'gender' => 'required|in:Male,Female',
                'role' => 'required|string|max:255',
                'status' => 'required|string|in:Active,Inactive',
                'username' => 'required|string|max:255|unique:employees,username',
                'password' => 'required|string|min:8|confirmed',
                'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]
        );


        $employee = Employee::create([
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'middle' => $this->middle,
            'suffix' => $this->suffix,
            'age' => $this->age,
            'address' => $this->address,
            'contact_number' => $this->contact_number,
            'gender' => $this->gender,
            'role' => $this->role,
            'status' => $this->status,
            'username' => $this->username,
            'password' => Hash::make($this->password),
            'created_at' => now(),
            'avatar' => file_get_contents($this->avatar->getRealPath()),
        ]);


        $this->reset(['firstname', 'lastname', 'middle', 'suffix', 'age', 'address', 'contact_number', 'gender', 'role', 'status', 'username', 'password', 'password_confirmation']);

        session()->flash('message', 'Employee account created successfully.');
    }

    public function sayHelllo()
    {
        dd('Hello');
    }

    public function editUser($id){

        $employee = Employee::find($id);
        $this->employee_id = $employee->employee_id;

        $this->ufirstname = $employee->firstname;
        $this->ulastname = $employee->lastname;
        $this->umiddle = $employee->middle;
        $this->usuffix = $employee->suffix;
        $this->uage = $employee->age;
        $this->uaddress = $employee->address;
        $this->ucontact_number = $employee->contact_number;
        $this->ugender = $employee->gender;
        $this->urole = $employee->role;
        $this->ustatus = $employee->status;
        $this->uusername = $employee->username;
    }

    public function updateUser(){

            $this->validate(
                [
                    'ufirstname' => 'required|string|max:255',
                    'ulastname' => 'required|string|max:255',
                    'umiddle' => 'nullable|string|max:255',
                    'usuffix' => 'nullable|string|max:10',
                    'uage' => 'required|integer|min:18',
                    'uaddress' => 'required|string|max:255',
                    'ucontact_number' => 'required|string|max:20',
                    'ugender' => 'required|in:Male,Female',
                    'urole' => 'required|string|max:255',
                    'ustatus' => 'required|string|in:Active,Inactive',
                    'uusername' => 'required|string|max:255',
                    'upassword' => 'required|string|min:8',
                    'upassword_confirmation' => 'required|same:upassword',

                ]
            );

            $employee = Employee::find($this->employee_id);

            $employee->update([
                'firstname' => $this->ufirstname,
                'lastname' => $this->ulastname,
                'middle' => $this->umiddle,
                'suffix' => $this->usuffix,
                'age' => $this->uage,
                'address' => $this->uaddress,
                'contact_number' => $this->ucontact_number,
                'gender' => $this->ugender,
                'role' => $this->urole,
                'status' => $this->ustatus,
                'username' => $this->uusername,
                'password' => Hash::make($this->upassword),
                'created_at' => now(),
            ]);

            $this->reset(['ufirstname', 'ulastname', 'umiddle', 'usuffix', 'uage', 'uaddress', 'ucontact_number', 'ugender', 'urole', 'ustatus', 'uusername', 'upassword', 'upassword_confirmation']);

            session()->flash('message', 'Employee account updated successfully.');
    }
}
