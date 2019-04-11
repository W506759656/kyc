<?php
namespace Leonis\Kyc\Transforms;
/**
 * Created by PhpStorm.
 * User: wangding
 * Date: 2019/3/28
 * Time: 上午11:23
 */
class KycTransform extends BaseTransformer
{
    protected $type;

    public function transformData($model)
    {
        return $model->toArray();
    }

}