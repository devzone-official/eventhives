<?hh
class Application{
  public User $user;
  public Action $action;
  public function __construct(){
    $user = Get::data('user');
    $action = Get::data('action');
    SessionServer::start();
    $this->user = Router::routeUser($user);
    $this->action = $this->user->getAction($action, $this->user);
  }
}
