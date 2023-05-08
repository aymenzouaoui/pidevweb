<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [
            [['_route' => 'app_accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null],
            [['_route' => 'quiz', '_controller' => 'App\\Controller\\QuizController::index'], null, null, null, false, false, null],
        ],
        '/activate' => [[['_route' => 'activate_account', '_controller' => 'App\\Controller\\ActivateAccountController::activate'], null, null, null, false, false, null]],
        '/admin/annonce' => [[['_route' => 'app_admin_annonce_index', '_controller' => 'App\\Controller\\AdminAnnonceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/annonce/new' => [[['_route' => 'app_admin_annonce_new', '_controller' => 'App\\Controller\\AdminAnnonceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/colis/search' => [[['_route' => 'app_adminC_search', '_controller' => 'App\\Controller\\AdminColisController::searchStudentx'], null, ['GET' => 0], null, false, false, null]],
        '/admin/colis' => [[['_route' => 'app_admin_colis_index', '_controller' => 'App\\Controller\\AdminColisController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/colis/new' => [[['_route' => 'app_admin_colis_new', '_controller' => 'App\\Controller\\AdminColisController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/search' => [[['_route' => 'app_admin_search', '_controller' => 'App\\Controller\\AdminController::searchStudentx'], null, ['GET' => 0], null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin_index', '_controller' => 'App\\Controller\\AdminController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/new' => [[['_route' => 'app_admin_new', '_controller' => 'App\\Controller\\AdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/annonces' => [[['_route' => 'app_annonces_index', '_controller' => 'App\\Controller\\AnnoncesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/annonces/annonces/search' => [[['_route' => 'app_annonces_search', '_controller' => 'App\\Controller\\AnnoncesController::search'], null, ['GET' => 0], null, false, false, null]],
        '/chat' => [[['_route' => 'app_chat_index', '_controller' => 'App\\Controller\\ChatGptController::index'], null, null, null, false, false, null]],
        '/colis/map' => [[['_route' => 'app_colis_map', '_controller' => 'App\\Controller\\ColisController::map'], null, ['GET' => 0], null, false, false, null]],
        '/colis' => [[['_route' => 'app_colis_index', '_controller' => 'App\\Controller\\ColisController::index'], null, ['GET' => 0], null, true, false, null]],
        '/colis/new' => [[['_route' => 'app_colis_new', '_controller' => 'App\\Controller\\ColisController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/competition/Allcompetition' => [[['_route' => 'list2', '_controller' => 'App\\Controller\\CompetitionController::getcompetitions'], null, null, null, false, false, null]],
        '/competition' => [[['_route' => 'app_competition_index', '_controller' => 'App\\Controller\\CompetitionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/competition/new' => [[['_route' => 'app_competition_new', '_controller' => 'App\\Controller\\CompetitionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/competition/newm/b' => [[['_route' => 'app_competition_newmm', '_controller' => 'App\\Controller\\CompetitionController::newmm'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/documentexpedition' => [[['_route' => 'app_documentexpedition_index', '_controller' => 'App\\Controller\\DocumentexpeditionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/documentexpedition/new' => [[['_route' => 'app_documentexpedition_new', '_controller' => 'App\\Controller\\DocumentexpeditionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/error' => [[['_route' => 'app_error', '_controller' => 'App\\Controller\\ErrorController::index'], null, null, null, false, false, null]],
        '/evaluation' => [[['_route' => 'evaluation', '_controller' => 'App\\Controller\\EvaluationController::evaluation'], null, null, null, false, false, null]],
        '/front/competition' => [[['_route' => 'app_front_competition', '_controller' => 'App\\Controller\\FrontCompetitionController::index'], null, null, null, false, false, null]],
        '/front/competition/cadeaux' => [[['_route' => 'app_front_cadeaucompetition', '_controller' => 'App\\Controller\\FrontCompetitionController::afficherCadeaux'], null, null, null, false, false, null]],
        '/front/reservation' => [[['_route' => 'app_front_reservation', '_controller' => 'App\\Controller\\FrontReservationController::index'], null, null, null, false, false, null]],
        '/front/reservation/MesReservations' => [[['_route' => 'app_interface_Mesreservation', '_controller' => 'App\\Controller\\FrontReservationController::mesRes'], null, null, null, false, false, null]],
        '/new' => [[['_route' => 'app_reservation_new', '_controller' => 'App\\Controller\\FrontReservationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/gifts' => [[['_route' => 'app_gifts_index', '_controller' => 'App\\Controller\\GiftsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/gifts/new' => [[['_route' => 'app_gifts_new', '_controller' => 'App\\Controller\\GiftsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
        '/loginm' => [[['_route' => 'app_loginm', '_controller' => 'App\\Controller\\LoginController::indexm'], null, null, null, false, false, null]],
        '/map' => [[['_route' => 'app_map', '_controller' => 'App\\Controller\\MapController::index'], null, null, null, false, false, null]],
        '/message' => [[['_route' => 'app_message_recu', '_controller' => 'App\\Controller\\MessageController::mrecu'], null, ['GET' => 0], null, true, false, null]],
        '/qr-codes' => [[['_route' => 'app_qr_codes', '_controller' => 'App\\Controller\\QrCodeGeneratorController::index'], null, null, null, false, false, null]],
        '/question/new' => [[['_route' => 'quiz_new', '_controller' => 'App\\Controller\\QuizController::new'], null, null, null, false, false, null]],
        '/reclamations' => [[['_route' => 'app_reclamations_index', '_controller' => 'App\\Controller\\ReclamationsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamations/new' => [[['_route' => 'app_reclamations_new', '_controller' => 'App\\Controller\\ReclamationsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reservation' => [[['_route' => 'app_reservation_index', '_controller' => 'App\\Controller\\ReservationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/security' => [[['_route' => 'app_security', '_controller' => 'App\\Controller\\SecurityController::index'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/securitySuccess' => [[['_route' => 'app_securitySussess', '_controller' => 'App\\Controller\\SecurityController::loginSuccessHandler'], null, null, null, false, false, null]],
        '/Json/allColis' => [[['_route' => 'app_colis_json_all', '_controller' => 'App\\Controller\\SerializerController::allColis'], null, null, null, false, false, null]],
        '/Json/new' => [[['_route' => 'app_json_new', '_controller' => 'App\\Controller\\SerializerController::Add'], null, null, null, false, false, null]],
        '/statsColis' => [[['_route' => 'app_stats_index', '_controller' => 'App\\Controller\\StatsColisController::index'], null, null, null, false, false, null]],
        '/stats' => [[['_route' => 'app_stats', '_controller' => 'App\\Controller\\StatsController::index'], null, null, null, false, false, null]],
        '/test/cadeau' => [[['_route' => 'app_test_cadeau', '_controller' => 'App\\Controller\\TestCadeauController::index'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/search' => [[['_route' => 'app_user_search', '_controller' => 'App\\Controller\\UserController::searchStudentx'], null, ['GET' => 0], null, false, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/profil' => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], null, ['GET' => 0], null, false, false, null]],
        '/userm' => [[['_route' => 'app_user_indexm', '_controller' => 'App\\Controller\\UsermobilController::indexm'], null, ['GET' => 0], null, true, false, null]],
        '/userm/searchm' => [[['_route' => 'app_userm_search', '_controller' => 'App\\Controller\\UsermobilController::searchStudentxm'], null, ['GET' => 0], null, false, false, null]],
        '/userm/newm' => [[['_route' => 'app_userm_new', '_controller' => 'App\\Controller\\UsermobilController::newm'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/userm/profilm' => [[['_route' => 'app_userm_show', '_controller' => 'App\\Controller\\UsermobilController::show'], null, ['GET' => 0], null, false, false, null]],
        '/validation' => [[['_route' => 'app_validation_index', '_controller' => 'App\\Controller\\ValidationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/vehicule/AllVehicule' => [[['_route' => 'list', '_controller' => 'App\\Controller\\VehiculeController::getVehicules'], null, null, null, false, false, null]],
        '/vehicule' => [[['_route' => 'app_vehicule_index', '_controller' => 'App\\Controller\\VehiculeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/vehicule/new' => [[['_route' => 'app_vehicule_new', '_controller' => 'App\\Controller\\VehiculeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/qr-code' => [[['_route' => 'app_qr_index', '_controller' => 'App\\Controller\\QrCodeController::generate'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|annonce/([^/]++)(?'
                            .'|(*:39)'
                            .'|/edit(*:51)'
                            .'|(*:58)'
                        .')'
                        .'|colis/([^/]++)(?'
                            .'|(*:83)'
                            .'|/edit(*:95)'
                            .'|(*:102)'
                        .')'
                        .'|([^/]++)(*:119)'
                        .'|edit/([^/]++)(*:140)'
                        .'|([^/]++)(?'
                            .'|(*:159)'
                            .'|/block(*:173)'
                        .')'
                    .')'
                    .'|nnonces/(?'
                        .'|new/([^/]++)(*:206)'
                        .'|([^/]++)(?'
                            .'|(*:225)'
                            .'|/edit(*:238)'
                            .'|(*:246)'
                        .')'
                    .')'
                .')'
                .'|/co(?'
                    .'|lis/(?'
                        .'|([^/]++)(?'
                            .'|(*:281)'
                            .'|/edit(*:294)'
                            .'|(*:302)'
                        .')'
                        .'|terms(*:316)'
                        .'|rec/([^/]++)(*:336)'
                    .')'
                    .'|mpetition/(?'
                        .'|([^/]++)(?'
                            .'|(*:369)'
                            .'|/edit(*:382)'
                            .'|(*:390)'
                        .')'
                        .'|sort\\-by\\-nbp(*:412)'
                    .')'
                .')'
                .'|/documentexpedition/(?'
                    .'|([^/]++)(?'
                        .'|(*:456)'
                        .'|/edit(*:469)'
                        .'|(*:477)'
                    .')'
                    .'|colis/(?'
                        .'|confirmer/([^/]++)(*:513)'
                        .'|([^/]++)(*:529)'
                    .')'
                    .'|print/([^/]++)(*:552)'
                .')'
                .'|/front/(?'
                    .'|competition/(?'
                        .'|detailscadeau/([^/]++)(*:608)'
                        .'|([^/]++)(*:624)'
                        .'|cadeaux/([^/]++)(*:648)'
                    .')'
                    .'|reservation/(?'
                        .'|MesReservations/([^/]++)(?'
                            .'|/\\#(*:702)'
                            .'|(*:710)'
                        .')'
                        .'|([^/]++)(*:727)'
                    .')'
                .')'
                .'|/gifts/([^/]++)(?'
                    .'|(*:755)'
                    .'|/edit(*:768)'
                    .'|(*:776)'
                .')'
                .'|/message/([^/]++)(?'
                    .'|(*:805)'
                    .'|/(?'
                        .'|new(*:820)'
                        .'|edit(*:832)'
                    .')'
                    .'|(*:841)'
                .')'
                .'|/q(?'
                    .'|uestion/([^/]++)/(?'
                        .'|edit(*:879)'
                        .'|delete(*:893)'
                    .')'
                    .'|r\\-code/([^/]++)/([\\w\\W]+)(*:928)'
                .')'
                .'|/re(?'
                    .'|clamations/([^/]++)(?'
                        .'|(*:965)'
                        .'|/edit(*:978)'
                        .'|(*:986)'
                    .')'
                    .'|se(?'
                        .'|rvation/([^/]++)(?'
                            .'|/(?'
                                .'|\\#(*:1025)'
                                .'|c(*:1035)'
                                .'|edit(*:1048)'
                            .')'
                            .'|(*:1058)'
                        .')'
                        .'|t\\-password/reset(?:/([^/]++))?(*:1099)'
                    .')'
                .')'
                .'|/Json/(?'
                    .'|allColis/([^/]++)(*:1136)'
                    .'|([^/]++)/edit(*:1158)'
                    .'|delete/([^/]++)(*:1182)'
                .')'
                .'|/user(?'
                    .'|/(?'
                        .'|([^/]++)(*:1212)'
                        .'|edit/([^/]++)(*:1234)'
                        .'|delete/([^/]++)(*:1258)'
                    .')'
                    .'|m/(?'
                        .'|([^/]++)(*:1281)'
                        .'|editm/([^/]++)(*:1304)'
                        .'|deletem/([^/]++)(*:1329)'
                    .')'
                .')'
                .'|/v(?'
                    .'|alidation/([^/]++)(?'
                        .'|/(?'
                            .'|new(*:1373)'
                            .'|edit(*:1386)'
                        .')'
                        .'|(*:1396)'
                    .')'
                    .'|ehicule/([^/]++)(?'
                        .'|(*:1425)'
                        .'|/edit(*:1439)'
                        .'|(*:1448)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1490)'
                    .'|wdt/([^/]++)(*:1511)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:1558)'
                            .'|router(*:1573)'
                            .'|exception(?'
                                .'|(*:1594)'
                                .'|\\.css(*:1608)'
                            .')'
                        .')'
                        .'|(*:1619)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        39 => [[['_route' => 'app_admin_annonce_show', '_controller' => 'App\\Controller\\AdminAnnonceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        51 => [[['_route' => 'app_admin_annonce_edit', '_controller' => 'App\\Controller\\AdminAnnonceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        58 => [[['_route' => 'app_admin_annonce_delete', '_controller' => 'App\\Controller\\AdminAnnonceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        83 => [[['_route' => 'app_admin_colis_show', '_controller' => 'App\\Controller\\AdminColisController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        95 => [[['_route' => 'app_admin_colis_edit', '_controller' => 'App\\Controller\\AdminColisController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        102 => [[['_route' => 'app_admin_colis_delete', '_controller' => 'App\\Controller\\AdminColisController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        119 => [[['_route' => 'app_admin_show', '_controller' => 'App\\Controller\\AdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        140 => [[['_route' => 'app_admin_edit', '_controller' => 'App\\Controller\\AdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        159 => [[['_route' => 'app_admin_delete', '_controller' => 'App\\Controller\\AdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        173 => [[['_route' => 'app_admin_block_user', '_controller' => 'App\\Controller\\AdminController::blockUser'], ['id'], ['GET' => 0], null, false, false, null]],
        206 => [[['_route' => 'app_annonces_new', '_controller' => 'App\\Controller\\AnnoncesController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        225 => [[['_route' => 'app_annonces_show', '_controller' => 'App\\Controller\\AnnoncesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        238 => [[['_route' => 'app_annonces_edit', '_controller' => 'App\\Controller\\AnnoncesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        246 => [[['_route' => 'app_annonces_delete', '_controller' => 'App\\Controller\\AnnoncesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        281 => [[['_route' => 'app_colis_show', '_controller' => 'App\\Controller\\ColisController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        294 => [[['_route' => 'app_colis_edit', '_controller' => 'App\\Controller\\ColisController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        302 => [[['_route' => 'app_colis_delete', '_controller' => 'App\\Controller\\ColisController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        316 => [[['_route' => 'app_terms', '_controller' => 'App\\Controller\\ColisController::terms'], [], null, null, false, false, null]],
        336 => [[['_route' => 'app_colis_rec', '_controller' => 'App\\Controller\\ColisRecController::index'], ['id'], null, null, false, true, null]],
        369 => [[['_route' => 'app_competition_show', '_controller' => 'App\\Controller\\CompetitionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        382 => [[['_route' => 'app_competition_edit', '_controller' => 'App\\Controller\\CompetitionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        390 => [[['_route' => 'app_competition_delete', '_controller' => 'App\\Controller\\CompetitionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        412 => [[['_route' => 'app_competition_sort_by_nbp', '_controller' => 'App\\Controller\\CompetitionController::sortByNbp'], [], ['GET' => 0], null, false, false, null]],
        456 => [[['_route' => 'app_documentexpedition_show', '_controller' => 'App\\Controller\\DocumentexpeditionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        469 => [[['_route' => 'app_documentexpedition_edit', '_controller' => 'App\\Controller\\DocumentexpeditionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        477 => [[['_route' => 'app_documentexpedition_delete', '_controller' => 'App\\Controller\\DocumentexpeditionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        513 => [[['_route' => 'livraison_confirm', '_controller' => 'App\\Controller\\DocumentexpeditionController::handleConfirmation'], ['id'], null, null, false, true, null]],
        529 => [[['_route' => 'app_documentexpedition_colis_show', '_controller' => 'App\\Controller\\DocumentexpeditionController::showcolis'], ['id'], ['GET' => 0], null, false, true, null]],
        552 => [[['_route' => 'app_documentexpedition_print', '_controller' => 'App\\Controller\\DocumentexpeditionController::printAction'], ['id'], ['GET' => 0], null, false, true, null]],
        608 => [[['_route' => 'app_front_showdetailscadeau', '_controller' => 'App\\Controller\\FrontCompetitionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        624 => [[['_route' => 'app_front_participer', '_controller' => 'App\\Controller\\FrontCompetitionController::participer'], ['id'], null, null, false, true, null]],
        648 => [[['_route' => 'exchange_gift', '_controller' => 'App\\Controller\\FrontCompetitionController::exchangeGift'], ['id'], null, null, false, true, null]],
        702 => [[['_route' => 'app_reservation_annuler', '_controller' => 'App\\Controller\\FrontReservationController::annuler'], ['id'], null, null, false, false, null]],
        710 => [[['_route' => 'app_reservation_download', '_controller' => 'App\\Controller\\FrontReservationController::usersDataDownload'], ['id'], null, null, false, true, null]],
        727 => [[['_route' => 'app_interface_reservation', '_controller' => 'App\\Controller\\FrontReservationController::detaille'], ['idV'], null, null, false, true, null]],
        755 => [[['_route' => 'app_gifts_show', '_controller' => 'App\\Controller\\GiftsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        768 => [[['_route' => 'app_gifts_edit', '_controller' => 'App\\Controller\\GiftsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        776 => [[['_route' => 'app_gifts_delete', '_controller' => 'App\\Controller\\GiftsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        805 => [[['_route' => 'app_message_index', '_controller' => 'App\\Controller\\MessageController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        820 => [[['_route' => 'app_message_new', '_controller' => 'App\\Controller\\MessageController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        832 => [[['_route' => 'app_message_edit', '_controller' => 'App\\Controller\\MessageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        841 => [
            [['_route' => 'app_message_show', '_controller' => 'App\\Controller\\MessageController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_message_delete', '_controller' => 'App\\Controller\\MessageController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        879 => [[['_route' => 'quiz_edit', '_controller' => 'App\\Controller\\QuizController::edit'], ['id'], null, null, false, false, null]],
        893 => [[['_route' => 'quiz_delete', '_controller' => 'App\\Controller\\QuizController::delete'], ['id'], null, null, false, false, null]],
        928 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        965 => [[['_route' => 'app_Reclamations_show', '_controller' => 'App\\Controller\\ReclamationsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        978 => [[['_route' => 'app_reclamations_edit', '_controller' => 'App\\Controller\\ReclamationsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        986 => [[['_route' => 'app_reclamations_delete', '_controller' => 'App\\Controller\\ReclamationsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1025 => [[['_route' => 'app_reservation_terminer', '_controller' => 'App\\Controller\\ReservationController::terminer'], ['id'], null, null, false, false, null]],
        1035 => [[['_route' => 'app_reservation_confirme', '_controller' => 'App\\Controller\\ReservationController::confirmer'], ['id'], null, null, false, false, null]],
        1048 => [[['_route' => 'app_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1058 => [
            [['_route' => 'app_reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        1099 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        1136 => [[['_route' => 'app_colis_json', '_controller' => 'App\\Controller\\SerializerController::ColisID'], ['id'], null, null, false, true, null]],
        1158 => [[['_route' => 'app_json_edit', '_controller' => 'App\\Controller\\SerializerController::updateJson'], ['id'], null, null, false, false, null]],
        1182 => [[['_route' => 'app_json_delete', '_controller' => 'App\\Controller\\SerializerController::delete'], ['id'], null, null, false, true, null]],
        1212 => [[['_route' => 'app_user_showp', '_controller' => 'App\\Controller\\UserController::showp'], ['id'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        1234 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1258 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1281 => [[['_route' => 'app_userm_showpm', '_controller' => 'App\\Controller\\UsermobilController::showpm'], ['id'], ['GET' => 0], null, false, true, null]],
        1304 => [[['_route' => 'app_userm_edit', '_controller' => 'App\\Controller\\UsermobilController::editm'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1329 => [[['_route' => 'app_userm_delete', '_controller' => 'App\\Controller\\UsermobilController::deletem'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1373 => [[['_route' => 'app_validation_new', '_controller' => 'App\\Controller\\ValidationController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1386 => [[['_route' => 'app_validation_edit', '_controller' => 'App\\Controller\\ValidationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1396 => [
            [['_route' => 'app_validation_show', '_controller' => 'App\\Controller\\ValidationController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_validation_delete', '_controller' => 'App\\Controller\\ValidationController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        1425 => [[['_route' => 'app_vehicule_show', '_controller' => 'App\\Controller\\VehiculeController::show'], ['idV'], ['GET' => 0], null, false, true, null]],
        1439 => [[['_route' => 'app_vehicule_edit', '_controller' => 'App\\Controller\\VehiculeController::edit'], ['idV'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1448 => [[['_route' => 'app_vehicule_delete', '_controller' => 'App\\Controller\\VehiculeController::delete'], ['idV'], ['POST' => 0], null, false, true, null]],
        1490 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1511 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1558 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1573 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1594 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1608 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1619 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
