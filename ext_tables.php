<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Embettyvideo4typo3',
            'Video',
            'video'
        );
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Embettyvideo4typo3',
            'Videos',
            'videos'
        );


        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('embettyvideo4typo3', 'Configuration/TypoScript', 'Embetty Video 4 Typo3');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_embettyvideo4typo3_domain_model_video', 'EXT:embettyvideo4typo3/Resources/Private/Language/locallang_csh_tx_embettyvideo4typo3_domain_model_video.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_embettyvideo4typo3_domain_model_video');

    }
);
