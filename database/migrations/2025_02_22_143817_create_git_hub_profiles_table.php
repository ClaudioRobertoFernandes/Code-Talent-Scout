<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('git_hub_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->index()->constrained();
            $table->string('login')->nullable();
            $table->unsignedBigInteger('gitId')->nullable()->index();
            $table->string('nodeId')->nullable();
            $table->string('avatarUrl')->nullable();
            $table->string('gravatarId')->nullable();
            $table->string('url')->nullable();
            $table->string('htmlUrl')->nullable();
            $table->string('followersUrl')->nullable();
            $table->string('followingUrl')->nullable();
            $table->string('gistsUrl')->nullable();
            $table->string('starredUrl')->nullable();
            $table->string('subscriptionsUrl')->nullable();
            $table->string('organizationsUrl')->nullable();
            $table->string('reposUrl')->nullable();
            $table->string('eventsUrl')->nullable();
            $table->string('receivedEventsUrl')->nullable();
            $table->string('type')->nullable();
            $table->string('userViewType')->nullable();
            $table->string('siteAdmin')->nullable();
            $table->string('name')->nullable();
            $table->string('company')->nullable();
            $table->string('blog')->nullable();
            $table->string('location')->nullable();
            $table->string('email')->nullable();
            $table->string('hireable')->nullable();
            $table->string('bio')->nullable();
            $table->string('twitterUsername')->nullable();
            $table->integer('publicRepos')->nullable();
            $table->integer('publicGists')->nullable();
            $table->integer('followers')->nullable();
            $table->integer('following')->nullable();
            $table->timestamp('gitCreatedAt')->nullable();
            $table->timestamp('gitUpdatedAt')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('git_hub_profiles');
    }
};
