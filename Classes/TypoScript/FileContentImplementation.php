<?php
namespace Carbon\FileContent\TypoScript;

/*
 * This file is part of the Carbon.FileContent package.
 *
 * (c) Handcrafted with love by Jon Uhlmann
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use TYPO3\Flow\Annotations as Flow;
use TYPO3\TypoScript\TypoScriptObjects\AbstractTypoScriptObject;
use TYPO3\Flow\Utility;


class FileContentImplementation extends AbstractTypoScriptObject
{

    /**
     * The location of the resource, must be a resource://... URI
     *
     * @return string
     */
    public function getPath()
    {
        return $this->tsValue('path');
    }

    /**
     * If specified, this resource object is used instead of the path and package information
     *
     * @return Resource
     */
    public function getResource()
    {
        return $this->tsValue('resource');
    }

    /**
     * Returns the file content of a resource. Fails silent
     *
     * @return string | boolean
     */
    public function evaluate()
    {
        $resource = $this->getResource();

        if ($resource) {
            return stream_get_contents($resource->getStream());
        }

        $path = $this->getPath();
        if ($path) {
            return Utility\Files::getFileContents($path);
        }

        return false;
    }
}
