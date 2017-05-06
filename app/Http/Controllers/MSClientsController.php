<?php namespace App\Http\Controllers;

use App\Models\MSClients;
use Illuminate\Routing\Controller;

class MSClientsController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /msclients
	 *
	 * @return Response
	 */
	public function index()
	{
		$config['clients'] = MSClients::all();

		return view('client.index', $config);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /msclients/create
	 *
	 * @return Response
	 */
	public function create()
	{
        $config['clients'] = MSClients::all();

        return view('client.create', $config);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /msclients
	 *
	 * @return Response
	 */
	public function store()
	{
		$config['clients'] = MSClients::all();
		$data = request()->all();
		
		MSClients::create(array(
		'name' => $data['name'],
		'phone_number' => $data['phone_number'],
		'address' => $data['address'],
		'type' => $data['type'],
		'sum' => $data['sum'],
		'comment' => $data['comment']
		));
		
		return view('client.create', $config);
		
	}

	/**
	 * Display the specified resource.
	 * GET /msclients/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$config['client'] = MSClients::find($id);
		return view('client.show', $config);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /msclients/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$config['client'] = MSClients::find($id);
		
		$config['route'] = route('client.edit',$id);
		
		return view('client.edit', $config);
		
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /msclients/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{	
		$config = MSClients::find($id);
		$data = request()->all();
		
		$config->update([
		'name' => $data['name'],
		'phone_number' => $data['phone_number'],
		'address' => $data['address'],
		'type' => $data['type'],
		'sum' => $data['sum'],
		'comment' => $data['comment']
		]);
		
		
		return redirect()->route('clients');
	
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /msclients/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		MSClients::destroy($id);
		return redirect()->route('clients');
	}

}