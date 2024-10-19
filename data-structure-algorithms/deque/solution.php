<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coding Problem</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0px;
        }

        .code-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 10px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #4CAF50;
        }

        .problem-box {
            margin-top: 20px;
        }

        .problem-box h2 {
            color: #333;
        }

        .problem-box p {
            font-size: 1.1em;
        }

        .code-snippet {
            background-color: #282c34;
            color: #abb2bf;
            padding: 15px;
            border-radius: 5px;
            overflow-x: auto;
            white-space: pre-wrap;
            position: relative;
        }

        .keyword {
            color: #c678dd;
        }

        .function-name {
            color: #61dafb;
        }

        .datatype {
            color: #e06c75;
        }

        .comment {
            color: #5c6370;
            font-style: italic;
        }

        .copy-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 5px;
        }

        .copy-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="code-container">
       
        <div class="problem-box">
            <h2 style="color:green">Problem: Find the Sum of Array Elements</h2>
            <p>Given an array of integers, find the sum of its elements.</p>
            <div class="code-snippet" id="codeSnippet">
                <button class="copy-btn" onclick="copyCode(this)">Copy Code</button>
                <pre><code>
<span class="comment">// C++ code to find the sum of array elements</span>
<span class="datatype">#include</span> <span class="keyword">&lt;iostream&gt;</span>
<span class="keyword">using namespace</span> std;

<span class="datatype">int</span> <span class="function-name">arraySum</span>(<span class="datatype">int</span> arr[], <span class="datatype">int</span> n) {
    <span class="datatype">int</span> sum = 0;
    <span class="keyword">for</span> (<span class="datatype">int</span> i = 0; i < n; i++) {
        sum += arr[i];
    }
    <span class="keyword">return</span> sum;
}

<span class="keyword">int</span> <span class="function-name">main</span>() {
    <span class="datatype">int</span> arr[] = {1, 2, 3, 4, 5};
    <span class="datatype">int</span> n = <span class="keyword">sizeof</span>(arr) / <span class="keyword">sizeof</span>(arr[0]);
    cout <span class="keyword">&lt;&lt;</span> <span class="keyword">"Sum of array elements: "</span> <span class="keyword">&lt;&lt;</span> <span class="function-name">arraySum</span>(arr, n) <span class="keyword">&lt;&lt;</span> endl;
    <span class="keyword">return</span> 0;
}
                </code></pre>
            </div>
        </div>
    </div>

    <script>
        function copyCode(button) {
            const codeBlock = button.nextElementSibling.querySelector('code');
            const codeText = codeBlock.innerText;

            navigator.clipboard.writeText(codeText).then(() => {
                button.textContent = 'Copied!';
                setTimeout(() => {
                    button.textContent = 'Copy Code';
                }, 2000);
            }).catch(err => {
                console.error('Failed to copy: ', err);
            });
        }
    </script>
</body>
</html>
