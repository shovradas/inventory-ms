<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function deposit(){
        $accounts = Account::get();

        foreach ($accounts as $account) {
            echo $account->id;
            echo $account->name;
            echo $account->balance;
        }
    }
}
