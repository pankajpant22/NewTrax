<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Illuminate\Http\Request;
use App\Http\Services\PortfolioService;
use App\Http\Services\UserService;


class PortfolioController extends Controller
{
    private $portfolioService;
    private $userService;

    public function __construct(PortfolioService $portfolioService, UserService $userService) {
        $this->portfolioService = $portfolioService;
        $this->userService = $userService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->userService->getRecord();
        $portfolio = $data->portfolio;
        $education = !is_null($portfolio) ? $portfolio->education:null;
        $skills = !is_null($portfolio) ? $portfolio->skill: null;
        $lang = !is_null($portfolio) ? $portfolio->language: null;
        $tools = !is_null($portfolio) ? $portfolio->tool: null;
        $projects = !is_null($portfolio) ? $portfolio->project: null;
        $volunteer = !is_null($portfolio) ? $portfolio->volunteering: null;
        $career = !is_null($portfolio) ? $portfolio->career: null;
        return view('portfolio.index')->with(compact('data','portfolio',
                                            'education','skills','lang',
                                            'tools','projects','volunteer','career'));
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
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        //
    }
}
