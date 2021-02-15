<?php
namespace Te\Embettyvideo4typo3\Controller;


/***
 *
 * This file is part of the "Embetty Video 4 Typo3" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2021
 *
 ***/
/**
 * VideoController
 */
class VideoController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * videoRepository
     *
     * @var \Te\Embettyvideo4typo3\Domain\Repository\VideoRepository
     */
    protected $videoRepository = null;

    /**
     * @param \Te\Embettyvideo4typo3\Domain\Repository\VideoRepository $videoRepository
     */
    public function injectVideoRepository(\Te\Embettyvideo4typo3\Domain\Repository\VideoRepository $videoRepository)
    {
        $this->videoRepository = $videoRepository;
    }

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $videos = $this->videoRepository->findAll();
        $this->view->assign('videos', $videos);
    }

    /**
     * action show
     *
     * @param \Te\Embettyvideo4typo3\Domain\Model\Video|null $video
     * @return void
     */
    public function showAction(\Te\Embettyvideo4typo3\Domain\Model\Video $video = null)
    {
        if(!$video){
            $this->videoRepository->findAll();
            $video=$this->videoRepository->findAll()[0];
        }
        $this->view->assign('video', $video);
    }
}
