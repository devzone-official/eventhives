<?hh
class AddVendorControl extends AdminAction{
  private User $user;
  public function __construct(User $user){
    parent::__construct();
    $this->user = $user;
    $this->render();
  }
  public function render(): void{
    if(Server::getRequestMethod() == "POST"){
      $data = Post::getPostData();
      $pos = $data['data'];
      $jsonData = json_encode($data);
      $name = $jsonData->name;
      $services = $jsonData->services;
      $db = new Database();
      $query = "INSERT INTO vendor(name,caterer_id) VALUES ('$name','$services')";
      $result = \HH\Asio\join($db->makeQuery($query));
    }
    else{
      echo <AddVendorView />;
    }
  }
}
