<?hh

class Post{
  public static function getPostData(): array<string,string>{
    return $_POST;
  }
}
