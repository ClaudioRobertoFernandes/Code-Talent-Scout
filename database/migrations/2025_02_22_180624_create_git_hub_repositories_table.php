<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('git_hub_repositories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ownerId')->index()->constrained('git_hub_profiles', 'gitId');
            $table->integer('idRepo')->nullable();
            $table->string('nodeId')->nullable();
            $table->string('name')->nullable();
            $table->string('fullName')->nullable();
            $table->boolean('private')->nullable();
            $table->json('owner')->nullable();
            $table->string('htmlUrl')->nullable();
            $table->string('description')->nullable();
            $table->boolean('fork')->nullable();
            $table->string('url')->nullable();
            $table->string('forksUrl')->nullable();
            $table->string('keysUrl')->nullable();
            $table->string('collaboratorsUrl')->nullable();
            $table->string('teamsUrl')->nullable();
            $table->string('hooksUrl')->nullable();
            $table->string('issueEventsUrl')->nullable();
            $table->string('eventsUrl')->nullable();
            $table->string('assigneesUrl')->nullable();
            $table->string('branchesUrl')->nullable();
            $table->string('tagsUrl')->nullable();
            $table->string('blobsUrl')->nullable();
            $table->string('gitTagsUrl')->nullable();
            $table->string('gitRefsUrl')->nullable();
            $table->string('treesUrl')->nullable();
            $table->string('statusesUrl')->nullable();
            $table->string('languagesUrl')->nullable();
            $table->string('stargazersUrl')->nullable();
            $table->string('contributorsUrl')->nullable();
            $table->string('subscribersUrl')->nullable();
            $table->string('subscriptionUrl')->nullable();
            $table->string('commitsUrl')->nullable();
            $table->string('gitCommitsUrl')->nullable();
            $table->string('commentsUrl')->nullable();
            $table->string('issueCommentUrl')->nullable();
            $table->string('contentsUrl')->nullable();
            $table->string('compareUrl')->nullable();
            $table->string('mergesUrl')->nullable();
            $table->string('archiveUrl')->nullable();
            $table->string('downloadsUrl')->nullable();
            $table->string('issuesUrl')->nullable();
            $table->string('pullsUrl')->nullable();
            $table->string('milestonesUrl')->nullable();
            $table->string('notificationsUrl')->nullable();
            $table->string('labelsUrl')->nullable();
            $table->string('releasesUrl')->nullable();
            $table->string('deploymentsUrl')->nullable();
            $table->timestamp('createdAt')->nullable();
            $table->timestamp('updatedAt')->nullable();
            $table->timestamp('pushedAt')->nullable();
            $table->string('gitUrl')->nullable();
            $table->string('sshUrl')->nullable();
            $table->string('cloneUrl')->nullable();
            $table->string('svnUrl')->nullable();
            $table->string('homepage')->nullable();
            $table->integer('size')->nullable();
            $table->integer('stargazersCount')->nullable();
            $table->integer('watchersCount')->nullable();
            $table->string('language')->nullable();
            $table->boolean('hasIssues')->nullable();
            $table->boolean('hasProjects')->nullable();
            $table->boolean('hasDownloads')->nullable();
            $table->boolean('hasWiki')->nullable();
            $table->boolean('hasPages')->nullable();
            $table->boolean('hasDiscussions')->nullable();
            $table->integer('forksCount')->nullable();
            $table->string('mirrorUrl')->nullable();
            $table->boolean('archived')->nullable();
            $table->boolean('disabled')->nullable();
            $table->integer('openIssuesCount')->nullable();
            $table->string('license')->nullable();
            $table->boolean('allowForking')->nullable();
            $table->boolean('isTemplate')->nullable();
            $table->boolean('webCommitSignoffRequired')->nullable();
            $table->json('topics')->nullable();
            $table->string('visibility')->nullable();
            $table->integer('forks')->nullable();
            $table->integer('openIssues')->nullable();
            $table->integer('watchers')->nullable();
            $table->string('defaultBranch')->nullable();
            $table->json('permissions')->nullable();
            $table->integer('networkCount')->nullable();
            $table->integer('subscribersCount')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('git_hub_repositories');
    }
};
