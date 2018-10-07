<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticalRequest;
use App\Repositories\ArticalRepository;

class ArticalController extends Controller
{
    /**
     * @var ArticalRepository
     */
    private $articalRepository;

    /**
     * ArticalController constructor.
     * @param ArticalRepository $articalRepository
     */
    public function __construct(ArticalRepository $articalRepository)
    {
        //$this->repository = $repository;
        $this->articalRepository = $articalRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->articalRepository->all();
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
     * @param  ArticalRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticalRequest $request)
    {
        $artical = $this->articalRepository->create($request->validated());
        return response()->json($artical, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artical = $this->articalRepository->find($id);
        if($artical){
            return response()->json($artical, 200);
        }else{
            return response()->json('No records found', 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ArticalRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticalRequest $request, $id)
    {
        $artical = $this->articalRepository->update($request->validated(), $id);
        return response()->json($artical, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->articalRepository->delete($id);
    }
}
