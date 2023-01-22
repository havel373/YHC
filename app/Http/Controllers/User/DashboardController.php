<?php

namespace App\Http\Controllers\User;

use App\Models\SshAccount;
use App\Models\VlessAccount;
use App\Models\VmessAccount;
use Illuminate\Http\Request;
use App\Models\TrojanAccount;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectLeader;
use Illuminate\Support\Facades\Auth;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $leaders = ProjectLeader::get();
        $keywords = $request->keywords;
        $percentage = $request->percentage;
        $leader = $request->leader;
        if($request->ajax() ){
            if($leader == 'all' || !$leader && !$percentage || $percentage == 'all'){
                $projects = Project::
                where('project_name', 'like', '%' . $keywords . '%')
                ->orderBy('created_at','asc')
                ->paginate(5);
            }else if($percentage && $leader){
                if($percentage == 1){
                    $projects = Project::
                    where('project_name', 'like', '%' . $keywords . '%')
                    ->where('project_leader', $leader)
                    ->whereBetween('progress', [0,50])
                    ->orderBy('project_name','asc')
                    ->paginate(5);
                }elseif($percentage == 2){
                     $projects = Project::
                    where('project_name', 'like', '%' . $keywords . '%')
                    ->where('project_leader', $leader)
                    ->whereBetween('progress', [25,50])
                    ->orderBy('project_name','asc')
                    ->paginate(5);
                }elseif($percentage == 3){
                     $projects = Project::
                    where('project_name', 'like', '%' . $keywords . '%')
                    ->where('project_leader', $leader)
                    ->whereBetween('progress', [25,75])
                    ->orderBy('project_name','asc')
                    ->paginate(5);
                }elseif($percentage == 4){
                     $projects = Project::
                    where('project_name', 'like', '%' . $keywords . '%')
                    ->where('project_leader', $leader)
                    ->whereBetween('progress', [25,100])
                    ->orderBy('project_name','asc')
                    ->paginate(5);
                }elseif($percentage == 5){
                     $projects = Project::
                    where('project_name', 'like', '%' . $keywords . '%')
                    ->where('project_leader', $leader)
                    ->whereBetween('progress', [50,100])
                    ->orderBy('project_name','asc')
                    ->paginate(5);
                }elseif($percentage == 6){
                     $projects = Project::
                    where('project_name', 'like', '%' . $keywords . '%')
                    ->where('project_leader', $leader)
                    ->whereBetween('progress', [75,100])
                    ->orderBy('project_name','asc')
                    ->paginate(5);
                }elseif($percentage == 7){
                     $projects = Project::
                    where('project_name', 'like', '%' . $keywords . '%')
                    ->where('project_leader', $leader)
                    ->where('progress', 100)
                    ->orderBy('project_name','asc')
                    ->paginate(5);
                }
            }elseif($leader && !$percentage ){
                $projects = Project::
                where('project_name', 'like', '%' . $keywords . '%')
                ->where('project_leader', $leader)
                ->orderBy('created_at','asc')
                ->paginate(5);
            }elseif($percentage && !$leader){
                if($percentage == 1){
                    $projects = Project::
                    where('project_name', 'like', '%' . $keywords . '%')
                    ->whereBetween('progress', [0,50])
                    ->orderBy('project_name','asc')
                    ->paginate(5);
                }elseif($percentage == 2){
                     $projects = Project::
                    where('project_name', 'like', '%' . $keywords . '%')
                    ->whereBetween('progress', [25,50])
                    ->orderBy('project_name','asc')
                    ->paginate(5);
                }elseif($percentage == 3){
                     $projects = Project::
                    where('project_name', 'like', '%' . $keywords . '%')
                    ->whereBetween('progress', [25,75])
                    ->orderBy('project_name','asc')
                    ->paginate(5);
                }elseif($percentage == 4){
                     $projects = Project::
                    where('project_name', 'like', '%' . $keywords . '%')
                    ->whereBetween('progress', [25,100])
                    ->orderBy('project_name','asc')
                    ->paginate(5);
                }elseif($percentage == 5){
                     $projects = Project::
                    where('project_name', 'like', '%' . $keywords . '%')
                    ->whereBetween('progress', [50,100])
                    ->orderBy('project_name','asc')
                    ->paginate(5);
                }elseif($percentage == 6){
                     $projects = Project::
                    where('project_name', 'like', '%' . $keywords . '%')
                    ->whereBetween('progress', [75,100])
                    ->orderBy('project_name','asc')
                    ->paginate(5);
                }elseif($percentage == 7){
                     $projects = Project::
                    where('project_name', 'like', '%' . $keywords . '%')
                    ->where('progress', 100)
                    ->orderBy('project_name','asc')
                    ->paginate(5);
                }
            }else{
                $projects = Project::
                where('project_name', 'like', '%' . $keywords . '%')
                ->orderBy('project_name','asc')
                ->paginate(5);
            }
            $data = [];
            return view('pages.users.dashboard.list', compact('data', 'projects'));
        }
        $data = [];
        return view('pages.users.dashboard.index', compact('data','leaders'));
    }
}
