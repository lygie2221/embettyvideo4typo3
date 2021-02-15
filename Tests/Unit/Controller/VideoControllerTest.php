<?php
namespace Te\Embettyvideo4typo3\Tests\Unit\Controller;

/**
 * Test case.
 */
class VideoControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Te\Embettyvideo4typo3\Controller\VideoController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Te\Embettyvideo4typo3\Controller\VideoController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllVideosFromRepositoryAndAssignsThemToView()
    {

        $allVideos = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $videoRepository = $this->getMockBuilder(\Te\Embettyvideo4typo3\Domain\Repository\VideoRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $videoRepository->expects(self::once())->method('findAll')->will(self::returnValue($allVideos));
        $this->inject($this->subject, 'videoRepository', $videoRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('videos', $allVideos);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenVideoToView()
    {
        $video = new \Te\Embettyvideo4typo3\Domain\Model\Video();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('video', $video);

        $this->subject->showAction($video);
    }
}
