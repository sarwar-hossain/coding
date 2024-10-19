<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graph</title>
    <link rel="stylesheet" href="../../style/about-dsa.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  
</head>
<body>

<?php   include '../../backsymbol.php'; ?>
    <div class="container">
        <h1>Graph</h1>
        <p>A <strong>graph</strong> is a data structure that consists of a set of nodes (or vertices) connected by edges. Graphs are used to represent networks, such as social networks, transportation systems, and computer networks. They are fundamental in computer science and have numerous applications in various fields.</p>

        <h2>Why Use a Graph?</h2>
        <ul>
            <li><strong>Modeling Relationships:</strong> Graphs are excellent for representing relationships and connections between entities, such as social interactions, communication networks, and more.</li>
            <li><strong>Pathfinding:</strong> Graphs are used to find the shortest path or optimal routes in navigation systems and transportation networks.</li>
            <li><strong>Network Analysis:</strong> Useful in analyzing network structures, detecting patterns, and optimizing network resources.</li>
            <li><strong>Complex Data Representation:</strong> Graphs can model complex data structures and relationships that are difficult to represent using other data structures.</li>
        </ul>

        <h2>Types of Graphs</h2>
        <ul>
            <li><strong>Directed Graph (Digraph):</strong> A graph where edges have a direction, meaning they go from one vertex to another. Example: Social media follow relationships.</li>
            <li><strong>Undirected Graph:</strong> A graph where edges do not have a direction, meaning the connection is bidirectional. Example: Friendship connections.</li>
            <li><strong>Weighted Graph:</strong> A graph where edges have weights or costs associated with them. Example: Transportation networks with distances.</li>
            <li><strong>Unweighted Graph:</strong> A graph where all edges are considered equal, with no associated weights. Example: Simple network connections.</li>
            <li><strong>Connected Graph:</strong> A graph where there is a path between every pair of vertices.</li>
            <li><strong>Disconnected Graph:</strong> A graph where some pairs of vertices do not have a path connecting them.</li>
            <li><strong>Cyclic Graph:</strong> A graph that contains at least one cycle (a path that starts and ends at the same vertex).</li>
            <li><strong>Acyclic Graph:</strong> A graph that does not contain any cycles. Example: A tree is an acyclic graph.</li>
        </ul>

        <h2>Operations on Graph</h2>

        <div class="operation">
            <h3>1. Adding and Removing Edges</h3>
            <p>Operations for modifying the graph structure:</p>
            <ul>
                <li><strong>Adding an Edge:</strong> Connects two vertices with an edge. In a directed graph, specify the direction.</li>
                <li><strong>Removing an Edge:</strong> Deletes the connection between two vertices.</li>
            </ul>
        </div>

        <div class="operation">
            <h3>2. Adding and Removing Vertices</h3>
            <p>Operations for modifying vertices:</p>
            <ul>
                <li><strong>Adding a Vertex:</strong> Inserts a new vertex into the graph and connects it to existing vertices if needed.</li>
                <li><strong>Removing a Vertex:</strong> Deletes a vertex and all edges connected to it.</li>
            </ul>
        </div>

        <div class="operation">
            <h3>3. Traversal</h3>
            <p>Traversing a graph involves visiting all vertices and edges in a specific manner:</p>
            <ul>
                <li><strong>Breadth-First Search (BFS):</strong> Visits vertices level by level from the starting vertex. Useful for finding the shortest path in unweighted graphs.</li>
                <li><strong>Depth-First Search (DFS):</strong> Visits vertices by exploring as far as possible along each branch before backtracking. Useful for pathfinding and cycle detection.</li>
            </ul>
        </div>

        <div class="operation">
            <h3>4. Finding Shortest Path</h3>
            <p>Determining the shortest path between two vertices:</p>
            <ul>
                <li><strong>Dijkstra's Algorithm:</strong> Finds the shortest path in a weighted graph with non-negative weights.</li>
                <li><strong>Bellman-Ford Algorithm:</strong> Finds the shortest path in a weighted graph, including graphs with negative weights.</li>
                <li><strong>Floyd-Warshall Algorithm:</strong> Finds shortest paths between all pairs of vertices.</li>
            </ul>
        </div>

        <div class="operation">
            <h3>5. Detecting Cycles</h3>
            <p>Determining if a graph contains a cycle:</p>
            <ul>
                <li><strong>Cycle Detection in Directed Graphs:</strong> Uses DFS to find back edges indicating cycles.</li>
                <li><strong>Cycle Detection in Undirected Graphs:</strong> Uses Union-Find data structure to detect cycles.</li>
            </ul>
        </div>

        <div class="operation">
            <h3>6. Graph Coloring</h3>
            <p>Assigning colors to vertices so that no two adjacent vertices share the same color:</p>
            <ul>
                <li><strong>Greedy Coloring:</strong> Assigns colors to vertices one by one while ensuring no two adjacent vertices have the same color.</li>
            </ul>
        </div>

        <h2>Use Cases</h2>
        <p>Graphs have a wide range of applications in various domains, including:</p>
        <ul>
            <li><strong>Social Networks:</strong> Representing and analyzing relationships between users.</li>
            <li><strong>Transportation Systems:</strong> Modeling and optimizing routes and connections in public transport networks.</li>
            <li><strong>Web Crawling:</strong> Traversing and indexing websites as a graph of hyperlinks.</li>
            <li><strong>Computer Networks:</strong> Representing and managing network topologies and data flow.</li>
        </ul>
    </div>
</body>
</html>
