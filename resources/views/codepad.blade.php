<div class="codepad container-lg py-4">
    <div class="row gx-3">
        <!-- left ad slot -->
        <div class="col-12 col-lg-2 d-none d-lg-flex justify-content-center align-items-start" id="ad-left">
            <!-- Ad placeholder (left) -->
            <div class="ad-placeholder">Ad</div>
        </div>

        <!-- main content -->
        <div class="col-12 col-lg-8">
            <div class="card card-dark">
                <div class="card-body">
                    <form action="{{ route('execute') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="php_version" class="form-label">PHP Version</label>
                                    <select name="php_version" id="php_version" class="form-select">
                                        <option value="PHP83" selected>8.3</option>
                                        <option value="PHP82">8.2</option>
                                        <option value="PHP81">8.1</option>
                                        <option value="PHP80">8.0</option>
                                        <option value="PHP74">7.4</option>
                                        <option value="PHP73">7.3</option>
                                        <option value="PHP72">7.2</option>
                                        <option value="PHP71">7.1</option>
                                        <option value="PHP70">7.0</option>
                                        <option value="PHP56">5.6</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="code" class="form-label">Input (Code)</label>
                                    <textarea name="code" id="code" class="form-control code-input" rows="14" placeholder="Enter PHP code here">{{ $code ?? '' }}</textarea>
                                </div>

                                <div>
                                    <button type="submit" class="btn btn-orange">Run Code</button>
                                    <a href="{{ url()->current() }}" class="btn btn-secondary ms-2">Reset</a>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="output" class="form-label">Output</label>
                                    <textarea id="output" name="output" class="form-control code-output" rows="14" readonly placeholder="Execution output will appear here">{{ $output ?? '' }}</textarea>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">
                                    <div>Total time: <i id="total_time">{{ isset($execution_time) ? $execution_time . ' ms' : '--' }}</i></div>
                                    <div class="text-muted small">&nbsp;</div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- right ad slot -->
        <div class="col-12 col-lg-2 d-none d-lg-flex justify-content-center align-items-start" id="ad-right">
            <!-- Ad placeholder (right) -->
            <div class="ad-placeholder">Ad</div>
        </div>
    </div>
</div>