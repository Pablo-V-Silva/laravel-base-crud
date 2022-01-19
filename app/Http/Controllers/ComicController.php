<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
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
    return view('comic_page.index', compact('comics'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('comic_page.upload');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $new_comic = new Comic();
    $new_comic->title = $request->title;
    $new_comic->description = $request->description;
    $new_comic->thumb = $request->thumb;
    $new_comic->price = $request->price;
    $new_comic->series = $request->series;
    $new_comic->date = $request->date;
    $new_comic->type = $request->type;
    $new_comic->save();

    return redirect()->route('comics');
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
    return view('comic_page.show', compact('comic'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Comic  $comic
   * @return \Illuminate\Http\Response
   */
  public function edit(Comic $comic)
  {
    //
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
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Comic  $comic
   * @return \Illuminate\Http\Response
   */
  public function destroy(Comic $comic)
  {
    //
  }
}
