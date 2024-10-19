<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linked List in C++ </title>
    <link rel="stylesheet" href="../../style/about-dsa.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

   
</head>
<body>

<?php include '../../backsymbol.php'; ?>
    <div class="container">
        <h1>Linked List in C++ </h1>
        <p>A <strong>linked list</strong> in C++ is a sequence container that stores elements in nodes, where each node contains a value and a pointer to the next (and sometimes the previous) node. It provides efficient insertion and deletion operations.</p>

        <h2>Why Use Linked Lists?</h2>
        <ul>
            <li><strong>Dynamic Size:</strong> Unlike arrays, linked lists can grow and shrink in size dynamically without the need to reallocate memory.</li>
            <li><strong>Efficient Insertion/Deletion:</strong> Insertion and deletion of elements, especially in the middle of the container, are more efficient in linked lists compared to arrays.</li>
            <li><strong>Memory Efficiency:</strong> Memory allocation is done on a per-node basis, which can be more efficient for certain applications.</li>
        </ul>

        <h2>Operations on Linked List</h2>

        <div class="operation">
            <h3>1. Initialization</h3>
            <p>Linked lists can be initialized in several ways:</p>
            <ul>
                <li><strong>Empty List:</strong> <code>std::list&lt;int&gt; lst;</code> - Creates an empty linked list.</li>
                <li><strong>List with Initial Values:</strong> <code>std::list&lt;int&gt; lst = {1, 2, 3};</code> - Initializes the list with given elements.</li>
                <li><strong>List with Repeated Values:</strong> <code>std::list&lt;int&gt; lst(5, 10);</code> - Creates a list with 5 elements, each initialized to 10.</li>
            </ul>
        </div>

        <div class="operation">
            <h3>2. Adding Elements</h3>
            <p>You can add elements to the linked list using the following methods:</p>
            <ul>
                <li><strong>Push Back:</strong> <code>lst.push_back(20);</code> - Adds an element to the end of the list.</li>
                <li><strong>Push Front:</strong> <code>lst.push_front(10);</code> - Adds an element to the front of the list.</li>
                <li><strong>Insert:</strong> <code>lst.insert(it, 15);</code> - Inserts an element at the position pointed to by the iterator `it`.</li>
            </ul>
        </div>

        <div class="operation">
            <h3>3. Accessing Elements</h3>
            <p>You can access elements in the linked list:</p>
            <ul>
                <li><strong>Front:</strong> <code>int first = lst.front();</code> - Returns a reference to the first element.</li>
                <li><strong>Back:</strong> <code>int last = lst.back();</code> - Returns a reference to the last element.</li>
            </ul>
        </div>

        <div class="operation">
            <h3>4. Removing Elements</h3>
            <p>You can remove elements from the linked list:</p>
            <ul>
                <li><strong>Pop Back:</strong> <code>lst.pop_back();</code> - Removes the last element of the list.</li>
                <li><strong>Pop Front:</strong> <code>lst.pop_front();</code> - Removes the first element of the list.</li>
                <li><strong>Erase:</strong> <code>lst.erase(it);</code> - Removes the element at the position pointed to by the iterator `it`.</li>
                <li><strong>Clear:</strong> <code>lst.clear();</code> - Removes all elements from the list.</li>
            </ul>
        </div>

        <div class="operation">
            <h3>5. Size and Capacity Functions</h3>
            <p>Linked lists provide functions to manage their size:</p>
            <ul>
                <li><strong>Size:</strong> <code>size_t n = lst.size();</code> - Returns the number of elements in the list.</li>
                <li><strong>Empty:</strong> <code>bool isEmpty = lst.empty();</code> - Checks if the list is empty.</li>
            </ul>
        </div>

        <h2>Use Cases</h2>
        <p>Linked lists are particularly useful in scenarios where you need efficient insertion and deletion operations, such as implementing queues, dynamic memory management, and when working with data structures that require frequent insertions and deletions.</p>
    </div>
</body>
</html>
