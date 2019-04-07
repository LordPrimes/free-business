<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\Contracts\PagesContracts;
use App\Repository\PostRepo;
use App\models\Comments;

class ViewController extends Controller implements PagesContracts

{

    protected $model;

    public function __construct(Comments $Comments)
    {
    
        $this->model = new PostRepo($Comments);
    }

    public function show()
    {
      
        return view('main');
    }

    public function addcomments(){

        $items = ['name' => 'test',
                  'message' => 'test'                
    ];
        return $this->model->addcomments($items);

    }
}
