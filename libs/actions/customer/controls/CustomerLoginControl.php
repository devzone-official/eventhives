<?hh
class CustomerLoginControl extends CustomerAction{
  public User $user;
  public function __construct(User $user){
    parent::__construct($user);
    $this->user = $user;
    $this->do();
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
      if($result->numRows() == 0){
      }
      else{
        $this->user->id = $email;
        $this->session->login();
        Server::redirect('');
      }
    }
    else{
      $this->render();
    }
  }
  protected function render(): void{
    print (<CustomerLoginView />)->toString();
  }
}
