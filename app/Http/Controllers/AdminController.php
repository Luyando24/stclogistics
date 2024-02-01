<?php

namespace App\Http\Controllers;
use app\Helpers\TrackingNumberHelper; // Import the TrackingNumberHelper

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Logos;
use App\Models\User;
use App\Models\users;
use App\Models\banners;
use App\Models\categories;
use App\Models\product;
use App\Models\blog;
use App\Models\contact;
use App\Models\local_parcels;
use App\Models\ShipmentUpdates;
use App\Models\updates;
use App\Models\sea_rates;

class AdminController extends Controller
{
    public function Home(){
        return view('admin.admin_dashboard');
    }

    public function NewParcels(){
        // Get the authenticated user
        $user = Auth::user();
        // Get the authenticated user's ID
        $userId = Auth::id();


        // Retrieve the new parcels from the local_parcels table
        $newParcels = local_parcels::all();

        // Retrieve user information from the users table based on the user's ID
        $userInfo = User::find($userId);

        return view('admin.new_parcels', compact('newParcels', 'user', 'userInfo'));
    }

    public function AddProduct(){
        return view('admin.add_product');
    }

    #Add new parcel

    

    public function NewParcel(Request $request)
    {
        if(Auth::id()) {
            $user = Auth::user();
    
            // Generate a tracking number with "STC" prefix
            $trackingNumber = 'STC' . $this->generateTrackingNumber();
    
            $data = new local_parcels;
    
            $data->trackingNumber = $trackingNumber;
            $data->name = $user->name;
            $data->email = $user->email;
            $data->address = $user->address;
            $data->phone = $user->phone;
            $data->user_id = $user->id;
            $data->china_address = $request->input('china_address');
            $data->destination_address = $request->input('destination_address');
            $data->local_tracking_no = $request->input('local_tracking_no');
            $data->product_info = $request->input('product_info');
            $data->qty = $request->input('qty');
            $data->product_price = $request->input('product_price');
    
            $data->save();
    
            return redirect()->back();
        } else {
            return redirect('login');
        }
    }
    
    // Helper function to generate random string
    private function generateTrackingNumber()
{
    // Generate a random 7-digit number
    return str_pad(mt_rand(1, 9999999), 7, '0', STR_PAD_LEFT);
}
    


    public function AllCategories(){
        return view('admin.categories');
    }

   public function shipmentStatus(){

            // Display the shipment status
            $data = updates::all();
            return view('tracking', compact('data'));
      
    }



    public function OrderStatus(Request $request)
{
    $trackingNumber = $request->input('tracking_number');

    // Retrieve all shipment records from the database based on the tracking number
    $shipments = updates::where('trackingNumber', $trackingNumber)->get();

    // Check if any shipment records exist
    if ($shipments->isEmpty()) {
        // Redirect to a new page with an error message
        return redirect('shipment_not_found');
    } else {
        // Display the shipment statuses
        return view('tracking', compact('shipments'));
    }
}

public function shipmentNotFound(){
    
    return view('shipment_not_found');
}
    
    




    public function updateShipment(Request $request)
    {
        // Validate form data
        
        $request->validate([
            'trackingNumber' => 'required',
            'status' => 'required',
            'status_description' => 'nullable|string',
            'status_location' => 'nullable|string',
        ]);
    
        // Create a new ShipmentUpdates instance
        $shipmentUpdates = new updates();
        $shipmentUpdates->trackingNumber = $request->input('trackingNumber');
        $shipmentUpdates->status = $request->input('status');
        $shipmentUpdates->description = $request->input('description');
        $shipmentUpdates->location = $request->input('location');
    
        // Save the new shipment status to the database
        $shipmentUpdates->save();
       
    
        // Redirect back with a success message
        return back()->withSuccess('Shipment status updated successfully.');
    }


    public function setSeaRates(){
        return view('admin.sea-rates');
    }

    public function seaRates(Request $request){

        $seaRates = new sea_rates();

        $seaRates->country = $request->input('country');
        $seaRates->first_cbm = $request->input('first_cbm');
        $seaRates->second_cbm = $request->input('second_cbm');
        $seaRates->third_cbm = $request->input('third_cbm');
        $seaRates->fourth_cbm = $request->input('fourth_cbm');

        $seaRates->save();

        return redirect()->back();
    }


























    public function EditContact(){
        $contacts=contact::all();
        return view('admin.edit_contact', compact('contacts'));
    }

    #edit contact

    public function NewContact(Request $request){
        $data = new contact;

       
        $data->address = $request->input('address');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->tel = $request->input('tel');

        $data->save();

        return redirect()->back();
    }

     #PROJECTS
     public function AllProjects(){
        return view('admin.projects');
    }

    public function NewProject(){
        return view('admin.new_project');
    }

    #Add new post

    public function AddProject(Request $request){
        $data = new projects;

        $image = $request->file('image');

        $imagename = time().'.'.$image->getClientOriginalExtension();
        $image->move('projectimages', $imagename);
        $data->image = $imagename;
        $data->title = $request->input('title');
        $data->date = $request->input('date');
        $data->details = $request->input('details');
        $data->location = $request->input('location');
        $data->size = $request->input('size');
        $data->type = $request->input('type');

        $data->save();

        return redirect()->back();
    }

    #View order
    public function ViewOrder($id){
        $new_parcel = local_parcels::find($id);

        
        return view('admin.view-order', compact('new_parcel'));
    }


   
}
