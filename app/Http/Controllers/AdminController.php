<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Home;
use App\Models\Mywork;
use App\Models\Portfoliosec;
use App\Models\Profil;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function redirect()
    {
        //return view('admin.adminhome');
        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {
            return view('admin.adminhome');
        } else {
            return view('home');
        }
    }

    //home
    public function homes()
    {
        $data = Home::where('id', 1)->first();

        return view('admin.homes', compact('data'));
    }

    public function store(Request $request)
    {
        $data = new Home;
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('homeimage', $imagename);

        $data->image = $imagename;
        $data->name = $request->name;
        $data->position = $request->position;
        $data->about = $request->about;
        $data->save();

        return redirect()->back();
    }

    public function edit($id)
    {
        $data = Home::find($id);

        return view('admin.edit', ['data' => $data]);
    }

    public function update(Request $request)
    {
        $data = Home::find($request->id);
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('homeimage', $imagename);
        $data->image = $imagename;
        $data->name = $request->name;
        $data->position = $request->position;
        $data->about = $request->about;
        $data->save();

        return redirect('homes');
    }

    //my work
    public function mywork()
    {
        $data = Mywork::all();

        return view('admin.mywork', compact('data'));
    }

    public function storemywork(Request $request)
    {
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('workimage', $imagename);

        $data = new Mywork;
        $data->image = $imagename;
        $data->title = $request->title;
        $data->about = $request->about;
        $data->site = $request->site;
        $data->save();

        return redirect()->back();
    }

    public function editmywork($id)
    {
        $data = Mywork::find($id);

        return view('admin.editmywork', ['data' => $data]);
    }

    public function updatemywork(Request $request)
    {
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('workimage', $imagename);

        $data = Mywork::find($request->id);
        $data->image = $imagename;
        $data->title = $request->title;
        $data->about = $request->about;
        $data->site = $request->site;
        $data->save();

        return redirect('mywork');
    }

    public function destroy($id)
    {
        $data = Mywork::find($id);
        $data->delete();

        return redirect('mywork');
    }

    //portfolio

    public function myportfolio()
    {
        $data = Portfoliosec::all();

        return view('admin.portfolio', compact('data'));
    }

    public function storeportfolio(Request $request)
    {
        $data = new Portfoliosec;
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('portfolioimage', $imagename);
        $data->image = $imagename;
        $data->name = $request->name;
        $data->about = $request->about;
        $data->save();

        return redirect()->back();
    }

    public function editportfolio($id)
    {
        $data = Portfoliosec::find($id);

        return view('admin.editportfolio', ['data' => $data]);
    }

    public function updateportfolio(Request $request)
    {
        $data = Portfoliosec::find($request->id);
        $image = $request->images;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->images->move('portfolioimage', $imagename);
        $data->image = $imagename;
        $data->name = $request->name;
        $data->about = $request->about;
        $data->save();

        return redirect('homes');
    }

    public function destroyportfolio($id)
    {
        $data = Portfoliosec::find($id);
        $data->delete();

        return redirect('portfolio');
    }

    //profil

    public function myprofil()
    {
        $data = Profil::where('id', 1)->first();

        return view('admin.profil', compact('data'));
    }

    public function storeprofil(Request $request)
    {
        $data = new Profil;
        $data->name = $request->name;
        $data->birthday = $request->birthday;
        $data->adres = $request->adres;
        $data->phone = $request->tel;
        $data->email = $request->email;
        $data->website = $request->website;
        $data->save();

        return redirect()->back();
    }

    public function editprofil($id)
    {
        $data = Profil::find($id);

        return view('admin.editprofil', ['data' => $data]);
    }

    public function updateprofil(Request $request)
    {
        $data = Profil::find($request->id);
        $data->name = $request->name;
        $data->birthday = $request->birthday;
        $data->adres = $request->adres;
        $data->phone = $request->tel;
        $data->email = $request->email;
        $data->website = $request->website;
        $data->save();

        return redirect('homes');
    }

    public function destroyprofil($id)
    {
        $data = Profil::find($id);
        $data->delete();

        return redirect('profil');
    }

    //skill

    public function myskill()
    {
        $data = Skill::all();

        return view('admin.skill', compact('data'));
    }

    public function storeskill(Request $request)
    {
        $data = new Skill;
        $data->about = $request->about;
        $data->skill = $request->skill;
        $data->save();

        return redirect()->back();
    }

    public function editskill($id)
    {
        $data = Skill::find($id);

        return view('admin.editskill', ['data' => $data]);
    }

    public function updateskill(Request $request)
    {
        $data = Skill::find($request->id);
        $data->about = $request->about;
        $data->skill = $request->skill;

        $data->save();

        return redirect('homes');
    }

    public function destroyskill($id)
    {
        $data = Skill::find($id);
        $data->delete();

        return redirect('homes');
    }

    //haqimizda

    public function myabout()
    {
        $data = About::where('id', 1)->first();

        return view('admin.about', compact('data'));
    }

    public function storeabout(Request $request)
    {
        $request->validate([

            'name' => 'required',

        ]);

        $data = new About;
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('aboutimage', $imagename);

        $data->image = $imagename;
        $data->position = $request->position;
        $data->about = $request->about;
        $data->save();

        return redirect()->back();
    }

    public function editabout($id)
    {
        $data = About::find($id);

        return view('admin.editabout', ['data' => $data]);
    }

    public function updateabout(Request $request)
    {
        $data = About::find($request->id);

        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('aboutimage', $imagename);

        $data->image = $imagename;
        $data->position = $request->position;
        $data->about = $request->about;

        $data->save();

        return redirect('homes');
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
