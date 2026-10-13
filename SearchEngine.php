<?php
class SearchEngine {
    public function find($query, array $items) {
        return array_filter($items, fn($item) => stripos($item, $query) !== false);
    }
}
