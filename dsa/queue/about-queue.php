<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Queue in C++ (STL)</title>
    <link rel="stylesheet" href="../../style/about-dsa.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    
</head>
<body>

<?php include '../../backsymbol.php'; ?>
    <div class="container">
        <h1>Queue in C++ (STL)</h1>
        <p>A <strong>queue</strong> is a standard container adapter in C++ that operates in a First In, First Out (FIFO) manner. It provides a way to manage elements in a sequence where the first element added is the first one to be removed.</p>

        <h2>Why Use Queue?</h2>
        <ul>
            <li><strong>FIFO Order:</strong> Queues are ideal for scenarios where order of processing matters, such as task scheduling and managing resources.</li>
            <li><strong>Efficient Operations:</strong> Provides efficient methods for adding to the back and removing from the front of the queue.</li>
            <li><strong>Memory Management:</strong> Manages elements in a sequence without requiring manual memory management.</li>
        </ul>

        <h2>Operations on Queue</h2>

        <div class="operation">
            <h3>1. Initialization</h3>
            <p>Queues can be initialized in various ways:</p>
            <ul>
                <li><strong>Default Initialization:</strong> <code>std::queue&lt;int&gt; q;</code> - Creates an empty queue.</li>
                <li><strong>Initialization with a Container:</strong> <code>std::queue&lt;int&gt; q(std::deque&lt;int&gt;());</code> - Initializes the queue with a specific container type.</li>
            </ul>
        </div>

        <div class="operation">
            <h3>2. Adding Elements</h3>
            <p>Elements can be added to the queue using:</p>
            <ul>
                <li><strong>Push:</strong> <code>q.push(10);</code> - Adds an element to the back of the queue.</li>
            </ul>
        </div>

        <div class="operation">
            <h3>3. Accessing Elements</h3>
            <p>To access elements in a queue, you can use:</p>
            <ul>
                <li><strong>Front:</strong> <code>int front = q.front();</code> - Returns a reference to the front element of the queue.</li>
                <li><strong>Back:</strong> <code>int back = q.back();</code> - Returns a reference to the last element of the queue.</li>
            </ul>
        </div>

        <div class="operation">
            <h3>4. Removing Elements</h3>
            <p>To remove elements from the queue, use:</p>
            <ul>
                <li><strong>Pop:</strong> <code>q.pop();</code> - Removes the front element from the queue.</li>
            </ul>
        </div>

        <div class="operation">
            <h3>5. Size and Empty Check</h3>
            <p>Check the size and whether the queue is empty with:</p>
            <ul>
                <li><strong>Size:</strong> <code>size_t size = q.size();</code> - Returns the number of elements in the queue.</li>
                <li><strong>Empty:</strong> <code>bool isEmpty = q.empty();</code> - Checks if the queue is empty.</li>
            </ul>
        </div>

        <h2>Use Cases</h2>
        <p>Queues are useful in various scenarios, including:</p>
        <ul>
            <li><strong>Task Scheduling:</strong> Managing tasks in order of their arrival for processing.</li>
            <li><strong>Resource Management:</strong> Handling resources in a first-come, first-served manner.</li>
            <li><strong>Buffering:</strong> Implementing buffering mechanisms where data is processed in the order it arrives.</li>
            <li><strong>Order Processing:</strong> Managing orders in systems where the first order placed is the first to be fulfilled.</li>
        </ul>
    </div>
</body>
</html>
