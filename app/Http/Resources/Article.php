<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Article extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return array(
            'id'    => $this->id,
            'title' => $this->title,
            'body'  => $this->body,
        );

        //return parent::toArray($request);
    }

    public function with($request)
    {
        return array(
            'version' => '1.0.0',
            'author_url' => url('https://google.com')
        );
    }
}
