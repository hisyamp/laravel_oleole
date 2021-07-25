<?php

namespace App\Http\Controllers;
use App\Models\Travel;
use App\Models\City;
use App\Models\Category;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $travel = Travel::paginate(10);
        return view('admin.travel.index',compact('travel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $city = City::all();
        $category = Category::all();
        return view('admin.travel.create',compact('category','city'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'category_id' => 'required',
            'city_id' => 'required',
            'harga' => 'required',
            'alamat' => 'required',
            'jamBuka' => 'required',
            'aksesKendaraan' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required'
        ]);

        $gambar = $request->gambar;
        $new_gambar = time().$gambar->getClientOriginalName();

        $post = Travel::create([
            'nama' => $request->nama,
            'category_id' => $request->category_id,
            'city_id' => $request->city_id,
            'harga' => $request->harga,
            'alamat' => $request->alamat,
            'jamBuka' => $request->jamBuka,
            'deskripsi' => $request->deskripsi,
            'aksesKendaraan' => $request->aksesKendaraan,
            'gambar' => 'public/uploads/posts/'.$new_gambar,
            
        ]);

        $gambar->move('public/uploads/posts/',$new_gambar);

        return redirect()->route('travel.index')->with('success','Data berhasil ditambahkan!');
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
        $category = Category::all();
        $city = City::all();
        $travel = Travel::findOrFail($id);
        return view('admin.travel.edit',compact('travel','city','category'));
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
        $this->validate($request, [
            'nama' => 'required',
            'category_id' => 'required',
            'city_id' => 'required',
            'harga' => 'required',
            'alamat' => 'required',
            'jamBuka' => 'required',
            'aksesKendaraan' => 'required',
            'deskripsi' => 'required',
            
        ]);
    
        $travel = Travel::findOrFail($id);
        if($request->has('gambar')){
            $gambar = $request->gambar;
            $new_gambar = time().$gambar->getClientOriginalName();
            $gambar->move('public/uploads/posts/',$new_gambar);

            $travel_data = [
            'nama' => $request->nama,
            'category_id' => $request->category_id,
            'city_id' => $request->city_id,
            'harga' => $request->harga,
            'alamat' => $request->alamat,
            'jamBuka' => $request->jamBuka,
            'deskripsi' => $request->deskripsi,
            'aksesKendaraan' => $request->aksesKendaraan,
            'gambar' => 'public/uploads/posts/'.$new_gambar,
        ];
        }
        else{
        $travel_data = [
            'nama' => $request->nama,
            'category_id' => $request->category_id,
            'city_id' => $request->city_id,
            'harga' => $request->harga,
            'alamat' => $request->alamat,
            'jamBuka' => $request->jamBuka,
            'deskripsi' => $request->deskripsi,
            'aksesKendaraan' => $request->aksesKendaraan,
        ];
        }
        
        $travel->update($travel_data);


        return redirect()->route('travel.index')->with('success','Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $travel = Travel::findOrFail($id);
        $travel->delete();

        return redirect()->back()->with('success','Data berhasil dihapus,cek di bagian trash jika ingin restore');
    }
     public function tampil_hapus(){

        $travel = Travel::onlyTrashed()->paginate(10);
        return view('admin.travel.hapus',compact('travel'));
    }
    public function restore($id){
        $travel = Travel::withTrashed()->where('id',$id)->first();
        $travel->restore();

        return redirect()->back()->with('success','Post berhasil di restore,cek bagian list post');
    }
    public function kill($id){
        $travel = Travel::withTrashed()->where('id',$id)->first();
        $travel->forceDelete();

        return redirect()->back()->with('success','Post berhasil di hapus permanen!');
    }
}
