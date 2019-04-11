<?php

/*
 * This file is part of ibrand/EC-Open-Server.
 *
 * (c) iBrand <https://www.ibrand.cc>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Leonis\Kyc\Transforms;

use Illuminate\Database\Eloquent\Model;
use League\Fractal\TransformerAbstract;

abstract class BaseTransformer extends TransformerAbstract
{
    public function transform(Model $model)
    {
        $transformData = $this->transformData($model);

        $data = array_filter($transformData, function ($v) {
            if (is_null($v)) {
                return false;
            }

            return true;
        });

        // 转换 null 字段为空字符串
        foreach (array_keys($model->toArray()) as $key) {
            if (!isset($data[$key])) {
                $data[$key] = '';
                continue;
            }
            if (is_null($data[$key])) {
                $data[$key] = '';
            }
        }

        return $data;
    }

    abstract public function transformData($model);
}
