<?php
interface SearchInterface {
    public function search(string $term): array;
}
class SearchEngine implements SearchInterface {
    public function search(string $term): array {
        return [];
    }
}
