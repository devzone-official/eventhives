<?hh
class Get{
  public static function data(string $key): string{
    if (isset($_GET[$key])) {
      return $_GET[$key];
    }
    else {
      return "null";
    }
  }
}
