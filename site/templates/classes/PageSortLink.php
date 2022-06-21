<?php


class PageSortLink
{
    public function sortLink($column, $queryParam = null) {
        if($queryParam) {
            $currentString = $queryParam;
            if(substr($currentString, 0, 1) != '-') {
                return '-'.$column;
            }
        }
        return $column;
    }
}
