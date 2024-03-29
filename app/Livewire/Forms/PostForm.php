<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Form;

class PostForm extends Form
{
    #[Rule(['required', 'min:5', 'max:100'])]
    public string $title = '';


    #[Rule(['required'])]
    public string $body = '';

    public function store(): void
    {
        $user = User::find(1);

        $user->posts()->create(
            $this->validate()
        );

        flash('Post created successfully.');

        $this->reset();
    }
}
