<?php
/**
 * Created by PhpStorm.
 * User: Sugarfixx
 * Date: 01/03/18
 * Time: 23:34
 */

namespace App\Transformers;

use App\Platform;
use League\Fractal\TransformerAbstract as Transformer;

class PlatformsTransformer extends  Transformer
{
    protected $availableIncludes = [
        'topics'
    ];

    public function transform(Platform $platform)
    {
        return [
          'id' => $platform->id,
          'name' => $platform->name,
          'key' => $platform->slug
        ];
    }

    public function includeTopics(Platform $platform)
    {
        return $this->collection($platform->topics, new TopicsTransformer());
    }


}