<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Http\Requests\DocumentFormRequest;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = Document::all();
        return view('documents.index', compact('documents'));
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
    public function store(DocumentFormRequest $request)
    {
         if ($request->hasFile('cv')) {
            $fileNameWithExt = $request->file('cv')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('cv')->getClientOriginalExtension();

            $cv = $filename.'_'.time().'.'.$extension;
            $path = $request->file('cv')->storeAs('public/cv', $cv);
        } else {
            $cv = 'no-file.pdf';
        }
         if ($request->hasFile('guarantor_form')) {
            $fileNameWithExt = $request->file('guarantor_form')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('guarantor_form')->getClientOriginalExtension();

            $guarantor_form = $filename.'_'.time().'.'.$extension;
            $path = $request->file('guarantor_form')->storeAs('public/documents', $guarantor_form);
        } else {
            $guarantor_form = 'no-file.pdf';
        }
        if ($request->hasFile('refone')) {
            $fileNameWithExt = $request->file('refone')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('refone')->getClientOriginalExtension();

            $refone = $filename.'_'.time().'.'.$extension;
            $path = $request->file('refone')->storeAs('public/documents', $refone);
        } else {
            $refone = 'no-file.pdf';
        }

         if ($request->hasFile('reftwo')) {
            $fileNameWithExt = $request->file('reftwo')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('reftwo')->getClientOriginalExtension();

            $reftwo = $filename.'_'.time().'.'.$extension;
            $path = $request->file('reftwo')->storeAs('public/documents', $reftwo);
        } else {
            $reftwo = 'no-file.pdf';
        }

         if ($request->hasFile('degree')) {
            $fileNameWithExt = $request->file('degree')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('degree')->getClientOriginalExtension();

            $degree = $filename.'_'.time().'.'.$extension;
            $path = $request->file('degree')->storeAs('public/documents', $degree);
        } else {
            $degree = 'no-file.pdf';
        }

         if ($request->hasFile('licence')) {
            $fileNameWithExt = $request->file('licence')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('licence')->getClientOriginalExtension();

            $licence = $filename.'_'.time().'.'.$extension;
            $path = $request->file('licence')->storeAs('public/documents', $licence);
        } else {
            $licence = 'no-file.pdf';
        }

        if ($request->hasFile('drivers_licence')) {
            $fileNameWithExt = $request->file('drivers_licence')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('drivers_licence')->getClientOriginalExtension();

            $drivers_licence = $filename.'_'.time().'.'.$extension;
            $path = $request->file('drivers_licence')->storeAs('public/documents', $drivers_licence);
        } else {
            $drivers_licence = 'no-file.pdf';
        }

        if ($request->hasFile('identity')) {
            $fileNameWithExt = $request->file('identity')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('identity')->getClientOriginalExtension();

            $identity = $filename.'_'.time().'.'.$extension;
            $path = $request->file('identity')->storeAs('public/documents', $identity);
        } else {
            $identity = 'no-file.pdf';
        }

         if ($request->hasFile('photo')) {
            $fileNameWithExt = $request->file('photo')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('photo')->getClientOriginalExtension();

            $photo = $filename.'_'.time().'.'.$extension;
            $path = $request->file('photo')->storeAs('public/photos', $photo);
        } else {
            $photo = 'no-file.pdf';
        }

         if ($request->hasFile('proof_add_one')) {
            $fileNameWithExt = $request->file('proof_add_one')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('proof_add_one')->getClientOriginalExtension();

            $proof_add_one = $filename.'_'.time().'.'.$extension;
            $path = $request->file('proof_add_one')->storeAs('public/documents', $proof_add_one);
        } else {
            $proof_add_one = 'no-file.pdf';
        }

         if ($request->hasFile('proof_add_two')) {
            $fileNameWithExt = $request->file('proof_add_two')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('proof_add_two')->getClientOriginalExtension();

            $proof_add_two = $filename.'_'.time().'.'.$extension;
            $path = $request->file('proof_add_two')->storeAs('public/documents', $proof_add_two);
        } else {
            $proof_add_two = 'no-file.pdf';
        }

        $document = Document::create([
            'fullname' => $request->fullname,
            'cv' => $cv,
            'guarantor_form' => $guarantor_form,
            'refone' => $reftwo,
            'reftwo' => $reftwo,
            'degree' => $degree,
            'licence' => $licence,
            'identity' => $identity,
            'drivers_licence' => $drivers_licence,
            'photo' => $photo,
            'proof_add_one' => $proof_add_one,
            'proof_add_two' => $proof_add_two

        ]);

        return redirect()->route('upload-document')->with('success', 'Your Documents Have Been Submitted ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        return view('documents.show', compact('document'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {
        $document->delete();

        return back()->with('success', 'Document Deleted');
    }
}
