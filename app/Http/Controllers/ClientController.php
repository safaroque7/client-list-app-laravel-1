<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function backHand(){
        return view('back-hand');
    }

    // for store files
    public function ourFileStore(Request $request){

        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'project' => 'required',
            'facebook_review' => 'required',
            'google_review' => 'required',
            'page_number' => 'required',
            
        ]);

        $client = new Client;

        $client-> name = $request->name;
        $client-> phone = $request->phone;
        $client-> email = $request->email;
        $client-> address = $request->address;
        $client-> project = $request->project;
        $client-> facebook_review = $request->facebook_review;
        $client-> google_review = $request->google_review;
        $client-> page_number = $request->page_number;

        $client->save();
        
        return redirect()->back()->with('success', 'Your post has been posted successfully');
    }

    // edit data
    public function editFile($id){
        $clientInfo = Client::findOrFail($id);
        return view('edit', ['clientInfoSingle' => $clientInfo]);
        $clientInfo->save();

    }

    // update file
    public function updateFile($id, Request $request){
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'project' => 'required',
            'facebook_review' => 'required',
            'google_review' => 'required',
            'page_number' => 'required',
            
        ]);

        $clientUpdateInfo = Client::findOrFail($id);

        $clientUpdateInfo-> name = $request->name;
        $clientUpdateInfo-> phone = $request->phone;
        $clientUpdateInfo-> email = $request->email;
        $clientUpdateInfo-> address = $request->address;
        $clientUpdateInfo-> project = $request->project;
        $clientUpdateInfo-> facebook_review = $request->facebook_review;
        $clientUpdateInfo-> google_review = $request->google_review;
        $clientUpdateInfo-> page_number = $request->page_number;

        $clientUpdateInfo->save();
        
        return redirect()->back()->with('success', 'Your post has been updated successfully');
    }

    // delete a post
    public function deleteFile($id){
        $clientDataDelete = Client::findOrFail($id);
        $clientDataDelete->delete();

        return redirect()->back()->with('success', 'Your client information has been deleted successfully');
    }

    //show single post
    public function singleView($id){
        $clientSingleData = Client::findOrFail($id);
        return view('single', ['clientSingleData' => $clientSingleData]);
    }
}