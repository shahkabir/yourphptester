<div class="codepad">
    <h2>PHP Code Tester</h2>
    <form action="/run" method="post" style="display:flex; gap:1rem; align-items:flex-start;">
        @csrf
        <div style="flex:1;">
            <label for="php_version">PHP Version:</label>
            <select name="php_version" id="php_version">
                <option value="latest" selected>Latest</option>
                <option value="8.3">8.3</option>
                <option value="8.2">8.2</option>
                <option value="8.1">8.1</option>
                <option value="8.0">8.0</option>
                <option value="7.4">7.4</option>
                <option value="7.3">7.3</option>
                <option value="7.2">7.2</option>
                <option value="7.1">7.1</option>
                <option value="7.0">7.0</option>
                <option value="5.6">5.6</option>
            </select>
            <br>
            <label for="code">Code</label><br>
            <textarea name="code" id="code" rows="15" cols="60" placeholder="Enter PHP code here"></textarea><br>
            <button type="submit">Run Code</button>
        </div>

        <div style="flex:1;">
            <label for="output">Output</label><br>
            <textarea id="output" name="output" rows="15" cols="60" placeholder="Execution output will appear here" readonly>@isset($output){{ $output }}@endisset</textarea>
            <div style="margin-top:0.5rem;">
                <label>Total time:</label>
                <i id="total_time">@isset($exec_time){{ $exec_time }}@else -- @endisset</i>
            </div>
        </div>
    </form>
</div>