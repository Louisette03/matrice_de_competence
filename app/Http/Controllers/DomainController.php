<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use App\Models\Module;
use Illuminate\Http\Request;

class DomainController extends Controller
{
    //
    public function search(Request $request)
    {
        $key = trim($request->get('q'));

        $domains = Domain::query()
            ->where('libel', 'like', "%{$key}%")
            ->orWhere('description', 'like', "%{$key}%")
            ->orderBy('created_at', 'desc')
            ->get();

        $modules = Module::all();


        $recent_domains = Domain::query()
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        return view('search', [
            'key' => $key,
            'domains' => $domains,
            'modules' => $modules,
            'recent_domains' => $recent_domains
        ]);
    }
}
