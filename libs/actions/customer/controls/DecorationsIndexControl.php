<?hh

class DecorationsIndexControl extends CustomerAction{
  public User $user;
  public function __construct(User $user){
    parent::__construct($user);
    $this->user = $user;
    if (Get::data("unit") == "null") {
      if (Get::data("result") == "true") {
        Router::routeAction("result/decorations", $user);
      }
      else {
        $this->render();
      }
    }
    else {
      Router::routeAction("unit/decorations", $user);
    }
  }
  protected function render(): void{
    print (<DecorationsIndexView data={$this->data} />)->toString();
  }
}
