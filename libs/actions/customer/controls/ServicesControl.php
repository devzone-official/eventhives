<?hh

class ServicesControl extends CustomerAction{
  public User $user;
  public function __construct(User $user){
    parent::__construct($user);
    $this->user = $user;
    $this->render();
  }
  protected function render(): void{
    print (<ServicesView data={$this->data} />)->toString();
  }
}
