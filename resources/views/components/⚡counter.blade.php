<?php

use Livewire\Component;

new class extends Component
{
    public $count = 1;
    public function increment()
    {
        $this->count++;
    }
    public function decrement()
    {
        $this->count--;
    }
    // public function render()
    // {
    //     return view('components.⚡counter');
    // }
};
?>

<div>
    {{-- Well begun is half done. - Aristotle --}}
    <button wire:click="decrement">-</button>
    <span>{{ $count }}</span>
    <button wire:click="increment">+</button>
</div>
