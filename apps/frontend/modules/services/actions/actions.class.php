<?php

/**
 * services actions.
 *
 * @package    simde
 * @subpackage services
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class servicesActions extends sfActions {

    public function executeIndex(sfWebRequest $request) {
        $this->services = ServiceTable::getInstance()->getServicesList()->execute();
    }

    public function executeFollow(sfWebRequest $request) {
        $service = $this->getRoute()->getObject();
        if ($this->getUser()->getGuardUser()->isFollowerService($service)) {
            $this->getUser()->setFlash('error', 'Vous avez déjà mis en favori ce service.');
            $this->redirect('services');
        }
        $service->addFollower($this->getUser()->getGuardUser(), $service);
        $this->getUser()->setFlash('success', 'Vous avez maintenant ajouté ce service dans vos favoris.');
        $this->redirect('services');
    }

    public function executeUnfollow(sfWebRequest $request) {
        $service = $this->getRoute()->getObject();

        if (!$this->getUser()->getGuardUser()->isFollowerService($service)) {
            $this->getUser()->setFlash('error', 'Vous n\'avez pas en favori ce service.');
            $this->redirect('services');
        }
        $service->removeFollower($this->getUser()->getGuardUser(), $service);
        $this->getUser()->setFlash('success', 'Vous n\'avez plus en favori ce service.');
        $this->redirect('services');
    }

}
