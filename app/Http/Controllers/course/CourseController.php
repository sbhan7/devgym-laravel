<?php

namespace App\Http\Controllers\course;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $courses = Course::query()->orderByDesc('id');
        if ($request->has('search_word'))
        {
            $courses = $courses->where('title', 'LIKE', '%' . $request->search_word . '%')
                ->orWhere('description_long', 'LIKE', '%' . $request->search_word . '%');
        }
        $courses = $courses->paginate('4');
        return view('pages.course.courses', compact(['courses']));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $course = Course::query()->where('title', str_replace('_', ' ', $slug))->firstOrFail();
        return view('pages.course.course_detail', compact('course'));
    }

    public function play_video($slug,$id)
    {
        $course_video = Course::query()->where('title', str_replace('_', ' ', $slug))->firstOrFail();
        $lesson_video = Lesson::query()->where('id', '=', $id)->firstOrFail();

        return view('pages.course.course_detail_paly', compact('lesson_video', 'course_video'));

    }
}
