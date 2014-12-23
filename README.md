#ValidableQuestion
Easily validate a Symfony/Console Question.

### Usage
```php
$question = new ValidableQuestion('Who are you?', ['required']);
$question = new ValidableQuestion('How old are you?', ['numeric'], 25);
$question = new ValidableQuestion('Enter your e-mail', ['required', 'email']);

$helper->ask($input, $output, $question);
```

### Why?
Validating a Question in Symfony/Console involves calling ```setValidator``` on each Question and passing the function that will actually validate it as an argument, which is awesome when you need to do a somehow complex validation, but quite annoying when you simply want to check if the value is not null, or a number, or an e-mail, etc.
```ValidableQuestion``` extends Console's ```Question```, but validates the answer against any rules specified in the background, leaving you with a nice and readable one liner.