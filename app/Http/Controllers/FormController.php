<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cause;
use App\Models\Classification;
use App\Models\Disability;
use App\Models\Education;
use App\Models\Student;
use Illuminate\Http\Request;
use PDF;
use Dompdf\Dompdf;
use Dompdf\Options;

class FormController extends Controller
{
    public function index(Request $request)
    {
        $students = Student::with(['user','subject'])->get();
        return view('pages.form.index',compact('students'));
    }

    public function printPdfRequest($id)
    {
        // Set options for Dompdf
        $options = new \Dompdf\Options();
        $options->set('isRemoteEnabled', true); // Enable remote content
        $pdf = new \Dompdf\Dompdf($options); // Create a new instance of Dompdf
    
        // Prepare data
        $educations = Education::all();
        $classifications = Classification::all();
        $disablities = Disability::all();
        $causes = Cause::all();
    
        // Load a view that will be converted into the PDF
        $pdf->loadHtml(view('pages.form.request', compact('educations', 'classifications', 'disablities', 'causes'))->render());
    
        // Set paper size and orientation
        $pdf->setPaper('A4', 'portrait');
    
        // Render the PDF
        $pdf->render();
    
        // Set headers to display PDF in the browser
        return response($pdf->output())
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'inline; filename="request.pdf"');
    }
    
    
    
    
    

}
