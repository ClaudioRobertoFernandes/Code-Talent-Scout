<?php

namespace App\Models\GitHub;

use App\Services\GitHubApi\UsersRepository\Repository;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class GitHubRepositories extends Model
{

    protected $fillable = [
        'id',
        'ownerId',
        'idRepo',
        'nodeId',
        'name',
        'fullName',
        'private',
        'owner',
        'htmlUrl',
        'description',
        'fork',
        'url',
        'forksUrl',
        'keysUrl',
        'collaboratorsUrl',
        'teamsUrl',
        'hooksUrl',
        'issueEventsUrl',
        'eventsUrl',
        'assigneesUrl',
        'branchesUrl',
        'tagsUrl',
        'blobsUrl',
        'gitTagsUrl',
        'gitRefsUrl',
        'treesUrl',
        'statusesUrl',
        'languagesUrl',
        'stargazersUrl',
        'contributorsUrl',
        'subscribersUrl',
        'subscriptionUrl',
        'commitsUrl',
        'gitCommitsUrl',
        'commentsUrl',
        'issueCommentUrl',
        'contentsUrl',
        'compareUrl',
        'mergesUrl',
        'archiveUrl',
        'downloadsUrl',
        'issuesUrl',
        'pullsUrl',
        'milestonesUrl',
        'notificationsUrl',
        'labelsUrl',
        'releasesUrl',
        'deploymentsUrl',
        'createdAt',
        'updatedAt',
        'pushedAt',
        'gitUrl',
        'sshUrl',
        'cloneUrl',
        'svnUrl',
        'homepage',
        'size',
        'stargazersCount',
        'watchersCount',
        'language',
        'hasIssues',
        'hasProjects',
        'hasDownloads',
        'hasWiki',
        'hasPages',
        'hasDiscussions',
        'forksCount',
        'mirrorUrl',
        'archived',
        'disabled',
        'openIssuesCount',
        'license',
        'allowForking',
        'isTemplate',
        'webCommitSignoffRequired',
        'topics',
        'visibility',
        'forks',
        'openIssues',
        'watchers',
        'defaultBranch',
        'permissions',
        'networkCount',
        'subscribersCount',
        'created_at',
        'updated_at',
        ];

    public static function getRepositories($user, $repository): string|GitHubRepositories
    {

        $response = Repository::getRepository($user, $repository);

        ds($response);

        try {
            $dataRepo = new GitHubRepositories();
            $dataRepo->ownerId = $response['owner']['id'];
            $dataRepo->idRepo = $response['id'];
            $dataRepo->nodeId = $response['node_id'];
            $dataRepo->name = $response['name'];
            $dataRepo->fullName = $response['full_name'];
            $dataRepo->private = $response['private'];
            $dataRepo->owner = json_encode($response['owner']);
            $dataRepo->htmlUrl = $response['html_url'];
            $dataRepo->description = $response['description'];
            $dataRepo->fork = $response['fork'];
            $dataRepo->url = $response['url'];
            $dataRepo->forksUrl = $response['forks_url'];
            $dataRepo->keysUrl = $response['keys_url'];
            $dataRepo->collaboratorsUrl = $response['collaborators_url'];
            $dataRepo->teamsUrl = $response['teams_url'];
            $dataRepo->hooksUrl = $response['hooks_url'];
            $dataRepo->issueEventsUrl = $response['issue_events_url'];
            $dataRepo->eventsUrl = $response['events_url'];
            $dataRepo->assigneesUrl = $response['assignees_url'];
            $dataRepo->branchesUrl = $response['branches_url'];
            $dataRepo->tagsUrl = $response['tags_url'];
            $dataRepo->blobsUrl = $response['blobs_url'];
            $dataRepo->gitTagsUrl = $response['git_tags_url'];
            $dataRepo->gitRefsUrl = $response['git_refs_url'];
            $dataRepo->treesUrl = $response['trees_url'];
            $dataRepo->statusesUrl = $response['statuses_url'];
            $dataRepo->languagesUrl = $response['languages_url'];
            $dataRepo->stargazersUrl = $response['stargazers_url'];
            $dataRepo->contributorsUrl = $response['contributors_url'];
            $dataRepo->subscribersUrl = $response['subscribers_url'];
            $dataRepo->subscriptionUrl = $response['subscription_url'];
            $dataRepo->commitsUrl = $response['commits_url'];
            $dataRepo->gitCommitsUrl = $response['git_commits_url'];
            $dataRepo->commentsUrl = $response['comments_url'];
            $dataRepo->issueCommentUrl = $response['issue_comment_url'];
            $dataRepo->contentsUrl = $response['contents_url'];
            $dataRepo->compareUrl = $response['compare_url'];
            $dataRepo->mergesUrl = $response['merges_url'];
            $dataRepo->archiveUrl = $response['archive_url'];
            $dataRepo->downloadsUrl = $response['downloads_url'];
            $dataRepo->issuesUrl = $response['issues_url'];
            $dataRepo->pullsUrl = $response['pulls_url'];
            $dataRepo->milestonesUrl = $response['milestones_url'];
            $dataRepo->notificationsUrl = $response['notifications_url'];
            $dataRepo->labelsUrl = $response['labels_url'];
            $dataRepo->releasesUrl = $response['releases_url'];
            $dataRepo->deploymentsUrl = $response['deployments_url'];
            $dataRepo->createdAt = Carbon::parse($response['created_at']);
            $dataRepo->updatedAt = Carbon::parse($response['updated_at']);
            $dataRepo->pushedAt = Carbon::parse($response['pushed_at']);
            $dataRepo->gitUrl = $response['git_url'];
            $dataRepo->sshUrl = $response['ssh_url'];
            $dataRepo->cloneUrl = $response['clone_url'];
            $dataRepo->svnUrl = $response['svn_url'];
            $dataRepo->homepage = $response['homepage'];
            $dataRepo->size = $response['size'];
            $dataRepo->stargazersCount = $response['stargazers_count'];
            $dataRepo->watchersCount = $response['watchers_count'];
            $dataRepo->language = $response['language'];
            $dataRepo->hasIssues = $response['has_issues'];
            $dataRepo->hasProjects = $response['has_projects'];
            $dataRepo->hasDownloads = $response['has_downloads'];
            $dataRepo->hasWiki = $response['has_wiki'];
            $dataRepo->hasPages = $response['has_pages'];
            $dataRepo->hasDiscussions = $response['has_discussions'];
            $dataRepo->forksCount = $response['forks_count'];
            $dataRepo->mirrorUrl = $response['mirror_url'];
            $dataRepo->archived = $response['archived'];
            $dataRepo->disabled = $response['disabled'];
            $dataRepo->openIssuesCount = $response['open_issues_count'];
            $dataRepo->license = json_encode($response['license']);
            $dataRepo->allowForking = $response['allow_forking'];
            $dataRepo->isTemplate = $response['is_template'];
            $dataRepo->webCommitSignoffRequired = $response['web_commit_signoff_required'];
            $dataRepo->topics = json_encode($response['topics']);
            $dataRepo->visibility = $response['visibility'];
            $dataRepo->forks = $response['forks'];
            $dataRepo->openIssues = $response['open_issues'];
            $dataRepo->watchers = $response['watchers'];
            $dataRepo->defaultBranch = $response['default_branch'];
            $dataRepo->permissions = json_encode($response['permissions']);
            $dataRepo->networkCount = $response['network_count'];
            $dataRepo->subscribersCount = $response['subscribers_count'];
            $dataRepo->created_at = Carbon::now();
            $dataRepo->updated_at = Carbon::now();
            $dataRepo->save();
            ds($dataRepo);
            return $dataRepo;
        }catch (\Exception $e) {
            ds($e->getMessage())->s('error');
            return $e->getMessage();
        }
    }
}
