<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;

class VacancyController extends Controller
{
    public function index()
    {
        $vacancies = Vacancy::paginate(10);
        return view('frontend.vacancy.vacancy', compact('vacancies'));
    }

    public function show($id)
    {
        $vacancy = Vacancy::findOrFail($id);
        return view('frontend.vacancy.vacancy_show', compact('vacancy'));
    }
}
