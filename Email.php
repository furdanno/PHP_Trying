<?php
const FREE_EMAIL_DOMAINS = [
    'gmail.com', 'yandex.ru', 'hotmail.com'
];
function getFreeDomainsCount(array $emails)
{
    $domains=array_map(fn($domain) => explode('@', $domain)[1], $emails);
    $filter=array_filter($domains, fn($pochta) => in_array($pochta, FREE_EMAIL_DOMAINS));
    return array_reduce($filter, function ($acc, $imail) {
        if (!array_key_exists($imail, $acc)) {
            $acc[$imail]=1;
        } else {
            $acc[$imail]+=1;
        }
        return $acc;
    }, []);
}

$emails = [
    'info@gmail.com',
    'info@yandex.ru',
    'info@hotmail.com',
    'mk@host.com',
    'support@hexlet.io',
    'key@yandex.ru',
    'sergey@gmail.com',
    'vovan@gmail.com',
    'vovan@hotmail.com'
];

print_r(getFreeDomainsCount($emails));