<?php

class NotesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /notes
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('notes.index');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /notes/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /notes
	 *
	 * @return Response
	 */
	public function store()
	{

		Note::create(['note' => Input::get('note')]);
		return Response::json(array('success' => true));
	}

	/**
	 * Display the specified resource.
	 * GET /notes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//http://fuckyeahmarkdown.com/#api
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /notes/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /notes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /notes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}