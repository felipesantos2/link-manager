<?php

namespace App\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    public string $componentName = 'Dashboard';

    public function render()
    {
        return view('livewire.dashboard');
    }
}
