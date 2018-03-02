<?php
/**
 * Created by PhpStorm.
 * User: Sugarfixx
 * Date: 02/03/18
 * Time: 07:37
 */

namespace App\Transformers;

use App\RequestType;
use League\Fractal\TransformerAbstract as Transformer;

class RequestTypeTransformer extends  Transformer
{
    public function transform(RequestType $requestType)
    {
        return [
            'id' => $requestType->id,
            'name' => $requestType->name,
            'description' => $requestType->description
        ];
    }
}