<?php
/**
 * Created by PhpStorm.
 * User: Sugarfixx
 * Date: 01/03/18
 * Time: 20:42
 */

namespace App\Transformers;

use App\Topic;
use League\Fractal\TransformerAbstract as Transformer;

class TopicsTransformer extends Transformer
{
    public function transform(Topic $topic)
    {
        return [
            'id' => $topic->id,
            'question' => $topic->question,
            'answer' => $topic->answer
        ];
    }
}