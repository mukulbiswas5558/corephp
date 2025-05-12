<?php
function setFlashMessage($key, $message) {
    $_SESSION['flash'][$key] = $message;
}

/**
 * Get and remove a flash message.
 *
 * @param string $key The key for the flash message.
 * @return string|null The flash message or null if it doesn't exist.
 */
function getFlashMessage($key) {
    if (isset($_SESSION['flash'][$key])) {
        $message = $_SESSION['flash'][$key];
        removeFlashMessage($key); // Remove after fetching
        return $message;
    }
    return null;
}

/**
 * Remove a flash message by its key.
 *
 * @param string $key The key of the flash message to remove.
 */
function removeFlashMessage($key) {
    if (isset($_SESSION['flash'][$key])) {
        unset($_SESSION['flash'][$key]);
    }
}
?>