<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP 8 Nullsafe Operator Explained with Examples</title>
    <meta name="description" content="Learn how the PHP 8 nullsafe operator (?->) helps avoid null errors and simplifies PHP code with real examples.">
    <meta name="keywords" content="PHP 8 nullsafe operator, PHP 8 features, PHP null handling">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
@include('styles')
<body>
@include('header')
<div class="container my-5">
    <div class="row">
        <aside class="col-md-2 d-none d-md-block ad-placeholder"></aside>

        <main class="col-md-8 codepad">
            <h1>PHP 8 Nullsafe Operator Explained</h1>

            <p>
                PHP 8 introduced the <strong>nullsafe operator (?->)</strong>, a powerful feature that simplifies working with nullable objects.
            </p>

            <h2>Problem Before PHP 8</h2>
            <pre class="code-output">
if ($user !== null && $user->profile !== null) {
    echo $user->profile->name;
}
            </pre>

            <h2>Solution in PHP 8</h2>
            <pre class="code-output">
echo $user?->profile?->name;
            </pre>

            <h2>Why It Matters</h2>
            <ul>
                <li>Cleaner and shorter code</li>
                <li>Fewer runtime errors</li>
                <li>Better readability</li>
            </ul>

            <p>
                The nullsafe operator returns <code>null</code> instead of throwing an error if any part of the chain is null.
            </p>

            <p>
                Try this feature live using <a href="/">YourPHPTester</a>.
            </p>
        </main>

        <aside class="col-md-2 d-none d-md-block ad-placeholder"></aside>
    </div>
</div>
@include('footer')
</body>
</html>
