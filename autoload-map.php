<?hh
function autoload($class): bool {
  $classmap = Map {
    'Application' => '/libs/Application.php',
    'Session' => '/libs/Session.php',
    'Data' => '/libs/Data.php',
    'ServicesData' => '/libs/data/ServicesData.php',
    'DecorationsData' => '/libs/data/DecorationsData.php',
    'Database' => '/config/Database.php',
    'Router' => '/libs/core/Router.php',
    'User' => '/libs/User.php',
    'Admin' => '/libs/users/Admin.php',
    'AdminAction' => '/libs/actions/admin/AdminAction.php',
    'AdminIndexControl' => '/libs/actions/admin/controls/AdminIndexControl.php',
    'xhp_AdminIndexView' => '/libs/actions/admin/views/AdminIndexView.php',
    'AdminLoginControl' => '/libs/actions/admin/controls/AdminLoginControl.php',
    'AddVendorControl' => '/libs/actions/admin/controls/AddVendorControl.php',
    'xhp_AddVendorView' => '/libs/actions/admin/views/AddVendorView.php',
    'Vendor' => '/libs/users/Vendor.php',
    'VendorAction' => '/libs/actions/vendor/VendorAction.php',
    'VendorIndexControl' => '/libs/actions/vendor/controls/VendorIndexControl.php',
    'VendorLoginControl' => '/libs/actions/vendor/controls/VendorLoginControl.php',
    'xhp_VendorIndexView' => '/libs/actions/vendor/views/VendorIndexView.php',
    'Customer' => '/libs/users/Customer.php',
    'CustomerAction' => '/libs/actions/customer/CustomerAction.php',
    'CustomerIndexControl' => '/libs/actions/customer/controls/CustomerIndexControl.php',
    'xhp_CustomerIndexView' => '/libs/actions/customer/views/CustomerIndexView.php',
    'CustomerLoginControl' => '/libs/actions/customer/controls/CustomerLoginControl.php',
    'xhp_CustomerLoginView' => '/libs/actions/customer/views/CustomerLoginView.php',
    'CustomerLogoutControl' => '/libs/actions/customer/controls/CustomerLogoutControl.php',
    'xhp_CustomerLogoutView' => '/libs/actions/customer/views/CustomerLogoutView.php',
    'CustomerRegisterControl' => '/libs/actions/customer/controls/CustomerRegisterControl.php',
    'xhp_CustomerRegisterView' => '/libs/actions/customer/views/CustomerRegisterView.php',
    'CartControl' => '/libs/actions/customer/controls/CartControl.php',
    'xhp_CartView' => '/libs/actions/customer/views/CartView.php',
    'ServicesIndexControl' => '/libs/actions/customer/controls/ServicesIndexControl.php',
    'xhp_ServicesIndexView' => '/libs/actions/customer/views/ServicesIndexView.php',
    'VenuesIndexControl' => '/libs/actions/customer/controls/VenuesIndexControl.php',
    'xhp_VenuesIndexView' => '/libs/actions/customer/views/VenuesIndexView.php',
    'VenuesControl' => '/libs/actions/customer/controls/VenuesControl.php',
    'xhp_VenuesView' => '/libs/actions/customer/views/VenuesView.php',
    'PhotographyIndexControl' => '/libs/actions/customer/controls/PhotographyIndexControl.php',
    'xhp_PhotographyIndexView' => '/libs/actions/customer/views/PhotographyIndexView.php',
    'PhotographyControl' => '/libs/actions/customer/controls/PhotographyControl.php',
    'xhp_PhotographyView' => '/libs/actions/customer/views/PhotographyView.php',
    'DecorationsIndexControl' => '/libs/actions/customer/controls/DecorationsIndexControl.php',
    'xhp_DecorationsIndexView' => '/libs/actions/customer/views/DecorationsIndexView.php',
    'DecorationsResultControl' => '/libs/actions/customer/controls/DecorationsResultControl.php',
    'xhp_DecorationsResultView' => '/libs/actions/customer/views/DecorationsResultView.php',
    'DecorationsControl' => '/libs/actions/customer/controls/DecorationsControl.php',
    'xhp_DecorationsView' => '/libs/actions/customer/views/DecorationsView.php',
    'CaterersIndexControl' => '/libs/actions/customer/controls/CaterersIndexControl.php',
    'xhp_CaterersIndexView' => '/libs/actions/customer/views/CaterersIndexView.php',
    'CaterersControl' => '/libs/actions/customer/controls/CaterersControl.php',
    'xhp_CaterersView' => '/libs/actions/customer/views/CaterersView.php',
    'ServicesControl' => '/libs/actions/customer/controls/ServicesControl.php',
    'xhp_ServicesView' => '/libs/actions/customer/views/ServicesView.php',
    'xhp_CustomerPageUI' => '/libs/actions/customer/views/elements/CustomerPageUI.php',
    'xhp_CustomerHeadUI' => '/libs/actions/customer/views/elements/CustomerHeadUI.php',
    'xhp_CustomerBodyUI' => '/libs/actions/customer/views/elements/CustomerBodyUI.php',
    'xhp_CustomerHeaderUI' => '/libs/actions/customer/views/elements/CustomerHeaderUI.php',
    'xhp_CustomerFooterUI' => '/libs/actions/customer/views/elements/CustomerFooterUI.php',
    'Login' => '/libs/actions/Login.php',
    'Action' => '/libs/actions/Action.php',
    'Error' => '/libs/actions/Error.php',
    'Server' => '/libs/core/Server.php',
    'SessionServer' => '/libs/core/SessionServer.php',
    'Post' => '/libs/core/Post.php',
    'Get' => '/libs/core/Get.php',
    'xhp_test' => '/libs/custom-xhp-lib/src/Test.php',
    'xhp_headUI' => '/libs/custom-xhp-lib/src/HeadUI.php',
    'xhp_headerUI' => '/libs/custom-xhp-lib/src/HeaderUI.php',
    'xhp_bodyUI' => '/libs/custom-xhp-lib/src/BodyUI.php',
    'xhp_pageUI' => '/libs/custom-xhp-lib/src/PageUI.php',
    'xhp_panelUI' => '/libs/custom-xhp-lib/src/PanelUI.php',
    'xhp_adminPanelUI' => '/libs/custom-xhp-lib/src/AdminPanelUI.php',
    'xhp_vendorPanelUI' => '/libs/custom-xhp-lib/src/VendorPanelUI.php',
    'xhp_footerUI' => '/libs/custom-xhp-lib/src/FooterUI.php',
    'xhp_loginUI' => '/libs/custom-xhp-lib/src/LoginUI.php',
    'xhp_adminNavUI' => '/libs/custom-xhp-lib/src/AdminNavUI.php',
    'xhp_vendorNavUI' => '/libs/custom-xhp-lib/src/VendorNavUI.php',
    'xhp_SomeTextTest' => '/libs/custom-xhp-lib/src/SomeTextTest.php',
    'xhp_AddVendorForm' => '/libs/custom-xhp-lib/src/AddVendorForm.php',
  };
  if ($classmap->containsKey($class)) {
    require_once(__DIR__.$classmap[$class]);
    return class_exists($class, /* autoload = */ false);
  }
  return false;
}
