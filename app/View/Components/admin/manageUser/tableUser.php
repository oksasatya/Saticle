<?php

namespace App\View\Components\admin\manageUser;

use App\Models\User;
use Illuminate\View\Component;

class tableUser extends Component
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
        $users = User::all();
        return view('components.admin.manage-user.table-user', compact('users'));
    }
}
