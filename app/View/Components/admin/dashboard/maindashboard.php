<?php

namespace App\View\Components\admin\dashboard;

use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\View\Component;

class maindashboard extends Component
{
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

        // create a user visit counter laravel visit
        // $visit = new ;
        // $visit->ip = request()->ip();

        $data = [
            'user' => User::count(),
            'last_user' => User::orderBy('created_at', 'desc')->first(),
            'total_post' => Post::count(),
            'last_post' => Post::orderBy('created_at', 'desc')->first(),
        ];
        return view('components.admin.dashboard.maindashboard', $data);
    }
}
// >count()
