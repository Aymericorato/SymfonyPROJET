<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
<<<<<<< Updated upstream
    'post_entreprise' => [[], ['_controller' => 'App\\Controller\\AjoutEntreprise::PostEntreprises'], [], [['text', '/ajouterentreprise']], [], [], []],
    'Supprimer' => [['id'], ['_controller' => 'App\\Controller\\AjoutEntreprise::Supprimer'], ['parametre' => '[0-9]'], [['variable', '/', '[^/]++', 'id', true], ['text', '/Supprimer']], [], [], []],
    'ModifEnt' => [['id'], ['_controller' => 'App\\Controller\\AjoutEntreprise::ModifEnt'], ['parametre' => '[0-9]'], [['variable', '/', '[^/]++', 'id', true], ['text', '/ModifEnt']], [], [], []],
    'post_modif' => [['id'], ['_controller' => 'App\\Controller\\AjoutEntreprise::UpdateEntreprise'], ['parametre' => '[0-9]'], [['variable', '/', '[^/]++', 'id', true], ['text', '/Modifent']], [], [], []],
    'app_employe_createemployeform' => [[], ['_controller' => 'App\\Controller\\EmployeController::createEmployeForm'], [], [['text', '/employe']], [], [], []],
    'post_employe' => [[], ['_controller' => 'App\\Controller\\EmployeController::PostEmploye'], [], [['text', '/ajouteremploye']], [], [], []],
    'app_login_login' => [[], ['_controller' => 'App\\Controller\\LoginController::login'], [], [['text', '/login']], [], [], []],
=======
    'PageAjoutEmploye' => [['id'], ['_controller' => 'App\\Controller\\EmployeController::createEmployeForm'], ['parametre' => '\\[0-9]'], [['variable', '/', '[^/]++', 'id', true], ['text', '/AjoutEmploye']], [], [], []],
    'post_employe' => [['id'], ['_controller' => 'App\\Controller\\EmployeController::PostEmploye'], ['parametre' => '\\[0-9]'], [['variable', '/', '[^/]++', 'id', true], ['text', '/ajouteremploye']], [], [], []],
    'SupprEmploye' => [['id'], ['_controller' => 'App\\Controller\\EmployeController::Supprimer'], ['parametre' => '[0-9]'], [['variable', '/', '[^/]++', 'id', true], ['text', '/SupprEmploye']], [], [], []],
    'indexadmin' => [[], ['_controller' => 'App\\Controller\\EntrepriseController::indexadmin'], [], [['text', '/index.html.twig']], [], [], []],
    'DetailEntrepriseUtilisateur' => [['id'], ['_controller' => 'App\\Controller\\EntrepriseController::DetailEntrepriseUtilisateur'], ['parametre' => '\\[0-9]'], [['variable', '/', '[^/]++', 'id', true], ['text', '/DetailEntrepriseUtilisateur']], [], [], []],
    'post_entreprise' => [[], ['_controller' => 'App\\Controller\\EntrepriseController::PostEntreprises'], [], [['text', '/ajouterentreprise']], [], [], []],
    'Supprimer' => [['id'], ['_controller' => 'App\\Controller\\EntrepriseController::Supprimer'], ['parametre' => '[0-9]'], [['variable', '/', '[^/]++', 'id', true], ['text', '/Supprimer']], [], [], []],
    'ModifEnt' => [['id'], ['_controller' => 'App\\Controller\\EntrepriseController::ModifEnt'], ['parametre' => '[0-9]'], [['variable', '/', '[^/]++', 'id', true], ['text', '/ModifEnt']], [], [], []],
    'post_modif' => [['id'], ['_controller' => 'App\\Controller\\EntrepriseController::UpdateEntreprise'], ['parametre' => '[0-9]'], [['variable', '/', '[^/]++', 'id', true], ['text', '/Modifent']], [], [], []],
    'Recherche' => [[], ['_controller' => 'App\\Controller\\EntrepriseController::Recherche'], [], [['text', '/Recherche']], [], [], []],
    'AjoutOption' => [['id'], ['_controller' => 'App\\Controller\\EntrepriseController::AjoutOption'], ['parametre' => '[0-9]'], [['variable', '/', '[^/]++', 'id', true], ['text', '/AjoutOption']], [], [], []],
    'post_AjoutOption' => [['id'], ['_controller' => 'App\\Controller\\EntrepriseController::PostOption'], ['parametre' => '[0-9]'], [['variable', '/', '[^/]++', 'id', true], ['text', '/ajouterOption']], [], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\LoginController::login'], [], [['text', '/login']], [], [], []],
>>>>>>> Stashed changes
    'AjoutEntreprise' => [[], ['_controller' => 'App\\Controller\\LoginController::createEntrepriseForm'], [], [['text', '/AjoutEntreprise']], [], [], []],
    'indexadmin' => [[], ['_controller' => 'App\\Controller\\LoginController::indexadmin'], [], [['text', '/index.html.twig']], [], [], []],
    'app_login_intermediaire' => [[], ['_controller' => 'App\\Controller\\LoginController::intermediaire'], [], [['text', '/intermediaire']], [], [], []],
    'Detail' => [['id'], ['_controller' => 'App\\Controller\\LoginController::Detail'], ['parametre' => '\\[0-9]'], [['variable', '/', '[^/]++', 'id', true], ['text', '/Detail']], [], [], []],
    'Index' => [[], ['_controller' => 'App\\Controller\\LoginController::Index'], [], [['text', '/Index']], [], [], []],
    'ListeUtilisateur' => [[], ['_controller' => 'App\\Controller\\UtilisateurController::ListeUtilisateur'], [], [['text', '/ListeUtilisateur']], [], [], []],
    'Utilisateur' => [[], ['_controller' => 'App\\Controller\\UtilisateurController::createUtilisateurForm'], [], [['text', '/Utilisateur']], [], [], []],
    'post_utilisateur' => [[], ['_controller' => 'App\\Controller\\UtilisateurController::PostUtilisateur'], [], [['text', '/ajouterutilisateur']], [], [], []],
    'ModifUtil' => [['id'], ['_controller' => 'App\\Controller\\UtilisateurController::ModifUtil'], ['parametre' => '\\[0-9]'], [['variable', '/', '[^/]++', 'id', true], ['text', '/ModifUtil']], [], [], []],
    'update_utilisateur' => [['id'], ['_controller' => 'App\\Controller\\UtilisateurController::UpdateUtilisateur'], ['parametre' => '\\[0-9]'], [['variable', '/', '[^/]++', 'id', true], ['text', '/updateutilisateur']], [], [], []],
    'SupprimUtil' => [['id'], ['_controller' => 'App\\Controller\\UtilisateurController::Supprimer'], ['parametre' => '[0-9]'], [['variable', '/', '[^/]++', 'id', true], ['text', '/SupprimUtil']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
];