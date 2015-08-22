<?php namespace App\Http\Controllers;

use App\Asset;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;

class AssetController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view("assets.create");
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$asset = new Asset;

		$asset_screenshot = $request->file("screenshot");
		$asset_file = $request->file("asset");

		$asset_screenshot->move(env("USER_STORAGE_PATH") . "/" . Auth::user()->username . "/screenshots/", $asset_screenshot->getClientOriginalName());
		$asset_file->move(env("USER_STORAGE_PATH") . "/" . Auth::user()->username . "/assets/", $asset_file->getClientOriginalName());

		$asset->type = $request->input("type");
		$asset->name = $request->input("name");
		$asset->description = $request->input("description");
		$asset->screenshot_path = env("USER_STORAGE_PATH") . "/" . Auth::user()->username . "/screenshots/" . $asset_screenshot->getClientOriginalName();
		$asset->asset_path = env("USER_STORAGE_PATH") . "/" . Auth::user()->username . "/assets/" . $asset_file->getClientOriginalName();

		$asset->save();

		return redirect("/");
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return view("assets.show");
	}

	/**
	 * Show the form for editing the specified resource.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
