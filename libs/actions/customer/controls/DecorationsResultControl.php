<?hh
class DecorationsResultControl extends CustomerAction{
  public User $user;
  public DecorationsData $decorationsData;
  public function __construct(User $user){
    parent::__construct($user);
    $this->user = $user;
    $this->decorationsData = new DecorationsData($user);
    if(Get::data("page") == "null"){
      $this->decorationsData->page = 1;
    }
    else {
      $this->decorationsData->page = (int) Get::data("page");
    }
    $this->render();
  }
  protected function render(): void{
    print (<DecorationsResultView data={$this->decorationsData} />)->toString();
  }
}
