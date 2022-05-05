<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/ajouterentreprise' => [[['_route' => 'post_entreprise', '_controller' => 'App\\Controller\\AjoutEntreprise::PostEntreprises'], null, ['POST' => 0], null, false, false, null]],
        '/employe' => [[['_route' => 'app_employe_createemployeform', '_controller' => 'App\\Controller\\EmployeController::createEmployeForm'], null, null, null, false, false, null]],
        '/ajouteremploye' => [[['_route' => 'post_employe', '_controller' => 'App\\Controller\\EmployeController::PostEmploye'], null, ['POST' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login_login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
        '/AjoutEntreprise' => [[['_route' => 'AjoutEntreprise', '_controller' => 'App\\Controller\\LoginController::createEntrepriseForm'], null, null, null, false, false, null]],
        '/index.html.twig' => [[['_route' => 'indexadmin', '_controller' => 'App\\Controller\\LoginController::indexadmin'], null, null, null, false, false, null]],
        '/intermediaire' => [[['_route' => 'app_login_intermediaire', '_controller' => 'App\\Controller\\LoginController::intermediaire'], null, null, null, false, false, null]],
        '/Index' => [[['_route' => 'Index', '_controller' => 'App\\Controller\\LoginController::Index'], null, null, null, false, false, null]],
        '/ListeUtilisateur' => [[['_route' => 'ListeUtilisateur', '_controller' => 'App\\Controller\\UtilisateurController::ListeUtilisateur'], null, null, null, false, false, null]],
        '/Utilisateur' => [[['_route' => 'Utilisateur', '_controller' => 'App\\Controller\\UtilisateurController::createUtilisateurForm'], null, null, null, false, false, null]],
        '/ajouterutilisateur' => [[['_route' => 'post_utilisateur', '_controller' => 'App\\Controller\\UtilisateurController::PostUtilisateur'], null, ['POST' => 0], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
<<<<<<< Updated upstream
                .'|/Supprim(?'
                    .'|er/([^/]++)(*:29)'
                    .'|Util/([^/]++)(*:49)'
                .')'
                .'|/Modif(?'
                    .'|Ent/([^/]++)(*:78)'
                    .'|ent/([^/]++)(*:97)'
                    .'|Util/([^/]++)(*:117)'
                .')'
                .'|/Detail/([^/]++)(*:142)'
                .'|/updateutilisateur/([^/]++)(*:177)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:216)'
                    .'|wdt/([^/]++)(*:236)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:282)'
                            .'|router(*:296)'
                            .'|exception(?'
                                .'|(*:316)'
                                .'|\\.css(*:329)'
                            .')'
                        .')'
                        .'|(*:339)'
=======
                .'|/Ajout(?'
                    .'|Employe/([^/]++)(*:32)'
                    .'|Option/([^/]++)(*:54)'
                .')'
                .'|/ajouter(?'
                    .'|employe/([^/]++)(*:89)'
                    .'|Option/([^/]++)(*:111)'
                .')'
                .'|/Suppr(?'
                    .'|Employe/([^/]++)(*:145)'
                    .'|im(?'
                        .'|er/([^/]++)(*:169)'
                        .'|Util/([^/]++)(*:190)'
                    .')'
                .')'
                .'|/Detail(?'
                    .'|EntrepriseUtilisateur/([^/]++)(*:240)'
                    .'|/([^/]++)(*:257)'
                .')'
                .'|/Modif(?'
                    .'|Ent/([^/]++)(*:287)'
                    .'|ent/([^/]++)(*:307)'
                    .'|Util/([^/]++)(*:328)'
                .')'
                .'|/updateutilisateur/([^/]++)(*:364)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:403)'
                    .'|wdt/([^/]++)(*:423)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:469)'
                            .'|router(*:483)'
                            .'|exception(?'
                                .'|(*:503)'
                                .'|\\.css(*:516)'
                            .')'
                        .')'
                        .'|(*:526)'
>>>>>>> Stashed changes
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
<<<<<<< Updated upstream
        29 => [[['_route' => 'Supprimer', '_controller' => 'App\\Controller\\AjoutEntreprise::Supprimer'], ['id'], null, null, false, true, null]],
        49 => [[['_route' => 'SupprimUtil', '_controller' => 'App\\Controller\\UtilisateurController::Supprimer'], ['id'], null, null, false, true, null]],
        78 => [[['_route' => 'ModifEnt', '_controller' => 'App\\Controller\\AjoutEntreprise::ModifEnt'], ['id'], null, null, false, true, null]],
        97 => [[['_route' => 'post_modif', '_controller' => 'App\\Controller\\AjoutEntreprise::UpdateEntreprise'], ['id'], ['POST' => 0], null, false, true, null]],
        117 => [[['_route' => 'ModifUtil', '_controller' => 'App\\Controller\\UtilisateurController::ModifUtil'], ['id'], null, null, false, true, null]],
        142 => [[['_route' => 'Detail', '_controller' => 'App\\Controller\\LoginController::Detail'], ['id'], null, null, false, true, null]],
        177 => [[['_route' => 'update_utilisateur', '_controller' => 'App\\Controller\\UtilisateurController::UpdateUtilisateur'], ['id'], ['POST' => 0], null, false, true, null]],
        216 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        236 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        282 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        296 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        316 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        329 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        339 => [
=======
        32 => [[['_route' => 'PageAjoutEmploye', '_controller' => 'App\\Controller\\EmployeController::createEmployeForm'], ['id'], null, null, false, true, null]],
        54 => [[['_route' => 'AjoutOption', '_controller' => 'App\\Controller\\EntrepriseController::AjoutOption'], ['id'], null, null, false, true, null]],
        89 => [[['_route' => 'post_employe', '_controller' => 'App\\Controller\\EmployeController::PostEmploye'], ['id'], ['POST' => 0], null, false, true, null]],
        111 => [[['_route' => 'post_AjoutOption', '_controller' => 'App\\Controller\\EntrepriseController::PostOption'], ['id'], ['POST' => 0], null, false, true, null]],
        145 => [[['_route' => 'SupprEmploye', '_controller' => 'App\\Controller\\EmployeController::Supprimer'], ['id'], null, null, false, true, null]],
        169 => [[['_route' => 'Supprimer', '_controller' => 'App\\Controller\\EntrepriseController::Supprimer'], ['id'], null, null, false, true, null]],
        190 => [[['_route' => 'SupprimUtil', '_controller' => 'App\\Controller\\UtilisateurController::Supprimer'], ['id'], null, null, false, true, null]],
        240 => [[['_route' => 'DetailEntrepriseUtilisateur', '_controller' => 'App\\Controller\\EntrepriseController::DetailEntrepriseUtilisateur'], ['id'], null, null, false, true, null]],
        257 => [[['_route' => 'Detail', '_controller' => 'App\\Controller\\LoginController::Detail'], ['id'], null, null, false, true, null]],
        287 => [[['_route' => 'ModifEnt', '_controller' => 'App\\Controller\\EntrepriseController::ModifEnt'], ['id'], null, null, false, true, null]],
        307 => [[['_route' => 'post_modif', '_controller' => 'App\\Controller\\EntrepriseController::UpdateEntreprise'], ['id'], ['POST' => 0], null, false, true, null]],
        328 => [[['_route' => 'ModifUtil', '_controller' => 'App\\Controller\\UtilisateurController::ModifUtil'], ['id'], null, null, false, true, null]],
        364 => [[['_route' => 'update_utilisateur', '_controller' => 'App\\Controller\\UtilisateurController::UpdateUtilisateur'], ['id'], ['POST' => 0], null, false, true, null]],
        403 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        423 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        469 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        483 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        503 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        516 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        526 => [
>>>>>>> Stashed changes
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
