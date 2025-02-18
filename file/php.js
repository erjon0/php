When creating a new user (for example, during registration)
$hashedPassword = password_hash($password, PASSWORD_DEFAULT); // Hash the password

// Verify the password during login
if ($user && password_verify($password, $user['password'])) {
    // Password is correct, proceed with login
}