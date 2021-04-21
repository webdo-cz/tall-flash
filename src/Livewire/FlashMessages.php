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
        if(!$this->messages) $this->messages = [];
    }

    public function render()
    {
        return view(config('tall-flash.view'));
    }
}
