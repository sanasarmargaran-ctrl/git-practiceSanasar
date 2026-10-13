    public function removeBook($id) {
        if (isset($this->books[$id]) && $this->isAvailable($id)) {
            unset($this->books[$id]);
        }
    }
