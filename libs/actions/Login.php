<?hh
class Login extends Action{
  public User $user;
  public function __construct(){
    parent::__construct();
    $this->user = new Admin();
  }
  public function do(): void{
    if(Server::getRequestMethod() == "POST"){
      $data = Post::getPostData();
      $db = new Database();
      $user = Core::strtolower($this->user->type);
      $email = $data['email'];
      $password = $data['password'];
      $query = "SELECT * FROM $user WHERE id = '$email' AND password = '$password'";
      $result = \HH\Asio\join($db->makeQuery($query));
      if($result->numRows() === 0){
      }
      else{
        $res = $result->mapRows()[0];
        SessionServer::set('id', $res['id']);
      }
      Server::redirect($user);
    }
    else{
      $this->render();
    }
  }
  protected function render(): void{
    $url = $this->user->namespace;
    $type = $this->user->type;
    if(true){
      echo <loginUI user={$type} url={$url}/>;
    }
    else{
      echo "valid session";
    }
  }
}
