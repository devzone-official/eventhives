<?hh
class Router{
  public static function routeUser(string $user): User{
    $usermap = Map{
      'admin' => 'Admin',
      'vendor' => 'Vendor',
      'customer' => 'Customer',
    };
      return new $usermap[$user]();
  }
  public static function routeAction(string $action, User $user): Action{
    if($user->type == 'Admin'){
      $actionmap = Map{
        'login' => 'AdminLoginControl',
        'add-vendor' => 'AddVendorControl',
        '' => 'AdminIndexControl',
      };
      if($actionmap->containsKey($action)){
        return new $actionmap[$action]($user);
      }
      else {
        return new Error();
      }
    }
    elseif($user->type == 'Vendor'){
      $actionmap = Map{
        'login' => 'VendorLoginControl',
        '' => 'VendorIndexControl',
      };
      if($actionmap->containsKey($action)){
        return new $actionmap[$action]($user);
      }
      else {
        return new Error();
      }
    }
    elseif ($user->type == 'customer'){
      $actionmap = Map{
        'login' => 'CustomerLoginControl',
        'logout' => 'CustomerLogoutControl',
        'register' => 'CustomerRegisterControl',
        'eventcart' => 'CartControl',
        'services' => 'ServicesIndexControl',
        'services/venues' => 'VenuesIndexControl',
        'services/caterers' => 'CaterersIndexControl',
        'services/decorations' => 'DecorationsIndexControl',
        'result/decorations' => 'DecorationsResultControl',
        'services/photography' => 'PhotographyIndexControl',
        'unit/venues' => 'VenuesControl',
        'unit/photography' => 'PhotographyControl',
        'unit/caterers' => 'CaterersControl',
        'unit/decorations' => 'DecorationsControl',
        '' => 'CustomerIndexControl',
      };
      if($actionmap->containsKey($action)){
        return new $actionmap[$action]($user);
      }
      else {
        return new Error();
      }
    }
    else{
      return new Error();
    }
  }
  public static function routeAdminAction(string $action): Action{
    $actionmap = Map{
      'login' => 'Login',
      '' => 'AdminIndexControl',
    };
    if($actionmap->containsKey($action)){
      return new $actionmap[$action]();
    }
    else {
      return new Error();
    }
  }
  public static function routeVendorAction(string $action, User $user): Action{
    $actionmap = Map{
      'login' => 'Login',
      '' => 'VendorIndexControl',
    };
    if($actionmap->containsKey($action)){
      return new $actionmap[$action]($user);
    }
    else {
      return new Error();
    }
  }
}
