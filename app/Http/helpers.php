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

function navContains($url, $class = null) {
    if(strpos(URL::current(), $url)) {
        if(!$class) {
            return true;
        }
        return $class;
    }
    return false;
}

function getProject($id) {
    if(\App\Project::find($id)) {
        $project = \App\Project::find($id);
        return $project;
    }
    return false;
}

function projectHasListingImage($project) {
    return App\ProjectImage::where('project_id', $project->id)->where('listing', 1)->first() ? true : false;
}

function getProjectListingImage($project) {
    if(projectHasListingImage($project)) {
        return URL::asset('uploads/projects/'.\App\ProjectImage::where('project_id', $project->id)->where('listing', 1)->first()->image);
    }
    return false;
}

function getProjectBannerImage($project, $field = null) {
    if(projectHasBannerImage($project)) {
        if($field) {
            $record = \App\ProjectImage::where('project_id', $project->id)->where('banner', 1)->first();
            if($record[$field]) {
                return $record[$field];
            }
            return false;
        }
        $image = URL::asset('uploads/projects/'.\App\ProjectImage::where('project_id', $project->id)->where('banner', 1)->first()->image);
        return $image;
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