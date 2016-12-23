<?hh

class Customer extends User
{

  public function __construct()
  {
    parent::__construct();
    $this->type = "customer";
    $this->namespace = "/";
  }
}
