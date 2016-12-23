<?hh
class CartControl extends CustomerAction{
  public User $user;
  public function __construct(User $user){
    parent::__construct($user);
    $this->user = $user;
    $product = Get::data("product");
    if ($product == "null") {
      $this->render();
    }
    else {
      
    }
  }
  protected function render(): void{
    print (<CartView data={$this->data} />)->toString();
  }
}
