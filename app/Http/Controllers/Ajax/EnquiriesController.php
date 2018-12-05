<?php

namespace App\Http\Controllers\Ajax;

use App\Models\Enquiry;
use App\Mail\newEnquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\AjaxController;

class EnquiriesController extends AjaxController
{
    public function store(Request $request)
    {
        $enquiry = Enquiry::create($request->all());

        Mail::to($enquiry->email)->send(new newEnquiry($enquiry));

        return $this->sendResponse($enquiry, 'Your enquiry has been received.');
    }
}
