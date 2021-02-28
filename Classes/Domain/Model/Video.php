<?php
namespace Te\Embettyvideo4typo3\Domain\Model;


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
 * Video
 */
class Video extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     *
     * @var string
     */
    protected $title = '';

    /**
     * videoid
     *
     * @var string
     */
    protected $videoid = '';

    /**
     * coverimage
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $coverimage = null;


    /**
     * description
     *
     * @var string
     */
    protected $description = '';

    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the videoid
     *
     * @return string $videoid
     */
    public function getVideoid()
    {
        return $this->videoid;
    }

    /**
     * Sets the videoid
     *
     * @param string $videoid
     * @return void
     */
    public function setVideoid($videoid)
    {
        $this->videoid = $videoid;
    }

    /**
     * Returns the coverimage
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $coverimage
     */
    public function getCoverimage()
    {
        return $this->coverimage;
    }

    /**
     * Sets the coverimage
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $coverimage
     * @return void
     */
    public function setCoverimage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $coverimage)
    {
        $this->coverimage = $coverimage;
    }

    /**
     * Returns the overlayimage
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $overlayimage
     */
    public function getOverlayimage()
    {
        return $this->overlayimage;
    }

    /**
     * Sets the overlayimage
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $overlayimage
     * @return void
     */
    public function setOverlayimage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $overlayimage)
    {
        $this->overlayimage = $overlayimage;
    }

    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
}
