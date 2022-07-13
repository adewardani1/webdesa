<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;
use CodeIgniter\Filters\InvalidChars;
use CodeIgniter\Filters\SecureHeaders;
use \App\Filters\Auth;
use \App\Filters\IsAdmin;
use \App\Filters\IsVisiMisi;
use \App\Filters\IsPemerintahDesa;

class Filters extends BaseConfig
{
    /**
     * Configures aliases for Filter classes to
     * make reading things nicer and simpler.
     *
     * @var array
     */
    public $aliases = [
        'csrf'              => CSRF::class,
        'toolbar'           => DebugToolbar::class,
        'honeypot'          => Honeypot::class,
        'invalidchars'      => InvalidChars::class,
        'secureheaders'     => SecureHeaders::class,
        'isLoggedIn'        => Auth::class,
        'isAdmin'           => IsAdmin::class,
        'isVisiMisi'        => IsVisiMisi::class,
        'isPemerintahDesa'  => IsPemerintahDesa::class
    ];

    /**
     * List of filter aliases that are always
     * applied before and after every request.
     *
     * @var array
     */
    public $globals = [
        'before' => [
            // 'honeypot',
            // 'csrf',
            // 'invalidchars',
        ],
        'after' => [
            'toolbar',
            // 'honeypot',
            // 'secureheaders',
        ],
    ];

    /**
     * List of filter aliases that works on a
     * particular HTTP method (GET, POST, etc.).
     *
     * Example:
     * 'post' => ['csrf', 'throttle']
     *
     * @var array
     */
    public $methods = [];

    /**
     * List of filter aliases that should run on any
     * before or after URI patterns.
     *
     * Example:
     * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
     *
     * @var array
     */
    public $filters = [
        'isLoggedIn' => [
            'before' => [
                'sides',
                'sides/*',
                'penduduk',
                'berita',
                'akun'
            ]
        ],

        'isAdmin' => [
            'before' => [
                'sides/akun',
                'sides/akun/create',
                'sides/akun/show',
                'sides/akun/show/*',
                'sides/akun/delete',
                'sides/akun/insert',
                'akun'
            ]
        ],

        'isVisiMisi' => [
            'before' => [
                'sides/visimisi/create',
                'sides/visimisi/save'
            ]
        ],

        'isPemerintahDesa' => [
            'before' => [
                'sides/pemerintah-desa/create',
                'sides/pemerintah-desa/save'
            ]
        ]
    ];
}
