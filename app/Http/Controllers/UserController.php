<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Charts\HistoryChart;
use App\Models\UserHistory;

class UserController extends Controller
{
    public function index()
    {
        $students = User::query()->where('is_admin', 0)->where('is_guru', 0);
        if (request()->has('search')) {
            $search = \request('search');
            $students->where('name', 'like', "%" . $search . "%");
        }
        $students = $students->paginate(8);
        return view('sites.dashboard.students', ['students' => $students]);
    }

    public function home()
    {
        $today_users = UserHistory::whereDate('created_at', today())->count();
        $yesterday_users = UserHistory::whereDate('created_at', today()->subDays(1))->count();
        $users_2_days_ago = UserHistory::whereDate('created_at', today()->subDays(2))->count();
        $chart = new HistoryChart;
        $chart->labels(['Two days ago', 'Yesterday', 'Today']);
        $chart->dataset('Data Peminjaman Buku', 'line', [$users_2_days_ago, $yesterday_users, $today_users]);
        return view('sites/dashboard/landing', ['chart' => $chart]);
    }

    public function form_page()
    {
        return view('sites.dashboard.student_form');
    }

    public function form_page_edit(User $student)
    {
        return view('sites.dashboard.student_form_edit', ['data' => $student]);
    }

    public function store(UserRequest $request)
    {
        $data = $request->validated();
        $data['username'] = $data['name'];
        $data['password'] = bcrypt($data['username']); // default password = Password1
        $data['created_at'] = Carbon::now();
        User::create($data);
        return redirect('/student');
    }

    public function show(Book $schoolBook)
    {
        return view('sites.dashboard.book_detail', ['books' => $schoolBook]);
    }

    public function update(UserRequest $request, User $student)
    {
        $this->response = $student->update($request->validated());
        return redirect('/student');
    }

    public function destroy(User $student)
    {
        $student->delete();
        return redirect('/student');
    }

    public function login(Request $request)
    {
        $data = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ];

        if (!Auth::Attempt($data)) {
            alert()->error('Username or password invalid', 'Login Failed')->autoclose(1500);
            return redirect('/login');
        }
        alert()->success('Login Success');
        return redirect('/dashboard');
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/login');
    }
}