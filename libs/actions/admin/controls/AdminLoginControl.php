<?hh
class AdminLoginControl extends Login{
  public User $user;
  public function __construct(User $user){
    parent::__construct();
    $this->user = $user;
    $this->do();
  }
}
