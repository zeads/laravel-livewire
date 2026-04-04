<?php

use Livewire\Component;
use App\Models\User;

new class extends Component
{
    public string $name = '';
    public string $email = '';
    public string $password = '';

    public function userCount()
    {
        return User::count();
    }

    public function users()
    {
        return User::all();
    }

    public function addUser()
    {
        // User::factory()->create();
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        // $this->reset(['name', 'email', 'password']);
        $this->reset();

    }
};
?>

<div class="w-1/2 mx-auto">
    {{-- <h1 class="text-3xl">Users Page</h1>
    <p>Number of users: {{ $this->userCount() }}</p>
    <button wire:click="addUser" class="text-white bg-blue-500 rounded-xl px-5 py-2.5 cursor-pointer hover:bg-blue-600">Add User</button>
    <hr class="my-5"> --}}

    <div class="my-5" >
        <div class="mx-auto">
            <form wire:submit.prevent="addUser" action="#" method="POST" class="space-y-6">
                <div>
                    <label for="name" class="block text-sm/6 font-medium text-gray-900">Name</label>
                    <div class="mt-2">
                    <input wire:model="name" id="name" type="text" name="name"  autocomplete="name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
                    <div class="mt-2">
                    <input wire:model="email" id="email" type="email" name="email" required autocomplete="email" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
                    </div>
                    <div class="mt-2">
                    <input wire:model="password" id="password" type="password" name="password" required autocomplete="current-password" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                    </div>
                </div>

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
                </div>
            </form>
        </div>
    </div>



    <ul>
        @foreach ($this->users() as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>
</div>
