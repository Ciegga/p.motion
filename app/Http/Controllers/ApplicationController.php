<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Posts;
use Illuminate\Http\Request;
use App\Models\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class ApplicationController extends Controller
{
    public function create()
    {

        return view('application.ApplicationCreate');
    }


    public function createApplication(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'title' => 'required|min:3|max:160',
            'text' => 'required|min:5',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ],[
            'required' => 'Поле :attribute обязательно для заполнения',
            'min' => 'Недопустимая длина для поля :attribute',
            'max' => 'Недопустимая длина для поля :attribute',
            'mime' => 'Загружаемый имеет нежопустимый тип',
            'image' => 'Загружаемый файл не является изображением'
        ]);
        if($validation->fails())
            return back()->withErrors($validation)->withInput();

        $file = $request->file('image');

        $fileInfo = $file->getClientOriginalName();
        $filename = pathinfo($fileInfo, PATHINFO_FILENAME);

        $extension = $file->getClientOriginalExtension();

        $store = $filename . '_' . time() . '.' . $extension;
        $file->storeAs('/public/', $store);

        Application::create([
            'title' => $request->input('title'),
            'text' => $request->input('text'),
            'image'=>$store,
            'user_id' => Auth::user()->id,
        ]);

        return back()->with(['success' => true]);
    }

    public function allRequests(Request $request)
    {
        $filter = $request->get('filter');
        $param = '';

        if(is_null($filter))
            $param = null;
        else if($filter === '1')
            $param = 'Новая';
        else if($filter === '2')
            $param = 'Решена';
        else if($filter === '3')
            $param = 'Отклонена';

        $requests = Application::select('applications.*','user_id')
            ->where('user_id', Auth::user()->id)
            ->where('state', !is_null($param) ? '=' : '!=', $param ?? NULL)
            ->orderByDesc('applications.id')
            ->paginate(5);


        return view('application.all', ['requests' => $requests]);
    }

    public function admin(Request $request)
    {
        $filter = $request->get('filter');
        $param = '';

        if(is_null($filter))
            $param = null;
        else if($filter === '1')
            $param = 'Новая';
        else if($filter === '2')
            $param = 'Решена';
        else if($filter === '3')
            $param = 'Отклонена';

        $requests = Application::select('applications.*','user_id')
            ->where('state', !is_null($param) ? '=' : '!=', $param ?? NULL)
            ->orderByDesc('applications.id')
            ->paginate(5);


        return view('admin.adminapplication', ['requests' => $requests]);
    }

    public function update(Request $request)
    {
        Application::where('id',$request->input('id'))
            ->update(['state'=>$request->input('state')]);
        return back();
    }

    public function delete($id)
    {
        Application::where('id',$id)
            ->delete();
        return back();
    }
}
