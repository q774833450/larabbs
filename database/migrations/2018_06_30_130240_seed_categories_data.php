<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedCategoriesData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $categories = [
            [
                'name'        => '职业体验',
                'description' => '分享职业信息，分享发现',
            ],
            [
                'name'        => '面试技巧',
                'description' => '优秀的学长学姐面试技巧',
            ],
            [
                'name'        => '职业问答',
                'description' => '请保持友善，互帮互助',
            ],
            [
                'name'        => '职业信息',
                'description' => '职业信息，站点公告',
            ],
        ];

        DB::table('categories')->insert($categories);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('categories')->truncate();
    }
}
