Route::get('/cyberscap', function () {
$target = "/home3/envorg/gov.lk/uploads";
$link = "/home3/envorg/gov.lk/public";
symlink($target, $link);
echo readlink($link);
});
