<?php

namespace App\View\Components\admin\dashboard;

use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\View\Component;
use Shetabit\Visitor\Models\Visit;

class maindashboard extends Component
{
    public $users;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        $user =  visitor()->onlineVisitors(User::class)->count();
        $data = [
            'user' => User::count(),
            'last_user' => User::orderBy('created_at', 'desc')->first(),
            'total_post' => Post::count(),
            'last_post' => Post::orderBy('created_at', 'desc')->first(),
            'online' => $user,
            'last_online' => Visit::orderBy('created_at', 'desc')->first(),
        ];
        return view('components.admin.dashboard.maindashboard', $data);
    }
}
// >count()
