<?php
namespace jcherniak\yii2bugsnag;

/**
 * Handles exceptions on the console
 */
class BugsnagConsoleErrorHandler extends \yii\console\ErrorHandler
{
    use BugsnagErrorHandlerTrait;
}
