<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Vacancy;

class VacancyController extends Controller
{
    public function index()
    {
        $vacancies = Vacancy::all();
        return view('vacancies.index', compact('vacancies'));
    }

    public function  create(Request $request): View
    {
        return view('vacancies.create');
    }

    public function store(Request $request)
    {
        // Validate and create the vacancy
        $request->validate([
            'job_title' => 'required|string|max:255',
            'employment_category' => 'required|string|max:255',
            'employment_type' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);

        Vacancy::create($request->all());

        // Redirect back or to another page
        return redirect()->route('vacancies.index')->with('success', 'Vacancy created successfully!');
    }

    // Show a single vacancy
    public function show($id): View
    {
        $vacancy = Vacancy::findOrFail($id);
        return view('vacancies.show', compact('vacancy'));
    }

    public function edit($id): View
    {
        $vacancy = Vacancy::findOrFail($id);
        return view('vacancies.edit', compact('vacancy'));
    }


    public function update(Request $request, $id): RedirectResponse
    {
        // Validate and update the vacancy
        $request->validate([
            'job_title' => 'required|string|max:255',
            'employment_category' => 'required|string|max:255',
            'employment_type' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);

        $vacancy = Vacancy::findOrFail($id);
        $vacancy->update($request->all());

        return redirect()->route('vacancies.index')->with('success', 'Vacancy updated successfully!');
    
}
          
        public function destroy($id): RedirectResponse
        {
            $vacancy = Vacancy::findOrFail($id);
            $vacancy->delete();
    
            return redirect()->route('vacancies.index')->with('success', 'Vacancy deleted successfully!');
        }

}