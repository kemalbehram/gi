<?php

use App\Entity\Region;
use DaveJamesMiller\Breadcrumbs\BreadcrumbsGenerator;
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

Breadcrumbs::register('home', function (BreadcrumbsGenerator $crambs) {
    $crambs->push('Home', route('home'));
});

Breadcrumbs::register('massages.create', function (BreadcrumbsGenerator $crambs) {
    $crambs->push('Проекти', route('massages.create'));
});


Breadcrumbs::register('admin.panel.login', function (BreadcrumbsGenerator $crambs) {
    $crambs->parent('home');
    $crambs->push('Login', route('admin.panel.login'));
});

Breadcrumbs::register('admin.panel.showLoginForm', function (BreadcrumbsGenerator $crambs) {
    $crambs->parent('home');
    $crambs->push('Login', route('admin.panel.showLoginForm'));
});

Breadcrumbs::register('password.request', function (BreadcrumbsGenerator $crambs) {
    $crambs->parent('login');
    $crambs->push('Reset password', route('password.request'));
});

Breadcrumbs::register('register', function (BreadcrumbsGenerator $crambs) {
    $crambs->push('Register', route('register'));
});

Breadcrumbs::register('admin.panel.home', function (BreadcrumbsGenerator $crambs) {
    $crambs->push('Admin', route('admin.panel.home'));
});

////////////////////////////////////////////////////////////////////////////////////

Breadcrumbs::register('admin.users.index', function (BreadcrumbsGenerator $crambs) {
    $crambs->parent('admin.panel.home');
    $crambs->push('Users', route('admin.users.index'));
});

Breadcrumbs::register('admin.users.create', function (BreadcrumbsGenerator $crambs) {
    $crambs->parent('admin.users.index');
    $crambs->push('Create', route('admin.users.create'));
});

Breadcrumbs::register('admin.users.show', function (BreadcrumbsGenerator $crambs, \App\User $user) {
    $crambs->parent('admin.users.index');
    $crambs->push('Show', route('admin.users.show', $user));
});

Breadcrumbs::register('admin.users.edit', function (BreadcrumbsGenerator $crambs, \App\User $user) {
    $crambs->parent('admin.users.show', $user);
    $crambs->push('Edit', route('admin.users.edit', $user));
});

/////////////////////////////////////////////////////////////////////////////////////////

Breadcrumbs::register('admin.floor.categories.index', function (BreadcrumbsGenerator $crumbs) {
    $crumbs->parent('admin.panel.home');
    $crumbs->push('Категорії', route('admin.floor.categories.index'));
});

Breadcrumbs::register('admin.floor.categories.create', function (BreadcrumbsGenerator $crumbs) {
    $crumbs->parent('admin.floor.categories.index');
    $crumbs->push('Створити категорію', route('admin.floor.categories.create'));
});

Breadcrumbs::register('admin.floor.categories.show', function (BreadcrumbsGenerator $crumbs, \App\Entity\Floor\Category $category) {
    if ($parent = $category->parent){
        $crumbs->parent('admin.floor.categories.show', $parent);
    }else{
        $crumbs->parent('admin.floor.categories.index');
    }
    $crumbs->push($category->name, route('admin.floor.categories.show', $category));
});

Breadcrumbs::register('admin.floor.categories.edit', function (BreadcrumbsGenerator $crumbs, \App\Entity\Floor\Category $category) {
    $crumbs->parent('admin.floor.categories.index');
    $crumbs->push('Змінити категорію', route('admin.floor.categories.edit', $category));
});

///////////////////////////////////////////////////////////////////////

Breadcrumbs::register('page', function (BreadcrumbsGenerator $crumbs, $slag) {
    $crumbs->parent('home');
    $crumbs->push($slag, route('page', $slag));
});
Breadcrumbs::register('pageInTown', function (BreadcrumbsGenerator $crumbs, \App\Entity\Project $slag, \App\Entity\Region $region) {
    $crumbs->parent('home');
    $crumbs->push($slag, route('pageInTown',  $slag, $region));
});

//////////////////////////////////////////////////////////////////////////////////////
