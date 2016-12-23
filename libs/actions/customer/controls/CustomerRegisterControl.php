<?hh
class CustomerRegisterControl extends CustomerAction{
  public User $user;
  public function __construct(User $user){
    parent::__construct($user);
    $this->user = $user;
    $this->do();
  }
  public function do(): void{
    if(Server::getRequestMethod() == "POST"){
      /*$data = Post::getPostData();
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
      }*/
      Server::redirect("");
    }
    else{
      $this->render();
    }
  }
  protected function render(): void{
    print (<CustomerRegisterView data={$this->data} />)->toString();
  }
}
