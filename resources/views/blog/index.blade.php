<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your PHP Tester | Blogs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    @include('styles')
</head>
@include('header')
<div class="container-fluid my-5">
    <div class="row">

        <!-- LEFT AD -->
        <aside class="col-lg-2 d-none d-lg-flex justify-content-center">
            <div class="ad-placeholder">
                
            </div>
        </aside>

        <!-- MAIN BLOG CONTENT -->
        <main class="col-lg-8 col-md-12">
            <div class="container">

                <h1 class="mb-4 text-center">PHP 8.0 Guides & Tutorials</h1>
                <p class="text-muted text-center mb-5">
                    Learn modern PHP 8 features with practical examples and real-world usage.
                </p>

                <div class="row g-4">

                    <!-- CARD 1 -->
                    <div class="col-md-4">
                        <div class="codepad h-100 d-flex flex-column">
                            <h3 class="mb-2">PHP 8 Nullsafe Operator Explained</h3>
                            <p class="text-muted flex-grow-1">
                                Avoid null errors and write cleaner PHP code using the nullsafe operator introduced in PHP 8.
                            </p>
                            <a href="/blogs/php-8-nullsafe-operator" class="btn btn-sage btn-sm mt-auto">
                                Read More
                            </a>
                        </div>
                    </div>

                    <!-- CARD 2 -->
                    <div class="col-md-4">
                        <div class="codepad h-100 d-flex flex-column">
                            <h3 class="mb-2">PHP 8 JIT: Performance Boost Explained</h3>
                            <p class="text-muted flex-grow-1">
                                Understand how PHP 8’s JIT compiler works and when it actually improves performance.
                            </p>
                            <a href="/blogs/php-8-jit-performance" class="btn btn-sage btn-sm mt-auto">
                                Read More
                            </a>
                        </div>
                    </div>

                    <!-- CARD 3 -->
                    <div class="col-md-4">
                        <div class="codepad h-100 d-flex flex-column">
                            <h3 class="mb-2">Union Types in PHP 8</h3>
                            <p class="text-muted flex-grow-1">
                                Learn how union types bring better type safety and cleaner APIs in PHP 8.
                            </p>
                            <a href="/blogs/php-8-union-types" class="btn btn-sage btn-sm mt-auto">
                                Read More
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </main>

        <!-- RIGHT AD -->
        <aside class="col-lg-2 d-none d-lg-flex justify-content-center">
            <div class="ad-placeholder">
                
            </div>
        </aside>

    </div>
</div>

@include('footer')
