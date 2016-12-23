<?hh

class CustomerIndexControl extends CustomerAction{
  public function __construct(User $user){
    parent::__construct($user);
    $this->render();
  }
  protected function render(): void{
    print (<CustomerIndexView data={$this->data}/>)->toString();
  }
}
