<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JobCategory;
use App\Models\JobIndustry;
use App\Models\JobRole;
use App\Models\JobType;
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
                $msg = 'Job Category updated';
            } else {
                $category = new JobCategory();
                $msg = 'Job Category created';
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
        return redirect()->back()->with('success', 'Job Category deleted');
    }

    #--- creat or update --#
    public function createRole(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => [
                'required',
                Rule::unique('job_roles', 'name')->ignore($request->id),
            ],

        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 400, 'message' => $validator->messages()->get('name')[0]]);
        }
        try {
            if ($request->id) {
                $role =  JobRole::find($request->id);
                if ($request->status) {
                    $role->status = $request->status;
                }
                $msg = 'Job Role updated';
            } else {
                $role = new JobRole();
                $msg = 'Job Role created';
            }
            $role->name = $request->name;
            $role->save();
            return response()->json(['status' => 200, 'message' => $msg]);
        } catch (Exception $e) {
            return response()->json(['status' => 400, 'message' => 'something went wrong']);
        }
    }
    #---- Get data ----#
    public function getRole(Request $request)
    {
        $data = JobRole::find($request->id);
        return response()->json(['status' => 200, 'data' => $data]);
    }

    #----- Delete Roles ----#
    public function deleteRole($id)
    {
        $role = JobRole::find($id);
        $role->status = 2;
        $role->save();
        return redirect()->back()->with('success', 'Job Role deleted');
    }

    #--- creat or update --#
    public function createType(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => [
                'required',
                Rule::unique('job_types', 'name')->ignore($request->id),
            ],

        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 400, 'message' => $validator->messages()->get('name')[0]]);
        }
        try {
            if ($request->id) {
                $type =  JobType::find($request->id);
                if ($request->status) {
                    $type->status = $request->status;
                }
                $msg = 'Job type updated';
            } else {
                $type = new JobType();
                $msg = 'Job type created';
            }
            $type->name = $request->name;
            $type->save();
            return response()->json(['status' => 200, 'message' => $msg]);
        } catch (Exception $e) {
            return response()->json(['status' => 400, 'message' => 'something went wrong']);
        }
    }
    #---- Get data ----#
    public function getType(Request $request)
    {
        $data = JobType::find($request->id);
        return response()->json(['status' => 200, 'data' => $data]);
    }

    #----- Delete Types ----#
    public function deleteType($id)
    {
        $role = JobType::find($id);
        $role->status = 2;
        $role->save();
        return redirect()->back()->with('success', 'Job type deleted');
    }


    #--- creat or update --#
    public function createIndustry(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => [
                'required',
                Rule::unique('job_industries', 'name')->ignore($request->id),
            ],

        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 400, 'message' => $validator->messages()->get('name')[0]]);
        }
        try {
            if ($request->id) {
                $industry =  JobIndustry::find($request->id);
                if ($request->status) {
                    $industry->status = $request->status;
                }
                $msg = 'Job Industry updated';
            } else {
                $industry = new JobIndustry();
                $msg = 'Job Industry created';
            }
            $industry->name = $request->name;
            $industry->save();
            return response()->json(['status' => 200, 'message' => $msg]);
        } catch (Exception $e) {
            return response()->json(['status' => 400, 'message' => 'something went wrong']);
        }
    }
    #---- Get data ----#
    public function getIndustry(Request $request)
    {
        $data = JobIndustry::find($request->id);
        return response()->json(['status' => 200, 'data' => $data]);
    }

    #----- Delete industry ----#
    public function deleteIndustry($id)
    {
        $industry = JobIndustry::find($id);
        $industry->status = 2;
        $industry->save();
        return redirect()->back()->with('success', 'Job Industry deleted');
    }
}
