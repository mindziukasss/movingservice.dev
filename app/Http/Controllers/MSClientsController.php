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
		$dataFromModel = new MSClients();
		$config = $this->listBladeData();
		$config['tableName'] = $dataFromModel->getTableName();
		$config['list'] = MSClients::get()->toArray();
		$config['ignore'] = ['created_at', 'updated_at', 'deleted_at', 'id', 'count'];

		if($config['list'] == null )
	        {
	        	return redirect()->route('app.clients.create');
	        }

		return view('partials.listIndex', $config);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /msclients/create
	 *
	 * @return Response
	 */
	public function create()
	{	
		$dataFromModel = new MSClients();
        $config['item'] = $dataFromModel->getFillable();
        $config['ignore'] = ['created_at', 'updated_at', 'deleted_at', 'id', 'count'];
        $config['route'] = 'app.clients.create';


        return view('partials.createAll', $config);
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
		
		return redirect()->route('app.clients.index');
		
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
		$config['item'] = MSClients::find($id)->toArray();
		$config['ignore'] = ['created_at', 'updated_at', 'deleted_at', 'id', 'count'] ;
		return view('partials.show', $config);
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
		$config['id'] = $id;
		$config['route'] = route('app.clients.edit',$id);
		$config['ignore'] = ['created_at', 'updated_at', 'deleted_at', 'id', 'count',] ;
		$config['item'] = MSClients::find($id)->toArray();

		return view('partials.edit', $config);
		
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
		
		
		return redirect()->route('app.clients.index');
	
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
		if (MSClients::destroy($id)) {
            return json_encode(["success" => true, "id" => $id]);
        }
	}

	private function listBladeData() {
        $config = [];
        $config['show'] = 'app.clients.show';
        $config['create'] = 'app.clients.create';
        $config['delete'] = 'app.clients.destroy';
        $config['edit'] = 'app.clients.edit';
        return $config;
    }

}