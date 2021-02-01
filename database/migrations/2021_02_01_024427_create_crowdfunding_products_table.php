<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrowdfundingProductsTable extends Migration
{
    /**
     * Run the migrations.
     * 1.首先明确一个概念，假如表A（id，name，foreign_id），表B（foreign_id,name），我们说表A参考了表B的主键作为其外键使用，所以B表示父表，A表是子表
        2.删除和更新有四种设置方式
        （1）cascade：级联，当父表更新、删除，子表会同步更新和删除
        （2）set null：置空，当父表更新、删除的时候，字表会把外键字段变为null，所以这个时候设计表的时候该字段要允许为null，否则会出错
        （3）restrict：父表在删除和更新记录的时候，要在子表中检查是否有有关该父表要更新和删除的记录，如果有，则不允许删除个更改
        （4）no action：和restrict一样
     * @return void
     */
    public function up()
    {
        Schema::create('crowdfunding_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->decimal('target_amount', 10, 2);
            $table->decimal('total_amount', 10, 2)->default(0);
            $table->unsignedInteger('user_count')->default(0);
            $table->dateTime('end_at');
            $table->string('status')->default(\App\Models\CrowdfundingProduct::STATUS_FUNDING);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crowdfunding_products');
    }
}
