<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Database\Eloquent\Model;

class ToggleSwitchprojet extends Component
{
    public string $field;
    public Model $model;

    public bool $isActive;
    public function render()
    {
        return view('livewire.admin.toggle-switchprojet');
    }
    public function mount()
    {
        $this->isActive = (bool) $this->model->getAttribute($this->field);
    }
    public function updating($field, $value)
    {
        $this->model->setAttribute($this->field, $value)->save();
    }
}
