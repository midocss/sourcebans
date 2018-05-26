<?php

// Email support
define('EMAIL', 'admin@example.ru');

// Steam Web API https://steamcommunity.com/dev/apikey 
define('STEAM_WEB_API', '046000613AE6434F9184029D48792BB1');
return array(
    /*
	 * Версия сборки
	 * Build version
	*/
    'LR_VERS' => '1.1 fork',
	
	/* 
	 * Выбор языка
	 * RU -> Русский
	 * EN -> English
	*/
    'lang' => 'ru',
    
    /*
	 * DEBUG
	 * TRUE -> Включить
	 * FALSE -> Выключить
	*/
    'DEBUG' => 'FALSE',

    /*
	 * Основной сайт проекта
	 * Main site project
	*/
    'MAIN_SITE' => 'http://sitename.ru/',
    
    /*
	 * Главная страница сайта статистики
	 * Statistics page site
	*/
    'MAIN_PAGE' => 'http://lr.sitename.ru/',
    
    /* 
	 * Название проекта
	 * Name projec
	*/
    'NAME_PROJ' => 'NAME',
    
    /* 
	 * Игроков на странице 
	 * Players on page
	*/
    'RECORD_ON_PAGE' => 50,
    
    /*
	* 18 - Rank of matchmaking
	* 19 - Rank of Wingman
	*/
    'LVL_18_OR_19' => '19',

	/*
	 * Картинка со статистикой
	 * Image with statistics
	 * 
	 * TRUE - Включено
	 * FALSE - Выключено
	*/
    'SIGNATURE' => TRUE,

    /*
	 * Кэширование
	 * Caching
	 *
	 * TRUE - Включено
	 * FALSE - Выключено
	*/	
    'CACHE' => TRUE,
    
	/*
	 * Время жизни кэша
	 * Cache lifetime
	*/
    'CACHETIME' => 600,

	/*
	 * Отображение статистики
	 * Displaying statistics
	 *
	 * TABLE - таблица
	 * SHOWCASE - новый стиль, аналог витрины STEA
	 *
	 * TABLE - table (old style)
	 * SHOWCASE - new style, analogue of the showcase STEAM
	*/
    'STATS_SHOW' => 'SHOWCASE',

    /* 
	 * Статистика STEAM / Stats STEAM
	 * TRUE - Включена 
	 * FALSE - Выключена
	*/
    'STEAMSTATUS' => TRUE,

    /*
	 * НЕ ТРОГАТЬ!
	 * Not edit!
	*/
    'STEAM_WEB_API' => constant("STEAM_WEB_API"),
    
    /*
	 * НЕ ТРОГАТЬ!
	 * Not edit!
	*/
    'EMAIL' =>  constant("EMAIL"),
    
    /*
	 * Сервера
	 * Servers
	*/
    'server' => array(
		
        array(
            'name' => 'SYR|SERVERS',
            'host' => 'localhost',
            'dbName' => 'lvlrank',
            'login' => 'root',
            'pass' => 'Scpc1990',
			// стандартный порт 3306
            'port' => '3306'
			
        ),
		
        // если 2 сервера
		/*
        array(
            'name' => 'name',
            'host' => 'localhost',
            'dbName' => '***',
            'login' => '***',
            'pass' => '***',
			// стандартный порт 3306
            'port' => '3306'
        ),
		*/
        // если 3 сервера
        /*
        array(
            'name' => 'name',
            'host' => 'localhost',
            'dbName' => '***',
            'login' => '***',
            'pass' => '***',
			// стандартный порт 3306
            'port' => '3306'
        ),
        */
    )
)

?>