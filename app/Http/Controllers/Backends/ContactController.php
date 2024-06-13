<?php

namespace App\Http\Controllers\Backends;

use Exception;
use Illuminate\Http\Request;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = ContactMessage::latest('id')->paginate(10);
        return view('backends.contact_us.index', compact('contacts'));
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
    }
    public function replycustomer(Request $request)
    {
        try {
            $data["title"] = 'Reply back message';
            $data['message'] = $request->replymessage;
            $data['email'] = $request->customerEmail;
            Mail::send([], [], function ($message) use ($data) {
                $message->to($data['email'], $data['email'])
                    ->subject($data["title"])
                    ->setBody($data["message"]);
            });
            $output = [
                'success' => 1,
                'msg' => __('Reply Mail successfully')
            ];
        } catch (Exception $e) {
            dd($e);
            $output = [
                'success' => 0,
                'msg' => __('Something went wrong')
            ];
        }
        return redirect()->route('admin.contact.index')->with($output);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = ContactMessage::findOrFail($id);
        $contact->isRead = 1;
        $contact->save();
        return view('backends.contact_us.replysms', compact('contact'));
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
        try {
            DB::beginTransaction();
            $contact = ContactMessage::findOrFail($id);
            $contact->delete();
            $contacts = ContactMessage::latest('id')->paginate(10);
            $view = view('backends.contact_us._table', compact('contacts'))->render();

            DB::commit();
            $output = [
                'status' => 1,
                'view' => $view,
                'msg' => __('Deleted successfully')
            ];
        } catch (Exception $e) {
            DB::rollBack();
            $output = [
                'status' => 0,
                'msg' => __('Something went wrong')
            ];
        }
        return response()->json($output);
    }


    public function replysms()
    {
        return view('backends.contact_us.replysms');
    }

}
