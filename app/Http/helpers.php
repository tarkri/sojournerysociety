<?php

use Illuminate\Support\Facades\URL;

function navIsCurrent($url, $class = null)
{

    if (URL::current() == URL::to($url)) {
        if (!$class) {
            return true;
        }
        return $class;
    }
    return false;

}

function getProjectBannerImage($project) {
    if(projectHasBannerImage($project)) {
        return URL::asset('uploads/projects/'.\App\ProjectImage::where('project_id', $project->id)->where('banner', 1)->first()->image);
    }
    return false;
}

function projectHasBannerImage($project) {
    return \App\ProjectImage::where('project_id', $project->id)->where('banner', 1)->first() ? true : false;
}

function outputProjectType($type)
{
    switch ($type) {
        case 1:
            return 'Couples';
            break;
        case 2:
            return 'Families';
            break;
        case 3:
            return 'Entrepreneurs';
            break;
        default:
            return false;
    }
}