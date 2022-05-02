<?php require_once('URLResolver.php');
$resolver = new mattwright\URLResolver();
print $resolver->resolveURL('https://login.payoneer.com/api/v2/internal/authorize?client_id=d5ebbf65-d4b3-49ab-b1d1-31708f8ed9db&redirect_uri=https%3A%2F%2Fmyaccount.brand.domain%2Fgw-myaccount%2Fauth%2Fcode&response_type=code&state=ref%3D1d62%26href%3Dhttps%253A%252F%252Fmyaccount.ayoneer.com%252Fma%252F&scope=myaccount')->getURL();
?>
