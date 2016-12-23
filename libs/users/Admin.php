<?hh

class Admin extends User
{
  public ?AdminAction $action;
  public function __construct()
  {
    parent::__construct();
    $this->type = "Admin";
    $this->namespace = "/admin/";
  }
}
