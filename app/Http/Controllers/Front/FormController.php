<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormUpdateRequest;
use App\Result;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class FormController extends Controller
{
    /**
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id){

        $result = DB::table('results')
            ->join('projects', 'results.project_id', '=', 'projects.id')
            ->select('projects.id as project_id', 'projects.name as project_name', 'results.project_content as content', 'results.id as result_id')
            ->join('form_project', 'projects.id', '=', 'form_project.project_id')
            ->select('projects.id as project_id', 'projects.name as project_name', 'results.project_content as content', 'results.id as result_id', 'form_project.form_id as form_id')
            ->first();

        $result->content = unserialize($result->content);

        return view('form.form')->with([
            'result' => $result,
        ]);
    }

    /**
     * @param FormUpdateRequest $request
     * @param $result_id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(FormUpdateRequest $request, $result_id)
    {


        $result = Result::find($result_id);
//row1
        // On submit, when I check the box (=it's not empty) with name = picture[0], I select the value associated "$result->content[27]" = 'upload/filename.jpg',
        if (!empty($request->picture[0])) {
            // Unserialize all datas saved from the DB ==> $result->project_content
            $datas_saved = unserialize($result->project_content);
            // Put NULL on the 27th position in the DB
            $datas_saved[29] = null;
            // Take ONLY the 27th array which is the path+filename = 'upload/filename.jpg'
            $path01 = $datas_saved[29];
            // Define $picture1 with $request->picture[0] which is 'upload/filename.jpg'
            $picture1 = $request->picture[0];
            // Get the storage path of the file+name
            $filename = storage_path("/app/public/" . $picture1);
            File::delete($filename);


        } elseif (empty($request->file('project_content.29'))) {
            // Unserialize all datas saved from the DB ==> $result->project_content
            $datas_saved = unserialize($result->project_content);
            // Take ONLY the 27th array which is the path+filename = 'upload/filename.jpg'
            $path01 = $datas_saved[29];
        } else {
            $path01 = $request->file('project_content.29')->store('upload');
            $image_resize = Image::make(Storage::get($path01))->resize(1400, null, function ($constraint) {
                $constraint->aspectRatio();
            })->encode();
            Storage::put($path01, $image_resize);
        }

        if (!empty($request->picture[1])) {
            $datas_saved = unserialize($result->project_content);
            $datas_saved[30] = null;
            $path02 = $datas_saved[30];
            $picture2 = $request->picture[1];
            $filename = storage_path("/app/public/" . $picture2);
            File::delete($filename);
        }elseif (empty($request->file('project_content.30')))
        {
            $last_file_name = unserialize($result->project_content);
            $path02 = $last_file_name[30];
        } else {
            $path02 = $request->file('project_content.30')->store('upload');
            $image_resize = Image::make(Storage::get($path02))->resize(1400, null, function ($constraint) {
                $constraint->aspectRatio();
            })->encode();
            Storage::put($path02, $image_resize);

		}
//row 2
        if (!empty($request->picture[2])) {
            $datas_saved = unserialize($result->project_content);
            $datas_saved[31] = null;
            $path03 = $datas_saved[31];
            $picture3 = $request->picture[2];
            $filename = storage_path("/app/public/" . $picture3);
            File::delete($filename);
        }elseif (empty($request->file('project_content.31')))
        {
            $last_file_name = unserialize($result->project_content);
            $path03 = $last_file_name[31];
        } else {
            $path03 = $request->file('project_content.31')->store('upload');
            $image_resize = Image::make(Storage::get($path03))->resize(1400, null, function ($constraint) {
                $constraint->aspectRatio();
            })->encode();
            Storage::put($path03, $image_resize);
        }

        if (!empty($request->picture[3])) {
            $datas_saved = unserialize($result->project_content);
            $datas_saved[32] = null;
            $path04 = $datas_saved[32];
            $picture4 = $request->picture[3];
            $filename = storage_path("/app/public/" . $picture4);
            File::delete($filename);
        }elseif (empty($request->file('project_content.32')))
        {
            $last_file_name = unserialize($result->project_content);
            $path04 = $last_file_name[32];
        } else {
            $path04 = $request->file('project_content.32')->store('upload');
            $image_resize = Image::make(Storage::get($path04))->resize(1400, null, function ($constraint) {
                $constraint->aspectRatio();
            })->encode();
            Storage::put($path04, $image_resize);
        }
//row 3
        if (!empty($request->picture[4])) {
            $datas_saved = unserialize($result->project_content);
            $datas_saved[33] = null;
            $path05 = $datas_saved[33];
            $picture5 = $request->picture[4];
            $filename = storage_path("/app/public/" . $picture5);
            File::delete($filename);
        }elseif (empty($request->file('project_content.33')))
        {
            $last_file_name = unserialize($result->project_content);
            $path05 = $last_file_name[33];
        } else {
            $path05 = $request->file('project_content.33')->store('upload');
            $image_resize = Image::make(Storage::get($path05))->resize(1400, null, function ($constraint) {
                $constraint->aspectRatio();
            })->encode();
            Storage::put($path05, $image_resize);
        }

        if (!empty($request->picture[5])) {
            $datas_saved = unserialize($result->project_content);
            $datas_saved[34] = null;
            $path06 = $datas_saved[34];
            $picture6 = $request->picture[5];
            $filename = storage_path("/app/public/" . $picture6);
            File::delete($filename);
        }elseif (empty($request->file('project_content.34')))
        {
            $last_file_name = unserialize($result->project_content);
            $path06 = $last_file_name[34];
        } else {
            $path06 = $request->file('project_content.34')->store('upload');
            $image_resize = Image::make(Storage::get($path06))->resize(1400, null, function ($constraint) {
                $constraint->aspectRatio();
            })->encode();
            Storage::put($path06, $image_resize);
        }

        //row 4
        if (!empty($request->picture[6])) {
            $datas_saved = unserialize($result->project_content);
            $datas_saved[35] = null;
            $path07 = $datas_saved[35];
            $picture7 = $request->picture[6];
            $filename = storage_path("/app/public/" . $picture7);
            File::delete($filename);
        }elseif (empty($request->file('project_content.35')))
        {
            $last_file_name = unserialize($result->project_content);
            $path07 = $last_file_name[35];
        } else {
            $path07 = $request->file('project_content.35')->store('upload');
            $image_resize = Image::make(Storage::get($path07))->resize(1400, null, function ($constraint) {
                $constraint->aspectRatio();
            })->encode();
            Storage::put($path07, $image_resize);
        }

        if (!empty($request->picture[7])) {
            $datas_saved = unserialize($result->project_content);
            $datas_saved[36] = null;
            $path08 = $datas_saved[36];
            $picture8 = $request->picture[7];
            $filename = storage_path("/app/public/" . $picture8);
            File::delete($filename);
        }elseif (empty($request->file('project_content.36')))
        {
            $last_file_name = unserialize($result->project_content);
            $path08 = $last_file_name[36];
        } else {
            $path08 = $request->file('project_content.36')->store('upload');
            $image_resize = Image::make(Storage::get($path08))->resize(1400, null, function ($constraint) {
                $constraint->aspectRatio();
            })->encode();
            Storage::put($path08, $image_resize);
        }

        //row5
        if (!empty($request->picture[8])) {
            $datas_saved = unserialize($result->project_content);
            $datas_saved[37] = null;
            $path09 = $datas_saved[37];
            $picture9 = $request->picture[8];
            $filename = storage_path("/app/public/" . $picture9);
            File::delete($filename);
        }elseif (empty($request->file('project_content.37')))
        {
            $last_file_name = unserialize($result->project_content);
            $path09 = $last_file_name[37];
        } else {
            $path09 = $request->file('project_content.37')->store('upload');
            $image_resize = Image::make(Storage::get($path09))->resize(1400, null, function ($constraint) {
                $constraint->aspectRatio();
            })->encode();
            Storage::put($path09, $image_resize);
        }

		$all_request = $request->project_content;
		$upload_file01 = ['29' => $path01];
		$upload_file02 = ['30' => $path02];
		$upload_file03 = ['31' => $path03];
		$upload_file04 = ['32' => $path04];
		$upload_file05 = ['33' => $path05];
		$upload_file06 = ['34' => $path06];
		$upload_file07 = ['35' => $path07];
		$upload_file08 = ['36' => $path08];
		$upload_file09 = ['37' => $path09];

        $merge_request = array_replace($all_request, $upload_file01, $upload_file02, $upload_file03, $upload_file04, $upload_file05, $upload_file06, $upload_file07, $upload_file08, $upload_file09  );
        $serialize['project_content'] = serialize($merge_request);
        $result->update($serialize);

        return redirect()->route('result.edit', [
            'result' => $result,
        ]);
    }
}