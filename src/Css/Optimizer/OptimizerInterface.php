<?php

/**
 * This file is part of the CssJsHtmlOptimizer Project.
 *
 * @package     CssJsHtmlOptimizer
 * @author      Anatolii Belianin <belianianatoli@gmail.com>
 * @license     See LICENSE.md for license information
 * @link        https://github.com/abeliani/css-js-html-optimizer
 */

namespace Abeliani\CssJsHtmlOptimizer\Css\Optimizer;

use Abeliani\CssJsHtmlOptimizer\Css\Render\RenderInterface;

interface OptimizerInterface
{
    public function do(): OptimizerInterface;

    public function flush(?RenderInterface $render = null): string;
}