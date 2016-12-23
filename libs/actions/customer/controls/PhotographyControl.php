<?hh

class PhotographyControl extends CustomerAction{
  public User $user;
  public function __construct(User $user){
    parent::__construct($user);
    $this->user = $user;
    $this->render();
  }
  protected function render(): void{
    print (<PhotographyView data={$this->data}/>)->toString();
  }
}
