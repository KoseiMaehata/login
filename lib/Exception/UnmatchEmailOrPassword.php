<?php

namespace MyApp\Exception;

class UnmatchEmailOrPassword extends \Exception {
  protected $message = 'おいおい違うぞ、お前本人か？次ミスったら50円罰金';
}