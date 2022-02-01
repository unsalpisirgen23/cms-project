<?php

namespace App\Repositories\Concrete;

use App\Repositories\Agreement\PostInterface;

class PostRepository extends Repository implements PostInterface
{

    public function getPostWithComments()
    {
          return  $this->model->join("posts","posts.id","=","comments.post_id")->get();
    }



}
