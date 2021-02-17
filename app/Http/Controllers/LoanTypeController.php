<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loantype;
Use Redirect;

class LoanTypeController extends Controller
{
    public function __construct(LoanType $loantype, Request $request)

    {
        $this->loantype = $loantype;
        $this->request   = $request;

    }

        public function index()
    {
        return view('pages.loanType.loantype')->with([
            
            'loantype' => $this->loantype->all()
        ]);
    }

    public function addloan()
    {
        return view('pages.loanType.addloan')->with([
            
            'loantype' => $this->loantype->all()
        ]);
    }
    
    public function addloansave()
    {
        $this->loantype->create(
            $this->request->except('_token')
            );
    
          
    }
    public function saveloan()
    {
        $this->loantype->create(
            $this->request->except('_token')
            );
    
            return Redirect::route('loantypeindex')->with([
            'success' => 'Has been Save!'
            ]);
    }
    public function updateLoan($id)
        {
            return view('pages.department.update')->with([
                'loan_type' => $this->loantype->find($id)
            ]);
        }
        
    }

