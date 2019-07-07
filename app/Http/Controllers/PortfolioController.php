<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Illuminate\Http\Request;
use App\User;
use Auth;

class PortfolioController extends Controller
{
    public function index() {
        $user = Auth::user();

        $portfolio = Portfolio::find($user->id);

        return view('portfolio')->with('portfolio', $portfolio);
    }

    public function viewPortfolio() {
        $user = Auth::user();

        $portfolio = Portfolio::find($user->id);

        if ($portfolio == null) {
            return view('portfolio');
        }

        return view('viewportfolio')->with('portfolio', $portfolio);
    }

    public function update() {
        Portfolio::where('id', request('portid'))->update([
            'skills' => request('skills'),
            'employer_one_name' => request('employer_one_name'),
            'employer_one_start' => request('employer_one_start'),
            'employer_one_end' => request('employer_one_end'),
            'employer_one_duties' => request('employer_one_duties'),
            'employer_two_name' => request('employer_two_name'),
            'employer_two_start' => request('employer_two_start'),
            'employer_two_end' => request('employer_two_end'),
            'employer_two_duties' => request('employer_two_duties'),
            'employer_three_name' => request('employer_three_name'),
            'employer_three_start' => request('employer_three_start'),
            'employer_three_end' => request('employer_three_end'),
            'employer_three_duties' => request('employer_three_duties'),
            'employer_four_name' => request('employer_four_name'),
            'employer_four_start' => request('employer_four_start'),
            'employer_four_end' => request('employer_four_end'),
            'employer_four_duties' => request('employer_four_duties'),
            'employer_five_name' => request('employer_five_name'),
            'employer_five_start' => request('employer_five_start'),
            'employer_five_end' => request('employer_five_end'),
            'employer_five_duties' => request('employer_five_duties'),
            'school_name' => request('school_name'),
            'school_start' => request('school_start'),
            'school_end' => request('school_end'),
            'degree' => request('degree')
        ]);

        $portfolio = Portfolio::find(request('portid'));

        return view('viewportfolio')->with('portfolio', $portfolio);
    }
}
