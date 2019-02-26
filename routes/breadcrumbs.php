<?php

Breadcrumbs::register('index', function ($breadcrumbs) {
    $breadcrumbs->push('Index', route('index'));
});

Breadcrumbs::register('login', function ($breadcrumbs) {
    $breadcrumbs->parent('index');
    $breadcrumbs->push('Login', url('/login'));
});

Breadcrumbs::register('register', function ($breadcrumbs) {
    $breadcrumbs->parent('index');
    $breadcrumbs->push('Register', url('/register'));
});

Breadcrumbs::register('resetPassword', function ($breadcrumbs) {
    $breadcrumbs->parent('index');
    $breadcrumbs->push('Reset password', url('/password/reset'));
});

Breadcrumbs::register('emailPassword', function ($breadcrumbs) {
    $breadcrumbs->parent('index');
    $breadcrumbs->push('Send reset password email', url('/password/email'));
});

Breadcrumbs::register('forum', function ($breadcrumbs, $forum) {
    $breadcrumbs->parent('index');
    $breadcrumbs->push($forum->name, $forum->url());
});

Breadcrumbs::register('topic', function ($breadcrumbs, $topic) {
    $breadcrumbs->parent('forum', $topic->forum);
    $breadcrumbs->push($topic->name, $topic->url());
});

Breadcrumbs::register('topic.new', function ($breadcrumbs, $forum) {
    $breadcrumbs->parent('forum', $forum);
    $breadcrumbs->push('New topic', route('topic.new', ['forum' => $forum->id]));
});

Breadcrumbs::register('post.new', function ($breadcrumbs, $topic) {
    $breadcrumbs->parent('topic', $topic);
    $breadcrumbs->push('New post', route('post.new', ['topic' => $topic->id]));
});

Breadcrumbs::register('profile', function($breadcrumbs, $user) {
   $breadcrumbs->parent('index');
   $breadcrumbs->push($user->name, $user->url());
});
