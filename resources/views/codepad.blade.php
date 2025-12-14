<div class="codepad container py-4">
    <h2 class="mb-3 text-white">PHP Code Tester</h2>
    <form action="{{ route('execute') }}" method="post">
        @csrf
        <div style="flex:1;">
            <label for="php_version">PHP Version:</label>
            <select name="php_version" id="php_version">
                
                <option value="8.3" selected>8.3</option>
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
            <textarea name="code" id="code" rows="15" cols="60" placeholder="Enter PHP code here">
                {{ $code ?? null }}
            </textarea><br>
            <button type="submit">Run Code</button>
        </div>
    </form>

    <div style="flex:1;">
            <label for="output">Output</label><br>
            {{-- {{ dd(get_defined_vars()) }} --}}
                {{-- {{ dd($output) }} --}}
            <textarea id="output" name="output" rows="15" cols="60" placeholder="Execution output will appear here" readonly>
                {{ $output ?? null }}
                {{-- @isset($output){{ $output }}@endisset --}}
            </textarea>
            <div style="margin-top:0.5rem;">
                <label>Total time:</label>
                <i id="total_time">{{ $execution_time ?? null . ' ms' }}</i>
            </div>
    </div>

</div>