<?hh

class PhotographyIndexControl extends CustomerAction{
  public User $user;
  public function __construct(User $user){
    parent::__construct($user);
    $this->user = $user;
    if (Get::data("unit") == "null") {
      $this->render();
    }
    else {
      Router::routeAction("unit/photography", $user);
    }
  }
  protected function render(): void{
    print (<PhotographyIndexView data={$this->data}/>)->toString();
  }
}
