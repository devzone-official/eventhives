<?hh
class CustomerLogoutControl extends CustomerAction{
  public User $user;
  public function __construct(User $user){
    parent::__construct($user);
    $this->user = $user;
    if ($this->session->id == "guest") {
      Server::redirect("login");
    }
    else {
      $this->session->logout();
      $this->render();
    }
  }
  protected function render(): void{
    print (<CustomerLogoutView />)->toString();
  }
}
