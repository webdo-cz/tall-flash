<?php

use Livewire\Component;

if (! function_exists('flash')) {

    /**
     * Arrange for a normal, session-based flash message.
     *
     */
    function flash($message, Component $livewire = null){
        if($livewire != null) {
            $livewire->dispatchBrowserEvent('flashadded', $message);
        }else {
            $session = session()->get('flashMessages');

            if(!is_array($session)) $session = [];
            array_push($session, $message);

            session()->put('flashMessages', $session);
        }
    }
}

if (! function_exists('flashError')) {

    /**
     * Arrange for a normal, session-based flash message.
     *
     */
    function flashError($message, Component $livewire = null){
        $message['type'] = 'error';
        if($livewire != null) {
            $livewire->dispatchBrowserEvent('flashadded', $message);
        }else {
            $session = session()->get('flashMessages');

            if(!is_array($session)) $session = [];
            array_push($session, $message);

            session()->put('flashMessages', $session);
        }
    }
}

if (! function_exists('flashSuccess')) {

    /**
     * Arrange for a normal, session-based flash message.
     *
     */
    function flashSuccess($message, Component $livewire = null){
        $message['type'] = 'success';
        if($livewire != null) {
            $livewire->dispatchBrowserEvent('flashadded', $message);
        }else {
            $session = session()->get('flashMessages');

            if(!is_array($session)) $session = [];
            array_push($session, $message);

            session()->put('flashMessages', $session);
        }
    }
}
