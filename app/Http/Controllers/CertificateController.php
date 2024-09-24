<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Http\Requests\StoreCertificateRequest;
use App\Http\Requests\UpdateCertificateRequest;
use Barryvdh\DomPDF\Facade\Pdf;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(StoreCertificateRequest $request)
    {

        return view('tt');
        // $data = [
        //     'image' => public_path('cert.png'),
        //     'request' => $request

        // ];
        // $pdf = PDF::loadview('tem', $data)->setPaper(array(0, 0, 842, 596))->set_option('isHtml5ParserEnabled', true);
        // return $pdf->download('invoice.pdf');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tem');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCertificateRequest $request)
    {


        // dd(public_path('Lateef\Lateef-Bold.ttf'));


        if ($request->submit1 == 55) {

            $data = [
                'image' => public_path('cert.png'),
                'request' => $request
            ];



            $pdf = Pdf::loadview('tem', $data)->setPaper(array(0, 0, 842, 596))->set_option('isHtml5ParserEnabled', true);
            return $pdf->stream();
        } else {


            return view('test', compact('request'));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Certificate $certificate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Certificate $certificate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCertificateRequest $request, Certificate $certificate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Certificate $certificate)
    {
        //
    }
}
