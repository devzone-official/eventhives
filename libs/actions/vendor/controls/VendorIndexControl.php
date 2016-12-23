<?hh

class VendorIndexControl extends VendorAction{
  private User $user;
  public function __construct(User $user){
    parent::__construct();
    $this->user = $user;
    $this->render();
  }
  protected function render(): void{
    if(is_null(SessionServer::get('id'))){
      Server::redirect('vendor/login');
    }
    else{
      echo <VendorIndexView />;
    }
  }
}
