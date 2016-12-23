<?hh
class Server{
  public static function getRequestMethod(): string{
    return $_SERVER['REQUEST_METHOD'];
  }
  public static function redirect(string $url): void{
    header('Location: http://eventhives.com/'.$url);
  }
}

class Core{
  public static function strtolower($string): string{
    return strtolower($string);
  }
}
