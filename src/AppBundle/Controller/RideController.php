<?php

namespace AppBundle\Controller;

// use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use eZ\Bundle\EzPublishCoreBundle\Controller;

use eZ\Publish\API\Repository\Values\Content\Query;
use eZ\Publish\API\Repository\Values\Content\Query\Criterion;
use eZ\Publish\API\Repository\Values\Content\Query\SortClause;
use eZ\Publish\Core\Repository\Values\Content\Location;

class RideController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppBundle:Ride:index.html.twig', array(
                // ...
            ));    }

    public function viewRideAction()
    {
        return $this->render('AppBundle:Ride:viewRide.html.twig', array(
                // ...
            ));    }

    /**
       * Action used to display a ride
       *  - Adds the list of all related Points of interest to the response.
       *
       * @param Location $location
       * @param $viewType
       * @param bool $layout
       * @param array $params
       * @return mixed
       */
      public function viewRideWithPOIAction(Location $location, $viewType, $layout = false, array $params = array())
      {
        $repository = $this->getRepository();
        $contentService = $repository->getContentService();
        $currentLocation = $location;
        $currentContent = $contentService->loadContentByContentInfo($currentLocation->getContentInfo());
        $pointOfInterestListId = $currentContent->getFieldValue('points_of_interest');
        $pointOfInterestList = array();
        // foreach ($pointOfInterestListId->destinationContentIds as $pointId)
        // {
        //   $pointOfInterestList[$pointId] = $contentService->loadContent($pointId);
        // }
        return $this->get('ez_content')->viewLocation(
          $location->id,
          $viewType,
          $layout,
          array('pointOfInterestList' => $pointOfInterestList) + $params
        );
      }
}


