<!DOCTYPE html>
<html lang="en">
<head>
    <title>Union Types in PHP 8 Explained with Examples</title>
    <meta name="description" content="Learn how union types in PHP 8 improve type safety and modern PHP development.">
    <meta name="keywords" content="PHP 8 union types, PHP typing, PHP 8 features">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    @include('styles')
</head>
<body>
@include('header')
<div class="container my-5">
    <div class="row">
        <aside class="col-md-2 d-none d-md-block ad-placeholder"></aside>

        <main class="col-md-8 codepad">
            <h1>Union Types in PHP 8</h1>

            <p>
                PHP 8 introduces <strong>union types</strong>, allowing a variable or parameter to accept multiple types.
            </p>

            <h2>Before PHP 8</h2>
            <pre class="code-output">
function sum($a, $b) {
    return $a + $b;
}
            </pre>

            <h2>With Union Types</h2>
            <pre class="code-output">
function sum(int|float $a, int|float $b): int|float {
    return $a + $b;
}
            </pre>

            <h2>Benefits</h2>
            <ul>
                <li>Stronger type safety</li>
                <li>Better IDE support</li>
                <li>Cleaner APIs</li>
            </ul>

            <p>
                Union types make PHP feel more modern and predictable.
            </p>
        </main>

        <aside class="col-md-2 d-none d-md-block ad-placeholder"></aside>
    </div>
</div>
@include('footer')
</body>
</html>
