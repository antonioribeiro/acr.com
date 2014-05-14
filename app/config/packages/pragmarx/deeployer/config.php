<?php
/**
 * Part of the Deeployer package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.  It is also available at
 * the following URL: http://www.opensource.org/licenses/BSD-3-Clause
 *
 * @package    Deeployer
 * @version    1.0.0
 * @author     Antonio Carlos Ribeiro @ PragmaRX
 * @license    BSD License (3-clause)
 * @copyright  (c) 2013, PragmaRX
 * @link       http://pragmarx.com
 */

return array(

    'create_deeployer_alias' => true,

    'deeployer_alias' => 'Deeployer',

    'projects' => array(
                            array(
                                    'ssh_connection' => 'production',

                                    'git_repository' => 'https://bitbucket.org/antonioribeiro/deployer',

                                    'git_remote' => 'origin',

                                    'git_branch' => 'master',

                                    'remote_directory' => '/var/www/blog/',

                                    'composer_update' => true,

                                    'composer_optimize_autoload' => false,

                                    'composer_extra_options' => '',

                                    'composer_timeout' => 60 * 5, // 5 minutes

                                    'artisan_migrate' => false,

                                    'post_deploy_commands' => array(
                                                                        
                                                                    ),
                                ),

                            array(
                                    'ssh_connection' => 'production',

                                    'git_repository' => 'https://github.com/antonioribeiro/acr.com',

                                    'git_remote' => 'origin',

                                    'git_branch' => 'master',

                                    'remote_directory' => '/var/www/antoniocarlosribeiro.com',

                                    'composer_update' => false,

                                    'composer_optimize_autoload' => false,

                                    'composer_extra_options' => '',

                                    'composer_timeout' => 60 * 5, // 5 minutes

                                    'artisan_migrate' => false,

                                    'post_deploy_commands' => array(),
                                ),
                        ),
);
