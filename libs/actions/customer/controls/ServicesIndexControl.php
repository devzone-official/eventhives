<?hh

class ServicesIndexControl extends CustomerAction{
  public User $user;
  public function __construct(User $user){
    parent::__construct($user);
    $this->user = $user;
    if (Get::data("type") == "null") {
      $this->render();
    }
    elseif (Get::data("type") == 'venues') {
      Router::routeAction("services/venues", $user);
    }
    elseif (Get::data("type") == 'caterers') {
      Router::routeAction("services/caterers", $user);
    }
    elseif (Get::data("type") == 'decorations') {
      Router::routeAction("services/decorations", $user);
    }
    elseif (Get::data("type") == 'photography') {
      Router::routeAction("services/photography", $user);
    }
    else {
      Router::routeAction("error", $user);
    }
  }
  protected function render(): void{
    print (<ServicesIndexView data={$this->data} />)->toString();
  }
}
