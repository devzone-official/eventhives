<?hh

class CustomerAction extends Action{
  public User $user;
  public Session $session;
  public Data $data;
  public function __construct(User $user){
    parent::__construct();
    $this->user = $user;
    $this->session = new Session($user);
    $this->user->id = $this->session->id;
    $this->data = new Data($user);
  }
}
