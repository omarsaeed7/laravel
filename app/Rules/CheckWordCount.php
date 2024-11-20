<?php
// php artisan make:rule RuleName

// in this rule ->> RuleName = CheckWordCount
namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class CheckWordCount implements ValidationRule
{
    // we add this value to not make the number static
    protected $wordNumbers;

    function __construct($wordNumbers)
    {
        $this->wordNumbers = $wordNumbers;
    }

    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail,): void
    {
        // str_word_count() explination
        /*
        $text = explode (' ', $value);
        count($text);
        */
        if (str_word_count($value) < $this->wordNumbers) {
            $fail("the bio must be more than $this->wordNumbers Words");
        }
    }
}
