<?php

namespace App\Repositories;

use App\Result;

class PDFRepository
{

    public function getResultInfos($id)
    {
        $result = Result::join('projects', 'results.project_id', '=', 'projects.id')
            ->join('form_project', 'projects.id', '=', 'form_project.project_id')
            ->select('projects.id as project_id', 'results.project_content as content', 'results.id as result_id', 'form_project.form_id as form_id', 'projects.name as project_name')
            ->where ('results.id' ,'=', $id)
            ->first();
        $result->content = unserialize($result->content);
        return $result;
    }
}
