<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Log;

class ContactsController extends Controller
{
    public function index()
    {
        $users = Contact::all();

        $set = [
            'users' => $users,
        ];

        return view('index', $set);
    }

    public function addContact(){
        if(request()->isMethod('post')) {
            $data = request()->all();
            unset($data['_token']);

            $keys = Contact::keys();
            $valid = true;

            foreach($keys as $key){
                if(!isset($data[$key]) || empty($data[$key])){
                    $valid = false;
                    $this->log("Invalid: $key");
                    break;
                }
                $valid = true;
            }

            if($valid){
                Contact::create($data);
                $this->log("Added: $data[fname] $data[lname]");
                return redirect('/');
            }
        }
        return view('layouts.pages.add');
    }

    public function deleteContact($id){
        if($id){
            Contact::where('id', $id)->delete();
            $this->log("Deleted: $id", __METHOD__);
            return redirect('/');
        }
    }

    public function testRun(){
        Contact::create([
            'fname' => 'John',
            'lname' => 'Doe',
            'email' => 'test@gmail.com',
            'phone' => '1234567890',
            'birthday' => '1990-09-09',
            'address' => '123 Main St, City, State, 12345',
        ]);
        return redirect('/');
    }

    private function log($msg = '', $method = '', $line = 0){
        $print = $method . ' (' . $line . ') ==> ' . $msg;
        Log::info($print);
    }
}
