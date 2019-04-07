<?php
namespace App\Repository;
 
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\PostRequest;

class PostRepo{



    private $reposetory;

    public function __construct(Model $reposetory){
        $this->reposetory = $reposetory;
    }

    public function addcomments(array $data){
        
        return $this->reposetory->create($data);
    }
}