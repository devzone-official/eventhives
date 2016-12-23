<?hh

class AdminIndexControl extends AdminAction{
  private User $user;
  public function __construct(User $user){
    parent::__construct();
    $this->user = $user;
    $this->render();
  }
  protected function render(): void{
    if(is_null(SessionServer::get('id'))){
      Server::redirect('admin/login');
    }
    else{
      echo <AdminIndexView />;
    }
  }
}
