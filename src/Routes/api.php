<?php
/**
 * Created by PhpStorm.
 * User: wangding
 * Date: 2019/3/28
 * Time: 上午11:29
 */
Route::group(['prefix' => 'user'], function () {
    //申请实名认证
    Route::post('kyc', 'KycController@kyc');
    //获取实名认证信息
    Route::get('kycInfo', 'KycController@kycInfo');
});
