<?php

echo 123, '<br>';
print  222;
print '<br>';

echo(123);
$p = print(333);
var_dump($p);

echo '<hr>';

$name = 'Roman';
echo 'Hello \n My name is: $name', '<br>';
echo "Hello \n My name is: $name", '<br>';

echo '<hr>';

$js = <<<'JS'
document.addEventListener('DOMContentLoaded',function () {
    alert('$name');
});
JS;

// heredoc
$html = <<<HTML
    <h1>Test page</h1>
    <div>
        <p>Username is $name</p>
    </div>
    <script>$js</script>
HTML;
echo $html;

