<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/shell' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shell.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shell/pages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pages.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'pages.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shell/pages/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pages.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shell/media' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'media.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'media.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shell/media/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'media.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shell/slides' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'slides.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'slides.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shell/slides/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'slides.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shell/admins' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admins.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admins.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shell/admins/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admins.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shell/board-members' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'board-members.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'board-members.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shell/board-members/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'board-members.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shell/brands' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brands.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'brands.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shell/brands/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brands.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shell/posts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'posts.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'posts.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shell/posts/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'posts.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shell/news' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'news.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'news.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shell/news/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'news.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shell/videos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'videos.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'videos.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shell/videos/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'videos.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shell/memberposts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'memberposts.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'memberposts.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shell/memberposts/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'memberposts.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shell/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shell/subscribers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscribers.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shell/subscribers-users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscribers.export',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shell/launch-users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'launch-users.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shell/export-users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.export',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shell/export-launch-users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'launch-users.export',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shell/menuitems' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'menuitems.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'menuitems.save',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shell/menuitems/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'menuitems.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shell/media-folders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yeecaY3DtfVvtrlw',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shell/media-thumbnails' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cs8w8fjpyLHxoCoT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shell/optimize' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZekYRFQMUlpAeOz1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shell/migrate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UamL7umdMdlpRiMZ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shell/render-sitemap' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shell.render-sitemap',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shell/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shell.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xIuf8chQwM4PiyFU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shell/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shell.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/subscribe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.subscribe',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/contact' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.contact',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/change-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.change-password',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/define-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.define-password',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.login',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.register',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/forgot-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.forgot-password',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.reset-password',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/save-profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.save-profile',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/launch-questions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.launch-questions',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/profil' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home.profile',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cikis' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sifremi-degistir' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home.change-password',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/uyelik' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home.register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/hesap-onayi' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home.confirmation',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/giris' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sifremi-unuttum' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home.forgot-password',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sifremi-sifirla' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home.reset-password',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RSQUEQwt5R1qae1d',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/lansman/sorular' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iUAdv9mtoIXV166c',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2RRDsJF0qcaqC6Zy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/shell/(?|p(?|ages/([^/]++)(?|(*:37)|/edit(*:49)|(*:56))|osts/([^/]++)(?|(*:80)|/edit(*:92)|(*:99)))|me(?|dia/(?|([^/]++)(?|(*:131)|/edit(*:144)|(*:152))|mass\\-action(*:173)|upload(*:187))|mberposts/([^/]++)(?|(*:217)|/edit(*:230)|(*:238)))|s(?|lides/([^/]++)(?|(*:269)|/edit(*:282)|(*:290))|ubscribers/([^/]++)(?|(*:321)))|admins/([^/]++)(?|(*:349)|/edit(*:362)|(*:370))|b(?|oard\\-members/([^/]++)(?|(*:408)|/edit(*:421)|(*:429))|rands/([^/]++)(?|(*:455)|/edit(*:468)|(*:476)))|news/([^/]++)(?|(*:502)|/edit(*:515)|(*:523))|videos/([^/]++)(?|(*:550)|/edit(*:563)|(*:571))|users/(?|([^/]++)(?|(*:600)|/edit(*:613)|(*:621))|preconfirm/([^/]++)(*:649)|confirm/([^/]++)(*:673))|launch\\-users/([^/]++)(?|(*:707)))|/uyelere\\-ozel/([^/]++)(*:740)|/en/(?|b(?|oard\\-of\\-management/([^/]++)(*:788)|log/([^/]++)(*:808))|ai\\-actual/([^/]++)(*:836)|([^/]++)(*:852))|/yonetim\\-kurulu/([^/]++)(*:886)|/blog/([^/]++)(*:908)|/ai\\-guncel/([^/]++)(*:936)|/([^/]++)(*:953))/?$}sDu',
    ),
    3 => 
    array (
      37 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pages.show',
          ),
          1 => 
          array (
            0 => 'page',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      49 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pages.edit',
          ),
          1 => 
          array (
            0 => 'page',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      56 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pages.update',
          ),
          1 => 
          array (
            0 => 'page',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'pages.destroy',
          ),
          1 => 
          array (
            0 => 'page',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      80 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'posts.show',
          ),
          1 => 
          array (
            0 => 'post',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      92 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'posts.edit',
          ),
          1 => 
          array (
            0 => 'post',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      99 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'posts.update',
          ),
          1 => 
          array (
            0 => 'post',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'posts.destroy',
          ),
          1 => 
          array (
            0 => 'post',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      131 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'media.show',
          ),
          1 => 
          array (
            0 => 'medium',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      144 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'media.edit',
          ),
          1 => 
          array (
            0 => 'medium',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      152 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'media.update',
          ),
          1 => 
          array (
            0 => 'medium',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'media.destroy',
          ),
          1 => 
          array (
            0 => 'medium',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      173 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'media.mass-action',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      187 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fg65xDe1vU16BlOJ',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      217 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'memberposts.show',
          ),
          1 => 
          array (
            0 => 'memberpost',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      230 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'memberposts.edit',
          ),
          1 => 
          array (
            0 => 'memberpost',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      238 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'memberposts.update',
          ),
          1 => 
          array (
            0 => 'memberpost',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'memberposts.destroy',
          ),
          1 => 
          array (
            0 => 'memberpost',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      269 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'slides.show',
          ),
          1 => 
          array (
            0 => 'slide',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      282 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'slides.edit',
          ),
          1 => 
          array (
            0 => 'slide',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      290 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'slides.update',
          ),
          1 => 
          array (
            0 => 'slide',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'slides.destroy',
          ),
          1 => 
          array (
            0 => 'slide',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      321 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscribers.show',
          ),
          1 => 
          array (
            0 => 'subscriber',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'subscribers.destroy',
          ),
          1 => 
          array (
            0 => 'subscriber',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      349 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admins.show',
          ),
          1 => 
          array (
            0 => 'admin',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      362 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admins.edit',
          ),
          1 => 
          array (
            0 => 'admin',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      370 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admins.update',
          ),
          1 => 
          array (
            0 => 'admin',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admins.destroy',
          ),
          1 => 
          array (
            0 => 'admin',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      408 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'board-members.show',
          ),
          1 => 
          array (
            0 => 'board_member',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      421 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'board-members.edit',
          ),
          1 => 
          array (
            0 => 'board_member',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      429 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'board-members.update',
          ),
          1 => 
          array (
            0 => 'board_member',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'board-members.destroy',
          ),
          1 => 
          array (
            0 => 'board_member',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      455 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brands.show',
          ),
          1 => 
          array (
            0 => 'brand',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      468 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brands.edit',
          ),
          1 => 
          array (
            0 => 'brand',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      476 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brands.update',
          ),
          1 => 
          array (
            0 => 'brand',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'brands.destroy',
          ),
          1 => 
          array (
            0 => 'brand',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      502 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'news.show',
          ),
          1 => 
          array (
            0 => 'news',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      515 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'news.edit',
          ),
          1 => 
          array (
            0 => 'news',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      523 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'news.update',
          ),
          1 => 
          array (
            0 => 'news',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'news.destroy',
          ),
          1 => 
          array (
            0 => 'news',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      550 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'videos.show',
          ),
          1 => 
          array (
            0 => 'video',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      563 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'videos.edit',
          ),
          1 => 
          array (
            0 => 'video',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      571 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'videos.update',
          ),
          1 => 
          array (
            0 => 'video',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'videos.destroy',
          ),
          1 => 
          array (
            0 => 'video',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      600 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.show',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      613 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.edit',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      621 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.update',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'users.destroy',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      649 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.preconfirm',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      673 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.confirm',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      707 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'launch-users.show',
          ),
          1 => 
          array (
            0 => 'launch_user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'launch-users.destroy',
          ),
          1 => 
          array (
            0 => 'launch_user',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      740 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WTetSMqa6xYGFaXz',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      788 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::070JYFjnIXqyFMoD',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      808 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cpFoAWe3bVgXVj9N',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      836 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NMCYMSl5GfFlWxhH',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      852 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jPEoNcX09BtEiglw',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      886 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5BlH3BAIjT6I0VEn',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      908 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::84j44e9cYO7ZLVzx',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      936 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::axqpA7LIK8763702',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      953 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2G9Cx6kRyO7Uc36z',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'shell.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'uses' => 'App\\Http\\Controllers\\ShellController@index',
        'controller' => 'App\\Http\\Controllers\\ShellController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
        'as' => 'shell.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'pages.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/pages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'pages.index',
        'uses' => 'App\\Http\\Controllers\\PageController@index',
        'controller' => 'App\\Http\\Controllers\\PageController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'pages.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/pages/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'pages.create',
        'uses' => 'App\\Http\\Controllers\\PageController@create',
        'controller' => 'App\\Http\\Controllers\\PageController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'pages.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'shell/pages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'pages.store',
        'uses' => 'App\\Http\\Controllers\\PageController@store',
        'controller' => 'App\\Http\\Controllers\\PageController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'pages.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/pages/{page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'pages.show',
        'uses' => 'App\\Http\\Controllers\\PageController@show',
        'controller' => 'App\\Http\\Controllers\\PageController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'pages.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/pages/{page}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'pages.edit',
        'uses' => 'App\\Http\\Controllers\\PageController@edit',
        'controller' => 'App\\Http\\Controllers\\PageController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'pages.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'shell/pages/{page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'pages.update',
        'uses' => 'App\\Http\\Controllers\\PageController@update',
        'controller' => 'App\\Http\\Controllers\\PageController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'pages.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'shell/pages/{page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'pages.destroy',
        'uses' => 'App\\Http\\Controllers\\PageController@destroy',
        'controller' => 'App\\Http\\Controllers\\PageController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'media.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/media',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'media.index',
        'uses' => 'App\\Http\\Controllers\\MediaController@index',
        'controller' => 'App\\Http\\Controllers\\MediaController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'media.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/media/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'media.create',
        'uses' => 'App\\Http\\Controllers\\MediaController@create',
        'controller' => 'App\\Http\\Controllers\\MediaController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'media.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'shell/media',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'media.store',
        'uses' => 'App\\Http\\Controllers\\MediaController@store',
        'controller' => 'App\\Http\\Controllers\\MediaController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'media.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/media/{medium}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'media.show',
        'uses' => 'App\\Http\\Controllers\\MediaController@show',
        'controller' => 'App\\Http\\Controllers\\MediaController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'media.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/media/{medium}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'media.edit',
        'uses' => 'App\\Http\\Controllers\\MediaController@edit',
        'controller' => 'App\\Http\\Controllers\\MediaController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'media.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'shell/media/{medium}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'media.update',
        'uses' => 'App\\Http\\Controllers\\MediaController@update',
        'controller' => 'App\\Http\\Controllers\\MediaController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'media.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'shell/media/{medium}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'media.destroy',
        'uses' => 'App\\Http\\Controllers\\MediaController@destroy',
        'controller' => 'App\\Http\\Controllers\\MediaController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'slides.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/slides',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'slides.index',
        'uses' => 'App\\Http\\Controllers\\SlideController@index',
        'controller' => 'App\\Http\\Controllers\\SlideController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'slides.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/slides/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'slides.create',
        'uses' => 'App\\Http\\Controllers\\SlideController@create',
        'controller' => 'App\\Http\\Controllers\\SlideController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'slides.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'shell/slides',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'slides.store',
        'uses' => 'App\\Http\\Controllers\\SlideController@store',
        'controller' => 'App\\Http\\Controllers\\SlideController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'slides.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/slides/{slide}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'slides.show',
        'uses' => 'App\\Http\\Controllers\\SlideController@show',
        'controller' => 'App\\Http\\Controllers\\SlideController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'slides.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/slides/{slide}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'slides.edit',
        'uses' => 'App\\Http\\Controllers\\SlideController@edit',
        'controller' => 'App\\Http\\Controllers\\SlideController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'slides.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'shell/slides/{slide}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'slides.update',
        'uses' => 'App\\Http\\Controllers\\SlideController@update',
        'controller' => 'App\\Http\\Controllers\\SlideController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'slides.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'shell/slides/{slide}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'slides.destroy',
        'uses' => 'App\\Http\\Controllers\\SlideController@destroy',
        'controller' => 'App\\Http\\Controllers\\SlideController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admins.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/admins',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'admins.index',
        'uses' => 'App\\Http\\Controllers\\AdminController@index',
        'controller' => 'App\\Http\\Controllers\\AdminController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admins.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/admins/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'admins.create',
        'uses' => 'App\\Http\\Controllers\\AdminController@create',
        'controller' => 'App\\Http\\Controllers\\AdminController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admins.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'shell/admins',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'admins.store',
        'uses' => 'App\\Http\\Controllers\\AdminController@store',
        'controller' => 'App\\Http\\Controllers\\AdminController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admins.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/admins/{admin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'admins.show',
        'uses' => 'App\\Http\\Controllers\\AdminController@show',
        'controller' => 'App\\Http\\Controllers\\AdminController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admins.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/admins/{admin}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'admins.edit',
        'uses' => 'App\\Http\\Controllers\\AdminController@edit',
        'controller' => 'App\\Http\\Controllers\\AdminController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admins.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'shell/admins/{admin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'admins.update',
        'uses' => 'App\\Http\\Controllers\\AdminController@update',
        'controller' => 'App\\Http\\Controllers\\AdminController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admins.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'shell/admins/{admin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'admins.destroy',
        'uses' => 'App\\Http\\Controllers\\AdminController@destroy',
        'controller' => 'App\\Http\\Controllers\\AdminController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'board-members.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/board-members',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'board-members.index',
        'uses' => 'App\\Http\\Controllers\\BoardMemberController@index',
        'controller' => 'App\\Http\\Controllers\\BoardMemberController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'board-members.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/board-members/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'board-members.create',
        'uses' => 'App\\Http\\Controllers\\BoardMemberController@create',
        'controller' => 'App\\Http\\Controllers\\BoardMemberController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'board-members.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'shell/board-members',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'board-members.store',
        'uses' => 'App\\Http\\Controllers\\BoardMemberController@store',
        'controller' => 'App\\Http\\Controllers\\BoardMemberController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'board-members.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/board-members/{board_member}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'board-members.show',
        'uses' => 'App\\Http\\Controllers\\BoardMemberController@show',
        'controller' => 'App\\Http\\Controllers\\BoardMemberController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'board-members.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/board-members/{board_member}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'board-members.edit',
        'uses' => 'App\\Http\\Controllers\\BoardMemberController@edit',
        'controller' => 'App\\Http\\Controllers\\BoardMemberController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'board-members.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'shell/board-members/{board_member}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'board-members.update',
        'uses' => 'App\\Http\\Controllers\\BoardMemberController@update',
        'controller' => 'App\\Http\\Controllers\\BoardMemberController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'board-members.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'shell/board-members/{board_member}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'board-members.destroy',
        'uses' => 'App\\Http\\Controllers\\BoardMemberController@destroy',
        'controller' => 'App\\Http\\Controllers\\BoardMemberController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'brands.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/brands',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'brands.index',
        'uses' => 'App\\Http\\Controllers\\BrandController@index',
        'controller' => 'App\\Http\\Controllers\\BrandController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'brands.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/brands/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'brands.create',
        'uses' => 'App\\Http\\Controllers\\BrandController@create',
        'controller' => 'App\\Http\\Controllers\\BrandController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'brands.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'shell/brands',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'brands.store',
        'uses' => 'App\\Http\\Controllers\\BrandController@store',
        'controller' => 'App\\Http\\Controllers\\BrandController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'brands.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/brands/{brand}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'brands.show',
        'uses' => 'App\\Http\\Controllers\\BrandController@show',
        'controller' => 'App\\Http\\Controllers\\BrandController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'brands.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/brands/{brand}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'brands.edit',
        'uses' => 'App\\Http\\Controllers\\BrandController@edit',
        'controller' => 'App\\Http\\Controllers\\BrandController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'brands.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'shell/brands/{brand}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'brands.update',
        'uses' => 'App\\Http\\Controllers\\BrandController@update',
        'controller' => 'App\\Http\\Controllers\\BrandController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'brands.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'shell/brands/{brand}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'brands.destroy',
        'uses' => 'App\\Http\\Controllers\\BrandController@destroy',
        'controller' => 'App\\Http\\Controllers\\BrandController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'posts.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/posts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'posts.index',
        'uses' => 'App\\Http\\Controllers\\PostController@index',
        'controller' => 'App\\Http\\Controllers\\PostController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'posts.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/posts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'posts.create',
        'uses' => 'App\\Http\\Controllers\\PostController@create',
        'controller' => 'App\\Http\\Controllers\\PostController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'posts.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'shell/posts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'posts.store',
        'uses' => 'App\\Http\\Controllers\\PostController@store',
        'controller' => 'App\\Http\\Controllers\\PostController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'posts.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/posts/{post}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'posts.show',
        'uses' => 'App\\Http\\Controllers\\PostController@show',
        'controller' => 'App\\Http\\Controllers\\PostController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'posts.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/posts/{post}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'posts.edit',
        'uses' => 'App\\Http\\Controllers\\PostController@edit',
        'controller' => 'App\\Http\\Controllers\\PostController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'posts.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'shell/posts/{post}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'posts.update',
        'uses' => 'App\\Http\\Controllers\\PostController@update',
        'controller' => 'App\\Http\\Controllers\\PostController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'posts.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'shell/posts/{post}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'posts.destroy',
        'uses' => 'App\\Http\\Controllers\\PostController@destroy',
        'controller' => 'App\\Http\\Controllers\\PostController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'news.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/news',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'news.index',
        'uses' => 'App\\Http\\Controllers\\NewsController@index',
        'controller' => 'App\\Http\\Controllers\\NewsController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'news.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/news/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'news.create',
        'uses' => 'App\\Http\\Controllers\\NewsController@create',
        'controller' => 'App\\Http\\Controllers\\NewsController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'news.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'shell/news',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'news.store',
        'uses' => 'App\\Http\\Controllers\\NewsController@store',
        'controller' => 'App\\Http\\Controllers\\NewsController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'news.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/news/{news}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'news.show',
        'uses' => 'App\\Http\\Controllers\\NewsController@show',
        'controller' => 'App\\Http\\Controllers\\NewsController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'news.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/news/{news}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'news.edit',
        'uses' => 'App\\Http\\Controllers\\NewsController@edit',
        'controller' => 'App\\Http\\Controllers\\NewsController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'news.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'shell/news/{news}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'news.update',
        'uses' => 'App\\Http\\Controllers\\NewsController@update',
        'controller' => 'App\\Http\\Controllers\\NewsController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'news.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'shell/news/{news}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'news.destroy',
        'uses' => 'App\\Http\\Controllers\\NewsController@destroy',
        'controller' => 'App\\Http\\Controllers\\NewsController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'videos.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/videos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'videos.index',
        'uses' => 'App\\Http\\Controllers\\VideoController@index',
        'controller' => 'App\\Http\\Controllers\\VideoController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'videos.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/videos/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'videos.create',
        'uses' => 'App\\Http\\Controllers\\VideoController@create',
        'controller' => 'App\\Http\\Controllers\\VideoController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'videos.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'shell/videos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'videos.store',
        'uses' => 'App\\Http\\Controllers\\VideoController@store',
        'controller' => 'App\\Http\\Controllers\\VideoController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'videos.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/videos/{video}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'videos.show',
        'uses' => 'App\\Http\\Controllers\\VideoController@show',
        'controller' => 'App\\Http\\Controllers\\VideoController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'videos.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/videos/{video}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'videos.edit',
        'uses' => 'App\\Http\\Controllers\\VideoController@edit',
        'controller' => 'App\\Http\\Controllers\\VideoController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'videos.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'shell/videos/{video}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'videos.update',
        'uses' => 'App\\Http\\Controllers\\VideoController@update',
        'controller' => 'App\\Http\\Controllers\\VideoController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'videos.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'shell/videos/{video}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'videos.destroy',
        'uses' => 'App\\Http\\Controllers\\VideoController@destroy',
        'controller' => 'App\\Http\\Controllers\\VideoController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'memberposts.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/memberposts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'memberposts.index',
        'uses' => 'App\\Http\\Controllers\\MemberPostController@index',
        'controller' => 'App\\Http\\Controllers\\MemberPostController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'memberposts.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/memberposts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'memberposts.create',
        'uses' => 'App\\Http\\Controllers\\MemberPostController@create',
        'controller' => 'App\\Http\\Controllers\\MemberPostController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'memberposts.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'shell/memberposts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'memberposts.store',
        'uses' => 'App\\Http\\Controllers\\MemberPostController@store',
        'controller' => 'App\\Http\\Controllers\\MemberPostController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'memberposts.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/memberposts/{memberpost}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'memberposts.show',
        'uses' => 'App\\Http\\Controllers\\MemberPostController@show',
        'controller' => 'App\\Http\\Controllers\\MemberPostController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'memberposts.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/memberposts/{memberpost}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'memberposts.edit',
        'uses' => 'App\\Http\\Controllers\\MemberPostController@edit',
        'controller' => 'App\\Http\\Controllers\\MemberPostController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'memberposts.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'shell/memberposts/{memberpost}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'memberposts.update',
        'uses' => 'App\\Http\\Controllers\\MemberPostController@update',
        'controller' => 'App\\Http\\Controllers\\MemberPostController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'memberposts.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'shell/memberposts/{memberpost}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'memberposts.destroy',
        'uses' => 'App\\Http\\Controllers\\MemberPostController@destroy',
        'controller' => 'App\\Http\\Controllers\\MemberPostController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'users.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'users.index',
        'uses' => 'App\\Http\\Controllers\\UserController@index',
        'controller' => 'App\\Http\\Controllers\\UserController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'users.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'users.show',
        'uses' => 'App\\Http\\Controllers\\UserController@show',
        'controller' => 'App\\Http\\Controllers\\UserController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'users.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/users/{user}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'users.edit',
        'uses' => 'App\\Http\\Controllers\\UserController@edit',
        'controller' => 'App\\Http\\Controllers\\UserController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'users.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'shell/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'users.update',
        'uses' => 'App\\Http\\Controllers\\UserController@update',
        'controller' => 'App\\Http\\Controllers\\UserController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'users.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'shell/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'users.destroy',
        'uses' => 'App\\Http\\Controllers\\UserController@destroy',
        'controller' => 'App\\Http\\Controllers\\UserController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subscribers.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/subscribers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'subscribers.index',
        'uses' => 'App\\Http\\Controllers\\SubscriberController@index',
        'controller' => 'App\\Http\\Controllers\\SubscriberController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subscribers.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/subscribers/{subscriber}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'subscribers.show',
        'uses' => 'App\\Http\\Controllers\\SubscriberController@show',
        'controller' => 'App\\Http\\Controllers\\SubscriberController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subscribers.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'shell/subscribers/{subscriber}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'subscribers.destroy',
        'uses' => 'App\\Http\\Controllers\\SubscriberController@destroy',
        'controller' => 'App\\Http\\Controllers\\SubscriberController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subscribers.export' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/subscribers-users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'uses' => 'App\\Http\\Controllers\\SubscriberController@export',
        'controller' => 'App\\Http\\Controllers\\SubscriberController@export',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
        'as' => 'subscribers.export',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'launch-users.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/launch-users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'launch-users.index',
        'uses' => 'App\\Http\\Controllers\\LaunchUsersController@index',
        'controller' => 'App\\Http\\Controllers\\LaunchUsersController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'launch-users.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/launch-users/{launch_user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'launch-users.show',
        'uses' => 'App\\Http\\Controllers\\LaunchUsersController@show',
        'controller' => 'App\\Http\\Controllers\\LaunchUsersController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'launch-users.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'shell/launch-users/{launch_user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'as' => 'launch-users.destroy',
        'uses' => 'App\\Http\\Controllers\\LaunchUsersController@destroy',
        'controller' => 'App\\Http\\Controllers\\LaunchUsersController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'users.preconfirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/users/preconfirm/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@preConfirmAccount',
        'controller' => 'App\\Http\\Controllers\\UserController@preConfirmAccount',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
        'as' => 'users.preconfirm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'users.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/users/confirm/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@confirmAccount',
        'controller' => 'App\\Http\\Controllers\\UserController@confirmAccount',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
        'as' => 'users.confirm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'users.export' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/export-users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@export',
        'controller' => 'App\\Http\\Controllers\\UserController@export',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
        'as' => 'users.export',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'launch-users.export' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/export-launch-users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'uses' => 'App\\Http\\Controllers\\LaunchUsersController@export',
        'controller' => 'App\\Http\\Controllers\\LaunchUsersController@export',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
        'as' => 'launch-users.export',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'menuitems.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/menuitems',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'uses' => 'App\\Http\\Controllers\\MenuItemController@index',
        'controller' => 'App\\Http\\Controllers\\MenuItemController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
        'as' => 'menuitems.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'menuitems.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/menuitems/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'uses' => 'App\\Http\\Controllers\\MenuItemController@edit',
        'controller' => 'App\\Http\\Controllers\\MenuItemController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
        'as' => 'menuitems.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'menuitems.save' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'shell/menuitems',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'uses' => 'App\\Http\\Controllers\\MenuItemController@save',
        'controller' => 'App\\Http\\Controllers\\MenuItemController@save',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
        'as' => 'menuitems.save',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::yeecaY3DtfVvtrlw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/media-folders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'uses' => 'App\\Http\\Controllers\\ShellController@mediaFolders',
        'controller' => 'App\\Http\\Controllers\\ShellController@mediaFolders',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
        'as' => 'generated::yeecaY3DtfVvtrlw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::cs8w8fjpyLHxoCoT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/media-thumbnails',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'uses' => 'App\\Http\\Controllers\\ShellController@mediaThumbnails',
        'controller' => 'App\\Http\\Controllers\\ShellController@mediaThumbnails',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
        'as' => 'generated::cs8w8fjpyLHxoCoT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'media.mass-action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'shell/media/mass-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'uses' => 'App\\Http\\Controllers\\MediaController@massAction',
        'controller' => 'App\\Http\\Controllers\\MediaController@massAction',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
        'as' => 'media.mass-action',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::fg65xDe1vU16BlOJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'shell/media/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'uses' => 'App\\Http\\Controllers\\MediaController@upload',
        'controller' => 'App\\Http\\Controllers\\MediaController@upload',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
        'as' => 'generated::fg65xDe1vU16BlOJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ZekYRFQMUlpAeOz1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/optimize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'uses' => 'App\\Http\\Controllers\\ShellController@optimize',
        'controller' => 'App\\Http\\Controllers\\ShellController@optimize',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
        'as' => 'generated::ZekYRFQMUlpAeOz1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::UamL7umdMdlpRiMZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/migrate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'uses' => 'App\\Http\\Controllers\\ShellController@migrate',
        'controller' => 'App\\Http\\Controllers\\ShellController@migrate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
        'as' => 'generated::UamL7umdMdlpRiMZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'shell.render-sitemap' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/render-sitemap',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admincheck',
        ),
        'uses' => 'App\\Http\\Controllers\\ShellController@renderSitemap',
        'controller' => 'App\\Http\\Controllers\\ShellController@renderSitemap',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/shell',
        'where' => 
        array (
        ),
        'as' => 'shell.render-sitemap',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'shell.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ShellController@login',
        'controller' => 'App\\Http\\Controllers\\ShellController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'shell.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::xIuf8chQwM4PiyFU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'shell/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ShellController@processLogin',
        'controller' => 'App\\Http\\Controllers\\ShellController@processLogin',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::xIuf8chQwM4PiyFU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'shell.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shell/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ShellController@logout',
        'controller' => 'App\\Http\\Controllers\\ShellController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'shell.logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'api.subscribe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/subscribe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ApiController@subscribe',
        'controller' => 'App\\Http\\Controllers\\ApiController@subscribe',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'api.subscribe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'api.contact' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ApiController@contact',
        'controller' => 'App\\Http\\Controllers\\ApiController@contact',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'api.contact',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'api.change-password' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/change-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ApiController@changePassword',
        'controller' => 'App\\Http\\Controllers\\ApiController@changePassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'api.change-password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'api.define-password' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/define-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ApiController@definePassword',
        'controller' => 'App\\Http\\Controllers\\ApiController@definePassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'api.define-password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'api.login' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ApiController@login',
        'controller' => 'App\\Http\\Controllers\\ApiController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'api.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'api.register' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ApiController@register',
        'controller' => 'App\\Http\\Controllers\\ApiController@register',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'api.register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'api.forgot-password' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ApiController@forgotPassword',
        'controller' => 'App\\Http\\Controllers\\ApiController@forgotPassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'api.forgot-password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'api.reset-password' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ApiController@resetPassword',
        'controller' => 'App\\Http\\Controllers\\ApiController@resetPassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'api.reset-password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'api.save-profile' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/save-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ApiController@saveProfile',
        'controller' => 'App\\Http\\Controllers\\ApiController@saveProfile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'api.save-profile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'api.launch-questions' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/launch-questions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ApiController@launchQuestions',
        'controller' => 'App\\Http\\Controllers\\ApiController@launchQuestions',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'api.launch-questions',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'home.profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'profil',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'usercheck',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@profile',
        'controller' => 'App\\Http\\Controllers\\HomeController@profile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'home.profile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'home.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cikis',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'usercheck',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@logout',
        'controller' => 'App\\Http\\Controllers\\HomeController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'home.logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'home.change-password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sifremi-degistir',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'usercheck',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@changePassword',
        'controller' => 'App\\Http\\Controllers\\HomeController@changePassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'home.change-password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::WTetSMqa6xYGFaXz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'uyelere-ozel/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'usercheck',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@memberPost',
        'controller' => 'App\\Http\\Controllers\\HomeController@memberPost',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::WTetSMqa6xYGFaXz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'home.register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'uyelik',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@register',
        'controller' => 'App\\Http\\Controllers\\HomeController@register',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'home.register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'home.confirmation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hesap-onayi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@confirmAccount',
        'controller' => 'App\\Http\\Controllers\\HomeController@confirmAccount',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'home.confirmation',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'home.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'giris',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@login',
        'controller' => 'App\\Http\\Controllers\\HomeController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'home.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'home.forgot-password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sifremi-unuttum',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@forgotPassword',
        'controller' => 'App\\Http\\Controllers\\HomeController@forgotPassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'home.forgot-password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'home.reset-password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sifremi-sifirla',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@resetPassword',
        'controller' => 'App\\Http\\Controllers\\HomeController@resetPassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'home.reset-password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::070JYFjnIXqyFMoD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/board-of-management/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setEnglish',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@boardMember',
        'controller' => 'App\\Http\\Controllers\\HomeController@boardMember',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/en',
        'where' => 
        array (
        ),
        'as' => 'generated::070JYFjnIXqyFMoD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::cpFoAWe3bVgXVj9N' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/blog/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setEnglish',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@post',
        'controller' => 'App\\Http\\Controllers\\HomeController@post',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/en',
        'where' => 
        array (
        ),
        'as' => 'generated::cpFoAWe3bVgXVj9N',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::NMCYMSl5GfFlWxhH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/ai-actual/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setEnglish',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@news',
        'controller' => 'App\\Http\\Controllers\\HomeController@news',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/en',
        'where' => 
        array (
        ),
        'as' => 'generated::NMCYMSl5GfFlWxhH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::jPEoNcX09BtEiglw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setEnglish',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@slug',
        'controller' => 'App\\Http\\Controllers\\HomeController@slug',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/en',
        'where' => 
        array (
        ),
        'as' => 'generated::jPEoNcX09BtEiglw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::RSQUEQwt5R1qae1d' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setEnglish',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\HomeController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/en',
        'where' => 
        array (
        ),
        'as' => 'generated::RSQUEQwt5R1qae1d',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::iUAdv9mtoIXV166c' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lansman/sorular',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@launchQuestions',
        'controller' => 'App\\Http\\Controllers\\HomeController@launchQuestions',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::iUAdv9mtoIXV166c',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::5BlH3BAIjT6I0VEn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'yonetim-kurulu/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@boardMember',
        'controller' => 'App\\Http\\Controllers\\HomeController@boardMember',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::5BlH3BAIjT6I0VEn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::84j44e9cYO7ZLVzx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@post',
        'controller' => 'App\\Http\\Controllers\\HomeController@post',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::84j44e9cYO7ZLVzx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::axqpA7LIK8763702' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ai-guncel/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@news',
        'controller' => 'App\\Http\\Controllers\\HomeController@news',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::axqpA7LIK8763702',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::2G9Cx6kRyO7Uc36z' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@slug',
        'controller' => 'App\\Http\\Controllers\\HomeController@slug',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::2G9Cx6kRyO7Uc36z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::2RRDsJF0qcaqC6Zy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\HomeController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::2RRDsJF0qcaqC6Zy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
  ),
)
);
