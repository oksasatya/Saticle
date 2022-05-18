<?php

namespace App\View\Components\admin\dashboard;

use App\Models\User;
use Illuminate\View\Component;

class recentUser extends Component
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
        $users = User::latest()->paginate(5);
        return view('components.admin.dashboard.recent-user', compact('users'));
    }
}
