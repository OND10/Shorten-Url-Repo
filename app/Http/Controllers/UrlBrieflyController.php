<?php

namespace App\Http\Controllers;

use App\Http\Requests\Dashboard\UrlCreateRequest;
use App\Models\BriefUrl;
use Illuminate\Http\Request;

class UrlBrieflyController extends Controller
{
    public function index()
    {
        $urls = BriefUrl::paginate(10);
        // dd($urls);
        return view('dashboard.urls.index',compact('urls'));
    }

    public function create(UrlCreateRequest $request)
    {
        $data['orignlink'] = $request->orignlink;
        $data['abbreviatedlink'] = \Illuminate\Support\Str::random(6);
        // dd($request);
        BriefUrl::create($data);
    
        return redirect()->route('dashboard.urls.index');
    }

    public function show($code)
    {
        $row = BriefUrl::where('abbreviatedlink',$code)->firstOrFail();
        $row->visitors_count += 1;
        $row->save();

        return redirect($row->orignlink);
    }
}
