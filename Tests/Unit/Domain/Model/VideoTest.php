<?php
namespace Te\Embettyvideo4typo3\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class VideoTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Te\Embettyvideo4typo3\Domain\Model\Video
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Te\Embettyvideo4typo3\Domain\Model\Video();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle()
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'title',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getVideoidReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getVideoid()
        );
    }

    /**
     * @test
     */
    public function setVideoidForStringSetsVideoid()
    {
        $this->subject->setVideoid('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'videoid',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCoverimageReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getCoverimage()
        );
    }

    /**
     * @test
     */
    public function setCoverimageForFileReferenceSetsCoverimage()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setCoverimage($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'coverimage',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getOverlayimageReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getOverlayimage()
        );
    }

    /**
     * @test
     */
    public function setOverlayimageForFileReferenceSetsOverlayimage()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setOverlayimage($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'overlayimage',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );
    }
}
