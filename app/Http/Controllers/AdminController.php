<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function success(Request $request){
        $sortField = $request->get('sort_field', 'created_at');
        $sortOrder = $request->get('sort_order', 'desc');

        $applications = Application::where('status', 2)
            ->orderBy($sortField, $sortOrder)
            ->paginate(5);

        return view('admin.success', [
            'applications' => $applications,
            'sortField' => $sortField,
            'sortOrder' => $sortOrder,
        ]);
    }

    public function deny(Request $request){
        $sortField = $request->get('sort_field', 'created_at');
        $sortOrder = $request->get('sort_order', 'desc');

        $applications = Application::where('status', 3)
            ->orderBy($sortField, $sortOrder)
            ->paginate(5);

        return view('admin.deny', [
            'applications' => $applications,
            'sortField' => $sortField,
            'sortOrder' => $sortOrder,
        ]);
    }
    public function index(Request $request){
        $sortField = $request->get('sort_field', 'created_at');
        $sortOrder = $request->get('sort_order', 'desc');

        $applications = Application::where('status', 1)
            ->orderBy($sortField, $sortOrder)
            ->paginate(5);

        return view('admin.index', [
            'applications' => $applications,
            'sortField' => $sortField,
            'sortOrder' => $sortOrder,
        ]);
    }
    public function application_Deny_button($id){
        $application = Application::find($id);

        if ($application) {
            $application->update(['status' => 3]);

            return redirect()->back()->with('success', 'Вы отклонили заявление');
        } else {
            return redirect()->back()->with('error', 'Ошибка: заявление не найдено');
        }

    }
    public function application_Success_button($id){
        $application = Application::find($id);

        if ($application) {
            $application->update(['status' => 2]);

            return redirect()->back()->with('success', 'Вы подтвердили заявление');
        } else {
            return redirect()->back()->with('error', 'Ошибка: заявление не найдено');
        }

    }
}
