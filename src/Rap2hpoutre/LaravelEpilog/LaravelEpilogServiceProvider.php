<?php

namespace Rap2hpoutre\LaravelEpilog;

use Illuminate\Support\ServiceProvider;

class LaravelEpilogServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $logger = \Log::getMonolog();

		$logger->pushProcessor(function ($record) {
			if(\Auth::check()) {
				$user_info = "\n---";
				$user_info .= "\n" . 'User #' . Auth::user()->id . ' (' . Auth::user()->email . ')';
				$user_info .= ' - IP: ' . $_SERVER['REMOTE_ADDR'];
				$user_info .= "\n" . $_SERVER['REQUEST_METHOD'] . " " .url($_SERVER['REQUEST_URI']);
				if (isset($_SERVER['HTTP_REFERER'])) $user_info .= "\nReferer: " . $_SERVER['HTTP_REFERER'];
				$user_info .= "\n---";
				if (strpos($record['message'], "\n")) {
					$record['message'] = preg_replace("/\n/", $user_info . "\n", $record['message'], 1);
				} else {
					$record['message'] .= $user_info . "\n";
				}
			}
			return $record;
		});

		if (app()->environment('TODO')) {
			$slackHandler = new \Monolog\Handler\SlackHandler(
				'TODO',
				'TODO',
				'TODO',
				true,
				':skull:',
				\Monolog\Logger::ERROR
			);
			$logger->pushHandler($slackHandler);
		}
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
