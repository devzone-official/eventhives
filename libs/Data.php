<?hh

class Data{
  public User $user;
  public function __construct(User $user){
    $this->user = $user;
  }
  public function status(): bool{
    return $this->user->status;
  }
  public function getId(): ?string{
    return $this->user->id;
  }
  public function getUserName(): string{
    $db_name = $this->user->type;
    $user_id = $this->user->id;
    $db = new Database();
    $query = "SELECT name FROM $db_name WHERE id='$user_id'";
    $result = \HH\Asio\join($db->makeQuery($query));
    if($result->numRows() == 0)
      return "Guest";
    else {
      return $result->mapRows()[0]['name'];
    }
  }

}
