<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';

//WorldDestinations CRUD
Breadcrumbs::for('worlddestinations.index', function ($trail) {
    $trail->push(__('strings.backend.worlddestinations.worlddestinations'), route('worlddestinations.index'));
});

Breadcrumbs::for('worlddestinations.create', function ($trail) {
    $trail->parent('worlddestinations.index');
    $trail->push(__('strings.backend.worlddestinations.create'), route('worlddestinations.create'));
});

Breadcrumbs::for('worlddestinations.edit', function ($trail, $id) {
    $trail->parent('worlddestinations.index');
    $trail->push(__('menus.backend.access.users.edit'), route('worlddestinations.edit', $id));
});

Breadcrumbs::for('worlddestinations.update', function ($trail, $id) {
    $trail->parent('worlddestinations.index');
    $trail->push(__('menus.backend.access.users.update'), route('worlddestinations.update', $id));
});

//Itineraries CRUD

Breadcrumbs::for('countryitineraries.index', function ($trail) {
    $trail->push(__('strings.backend.countryitineraries.countryitineraries'), route('countryitineraries.index'));
});

Breadcrumbs::for('countryitineraries.create', function ($trail) {
    $trail->parent('countryitineraries.index');
    $trail->push(__('strings.backend.worlddestinations.create'), route('countryitineraries.create'));
});

Breadcrumbs::for('countryitineraries.edit', function ($trail, $id) {
    $trail->parent('countryitineraries.index');
    $trail->push(__('menus.backend.access.users.edit'), route('countryitineraries.edit', $id));
});

//Blog CRUD

Breadcrumbs::for('blog.index', function ($trail) {
    $trail->push(__('strings.backend.blog.blog'), route('blog.index'));
});

Breadcrumbs::for('blog.create', function ($trail) {
    $trail->parent('blog.index');
    $trail->push(__('strings.backend.blog.create'), route('blog.create'));
});

Breadcrumbs::for('blog.edit', function ($trail, $id) {
    $trail->parent('blog.index');
    $trail->push(__('menus.backend.access.users.edit'), route('blog.edit', $id));
});
