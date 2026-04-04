<?php

use Livewire\Component;
use App\Models\User;
// use function Livewire\Volt\{computed};

new class extends Component
{

    public function userCount()
    {
        return User::count();
    }

    // $users = computed(fn () => User::all());
    // $userCount = computed(fn () => User::count());

    public function users()
    {
        return User::all();
    }

    public function addUser()
    {
        User::factory()->create();
    }
};
?>

<div class="w-1/2 mx-auto">
    <h1 class="text-3xl">Users Page</h1>
    <p>Number of users: {{ $this->userCount() }}</p>
    <button wire:click="addUser">Add User</button>
    <hr class="my-5">

    <ul>
        @foreach ($this->users() as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>
</div>
