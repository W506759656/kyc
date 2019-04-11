<?php
/**
 * Created by PhpStorm.
 * User: wangding
 * Date: 2019/3/29
 * Time: 下午3:41
 */

namespace Leonis\Kyc\Controllers;


use Leonis\Kyc\Models\UserInfo;
use Leonis\Kyc\Requests\KycRequest;
use Leonis\Kyc\Transforms\KycTransform;

class KycController extends Controller
{
    /**
     * 实名认证申请
     *
     * @param KycRequest $request
     * @return \Illuminate\Http\Response
     */
    public function kyc(KycRequest $request)
    {
        $user = \Auth::user();
        if (in_array($user->kyc_status, [1, 2])) {
            return $this->failed('不得重复提交实名认证');
        }
        $kyc = UserInfo::where('user_id', $user->id)->first();
        $kyc = $kyc ?? new UserInfo;
        $kyc->user_id = $user->id;
        $kyc->name = $request->input('name');
        $kyc->passport_id = $request->input('passport_id');
        $kyc->passport_front = $request->input('passport_front');
        $kyc->passport_back = $request->input('passport_back');
        $kyc->passport_handheld = $request->input('passport_handheld');
        try {
            \DB::transaction(function () use ($kyc, $user) {
                $kyc->save();
                //改变用户认证信息状态
                $user->kyc_status = 1;
                $user->save();
            });
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return $this->failed('网络异常');
        }
        return $this->success();
    }

    /**
     * 获取实名认证信息
     * @return \Dingo\Api\Http\Response
     */
    public function kycInfo()
    {
        $user = \Auth::user();
        $kyc = UserInfo::where('user_id', $user->id)->first();
        return $this->response()->item($kyc, new KycTransform());
    }
}