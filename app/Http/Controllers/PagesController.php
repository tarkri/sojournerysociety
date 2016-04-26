<?php

namespace App\Http\Controllers;

use App\Project;
use App\ProjectImage;
use App\ProjectType;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
     * @var Project
     */
    private $project;
    /**
     * @var ProjectType
     */
    private $projectType;
    /**
     * @var ProjectImage
     */
    private $projectImage;

    /**
     * PagesController constructor.
     * @param Project $project
     * @param ProjectType $projectType
     * @param ProjectImage $projectImage
     */
    public function __construct(Project $project, ProjectType $projectType, ProjectImage $projectImage)
    {
        $this->project = $project;
        $this->projectType = $projectType;
        $this->projectImage = $projectImage;
    }

    public function index()
    {
        $topProjects = $this->projectType->where('order', 1)->orderby('type', 'asc')->get();
        return view('pages.home', compact('topProjects'));
    }

    public function team()
    {
        return view('pages.team');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
