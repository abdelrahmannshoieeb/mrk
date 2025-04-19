<?php

namespace App\Livewire\Actions;

use Illuminate\Support\Facades\App;
use Livewire\Component;

class Lang extends Component
{
    public $locale;

    public function mount()
    {
        $this->locale = session('locale', app()->getLocale());
    }

    public function toggleLocale()
    {
        $this->locale = $this->locale === 'en' ? 'ar' : 'en';
        session(['locale' => $this->locale]);
    
        return redirect(request()->header('Referer')); 
    }
    

    public function render()
    {
        return view('livewire.actions.lang');
    }
}
