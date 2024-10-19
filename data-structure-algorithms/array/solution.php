<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotate an Array</title>
    <link rel="stylesheet" href="../../style/solution.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php include '../../backsymbol.php'; ?>
<div class="container">
    <div class="problem-box mt-4">
        <h2>Problem: Rotate an Array by a Given Number of Steps</h2>
        <p>Rotate an array <code>arr</code> of size <code>n</code> by <code>k</code> steps to the right.</p>
        
        <h3>Steps:</h3>
        <ul>
            <li>Reverse the entire array.</li>
            <li>Reverse the first <code>k</code> elements.</li>
            <li>Reverse the last <code>n-k</code> elements.</li>
        </ul>

        <h3>Example:</h3>
        <p><strong>Input:</strong> <code>arr = [1, 2, 3, 4, 5, 6, 7]</code>, <code>k = 3</code></p>
        <p><strong>Output:</strong> <code>arr = [5, 6, 7, 1, 2, 3, 4]</code></p>

        <h3>C++ Code Implementation:</h3>
        <div class="code-snippet" id="codeSnippet1">
            <button class="copy-btn" onclick="copyCode(this)">Copy Code</button>
            <pre><code class="language-cpp">
<span class="comment">// C++ code to rotate an array by k steps</span>
<span class="datatype">#include</span> <span class="keyword">&lt;iostream&gt;</span>
<span class="datatype">#include</span> <span class="keyword">&lt;vector&gt;</span>
<span class="datatype">#include</span> <span class="keyword">&lt;algorithm&gt;</span> <span class="comment">// for std::reverse</span>

<span class="keyword">using namespace</span> std;

<span class="keyword">void</span> <span class="function-name">reverseArray</span>(vector&ltint&gt&amp arr, <span class="keyword">int</span> start, <span class="keyword">int</span> end) {
    <span class="keyword">while</span> (start < end) {
        std::swap(arr[start], arr[end]);
        start++;
        end--;
    }
}

<span class="keyword">void</span> <span class="function-name">rotateArray</span>(vector&ltint&gt&amp arr, <span class="keyword">int</span> k) {
    <span class="keyword">int</span> n = arr.size();
    k = k % n;  <span class="comment">// In case k is greater than n</span>

    <span class="comment">// Step 1: Reverse the entire array</span>
    reverseArray(arr, 0, n-1);

    <span class="comment">// Step 2: Reverse the first k elements</span>
    reverseArray(arr, 0, k-1);

    <span class="comment">// Step 3: Reverse the remaining n-k elements</span>
    reverseArray(arr, k, n-1);
}

<span class="keyword">int</span> <span class="function-name">main</span>() {
    vector&ltint&gt arr = {1, 2, 3, 4, 5, 6, 7};
    <span class="keyword">int</span> k = 3;

    rotateArray(arr, k);

    <span class="comment">// Output the rotated array</span>
    <span class="keyword">for</span> (<span class="keyword">int</span> i : arr) {
        std::cout <span class="keyword">&lt;&lt;</span> i <span class="keyword">&lt;&lt;</span> <span class="keyword">" "</span>;
    }

    <span class="keyword">return</span> 0;
}
            </code></pre>
        </div>

        <h3>Output:</h3>
        <div class="code-snippet">
            <pre><code>
5 6 7 1 2 3 4
            </code></pre>
        </div>

        <h3>Explanation:</h3>
        <ol>
            <li><strong>Reverse the Entire Array:</strong> The array <code>[1, 2, 3, 4, 5, 6, 7]</code> becomes <code>[7, 6, 5, 4, 3, 2, 1]</code>.</li>
            <li><strong>Reverse the First k Elements:</strong> The first 3 elements <code>[7, 6, 5]</code> are reversed to <code>[5, 6, 7]</code>.</li>
            <li><strong>Reverse the Last n-k Elements:</strong> The remaining elements <code>[4, 3, 2, 1]</code> are reversed to <code>[1, 2, 3, 4]</code>.</li>
            <li><strong>Final Array:</strong> The array is now <code>[5, 6, 7, 1, 2, 3, 4]</code>.</li>
        </ol>

        <h3>Time Complexity:</h3>
        <p>The time complexity of this approach is <code>O(n)</code>, where <code>n</code> is the number of elements in the array.</p>
    </div>
</div>

<script src="../../../script/copy.js"></script>
</body>
</html>
