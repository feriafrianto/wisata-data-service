<?php

namespace App\Http\Controllers;

use App\Models\TouristAttraction;
use App\Models\TourismImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\CloudinaryStorage;

class TouristAttractionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $touristattractions = TouristAttraction::with('tourismimages')->latest()->get();
        return view('admin.tempatwisata.index', compact('touristattractions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tempatwisata.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = base64_encode(file_get_contents($request->file('images')[0]->path()));
        $touristattraction = TouristAttraction::create([
            'name' => $request->name,
            'description' => $request->description,
            'imagebinary' => $image,
            'operational_hour' => $request->operational_hour,
            'short_address' => $request->short_address,
            'address' => $request->address,
            'ticket_price' => $request->ticket_price,
            'contact' => $request->contact,
            'latitude' => $request->latitude,
            'longtitude' => $request->longtitude
        ]);
        if($request->hasfile('images')){
            foreach ($request->file('images') as $imagefile) {
                $result = CloudinaryStorage::upload($imagefile->getRealPath(), $imagefile->getClientOriginalName());
                TourismImage::create([
                    'image_link' => $result,
                    'tourist_attraction_id' => $touristattraction->id
                ]);
            }
        }
        return redirect()->route('tourist_attractions.index')->withSuccess('Berhasil Menambahkan Tempat Wisata');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TouristAttraction  $touristAttraction
     * @return \Illuminate\Http\Response
     */
    public function show(TouristAttraction $touristAttraction)
    {
        return view('admin.tempatwisata.show',compact('touristAttraction'));
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
        $image = base64_encode(file_get_contents($request->file('image')->path()));
        $hasil = TouristAttraction::select('imagebinary')->get()->pluck('imagebinary')->toArray();
        $ids = TouristAttraction::select('id')->get()->pluck('id')->toArray();

        $response = Http::post('http://127.0.0.1:8000/api/multi-predict', [
            'query' => $image,
            'images' => $hasil,
        ]);
        $jaraks = $response->json();
        $countries = array_map(function ($id, $jarak) {
            return [
                'id' => $id,
                'jarak' => $jarak,
            ];
        }, $ids, $jaraks);

        $sortedData = collect($countries)->sortByDesc('jarak')->values();
        $result = TouristAttraction::find($sortedData[0]['id']);
        $rank = $sortedData[0];
        return view('predict.show',compact('result','rank'));
    }
}
