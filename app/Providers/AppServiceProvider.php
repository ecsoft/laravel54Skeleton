<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //低版本MySql支持的utf8编码最大字符长度为3字节，如果遇到4字节的宽字符就会出现插入异常。
        //手动配置迁移命令migrate生成的默认字符串长度。
        //解决migrate "1071 Specified key was too long" 错误。
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
