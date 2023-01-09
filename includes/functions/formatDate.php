<?php
function formatDate(string $__date__)
{
    $date = explode("-", $__date__);
    $old_date_format = mktime(0, 0, 0, $date[1], $date[2], $date[0]);
    $data_format = date("M j, Y", $old_date_format);
    return $data_format;
}
?>