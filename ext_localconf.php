<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Embettyvideo4typo3',
            'Video',
            [
                \Te\Embettyvideo4typo3\Controller\VideoController::class => 'show'
            ],
            // non-cacheable actions
            [
                \Te\Embettyvideo4typo3\Controller\VideoController::class  => ''
            ]
        );
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Embettyvideo4typo3',
            'Videos',
            [
                \Te\Embettyvideo4typo3\Controller\VideoController::class  => 'list, show'
            ],
            // non-cacheable actions
            [
                \Te\Embettyvideo4typo3\Controller\VideoController::class  => ''
            ]
        );
        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        video {
                            iconIdentifier = embettyvideo4typo3-plugin-video
                            title = LLL:EXT:embettyvideo4typo3/Resources/Private/Language/locallang_db.xlf:tx_embettyvideo4typo3_video.name
                            description = LLL:EXT:embettyvideo4typo3/Resources/Private/Language/locallang_db.xlf:tx_embettyvideo4typo3_video.description
                            tt_content_defValues {
                                CType = list
                                list_type = embettyvideo4typo3_video
                            }
                        }
                        videos {
                            iconIdentifier = embettyvideo4typo3-plugin-videos
                            title = LLL:EXT:embettyvideo4typo3/Resources/Private/Language/locallang_db.xlf:tx_embettyvideo4typo3_videos.name
                            description = LLL:EXT:embettyvideo4typo3/Resources/Private/Language/locallang_db.xlf:tx_embettyvideo4typo3_videos.description
                            tt_content_defValues {
                                CType = list
                                list_type = embettyvideo4typo3_videos
                            }
                        }
                    }
                    show = *
                }
           }'
        );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);

			$iconRegistry->registerIcon(
				'embettyvideo4typo3-plugin-video',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:embettyvideo4typo3/Resources/Public/Icons/user_plugin_video.svg']
			);

        $iconRegistry->registerIcon(
            'embettyvideo4typo3-plugin-videos',
            \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
            ['source' => 'EXT:embettyvideo4typo3/Resources/Public/Icons/user_plugin_video.svg']
        );

    }
);
