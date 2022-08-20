<?php
$parameters = array(
	'db_driver' => 'pdo_mysql',
	'db_host' => 'database',
	'db_table_prefix' => null,
	'db_port' => '3306',
	'db_name' => 'lamp',
	'db_user' => 'root',
	'db_password' => null,
	'db_backup_tables' => 1,
	'db_backup_prefix' => 'bak_',
	'mailer_from_name' => 'Admin User',
	'mailer_from_email' => 'stefan@adrete.se',
	'mailer_transport' => 'smtp',
	'mailer_host' => 'mailhog',
	'mailer_port' => '1025',
	'mailer_user' => null,
	'mailer_password' => null,
	'mailer_amazon_region' => 'us-east-1',
	'mailer_amazon_other_region' => null,
	'mailer_api_key' => null,
	'mailer_encryption' => null,
	'mailer_auth_mode' => null,
	'mailer_spool_type' => 'memory',
	'mailer_spool_path' => '%kernel.root_dir%/../var/spool',
	'secret_key' => '315d5771f6f45251726cda627825be832c8728d66d7bb8363250a361c06939ca',
	'site_url' => 'http://mautic-forandra.lndo.site',
	'webroot' => null,
	'404_page' => null,
	'cache_path' => '/app/docroot/app/../var/cache',
	'log_path' => '/app/docroot/app/../var/logs',
	'max_log_files' => 7,
	'log_file_name' => 'mautic_prod.php',
	'image_path' => 'media/images',
	'tmp_path' => '/app/docroot/app/../var/tmp',
	'locale' => 'en_US',
	'dev_hosts' => array(

	),
	'trusted_hosts' => array(

	),
	'trusted_proxies' => array(

	),
	'rememberme_key' => '2b129c08a1db21b895c5528d3489e82005cc03f4',
	'rememberme_lifetime' => 31536000,
	'rememberme_path' => '/',
	'default_pagelimit' => 30,
	'default_timezone' => 'UTC',
	'date_format_full' => 'F j, Y g:i a T',
	'date_format_short' => 'D, M d',
	'date_format_dateonly' => 'F j, Y',
	'date_format_timeonly' => 'g:i a',
	'ip_lookup_service' => 'maxmind_download',
	'ip_lookup_auth' => 'C18bKSXMYRU97eSe',
	'ip_lookup_config' => array(

	),
	'ip_lookup_create_organization' => 0,
	'update_stability' => 'stable',
	'cookie_path' => '/',
	'cookie_secure' => true,
	'cookie_httponly' => false,
	'do_not_track_ips' => array(

	),
	'do_not_track_bots' => array(
		'0' => 'MSNBOT',
		'1' => 'msnbot-media',
		'2' => 'bingbot',
		'3' => 'Googlebot',
		'4' => 'Google Web Preview',
		'5' => 'Mediapartners-Google',
		'6' => 'Baiduspider',
		'7' => 'Ezooms',
		'8' => 'YahooSeeker',
		'9' => 'Slurp',
		'10' => 'AltaVista',
		'11' => 'AVSearch',
		'12' => 'Mercator',
		'13' => 'Scooter',
		'14' => 'InfoSeek',
		'15' => 'Ultraseek',
		'16' => 'Lycos',
		'17' => 'Wget',
		'18' => 'YandexBot',
		'19' => 'Java/1.4.1_04',
		'20' => 'SiteBot',
		'21' => 'Exabot',
		'22' => 'AhrefsBot',
		'23' => 'MJ12bot',
		'24' => 'NetSeer crawler',
		'25' => 'TurnitinBot',
		'26' => 'magpie-crawler',
		'27' => 'Nutch Crawler',
		'28' => 'CMS Crawler',
		'29' => 'rogerbot',
		'30' => 'Domnutch',
		'31' => 'ssearch_bot',
		'32' => 'XoviBot',
		'33' => 'digincore',
		'34' => 'fr-crawler',
		'35' => 'SeznamBot',
		'36' => 'Seznam screenshot-generator',
		'37' => 'Facebot',
		'38' => 'facebookexternalhit',
		'39' => 'SimplePie',
		'40' => 'Riddler',
		'41' => '007ac9 Crawler',
		'42' => '360Spider',
		'43' => 'A6-Indexer',
		'44' => 'ADmantX',
		'45' => 'AHC',
		'46' => 'AISearchBot',
		'47' => 'APIs-Google',
		'48' => 'Aboundex',
		'49' => 'AddThis',
		'50' => 'Adidxbot',
		'51' => 'AdsBot-Google',
		'52' => 'AdsTxtCrawler',
		'53' => 'AdvBot',
		'54' => 'Ahrefs',
		'55' => 'AlphaBot',
		'56' => 'Amazon CloudFront',
		'57' => 'AndersPinkBot',
		'58' => 'Apache-HttpClient',
		'59' => 'Apercite',
		'60' => 'AppEngine-Google',
		'61' => 'Applebot',
		'62' => 'ArchiveBot',
		'63' => 'BDCbot',
		'64' => 'BIGLOTRON',
		'65' => 'BLEXBot',
		'66' => 'BLP_bbot',
		'67' => 'BTWebClient',
		'68' => 'BUbiNG',
		'69' => 'Baidu-YunGuanCe',
		'70' => 'Barkrowler',
		'71' => 'BehloolBot',
		'72' => 'BingPreview',
		'73' => 'BomboraBot',
		'74' => 'Bot.AraTurka.com',
		'75' => 'BoxcarBot',
		'76' => 'BrandVerity',
		'77' => 'Buck',
		'78' => 'CC Metadata Scaper',
		'79' => 'CCBot',
		'80' => 'CapsuleChecker',
		'81' => 'Cliqzbot',
		'82' => 'CloudFlare-AlwaysOnline',
		'83' => 'Companybook-Crawler',
		'84' => 'ContextAd Bot',
		'85' => 'CrunchBot',
		'86' => 'CrystalSemanticsBot',
		'87' => 'CyberPatrol',
		'88' => 'DareBoost',
		'89' => 'Datafeedwatch',
		'90' => 'Daum',
		'91' => 'DeuSu',
		'92' => 'developers.google.com',
		'93' => 'Diffbot',
		'94' => 'Digg Deeper',
		'95' => 'Digincore bot',
		'96' => 'Discordbot',
		'97' => 'Disqus',
		'98' => 'DnyzBot',
		'99' => 'Domain Re-Animator Bot',
		'100' => 'DomainStatsBot',
		'101' => 'DuckDuckBot',
		'102' => 'DuckDuckGo-Favicons-Bot',
		'103' => 'EZID',
		'104' => 'Embedly',
		'105' => 'EveryoneSocialBot',
		'106' => 'ExtLinksBot',
		'107' => 'FAST Enterprise Crawler',
		'108' => 'FAST-WebCrawler',
		'109' => 'Feedfetcher-Google',
		'110' => 'Feedly',
		'111' => 'Feedspotbot',
		'112' => 'FemtosearchBot',
		'113' => 'Fetch',
		'114' => 'Fever',
		'115' => 'Flamingo_SearchEngine',
		'116' => 'FlipboardProxy',
		'117' => 'Fyrebot',
		'118' => 'GarlikCrawler',
		'119' => 'Genieo',
		'120' => 'Gigablast',
		'121' => 'Gigabot',
		'122' => 'GingerCrawler',
		'123' => 'Gluten Free Crawler',
		'124' => 'GnowitNewsbot',
		'125' => 'Go-http-client',
		'126' => 'Google-Adwords-Instant',
		'127' => 'Gowikibot',
		'128' => 'GrapeshotCrawler',
		'129' => 'Grobbot',
		'130' => 'HTTrack',
		'131' => 'Hatena',
		'132' => 'IAS crawler',
		'133' => 'ICC-Crawler',
		'134' => 'IndeedBot',
		'135' => 'InterfaxScanBot',
		'136' => 'IstellaBot',
		'137' => 'James BOT',
		'138' => 'Jamie\'s Spider',
		'139' => 'Jetslide',
		'140' => 'Jetty',
		'141' => 'Jugendschutzprogramm-Crawler',
		'142' => 'K7MLWCBot',
		'143' => 'Kemvibot',
		'144' => 'KosmioBot',
		'145' => 'Landau-Media-Spider',
		'146' => 'Laserlikebot',
		'147' => 'Leikibot',
		'148' => 'Linguee Bot',
		'149' => 'LinkArchiver',
		'150' => 'LinkedInBot',
		'151' => 'LivelapBot',
		'152' => 'Luminator-robots',
		'153' => 'Mail.RU_Bot',
		'154' => 'Mastodon',
		'155' => 'MauiBot',
		'156' => 'Mediatoolkitbot',
		'157' => 'MegaIndex',
		'158' => 'MeltwaterNews',
		'159' => 'MetaJobBot',
		'160' => 'MetaURI',
		'161' => 'Miniflux',
		'162' => 'MojeekBot',
		'163' => 'Moreover',
		'164' => 'MuckRack',
		'165' => 'Multiviewbot',
		'166' => 'NING',
		'167' => 'NerdByNature.Bot',
		'168' => 'NetcraftSurveyAgent',
		'169' => 'Netvibes',
		'170' => 'Nimbostratus-Bot',
		'171' => 'Nuzzel',
		'172' => 'Ocarinabot',
		'173' => 'OpenHoseBot',
		'174' => 'OrangeBot',
		'175' => 'OutclicksBot',
		'176' => 'PR-CY.RU',
		'177' => 'PaperLiBot',
		'178' => 'Pcore-HTTP',
		'179' => 'PhantomJS',
		'180' => 'PiplBot',
		'181' => 'PocketParser',
		'182' => 'Primalbot',
		'183' => 'PrivacyAwareBot',
		'184' => 'Pulsepoint',
		'185' => 'Python-urllib',
		'186' => 'Qwantify',
		'187' => 'RankActiveLinkBot',
		'188' => 'RetrevoPageAnalyzer',
		'189' => 'SBL-BOT',
		'190' => 'SEMrushBot',
		'191' => 'SEOkicks',
		'192' => 'SWIMGBot',
		'193' => 'SafeDNSBot',
		'194' => 'SafeSearch microdata crawler',
		'195' => 'ScoutJet',
		'196' => 'Scrapy',
		'197' => 'Screaming Frog SEO Spider',
		'198' => 'SemanticScholarBot',
		'199' => 'SimpleCrawler',
		'200' => 'Siteimprove.com',
		'201' => 'SkypeUriPreview',
		'202' => 'Slack-ImgProxy',
		'203' => 'Slackbot',
		'204' => 'Snacktory',
		'205' => 'SocialRankIOBot',
		'206' => 'Sogou',
		'207' => 'Sonic',
		'208' => 'StorygizeBot',
		'209' => 'SurveyBot',
		'210' => 'Sysomos',
		'211' => 'TangibleeBot',
		'212' => 'TelegramBot',
		'213' => 'Teoma',
		'214' => 'Thinklab',
		'215' => 'TinEye',
		'216' => 'ToutiaoSpider',
		'217' => 'Traackr.com',
		'218' => 'Trove',
		'219' => 'TweetmemeBot',
		'220' => 'Twitterbot',
		'221' => 'Twurly',
		'222' => 'Upflow',
		'223' => 'UptimeRobot',
		'224' => 'UsineNouvelleCrawler',
		'225' => 'Veoozbot',
		'226' => 'WeSEE:Search',
		'227' => 'WhatsApp',
		'228' => 'Xenu Link Sleuth',
		'229' => 'Y!J',
		'230' => 'YaK',
		'231' => 'Yahoo Link Preview',
		'232' => 'Yeti',
		'233' => 'YisouSpider',
		'234' => 'Zabbix',
		'235' => 'ZoominfoBot',
		'236' => 'ZumBot',
		'237' => 'ZuperlistBot',
		'238' => '^LCC',
		'239' => 'acapbot',
		'240' => 'acoonbot',
		'241' => 'adbeat_bot',
		'242' => 'adscanner',
		'243' => 'aiHitBot',
		'244' => 'antibot',
		'245' => 'arabot',
		'246' => 'archive.org_bot',
		'247' => 'axios',
		'248' => 'backlinkcrawler',
		'249' => 'betaBot',
		'250' => 'bibnum.bnf',
		'251' => 'binlar',
		'252' => 'bitlybot',
		'253' => 'blekkobot',
		'254' => 'blogmuraBot',
		'255' => 'bnf.fr_bot',
		'256' => 'bot-pge.chlooe.com',
		'257' => 'botify',
		'258' => 'brainobot',
		'259' => 'buzzbot',
		'260' => 'cXensebot',
		'261' => 'careerbot',
		'262' => 'centurybot9',
		'263' => 'changedetection',
		'264' => 'check_http',
		'265' => 'citeseerxbot',
		'266' => 'coccoc',
		'267' => 'collection@infegy.com',
		'268' => 'content crawler spider',
		'269' => 'contxbot',
		'270' => 'convera',
		'271' => 'crawler4j',
		'272' => 'curl',
		'273' => 'datagnionbot',
		'274' => 'dcrawl',
		'275' => 'deadlinkchecker',
		'276' => 'discobot',
		'277' => 'domaincrawler',
		'278' => 'dotbot',
		'279' => 'drupact',
		'280' => 'ec2linkfinder',
		'281' => 'edisterbot',
		'282' => 'electricmonk',
		'283' => 'elisabot',
		'284' => 'epicbot',
		'285' => 'eright',
		'286' => 'europarchive.org',
		'287' => 'exabot',
		'288' => 'ezooms',
		'289' => 'filterdb.iss.net',
		'290' => 'findlink',
		'291' => 'findthatfile',
		'292' => 'findxbot',
		'293' => 'fluffy',
		'294' => 'fuelbot',
		'295' => 'g00g1e.net',
		'296' => 'g2reader-bot',
		'297' => 'gnam gnam spider',
		'298' => 'google-xrawler',
		'299' => 'grub.org',
		'300' => 'gslfbot',
		'301' => 'heritrix',
		'302' => 'http_get',
		'303' => 'httpunit',
		'304' => 'ia_archiver',
		'305' => 'ichiro',
		'306' => 'imrbot',
		'307' => 'integromedb',
		'308' => 'intelium_bot',
		'309' => 'ip-web-crawler.com',
		'310' => 'ips-agent',
		'311' => 'iskanie',
		'312' => 'it2media-domain-crawler',
		'313' => 'jyxobot',
		'314' => 'lb-spider',
		'315' => 'libwww',
		'316' => 'linkapediabot',
		'317' => 'linkdex',
		'318' => 'lipperhey',
		'319' => 'lssbot',
		'320' => 'lssrocketcrawler',
		'321' => 'ltx71',
		'322' => 'mappydata',
		'323' => 'memorybot',
		'324' => 'mindUpBot',
		'325' => 'mlbot',
		'326' => 'moatbot',
		'327' => 'msnbot',
		'328' => 'msrbot',
		'329' => 'nerdybot',
		'330' => 'netEstate NE Crawler',
		'331' => 'netresearchserver',
		'332' => 'newsharecounts',
		'333' => 'newspaper',
		'334' => 'niki-bot',
		'335' => 'nutch',
		'336' => 'okhttp',
		'337' => 'omgili',
		'338' => 'openindexspider',
		'339' => 'page2rss',
		'340' => 'panscient',
		'341' => 'phpcrawl',
		'342' => 'pingdom',
		'343' => 'pinterest',
		'344' => 'postrank',
		'345' => 'proximic',
		'346' => 'psbot',
		'347' => 'purebot',
		'348' => 'python-requests',
		'349' => 'redditbot',
		'350' => 'scribdbot',
		'351' => 'seekbot',
		'352' => 'semanticbot',
		'353' => 'sentry',
		'354' => 'seoscanners',
		'355' => 'seznambot',
		'356' => 'sistrix crawler',
		'357' => 'sitebot',
		'358' => 'siteexplorer.info',
		'359' => 'smtbot',
		'360' => 'spbot',
		'361' => 'speedy',
		'362' => 'summify',
		'363' => 'tagoobot',
		'364' => 'toplistbot',
		'365' => 'tracemyfile',
		'366' => 'trendictionbot',
		'367' => 'turnitinbot',
		'368' => 'twengabot',
		'369' => 'um-LN',
		'370' => 'urlappendbot',
		'371' => 'vebidoobot',
		'372' => 'vkShare',
		'373' => 'voilabot',
		'374' => 'wbsearchbot',
		'375' => 'web-archive-net.com.bot',
		'376' => 'webcompanycrawler',
		'377' => 'webmon',
		'378' => 'wget',
		'379' => 'wocbot',
		'380' => 'woobot',
		'381' => 'woriobot',
		'382' => 'wotbox',
		'383' => 'xovibot',
		'384' => 'yacybot',
		'385' => 'yandex.com',
		'386' => 'yanga',
		'387' => 'yoozBot',
		'388' => 'zgrab'
	),
	'do_not_track_internal_ips' => array(

	),
	'track_private_ip_ranges' => false,
	'link_shortener_url' => null,
	'cached_data_timeout' => '10',
	'batch_sleep_time' => 1,
	'batch_campaign_sleep_time' => false,
	'transliterate_page_title' => 0,
	'cors_restrict_domains' => 0,
	'cors_valid_domains' => array(

	),
	'max_entity_lock_time' => 0,
	'default_daterange_filter' => '-1 month',
	'debug' => false,
	'translations_list_url' => 'https://language-packs.mautic.com/manifest.json',
	'translations_fetch_url' => 'https://language-packs.mautic.com/',
	'stats_update_url' => 'https://updates.mautic.org/stats/send',
	'install_source' => 'Mautic',
	'system_update_url' => 'https://api.github.com/repos/mautic/mautic/releases',
	'editor_fonts' => array(
		'0' => array(
			'name' => 'Arial',
			'font' => 'Arial, Helvetica Neue, Helvetica, sans-serif'
		),
		'1' => array(
			'name' => 'Bitter',
			'font' => 'Bitter, Georgia, Times, Times New Roman, serif',
			'url' => 'https://fonts.googleapis.com/css?family=Bitter'
		),
		'2' => array(
			'name' => 'Courier New',
			'font' => 'Courier New, Courier, Lucida Sans Typewriter, Lucida Typewriter, monospace'
		),
		'3' => array(
			'name' => 'Droid Serif',
			'font' => 'Droid Serif, Georgia, Times, Times New Roman, serif',
			'url' => 'https://fonts.googleapis.com/css?family=Droid+Serif'
		),
		'4' => array(
			'name' => 'Georgia',
			'font' => 'Georgia, Times, Times New Roman, serif'
		),
		'5' => array(
			'name' => 'Helvetica',
			'font' => 'Helvetica Neue, Helvetica, Arial, sans-serif'
		),
		'6' => array(
			'name' => 'Lato',
			'font' => 'Lato, Tahoma, Verdana, Segoe, sans-serif',
			'url' => 'https://fonts.googleapis.com/css?family=Lato'
		),
		'7' => array(
			'name' => 'Lucida Sans Unicode',
			'font' => 'Lucida Sans Unicode, Lucida Grande, Lucida Sans, Geneva, Verdana, sans-serif'
		),
		'8' => array(
			'name' => 'Montserrat',
			'font' => 'Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif',
			'url' => 'https://fonts.googleapis.com/css?family=Montserrat'
		),
		'9' => array(
			'name' => 'Open Sans',
			'font' => 'Open Sans, Helvetica Neue, Helvetica, Arial, sans-serif',
			'url' => 'https://fonts.googleapis.com/css?family=Open+Sans'
		),
		'10' => array(
			'name' => 'Roboto',
			'font' => 'Roboto, Tahoma, Verdana, Segoe, sans-serif',
			'url' => 'https://fonts.googleapis.com/css?family=Roboto'
		),
		'11' => array(
			'name' => 'Source Sans Pro',
			'font' => 'Source Sans Pro, Tahoma, Verdana, Segoe, sans-serif',
			'url' => 'https://fonts.googleapis.com/css?family=Source+Sans+Pro'
		),
		'12' => array(
			'name' => 'Tahoma',
			'font' => 'Tahoma, Geneva, Segoe, sans-serif'
		),
		'13' => array(
			'name' => 'Times New Roman',
			'font' => 'TimesNewRoman, Times New Roman, Times, Beskerville, Georgia, serif'
		),
		'14' => array(
			'name' => 'Trebuchet MS',
			'font' => 'Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif'
		),
		'15' => array(
			'name' => 'Ubuntu',
			'font' => 'Ubuntu, Tahoma, Verdana, Segoe, sans-serif',
			'url' => 'https://fonts.googleapis.com/css?family=Ubuntu'
		),
		'16' => array(
			'name' => 'Verdana',
			'font' => 'Verdana, Geneva, sans-serif'
		),
		'17' => array(
			'name' => 'ヒラギノ角ゴ Pro W3',
			'font' => 'ヒラギノ角ゴ Pro W3, Hiragino Kaku Gothic Pro,Osaka, メイリオ, Meiryo, ＭＳ Ｐゴシック, MS PGothic, sans-serif'
		),
		'18' => array(
			'name' => 'メイリオ',
			'font' => 'メイリオ, Meiryo, ＭＳ Ｐゴシック, MS PGothic, ヒラギノ角ゴ Pro W3, Hiragino Kaku Gothic Pro,Osaka, sans-serif'
		)
	),
	'composer_updates' => 0,
	'last_shown_tab' => null,
	'theme' => 'blank',
	'theme_import_allowed_extensions' => array(
		'0' => 'json',
		'1' => 'twig',
		'2' => 'css',
		'3' => 'js',
		'4' => 'htm',
		'5' => 'html',
		'6' => 'txt',
		'7' => 'jpg',
		'8' => 'jpeg',
		'9' => 'png',
		'10' => 'gif'
	),
	'api_enabled' => 0,
	'api_enable_basic_auth' => false,
	'api_oauth2_access_token_lifetime' => 60,
	'api_oauth2_refresh_token_lifetime' => 14,
	'api_batch_max_limit' => 200,
	'api_rate_limiter_limit' => 0,
	'api_rate_limiter_cache' => array(
		'adapter' => 'cache.adapter.filesystem'
	),
	'upload_dir' => '/app/docroot/app/../media/files',
	'max_size' => '6',
	'allowed_extensions' => array(
		'0' => 'csv',
		'1' => 'doc',
		'2' => 'docx',
		'3' => 'epub',
		'4' => 'gif',
		'5' => 'jpg',
		'6' => 'jpeg',
		'7' => 'mpg',
		'8' => 'mpeg',
		'9' => 'mp3',
		'10' => 'odt',
		'11' => 'odp',
		'12' => 'ods',
		'13' => 'pdf',
		'14' => 'png',
		'15' => 'ppt',
		'16' => 'pptx',
		'17' => 'tif',
		'18' => 'tiff',
		'19' => 'txt',
		'20' => 'xls',
		'21' => 'xlsx',
		'22' => 'wav'
	),
	'campaign_time_wait_on_event_false' => 'PT1H',
	'campaign_use_summary' => 0,
	'campaign_by_range' => 0,
	'mailer_reply_to_email' => null,
	'mailer_return_path' => null,
	'mailer_append_tracking_pixel' => 1,
	'mailer_convert_embed_images' => 0,
	'mailer_custom_headers' => array(

	),
	'mailer_spool_msg_limit' => null,
	'mailer_spool_time_limit' => null,
	'mailer_spool_recover_timeout' => '900',
	'mailer_spool_clear_timeout' => '1800',
	'unsubscribe_text' => '<a href="|URL|">Unsubscribe</a> to no longer receive emails from us.',
	'webview_text' => '<a href="|URL|">Having trouble reading this email? Click here.</a>',
	'unsubscribe_message' => 'We are sorry to see you go! |EMAIL| will no longer receive emails from us. If this was by mistake, <a href="|URL|">click here to re-subscribe</a>.',
	'resubscribe_message' => '|EMAIL| has been re-subscribed. If this was by mistake, <a href="|URL|">click here to unsubscribe</a>.',
	'monitored_email' => array(
		'general' => array(
			'address' => '',
			'host' => '',
			'port' => '993',
			'encryption' => '/ssl',
			'user' => '',
			'password' => '',
			'use_attachments' => ''
		),
		'EmailBundle_bounces' => array(
			'address' => '',
			'host' => '',
			'port' => '993',
			'encryption' => '/ssl',
			'user' => '',
			'password' => '',
			'override_settings' => '0',
			'folder' => ''
		),
		'EmailBundle_unsubscribes' => array(
			'address' => '',
			'host' => '',
			'port' => '993',
			'encryption' => '/ssl',
			'user' => '',
			'password' => '',
			'override_settings' => '0',
			'folder' => ''
		),
		'EmailBundle_replies' => array(
			'address' => '',
			'host' => '',
			'port' => '993',
			'encryption' => '/ssl',
			'user' => '',
			'password' => '',
			'override_settings' => '0',
			'folder' => ''
		)
	),
	'mailer_is_owner' => 0,
	'default_signature_text' => 'Best regards, |FROM_NAME|',
	'email_frequency_number' => 0,
	'email_frequency_time' => 'DAY',
	'show_contact_preferences' => 0,
	'show_contact_frequency' => 0,
	'show_contact_pause_dates' => 0,
	'show_contact_preferred_channels' => 0,
	'show_contact_categories' => 0,
	'show_contact_segments' => 0,
	'mailer_mailjet_sandbox' => 0,
	'mailer_mailjet_sandbox_default_mail' => null,
	'disable_trackable_urls' => 0,
	'theme_email_default' => 'blank',
	'form_upload_dir' => '/app/docroot/app/../media/files/form',
	'blacklisted_extensions' => array(
		'0' => 'php',
		'1' => 'sh'
	),
	'do_not_submit_emails' => array(

	),
	'parallel_import_limit' => 1,
	'background_import_if_more_rows_than' => 0,
	'contact_columns' => array(
		'0' => 'name',
		'1' => 'email',
		'2' => 'location',
		'3' => 'stage',
		'4' => 'points',
		'5' => 'last_active',
		'6' => 'id'
	),
	'create_custom_field_in_background' => false,
	'contact_unique_identifiers_operator' => 'OR',
	'segment_rebuild_time_warning' => 30,
	'company_unique_identifiers_operator' => 'OR',
	'notification_enabled' => false,
	'notification_landing_page_enabled' => true,
	'notification_tracking_page_enabled' => false,
	'notification_app_id' => null,
	'notification_rest_api_key' => null,
	'notification_safari_web_id' => null,
	'gcm_sender_id' => '482941778795',
	'notification_subdomain_name' => null,
	'welcomenotification_enabled' => true,
	'campaign_send_notification_to_author' => 1,
	'campaign_notification_email_addresses' => null,
	'webhook_send_notification_to_author' => 1,
	'webhook_notification_email_addresses' => null,
	'cat_in_page_url' => 0,
	'google_analytics' => null,
	'anonymize_ip' => 0,
	'track_contact_by_ip' => 0,
	'track_by_tracking_url' => 0,
	'facebook_pixel_id' => null,
	'facebook_pixel_trackingpage_enabled' => 0,
	'facebook_pixel_landingpage_enabled' => 0,
	'google_analytics_id' => null,
	'google_analytics_trackingpage_enabled' => 0,
	'google_analytics_landingpage_enabled' => 0,
	'google_analytics_anonymize_ip' => 0,
	'do_not_track_404_anonymous' => 0,
	'report_temp_dir' => '/app/docroot/app/../media/files/temp',
	'report_export_batch_size' => 1000,
	'report_export_max_filesize_in_bytes' => 5000000,
	'csv_always_enclose' => 0,
	'sms_enabled' => false,
	'sms_username' => null,
	'sms_password' => null,
	'sms_sending_phone_number' => null,
	'sms_frequency_number' => 0,
	'sms_frequency_time' => 'DAY',
	'sms_transport' => null,
	'saml_idp_entity_id' => 'http://mautic-forandra.lndo.site',
	'saml_idp_email_attribute' => 'EmailAddress',
	'saml_idp_username_attribute' => null,
	'saml_idp_firstname_attribute' => 'FirstName',
	'saml_idp_lastname_attribute' => 'LastName',
	'saml_idp_default_role' => null,
	'webhook_limit' => 10,
	'webhook_time_limit' => 600,
	'webhook_log_max' => 1000,
	'clean_webhook_logs_in_background' => false,
	'webhook_disable_limit' => 100,
	'webhook_timeout' => 15,
	'queue_mode' => 'immediate_process',
	'events_orderby_dir' => 'ASC',
	'webhook_email_details' => true,
	'twitter_handle_field' => 'twitter',
);
