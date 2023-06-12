<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function aboutPage(): View|Factory
    {
        return view('about');
    }

    /**
     * @return array<int,array<string,mixed>>
     */
    public function getAllUsers(): array
    {
        return [
            [
                'name' => 'José',
                'id' => 1
            ],
            ['name' => 'João', 'id' => 2]
        ];
    }
}
