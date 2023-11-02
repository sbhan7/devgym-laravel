<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search_word'))
        {
            $courses = Course::query()->orderByDesc('id');
            $courses = $courses->where('title', 'LIKE', '%' . $request->search_word . '%')
                ->orWhere('description_long', 'LIKE', '%' . $request->search_word . '%');
            $courses = $courses->paginate('4');

            return view('pages.course.courses', compact('courses'));
        }
        $courses = Course::all();
        return view('pages.home', compact('courses'));
    }
}
