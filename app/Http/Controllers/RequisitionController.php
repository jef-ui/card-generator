<?php

namespace App\Http\Controllers;

use App\Models\Requisition;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class RequisitionController extends Controller
{
    public function index()
    {
        return view('requisitions.index');
    }

    public function create()
    {
        return view('requisitions.create');
    }

    // Store the card data and redirect to preview page
    public function store(Request $request)
    {
        // Validate input data
        $data = $request->validate([
            'code_card' => 'required',
            'division_card' => 'required',
            'office_card' => 'required',
            'liter_card' => 'required',
            'gasoline_card' => 'required',
            'num_card' => 'required|numeric',
            'amount_card' => 'required|numeric',
            'balance_card' => 'required|numeric',
            'invoice_card' => 'required',
            'plate_number' => 'required',
            'car_card' => 'required',
            'purpose_card' => 'required',
            'request_name_card' => 'required',
            'received_name_card' => 'required',
            'position_card' => 'required',
            'date_card' => 'required|date',
        ]);

        // Store the card data
        $card = Requisition::create($data);

        // Store card data in session for preview
        session(['card' => $card]);

        // Redirect to preview page where you can download the PDF
        return redirect()->route('requisition.preview', ['id' => $card->id]);
    }

    public function preview ($id)
    {
        // Fetch the requisition data
        $card = Requisition::findOrFail($id);
    
        // Pass the data to the preview view
        return view('requisitions.preview', compact('card'));
    }
    
    
    public function generatePDF($id)
    {
        $card = Requisition::findOrFail($id);
    
        $pdf = Pdf::loadView('requisitions.card-template', compact('card'))
          ->setPaper('A4', 'portrait'); // or 'landscape' if your table is wide
    
        return $pdf->download('card-info-' . $card->id . '.pdf');
    }
    
    

    
}
