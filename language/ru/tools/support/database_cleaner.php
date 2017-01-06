<?php
/**
*
* @package Support Toolkit - Database Cleaner Russian language Sheer
* @version $Id$
* @copyright (c) 2009 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_EXTENSION_GROUPS'			=> 'Группы расширений файлов',
	'ACP_MODULES_SETTINGS'			=> 'Поиск дополнительных модулей',
	'BOARD_DISABLE_REASON'			=> 'Конференция в настоящее время отключена в связи с профилактикой Базы Данных. Пожалуйста, попробуйте зайти позже!',
	'BOARD_DISABLE_SUCCESS'			=> 'Конференция временно отключена!',

	'COLUMNS'						=> 'Поля таблиц БД',
	'CONFIG_SETTINGS'				=> 'Установки конфигурации',
	'CONFIG_UPDATE_SUCCESS'			=> 'Установки конфигурации успешно обновлены!',
	'CONTINUE'						=> 'Продолжить',

	'DATABASE_CLEANER'				=> 'Проверка изменений в Базе Данных',
	'DATABASE_CLEANER_BREAK'		=> 'Инструмент Проверки Базы Данных принудительно прервал работу!<br /><br />Кэш был очищен и доступ к конференции восстановлен.',
	'DATABASE_CLEANER_EXTRA'		=> 'Обнаружены дополнительные элементы, добавленные расширениями или при модификации. <strong>Все отмеченные элементы будут удалены. Внимание! Действие необратимо! Если вы уверены в необходимости их оставить - снимите метки с тех, которые необходимо оставить</strong>. Если вы не уверены в своих действиях, нажмите кнопку <strong>Пропустить</strong>.',
	'DATABASE_CLEANER_MISSING'		=> 'Любые элементы, расположенные на красном фоне должны быть добавлены. Они обязательны в стандартной конфигурации конференции и их отсутствие невозможно, поэтому их необходимо восстановить. <strong>Если оставить или установить отметки, то выбранные элементы будут добавлены</strong>.',
	'DATABASE_CLEANER_SUCCESS'		=> 'Инструмент Проверки Базы Данных успешно завершил работу!<br /><br />Пожалуйста, не забудьте сделать новую резервную копию базы данных.',
	'DATABASE_CLEANER_WARNING'		=> 'Этот инструмент поставляется БЕЗ ГАРАНТИЙ! Пользователь инструмента должен быть уверен, что имеет резервную копию всей базы данных для возможности восстановления в случае сбоя!<br /><br />Перед продолжением убедитесь в наличии резервной копии базы данных! Внимание! Дополнительные таблицы и поля в Базе Данных от установленных модов или расширений при неаккуратном и невнимательном использовании данного инструмента могут быть уничтожены!',
	'DATABASE_CLEANER_WELCOME'		=> 'Добро пожаловать в инструмент Проверки Базы Данных!<br /><br />Этот инструмент разработан для проверки дополнительных полей, записей и таблиц, не включённых в стандартную установку phpBB3, а так же для добавления или восстановления повреждённых элементов базы данных при необходимости.<br /><br />Когда будете готовы, нажмите кнопку Продолжить для старта инструмента Проверки Базы Данных (учтите, что конференция будет недоступна до окончания работы инструмента).',
	'DATABASE_COLUMNS_SUCCESS'		=> 'Поля базы данных успешно обновлены!',
	'DATABASE_INDEXES_SUCCESS'		=> 'Индексы таблиц успешно обновлены!',
	'DATABASE_TABLES'				=> 'Таблицы базы данных',
	'DATABASE_TABLES_SUCCESS'		=> 'Таблицы базы данных успешно обновлены!',
	'DATABASE_ROLE_DATA_SUCCESS'	=> 'Системные роли phpBB были успешно восстановлены!',
	'DATABASE_ROLE_DATA_SKIP'		=> 'Переустановка системных ролей пропущена',
	'DATABASE_ROLES_SUCCESS'		=> 'Роли были успешно обновлены!',
	'DATAFILE_NOT_FOUND'			=> 'Инструмент не может найти требуемый файл данных для текущей версии phpBB! (файл должен находиться в папке /stk/includes/database_cleaner/data)',

	'EMPTY_PREFIX'					=> 'Нет префикса таблиц базы данных',
	'EMPTY_PREFIX_CONFIRM'			=> 'Инструмент Проверки Базы Данных внесет изменения в таблицы Базы Данных, однако использование пустого префикса может повредить таблицы, не относящиеся к phpBB. Продолжить?',
	'EMPTY_PREFIX_EXPLAIN'			=> 'Инструмент Проверки Базы Данных определил, что вы не установили префикс для таблиц базы данных phpBB. В связи с этим инструмент будет проверять <b>все</b> таблицы базы данных. Будьте особенно осторожны в процессе проверки, и убедитесь, что исключили из выбора любые таблицы, не относящиеся к phpBB. Несоблюдение этого требования может привести к повреждению таблиц базы данных, которые не являются частью phpBB. Если вы не уверены в правильности своих действий, обратитесь за помощью в <a href="http://www.phpbb.com/community/viewforum.php?f=46"> Поддержку phpBB Форумы </a>.',
	'ERROR'							=> 'Ошибка',
	'EXTRA'							=> 'Дополнительно',
	'EXTENSION_FILE_GROUPS'			=> 'Расширения файлов',
	'EXTENSION_GROUPS_SETTINGS'		=> 'Управление расширениями файлов',
	'EXTENSION_GROUPS_SUCCESS'		=> 'Настройки группы расширений файлов были успешно восстановлены до уровня "По умолчанию"',
	'EXTENSIONS_SUCCESS'			=> 'Настройки расширений файлов успешно восстановлены',

	'GO_TO_ACP'						=> ' --&raquo; в управление модулем ',

	'FINAL_STEP'					=> 'Это завершающий шаг.<br /><br />Сейчас будет очищен кеш и возобновлен доступ к конференции',

	'INSTRUCTIONS'					=> 'Инструкции',
	'INTRODUCTION'					=> 'Начать сначала',
	'INDEXES'						=> 'Индексы таблиц БД',

	'MISSING'						=> 'Поврежден',
	'MODULE_UPDATE_SUCCESS'			=> 'Модули успешно обновлены!',
	'MODULE_ADD'					=> 'Добавление модуля',
	'MODULE_ALREADY_EXIST'			=> 'Модуль уже существует',

	'NEXT_STEP'						=> 'Следующий шаг',
	'NO_BOT_GROUP'					=> 'Боты не переустановлены, отсутствует группа Ботов.',
 	'NO_PARENT'						=> 'Модуль-родитель для этого модуля не существует.<br />Отказ',

	'PERMISSION_SETTINGS'			=> 'Опции прав доступа',
	'PERMISSION_UPDATE_SUCCESS'		=> 'Установки прав доступа успешно обновлены!',
	'PHPBB_VERSION_NOT_SUPPORTED'	=> 'Ваша версия phpBB3 не поддерживается (или повреждены некоторые файлы Инструментария поддержки).<br />Поддерживаются только версии phpBB 3.1.2 и выше, однако возможно некоторое время назад была выпущена более новая версия phpBB3 и инструментарий должен быть обновлен для корректной работы с новейшей версией.',

	'QUIT'							=> 'Прекратить',

	'RESET_ACP_MODULES_SKIP'		=> 'Проверка дополнительных модулей пропущена',
	'RESET_ACP_MODULE_SUCCESS'		=> 'Проверка дополнительных модулей выполнена',
	'RESET_BOTS'					=> 'Переустановка поисковых ботов',
	'RESET_BOTS_EXPLAIN'			=> 'Вы хотите заменить список ботов списком по умолчанию? Все существующие боты будут удалены и установлены боты из списка ботов стандартной установки.',
	'RESET_BOTS_SKIP'				=> 'Переустановка ботов пропущена',
	'RESET_BOT_SUCCESS'				=> 'Боты были переустановлены успешно!',
	'RESET_MODULES'					=> 'Переустановка модулей',
	'RESET_MODULES_EXPLAIN'			=> 'Вы хотите переустановить модули по умолчанию для phpBB3? Все существующие модули будут удалены и установлены модули по умолчанию из стандартной установки.',
	'RESET_MODULES_SKIP'			=> 'Переустановка модуля пропущена',
	'RESET_MODULE_SUCCESS'			=> 'Модули были переустановлены успешно!',
	'RESET_REPORT_REASONS'			=> 'Сброс списка причин жалоб и уведомлений',
	'RESET_REPORT_REASONS_EXPLAIN'	=> 'Вы желаете удалить все нестандартные причины, используемые в жалобах и уведомлениях об отклонении сообщений пользователей? Это действие удалит все добавленные причины жалоб!',
	'RESET_REPORT_REASONS_SKIP'		=> 'Очистка причин  жалоб и уведомлений пропущена',
	'RESET_REPORT_REASONS_SUCCESS'	=> 'Все добавленные причины жалоб и уведомлений были удалены!',
	'RESET_ROLE_DATA'				=> 'Сброс изменений в настройках системных ролей',
	'RESET_ROLE_DATA_EXPLAIN'		=> 'Эта опция вернет настройки ролей phpBB форума в первоначальное состояние. Рекомендуется, если вы делали изменения в стандартных ролях прав на форуме.',
	'ROLE_SETTINGS'					=> 'Настройки ролей',
	'ROWS'							=> 'Записи',

	'SECTION_NOT_CHANGED_TITLE'		=> array(
		'tables'					=> 'Нет изменений таблиц',
		'indexes'					=> 'Нет изменений в индексах таблиц БД',
		'columns'					=> 'Нет изменений в полях таблиц',
		'config'					=> 'Нет изменений конфигурации',
		'extension_groups'			=> 'Нет изменений групп расширений файлов',
		'extensions'				=> 'Нет изменений расширений файлов',
		'permissions'				=> 'Нет изменений прав доступа',
		'groups'					=> 'Нет изменений групп',
		'roles'						=> 'Нет изменений ролей',
		'final_step'				=> 'Заключительный этап',
		'acp_modules'				=> 'Поиск дополнительных или потерянных модулей',
	),
	'SECTION_NOT_CHANGED_EXPLAIN'	=> array(
		'tables'					=> 'Дополнительных или отсутствующих таблиц в базе данных не обнаружено',
		'indexes'					=> 'Дополнительных или отсутствующих индексов в таблицах БД не обнаружено',
		'columns'					=> 'Поля таблиц в базе данных не были изменены',
		'config'					=> 'Таблица конфигурации не имеет каких-либо новых или отсутствующих значений',
		'extension_groups'			=> 'Группы расширений файлов не имеют каких-либо новых или отсутствующих значений',
		'extensions'				=> 'Расширения файлов не имеют каких-либо новых или отсутствующих значений',
		'permissions'				=> 'Не обнаружено каких-либо изменений в правах доступа',
		'groups'					=> 'Не обнаружено никаких изменений в предустановленных группах phpBB',
		'roles'						=> 'Ни одна из ролей не была добавлена или удалена',
		'final_step'				=> 'Это завершающий этап. Сейчас будет очищен кеш и возобновлен доступ к конференции.',
		'acp_modules'				=> 'Не найдено никаких дополнительных или потерянных модулей',
	),
	'SKIP_AND_GO'					=> 'Пропустить и перейти',
	'SKIP_TO'						=> 'Пропустить',
	'SKIP_EXPLAIN'					=> 'Вы можете пропустить выполнение действия на этом шаге и перейти к шагу, выбранному из списка ниже:',
	'SUCCESS'						=> 'Успешно',
	'SYSTEM_GROUPS'					=> 'Проверка предустановленных групп',
	'SYSTEM_GROUP_UPDATE_SUCCESS'	=> 'Предустановленные группы переустановлены успешно',

	'TYPE'							=> 'Тип',

	'UNSTABLE_DEBUG_ONLY'			=> 'Очистка базы данных на нестабильных версиях phpBB (dev, a, b, RC), может выполняться только когда включен режим "DEBUG" в файле конфигурации.',
	'UNDEFINED'						=> 'не определено',

	'ARCHIVES'				=> 'Архивы',
	'DOCUMENTS'				=> 'Документы',
	'DOWNLOADABLE_FILES'	=> 'Скачиваемые файлы',
	'FLASH_FILES'			=> 'Файлы Flash',
	'IMAGES'				=> 'Изображения',
	'PLAIN_TEXT'			=> 'Текстовые файлы',
	'QUICKTIME_MEDIA'		=> 'Файлы Quicktime',
	'REAL_MEDIA'			=> 'Файлы RealMedia',
	'WINDOWS_MEDIA'			=> 'Файлы Windows Media',
));