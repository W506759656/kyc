<?php

namespace Leonis\Kyc\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\UserInfo
 *
 * @property int $id 实名认证ID
 * @property int $user_id 用户ID
 * @property string $name 姓名
 * @property string $passport_id 证件号
 * @property string $passport_front 证件正面
 * @property string $passport_back 证件背面
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserInfo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserInfo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserInfo query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserInfo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserInfo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserInfo whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserInfo wherePassportBack($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserInfo wherePassportFront($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserInfo wherePassportId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserInfo whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserInfo whereUserId($value)
 * @mixin \Eloquent
 * @property string $passport_handheld 手持身份证照片
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserInfo wherePassportHandheld($value)
 */
class UserInfo extends Model
{
    //
}
