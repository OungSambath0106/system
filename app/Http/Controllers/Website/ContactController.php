<?php

namespace App\Http\Controllers\Website;

use Exception;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('website.contact-us.contact-us');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with(['success' => false, 'msg' => __('Invalid form input')]);
        }
        try {
            DB::beginTransaction();
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message,
                'isRead' => '0'
            ];
            // HTML content for the email body
            $htmlContent = "<p>Hello,</p>";
            $htmlContent .= "<p>You have received a new message:</p>";
            $htmlContent .= "<p><strong>Name:</strong> {$data['name']}</p>";
            $htmlContent .= "<p><strong>Email:</strong> {$data['email']}</p>";
            $htmlContent .= "<p><strong>Message:</strong> {$data['message']}</p>";

            $data['email_recipient'] = env('MAIL_FROM_ADDRESS');
            Mail::send([], [], function ($message) use ($data, $htmlContent) {
                $message->to($data['email_recipient'])
                    ->from($data["email"], $data["name"])
                    ->subject('New Message from ' . $data["name"])
                    ->setBody($htmlContent, 'text/html');
            });

            $data = ContactMessage::create($request->all());
            DB::commit();
            $output = [
                'success' => true,
                'msg' => __('Your message has been sent!')
            ];
        } catch (Exception $e) {
            DB::rollBack();
            $output = [
                'success' => false,
                'msg' => __('Something went wrong')
            ];
        }

        return redirect()->back()->with($output);
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
