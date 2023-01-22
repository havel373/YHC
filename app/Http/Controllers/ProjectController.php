<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectLeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $leaders = ProjectLeader::get();
        return view('pages.users.dashboard.modal', ['project' => new Project , 'leaders' => $leaders]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'project_name' => 'required|max:100',
            'client' => 'required|max:100',
            'project_leader' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'progress' => 'required|numeric|min:0|max:100',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('project_name')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('project_name'),
                ]);
            }else if($errors->has('client')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('client'),
                ]);
            }else if($errors->has('project_leader')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('project_leader'),
                ]);
            }else if($errors->has('start_date')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('start_date'),
                ]);
            }else if($errors->has('end_date')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('end_date'),
                ]);
            }else if($errors->has('progress')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('progress'),
                ]);
            }
        }
        $project = new Project;
        $project->project_name = Str::title($request->project_name);
        $project->client = Str::title($request->client);
        $project->project_leader = $request->project_leader;
        $project->start_date = $request->start_date;
        $project->end_date = $request->end_date;
        $project->progress = $request->progress;
        $project->created_at = now();
        $project->updated_at = now();
        $project->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Project '. $request->project_name . ' Saved',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $leaders = ProjectLeader::get();
        return view('pages.users.dashboard.modal', ['project' => $project , 'leaders' => $leaders]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $validator = Validator::make($request->all(), [
            'project_name' => 'required|max:100',
            'client' => 'required|max:100',
            'project_leader' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'progress' => 'required|numeric|min:0|max:100',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('project_name')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('project_name'),
                ]);
            }else if($errors->has('client')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('client'),
                ]);
            }else if($errors->has('project_leader')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('project_leader'),
                ]);
            }else if($errors->has('start_date')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('start_date'),
                ]);
            }else if($errors->has('end_date')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('end_date'),
                ]);
            }else if($errors->has('progress')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('progress'),
                ]);
            }
        }
        $project->project_name = Str::title($request->project_name);
        $project->client = $request->client;
        $project->project_leader = $request->project_leader;
        $project->start_date = $request->start_date;
        $project->end_date = $request->end_date;
        $project->progress = $request->progress;
        $project->created_at = now();
        $project->updated_at = now();
        $project->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Project '. $request->project_name . ' Updated',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Project Successfuly deleted',
        ]);
    }
}
