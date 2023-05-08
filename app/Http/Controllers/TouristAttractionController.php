<?php

namespace App\Http\Controllers;

use App\Models\TouristAttraction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TouristAttractionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $touristattractions = TouristAttraction::latest()->get();
        return view('admin.tempatwisata.index', compact('touristattractions'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TouristAttraction  $touristAttraction
     * @return \Illuminate\Http\Response
     */
    public function show(TouristAttraction $touristAttraction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TouristAttraction  $touristAttraction
     * @return \Illuminate\Http\Response
     */
    public function edit(TouristAttraction $touristAttraction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TouristAttraction  $touristAttraction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TouristAttraction $touristAttraction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TouristAttraction  $touristAttraction
     * @return \Illuminate\Http\Response
     */
    public function destroy(TouristAttraction $touristAttraction)
    {
        //
    }

    public function predict(){
        return view('predict.index');
    }

    public function predictProcess(Request $request)
    {
        // $file = $request->file('image');
        // $image = base64_encode($file);
        // $image = base64_encode(file_get_contents($request->file('image')));
        // // return $request->file('image');
        // // $image = base64_decode()
        // return $image;
        $image = base64_encode(file_get_contents($request->file('image')->path()));
        $hasil = TouristAttraction::select('imagebinary')->get()->pluck('imagebinary')->toArray();
        $ids = TouristAttraction::select('id')->get()->pluck('id')->toArray();
        // dd($hasil[1]['imagebinary']);
        // $response = Http::get('http://127.0.0.1:8000/api/hello');

        $response = Http::post('http://127.0.0.1:8000/api/multi-predict', [
            'query' => $image,
            'images' => $hasil,
        ]);
        // dd($response->json()[0]);
        // array_combine($ids, $names)
        // dd($ids);
        $jaraks = $response->json();
        $countries = array_map(function ($id, $jarak) {
            return [
                'id' => $id,
                'jarak' => $jarak,
            ];
        }, $ids, $jaraks);

        $sortedData = collect($countries)->sortByDesc('jarak')->values();
        // dd($sortedData);
        // dd(collect($sortedData));
        // $arr = array_combine($ids, $response->json());
        // dd($sortedData->values());
        $result = TouristAttraction::find($sortedData[0]['id']);
        $rank = $sortedData[0];
        // dd($rank);
        // return json_encode($sortedData[0]['jarak']);
        return view('predict.show',compact('result','rank'));
        // $request->validate([
        //     'name' => 'required',
        //     'kelas' => 'required',
        // ]);

        // Student::create($request->all());

        // return redirect()->route('students.index')
        //                 ->with('success','Student created successfully.');
    }
}
