<?php

namespace JiraCloud\Issue;

class IssueSearchJqlResult
{
    private ?string $nextPageToken = null;

    /** @var \JiraCloud\Issue\Issue[] */
    private array $issues = [];

    public function getNextPageToken(): ?string
    {
        return $this->nextPageToken;
    }

    public function setNextPageToken(?string $nextPageToken): void
    {
        $this->nextPageToken = $nextPageToken;
    }

    /** @return \JiraCloud\Issue\Issue[] */
    public function getIssues(): array
    {
        return $this->issues;
    }

    /** @param \JiraCloud\Issue\Issue[] $issues */
    public function setIssues(array $issues): void
    {
        $this->issues = $issues;
    }

    public function getIssue(int $index): \JiraCloud\Issue\Issue
    {
        return $this->issues[$index];
    }
}