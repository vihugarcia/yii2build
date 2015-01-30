<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'extensions' => require(__DIR__ . '/../../vendor/yiisoft/extensions.php'),
    'modules' => [
        'social' => [
// the module class
            'class' => 'kartik\social\Module',
// the global settings for the disqus widget
            'disqus' => [
                'settings' => ['shortname' => 'DISQUS_SHORTNAME'] // default settings
            ],
// the global settings for the facebook plugins widget
            'facebook' => [
                'appId' => '327160484148354',
                'secret' => '97a8ba55e28c1830d923ff8d073cb9b3',
],
// the global settings for the google plugins widget
'google' => [
    'clientId' => 'GOOGLE_API_CLIENT_ID',
    'pageId' => 'GOOGLE_PLUS_PAGE_ID',
    'profileId' => 'GOOGLE_PLUS_PROFILE_ID',
],
// the global settings for the google analytic plugin widget
'googleAnalytics' => [
    'id' => 'TRACKING_ID',
    'domain' => 'TRACKING_DOMAIN',
],
// the global settings for the twitter plugin widget
'twitter' => [
    'screenName' => 'TWITTER_SCREEN_NAME'
],
],
// your other modules
],

'components' => [
    'cache' => [
        'class' => 'yii\caching\FileCache',
    ],
],
];
