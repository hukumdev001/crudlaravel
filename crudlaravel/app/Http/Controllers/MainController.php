<?php

namespace App\Http\Controllers;
use App\Buku;

use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
        {
            $buku = Buku::all();
            return view('home', ['buku' => $buku]);
        }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            //'pangarang' => 'required',


        ]);

        $buku = new Buku;
        $buku->judul = $request->input('judul');
        $buku->penerbit = $request->input('penerbit');

        $buku->tahun_terbit = $request->input('tahun_terbit');

        $buku->pengarang = $request->input('pengarang');
        $buku->save();

        return redirect('/')->with('info', 'Buku stored successfully');
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
        $this->validate($request, [
            'judul' => 'required',
            'penerbit' => 'required',
            'tehun_terbit' => 'required',
            //'pengarang' => 'required'

        ]);


        $data = array(
            'judul' => $request->input('judul'),
            'penerbit' => $request->input('penerbit'),
            'tahun_terbit' => $request->input('tahun_terbit'),
            'pengarang' => $request->input('pengarang')


        );

        Buku::where('id', $id)->update($data);
        return redirect('/')->with('info', 'Buku edited successfully');
    }


    public function view($id)
    {
        $buku = Buku::find($id);
        return view('view', ['buku' => $buku]);
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
        $buku = Buku::find($id);
        return view('update', ['buku' =>$buku]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Buku::where('id', $id)->delete();
        return redirect('/')->with('info', 'Buku deleted successfully');
    }
}
