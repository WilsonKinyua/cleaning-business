<?php

namespace App\Http\Controllers\HomePage;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Booking;
use App\Models\Category;
use App\Models\Company;
use App\Models\Service;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $companies  = Company::all();
        $services = Service::all();

        return view("homepage.home",compact('categories','companies','services'));
    }

    public function companyDetails($id) {
        $categories = Category::all();
        $company = Company::findOrFail($id);
        $services = Service::where('company_name_id','=',$id)->get();
        return view('homepage.company-details',compact('company','services','categories'));

    }

    public function quoteAdd(Request $request) {
        $categories = Category::all();
        $quote = Booking::create($request->all());

        return redirect()->back()->with('success','Quote sent successfully');
    }

    public function service($id) {
        $categories = Category::all();
        $service = Service::findOrFail($id);
        return view('homepage.service-details',compact('service','categories'));
    }

    public function emailSend(Request $request) {
        $sub = Subscriber::create($request->all());
        return redirect()->back()->with('success','Email added successfully');
    }

    public function about() {
        $about = AboutUs::all();
        $categories = Category::all();
        return view('homepage.about',compact('about','categories'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
