<?php

use Livewire\Component;
use App\Models\User;

new class extends Component
{
    // public $users = User::all();
    public function userCount()
    {
        return User::count();
    }
};
?>

<div>
    <h1 class="text-3xl">Users Page</h1>
    <p>Number of users: {{ $this->userCount() }}</p>
</div>
