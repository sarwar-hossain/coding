<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stack in C++ (STL)</title>
    <link rel="stylesheet" href="../../style/about-dsa.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  
</head>
<body>

<?php include '../../backsymbol.php'; ?>
    <div class="container">
        <h1>Stack in C++ (STL)</h1>
        <p>A <strong>stack</strong> is a standard container adapter in C++ that operates in a Last In, First Out (LIFO) manner. It provides a restricted set of operations compared to other containers but is highly useful in scenarios that require stack-based operations.</p>

        <h2>Why Use Stack?</h2>
        <ul>
            <li><strong>LIFO Order:</strong> Stacks allow you to manage elements in a LIFO order, which is essential for problems involving recursion, expression evaluation, and backtracking.</li>
            <li><strong>Simple Operations:</strong> Provides simple and efficient operations for adding and removing elements from the top of the stack.</li>
            <li><strong>Memory Management:</strong> Handles memory efficiently by only managing elements at the top of the stack.</li>
        </ul>

        <h2>Operations on Stack</h2>

        <div class="operation">
            <h3>1. Initialization</h3>
            <p>Stacks can be initialized in various ways:</p>
            <ul>
                <li><strong>Default Initialization:</strong> <code>std::stack&lt;int&gt; s;</code> - Creates an empty stack.</li>
                <li><strong>Initialization with a Container:</strong> <code>std::stack&lt;int&gt; s(std::deque&lt;int&gt;());</code> - Initializes the stack with a specific container type.</li>
            </ul>
        </div>

        <div class="operation">
            <h3>2. Adding Elements</h3>
            <p>You can add elements to the stack using:</p>
            <ul>
                <li><strong>Push:</strong> <code>s.push(10);</code> - Adds an element to the top of the stack.</li>
            </ul>
        </div>

        <div class="operation">
            <h3>3. Accessing Elements</h3>
            <p>Accessing elements in a stack involves:</p>
            <ul>
                <li><strong>Top:</strong> <code>int top = s.top();</code> - Returns a reference to the top element of the stack.</li>
            </ul>
        </div>

        <div class="operation">
            <h3>4. Removing Elements</h3>
            <p>Elements can be removed from the stack using:</p>
            <ul>
                <li><strong>Pop:</strong> <code>s.pop();</code> - Removes the top element from the stack.</li>
            </ul>
        </div>

        <div class="operation">
            <h3>5. Size and Empty Check</h3>
            <p>Check the size and whether the stack is empty with:</p>
            <ul>
                <li><strong>Size:</strong> <code>size_t size = s.size();</code> - Returns the number of elements in the stack.</li>
                <li><strong>Empty:</strong> <code>bool isEmpty = s.empty();</code> - Checks if the stack is empty.</li>
            </ul>
        </div>

        <h2>Use Cases</h2>
        <p>Stacks are useful in scenarios such as:</p>
        <ul>
            <li><strong>Expression Evaluation:</strong> Used in evaluating expressions (e.g., postfix notation).</li>
            <li><strong>Function Call Management:</strong> Keeps track of function calls and local variables in recursion.</li>
            <li><strong>Undo Mechanisms:</strong> Implement undo functionality in applications by keeping track of previous states.</li>
            <li><strong>Backtracking Algorithms:</strong> Used in algorithms that involve exploring multiple possibilities (e.g., depth-first search).</li>
        </ul>
    </div>
</body>
</html>
