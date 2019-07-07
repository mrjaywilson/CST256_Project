<?php

namespace App\Http\Controllers;

use http\Client\Curl\User;
use Illuminate\Http\Request;
use App\Group;
use App\JoinedGroup;
use Auth;

class GroupController extends Controller
{
    public function index() {
        $groups = Group::all();
        $jGroups = JoinedGroup::where('user_id', Auth::user()->id)->get();

        $joined = array();

        foreach ($jGroups as $group) {
            $j = Group::where('id', $group->group_id)->get();

            array_push($joined, $j[0]);
        }

        return view('groups.groups')->with('groups', $groups)->with('joined', $joined);
    }

    public function new() {
        return view('groups.create');
    }

    public function create() {
        // Save Group
        $data = request()->validate([
            'group_name' => 'required',
            'description' => 'required'
        ]);

        $group = Group::create([
            'user_id' => Auth::user()->id,
            'group_name' => request('group_name'),
            'description' => request('description')
        ]);

        JoinedGroup::create([
            'user_id' => Auth::user()->id,
            'group_id' => $group->id
        ]);

        return GroupController::index();
    }

    public function view() {
        $group = Group::where('group_name', request('name'))->get();

        if (count($group) != 0) {
            $group = $group[0];
        } else {
            return redirect()->back();
        }

        return view('groups.viewgroup')->with('group', $group);
    }

    public static function hasJoined($group) {

        $joinedGroups = JoinedGroup::all();

        foreach($joinedGroups as $jg) {
            if ($jg->user_id == Auth::user()->id && $jg->group_id == $group->id) {
                return true;
            }
        }

        return false;
    }

    public static function isCreator($group) {
        $checkgroup = Group::where('id', $group->id)->get();

        $checkgroup = $checkgroup[0];

        if ($checkgroup->user_id == Auth::user()->id) {
            return true;
        } else {
            return false;
        }
    }

    public function delete() {
        $id = request('group_id');

        Group::where('id', $id)->delete();
        JoinedGroup::where('group_id', $id)->delete();

        return GroupController::index();
    }

    public function leave() {

        JoinedGroup::where('user_id', Auth::user()->id)->where('group_id', intval(request('group_id')))->delete();

        return redirect()->back();
    }

    public function join() {
        $group = new JoinedGroup();
        $group->user_id = Auth::user()->id;
        $group->group_id = request('group_id');
        $group->save();

        return redirect()->back();
    }
}