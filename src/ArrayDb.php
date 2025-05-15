<?php

namespace Cache;

/**
 * Simple in-memory key-value storage grouped by author.
 */
class ArrayDb {
    /**
     * Storage array structured as [author => [key => value]].
     * @var array<int|string, array<string|null, string|null>>
     */
    public array $array = [];

    /**
     * Set a value by key and author.
     * 
     * @param string|null $key The key to set.
     * @param int|string $author The author or group identifier.
     * @param string|null $value The value to store.
     * @return void
     */
    public function set(string|null $key, int|string $author, string|null $value): void {
        $this->array[$author][$key] = $value;
    }

    /**
     * Get a value by key and author.
     * 
     * @param string|null $key The key to retrieve.
     * @param int|string $author The author or group identifier.
     * @return string|null The stored value or null if not found.
     */
    public function get(string|null $key, int|string $author): null|string {
        return $this->array[$author][$key] ?? null;
    }

    /**
     * Delete a key for a given author.
     * 
     * @param string|null $key The key to delete.
     * @param int|string $author The author or group identifier.
     * @return void
     */
    public function delete(string|null $key, int|string $author): void {
        unset($this->array[$author][$key]);
    }

    /**
     * Clear all keys for a given author.
     * 
     * @param int|string $author The author or group identifier.
     * @return void
     */
    public function clear(int|string $author): void {
        unset($this->array[$author]);
    }
}
