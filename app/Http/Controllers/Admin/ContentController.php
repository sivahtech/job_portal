<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JobCategory;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ContentController extends Controller
{
    #--- creat or update --#
    public function createCategory(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => [
                'required',
                Rule::unique('job_categories', 'name')->ignore($request->id),
            ],

        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 400, 'message' => $validator->messages()->get('name')[0]]);
        }
        try {
            if ($request->id) {
                $category =  JobCategory::find($request->id);
                if ($request->status) {
                    $category->status = $request->status;
                }
                $msg = 'Category updated';
            } else {
                $category = new JobCategory();
                $msg = 'Category created';
            }
            $category->name = $request->name;
            $category->save();
            return response()->json(['status' => 200, 'message' => $msg]);
        } catch (Exception $e) {
            return response()->json(['status' => 400, 'message' => 'something went wrong']);
        }
    }
    #---- Get data ----#
    public function getCategory(Request $request)
    {

        $data = JobCategory::find($request->id);
        return response()->json(['status' => 200, 'data' => $data]);
    }

    #----- Delete category ----#
    public function deleteCategory($id)
    {
        $category = JobCategory::find($id);
        $category->status = 2;
        $category->save();
        return redirect()->back()->with('success','Category deleted');
    }

    #--- creat or update --#
    public function createRole(Request $request) {}
    #---- Get data ----#
    public function getRole(Request $request) {}

    #--- creat or update --#
    public function createType(Request $request) {}
    #---- Get data ----#
    public function getType(Request $request) {}


    #--- creat or update --#
    public function createIndustry(Request $request) {}
    #---- Get data ----#
    public function getIndustry(Request $request) {}
}
