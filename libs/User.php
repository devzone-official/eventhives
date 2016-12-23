<?hh
class User
{
  public string $type;
  public string $namespace;
  public string $id;
  public bool $status;
  public function __construct()
  {
    $this->type = "customer";
    $this->namespace = "/";
    $this->id ="guest";
    $this->status = false;
  }
  public function setId(){

  }
  public function getId(string $type): ?string{
    return "";
  }
  public function getAction(string $action, User $user): Action{
    return Router::routeAction($action, $user);
  }
}
