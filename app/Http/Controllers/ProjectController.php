<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {



    }

    public function createProject(Request $request)
    {

        /*
        $request->project_name
        $request->project_description
        $request->project_saas
        $request->project_template
        $request->db_name
        $request->include_tables
         */
        // Copy project depending on the template choosed

        if (is_dir(storage_path('app/algobridge/projects/' . str_replace(' ', '_', strtolower('Project test')))) === false) {
            Storage::makeDirectory('algobridge/projects/' . str_replace(' ', '_', strtolower('Project test')));
        }
        $src = storage_path('app/algobridge/project_templates/laravel_demo');
        $dst = storage_path('app/algobridge/projects/' . str_replace(' ', '_', strtolower('Project test')));
        File::copyDirectory($src, $dst);

        // Create database

        
        DB::getConnection()->statement('CREATE DATABASE :schema', array('schema' => "dasdsdasdsadsadsa"));

        // Update .env file

        // Insert data related to project in db

    }
}
