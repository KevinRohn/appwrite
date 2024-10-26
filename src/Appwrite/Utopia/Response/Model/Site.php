<?php

namespace Appwrite\Utopia\Response\Model;

use Appwrite\Utopia\Response;
use Appwrite\Utopia\Response\Model;

class Site extends Model
{
    public function __construct()
    {
        $this
            ->addRule('$id', [
                'type' => self::TYPE_STRING,
                'description' => 'Site ID.',
                'default' => '',
                'example' => '5e5ea5c16897e',
            ])
            ->addRule('$createdAt', [
                'type' => self::TYPE_DATETIME,
                'description' => 'Site creation date in ISO 8601 format.',
                'default' => '',
                'example' => self::TYPE_DATETIME_EXAMPLE,
            ])
            ->addRule('$updatedAt', [
                'type' => self::TYPE_DATETIME,
                'description' => 'Site update date in ISO 8601 format.',
                'default' => '',
                'example' => self::TYPE_DATETIME_EXAMPLE,
            ])
            ->addRule('name', [
                'type' => self::TYPE_STRING,
                'description' => 'Site name.',
                'default' => '',
                'example' => 'My Site',
            ])
            ->addRule('enabled', [
                'type' => self::TYPE_BOOLEAN,
                'description' => 'Site enabled.',
                'default' => true,
                'example' => false,
            ])
            ->addRule('live', [
                'type' => self::TYPE_BOOLEAN,
                'description' => 'Is the site deployed with the latest configuration? This is set to false if you\'ve changed an environment variables, entrypoint, commands, or other settings that needs redeploy to be applied. When the value is false, redeploy the site to update it with the latest configuration.',
                'default' => true,
                'example' => false,
            ])
            ->addRule('framework', [
                'type' => self::TYPE_STRING,
                'description' => 'Site framework.',
                'default' => '',
                'example' => 'react',
            ])
            ->addRule('deploymentId', [
                'type' => self::TYPE_STRING,
                'description' => 'Site\'s active deployment ID.',
                'default' => '',
                'example' => '5e5ea5c16897e',
            ])
            ->addRule('vars', [
                'type' => Response::MODEL_VARIABLE,
                'description' => 'Site variables.',
                'default' => [],
                'example' => [],
                'array' => true
            ])
            ->addRule('installCommand', [
                'type' => self::TYPE_STRING,
                'description' => 'The install command used to install the site dependencies.',
                'default' => '',
                'example' => 'npm install',
            ])
            ->addRule('buildCommand', [
                'type' => self::TYPE_STRING,
                'description' => 'The build command used to build the site.',
                'default' => '',
                'example' => 'npm run build',
            ])
            ->addRule('outputDirectory', [
                'type' => self::TYPE_STRING,
                'description' => 'The directory where the site build output is located.',
                'default' => '',
                'example' => 'build',
            ])
            ->addRule('fallbackRedirect', [
                'type' => self::TYPE_STRING,
                'description' => 'The URL to redirect to if the route is not found.', //TODO: Update the description
                'default' => '',
                'example' => 'https://appwrite.io',
            ])
            ->addRule('installationId', [
                'type' => self::TYPE_STRING,
                'description' => 'Site VCS (Version Control System) installation id.',
                'default' => '',
                'example' => '6m40at4ejk5h2u9s1hboo',
            ])
            ->addRule('providerRepositoryId', [
                'type' => self::TYPE_STRING,
                'description' => 'VCS (Version Control System) Repository ID',
                'default' => '',
                'example' => 'appwrite',
            ])
            ->addRule('providerBranch', [
                'type' => self::TYPE_STRING,
                'description' => 'VCS (Version Control System) branch name',
                'default' => '',
                'example' => 'main',
            ])
            ->addRule('providerRootDirectory', [
                'type' => self::TYPE_STRING,
                'description' => 'Path to site in VCS (Version Control System) repository',
                'default' => '',
                'example' => 'sites/helloWorld',
            ])
            ->addRule('providerSilentMode', [
                'type' => self::TYPE_BOOLEAN,
                'description' => 'Is VCS (Version Control System) connection is in silent mode? When in silence mode, no comments will be posted on the repository pull or merge requests',
                'default' => false,
                'example' => false,
            ])
            ->addRule('specification', [
                'type' => self::TYPE_STRING,
                'description' => 'Machine specification for builds and executions.',
                'default' => APP_SITE_SPECIFICATION_DEFAULT,
                'example' => APP_SITE_SPECIFICATION_DEFAULT,
            ])
            ->addRule('buildRuntime', [
                'type' => self::TYPE_STRING,
                'description' => 'Site build runtime.',
                'default' => '',
                'example' => 'node-22',
            ])
            ->addRule('serveRuntime', [
                'type' => self::TYPE_STRING,
                'description' => 'Site serve runtime.',
                'default' => '',
                'example' => 'static-1',
            ])
        ;
    }

    /**
     * Get Name
     *
     * @return string
     */
    public function getName(): string
    {
        return 'Site';
    }

    /**
     * Get Type
     *
     * @return string
     */
    public function getType(): string
    {
        return Response::MODEL_SITE;
    }
}
