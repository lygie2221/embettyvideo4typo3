<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Te.Embettyvideo4typo3',
            'Video',
            [
                'Video' => 'show,list'
            ],
            // non-cacheable actions
            [
                'Video' => ''
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

    }
);
