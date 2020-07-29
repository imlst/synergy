<?
    error_reporting(E_ALL);

/**
 * Автозагрузчик композера
 */
require __DIR__ . '/vendor/autoload.php';

/**
 * Берем текущий URI чтобы узнать какой темплейт подключить
 */
$url = trim(strtok($_SERVER['REQUEST_URI'], '?'), '/');

/**
 * Шаблон который должен быть по умолчанию
 */
const FALLBACK_VIEW = 'layout';

if (empty($url)) {
    $url = FALLBACK_VIEW;
}

/**
 * Если URI невалидный просто выкидываем эксэпшн
 */
if (!is_string($url)) {
    throw new RuntimeException('Invalid page url');
}

/**
 * Директория в которой хранятся шаблоны страниц
 */
const PAGE_PATHS = 'pages';

/**
 * Список директорий в которых хранятся все шаблоны
 */
const VIEW_PATHS = ['blade'];

/**
 * Разделитель директорий
 */
const VIEW_PATH_SEPARATOR = '.';

/**
 * Директория в котрой хранятся закэшированные шаблоны
 */
const CACHE_PATH = 'cache';

if (!file_exists(CACHE_PATH)) {
    mkdir(CACHE_PATH, 0777, true);
}

/**
 * Создаём инстанс Блэйда
 */
try {
    $blade = new Jenssegers\Blade\Blade(VIEW_PATHS, 'cache');
} catch (Exception $exception) {
    die($exception->getMessage());
}

/**
 * Говорим Блейду что нужно отрендерить шаблон страницы
 */
$template = implode(VIEW_PATH_SEPARATOR, array_merge([PAGE_PATHS], explode('/', $url)));

try {
    echo $blade->render($template, [
        // Какие-то общие данные
        'base_title' => 'Synergy Guide',
    ]);
} catch (Exception $exception) {
    die($exception->getMessage());
}
