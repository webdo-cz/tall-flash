<?php

namespace WebdoCZ\TallFlash\Livewire;

use Livewire\Component;

class FlashMessages extends Component
{
    public $messages = [];

    public function mount()
    {
        $this->messages = session()->get('flashMessages');
        session()->forget('flashMessages');
    }

    public function render()
    {
        return view(config('tall-flash.view'));
    }
}
