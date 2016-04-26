<?php

namespace App\Http\Controllers;

use App\Project;
use App\ProjectImage;
use App\ProjectType;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WorksController extends Controller
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
     * WorksController constructor.
     * @param Project $project
     * @param ProjectType $projectType
     * @param ProjectImage $projectImage
     */
    public function __construct(Project $project, ProjectType $projectType, ProjectImage $projectImage
    )
    {
        $this->project = $project;
        $this->projectType = $projectType;
        $this->projectImage = $projectImage;
    }

    public function index($filter = null)
    {
        $projectLists = $this->project->lists('id');
        switch($filter) {
            case 'couples':
                $types = $this->projectType->wherein('project_id', $projectLists)->where('type', 1)->groupby('type')->orderby('type')->get();
                break;
            case 'families':
                $types = $this->projectType->wherein('project_id', $projectLists)->where('type', 2)->groupby('type')->orderby('type')->get();
                break;
            case 'entrepreneurs':
                $types = $this->projectType->wherein('project_id', $projectLists)->where('type', 3)->groupby('type')->orderby('type')->get();
                break;
            default:
                $types = $this->projectType->wherein('project_id', $projectLists)->groupby('type')->orderby('type')->get();
        }
        return view('pages.work', compact('types'));
    }

    public function single($url)
    {
        $project = $this->project->where('url', $url)->first();
        if($project) {
            $images = $this->projectImage->where('project_id', $project->id)->where('listing', 0)->where('banner', 0)->orderby('order', 'asc')->get();
            return view('pages.work.single', compact('project', 'images'));
        }
        return redirect('work');
    }
}
