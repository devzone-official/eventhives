<?hh
class SessionServer{
  public static function start(): void{
    session_start();
  }
  public static function check(string $key): bool{
    if(isset($_SESSION[$key]))
    return true;
    else
    return false;
  }
  public static function set(string $key, ?string $value): void{
    $_SESSION[$key] = $value;
  }
  public static function get(string $key): string{
    if(SessionServer::check($key)){
      return $_SESSION[$key];
    }
    else {
      return "guest";
    }
  }
  public static function delete(string $key): void{
    $_SESSION[$key] = null;
  }
  public static function destroy(): void{
    session_destroy();
  }
}
