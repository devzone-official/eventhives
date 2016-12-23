<?hh

class VenuesControl extends CustomerAction{
  public User $user;
  public function __construct(User $user){
    parent::__construct($user);
    $this->user = $user;
    $this->render();
  }
  protected function render(): void{
    print (<VenuesView data={$this->data} />)->toString();
  }
}
