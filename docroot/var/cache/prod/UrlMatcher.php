<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/mtc.js' => [[['_route' => 'mautic_js', '_controller' => 'Mautic\\CoreBundle\\Controller\\JsController::indexAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'mautic_base_index', '_controller' => 'Mautic\\CoreBundle\\Controller\\DefaultController::indexAction'], null, null, null, false, false, null]],
        '/s' => [
            [['_route' => 'mautic_secure_root', '_controller' => 'Mautic\\CoreBundle\\Controller\\DefaultController::redirectSecureRootAction'], null, null, null, false, false, null],
            [['_route' => 'mautic_secure_root_slash', '_controller' => 'Mautic\\CoreBundle\\Controller\\DefaultController::redirectSecureRootAction'], null, null, null, true, false, null],
        ],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/(.*/)(*:13)'
                .'|/oauth/v2/(?'
                    .'|token(*:38)'
                    .'|authorize(?'
                        .'|(*:57)'
                        .'|_login(?'
                            .'|(*:73)'
                            .'|_check(*:86)'
                        .')'
                    .')'
                .')'
                .'|/asset(?:/([^/]++))?(*:116)'
                .'|/dwc(?'
                    .'|(*:131)'
                    .'|/([^/]++)(*:148)'
                .')'
                .'|/p(?'
                    .'|lugin(?'
                        .'|/(?'
                            .'|(.+)/tracking\\.gif(*:192)'
                            .'|(.+)/contact_data(*:217)'
                            .'|(.+)/company_data(*:242)'
                            .'|pipedrive/webhook(*:267)'
                        .')'
                        .'|s/integrations/auth(?'
                            .'|user/([^/]++)(*:311)'
                            .'|callback/([^/]++)(*:336)'
                            .'|status/([^/]++)(*:359)'
                        .')'
                    .')'
                    .'|a(?'
                        .'|ge/preview/([^/]++)(*:392)'
                        .'|sswordreset(?'
                            .'|(*:414)'
                            .'|confirm(*:429)'
                        .')'
                    .')'
                .')'
                .'|/e(?'
                    .'|mail/(?'
                        .'|([^/\\.]++)\\.gif(*:468)'
                        .'|view/([^/]++)(*:489)'
                        .'|unsubscribe/([^/]++)(*:517)'
                        .'|resubscribe/([^/]++)(*:545)'
                        .'|preview(?:/([a-zA-Z0-9_-]+))?(*:582)'
                    .')'
                    .'|fconnect(?:/([^/]++)(?:/([^/]++))?)?(*:627)'
                    .'|lfinder(?'
                        .'|\\.main\\.js(*:655)'
                        .'|(?:/([^/]++)(?:/([^/]++))?)?(*:691)'
                    .')'
                .')'
                .'|/m(?'
                    .'|a(?'
                        .'|iler/([^/]++)/callback(*:732)'
                        .'|nifest\\.json(*:752)'
                    .')'
                    .'|t(?'
                        .'|racking\\.gif(*:777)'
                        .'|c(?'
                            .'|/event(*:795)'
                            .'|(*:803)'
                        .')'
                    .')'
                .')'
                .'|/f(?'
                    .'|o(?'
                        .'|rm(?'
                            .'|s/results/file/([^/]++)/([^/]++)(*:860)'
                            .'|/(?'
                                .'|submit(*:878)'
                                .'|generate\\.js(*:898)'
                                .'|message(*:913)'
                            .')'
                            .'|(?:/([^/]++))?(*:936)'
                            .'|/(?'
                                .'|embed/([^/]++)(*:962)'
                                .'|submit/ajax(*:981)'
                            .')'
                        .')'
                        .'|cus/(?'
                            .'|([^/\\.]++)\\.js(*:1012)'
                            .'|([^/]++)/viewpixel\\.gif(*:1044)'
                        .')'
                    .')'
                    .'|ullcontact/callback(*:1074)'
                .')'
                .'|/in(?'
                    .'|staller(?'
                        .'|(*:1100)'
                        .'|(*:1109)'
                        .'|/(?'
                            .'|step/([^/]++)(*:1135)'
                            .'|final(*:1149)'
                            .'|((?).+)(*:1165)'
                        .')'
                    .')'
                    .'|tegration/([^/]++)/callback(*:1203)'
                .')'
                .'|/notification(?'
                    .'|/(?'
                        .'|receive(*:1240)'
                        .'|subscribe(*:1258)'
                        .'|appcallback(*:1278)'
                    .')'
                    .'|(*:1288)'
                .')'
                .'|/OneSignalSDK(?'
                    .'|Worker\\.js(*:1324)'
                    .'|UpdaterWorker\\.js(*:1350)'
                .')'
                .'|/r(?'
                    .'|/([^/]++)(*:1374)'
                    .'|edirect/([^/]++)(*:1399)'
                .')'
                .'|/video/hit(*:1419)'
                .'|/s(?'
                    .'|ms/(?'
                        .'|([^/]++)/callback(*:1456)'
                        .'|receive(*:1472)'
                    .')'
                    .'|aml/(?'
                        .'|metadata\\.xml(*:1502)'
                        .'|discovery(*:1520)'
                    .')'
                    .'|ocial/generate/([^/\\.]++)\\.js(*:1559)'
                    .'|/(?'
                        .'|a(?'
                            .'|jax(*:1579)'
                            .'|ction/([^/]++)(?:/([^/]++)(?:/([a-zA-Z0-9_-]+))?)?(*:1638)'
                            .'|ssets(?'
                                .'|(?:/(\\d+))?(*:1666)'
                                .'|/(?'
                                    .'|remote(*:1685)'
                                    .'|([^/]++)(?:/([a-zA-Z0-9_-]+))?(*:1724)'
                                .')'
                            .')'
                        .')'
                        .'|update(?'
                            .'|(*:1745)'
                            .'|/schema(*:1761)'
                        .')'
                        .'|f(?'
                            .'|ile/([^/]++)(?:/([a-zA-Z0-9_-]+))?(*:1809)'
                            .'|orms(?'
                                .'|/(?'
                                    .'|action/([^/]++)(?:/([a-zA-Z0-9_-]+))?(*:1866)'
                                    .'|field/([^/]++)(?:/([a-zA-Z0-9_-]+))?(*:1911)'
                                .')'
                                .'|(?:/(\\d+))?(*:1932)'
                                .'|/(?'
                                    .'|results(?'
                                        .'|(?:/([a-zA-Z0-9_-]+)(?:/(\\d+))?)?(*:1988)'
                                        .'|/(?'
                                            .'|([a-zA-Z0-9_-]+)/export(?:/([^/]++))?(*:2038)'
                                            .'|([^/]++)/([^/]++)(?:/([a-zA-Z0-9_-]+))?(*:2086)'
                                        .')'
                                    .')'
                                    .'|([^/]++)(?:/([a-zA-Z0-9_-]+))?(*:2127)'
                                .')'
                            .')'
                        .')'
                        .'|themes(?'
                            .'|(*:2148)'
                            .'|/([^/]++)(?:/([a-zA-Z0-9_-]+))?(*:2188)'
                        .')'
                        .'|c(?'
                            .'|redentials(?'
                                .'|(?:/(\\d+))?(*:2226)'
                                .'|/([^/]++)(?:/([a-zA-Z0-9_-]+))?(*:2266)'
                            .')'
                            .'|a(?'
                                .'|lendar(?'
                                    .'|(*:2289)'
                                    .'|/([^/]++)(*:2307)'
                                .')'
                                .'|mpaign(?'
                                    .'|s(?'
                                        .'|/(?'
                                            .'|events/([^/]++)(?:/([a-zA-Z0-9_-]+))?(*:2371)'
                                            .'|sources/([^/]++)(?:/([a-zA-Z0-9_-]+))?(*:2418)'
                                        .')'
                                        .'|(?:/(\\d+))?(*:2439)'
                                        .'|/(?'
                                            .'|([^/]++)(?:/([a-zA-Z0-9_-]+))?(*:2482)'
                                            .'|view/([a-zA-Z0-9_-]+)/contact(?:/(\\d+))?(*:2531)'
                                        .')'
                                    .')'
                                    .'|/preview(?:/([a-zA-Z0-9_-]+))?(*:2572)'
                                .')'
                                .'|tegories(?'
                                    .'|/batch/contact/(?'
                                        .'|set(*:2614)'
                                        .'|view(*:2627)'
                                    .')'
                                    .'|(?:/([^/]++)(?:/(\\d+))?)?(*:2662)'
                                    .'|/([^/]++)/([^/]++)(?:/([a-zA-Z0-9_-]+))?(*:2711)'
                                .')'
                            .')'
                            .'|hannels/batch/contact/(?'
                                .'|set(*:2750)'
                                .'|view(*:2763)'
                            .')'
                            .'|on(?'
                                .'|fig/([^/]++)(?:/([a-zA-Z0-9_-]+))?(*:2812)'
                                .'|tacts(?'
                                    .'|/fields(?'
                                        .'|(?:/(\\d+))?(*:2850)'
                                        .'|/([^/]++)(?:/([a-zA-Z0-9_-]+))?(*:2890)'
                                    .')'
                                    .'|(?:/(\\d+))?(*:2911)'
                                    .'|/(?'
                                        .'|notes(?'
                                            .'|(?:/(\\d+)(?:/(\\d+))?)?(*:2954)'
                                            .'|/(\\d+)/([^/]++)(?:/([a-zA-Z0-9_-]+))?(*:3000)'
                                        .')'
                                        .'|timeline/(?'
                                            .'|(\\d+)(?:/(\\d+))?(*:3038)'
                                            .'|batchExport/(\\d+)(*:3064)'
                                        .')'
                                        .'|auditlog/(?'
                                            .'|(\\d+)(?:/(\\d+))?(*:3102)'
                                            .'|batchExport/(\\d+)(*:3128)'
                                        .')'
                                        .'|contact/export/(\\d+)(*:3158)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|messages(?'
                            .'|(?:/(\\d+))?(*:3193)'
                            .'|/(?'
                                .'|contacts/([a-zA-Z0-9_-]+)/([^/]++)(?:/(\\d+))?(*:3251)'
                                .'|([^/]++)(?:/([a-zA-Z0-9_-]+))?(*:3290)'
                            .')'
                        .')'
                        .'|s(?'
                            .'|ysinfo(*:3311)'
                            .'|egments(?'
                                .'|/batch/contact/(?'
                                    .'|set(*:3351)'
                                    .'|view(*:3364)'
                                .')'
                                .'|(?:/(\\d+))?(*:3385)'
                                .'|/([^/]++)(?:/([a-zA-Z0-9_-]+))?(*:3425)'
                            .')'
                        .')'
                        .'|d(?'
                            .'|ashboard(?'
                                .'|(*:3451)'
                                .'|/(?'
                                    .'|widget/([^/]++)(*:3479)'
                                    .'|([^/]++)(?:/([a-zA-Z0-9_-]+))?(*:3518)'
                                .')'
                            .')'
                            .'|wc(?'
                                .'|(?:/(\\d+))?(*:3545)'
                                .'|/([^/]++)(?:/([a-zA-Z0-9_-]+))?(*:3585)'
                            .')'
                        .')'
                        .'|emails(?'
                            .'|(?:/(\\d+))?(*:3616)'
                            .'|\\-graph\\-stats/([a-zA-Z0-9_-]+)/([^/]++)/([^/]++)/([^/]++)(*:3683)'
                            .'|/(?'
                                .'|([^/]++)(?:/([a-zA-Z0-9_-]+))?(*:3726)'
                                .'|view/([a-zA-Z0-9_-]+)/contact(?:/(\\d+))?(*:3775)'
                            .')'
                        .')'
                        .'|integration/([^/]++)/config(?'
                            .'|(*:3816)'
                            .'|/([^/]++)(?'
                                .'|(?:/(\\d+))?(*:3848)'
                                .'|/field/([^/]++)(*:3872)'
                            .')'
                        .')'
                        .'|plugin/(?'
                            .'|(.+)/timeline(?:/(\\d+))?(*:3917)'
                            .'|(.+)/timeline/view/(\\d+)(?:/(\\d+))?(*:3961)'
                        .')'
                        .'|([^/]++)/import(?'
                            .'|(?:/(\\d+))?(*:4000)'
                            .'|/([^/]++)(?:/([a-zA-Z0-9_-]+))?(*:4040)'
                        .')'
                        .'|c(?'
                            .'|o(?'
                                .'|ntacts/([^/]++)(?:/([a-zA-Z0-9_-]+))?(*:4095)'
                                .'|mpan(?'
                                    .'|ies(?'
                                        .'|(?:/(\\d+))?(*:4128)'
                                        .'|/(?'
                                            .'|([^/]++)(?:/([a-zA-Z0-9_-]+))?(*:4171)'
                                            .'|company/export/(\\d+)(*:4200)'
                                        .')'
                                    .')'
                                    .'|y/(\\d+)/contacts(?:/(\\d+))?(*:4238)'
                                .')'
                            .')'
                            .'|learbit/([^/]++)(?:/([a-zA-Z0-9_-]+))?(*:4287)'
                        .')'
                        .'|s(?'
                            .'|egment/view/([a-zA-Z0-9_-]+)/contact(?:/(\\d+))?(*:4348)'
                            .'|ms(?'
                                .'|(?:/(\\d+))?(*:4373)'
                                .'|/(?'
                                    .'|([^/]++)(?:/([a-zA-Z0-9_-]+))?(*:4416)'
                                    .'|view/([a-zA-Z0-9_-]+)/contact(?:/(\\d+))?(*:4465)'
                                .')'
                            .')'
                            .'|tages(?'
                                .'|(?:/(\\d+))?(*:4495)'
                                .'|/([^/]++)(?:/([a-zA-Z0-9_-]+))?(*:4535)'
                            .')'
                            .'|so_login(?'
                                .'|/([^/]++)(*:4565)'
                                .'|_check/([^/]++)(*:4589)'
                            .')'
                            .'|aml/login(?'
                                .'|(*:4611)'
                                .'|_check(*:4626)'
                            .')'
                        .')'
                        .'|m(?'
                            .'|arketplace(?'
                                .'|(?:/(\\d+))?(*:4665)'
                                .'|/(?'
                                    .'|detail/([^/]++)/([^/]++)(*:4702)'
                                    .'|install/([^/]++)/([^/]++)(*:4736)'
                                    .'|remove/([^/]++)/([^/]++)(*:4769)'
                                    .'|clear/cache(*:4789)'
                                .')'
                            .')'
                            .'|o(?'
                                .'|bile_notifications(?'
                                    .'|(?:/(\\d+))?(*:4836)'
                                    .'|/(?'
                                        .'|([^/]++)(?:/([a-zA-Z0-9_-]+))?(*:4879)'
                                        .'|view/([a-zA-Z0-9_-]+)/contact(?:/(\\d+))?(*:4928)'
                                    .')'
                                .')'
                                .'|nitoring(?'
                                    .'|(?:/(\\d+))?(*:4961)'
                                    .'|/(?'
                                        .'|([^/]++)(?:/([a-zA-Z0-9_-]+))?(*:5004)'
                                        .'|view/([a-zA-Z0-9_-]+)/contacts(?:/(\\d+))?(*:5054)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|notifications(?'
                            .'|(?:/(\\d+))?(*:5094)'
                            .'|/(?'
                                .'|([^/]++)(?:/([a-zA-Z0-9_-]+))?(*:5137)'
                                .'|view/([a-zA-Z0-9_-]+)/contact(?:/(\\d+))?(*:5186)'
                            .')'
                        .')'
                        .'|p(?'
                            .'|ages(?'
                                .'|(?:/(\\d+))?(*:5219)'
                                .'|/(?'
                                    .'|([^/]++)(?:/([a-zA-Z0-9_-]+))?(*:5262)'
                                    .'|results(?'
                                        .'|(?:/([a-zA-Z0-9_-]+)(?:/(\\d+))?)?(*:5314)'
                                        .'|/([a-zA-Z0-9_-]+)/export(?:/([^/]++))?(*:5361)'
                                    .')'
                                .')'
                            .')'
                            .'|lugins(?'
                                .'|/(?'
                                    .'|in(?'
                                        .'|tegrations/auth(?'
                                            .'|callback/([^/]++)(*:5426)'
                                            .'|status/([^/]++)(*:5450)'
                                        .')'
                                        .'|fo/([^/]++)(*:5471)'
                                    .')'
                                    .'|config/([^/]++)(?:/(\\d+))?(*:5507)'
                                    .'|reload(*:5522)'
                                .')'
                                .'|(*:5532)'
                            .')'
                            .'|oints(?'
                                .'|/triggers(?'
                                    .'|/events/([^/]++)(?:/([a-zA-Z0-9_-]+))?(*:5600)'
                                    .'|(?:/(\\d+))?(*:5620)'
                                    .'|/([^/]++)(?:/([a-zA-Z0-9_-]+))?(*:5660)'
                                .')'
                                .'|(?:/(\\d+))?(*:5681)'
                                .'|/([^/]++)(?:/([a-zA-Z0-9_-]+))?(*:5721)'
                            .')'
                        .')'
                        .'|r(?'
                            .'|eports(?'
                                .'|(?:/(\\d+))?(*:5756)'
                                .'|/(?'
                                    .'|view(?'
                                        .'|/([a-zA-Z0-9_-]+)/export(?:/([^/]++))?(*:5814)'
                                        .'|(?:/([a-zA-Z0-9_-]+)(?:/(\\d+))?)?(*:5856)'
                                    .')'
                                    .'|download/([^/]++)(?:/([^/]++))?(*:5897)'
                                    .'|schedule/(?'
                                        .'|preview(?:/([^/]++)(?:/([^/]++)(?:/([^/]++)(?:/([^/]++))?)?)?)?(*:5981)'
                                        .'|([^/]++)/now(*:6002)'
                                    .')'
                                    .'|([^/]++)(?:/([a-zA-Z0-9_-]+))?(*:6042)'
                                .')'
                            .')'
                            .'|oles(?'
                                .'|(?:/(\\d+))?(*:6071)'
                                .'|/([^/]++)(?:/([a-zA-Z0-9_-]+))?(*:6111)'
                            .')'
                        .')'
                        .'|log(?'
                            .'|in(?'
                                .'|(*:6133)'
                                .'|_check(*:6148)'
                            .')'
                            .'|out(*:6161)'
                        .')'
                        .'|users(?'
                            .'|(?:/(\\d+))?(*:6190)'
                            .'|/([^/]++)(?:/([a-zA-Z0-9_-]+))?(*:6230)'
                        .')'
                        .'|account(*:6247)'
                        .'|webhooks(?'
                            .'|(?:/(\\d+))?(*:6278)'
                            .'|/([^/]++)(?:/([a-zA-Z0-9_-]+))?(*:6318)'
                        .')'
                        .'|grapesjsbuilder/(?'
                            .'|upload(*:6353)'
                            .'|delete(*:6368)'
                            .'|([^/]++)(?:/([a-zA-Z0-9_-]+))?(*:6407)'
                        .')'
                        .'|f(?'
                            .'|ocus(?'
                                .'|(?:/(\\d+))?(*:6439)'
                                .'|/([^/]++)(?:/([a-zA-Z0-9_-]+))?(*:6479)'
                            .')'
                            .'|ullcontact/([^/]++)(?:/([a-zA-Z0-9_-]+))?(*:6530)'
                        .')'
                        .'|t(?'
                            .'|weets(?'
                                .'|(?:/(\\d+))?(*:6563)'
                                .'|/([^/]++)(?:/([a-zA-Z0-9_-]+))?(*:6603)'
                            .')'
                            .'|ags(?'
                                .'|(?:/(\\d+))?(*:6630)'
                                .'|/([^/]++)(?:/([a-zA-Z0-9_-]+))?(*:6670)'
                            .')'
                        .')'
                        .'|_uploader/asset/upload(*:6703)'
                    .')'
                .')'
                .'|/c(?'
                    .'|itrix/(?'
                        .'|proxy(*:6733)'
                        .'|sessionChanged(*:6756)'
                    .')'
                    .'|learbit/callback(*:6782)'
                .')'
                .'|/((?!(?:_(?:profiler|wdt)|css|images|js|favicon.ico|apps/bundles/|plugins/)).+)(*:6871)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        13 => [[['_route' => 'mautic_remove_trailing_slash', '_controller' => 'Mautic\\CoreBundle\\Controller\\CommonController::removeTrailingSlashAction'], ['url'], ['GET' => 0], null, false, true, null]],
        38 => [[['_route' => 'fos_oauth_server_token', '_controller' => 'fos_oauth_server.controller.token:tokenAction'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        57 => [[['_route' => 'fos_oauth_server_authorize', '_controller' => 'Mautic\\ApiBundle\\Controller\\oAuth2\\AuthorizeController::authorizeAction'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        73 => [[['_route' => 'mautic_oauth2_server_auth_login', '_controller' => 'Mautic\\ApiBundle\\Controller\\oAuth2\\SecurityController::loginAction'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        86 => [[['_route' => 'mautic_oauth2_server_auth_login_check', '_controller' => 'Mautic\\ApiBundle\\Controller\\oAuth2\\SecurityController::loginCheckAction'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        116 => [[['_route' => 'mautic_asset_download', 'slug' => '', '_controller' => 'Mautic\\AssetBundle\\Controller\\PublicController::downloadAction'], ['slug'], null, null, false, true, null]],
        131 => [[['_route' => 'mautic_api_dynamicContent_index', '_controller' => 'Mautic\\DynamicContentBundle\\Controller\\DynamicContentApiController::getEntitiesAction'], [], null, null, false, false, null]],
        148 => [[['_route' => 'mautic_api_dynamicContent_action', '_controller' => 'Mautic\\DynamicContentBundle\\Controller\\DynamicContentApiController::processAction'], ['objectAlias'], null, null, false, true, null]],
        192 => [[['_route' => 'mautic_plugin_tracker', '_controller' => 'Mautic\\EmailBundle\\Controller\\PublicController::pluginTrackingGifAction'], ['integration'], null, null, false, false, null]],
        217 => [[['_route' => 'mautic_integration_contacts', '_controller' => 'MauticPlugin\\MauticCrmBundle\\Controller\\PublicController::contactDataAction'], ['integration'], null, null, false, false, null]],
        242 => [[['_route' => 'mautic_integration_companies', '_controller' => 'MauticPlugin\\MauticCrmBundle\\Controller\\PublicController::companyDataAction'], ['integration'], null, null, false, false, null]],
        267 => [[['_route' => 'mautic_integration.pipedrive.webhook', '_controller' => 'MauticPlugin\\MauticCrmBundle\\Controller\\PipedriveController::webhookAction'], [], ['POST' => 0], null, false, false, null]],
        311 => [[['_route' => 'mautic_integration_auth_user', '_controller' => 'Mautic\\PluginBundle\\Controller\\AuthController::authUserAction'], ['integration'], null, null, false, true, null]],
        336 => [[['_route' => 'mautic_integration_auth_callback', '_controller' => 'Mautic\\PluginBundle\\Controller\\AuthController::authCallbackAction'], ['integration'], null, null, false, true, null]],
        359 => [[['_route' => 'mautic_integration_auth_postauth', '_controller' => 'Mautic\\PluginBundle\\Controller\\AuthController::authStatusAction'], ['integration'], null, null, false, true, null]],
        392 => [[['_route' => 'mautic_page_preview', '_controller' => 'Mautic\\PageBundle\\Controller\\PublicController::previewAction'], ['id'], null, null, false, true, null]],
        414 => [[['_route' => 'mautic_user_passwordreset', '_controller' => 'Mautic\\UserBundle\\Controller\\PublicController::passwordResetAction'], [], null, null, false, false, null]],
        429 => [[['_route' => 'mautic_user_passwordresetconfirm', '_controller' => 'Mautic\\UserBundle\\Controller\\PublicController::passwordResetConfirmAction'], [], null, null, false, false, null]],
        468 => [[['_route' => 'mautic_email_tracker', '_controller' => 'Mautic\\EmailBundle\\Controller\\PublicController::trackingImageAction'], ['idHash'], null, null, false, false, null]],
        489 => [[['_route' => 'mautic_email_webview', '_controller' => 'Mautic\\EmailBundle\\Controller\\PublicController::indexAction'], ['idHash'], null, null, false, true, null]],
        517 => [[['_route' => 'mautic_email_unsubscribe', '_controller' => 'Mautic\\EmailBundle\\Controller\\PublicController::unsubscribeAction'], ['idHash'], null, null, false, true, null]],
        545 => [[['_route' => 'mautic_email_resubscribe', '_controller' => 'Mautic\\EmailBundle\\Controller\\PublicController::resubscribeAction'], ['idHash'], null, null, false, true, null]],
        582 => [[['_route' => 'mautic_email_preview', '_controller' => 'Mautic\\EmailBundle\\Controller\\PublicController::previewAction', 'objectId' => 0], ['objectId'], null, null, false, true, null]],
        627 => [[['_route' => 'ef_connect', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::load', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null]],
        655 => [[['_route' => 'ef_main_js', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::mainJS'], [], null, null, false, false, null]],
        691 => [[['_route' => 'elfinder', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::show', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null]],
        732 => [[['_route' => 'mautic_mailer_transport_callback', '_controller' => 'Mautic\\EmailBundle\\Controller\\PublicController::mailerCallbackAction'], ['transport'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        752 => [[['_route' => 'mautic_onesignal_manifest', '_controller' => 'Mautic\\NotificationBundle\\Controller\\JsController::manifestAction'], [], null, null, false, false, null]],
        777 => [[['_route' => 'mautic_page_tracker', '_controller' => 'Mautic\\PageBundle\\Controller\\PublicController::trackingImageAction'], [], null, null, false, false, null]],
        795 => [[['_route' => 'mautic_page_tracker_cors', '_controller' => 'Mautic\\PageBundle\\Controller\\PublicController::trackingAction'], [], null, null, false, false, null]],
        803 => [[['_route' => 'mautic_page_tracker_getcontact', '_controller' => 'Mautic\\PageBundle\\Controller\\PublicController::getContactIdAction'], [], null, null, false, false, null]],
        860 => [[['_route' => 'mautic_form_file_download', '_controller' => 'Mautic\\FormBundle\\Controller\\ResultController::downloadFileAction'], ['submissionId', 'field'], null, null, false, true, null]],
        878 => [[['_route' => 'mautic_form_postresults', '_controller' => 'Mautic\\FormBundle\\Controller\\PublicController::submitAction'], [], null, null, false, false, null]],
        898 => [[['_route' => 'mautic_form_generateform', '_controller' => 'Mautic\\FormBundle\\Controller\\PublicController::generateAction'], [], null, null, false, false, null]],
        913 => [[['_route' => 'mautic_form_postmessage', '_controller' => 'Mautic\\FormBundle\\Controller\\PublicController::messageAction'], [], null, null, false, false, null]],
        936 => [[['_route' => 'mautic_form_preview', 'id' => '0', '_controller' => 'Mautic\\FormBundle\\Controller\\PublicController::previewAction'], ['id'], null, null, false, true, null]],
        962 => [[['_route' => 'mautic_form_embed', '_controller' => 'Mautic\\FormBundle\\Controller\\PublicController::embedAction'], ['id'], null, null, false, true, null]],
        981 => [[['_route' => 'mautic_form_postresults_ajax', '_controller' => 'Mautic\\FormBundle\\Controller\\AjaxController::submitAction'], [], null, null, false, false, null]],
        1012 => [[['_route' => 'mautic_focus_generate', '_controller' => 'MauticPlugin\\MauticFocusBundle\\Controller\\PublicController::generateAction'], ['id'], null, null, false, false, null]],
        1044 => [[['_route' => 'mautic_focus_pixel', '_controller' => 'MauticPlugin\\MauticFocusBundle\\Controller\\PublicController::viewPixelAction'], ['id'], null, null, false, false, null]],
        1074 => [[['_route' => 'mautic_plugin_fullcontact_index', '_controller' => 'MauticPlugin\\MauticFullContactBundle\\Controller\\PublicController::callbackAction'], [], null, null, false, false, null]],
        1100 => [[['_route' => 'mautic_installer_home', '_controller' => 'Mautic\\InstallBundle\\Controller\\InstallController::stepAction'], [], null, null, false, false, null]],
        1109 => [[['_route' => 'mautic_installer_remove_slash', '_controller' => 'Mautic\\CoreBundle\\Controller\\CommonController::removeTrailingSlashAction'], [], null, null, true, false, null]],
        1135 => [[['_route' => 'mautic_installer_step', '_controller' => 'Mautic\\InstallBundle\\Controller\\InstallController::stepAction'], ['index'], null, null, false, true, null]],
        1149 => [[['_route' => 'mautic_installer_final', '_controller' => 'Mautic\\InstallBundle\\Controller\\InstallController::finalAction'], [], null, null, false, false, null]],
        1165 => [[['_route' => 'mautic_installer_catchcall', '_controller' => 'Mautic\\InstallBundle\\Controller\\InstallController::stepAction'], ['noerror'], null, null, false, true, null]],
        1203 => [[['_route' => 'mautic_integration_public_callback', '_controller' => 'Mautic\\IntegrationsBundle\\Controller\\AuthController::callbackAction'], ['integration'], null, null, false, false, null]],
        1240 => [[['_route' => 'mautic_receive_notification', '_controller' => 'Mautic\\NotificationBundle\\Controller\\Api\\NotificationApiController::receiveAction'], [], null, null, false, false, null]],
        1258 => [[['_route' => 'mautic_subscribe_notification', '_controller' => 'Mautic\\NotificationBundle\\Controller\\Api\\NotificationApiController::subscribeAction'], [], null, null, false, false, null]],
        1278 => [[['_route' => 'mautic_app_notification', '_controller' => 'Mautic\\NotificationBundle\\Controller\\AppCallbackController::indexAction'], [], null, null, false, false, null]],
        1288 => [[['_route' => 'mautic_notification_popup', '_controller' => 'Mautic\\NotificationBundle\\Controller\\PopupController::indexAction'], [], null, null, false, false, null]],
        1324 => [[['_route' => 'mautic_onesignal_worker', '_controller' => 'Mautic\\NotificationBundle\\Controller\\JsController::workerAction'], [], null, null, false, false, null]],
        1350 => [[['_route' => 'mautic_onesignal_updater', '_controller' => 'Mautic\\NotificationBundle\\Controller\\JsController::updaterAction'], [], null, null, false, false, null]],
        1374 => [[['_route' => 'mautic_url_redirect', '_controller' => 'Mautic\\PageBundle\\Controller\\PublicController::redirectAction'], ['redirectId'], null, null, false, true, null]],
        1399 => [[['_route' => 'mautic_page_redirect', '_controller' => 'Mautic\\PageBundle\\Controller\\PublicController::redirectAction'], ['redirectId'], null, null, false, true, null]],
        1419 => [[['_route' => 'mautic_gated_video_hit', '_controller' => 'Mautic\\PageBundle\\Controller\\PublicController::hitVideoAction'], [], null, null, false, false, null]],
        1456 => [[['_route' => 'mautic_sms_callback', '_controller' => 'Mautic\\SmsBundle\\Controller\\ReplyController::callbackAction'], ['transport'], null, null, false, false, null]],
        1472 => [[['_route' => 'mautic_receive_sms', 'transport' => 'twilio', '_controller' => 'Mautic\\SmsBundle\\Controller\\ReplyController::callbackAction'], [], null, null, false, false, null]],
        1502 => [[['_route' => 'lightsaml_sp.metadata', '_controller' => 'LightSaml\\SpBundle\\Controller\\DefaultController::metadataAction'], [], null, null, false, false, null]],
        1520 => [[['_route' => 'lightsaml_sp.discovery', '_controller' => 'LightSaml\\SpBundle\\Controller\\DefaultController::discoveryAction'], [], null, null, false, false, null]],
        1559 => [[['_route' => 'mautic_social_js_generate', '_controller' => 'MauticPlugin\\MauticSocialBundle\\Controller\\JsController::generateAction'], ['formName'], null, null, false, false, null]],
        1579 => [[['_route' => 'mautic_core_ajax', '_controller' => 'Mautic\\CoreBundle\\Controller\\AjaxController::delegateAjaxAction'], [], null, null, false, false, null]],
        1638 => [[['_route' => 'mautic_core_form_action', 'objectModel' => '', '_controller' => 'Mautic\\CoreBundle\\Controller\\FormController::executeAction', 'objectId' => 0], ['objectAction', 'objectModel', 'objectId'], null, null, false, true, null]],
        1666 => [[['_route' => 'mautic_asset_index', '_controller' => 'Mautic\\AssetBundle\\Controller\\AssetController::indexAction', 'page' => 0], ['page'], null, null, false, true, null]],
        1685 => [[['_route' => 'mautic_asset_remote', '_controller' => 'Mautic\\AssetBundle\\Controller\\AssetController::remoteAction'], [], null, null, false, false, null]],
        1724 => [[['_route' => 'mautic_asset_action', '_controller' => 'Mautic\\AssetBundle\\Controller\\AssetController::executeAction', 'objectId' => 0], ['objectAction', 'objectId'], null, null, false, true, null]],
        1745 => [[['_route' => 'mautic_core_update', '_controller' => 'Mautic\\CoreBundle\\Controller\\UpdateController::indexAction'], [], null, null, false, false, null]],
        1761 => [[['_route' => 'mautic_core_update_schema', '_controller' => 'Mautic\\CoreBundle\\Controller\\UpdateController::schemaAction'], [], null, null, false, false, null]],
        1809 => [[['_route' => 'mautic_core_file_action', '_controller' => 'Mautic\\CoreBundle\\Controller\\FileController::executeAction', 'objectId' => 0], ['objectAction', 'objectId'], null, null, false, true, null]],
        1866 => [[['_route' => 'mautic_formaction_action', '_controller' => 'Mautic\\FormBundle\\Controller\\ActionController::executeAction', 'objectId' => 0], ['objectAction', 'objectId'], null, null, false, true, null]],
        1911 => [[['_route' => 'mautic_formfield_action', '_controller' => 'Mautic\\FormBundle\\Controller\\FieldController::executeAction', 'objectId' => 0], ['objectAction', 'objectId'], null, null, false, true, null]],
        1932 => [[['_route' => 'mautic_form_index', '_controller' => 'Mautic\\FormBundle\\Controller\\FormController::indexAction', 'page' => 0], ['page'], null, null, false, true, null]],
        1988 => [[['_route' => 'mautic_form_results', '_controller' => 'Mautic\\FormBundle\\Controller\\ResultController::indexAction', 'page' => 0, 'objectId' => 0], ['objectId', 'page'], null, null, false, true, null]],
        2038 => [[['_route' => 'mautic_form_export', 'format' => 'csv', '_controller' => 'Mautic\\FormBundle\\Controller\\ResultController::exportAction', 'objectId' => 0], ['objectId', 'format'], null, null, false, true, null]],
        2086 => [[['_route' => 'mautic_form_results_action', 'objectId' => 0, '_controller' => 'Mautic\\FormBundle\\Controller\\ResultController::executeAction'], ['formId', 'objectAction', 'objectId'], null, null, false, true, null]],
        2127 => [[['_route' => 'mautic_form_action', '_controller' => 'Mautic\\FormBundle\\Controller\\FormController::executeAction', 'objectId' => 0], ['objectAction', 'objectId'], null, null, false, true, null]],
        2148 => [[['_route' => 'mautic_themes_index', '_controller' => 'Mautic\\CoreBundle\\Controller\\ThemeController::indexAction'], [], null, null, false, false, null]],
        2188 => [[['_route' => 'mautic_themes_action', '_controller' => 'Mautic\\CoreBundle\\Controller\\ThemeController::executeAction', 'objectId' => 0], ['objectAction', 'objectId'], null, null, false, true, null]],
        2226 => [[['_route' => 'mautic_client_index', '_controller' => 'Mautic\\ApiBundle\\Controller\\ClientController::indexAction', 'page' => 0], ['page'], null, null, false, true, null]],
        2266 => [[['_route' => 'mautic_client_action', '_controller' => 'Mautic\\ApiBundle\\Controller\\ClientController::executeAction', 'objectId' => 0], ['objectAction', 'objectId'], null, null, false, true, null]],
        2289 => [[['_route' => 'mautic_calendar_index', '_controller' => 'Mautic\\CalendarBundle\\Controller\\DefaultController::indexAction'], [], null, null, false, false, null]],
        2307 => [[['_route' => 'mautic_calendar_action', '_controller' => 'Mautic\\CalendarBundle\\Controller\\DefaultController::executeAction'], ['objectAction'], null, null, false, true, null]],
        2371 => [[['_route' => 'mautic_campaignevent_action', '_controller' => 'Mautic\\CampaignBundle\\Controller\\EventController::executeAction', 'objectId' => 0], ['objectAction', 'objectId'], null, null, false, true, null]],
        2418 => [[['_route' => 'mautic_campaignsource_action', '_controller' => 'Mautic\\CampaignBundle\\Controller\\SourceController::executeAction', 'objectId' => 0], ['objectAction', 'objectId'], null, null, false, true, null]],
        2439 => [[['_route' => 'mautic_campaign_index', '_controller' => 'Mautic\\CampaignBundle\\Controller\\CampaignController::indexAction', 'page' => 0], ['page'], null, null, false, true, null]],
        2482 => [[['_route' => 'mautic_campaign_action', '_controller' => 'Mautic\\CampaignBundle\\Controller\\CampaignController::executeAction', 'objectId' => 0], ['objectAction', 'objectId'], null, null, false, true, null]],
        2531 => [[['_route' => 'mautic_campaign_contacts', '_controller' => 'Mautic\\CampaignBundle\\Controller\\CampaignController::contactsAction', 'page' => 0, 'objectId' => 0], ['objectId', 'page'], null, null, false, true, null]],
        2572 => [[['_route' => 'mautic_campaign_preview', '_controller' => 'Mautic\\EmailBundle\\Controller\\PublicController::previewAction', 'objectId' => 0], ['objectId'], null, null, false, true, null]],
        2614 => [[['_route' => 'mautic_category_batch_contact_set', '_controller' => 'Mautic\\CategoryBundle\\Controller\\BatchContactController::execAction'], [], null, null, false, false, null]],
        2627 => [[['_route' => 'mautic_category_batch_contact_view', '_controller' => 'Mautic\\CategoryBundle\\Controller\\BatchContactController::indexAction'], [], null, null, false, false, null]],
        2662 => [[['_route' => 'mautic_category_index', 'bundle' => 'category', '_controller' => 'Mautic\\CategoryBundle\\Controller\\CategoryController::indexAction', 'page' => 0], ['bundle', 'page'], null, null, false, true, null]],
        2711 => [[['_route' => 'mautic_category_action', 'bundle' => 'category', '_controller' => 'Mautic\\CategoryBundle\\Controller\\CategoryController::executeCategoryAction', 'objectId' => 0], ['bundle', 'objectAction', 'objectId'], null, null, false, true, null]],
        2750 => [[['_route' => 'mautic_channel_batch_contact_set', '_controller' => 'Mautic\\ChannelBundle\\Controller\\BatchContactController::setAction'], [], null, null, false, false, null]],
        2763 => [[['_route' => 'mautic_channel_batch_contact_view', '_controller' => 'Mautic\\ChannelBundle\\Controller\\BatchContactController::indexAction'], [], null, null, false, false, null]],
        2812 => [[['_route' => 'mautic_config_action', '_controller' => 'Mautic\\ConfigBundle\\Controller\\ConfigController::executeAction', 'objectId' => 0], ['objectAction', 'objectId'], null, null, false, true, null]],
        2850 => [[['_route' => 'mautic_contactfield_index', '_controller' => 'Mautic\\LeadBundle\\Controller\\FieldController::indexAction', 'page' => 0], ['page'], null, null, false, true, null]],
        2890 => [[['_route' => 'mautic_contactfield_action', '_controller' => 'Mautic\\LeadBundle\\Controller\\FieldController::executeAction', 'objectId' => 0], ['objectAction', 'objectId'], null, null, false, true, null]],
        2911 => [[['_route' => 'mautic_contact_index', '_controller' => 'Mautic\\LeadBundle\\Controller\\LeadController::indexAction', 'page' => 0], ['page'], null, null, false, true, null]],
        2954 => [[['_route' => 'mautic_contactnote_index', 'leadId' => 0, '_controller' => 'Mautic\\LeadBundle\\Controller\\NoteController::indexAction', 'page' => 0], ['leadId', 'page'], null, null, false, true, null]],
        3000 => [[['_route' => 'mautic_contactnote_action', '_controller' => 'Mautic\\LeadBundle\\Controller\\NoteController::executeNoteAction', 'objectId' => 0], ['leadId', 'objectAction', 'objectId'], null, null, false, true, null]],
        3038 => [[['_route' => 'mautic_contacttimeline_action', '_controller' => 'Mautic\\LeadBundle\\Controller\\TimelineController::indexAction', 'page' => 0], ['leadId', 'page'], null, null, false, true, null]],
        3064 => [[['_route' => 'mautic_contact_timeline_export_action', '_controller' => 'Mautic\\LeadBundle\\Controller\\TimelineController::batchExportAction'], ['leadId'], null, null, false, true, null]],
        3102 => [[['_route' => 'mautic_contact_auditlog_action', '_controller' => 'Mautic\\LeadBundle\\Controller\\AuditlogController::indexAction', 'page' => 0], ['leadId', 'page'], null, null, false, true, null]],
        3128 => [[['_route' => 'mautic_contact_auditlog_export_action', '_controller' => 'Mautic\\LeadBundle\\Controller\\AuditlogController::batchExportAction'], ['leadId'], null, null, false, true, null]],
        3158 => [[['_route' => 'mautic_contact_export_action', '_controller' => 'Mautic\\LeadBundle\\Controller\\LeadController::contactExportAction'], ['contactId'], null, null, false, true, null]],
        3193 => [[['_route' => 'mautic_message_index', '_controller' => 'Mautic\\ChannelBundle\\Controller\\MessageController::indexAction', 'page' => 0], ['page'], null, null, false, true, null]],
        3251 => [[['_route' => 'mautic_message_contacts', '_controller' => 'Mautic\\ChannelBundle\\Controller\\MessageController::contactsAction', 'page' => 0, 'objectId' => 0], ['objectId', 'channel', 'page'], null, null, false, true, null]],
        3290 => [[['_route' => 'mautic_message_action', '_controller' => 'Mautic\\ChannelBundle\\Controller\\MessageController::executeAction', 'objectId' => 0], ['objectAction', 'objectId'], null, null, false, true, null]],
        3311 => [[['_route' => 'mautic_sysinfo_index', '_controller' => 'Mautic\\ConfigBundle\\Controller\\SysinfoController::indexAction'], [], null, null, false, false, null]],
        3351 => [[['_route' => 'mautic_segment_batch_contact_set', '_controller' => 'Mautic\\LeadBundle\\Controller\\BatchSegmentController::setAction'], [], null, null, false, false, null]],
        3364 => [[['_route' => 'mautic_segment_batch_contact_view', '_controller' => 'Mautic\\LeadBundle\\Controller\\BatchSegmentController::indexAction'], [], null, null, false, false, null]],
        3385 => [[['_route' => 'mautic_segment_index', '_controller' => 'Mautic\\LeadBundle\\Controller\\ListController::indexAction', 'page' => 0], ['page'], null, null, false, true, null]],
        3425 => [[['_route' => 'mautic_segment_action', '_controller' => 'Mautic\\LeadBundle\\Controller\\ListController::executeAction', 'objectId' => 0], ['objectAction', 'objectId'], null, null, false, true, null]],
        3451 => [[['_route' => 'mautic_dashboard_index', '_controller' => 'Mautic\\DashboardBundle\\Controller\\DashboardController::indexAction'], [], null, null, false, false, null]],
        3479 => [[['_route' => 'mautic_dashboard_widget', '_controller' => 'Mautic\\DashboardBundle\\Controller\\DashboardController::widgetAction'], ['widgetId'], null, null, false, true, null]],
        3518 => [[['_route' => 'mautic_dashboard_action', '_controller' => 'Mautic\\DashboardBundle\\Controller\\DashboardController::executeAction', 'objectId' => 0], ['objectAction', 'objectId'], null, null, false, true, null]],
        3545 => [[['_route' => 'mautic_dynamicContent_index', '_controller' => 'Mautic\\DynamicContentBundle\\Controller\\DynamicContentController::indexAction', 'page' => 0], ['page'], null, null, false, true, null]],
        3585 => [[['_route' => 'mautic_dynamicContent_action', '_controller' => 'Mautic\\DynamicContentBundle\\Controller\\DynamicContentController::executeAction', 'objectId' => 0], ['objectAction', 'objectId'], null, null, false, true, null]],
        3616 => [[['_route' => 'mautic_email_index', '_controller' => 'Mautic\\EmailBundle\\Controller\\EmailController::indexAction', 'page' => 0], ['page'], null, null, false, true, null]],
        3683 => [[['_route' => 'mautic_email_graph_stats', '_controller' => 'Mautic\\EmailBundle\\Controller\\EmailGraphStatsController::viewAction', 'objectId' => 0], ['objectId', 'isVariant', 'dateFrom', 'dateTo'], null, null, false, true, null]],
        3726 => [[['_route' => 'mautic_email_action', '_controller' => 'Mautic\\EmailBundle\\Controller\\EmailController::executeAction', 'objectId' => 0], ['objectAction', 'objectId'], null, null, false, true, null]],
        3775 => [[['_route' => 'mautic_email_contacts', '_controller' => 'Mautic\\EmailBundle\\Controller\\EmailController::contactsAction', 'page' => 0, 'objectId' => 0], ['objectId', 'page'], null, null, false, true, null]],
        3816 => [[['_route' => 'mautic_integration_config', '_controller' => 'Mautic\\IntegrationsBundle\\Controller\\ConfigController::editAction'], ['integration'], null, null, false, false, null]],
        3848 => [[['_route' => 'mautic_integration_config_field_pagination', 'page' => 1, '_controller' => 'Mautic\\IntegrationsBundle\\Controller\\FieldPaginationController::paginateAction'], ['integration', 'object', 'page'], null, null, false, true, null]],
        3872 => [[['_route' => 'mautic_integration_config_field_update', '_controller' => 'Mautic\\IntegrationsBundle\\Controller\\UpdateFieldController::updateAction'], ['integration', 'object', 'field'], null, null, false, true, null]],
        3917 => [[['_route' => 'mautic_plugin_timeline_index', '_controller' => 'Mautic\\LeadBundle\\Controller\\TimelineController::pluginIndexAction', 'page' => 0], ['integration', 'page'], null, null, false, true, null]],
        3961 => [[['_route' => 'mautic_plugin_timeline_view', '_controller' => 'Mautic\\LeadBundle\\Controller\\TimelineController::pluginViewAction', 'page' => 0], ['integration', 'leadId', 'page'], null, null, false, true, null]],
        4000 => [[['_route' => 'mautic_import_index', '_controller' => 'Mautic\\LeadBundle\\Controller\\ImportController::indexAction', 'page' => 0], ['object', 'page'], null, null, false, true, null]],
        4040 => [[['_route' => 'mautic_import_action', '_controller' => 'Mautic\\LeadBundle\\Controller\\ImportController::executeAction', 'objectId' => 0], ['object', 'objectAction', 'objectId'], null, null, false, true, null]],
        4095 => [[['_route' => 'mautic_contact_action', '_controller' => 'Mautic\\LeadBundle\\Controller\\LeadController::executeAction', 'objectId' => 0], ['objectAction', 'objectId'], null, null, false, true, null]],
        4128 => [[['_route' => 'mautic_company_index', '_controller' => 'Mautic\\LeadBundle\\Controller\\CompanyController::indexAction', 'page' => 0], ['page'], null, null, false, true, null]],
        4171 => [[['_route' => 'mautic_company_action', '_controller' => 'Mautic\\LeadBundle\\Controller\\CompanyController::executeAction', 'objectId' => 0], ['objectAction', 'objectId'], null, null, false, true, null]],
        4200 => [[['_route' => 'mautic_company_export_action', '_controller' => 'Mautic\\LeadBundle\\Controller\\CompanyController::companyExportAction'], ['companyId'], null, null, false, true, null]],
        4238 => [[['_route' => 'mautic_company_contacts_list', '_controller' => 'Mautic\\LeadBundle\\Controller\\CompanyController::contactsListAction', 'page' => 0, 'objectId' => 0], ['objectId', 'page'], null, null, false, true, null]],
        4287 => [[['_route' => 'mautic_plugin_clearbit_action', '_controller' => 'MauticPlugin\\MauticClearbitBundle\\Controller\\ClearbitController::executeAction', 'objectId' => 0], ['objectAction', 'objectId'], null, null, false, true, null]],
        4348 => [[['_route' => 'mautic_segment_contacts', '_controller' => 'Mautic\\LeadBundle\\Controller\\ListController::contactsAction', 'page' => 0, 'objectId' => 0], ['objectId', 'page'], null, null, false, true, null]],
        4373 => [[['_route' => 'mautic_sms_index', '_controller' => 'Mautic\\SmsBundle\\Controller\\SmsController::indexAction', 'page' => 0], ['page'], null, null, false, true, null]],
        4416 => [[['_route' => 'mautic_sms_action', '_controller' => 'Mautic\\SmsBundle\\Controller\\SmsController::executeAction', 'objectId' => 0], ['objectAction', 'objectId'], null, null, false, true, null]],
        4465 => [[['_route' => 'mautic_sms_contacts', '_controller' => 'Mautic\\SmsBundle\\Controller\\SmsController::contactsAction', 'page' => 0, 'objectId' => 0], ['objectId', 'page'], null, null, false, true, null]],
        4495 => [[['_route' => 'mautic_stage_index', '_controller' => 'Mautic\\StageBundle\\Controller\\StageController::indexAction', 'page' => 0], ['page'], null, null, false, true, null]],
        4535 => [[['_route' => 'mautic_stage_action', '_controller' => 'Mautic\\StageBundle\\Controller\\StageController::executeAction', 'objectId' => 0], ['objectAction', 'objectId'], null, null, false, true, null]],
        4565 => [[['_route' => 'mautic_sso_login', '_controller' => 'Mautic\\UserBundle\\Controller\\SecurityController::ssoLoginAction'], ['integration'], null, null, false, true, null]],
        4589 => [[['_route' => 'mautic_sso_login_check', '_controller' => 'Mautic\\UserBundle\\Controller\\SecurityController::ssoLoginCheckAction'], ['integration'], null, null, false, true, null]],
        4611 => [[['_route' => 'lightsaml_sp.login', '_controller' => 'LightSaml\\SpBundle\\Controller\\DefaultController::loginAction'], [], null, null, false, false, null]],
        4626 => [[['_route' => 'lightsaml_sp.login_check'], [], null, null, false, false, null]],
        4665 => [[['_route' => 'mautic_marketplace_list', 'page' => 1, '_controller' => 'Mautic\\MarketplaceBundle\\Controller\\Package\\ListController::listAction'], ['page'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        4702 => [[['_route' => 'mautic_marketplace_detail', '_controller' => 'Mautic\\MarketplaceBundle\\Controller\\Package\\DetailController::viewAction'], ['vendor', 'package'], ['GET' => 0], null, false, true, null]],
        4736 => [[['_route' => 'mautic_marketplace_install', '_controller' => 'Mautic\\MarketplaceBundle\\Controller\\Package\\InstallController::viewAction'], ['vendor', 'package'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        4769 => [[['_route' => 'mautic_marketplace_remove', '_controller' => 'Mautic\\MarketplaceBundle\\Controller\\Package\\RemoveController::viewAction'], ['vendor', 'package'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        4789 => [[['_route' => 'mautic_marketplace_clear_cache', '_controller' => 'Mautic\\MarketplaceBundle\\Controller\\CacheController::clearAction'], [], ['GET' => 0], null, false, false, null]],
        4836 => [[['_route' => 'mautic_mobile_notification_index', '_controller' => 'Mautic\\NotificationBundle\\Controller\\MobileNotificationController::indexAction', 'page' => 0], ['page'], null, null, false, true, null]],
        4879 => [[['_route' => 'mautic_mobile_notification_action', '_controller' => 'Mautic\\NotificationBundle\\Controller\\MobileNotificationController::executeAction', 'objectId' => 0], ['objectAction', 'objectId'], null, null, false, true, null]],
        4928 => [[['_route' => 'mautic_mobile_notification_contacts', '_controller' => 'Mautic\\NotificationBundle\\Controller\\MobileNotificationController::contactsAction', 'page' => 0, 'objectId' => 0], ['objectId', 'page'], null, null, false, true, null]],
        4961 => [[['_route' => 'mautic_social_index', '_controller' => 'MauticPlugin\\MauticSocialBundle\\Controller\\MonitoringController::indexAction', 'page' => 0], ['page'], null, null, false, true, null]],
        5004 => [[['_route' => 'mautic_social_action', '_controller' => 'MauticPlugin\\MauticSocialBundle\\Controller\\MonitoringController::executeAction', 'objectId' => 0], ['objectAction', 'objectId'], null, null, false, true, null]],
        5054 => [[['_route' => 'mautic_social_contacts', '_controller' => 'MauticPlugin\\MauticSocialBundle\\Controller\\MonitoringController::contactsAction', 'page' => 0, 'objectId' => 0], ['objectId', 'page'], null, null, false, true, null]],
        5094 => [[['_route' => 'mautic_notification_index', '_controller' => 'Mautic\\NotificationBundle\\Controller\\NotificationController::indexAction', 'page' => 0], ['page'], null, null, false, true, null]],
        5137 => [[['_route' => 'mautic_notification_action', '_controller' => 'Mautic\\NotificationBundle\\Controller\\NotificationController::executeAction', 'objectId' => 0], ['objectAction', 'objectId'], null, null, false, true, null]],
        5186 => [[['_route' => 'mautic_notification_contacts', '_controller' => 'Mautic\\NotificationBundle\\Controller\\NotificationController::contactsAction', 'page' => 0, 'objectId' => 0], ['objectId', 'page'], null, null, false, true, null]],
        5219 => [[['_route' => 'mautic_page_index', '_controller' => 'Mautic\\PageBundle\\Controller\\PageController::indexAction', 'page' => 0], ['page'], null, null, false, true, null]],
        5262 => [[['_route' => 'mautic_page_action', '_controller' => 'Mautic\\PageBundle\\Controller\\PageController::executeAction', 'objectId' => 0], ['objectAction', 'objectId'], null, null, false, true, null]],
        5314 => [[['_route' => 'mautic_page_results', '_controller' => 'Mautic\\PageBundle\\Controller\\PageController::resultsAction', 'page' => 0, 'objectId' => 0], ['objectId', 'page'], null, null, false, true, null]],
        5361 => [[['_route' => 'mautic_page_export', 'format' => 'csv', '_controller' => 'Mautic\\PageBundle\\Controller\\PageController::exportAction', 'objectId' => 0], ['objectId', 'format'], null, null, false, true, null]],
        5426 => [[['_route' => 'mautic_integration_auth_callback_secure', '_controller' => 'Mautic\\PluginBundle\\Controller\\AuthController::authCallbackAction'], ['integration'], null, null, false, true, null]],
        5450 => [[['_route' => 'mautic_integration_auth_postauth_secure', '_controller' => 'Mautic\\PluginBundle\\Controller\\AuthController::authStatusAction'], ['integration'], null, null, false, true, null]],
        5471 => [[['_route' => 'mautic_plugin_info', '_controller' => 'Mautic\\PluginBundle\\Controller\\PluginController::infoAction'], ['name'], null, null, false, true, null]],
        5507 => [[['_route' => 'mautic_plugin_config', '_controller' => 'Mautic\\PluginBundle\\Controller\\PluginController::configAction', 'page' => 0], ['name', 'page'], null, null, false, true, null]],
        5522 => [[['_route' => 'mautic_plugin_reload', '_controller' => 'Mautic\\PluginBundle\\Controller\\PluginController::reloadAction'], [], null, null, false, false, null]],
        5532 => [[['_route' => 'mautic_plugin_index', '_controller' => 'Mautic\\PluginBundle\\Controller\\PluginController::indexAction'], [], null, null, false, false, null]],
        5600 => [[['_route' => 'mautic_pointtriggerevent_action', '_controller' => 'Mautic\\PointBundle\\Controller\\TriggerEventController::executeAction', 'objectId' => 0], ['objectAction', 'objectId'], null, null, false, true, null]],
        5620 => [[['_route' => 'mautic_pointtrigger_index', '_controller' => 'Mautic\\PointBundle\\Controller\\TriggerController::indexAction', 'page' => 0], ['page'], null, null, false, true, null]],
        5660 => [[['_route' => 'mautic_pointtrigger_action', '_controller' => 'Mautic\\PointBundle\\Controller\\TriggerController::executeAction', 'objectId' => 0], ['objectAction', 'objectId'], null, null, false, true, null]],
        5681 => [[['_route' => 'mautic_point_index', '_controller' => 'Mautic\\PointBundle\\Controller\\PointController::indexAction', 'page' => 0], ['page'], null, null, false, true, null]],
        5721 => [[['_route' => 'mautic_point_action', '_controller' => 'Mautic\\PointBundle\\Controller\\PointController::executeAction', 'objectId' => 0], ['objectAction', 'objectId'], null, null, false, true, null]],
        5756 => [[['_route' => 'mautic_report_index', '_controller' => 'Mautic\\ReportBundle\\Controller\\ReportController::indexAction', 'page' => 0], ['page'], null, null, false, true, null]],
        5814 => [[['_route' => 'mautic_report_export', 'format' => 'csv', '_controller' => 'Mautic\\ReportBundle\\Controller\\ReportController::exportAction', 'objectId' => 0], ['objectId', 'format'], null, null, false, true, null]],
        5856 => [[['_route' => 'mautic_report_view', 'reportPage' => 1, '_controller' => 'Mautic\\ReportBundle\\Controller\\ReportController::viewAction', 'objectId' => 0], ['objectId', 'reportPage'], null, null, false, true, null]],
        5897 => [[['_route' => 'mautic_report_download', 'format' => 'csv', '_controller' => 'Mautic\\ReportBundle\\Controller\\ReportController::downloadAction'], ['reportId', 'format'], null, null, false, true, null]],
        5981 => [[['_route' => 'mautic_report_schedule_preview', 'isScheduled' => 0, 'scheduleUnit' => '', 'scheduleDay' => '', 'scheduleMonthFrequency' => '', '_controller' => 'Mautic\\ReportBundle\\Controller\\ScheduleController::indexAction'], ['isScheduled', 'scheduleUnit', 'scheduleDay', 'scheduleMonthFrequency'], null, null, false, true, null]],
        6002 => [[['_route' => 'mautic_report_schedule', '_controller' => 'Mautic\\ReportBundle\\Controller\\ScheduleController::nowAction'], ['reportId'], null, null, false, false, null]],
        6042 => [[['_route' => 'mautic_report_action', '_controller' => 'Mautic\\ReportBundle\\Controller\\ReportController::executeAction', 'objectId' => 0], ['objectAction', 'objectId'], null, null, false, true, null]],
        6071 => [[['_route' => 'mautic_role_index', '_controller' => 'Mautic\\UserBundle\\Controller\\RoleController::indexAction', 'page' => 0], ['page'], null, null, false, true, null]],
        6111 => [[['_route' => 'mautic_role_action', '_controller' => 'Mautic\\UserBundle\\Controller\\RoleController::executeAction', 'objectId' => 0], ['objectAction', 'objectId'], null, null, false, true, null]],
        6133 => [[['_route' => 'login', '_controller' => 'Mautic\\UserBundle\\Controller\\SecurityController::loginAction'], [], null, null, false, false, null]],
        6148 => [[['_route' => 'mautic_user_logincheck', '_controller' => 'Mautic\\UserBundle\\Controller\\SecurityController::loginCheckAction'], [], null, null, false, false, null]],
        6161 => [[['_route' => 'mautic_user_logout'], [], null, null, false, false, null]],
        6190 => [[['_route' => 'mautic_user_index', '_controller' => 'Mautic\\UserBundle\\Controller\\UserController::indexAction', 'page' => 0], ['page'], null, null, false, true, null]],
        6230 => [[['_route' => 'mautic_user_action', '_controller' => 'Mautic\\UserBundle\\Controller\\UserController::executeAction', 'objectId' => 0], ['objectAction', 'objectId'], null, null, false, true, null]],
        6247 => [[['_route' => 'mautic_user_account', '_controller' => 'Mautic\\UserBundle\\Controller\\ProfileController::indexAction'], [], null, null, false, false, null]],
        6278 => [[['_route' => 'mautic_webhook_index', '_controller' => 'Mautic\\WebhookBundle\\Controller\\WebhookController::indexAction', 'page' => 0], ['page'], null, null, false, true, null]],
        6318 => [[['_route' => 'mautic_webhook_action', '_controller' => 'Mautic\\WebhookBundle\\Controller\\WebhookController::executeAction', 'objectId' => 0], ['objectAction', 'objectId'], null, null, false, true, null]],
        6353 => [[['_route' => 'grapesjsbuilder_upload', '_controller' => 'MauticPlugin\\GrapesJsBuilderBundle\\Controller\\FileManagerController::uploadAction'], [], null, null, false, false, null]],
        6368 => [[['_route' => 'grapesjsbuilder_delete', '_controller' => 'MauticPlugin\\GrapesJsBuilderBundle\\Controller\\FileManagerController::deleteAction'], [], null, null, false, false, null]],
        6407 => [[['_route' => 'grapesjsbuilder_builder', '_controller' => 'MauticPlugin\\GrapesJsBuilderBundle\\Controller\\GrapesJsController::builderAction', 'objectId' => 0], ['objectType', 'objectId'], null, null, false, true, null]],
        6439 => [[['_route' => 'mautic_focus_index', '_controller' => 'MauticPlugin\\MauticFocusBundle\\Controller\\FocusController::indexAction', 'page' => 0], ['page'], null, null, false, true, null]],
        6479 => [[['_route' => 'mautic_focus_action', '_controller' => 'MauticPlugin\\MauticFocusBundle\\Controller\\FocusController::executeAction', 'objectId' => 0], ['objectAction', 'objectId'], null, null, false, true, null]],
        6530 => [[['_route' => 'mautic_plugin_fullcontact_action', '_controller' => 'MauticPlugin\\MauticFullContactBundle\\Controller\\FullContactController::executeAction', 'objectId' => 0], ['objectAction', 'objectId'], null, null, false, true, null]],
        6563 => [[['_route' => 'mautic_tweet_index', '_controller' => 'MauticPlugin\\MauticSocialBundle\\Controller\\TweetController::indexAction', 'page' => 0], ['page'], null, null, false, true, null]],
        6603 => [[['_route' => 'mautic_tweet_action', '_controller' => 'MauticPlugin\\MauticSocialBundle\\Controller\\TweetController::executeAction', 'objectId' => 0], ['objectAction', 'objectId'], null, null, false, true, null]],
        6630 => [[['_route' => 'mautic_tagmanager_index', '_controller' => 'MauticPlugin\\MauticTagManagerBundle\\Controller\\TagController::indexAction', 'page' => 0], ['page'], null, null, false, true, null]],
        6670 => [[['_route' => 'mautic_tagmanager_action', '_controller' => 'MauticPlugin\\MauticTagManagerBundle\\Controller\\TagController::executeAction', 'objectId' => 0], ['objectAction', 'objectId'], null, null, false, true, null]],
        6703 => [[['_route' => '_uploader_upload_asset', '_controller' => 'oneup_uploader.controller.mautic::upload', '_format' => 'json'], [], ['POST' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        6733 => [[['_route' => 'mautic_citrix_proxy', '_controller' => 'MauticPlugin\\MauticCitrixBundle\\Controller\\PublicController::proxyAction'], [], null, null, false, false, null]],
        6756 => [[['_route' => 'mautic_citrix_sessionchanged', '_controller' => 'MauticPlugin\\MauticCitrixBundle\\Controller\\PublicController::sessionChangedAction'], [], null, null, false, false, null]],
        6782 => [[['_route' => 'mautic_plugin_clearbit_index', '_controller' => 'MauticPlugin\\MauticClearbitBundle\\Controller\\PublicController::callbackAction'], [], null, null, false, false, null]],
        6871 => [
            [['_route' => 'mautic_page_public', '_controller' => 'Mautic\\PageBundle\\Controller\\PublicController::indexAction'], ['slug'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
