	<?php 

namespace Categoria\Controller;

use Base\Controller\AbstractController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController{

	public function indexAction(){
		return new ViewModel();
	}
}