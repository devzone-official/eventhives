<?hh

class Vendor extends User
{

  public function __construct()
  {
    parent::__construct();
    $this->type = "Vendor";
    $this->namespace = "/vendor/";
  }
}
