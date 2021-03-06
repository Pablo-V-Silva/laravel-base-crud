<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class AdminComicController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //
    $comics = Comic::all();
    return view('admin.index', compact('comics'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('admin.upload');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {

    $validateData = $request->validate([
      'title' => 'required|unique:comics|max:255',
      'description' => 'required',
      'thumb' => 'required',
      'price' => 'required',
      'series' => 'required',
      'date' => 'required',
      'type' => 'required',
    ]);

    $comic = Comic::create($validateData);


    /* $new_comic = new Comic();
    $new_comic->title = $request->title;
    $new_comic->description = $request->description;
    $new_comic->thumb = $request->thumb;
    $new_comic->price = $request->price;
    $new_comic->series = $request->series;
    $new_comic->date = $request->date;
    $new_comic->type = $request->type;
    $new_comic->save(); */

    return redirect()->route('admin.index')->with('message', 'Hai creato il Comic: ' . $comic->series);
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Comic  $comic
   * @return \Illuminate\Http\Response
   */
  public function show(Comic $comic)
  {
    //
    return view('admin.show', compact('comic'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Comic  $comic
   * @return \Illuminate\Http\Response
   */
  public function edit(Comic $comic)
  {
    return view('admin.edit', compact('comic'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Comic  $comic
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Comic $comic)
  {

    $validateData = $request->validate([
      'title' => 'required|max:255',
      'description' => 'nullable',
      'thumb' => 'nullable',
      'price' => 'nullable',
      'series' => 'nullable',
      'date' => 'nullable',
      'type' => 'nullable',

    ]);

    $comic->update($validateData);

    return redirect()->route('admin.index')->with('message', 'Hai modificato il Comic: ' . $comic->series);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Comic  $comic
   * @return \Illuminate\Http\Response
   */
  public function destroy(Comic $comic)
  {
    $series = $comic->series;
    $comic->delete();
    return redirect()->route('admin.index')->with('error', 'Hai eliminato il Comic: ' . $series);
  }
}
