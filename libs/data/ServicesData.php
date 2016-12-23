<?hh
class ServicesData extends Data{
  public User $user;
  public function __construct(User $user){
    parent::__construct($user);
    $this->user = $user;
  }
}
