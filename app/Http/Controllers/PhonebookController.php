<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class PhonebookController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */

	// Viewing the Contacts
	public function index()
	{
		$contacts = Contact::orderBy('name')->paginate(15);
		return view('contacts.index')->with('contacts', $contacts);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */

	public function create()
	{
		return view('contacts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{

		// Validating the input
		$this->validate($request, [
			'name' => 'required',
			'number' => 'required'
		]);

		// Create Contact
		$contact = new Contact;
		$contact->name = $request->input('name');
		$contact->number = $request->input('number');

		$contact->save();

		return redirect('/')->with('success', 'Contact Created');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$contact = Contact::find($id);
		return view('contacts.show')->with('contact', $contact);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$contact = Contact::find($id);
		return view('contacts.edit')->with('contact', $contact);
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
		$contact = Contact::find($id);
		$contact->name = $request->input('name');
		$contact->number = $request->input('number');

		$contact->save();

		return redirect('/')->with('success', 'Contact Updated');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		$contact = Contact::find($id);
		$contact->delete();

		return redirect('/')->with('success', 'Contact Deleted');
	}

	// Searching the database for the name and number
	public function search(Request $request)
	{
		$search = $request->get('search');
		$contacts = Contact::where('name', 'like', '%' . $search . '%')
			->orWhere('number', 'like', '%' . $search . '%')
			->paginate(5);
		return view('contacts.index')->with('contacts', $contacts);
	}
}
