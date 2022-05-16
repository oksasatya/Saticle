<?php

namespace App\Http\Requests;

use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            // validate the name, email ,phone fields
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:255',
        ];
    }

    //  execute validate
    public function execute($id)
    {
        $user = User::findOrFail($id);
        $user->update($this->validated());
        //  update user
        $user->name = $this->name;
        $user->email = $this->email;
        $user->phone = $this->phone;
        // handel image
        if ($this->hasFile('image')) {
            $image = $this->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('avatar-user'), $imageName);
            $user->image = $imageName;
        }
        // $role = Role::where('model_id', $id)->delete();

        //  update role and user set new role from user set model_type
        $user->roles()->sync($this->roles);
        // $user->syncRoles($this->roles);

        //  save user
        $user->save();
    }
}
